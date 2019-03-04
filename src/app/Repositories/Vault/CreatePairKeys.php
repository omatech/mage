<?php

namespace Omatech\Mage\App\Repositories\Vault;

class CreatePairKeys
{
    public function make()
    {
        $keybox = sodium_crypto_box_keypair();

        return [
            'privateKey' => base64_encode(sodium_crypto_box_secretkey($keybox)),
            'publicKey'  => base64_encode(sodium_crypto_box_publickey($keybox))
        ];
    }
}
