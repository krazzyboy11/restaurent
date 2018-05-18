@extends('layouts.app')

@section('title','Item Details')
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
                            <h4 class="title">Order Items</h4>

                        </div>
                        <div class="card-content table-responsive">
                            <table id="slidertable" class="table table-striped table-bordered" style="width:100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Quantity</th>
                                <th>Product Price</th>

                                </thead>
                                <tbody>
                                @foreach($orders->items as $key=>$item)
                                    <tr>

                                        <td>{{$key + 1}}</td>
                                        <td>{{$item['item']['name']}}</td>
                                        <td>{{$item['item']['image']}}</td>
                                        <td>{{$item['qty']}}</td>
                                        <td>{{$item['price']}}</td>


                                        {{--<td>{{$orders->totalQty}}</td>
                                        <td>{{$orders->totalPrice}}</td>--}}
                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>
                            <table class="table table-striped table-bordered">
                                <thead class="text-primary">
                                <th>Total Quantity</th>
                                <th>Total Price</th>

                                </thead>
                                <thead>
                                <tr>
                                    <td>{{$orders->totalQty}}</td>
                                    <td>{{$orders->totalPrice}}</td>
                                </thead>
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
