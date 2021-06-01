<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Forum extends Model
{
    use Sluggable;
    use HasFactory;
    protected $table = 'forum';
    protected $guarded = ['id'];
    
    public function sluggable(){
        return[
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function komentar(){
        return $this->hasMany(Komentar::class);
    }
}
