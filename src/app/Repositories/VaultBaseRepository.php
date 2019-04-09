<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Mage\App\Models\Vault;

abstract class VaultBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return Vault::class;
    }
}
