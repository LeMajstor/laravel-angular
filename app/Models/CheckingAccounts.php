<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckingAccounts extends Model
{
    use HasFactory;

    public $table = "checking_accounts" ;
    public $fillable = [
        'account_name',
        'agency',
        'account_number',
        'balance'
    ];

    public $timestamps = true;
}
