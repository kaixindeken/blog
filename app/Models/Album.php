<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    public function article(){
        return $this->belongsToMany(
            Article::class
        );
    }

}
