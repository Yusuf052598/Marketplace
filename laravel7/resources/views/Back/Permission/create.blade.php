@extends('Back.Layout.layout')
@section('content')
    <div class="basic-form-area mg-b-15">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline12-list shadow-reset mg-t-30">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Permission Create</h1>
                            <div class="sparkline12-outline-icon">
                                <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
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
                            <div class="row">
                                <form action="{{route('permission.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-lg-6">
                                        <label for="login2" class="login2">Name</label>
                                        <input required type="text" id="login2" name="name" class="form-control " />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="login3" class="login3">Guard Name</label>
                                        <input required type="text" id="login3" name="guard_name" class="form-control " />
                                    </div>
                                    <div class="col-lg-12 mg-t-30" >
                                        <input type="submit" class="btn btn-success" value="create">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
