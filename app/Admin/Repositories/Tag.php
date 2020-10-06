<?php

namespace App\Admin\Repositories;

use App\Models\Tag as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Tag extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
