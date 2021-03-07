<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class TeamInvitationsModel extends Model
{
    
	public $id;
	public $team_id;
	public $email;
	public $role;
	public $created_at;
	public $updated_at;

}