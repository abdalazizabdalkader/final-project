<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class Customer
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Like $like
 * @property Order $order
 *
 * @package App\Models
 */
class Customer extends Authenticatable
{
    use HasFactory,
        Notifiable,
        CanResetPassword;

        protected $hidden= [
            'password',
            'remmber_token'

        ];
        protected $casts = [
            'email_verified_at'=>'DateTime',
        ];


	protected $table = 'customers';
	protected $perPage = 20;
	protected $guard = 'customer';

	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'password'
	];

	public function like()
	{
		return $this->hasOne(Like::class);
	}

	public function order()
	{
		return $this->hasOne(Order::class);
	}
}
