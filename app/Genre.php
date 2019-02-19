<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // Otherwise Laravel will be looking for a 'id' column in artists table
    protected $primaryKey = 'GenreId';

    // Ignore updated_at and created_at columns
    public $timestamps = false;

    public function tracks() {
    	// genre_id expected, but ours is GenreId
    	return $this->hasMany('App\Track', 'GenreId');
    }
}
