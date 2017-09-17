@extends('layouts.master')

@section('content')
    <form action="{{url('/album')}}" method="POST" role="form">
        {{csrf_field()}}
        <h2>Provide Album Id</h2>

        <div class="form-group">
            <label for="">Album ID</label>
            <input type="number" class="form-control" placeholder="Album ID" name="albumId">
        </div>

        <button type="submit" class="btn btn-primary">Show Album</button>
    </form>
@endsection
