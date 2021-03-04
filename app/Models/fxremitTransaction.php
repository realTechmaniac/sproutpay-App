<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fxremitTransaction extends Model
{
    use HasFactory;

     protected $fillable  = ['first_name', 'last_name', 'email', 'phone_number','sender_currency', 'recipient_currency','amount_to_send', 'recipent_total_received'];
     
}
