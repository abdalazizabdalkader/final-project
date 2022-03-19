<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

/**
 * Class Admin
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property Carbon|null $last_login
 * @property bool $active_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Notification[] $notifications
 *
 * @package App\Models
 */
class Admin extends Authenticatable
{
    use HasFactory,
        Notifiable,
        CanResetPassword;

    protected $guard = 'admin';
    protected $hidden= [
		'password',
        'remmber_token'
    ];
    protected $casts = [
        'email_verified_at'=>'DateTime',
        'active_id' => 'bool'
    ];
    protected $table = 'admins';

	protected $fillable = [
		'first_name',
		'last_name',
		'email',
        'password',
		'active_id'
	];

    protected $perPage = 20;


    protected $dates = [
        'last_login'
    ];
	public function notifications()
	{
		return $this->hasMany(Notification::class);
	}
}


