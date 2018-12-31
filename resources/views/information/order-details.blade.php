@extends('information.order-layout')

@section('title')
    Process order
@endsection

@section('order')
    <div class="row">
        @if($invoice->status == 7 || $invoice->status == 8)
            <div class="pull-left">
                <a href="{{route('information.returnCreate', [$invoice->id])}}"><button class="btn btn-danger">Return</button></a>
            </div>
        @endif
        <form method="post">
            {{ csrf_field() }}
            <input type="hidden" name="order" value="{{$invoice->id}}">
            @if($invoice->status == 6)
                <button type="submit" name="action" class="btn btn-danger pull-left" value="Cancel">Cancel</button>
            @endif
            @if($invoice->status == 7)
                <button type="submit" name="action" class="btn btn-success pull-right" value="Delivered">Delivered</button>
            @endif
            @if($invoice->status == 6 || $invoice->status == 9)
                <button type="submit" name="action" class="btn btn-warning pull-right" value="Process">Process</button>
            @endif
        </form>
    </div>
@endsection