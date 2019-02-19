@extends('layout')

@section('title', 'Playlists')

@section('main')
  <div class="row">
    <div class="col-3">
    	<h2>Playlists</h2>
    	<a class="btn btn-primary" href="/playlists/new">Add a Playlist</a>
      <ul>
        @forelse($playlists as $playlist)
          <li>
            <a href="/playlists/{{$playlist->PlaylistId}}">
            	{{$playlist->Name}}
            </a>
          </li>
        @empty
          <li>No playlists</li>
        @endforelse
      </ul>
    </div>
    <div class="col-9">
    	<h2>Tracks</h2>
      <ul>
      		@forelse($tracks as $track)
      		<li>
      			{{$track->Name}}
      		</li>
	      @empty
	      	<li>No tracks for this playlist</li>
	      @endforelse

      </ul>
    </div>
  </div>
@endsection