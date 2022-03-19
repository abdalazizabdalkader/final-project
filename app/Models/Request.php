<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Request
 *
 * @property int $id
 * @property string $agency_name
 * @property string $phone
 * @property string $email
 * @property int $case_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Case $case
 *
 * @package App\Models
 */
class Request extends Model
{
	protected $table = 'requests';
	protected $perPage = 20;

	protected $casts = [
		'case_id' => 'int'
	];

	protected $fillable = [
		'agency_name',
		'phone',
		'email',
		'case_id'
	];

	// public function case()
	// {
	// 	return $this->belongsTo(Case::class);
	// }
}
