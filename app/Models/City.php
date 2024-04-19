<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * 
 * @property int $id
 * @property int $gmina_id
 * @property string $city_name
 * @property int $position
 * @property bool $visible
 * @property string|null $content
 *
 * @package App\Models
 */
class City extends Model
{
	protected $table = 'city';
	public $timestamps = false;

	protected $casts = [
		'gmina_id' => 'int',
		'position' => 'int',
		'visible' => 'bool'
	];

	protected $fillable = [
		'gmina_id',
		'city_name',
		'position',
		'visible',
		'content'
	];
}
