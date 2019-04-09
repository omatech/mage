<?php

namespace Omatech\Mage\App\Repositories\Annotation;

use Omatech\Mage\App\Repositories\AnnotationBaseRepository;

class CreateAnnotation extends AnnotationBaseRepository
{
    public function make($data)
    {
        return $this->query()
            ->create($data);
    }
}
