<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MoneyTransferTransaction;

class moneyTransferTransactionsController extends Controller
{
    public function index(){

    	return view('pages.moneytransfer');
    }


    public function storeData(Request $request){

    	$request->validate([

    		'firstName'        => 'required',

    		'lastName'         => 'required',

    		'phoneNumber'      => 'required|max:15',

    		'email'             => 'required|email',

    		'sendercurrency'    => 'required',

    		'amount'            => 'required|numeric',

    		'recipientcurrency' => 'required'

    	]);



        $amount           = $request->amount;

        $currency         = $request->sendercurrency;

        $exchangeCurrency = $request->recipientcurrency;

        $email            = $request->email;

        $total_amount     = 0;

        
    //MAIN APPLICATION LOGIC::--->


    if ($amount) {


        if ($currency === 'EUR') {

            if ($exchangeCurrency === 'KES') {

                $total_amount  = intval($amount) * 141;

            }else if($exchangeCurrency === 'GHS'){

                $total_amount  = intval($amount) * 7.6;

            }else{

                $total_amount  = intval($amount) * 595;
            }

        }else if ($currency === 'GBP') {


            if ($exchangeCurrency === 'KES') {

                 $total_amount  = intval($amount) * 158;

            }else if($exchangeCurrency === 'GHS'){

                $total_amount  = intval($amount) * 8.5;

            }else{

                $total_amount  = intval($amount)  * 660;
            }

        }else if ($currency === 'USD') {

            if ($exchangeCurrency === 'KES') {

                $total_amount  = intval($amount) * 116;

            }else if($exchangeCurrency === 'GHS'){

                $total_amount  = intval($amount) * 6.2;

            }else{

                $total_amount  = intval($amount) *495;
            }

        }


    }


    //Save the data to the database::-->


    $MoneyTransferTransaction  = MoneyTransferTransaction::create([

    	'first_name'               => $request->firstName,

    	'last_name'                => $request->lastName,

    	'email'                    => $request->email,

    	'phone_number'             => $request->phoneNumber,

    	'sender_currency'          => $request->sendercurrency,

    	'amount_to_send'           => $request->amount,

    	'recipient_currency'       => $request->recipientcurrency,

    	'recipent_total_received' => $total_amount


    ]);


    $collected_data  = [

		   "tx_ref"          => time(),
		   "amount"          => $total_amount,
		   "currency"        => $exchangeCurrency,
		   "redirect_url"    => "http://127.0.0.1:8000/",
		   "payment_options" => "card",
		   "meta" => [
		      "price"=> $total_amount
		   ],
		   "customer" => [
		      "email"=>  $email
		   ],
		   "customizations"=> [
		      "title"=> "Pied Piper Payments",
		      "description"=> "Middleout isn't free. Pay the price",
		      "logo"=> "https://assets.piedpiper.com/logo.png"
		   ]
		];


		
		//send Data to flutterwave Endpoints::-->


		$curl = curl_init();

		curl_setopt_array($curl, array(
 	    CURLOPT_URL            => "https://api.flutterwave.com/v3/payments",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING       => '',
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT       =>  0,
        CURLOPT_MAXREDIRS      => 10,
  		CURLOPT_CUSTOMREQUEST  => "POST",
  		CURLOPT_POSTFIELDS     => json_encode($collected_data),
	  		CURLOPT_HTTPHEADER => array(
	  		"Authorization: FLWSECK-0bb5bcb9f43c87d58aa78ec3f420c00e-X",
	    	"content-type: application/json",
	    	"cache-control: no-cache"	    	
	  	),
		));


		$response = curl_exec($curl);


		//Decode the JSON request

		$result = json_decode($response);


		//Check if the the result status is successful -->

		if (!empty($result)) {
			
			if ($result->status  == "success") {
			
				$link  = $result->data->link;

				return redirect()->to($link);

			}else{

				echo "We cannot process your request!";
			}


		}else{

			echo"Check your Internet Connection Please seems you are not connected!";
		}


    }
}
