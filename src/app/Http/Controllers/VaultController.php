<?php

namespace Omatech\Mage\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Omatech\Mage\App\Repositories\Vault\GetFile;

class VaultController extends Controller
{
   public function get($id, GetFile $file)
   {
       $disk = Storage::disk('local');
       $file = $file->make($disk, $id);

       $options = [
           "Content-Type" => $file['mimetype'],
           "Content-Disposition" => "inline; filename={$file['filename']}"
       ];

       return response($file['file'], 200, $options);
   }

    public function upload()
   {

   }
}
