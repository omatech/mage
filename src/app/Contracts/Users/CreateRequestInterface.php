<?php

namespace Omatech\Mage\App\Contracts\Users;

interface CreateRequestInterface {
    public function authorize();
    public function rules();
    public function messages();
}