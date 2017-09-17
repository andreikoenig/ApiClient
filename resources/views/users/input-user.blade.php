@extends('layouts.master')

@section('content')
    <form action="{{url('/user')}}" method="POST" role="form">
        {{csrf_field()}}
        <h2>Provide User Id</h2>

        <div class="form-group">
            <label for="">User ID</label>
            <input type="number" class="form-control" placeholder="User ID" name="userId">
        </div>

        <button type="submit" class="btn btn-primary">Show User</button>
    </form>
@endsection


