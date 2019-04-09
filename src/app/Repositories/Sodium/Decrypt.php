<?php

namespace Omatech\Mage\App\Repositories\Sodium;

class Decrypt
{
    private $pairKeys;

    public function __construct(CreatePairKeysFromKeys $pairKeys)
    {
        $this->pairKeys = $pairKeys;
    }
    public function make($file, $public_key, $private_key)
    {
        $pairKeys = $this->pairKeys->make($public_key, $private_key);

        return base64_decode(sodium_crypto_box_seal_open($file, $pairKeys));
    }
}
