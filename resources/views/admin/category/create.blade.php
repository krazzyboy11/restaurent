@extends('layouts.app')

@section('title','Add Category')
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
                        <form action="{{ route('category.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <lable class="control-label">Category name</lable>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <lable class="control-label">Category Slug</lable>
                                        <input type="text" class="form-control" name="slug">
                                    </div>
                                </div>
                            </div>

                            <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
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
