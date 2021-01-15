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
            <form  action="{{route('categories.store')}}" method="post" class="form-control" enctype="multipart/form-data">
                @csrf
                <div id="formline" class="form-layout">
                    <div id="form"  class="row mg-b-25">
                        <div  class="col-lg-6">
                            <div class="form-group">
                                <label for="id" class="form-control-label">Categories Uz<span class="tx-danger">*</span></label>
                                <input  id="id" required class="form-control" type="text" name="name[uz]"  placeholder="Enter Categories Uz">
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="id" class="form-control-label">Categories Ru<span class="tx-danger">*</span></label>
                                <input id="id" required class="form-control" type="text" name="name[ru]"  placeholder="Enter Categories Ru">
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-12" >
                          <div class="form-group">
                            <label for="id" class="form-control-label">Photo</label>
                            <input id="id" class="form-control" type="file" name="image">
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">Insert</button>
                </div>
            </form>
        </div>
    </div>
@endsection
