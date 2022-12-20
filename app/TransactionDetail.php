<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    //
    public $timestamps = false;

    protected $fillable = [
         'transaction_id' ,'product_id', 'qty'
    ];
}
