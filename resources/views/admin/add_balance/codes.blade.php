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
								<th>Name</th>                                								
								<th>Email</th>
								<th>Account Number</th>
								<th>Cost of Transfert code</th>
								<th>VAT/TAX Code</th>
								<th>IMF Code</th>
								<th>ATC code</th>
								<th>Telex Code</th>
								

							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
								<tr>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->account_no }}</td>
									<td>{{ $user->cot }}</td>
									<td> {{ $user->tax }} </td>
									<td>{{ $user->imf }}</td>
									<td>{{ $user->atc }}</td>
									<td>{{ $user->telex }}</td>
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
