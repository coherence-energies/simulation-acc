<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participants extends Model
{
    use HasFactory;
    protected $table = "participants";
    protected $fillable = ['identifiantprm','nom','ville'];
    public $timestamps = false;
}
