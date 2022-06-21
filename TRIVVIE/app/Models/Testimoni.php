<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = "Testimoni";
    protected $primaryKey = "id";
    protected $fillable = ['id','username','trip','testimoni'];

}
