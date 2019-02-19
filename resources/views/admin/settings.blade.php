@extends('layout')

@section('title', 'Settings')

@section('main')
  <h1>Settings</h1>
  <form method="POST" action="/admin/settings">
  		@csrf
  		<input type="checkbox" id="maintenance" name="maintenance" {{ $value == 'on' ? 'checked' : '' }} value="{{ $value }}">
  		<label for="maintenance">&ensp;Maintenance mode &ensp;<em>(Note: Users will lose access to "Invoices" or "Playlists")</em></label>
  		<br/><br/>
  		<button type="submit" class="btn btn-primary">Save</button>
  </form>
@endsection