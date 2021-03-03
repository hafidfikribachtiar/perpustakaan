<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    protected $fillable = ['id_status','user_name','status',
                        'address','phone_number'];
}

