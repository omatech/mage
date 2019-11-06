<?php

namespace Omatech\Mage\App\Contracts\Profile;

interface UpdateProfileInterface {
    public function make($id, $data);
}