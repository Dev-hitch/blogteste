<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
   use Notifiable;
   use SoftDeletes;


   protected $table = 'posts';

   public $timestamps = [
       true
   ];

   protected $fillable = [
       'author',
       'title',
       'subtitle',
       'content',
       'image'
   ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function categorias(){
        return $this->belongsToMany(Post::class, 'post_id', 'category_id', 'category_id');
    }

    // public function autor(){
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }


}
