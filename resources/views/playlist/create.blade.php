@extends('layout')

@section('title', 'Add a Playlist')

@section('main')
<h2>Create a New Playlist</h2>
  <div class="row">
    <div class="col">
      <form action="/playlists" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
          <small class="text-danger">{{$errors->first('name')}}</small>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
@endsection