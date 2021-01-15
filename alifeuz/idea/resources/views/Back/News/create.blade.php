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
                    <form id="form_modal" action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
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
                            <div class="col-sm-6 mg-t-10  mg-sm-t-0">
                                <label for="id" class=" form-control-label text-dark pb-2">Subtitle Uz</label>
                                <textarea required id="id" name="subtitle[uz]" rows="4" class="form-control p-4"></textarea>
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label for="id"  class="form-control-label text-dark pb-2">Subtitle ru</label>
                                <textarea required id="id" name="subtitle[ru]" rows="4" class="form-control p-4"></textarea>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0 mt-3">
                                    <label for="editor1" class="card-body-title">Content uz</label>
                                 <textarea required class="form-control" id="editor1" name="editor[uz]"></textarea>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0 mt-3">
                                    <label for="editor2" class="card-body-title">Content ru</label>
                                <textarea required class="form-control" id="editor2" name="editor[ru]"></textarea>
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 mt-3">
                                <label for="id" class="col-sm-3 form-control-label text-dark pb-2">Status</label>
                                <select id="id" name="status" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 mt-3">
                                <label for="id" class="col-sm-3 form-control-label text-dark pb-2">Category</label>
                                <select id="id" name="category_id" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                  @if($categories)
                                        @foreach($categories as $category)
                                          <option value="{{$category->id}}">{{$category->name['uz']}}</option>
                                        @endforeach
                                  @endif
                                </select>
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 mt-3">
                                <label class="col-sm-3 form-control-label text-dark pb-2">Image</label>
                                <input required name="img" type="file" class="form-control ">
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 mt-3">
                                <label class="col-sm-4 form-control-label text-dark pb-2">Tavsiya</label>
                                <select id="id" name="featured" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                        <option value="0">Tavsiya qilinmaydigan</option>
                                        <option value="1">Tavsiya</option>
                                </select>
                            </div>
                             <div class="col-lg-12 col-xl-12 mt-2 mb-2">
                                <button type="button" class="btn btn-primary" onclick="btnClick()"><i class="fa fa-plus px-1"></i></button>
                            </div>
                        </div><!-- row -->
                           <div id="formline" class="form-layout">
                            <div id="form"  class="row mg-b-25">
                                <div  class="col-lg-4">
                                    <div class="form-group">
                                        <label for="tags" class="form-control-label">Tags uz<span class="tx-danger">*</span></label>
                                        <input id="tags"  required class="form-control tags" type="text" name="tags[]"  placeholder="Tags Uz">
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="tags2" class="form-control-label">Tags Ru<span class="tx-danger">*</span></label>
                                        <input id="tags2" required class="form-control tags2" type="text" name="tags[]"  placeholder="Tags Ru">
                                    </div>
                                </div><!-- col-4 -->
                            </div>
                        </div>
                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
                        </div><!-- form-layout-footer -->
                    </form>
                </div><!-- card -->
            </div><!-- col-6 -->
        </div><!-- row -->
    </div>
     <script type="text/javascript">
        var i=1;
        function btnClick() {
            var a = document.querySelector('#form');
            var clone = a.cloneNode(true);
            var t=clone.id='form'+i++;
            var newDiv=document.createElement('div');
            newDiv.className='col-lg-4 pt-4';
            var newBtn=document.createElement('input');
            newBtn.className='btn btn-danger';
            newBtn.id=t;
            newBtn.type='button';
            newBtn.value='remove';
            newBtn.onclick=function btnRemove() {
                var removeClick=document.getElementById(t);
                removeClick.remove();
            };
            newDiv.appendChild(newBtn);
            clone.appendChild(newDiv);
            document.getElementById('formline').appendChild(clone);

        }

    </script>
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

        $(document).ready(function (){
            $.mask.definitions['#']='';
            $.mask.definitions['n']='[aA-zZ]';
            jQuery(function($){
                $(".tags").mask("#nnnnnnnnnnnnnnnnnnnnnnnnnnnn");
            });
            jQuery(function($){
                $(".tags2").mask("#nnnnnnnnnnnnnnnnnnnnnnnnnnnn");
            });
        });
    </script>
@endpush
