<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperAuthor extends Model
{
    use HasFactory;
    protected $table = 'paper_author';
    protected $guarded = [];
    protected $fillable = [];

    public function profile(){
        return $this->belongsTo(UserProfile::class, 'profile_id', 'id');
    }
}
