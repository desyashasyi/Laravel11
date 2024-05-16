<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperStatus extends Model
{
    use HasFactory;
    protected $table = 'paper_status';
    protected $guarded = [];
    protected $fillable = [];
}
