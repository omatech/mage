<?php

namespace Omatech\Mage\App\Contracts\Users;

interface UpdateRequestInterface {
    public function authorize();
    public function rules();
    public function messages();
}