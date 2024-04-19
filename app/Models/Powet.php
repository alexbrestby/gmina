<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Powet
 * 
 * @property int $id
 * @property string $p_name
 * @property int $position
 * @property bool $visible
 *
 * @package App\Models
 */
class Powet extends Model
{
	protected $table = 'powet';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int',
		'visible' => 'bool'
	];

	protected $fillable = [
		'p_name',
		'position',
		'visible'
	];
}
