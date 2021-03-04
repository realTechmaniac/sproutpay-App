<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use Illuminate\Support\Facades\Auth;
class CompanyDetailsController extends Controller
{
    public function index(){

    	return view('auth.register-company-details');
    }


    public function storeCompanyDetails(Request $request){

    	$this->validate($request, [

    		'company_name'           => ['max:100', 'string'],
    		'registration_number'    => ['unique:company_details', 'integer'],
    		'country_of_registration'=> ['string', 'max:100'],
    	]);

    	CompanyDetails::create([

    		'user_id'                 => Auth::id(),
    		'company_name'            => $request->company_name,
    		'registration_number'     => $request->registration_number,
    		'country_of_registration' => $request->country_of_registration,

    	]);


    	return redirect (route('dashboard'));

    }


}
