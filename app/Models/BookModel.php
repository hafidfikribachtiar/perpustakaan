<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class BookModel extends Model
{
    
	public $id;
	public $title_book;
	public $type_book;
	public $author;
	public $publisher;
	public $created_at;
	public $updated_at;

}