<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    protected $fillable = ['id_book', 'borrow_number', 'return_date', 'borrow_date', 'fine', 'amount'];
}
