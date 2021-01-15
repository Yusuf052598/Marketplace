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
        <div class="row row-sm mg-t-20">
            <div class="col-xl-12">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    @if( isset($user))
                        <form action="{{route('users.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <input type="hidden" value="{{$user->id}}" name="id">
                                <div class="col-lg-6">
                                    <label for="id" class="text-dark pb-2">Name</label>
                                    <input type="text" id="id" name="name" value="{{$user->name}}" class="form-control p-4" placeholder="title_uz">
                                </div>
                                <div class="col-lg-6">
                                    <label for="id" class=" text-dark pb-2">Last Name</label>
                                    <input type="text" id="id" name="last_name" value="{{$user->last_name}}" class="form-control p-4" placeholder="title_en">
                                </div>
                                <div class="col-lg-6">
                                    <label for="id" class=" text-dark pb-2">Password</label>
                                    <input type="text" id="id" name="password" value="{{$user->pass}}" class="form-control p-4" placeholder="title_en">
                                </div>
                                <div class="col-lg-6">
                                    <label for="id" class="text-dark pb-2">Email</label>
                                    <input id="id" name="email" type="email" value="{{$user->email}}" class="form-control p-4">
                                </div>
                                <div class="col-lg-12">
                                    <label for="selekt" class="text-dark pb-2">Status</label>
                                    <select id="selekt" name="admin" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                        <option value="1">Admin</option>
                                        <option value="0">User</option>
                                    </select>
                                </div>
                            </div><!-- row -->
                            <div class="form-layout-footer mg-t-30">
                                <button type="submit" class="btn btn-info mg-r-5">Update Form</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </div><!-- form-layout-footer -->
                        </form>
                    @endif
                </div><!-- card -->
            </div><!-- col-6 -->
        </div><!-- row -->
    </div>
@endsection
