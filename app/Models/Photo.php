<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 * 
 * @property string $url
 * @property int $car_id
 * 
 * @property Car $car
 *
 * @package App\Models
 */
class Photo extends Model
{
	protected $table = 'photos';
	public $incrementing = false;
	protected $perPage = 20;
	public $timestamps = false;

	protected $casts = [
		'car_id' => 'int'
	];

	protected $fillable = [
		'url',
		'car_id'
	];

	public function car()
	{
		return $this->belongsTo(Car::class);
	}
}
