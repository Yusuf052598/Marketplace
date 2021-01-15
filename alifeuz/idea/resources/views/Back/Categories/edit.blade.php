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
            @if(isset($categories))
            <form  action="{{route('categories.update')}}" method="post" class="form-control" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div id="formline" class="form-layout">
                    <div id="form"  class="row mg-b-25">
                        <div  class="col-lg-6">
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$categories->id}}">
                                <label class="form-control-label">Categories Uz<span class="tx-danger">*</span></label>
                                <input required class="form-control" value="{{$categories->name['uz']}}" type="text" name="name[uz]"  placeholder="Enter Categories Uz">
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Categories Ru<span class="tx-danger">*</span></label>
                                <input required class="form-control" value="{{$categories->name['ru']}}" type="text" name="name[ru]"  placeholder="Enter Categories Ru">
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label" for="image">Photo</label>
                                <input required class="form-control" name="image" id="image" type="file">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <img src="{{'/'.$categories->image}}"  style="width: 50px;height: 50px" alt="bu rasm">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
             @endif
        </div>
    </div>
@endsection
