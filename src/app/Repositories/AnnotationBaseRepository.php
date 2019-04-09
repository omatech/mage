<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Mage\App\Models\Annotation;

abstract class AnnotationBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return Annotation::class;
    }
}
