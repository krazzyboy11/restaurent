@extends('layouts.app')

@section('title','Order')
@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partial.msg')
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Reservations</h4>

                    </div>
                    <div class="card-content table-responsive">
                        <table id="slidertable" class="table table-striped table-bordered" style="width:100%">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Zip Code</th>
                                <th>Order Items</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($orders as $key=>$order)
                                   <tr>
                                     <td>{{$key + 1}}</td>
                                     <td>{{$order->user_first_name}} {{$order->user_last_name}}</td>
                                     <td>{{$order->user_phone_no}}</td>
                                     <td>{{$order->user_email}}</td>
                                     <td>{{$order->user_address}}</td>
                                     <td>{{$order->user_city}}</td>
                                     <td>{{$order->user_zip_code}}</td>
                                     <td><a class="btn btn-info" href="{{route('order.item',$order->id)}}">Show</a></td>
                                     <td>
                                         @if($order->status == true)
                                             <span class="label label-info">Confirmed</span>
                                         @else
                                             <span class="label label-danger">not Confirmed yet</span>
                                         @endif

                                     </td>
                                     <td>{{$order->created_at}}</td>
                                     <td>{{$order->updated_at}}</td>

                                     <td>
                                         @if($order->status == false)

                                             <form id="status-form-{{ $order->id }}" action="{{route('order.status',$order->id)}}" style="display: none;" method="post">
                                                 {{ csrf_field() }}

                                             </form>
                                             <button type="button" class="btn btn-info btn-sm" onclick="if (confirm(
                                                     'Are you verify this request by phone?'
                                                     )){
                                                     event.preventDefault();
                                                     document.getElementById('status-form-{{$order->id}}').submit();
                                                     }else{
                                                     event.preventDefault();
                                                     } ">
                                                 <i class="material-icons ">done</i></button>
                                         @endif


                                         <form id="delete-form-{{ $order->id }}" action="{{route('order.destroy',$order->id)}}" style="display: none;" method="post">
                                             {{ csrf_field() }}
                                             {{ method_field('DELETE') }}
                                         </form>
                                      <button type="button" class="btn btn-danger btn-sm" onclick="if (confirm(
                                          'Are you sure? You want to delete this'
                                      )){
                                          event.preventDefault();
                                          document.getElementById('delete-form-{{$order->id}}').submit();
                                      }else{
                                          event.preventDefault();
                                              } ">
                                          <i class="material-icons ">delete</i></button></td>
                                   </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
</script>
<script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js">
</script>
<script>
$(document).ready( function () {
  $('#slidertable').DataTable();
} );
</script>
@endpush
