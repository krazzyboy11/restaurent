@extends('layouts.app')

@section('title','Contact Message')
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
                                <th>Email</th>
                                <th>Message</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($messages as $key=>$message)
                                   <tr>
                                     <td>{{$key + 1}}</td>
                                     <td>{{$message->name}}</td>
                                     <td>{{$message->email}}</td>
                                     <td>{{$message->message}}</td>
                                     <td>{{$message->created_at}}</td>
                                     <td>{{$message->updated_at}}</td>

                                     <td>
                                         <form id="delete-form-{{ $message->id }}" action="{{route('contact.destroy',
                                         $message->id)}}" style="display: none;" method="post">
                                             {{ csrf_field() }}
                                             {{ method_field('DELETE') }}
                                         </form>
                                      <button type="button" class="btn btn-danger btn-sm" onclick="if (confirm(
                                          'Are you sure? You want to delete this'
                                      )){
                                          event.preventDefault();
                                          document.getElementById('delete-form-{{$message->id}}').submit();
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
