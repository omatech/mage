<?php

namespace Omatech\Mage\App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vault extends Model
{
    use SoftDeletes;
    
    protected $table = 'vault';
    protected $casts = ['data' => 'collection'];

    protected $fillable = [
        'model_type',
        'model_id',
        'filename',
        'mimetype',
        'size',
        'path',
        'data'
    ];

    public function model()
    {
        return $this->morphTo();
    }

    public function dateTime($format)
    {
        return Carbon::parse($this->attributes['created_at'])->format($format);
    }

    public function getDataAttribute($value)
    {
        return json_decode($value, true);
    }

    public function size()
    {
        $bytes = $this->attributes['size'];
        $decimals = 2;

        $size = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
    }

    public function filepath()
    {
        return $this->attributes['path'];
    }

    public function icon()
    {
        switch ($this->attributes['mimetype']) {
            case 'application/pdf':
                return 'pdf';
            case 'image/jpeg':
                return 'jpg';
            default:
                return 'more';
        }
    }
}
