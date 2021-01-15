@extends('Back.layouts.layout')
@section('content')
    <div class="am-pagetitle">
        <h5 class="am-title">Dashboard</h5>
        <form id="searchBar" class="search-bar" action="#">
            <div class="form-control-wrapper">
                <input type="search" class="form-control bd-0" placeholder="Search...">
            </div><!-- form-control-wrapper -->
            <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
        </form><!-- search-bar -->
    </div><!-- am-pagetitle -->
    <div class="am-pagebody">
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card card-body-title py-3 px-2">
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
            </div>
        </div>
        <div class="row row-sm mg-t-20">
            <div class="col-xl-12">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 mg-t-10  mg-sm-t-0">
                                <label for="id" class="col-sm-3 form-control-label text-dark pb-2">Name</label>
                                <input required id="id" type="text" name="name" class="form-control p-4" placeholder="Name">
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label for="id" class="col-sm-3 form-control-label text-dark pb-2">Last Name</label>
                                <input required id="id" type="text" name="last_name" class="form-control p-4" placeholder="Lastname">
                            </div>

                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label for="id" class="col-sm-3 form-control-label text-dark pb-2">Email</label>
                                <input required id="id" type="email" name="email" class="form-control p-4" placeholder="Email">
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label for="id" class="col-sm-3 form-control-label text-dark pb-2">Password</label>
                                <input required id="id" type="password" name="password" class="form-control p-4" placeholder="password">
                            </div>
                        </div><!-- row -->
                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </div><!-- form-layout-footer -->
                    </form>
                </div><!-- card -->
            </div><!-- col-6 -->
        </div><!-- row -->
    </div>
@endsection
