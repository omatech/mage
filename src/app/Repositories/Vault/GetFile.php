<?php

namespace Omatech\Mage\App\Repositories\Vault;

use Omatech\Mage\App\Repositories\VaultBaseRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GetFile extends VaultBaseRepository
{
    public function make($filesystem, $id)
    {
        $vault = $this->query()
            ->find($id);

        throw_if($vault == null || $vault->model == null, new ModelNotFoundException);

        $file = $filesystem->get($vault->filepath());

        return [
            'file' => $file,
            'mimetype' => $vault->mimetype,
            'filename' => $vault->filename
        ];
    }
}
