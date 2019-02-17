<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
   protected $fillable = ['id', 'name', 'description'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

 public function photos()
    {
      return $this->hasMany(Photo::class);
    }
}
