<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscription
 *
 * @property int $id
 * @property string $type
 * @property float $price
 *
 * @property Collection|Agency[] $agencies
 *
 * @package App\Models
 */
class Subscription extends Model
{
	protected $table = 'subscriptions';
	protected $perPage = 20;
	public $timestamps = false;

	protected $casts = [
		'price' => 'float'
	];

	protected $fillable = [
		'type',
		'price'
	];

	public function agencies()
	{
		return $this->hasMany(Agency::class);
	}
}
