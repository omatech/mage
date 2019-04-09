<?php

namespace Omatech\Mage\App\Repositories\Vault;

use Omatech\Mage\App\Repositories\Sodium\Encrypt;
use Omatech\Mage\App\Repositories\VaultBaseRepository;

class SaveFile extends VaultBaseRepository
{
    private $encrypt;

    public function __construct(Encrypt $encrypt)
    {
        $this->encrypt = $encrypt;
    }
    public function make($filesystem, $data, $file)
    {
        $finfo = new \finfo(FILEINFO_MIME);
        $mimetype = explode(';', $finfo->buffer($file))[0];

        if (!empty($data['public_key'])) {
            $file = $this->encrypt->make($file, $data['public_key']);
            unset($data['public_key']);
            $data['is_encrypted'] = true;
        }

        $data['mimetype'] = $mimetype;

        $resultUpload = $filesystem->put($data['path'], $file);

        if (!$resultUpload) {
            //TODO exception
        }
        
        return $this->query()->create($data);
    }
}
