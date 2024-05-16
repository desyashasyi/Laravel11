<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $table = 'user_profile';
    protected $guarded = [];
    protected $fillable = [];

    public function title(){
        return $this->belongstTo(UserProfile::class, 'id', 'title_id');
    }
}
