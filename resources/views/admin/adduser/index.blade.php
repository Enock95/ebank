@extends('layouts.dashbord')

@section('content')

	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-3">
					<h5>ALL Users</h5>
				</div>
				<div class="col-md-9 text-right">
					<a href="{{ route('adduser.create') }}" class="btn btn-primary m-b-10"><i class="fa fa-user-plus"></i>Create New User</a>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>Profile</th>
								<th>Name</th>
								<th>Email</th>
								<th>Account Number</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
								<tr>
									<td><img  style="width: 10px;" src="{{ asset('uploads/'.$user->image) }}" alt="User Profile"></td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->account_no }}</td>
									<td>
										<a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-info"></i></a>
										<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							@endforeach
						</tbody>
	
					</table>
					<div class="row justify-content-center">
						{!! $users->links('pagination::bootstrap-4') !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
