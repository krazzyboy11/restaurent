@extends('layouts.app')

@section('title','Add Slider')
@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partial.msg')
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Add New Slider</h4>

                    </div>
                    <div class="card-content ">
                        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <lable class="control-label">Title</lable>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <lable class="control-label">Sub Title</lable>
                                        <input type="text" class="form-control" name="sub_title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                        <lable class="control-label">Image</lable>
                                        <input type="file" name="image">

                                </div>
                            </div>
                            <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@push('scripts')
@endpush
