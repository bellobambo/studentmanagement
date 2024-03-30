<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $primarykey = 'id';
    protected $fillable = ['enrollment_id' , 'paid_date' , 'duration' , 'amount'];
    use HasFactory;


    public function enrollment(){
        return $this->belongsTo(Enrollment::class);
    }
}
