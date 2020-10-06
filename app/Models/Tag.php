<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    public function article(){
        return $this->belongsToMany(
            Article::class
        );
    }

    public function parentable()
    {
        return $this->morphTo();
    }
}
