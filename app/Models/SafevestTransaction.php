<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafevestTransaction extends Model
{
    use HasFactory;

    protected $fillable  = ['first_name', 'last_name', 'email', 'phone_number', 'amount_due_to_pay', 'payment_currency', 'amount_to_send'];
}
