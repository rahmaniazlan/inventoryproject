@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="pull-left">Create Customer</div>
    		<div class="clearfix"></div>
    	</div>

        <div class="panel-body">

        	<form action="{{ route('customer.store') }}" method="post">
			  {{ csrf_field() }}
			  <div class="form-group">
			  		<label>Code*:</label>
			  		<input  class="form-control" type="text" name="code_cust">
			  		<div class="text-danger">{{ ($errors->has("code_cust")) ? $errors->first("code_cust") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Name*:</label>
			  		<input  class="form-control" type="text" name="name_cust">
			  		<div class="text-danger">{{ ($errors->has("name_cust")) ? $errors->first("name_cust") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Email:</label>
			  		<input  class="form-control" type="email" name="email_cust">
			  		<div class="text-danger">{{ ($errors->has("email_cust")) ? $errors->first("email_cust") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Phone:</label>
			  		<input class="form-control" type="text" name="phone_cust">
			  		<div class="text-danger">{{ ($errors->has("phone_cust")) ? $errors->first("phone_cust") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Address:</label>
			  		<input class="form-control" type="text" name="address_cust">
			  		<div class="text-danger">{{ ($errors->has("address_cust")) ? $errors->first("address_cust") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Status:</label>
			  		<select class="form-control" name="status_cust">
			    		<option value="">Select Status</option>
						<option value="y">Active</option>
						<option value="n">Not Active</option>
			  		</select>
			  		<div class="text-danger">{{ ($errors->has("status_cust")) ? $errors->first("status_cust") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Join Date*:</label>
			  		<input class="form-control" type="date" name="joindate_cust">
			  		<div class="text-danger">{{ ($errors->has("joindate_cust")) ? $errors->first("joindate_cust") : "" }}</div>
			  </div>
			  <button class="btn btn-default" type="submit">Submit</button>
			  <button class="btn btn-warning" type="reset">Cancel</button>
			</form>
            
        </div>
    </div>
@endsection
