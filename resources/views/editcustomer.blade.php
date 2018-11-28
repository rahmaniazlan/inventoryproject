@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left">Edit Customer</div>
            <div class="clearfix"></div>
        </div>

        <div class="panel-body">

          @if(!empty($alertsuccess))
              <h3>{{$alertsuccess}}</h3>
          	<br>
          @endif
          @foreach($data as $datas)
          <form action="{{ route('customer.update', $datas->id_cust) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label>Code*:</label>
                <input  class="form-control" type="text" name="code_cust" value="{{ $datas->code_cust }}">
                <div class="ermes">{{ ($errors->has("code_cust")) ? $errors->first("code_cust") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Name*:</label>
                <input  class="form-control" type="text" name="name_cust" value="{{ $datas->name_cust }}">
                <div class="ermes">{{ ($errors->has("name_cust")) ? $errors->first("name_cust") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input  class="form-control" type="email" name="email_cust" value="{{ $datas->email_cust }}">
                <div class="ermes">{{ ($errors->has("email_cust")) ? $errors->first("email_cust") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input class="form-control" type="text" name="phone_cust" value="{{ $datas->phone_cust }}">
                <div class="ermes">{{ ($errors->has("phone_cust")) ? $errors->first("phone_cust") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input class="form-control" type="text" name="address_cust" value="{{ $datas->address_cust }}">
                <div class="ermes">{{ ($errors->has("address_cust")) ? $errors->first("address_cust") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Status:</label>
                <select class="form-control" name="status_cust">
                    <option value="" {!! ($datas->status_cust == "") ? "selected" : "" !!} >Select Status</option>
                    <option value="y" {!! ($datas->status_cust == "y") ? "selected" : "" !!} >Active</option>
                    <option value="n" {!! ($datas->status_cust == "n") ? "selected" : "" !!} >Not Active</option>
                </select>
                <div class="ermes">{{ ($errors->has("status_cust")) ? $errors->first("status_cust") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Join Date*:</label>
                <input class="form-control" type="date" name="joindate_cust" value="{{ $datas->joindate_cust }}">
                <div class="ermes">{{ ($errors->has("joindate_cust")) ? $errors->first("joindate_cust") : "" }}</div>
            </div>

            <button class="btn btn-default" type="submit">Update</button>
            <button class="btn btn-warning" type="reset">Cancel</button>
          </form>
          @endforeach
        </div>
    </div>

@stop