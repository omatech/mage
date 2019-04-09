<?php

namespace Omatech\Mage\App\Repositories\Sodium;

class Encrypt
{
    public function make($data, $publicKey)
    {
        return sodium_crypto_box_seal(base64_encode($data), base64_decode($publicKey));
    }
}
