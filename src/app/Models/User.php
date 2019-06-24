<?php

namespace Omatech\Mage\App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Omatech\Mage\App\Events\UserCreated;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Omatech\Mage\App\Notifications\MailResetPasswordNotification;
use Omatech\Mage\App\Notifications\MailRegisteredWelcomeNotification;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'language',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => UserCreated::class
    ];

    /**
     * Send the registered welcome notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendRegisteredWelcomeNotification()
    {
        $this->notify(new MailRegisteredWelcomeNotification());
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordNotification($token));
    }
}
