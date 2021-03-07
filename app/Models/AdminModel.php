<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class AdminModel extends Model
{
    
	public $id;
	public $admin_name;
	public $address;
	public $phone_number;
	public $password;
	public $level;
	public $created_at;
	public $updated_at;

}