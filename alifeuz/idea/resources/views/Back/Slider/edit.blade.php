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
                    @if(isset($sliders))
                    <form action="{{route('slider.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <input type="hidden" value="{{$sliders->id}}" name="id">
                            <label class="col-sm-3 form-control-label text-dark pb-2">Title Uz</label>
                            <div class="col-sm-12 mg-t-10  mg-sm-t-0">
                                <input type="text" name="title[uz]" value="{{$sliders->title['uz']}}" class="form-control p-4" placeholder="title_uz">
                            </div>
                            <label class="col-sm-3 form-control-label text-dark pb-2">Title Ru</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0 ">
                                <input type="text" name="title[ru]" value="{{$sliders->title['ru']}}" class="form-control p-4" placeholder="title_ru">
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <label  for="exampleFormControlTextarea1" class="text-dark">Content Uz</label>
                                <textarea name="editor[uz]" class="form-control" placeholder="Content Uz" id="editor1" rows="4">{{ $sliders->content_name['uz']}}</textarea>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <label for="exampleFormControlTextarea1" class="text-dark">Content En</label>
                                <textarea name="editor[ru]" class="form-control" placeholder="Content Ru" id="editor2" rows="4">{{ $sliders->content_name['ru']}}</textarea>
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label for="selekt" class="col-sm-3 form-control-label text-dark pb-2">Status</label>
                                <select id="selekt" name="status" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label class="col-sm-3 form-control-label text-dark pb-2">Image <img style="max-width: 50px;max-height: 50px" src="{{'/'.$sliders->img}}" alt=""></label>
                                <input name="img" type="file" class="form-control p-4">
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
        </div><!-- row --> </div>
@endsection
@push("js")
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1', {
            filebrowserUploadUrl: "{{route('slider.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace( 'editor2', {
            filebrowserUploadUrl: "{{route('slider.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endpush
