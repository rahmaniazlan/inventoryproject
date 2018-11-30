@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left">Edit Product</div>
            <div class="clearfix"></div>
        </div>

        <div class="panel-body">

          @if(!empty($alertsuccess))
              <h3 class="text-success">{{$alertsuccess}}</h3>
          	<br>
          @endif
          @foreach($data as $datas)
          <form action="{{ route('product.update', $datas->id_prod) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label>Code*:</label>
                <input  class="form-control" type="text" name="code_prod" value="{{ $datas->code_prod }}">
                <div class="text-danger">{{ ($errors->has("code_prod")) ? $errors->first("code_prod") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Name*:</label>
                <input  class="form-control" type="text" name="name_prod" value="{{ $datas->name_prod }}">
                <div class="text-danger">{{ ($errors->has("name_prod")) ? $errors->first("name_prod") : "" }}</div>
            </div>
            <div class="form-group">
                <label>Description:</label>
                <input class="form-control" type="text" name="desc_prod" value="{{ $datas->desc_prod }}">
                <div class="text-danger">{{ ($errors->has("desc_prod")) ? $errors->first("desc_prod") : "" }}</div>
            </div>

            <button class="btn btn-default" type="submit">Update</button>
            <button class="btn btn-warning" type="reset">Cancel</button>
          </form>
          @endforeach
        </div>
    </div>

@stop