<?php

namespace App\Admin\Repositories;

use App\Models\SiteInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class SiteInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
