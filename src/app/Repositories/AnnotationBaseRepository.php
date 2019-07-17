<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Mage\App\Models\Annotation;
use Omatech\Lars\BaseRepository;

abstract class AnnotationBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return Annotation::class;
    }
}
