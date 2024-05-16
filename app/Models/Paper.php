<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;
    protected $table = 'paper';
    protected $guarded = [];
    protected $fillable = [];

    public function status(){
        return $this->hasOne(PaperStatus::class, 'id', 'status_id');
    }
    public function authors(){
        return $this->hasMany(PaperAuthor::class, 'paper_id', 'id');
    }
}
