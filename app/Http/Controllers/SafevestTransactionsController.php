<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SafevestTransaction;
use Illuminate\Support\Facades\Mail;
use App\Mail\TransactionSuccessful;

class SafevestTransactionsController extends Controller
{
    public function index(){

    	return view('pages.safevest');
    }


    public function storeData(Request $request){

    	//Validate Request::

    	$request->validate([

    		'firstName'   => 'required',

    		'lastName'    => 'required',

    		'email'       => 'required|email',

    		'phoneNumber' => 'required|max:11',  

    		'amount'      => 'required',

    		'currency'    => 'required'

    	]);


    	//logic for Safevest

  		$amount        = $request->amount;

  		$currency      = $request->currency;

  		$email          = $request->email;

  		$total_amount   = 0;

	
		if ($currency == 'USD') {
			
			$total_amount = intval($amount) * 1;

		} else if($currency == 'KES'){

			$total_amount = intval($amount) * 114;

		} elseif ($currency == 'GHS') {
			
			$total_amount = intval($amount) * 6.2;

		} elseif ($currency == 'EUR') {
			
			$total_amount = intval($amount) * 0.85 ;

		}elseif($currency == 'GBP'){

			$total_amount = intval($amount) * 0.74;

		}else{

			$total_amount = intval($amount) * 480;
		}


    	//Safe  data in the database::

    	$safevestTransaction  = SafevestTransaction::create([

    		'first_name'         => $request->firstName,

    		'last_name'          => $request->lastName,

    		'email'              => $request->lastName,

    		'phone_number'       => $request->phoneNumber,

    		'amount_due_to_pay'  => $total_amount,

    		'payment_currency'   => $request->currency,

    		'amount_to_send'    => $request->amount

    	]);

    	
    	return $safevestTransaction;


    	Mail::send(new TransactionSuccessful($safevestTransaction));

    	//collect data for flutterwave::

    	 $collected_data  = [

		   "tx_ref"          => time(),
		   "amount"          => $total_amount,
		   "currency"        => $currency,
		   "redirect_url"    => "http://127.0.0.1:8000/",
		   "payment_options" => "card",
		   "meta" => [
		      "price"=> $amount
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
