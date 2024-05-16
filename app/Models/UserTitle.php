<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTitle extends Model
{
    use HasFactory;
    protected $table = 'user_title';
    protected $guarded = [];
    protected $fillable = [];
}
