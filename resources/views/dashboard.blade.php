@extends('layouts.layout')
@section('content')
<div class="container">
    <h1>Dashboard</h1>
    @foreach ($data as $item)
        <h1>{{ $item['name'] }}</h1>
        <p>{{ $item['lang'] }}</p>
    @endforeach
    <div id="UserComponent" data="{{ json_encode($data) }}"></div>
</div>
@endsection