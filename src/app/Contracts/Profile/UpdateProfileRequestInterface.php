<?php

namespace Omatech\Mage\App\Contracts\Profile;

interface UpdateProfileRequestInterface {
    public function authorize();
    public function rules();
    public function messages();
}