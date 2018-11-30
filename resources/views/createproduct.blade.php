@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="pull-left">Create Product</div>
    		<div class="clearfix"></div>
    	</div>

        <div class="panel-body">

        	<form action="{{ route('product.store') }}" method="post">
			  {{ csrf_field() }}
			  <div class="form-group">
			  		<label>Code*:</label>
			  		<input  class="form-control" type="text" name="code_prod">
			  		<div class="text-danger">{{ ($errors->has("code_prod")) ? $errors->first("code_prod") : "" }}</div>
			  </div>
			  <div class="form-group">
			  <label>Name*:</label>
			  		<input  class="form-control" type="text" name="name_prod">
			  		<div class="text-danger">{{ ($errors->has("name_prod")) ? $errors->first("name_prod") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Description:</label>
			  		<input class="form-control" type="text" name="desc_prod">
			  		<div class="text-danger">{{ ($errors->has("desc_prod")) ? $errors->first("desc_prod") : "" }}</div>
			  </div>
			  <button class="btn btn-default" type="submit">Submit</button>
			  <button class="btn btn-warning" type="reset">Cancel</button>
			</form>
            
        </div>
    </div>
@endsection
