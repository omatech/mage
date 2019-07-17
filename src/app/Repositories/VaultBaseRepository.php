<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Mage\App\Models\Vault;
use Omatech\Lars\BaseRepository;

abstract class VaultBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return Vault::class;
    }
}
