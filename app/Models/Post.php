<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

 protected $fillable=[

   'title',
   'content',
   'user_id',
   'photo',
   'created_at',
   'slug',

 ];
 public function user()
{
    return $this->belongsTo(User::class);
}
public function likes()
{
    return $this->hasMany(Like::class);
}

}
