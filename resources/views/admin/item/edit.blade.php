@extends('layouts.app')

@section('title','Edit Slider')
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
                            <h4 class="title">Edit Item</h4>

                        </div>
                        <div class="card-content ">
                            <form action="{{ route('item.update',$item->id) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <lable class="control-label">Item name</lable>
                                            <input type="text" class="form-control" name="name" value="{{$item->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <lable class="control-label">Category Name</lable>
                                            <select name="category" id="" class="form-control">
                                                @foreach($categories as $category)
                                                    <option {{$category->id == $item->category->id ? 'selected' : ''
                                                    }} value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <lable class="control-label">Description</lable>
                                            <textarea name="description" class="form-control" id="" cols="30" rows="10" >{{$item->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <lable class="control-label">Price</lable>
                                            <input type="number" class="form-control" name="price" value="{{$item->price}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <lable class="control-label">Image</lable>
                                        <input type="file" name="image">

                                    </div>
                                </div>
                                <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
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
