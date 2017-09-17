@extends('layouts.master')

@section('content')
    <ul class="list-group">
        <li class="list-group-item"><a href="{{url('/posts')}}">Show all Posts</a></li>
        <li class="list-group-item"><a href="{{url('/albums')}}">Show all Albums</a></li>
        <li class="list-group-item"><a href="{{url('/users')}}">Show all Users</a></li>
    </ul>

    <ul class="list-group">
        <li class="list-group-item"><a href="{{url('/post')}}">Show a Post by Id</a></li>
        <li class="list-group-item"><a href="{{url('/album')}}">Show an Album by Id</a></li>
        <li class="list-group-item"><a href="{{url('/user')}}">Show a User by Id</a></li>
    </ul>

@endsection
