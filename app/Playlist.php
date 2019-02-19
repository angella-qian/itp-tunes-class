<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $primaryKey = 'PlaylistId';

    // Ignore updated_at and created_at columns
    public $timestamps = false;

    public function tracks() {
    	return $this->belongsToMany('App\Track', 'playlist_track', 'PlaylistId', 'TrackId');
    }
}
