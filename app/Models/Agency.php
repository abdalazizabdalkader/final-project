<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Agency extends Authenticatable
{

	use HasFactory,
		Notifiable,
		CanResetPassword;

	protected $hidden = [
		'password',
		'remmber_token'

	];
	protected $casts = [
		'email_verified_at' => 'DateTime',
		'active_id' => 'bool',

		'avilable' => 'bool'
	];
	protected $guard = 'agency';

	protected $table = 'agencies';
	protected $perPage = 20;

	// protected $casts = [
	// 	'subscription_id' => 'int',
	// 	'avilable' => 'bool'
	// ];

	protected $dates = [
		'end_subscription',

	];

	protected $guarded = [];

	public function subscription()
	{
		return $this->belongsTo(Subscription::class);
	}

	public function cars()
	{
		return $this->hasMany(Car::class);
	}

	public function notifications()
	{
		return $this->hasMany(Notification::class);
	}
}
