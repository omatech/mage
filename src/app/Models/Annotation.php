<?php

namespace Omatech\Mage\App\Models;

use Illuminate\Support\Carbon;
use Omatech\Mage\App\Models\User;
use Illuminate\Database\Eloquent\Model;

#[\Illuminate\Database\Eloquent\Attributes\Fillable([
    'model_type',
    'model_id',
    'user_id',
    'annotation'
])]
#[\Illuminate\Database\Eloquent\Attributes\Table(name: 'annotations')]
class Annotation extends Model
{
    public function model()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function dateTime($format)
    {
        return Carbon::parse($this->attributes['created_at'])->format($format);
    }
}
