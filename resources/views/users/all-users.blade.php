@extends('layouts.master')

@section('content')
    <table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>User Id</th>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Website</th>
				<th>Company</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
                <?php
                    $address = $user->address;

                    $street = $address->street;
                    $suite = $address->suite;
                    $city = $address->city;
                    $zipcode = $address->zipcode;

                    $fullAddress = "$street $suite, $city $zipcode.";
                ?>
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->username}}</td>
				<td>{{$user->email}}</td>
                <td>{{$fullAddress}}</td>
				<td>{{$user->phone}}</td>
				<td>{{$user->website}}</td>
                <td>{{$user->company->name}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection

