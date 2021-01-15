@extends('Back.Layouts.layout')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12 mt-2">
                    @if(session()->get('success'))
                        <div class="alert alert-success text-dark">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-body p-0">
                            <form action="{{route('res.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="m-3">
                                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                                    <input type="text" name="name" required class="form-control" id="exampleFormControlInput1" placeholder="name">
                                </div>
                                <div class="m-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="exampleFormControlTextarea1" class="form-label">Title uz</label>
                                            <input type="text" required name="title[uz]" class="form-control" id="exampleFormControlInput1" placeholder="Title uz">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleFormControlTextarea1" class="form-label">Title ru</label>
                                            <input type="text" required name="title[ru]" class="form-control" id="exampleFormControlInput1" placeholder="Title ru">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleFormControlTextarea1" class="form-label">Title en</label>
                                            <input type="text" required name="title[en]" class="form-control" id="exampleFormControlInput1" placeholder="Title en">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-3">
                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Price</label>
                                        <input type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                                    </div>
                                </div>
                                <div class="m-3 pb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Photo</label>
                                    <input  class="form-control pb-1" name="img" type="file">
                                </div>
                                <div class="m-3 pb-2 text-center">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
@endsection
