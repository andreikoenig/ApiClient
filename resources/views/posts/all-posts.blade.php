@extends('layouts.master')

@section('content')
    <table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>User Id</th>
				<th>Post Id</th>
				<th>Title</th>
				<th>Body</th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
			<tr>
				<td>{{$post->userId}}</td>
				<td>{{$post->id}}</td>
				<td>{{$post->title}}</td>
				<td>{{$post->body}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
