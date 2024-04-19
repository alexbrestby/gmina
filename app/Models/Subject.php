<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subject
 * 
 * @property int $id
 * @property string $menu_name
 * @property int $position
 * @property bool $visible
 *
 * @package App\Models
 */
class Subject extends Model
{
	protected $table = 'subjects';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int',
		'visible' => 'bool'
	];

	protected $fillable = [
		'menu_name',
		'position',
		'visible'
	];
}
