<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;

class Gallery extends Model
{

    use HasFactory;
    protected $fillable=['image'];
}
