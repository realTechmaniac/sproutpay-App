<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyTransferTransaction extends Model
{
    use HasFactory;

    protected $fillable  = ['first_name', 'last_name', 'email', 'phone_number', 'sender_currency','amount_to_send','recipient_currency', 'recipent_total_received'];
}
