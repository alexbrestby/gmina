<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gmina
 * 
 * @property int $id
 * @property int $powet_id
 * @property string $g_name
 * @property int $position
 * @property bool $visible
 * @property string|null $content
 *
 * @package App\Models
 */
class Gmina extends Model
{
	protected $table = 'gmina';
	public $timestamps = false;

	protected $casts = [
		'powet_id' => 'int',
		'position' => 'int',
		'visible' => 'bool'
	];

	protected $fillable = [
		'powet_id',
		'g_name',
		'position',
		'visible',
		'content'
	];
}
