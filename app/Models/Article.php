<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    public function category(){
        return $this->belongsTo(
            Category::class,
            'category_id',
            'id'
        );
    }

    public function tag(){
        return $this->belongsToMany(
            Tag::class
        );
    }

    public function view(){
        return $this->hasOne(
            View::class,
            'article_id',
            'id'
        );
    }

}
