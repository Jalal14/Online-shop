@extends('information.order-layout')

@section('title')
    Return order
@endsection

@section('order')
    <form method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <label>Return note: </label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <textarea name="return_note" style="width: 100%"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <a href="{{route('information.action', [$invoice->id])}}"><button class="btn btn-warning pull-left">Cancel</button></a>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <input type="hidden" name="invoice" value="{{$invoice->id}}">
                <button type="submit" class="btn btn-danger pull-right">Submit</button>
            </div>
        </div>
    </form>
@endsection