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
                    @if( isset($ad))
                    <form action="{{route('ad.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <input type="hidden" value="{{$ad->id}}" name="id">
                            <div class="col-sm-6 mg-t-10  mg-sm-t-0">
                                <label class="form-control-label text-dark pb-2">Name Link Uz</label>
                                <input type="text" name="title[uz]" value="{{$ad->title['uz']}}" class="form-control p-4" placeholder="title_uz">
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label class="form-control-label text-dark pb-2">Name Link En</label>
                                <input type="text" name="title[en]" value="{{$ad->title['en']}}" class="form-control p-4" placeholder="title_en">
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label for="selekt" class="col-sm-3 form-control-label text-dark pb-2">Status</label>
                                <select id="selekt" name="status" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label class="col-sm-3 form-control-label text-dark pb-2">Image</label>
                                <input name="img" type="file" class="form-control p-4">
                                <img src="{{'/'.$ad->img}}" style="width: 100px;height: 100px" alt="">
                            </div>
                        </div><!-- row -->
                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-info mg-r-5">Update Form</button>
                        </div><!-- form-layout-footer -->
                     </form>
                    @endif
                </div><!-- card -->
            </div><!-- col-6 -->
        </div><!-- row --> </div>
@endsection
