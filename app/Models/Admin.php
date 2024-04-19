<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 * 
 * @property int $id
 * @property string $username
 * @property string $hashed_password
 *
 * @package App\Models
 */
class Admin extends Model
{
	protected $table = 'admins';
	public $timestamps = false;

	protected $hidden = [
		'hashed_password'
	];

	protected $fillable = [
		'username',
		'hashed_password'
	];
}
