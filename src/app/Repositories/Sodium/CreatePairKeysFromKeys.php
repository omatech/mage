<?php

namespace Omatech\Mage\App\Repositories\Sodium;

class CreatePairKeysFromKeys
{
    public function make($publicKey, $privateKey)
    {
        return sodium_crypto_box_keypair_from_secretkey_and_publickey(
            base64_decode($privateKey),
            base64_decode($publicKey)
        );
    }
}
