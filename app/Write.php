<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Write extends Model
{
	protected $fillable = ['writings', 'title', 'user_id', 'bio', 'pic_path'];
}
