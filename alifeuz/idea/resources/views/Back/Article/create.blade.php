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
                    <form id="form_modal" action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <label class="form-control-label text-dark pb-2"  for="url">Url</label>
                                <input type="text" id="url" class="form-control p-4" name="url">
                            </div>
                            <div class="col-sm-6 mg-t-10  mg-sm-t-0">
                                <label for="id" class=" form-control-label text-dark pb-2">Title Uz</label>
                                <input required type="text" id="id" name="title[uz]" class="form-control p-4" placeholder="title_uz">
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label for="id"  class="form-control-label text-dark pb-2">Title ru</label>
                                <input required type="text" id="id" name="title[ru]" class="form-control p-4" placeholder="title_ru">
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0 mt-3">
                                    <label for="editor1" class="card-body-title">Content uz</label>
                                 <textarea required class="form-control" id="editor1" name="editor[uz]"></textarea>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0 mt-3">
                                    <label for="editor2" class="card-body-title">Content ru</label>
                                <textarea required class="form-control" id="editor2" name="editor[ru]"></textarea>
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
@push("js")
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1', {
            filebrowserUploadUrl: "{{route('news.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace( 'editor2', {
            filebrowserUploadUrl: "{{route('news.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endpush
