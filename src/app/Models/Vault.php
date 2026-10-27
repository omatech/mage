<?php

namespace Omatech\Mage\App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[\Illuminate\Database\Eloquent\Attributes\Fillable([
    'model_type',
    'model_id',
    'filename',
    'mimetype',
    'size',
    'path',
    'data'
])]
#[\Illuminate\Database\Eloquent\Attributes\Table(name: 'vault')]
class Vault extends Model
{
    use SoftDeletes;

    public function model()
    {
        return $this->morphTo();
    }

    public function dateTime($format)
    {
        return Carbon::parse($this->attributes['created_at'])->format($format);
    }

    protected function data(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(get: fn($value) => json_decode((string) $value, true));
    }

    public function size()
    {
        $bytes = $this->attributes['size'];
        $decimals = 2;

        $size = ['B','KB','MB','GB','TB','PB','EB','ZB','YB'];
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / 1024 ** $factor) . @$size[$factor];
    }

    public function filepath()
    {
        return $this->attributes['path'];
    }

    public function icon()
    {
        return match ($this->attributes['mimetype']) {
            'application/pdf' => 'pdf',
            'image/jpeg' => 'jpg',
            default => 'more',
        };
    }
    protected function casts(): array
    {
        return ['data' => 'collection'];
    }
}
