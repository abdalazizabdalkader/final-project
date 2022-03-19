<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Notification extends Model
{
	protected $table = 'notifications';
	protected $perPage = 20;

	protected $casts = [
		'admin_id' => 'int',
		'agency_id' => 'int',
		'status' => 'bool',
		'from' => 'bool'
	];

	protected $fillable = [
		'title',
		'admin_id',
		'agency_id',
		'description',
		'status',
		'from'
	];

	public function admin()
	{
		return $this->belongsTo(Admin::class);
	}

	public function agency()
	{
		return $this->belongsTo(Agency::class);
	}
}
