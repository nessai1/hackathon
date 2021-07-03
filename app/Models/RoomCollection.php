<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCollection extends Model
{
    use HasFactory;

	public function get()
	{
		Room::find()
    }
}
