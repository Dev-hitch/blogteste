<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Category extends Model
{
    use Notifiable;
    use SoftDeletes;


    protected $table = 'categories';

    public $timestamps = [
        true
    ];
    protected $casts = [
        'active' => 'boolean'
    ];

    protected $fillable = [
        'title',
        'slug',

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
    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function postagem(){
        return $this->belongsToMany(Category::class, 'post_categories', 'category_id', 'post_id');
    }

}
