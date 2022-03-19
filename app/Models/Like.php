<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Like
 * 
 * @property int $car_id
 * @property int $customer_id
 * 
 * @property Car $car
 * @property Customer $customer
 *
 * @package App\Models
 */
class Like extends Model
{
	protected $table = 'likes';
	public $incrementing = false;
	protected $perPage = 20;
	public $timestamps = false;

	protected $casts = [
		'car_id' => 'int',
		'customer_id' => 'int'
	];

	protected $fillable = [
		'car_id',
		'customer_id'
	];

	public function car()
	{
		return $this->belongsTo(Car::class);
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}
}
