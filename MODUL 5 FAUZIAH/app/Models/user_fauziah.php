<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class user_fauziah extends Model
{
    use HasFactory;
    public $table = "user_fauziah";
    protected $fillable = [
        'nama',
        'email',
        'password',
        'no_hp',
        'level',
    ];
    protected $hidden = [
        'password',
    ];
}
