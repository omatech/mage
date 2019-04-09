<?php

namespace Omatech\Mage\App\Repositories\Vault;

use GuzzleHttp\Psr7\Stream;
use Illuminate\Support\Carbon;
use Illuminate\Http\UploadedFile;
use Omatech\Mage\App\Repositories\VaultBaseRepository;

class PutFile extends VaultBaseRepository
{
    public function make($filesystem, $data, $file)
    {
        if ($file instanceof Stream) {
            if (empty($data['mimetype'])) {
                $finfo = new \finfo(FILEINFO_MIME_TYPE);
                $data['mimetype'] = $finfo->buffer($file);
            }
        } elseif ($file instanceof UploadedFile) {
            if (empty($data['mimetype'])) {
                $data['mimetype'] = $file->getMimeType();
            }
            $file = fopen($file, 'r+');
        }
        
        $extension = pathinfo($data['filename'])['extension'];
        $name = md5(Carbon::now()->timestamp.'_'.$data['filename']).'.'.$extension;

        $filepath = $data['path'].'/'.$name;
        $filesystem->put($filepath, $file);

        $data['size'] = filesize($filesystem->path($filepath));
        $data['path'] = $filepath;
        
        return $this->query()->create($data);
    }
}
