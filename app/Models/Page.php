<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 * 
 * @property int $id
 * @property int $subject_id
 * @property string $menu_name
 * @property int $position
 * @property bool $visible
 * @property string|null $content
 *
 * @package App\Models
 */
class Page extends Model
{
	protected $table = 'pages';
	public $timestamps = false;

	protected $casts = [
		'subject_id' => 'int',
		'position' => 'int',
		'visible' => 'bool'
	];

	protected $fillable = [
		'subject_id',
		'menu_name',
		'position',
		'visible',
		'content'
	];
}
