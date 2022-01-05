<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Story
 * 
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $caption
 * @property string $country
 * @property string $city
 * @property string $description
 * @property string $quotes
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Story extends Model
{
	protected $table = 'story';

	protected $hidden = [
		'remember_token'
	];

	protected $fillable = [
		'title',
		'image',
		'caption',
		'country',
		'city',
		'description',
		'quotes',
		'remember_token'
	];
}
