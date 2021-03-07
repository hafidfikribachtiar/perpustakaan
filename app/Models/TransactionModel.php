<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class TransactionModel extends Model
{
    
	public $id;
	public $id_book;
	public $borrow_number;
	public $return_date;
	public $borrow_date;
	public $fine;
	public $amount;
	public $created_at;
	public $updated_at;

}