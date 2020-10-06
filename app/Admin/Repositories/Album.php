<?php

namespace App\Admin\Repositories;

use App\Models\Album as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Album extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
