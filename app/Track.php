<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    // Otherwise Laravel will be looking for a 'id' column in artists table
    protected $primaryKey = 'TrackId';

    // Ignore updated_at and created_at columns
    public $timestamps = false;

    public function genre() {
    	return $this->belongsTo('App\Genre', 'GenreId');
    }

    public function playlists() {
    	return $this->belongsToMany('App\Playlist', 'playlist_track', 'TrackId', 'PlaylistId');
    }
}
