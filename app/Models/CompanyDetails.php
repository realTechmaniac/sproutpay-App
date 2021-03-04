<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    use HasFactory;


    protected $fillable = ['company_name', 'registration_number', 'country_of_registration'];


    //One to One relationship 


    public function user(){


    	return $this->belongsTo(User::class, 'user_id', 'id');
    	
    }
}
