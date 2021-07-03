<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

	protected $table = 'posts';

	public function __construct(array $attributes = [])
    {
	    parent::__construct($attributes);
    }
}
