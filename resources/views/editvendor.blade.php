@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left">Edit Vendor</div>
            <div class="clearfix"></div>
        </div>

        <div class="panel-body">

          @if(!empty($alertsuccess))
              <h3>{{$alertsuccess}}</h3>
          	<br>
          @endif
          @foreach($data as $datas)
          <form action="{{ route('vendor.update', $datas->id_vend) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label>Code*:</label>
                <input  class="form-control" type="text" name="code_vend" value="{{ $datas->code_vend }}">
                <div class="ermes">{{ ($errors->has("code_vend")) ? $errors->first("code_vend") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Name*:</label>
                <input  class="form-control" type="text" name="name_vend" value="{{ $datas->name_vend }}">
                <div class="ermes">{{ ($errors->has("name_vend")) ? $errors->first("name_vend") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input  class="form-control" type="email" name="email_vend" value="{{ $datas->email_vend }}">
                <div class="ermes">{{ ($errors->has("email_vend")) ? $errors->first("email_vend") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input class="form-control" type="text" name="phone_vend" value="{{ $datas->phone_vend }}">
                <div class="ermes">{{ ($errors->has("phone_vend")) ? $errors->first("phone_vend") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input class="form-control" type="text" name="address_vend" value="{{ $datas->address_vend }}">
                <div class="ermes">{{ ($errors->has("address_vend")) ? $errors->first("address_vend") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Status:</label>
                <select class="form-control" name="status_vend">
                    <option value="" {!! ($datas->status_vend == "") ? "selected" : "" !!} >Select Status</option>
                    <option value="y" {!! ($datas->status_vend == "y") ? "selected" : "" !!} >Active</option>
                    <option value="n" {!! ($datas->status_vend == "n") ? "selected" : "" !!} >Not Active</option>
                </select>
                <div class="ermes">{{ ($errors->has("status_vend")) ? $errors->first("status_vend") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Join Date*:</label>
                <input class="form-control" type="date" name="joindate_vend" value="{{ $datas->joindate_vend }}">
                <div class="ermes">{{ ($errors->has("joindate_vend")) ? $errors->first("joindate_vend") : "" }}</div>
            </div>

            <button class="btn btn-default" type="submit">Update</button>
            <button class="btn btn-warning" type="reset">Cancel</button>
          </form>
          @endforeach
        </div>
    </div>

@stop