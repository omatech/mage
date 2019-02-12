<?php

namespace Omatech\Mage\App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use RuntimeException;

abstract class BaseRepository
{
    /**
     * @return mixed
     */
    abstract public function model() : String;

    /**
     * @return Builder
     */
    private function makeModel() : Builder
    {
        $model = app()->make($this->model());

        if (!$model instanceof Model) {
            throw new RuntimeException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $model->newQuery();
    }

    public function query() : Builder
    {
        return $this->makeModel();
    }
}
