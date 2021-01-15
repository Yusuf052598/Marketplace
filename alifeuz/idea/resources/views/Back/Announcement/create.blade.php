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
            <form  action="{{route('announce.store')}}" method="post" class="form-control" enctype="multipart/form-data">
                @csrf
                <div id="formline" class="form-layout">
                    <div id="form"  class="row mg-b-25">
                        <div  class="col-lg-12">
                            <div class="form-group">
                                <label for="id" class="form-control-label">Title</label>
                                <input  id="id" required class="form-control" type="text" name="title"  placeholder="Elon">
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-12" >
                          <div class="form-group">
                            <label for="id" class="form-control-label">Photo</label>
                            <input id="id" class="form-control" type="file" name="image">
                          </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0 mt-3">
                            <label for="id" class="col-sm-3 form-control-label text-dark pb-2">Status</label>
                            <select id="id" name="status" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                            </select>
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
