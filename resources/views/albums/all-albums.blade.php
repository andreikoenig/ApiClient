@extends('layouts.master')

@section('content')
    <table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>User Id</th>
				<th>Id</th>
				<th>Title</th>
			</tr>
		</thead>
		<tbody>
			@foreach($albums as $album)
			<tr>
				<td>{{$album->userId}}</td>
				<td>{{$album->id}}</td>
				<td>{{$album->title}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection

