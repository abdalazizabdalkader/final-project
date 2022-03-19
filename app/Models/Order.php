<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $car_id
 * @property int $customer_id
 * @property int $case_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Car $car
 * @property Case $case
 * @property Customer $customer
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	public $incrementing = false;
	protected $perPage = 20;

	protected $casts = [
		'car_id' => 'int',
		'customer_id' => 'int',
		'case_id' => 'int'
	];

	protected $fillable = [
		'car_id',
		'customer_id',
		'case_id'
	];

	public function car()
	{
		return $this->belongsTo(Car::class);
	}

	public function case()
	{
		return $this->belongsTo(Case::class);
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}
}
