<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Citizen
 * 
 * @property int $id
 * @property bool|null $ree
 * @property int|null $num_zap
 * @property string|null $f_name
 * @property string|null $l_name
 * @property int|null $year
 * @property int|null $month
 * @property int|null $day
 * @property string|null $dad
 * @property string|null $mom
 * @property string|null $prof
 * @property string|null $nadel
 * @property string|null $wozwrat
 * @property string|null $uwagi
 * @property int|null $city_id
 * @property string|null $city
 * @property string|null $gmina
 * @property string|null $powet
 * @property string|null $city_b
 * @property string|null $gmina_b
 * @property string|null $powet_b
 * @property int|null $position
 * @property bool|null $visible
 * @property string|null $content
 * @property int|null $fond
 * @property int|null $delo
 * @property string|null $opis
 *
 * @package App\Models
 */
class Citizen extends Model
{
	protected $table = 'citizen';
	public $timestamps = false;

	protected $casts = [
		'ree' => 'bool',
		'num_zap' => 'int',
		'year' => 'int',
		'month' => 'int',
		'day' => 'int',
		'city_id' => 'int',
		'position' => 'int',
		'visible' => 'bool',
		'fond' => 'int',
		'delo' => 'int'
	];

	protected $fillable = [
		'ree',
		'num_zap',
		'f_name',
		'l_name',
		'year',
		'month',
		'day',
		'dad',
		'mom',
		'prof',
		'nadel',
		'wozwrat',
		'uwagi',
		'city_id',
		'city',
		'gmina',
		'powet',
		'city_b',
		'gmina_b',
		'powet_b',
		'position',
		'visible',
		'content',
		'fond',
		'delo',
		'opis'
	];
}
