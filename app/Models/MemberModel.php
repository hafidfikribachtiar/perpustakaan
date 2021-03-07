<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class MemberModel extends Model
{
    
	public $id;
	public $status_id;
	public $member_name;
	public $status;
	public $address;
	public $phone_number;
	public $created_at;
	public $updated_at;

}