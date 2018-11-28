@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="pull-left">Create Vendor</div>
    		<div class="clearfix"></div>
    	</div>

        <div class="panel-body">

        	<form action="{{ route('vendor.store') }}" method="post">
			  {{ csrf_field() }}
			  <div class="form-group">
			  <label>Code*:</label>
			  <input  class="form-control" type="text" name="code_vend">
			  <div class="ermes">{{ ($errors->has("code_vend")) ? $errors->first("code_vend") : "" }}</div>
			  </div>
			  <div class="form-group">
			  <label>Name*:</label>
			  <input  class="form-control" type="text" name="name_vend">
			  <div class="ermes">{{ ($errors->has("name_vend")) ? $errors->first("name_vend") : "" }}</div>
			  </div>
			  <div class="form-group">
			  <label>Email:</label>
			  <input  class="form-control" type="email" name="email_vend">
			  <div class="ermes">{{ ($errors->has("email_vend")) ? $errors->first("email_vend") : "" }}</div>
			  </div>
			  <div class="form-group">
			  <label>Phone:</label>
			  <input class="form-control" type="text" name="phone_vend">
			  <div class="ermes">{{ ($errors->has("phone_vend")) ? $errors->first("phone_vend") : "" }}</div>
			  </div>
			  <div class="form-group">
			  <label>Address:</label>
			  <input class="form-control" type="text" name="address_vend">
			  <div class="ermes">{{ ($errors->has("address_vend")) ? $errors->first("address_vend") : "" }}</div>
			  </div>
			  <div class="form-group">
			  <label>Status:</label>
			  <select class="form-control" name="status_vend">
			    <option value="">Select Status</option>
				<option value="y">Active</option>
				<option value="n">Not Active</option>
			  </select>
			  <div class="ermes">{{ ($errors->has("status_vend")) ? $errors->first("status_vend") : "" }}</div>
			  </div>
			  <div class="form-group">
			  <label>Join Date*:</label>
			  <input class="form-control" type="date" name="joindate_vend">
			  <div class="ermes">{{ ($errors->has("joindate_vend")) ? $errors->first("joindate_vend") : "" }}</div>
			  </div>
			  <button class="btn btn-default" type="submit">Submit</button>
			  <button class="btn btn-warning" type="reset">Cancel</button>
			</form>
            
        </div>
    </div>
@endsection
