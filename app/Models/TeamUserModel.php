<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class TeamUserModel extends Model
{
    
	public $id;
	public $team_id;
	public $user_id;
	public $role;
	public $created_at;
	public $updated_at;

}