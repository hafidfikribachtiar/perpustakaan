<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class TeamsModel extends Model
{
    
	public $id;
	public $user_id;
	public $name;
	public $personal_team;
	public $created_at;
	public $updated_at;

}