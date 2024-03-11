<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $primarykey = 'id';
    protected $fillable = ['name' , 'address' , 'mobile'];
    use HasFactory;
}