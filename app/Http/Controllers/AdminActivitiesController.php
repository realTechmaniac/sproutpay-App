<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CompanyDetails;
use App\Models\fxremitTransaction;
use App\Models\SafevestTransaction;
use App\Models\MoneyTransferTransaction;
use DB;

class AdminActivitiesController extends Controller
{
    pubLic function showDashboard(){

    	return view('admin.dashboard');

    }


    public function showIndividuals(){


    	//Get all individuals from the Database::--> 

    	$individuals = DB::table('users')
			    		->where('user_type', 'individual')
			    		->where('role', 'regular')
			    		->get();

    	return view('admin.allindividuals', compact('individuals'));

    }


     public function showCompanies(){


     	//Get all individuals registered as companies::

    	$individuals = DB::table('users')
			    		->where('user_type', 'company')
			    		->where('role', 'regular')
			    		->get();

    	return view('admin.allcompanies', compact('individuals'));

    }


    public function getSafevestTransactions(){


    	$transactions = SafevestTransaction::all();

    	return view('transactions.safevestTransaction')->withTransactions($transactions);

    }



    public function getFxremitTransactions(){


    	$transactions = fxremitTransaction::all();

    	return view('transactions.safevestTransaction')->withTransactions($transactions);

    }


    public function getMoneyTransferTransactions(){


    	$transactions = MoneyTransferTransaction::all();

    	return view('transactions.moneyTransferTransaction')->withTransactions($transactions);

    }

}
