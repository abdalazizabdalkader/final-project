<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
	protected $table = 'cars';
	protected $perPage = 20;

	protected $casts = [
		'agency_id' => 'int',
		'brand_id' => 'int',
		'color_id' => 'int',
		'type_id' => 'int',
		'country_id' => 'int',
		'avilable' => 'bool',
		'running_volume' => 'int',
		'cylinders' => 'int',
		'horsepower' => 'int',
		'consumption' => 'int',
		'price' => 'float',
		'views' => 'int'
	];

	protected $fillable = [
		'name',
		'agency_id',
		'brand_id',
		'color_id',
		'type_id',
		'country_id',
		'avilable',
		'running_volume',
		'cylinders',
		'horsepower',
		'consumption',
		'price',
		'views'
	];

	public function agency()
	{
		return $this->belongsTo(Agency::class);
	}

	public function brand()
	{
		return $this->belongsTo(Brand::class);
	}

	public function color()
	{
		return $this->belongsTo(Color::class);
	}

	public function country()
	{
		return $this->belongsTo(Country::class);
	}

	public function type()
	{
		return $this->belongsTo(Type::class);
	}

	public function like()
	{
		return $this->hasOne(Like::class);
	}

	public function order()
	{
		return $this->hasOne(Order::class);
	}

	public function photo()
	{
		return $this->hasOne(Photo::class);
	}
}
