<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kps extends Model
{
    use HasFactory;

    protected $table ='kps';

    public function User()
    {
        return $this->hasOne(User::class, 'username', 'id'); 
    }
}
