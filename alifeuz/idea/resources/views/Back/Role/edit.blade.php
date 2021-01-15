@extends('Back.layouts.layout')
@section('content')
    <div class="am-pagetitle">
        <h5 class="am-title">Dashboard</h5>
        <form id="searchBar" class="search-bar" action="#">
            <div class="form-control-wrapper">
                <input type="search" class="form-control bd-0" placeholder="Search...">
            </div><!-- form-control-wrapper -->
            <button id="searchBtn" class="btn btn-orange">
                <i class="fa fa-search"></i>
            </button>
        </form><!-- search-bar -->
    </div><!-- am-pagetitle -->

    <div class="am-pagebody">
        @if(session()->get('success'))
            <div class="col-lg-12 alert alert-success text-dark">
                {{session()->get('success')}}
            </div>
        @endif
        @if($errors->any())
            <div class="col-lg-12 alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <div class="row row-sm mg-t-20">
            @if(isset($roles))
                <form  action="{{route('role.update')}}" method="post" class="form-control" >
                    @csrf
                    @method('PUT')
                    <div class="col-lg-12">
                        <label for="id1" >Roles<span class="tx-danger">*</span></label>
                        <input id="id1" required class="form-control" value="{{$roles->name}}" type="text" name="name">
                    </div><!-- col-4 -->
                    <div  class="col-lg-12">
                        <label for="id" class="mt-2">Guard Name<span class="tx-danger">*</span></label>
                        <input id="id" required class="form-control" type="text" value="{{$roles->guard_name}}" name="guard_name">
                    </div><!-- col-4 -->
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-primary mt-3">Insert</button>
                    </div>
                    <input type="hidden" name="id" value="{{$roles->id}}">
                </form>
            @endif
        </div>
    </div>
@endsection
