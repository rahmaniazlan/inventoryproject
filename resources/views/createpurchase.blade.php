@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="pull-left">Create Purchase Order</div>
    		<div class="clearfix"></div>
    	</div>

        <div class="panel-body">

        	<form action="{{ route('purchase.store') }}" method="post">
			  {{ csrf_field() }}
			  <div class="form-group">
			  		<label>Code*:</label>
			  		<input  class="form-control" type="text" name="code_trans">
			  		<div class="text-danger">{{ ($errors->has("code_trans")) ? $errors->first("code_trans") : "" }}</div>
			  </div>
			  <div class="form-group">
			  <label>Name*:</label>
			  		<input  class="form-control" type="text" name="name_trans">
			  		<div class="text-danger">{{ ($errors->has("name_trans")) ? $errors->first("name_trans") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Product*:</label>
			  		<select class="form-control" name="prod_trans">
			    		<option value="">Select Product</option>
			    		@foreach($prod as $itemp)
						<option value="{{ $itemp->id_prod }}">{{ $itemp->name_prod }}</option>
						@endforeach
			  		</select>
			  		<div class="text-danger">{{ ($errors->has("prod_trans")) ? $errors->first("prod_trans") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Vendor*:</label>
			  		<select class="form-control" name="vend_trans">
			    		<option value="">Select Vendor</option>
			    		@foreach($vend as $itemv)
						<option value="{{ $itemv->id_vend }}">{{ $itemv->name_vend }}</option>
						@endforeach
			  		</select>
			  		<div class="text-danger">{{ ($errors->has("vend_trans")) ? $errors->first("vend_trans") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Quantity*:</label>
			  		<input class="form-control" type="text" name="qty_trans">
			  		<div class="text-danger">{{ ($errors->has("qty_trans")) ? $errors->first("qty_trans") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Description:</label>
			  		<input class="form-control" type="text" name="desc_trans">
			  		<div class="text-danger">{{ ($errors->has("desc_trans")) ? $errors->first("desc_trans") : "" }}</div>
			  </div>
			  <div class="form-group">
			  		<label>Date*:</label>
			  		<input class="form-control" type="date" name="date_trans">
			  		<div class="text-danger">{{ ($errors->has("date_trans")) ? $errors->first("date_trans") : "" }}</div>
			  </div>
			  <button class="btn btn-default" type="submit">Submit</button>
			  <button class="btn btn-warning" type="reset">Cancel</button>
			</form>
            
        </div>
    </div>
@endsection
