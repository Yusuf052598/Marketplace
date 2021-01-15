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
                    <form id="form_modal" action="{{route('notify.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0 ">
                                <label for="id"  class="form-control-label text-dark pb-2">Title</label>
                                <input required class="form-control" id="editor2" name="title" placeholder="Example:Tajribali dasturchi kerak">
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label for="id"  class="form-control-label text-dark pb-2">Masul Shaxs</label>
                                <input required type="text" id="id" name="name" class="form-control p-4" placeholder="Ism">
                            </div>
                            <div class="col-sm-6 mg-t-10  mg-sm-t-0">
                                <label for="id" class=" form-control-label text-dark pb-2">Idora</label>
                                <input required type="text" id="id" name="company" class="form-control p-4" placeholder="Company name">
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0 ">
                                <label for="id"  class="form-control-label text-dark pb-2">Texnologiyalar</label>
                                <textarea required class="form-control" id="editor2" name="tex" rows="4"> </textarea>
                            </div>
                            <div class="col-sm-6 mg-t-10  mg-sm-t-0">
                                <label for="id" class=" form-control-label text-dark pb-2">Aloqa</label>
                                <input required type="text" id="id" name="tel" class="form-control p-4" placeholder="Tel nomer">
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                <label for="id"  class="form-control-label text-dark pb-2">Maosh</label>
                                <input required type="text" id="id" name="salary" class="form-control p-4" placeholder="Maosh">
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0 mt-3">
                                <label for="editor2" class="card-body-title">Qoshimcha malumot</label>
                                <textarea required class="form-control" rows="4" id="editor2" name="description"></textarea>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0 mt-3">
                                <label for="id" class="col-sm-3 form-control-label text-dark pb-2">Status</label>
                                <select id="id" name="status" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                </select>
                            </div>
                        </div><!-- row -->
                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
                        </div><!-- form-layout-footer -->
                    </form>
                </div><!-- card -->
            </div><!-- col-6 -->
        </div><!-- row -->
    </div>
@endsection
