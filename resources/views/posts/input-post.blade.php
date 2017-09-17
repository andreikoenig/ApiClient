@extends('layouts.master')

@section('content')
    <form action="{{url('/post')}}" method="POST" role="form">
        {{csrf_field()}}
        <h2>Provide Post Id</h2>

        <div class="form-group">
            <label for="">Post ID</label>
            <input type="number" class="form-control" placeholder="Post ID" name="postId">
        </div>

        <button type="submit" class="btn btn-primary">Show Post</button>
    </form>
@endsection

