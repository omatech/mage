<?php

namespace Omatech\Mage\App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Omatech\Mage\App\Events\UserCreated;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Omatech\Mage\App\Notifications\MailWelcomeNotification;
use Omatech\Mage\App\Notifications\MailResetPasswordNotification;
use Omatech\Mage\App\Notifications\MailWelcomeWithoutPasswordNotification;

#[\Illuminate\Database\Eloquent\Attributes\Fillable([
    'name', 'email', 'password', 'language',
])]
#[\Illuminate\Database\Eloquent\Attributes\Hidden([
    'password', 'remember_token',
])]
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $guard_name = 'web';

    /**
     * The event map for the model.
     *
     * @var array
     */
    #[\Override]
    protected $dispatchesEvents = [
        'created' => UserCreated::class
    ];

    /**
     * Send the registered welcome notification.
     *
     * @return void
     */
    public function sendMailWelcomeNotification()
    {
        $this->notify(new MailWelcomeNotification());
    }

    /**
     * Send the registered welcome notification with reset link.
     *
     * @return void
     */
    public function sendMailWelcomeWithoutPasswordNotification()
    {
        $token = app(\Illuminate\Auth\Passwords\PasswordBroker::class)->createToken($this);

        $this->notify(new MailWelcomeWithoutPasswordNotification($token));
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
