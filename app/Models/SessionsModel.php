<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class SessionsModel extends Model
{
    
	public $id;
	public $user_id;
	public $ip_address;
	public $user_agent;
	public $payload;
	public $last_activity;

}