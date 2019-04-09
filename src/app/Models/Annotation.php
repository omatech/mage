<?php

namespace Omatech\Mage\App\Models;

use Illuminate\Support\Carbon;
use Omatech\Mage\App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Annotation extends Model
{
    protected $table = 'annotations';

    protected $fillable = [
        'model_type',
        'model_id',
        'user_id',
        'annotation'
    ];

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
