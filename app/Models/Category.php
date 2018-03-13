<?php

namespace Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
		protected $table = 'categories';

    protected $fillable = [
			'name', 'slug', 'body'
		];

    public function posts(){
    	return $this->hasMany(Post::class);
    }
}
