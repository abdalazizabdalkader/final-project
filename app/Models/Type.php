<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Type
 * 
 * @property int $id
 * @property string $name
 * 
 * @property Collection|Car[] $cars
 *
 * @package App\Models
 */
class Type extends Model
{
	protected $table = 'types';
	protected $perPage = 20;
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function cars()
	{
		return $this->hasMany(Car::class);
	}
}
