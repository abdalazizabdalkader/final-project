<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


class Cases extends Model
{
	protected $table = 'cases';
	protected $perPage = 20;
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function order()
	{
		return $this->hasOne(Order::class);
	}

	public function requests()
	{
		return $this->hasMany(Request::class);
	}
}
