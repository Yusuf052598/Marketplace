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
            <form  action="{{route('permission_user.store')}}" method="post" class="form-control" >
                @csrf
                <div class="col-lg-12">
                    <label for="id1" >Permission<span class="tx-danger">*</span></label>
                    <select name="permission_id" id="id1" class="form-control">
                        <option value="">Tanlang</option>
                        @if(isset($permissions))
                           @foreach($permissions as $permission)
                               <option value="{{$permission->id}}">{{$permission->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div><!-- col-4 -->
                <div  class="col-lg-12">
                    <label for="id" class="mt-2">User<span class="tx-danger">*</span></label>
                    <select name="model_id" id="id" class="form-control">
                        <option value="">Tanlang</option>
                        @if(isset($users))
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div><!-- col-4 -->
                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary mt-3">Insert</button>
                </div>
            </form>
        </div>
    </div>
@endsection
