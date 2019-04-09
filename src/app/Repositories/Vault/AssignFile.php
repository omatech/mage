<?php

namespace Omatech\Mage\App\Repositories\Vault;

use Omatech\Mage\App\Repositories\VaultBaseRepository;

class AssignFile extends VaultBaseRepository
{
    public function make($id, $data)
    {
        return $this->query()
            ->where('id', $id)
            ->update($data);
    }
}
