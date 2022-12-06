<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'location',
        'usernote',
    ];
    
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    
}
