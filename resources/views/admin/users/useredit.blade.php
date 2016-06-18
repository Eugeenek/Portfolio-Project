@extends('admin.main')
@section('content')
 <form action="/admin/users/{{$user['id']}}" method="POST" >
{{method_field('PATCH')}}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
   	<div class="form-group">
		<label for="user-first-name">First name</label>
		<input type="text" name="first_name" class="form-control" id="user-first-name" placeholder="Email" value="{{$user['first_name']}}">
	</div>
	<div class="form-group">
		<label for="user-last-name">Last name</label>
		<input type="text" naem="last_name" class="form-control" id="user-last-name" placeholder="Email" value="{{$user['last_name']}}">
	</div>
	<div class="form-group">
		<label for="user-email">Email address</label>
		<input type="email" name="email" class="form-control" id="user-email" placeholder="Email" value="{{$user['email']}}">
	</div>
	<!-- <input type="hidden" name="user_id" value="{{$user['id']}}"> -->
	<div class="form-group">
		<label for="user-password">Password</label>
		<input type="password" class="form-control" id="user-password" placeholder="Password">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection