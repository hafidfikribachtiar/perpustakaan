<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class CategoryModel extends Model
{
    
	public $id;
	public $category;
	public $description;
	public $created_at;
	public $updated_at;

}