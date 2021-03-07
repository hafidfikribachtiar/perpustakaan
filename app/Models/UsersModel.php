<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class UsersModel extends Model
{
    
	public $id;
	public $name;
	public $email;
	public $email_verified_at;
	public $password;
	public $two_factor_secret;
	public $two_factor_recovery_codes;
	public $remember_token;
	public $current_team_id;
	public $profile_photo_path;
	public $created_at;
	public $updated_at;

}