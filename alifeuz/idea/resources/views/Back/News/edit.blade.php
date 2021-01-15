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
                    @if( isset($news))
                    <form action="{{route('news.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <input type="hidden" value="{{$news[0]->id}}" name="id">
                            <div class="col-sm-12 mg-t-10  mg-sm-t-0">
                                <label for="id" class="form-control-label text-dark pb-2">Url</label>
                                <input required type="text" id="id" name="url" class="form-control p-4" value="{{$news[0]->url}}">
                            </div>
                            <label class="col-sm-3 form-control-label text-dark pb-2">Title Uz</label>
                            <div class="col-sm-12 mg-t-10  mg-sm-t-0">
                                <input type="text" name="title[uz]" value="{{$news[0]->title['uz']}}" class="form-control p-4" placeholder="title_uz">
                            </div>
                            <label class="col-sm-3 form-control-label text-dark pb-2">Title ru</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0 ">
                                <input type="text" name="title[ru]" value="{{$news[0]->title['ru']}}" class="form-control p-4" placeholder="title_ru">
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <label  for="exampleFormControlTextarea1" class="text-dark">Content Uz</label>
                                <textarea name="content_name[uz]" class="form-control" placeholder="Content Uz" id="editor1" rows="4">{{ $news[0]->content_name['uz']}}</textarea>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <label for="exampleFormControlTextarea1" class="text-dark">Content En</label>
                                <textarea name="content_name[ru]" class="form-control" placeholder="Content Ru" id="editor2" rows="4">{{ $news[0]->content_name['ru']}}</textarea>
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 ">
                                <label for="selekt" class="col-sm-3 form-control-label text-dark pb-2">Status</label>
                                <select id="selekt" name="status" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mggory_id,-t-10 mg-sm-t-0 ">
                                <label class="col-sm-3 form-control-label text-dark pb-2">Category</label>
                                <select name="category_id" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                     @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name['uz']}}</option>
                                     @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 mt-3">
                                <label class="col-sm-3 form-control-label text-dark pb-2">Image </label>
                                <input name="img" type="file" class="form-control ">
                            </div>
                            <div class="col-sm-6 mg-t-10 mg-sm-t-0 mt-3">
                                <label class="col-sm-3 form-control-label text-dark pb-2">Image </label>
                                <img src="{{"/".$news[0]->img}}" style="width: 100px;height: 50px" alt="">
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0 mt-3">
                                <label for="id" class="col-sm-4 form-control-label text-dark pb-2">Tavsiya</label>
                                <select id="id" name="featured" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                    <option value="0">Tavsiya qilinmaydigan</option>
                                    <option value="1">Tavsiya</option>
                                </select>
                            </div>
                        @if(!$news[0]->tags->isEmpty())
                                <div id="formline" class="form-layout ml-3">
                                    <div id="form"  class="row mg-b-25 ">
                                      @foreach($news[0]->tags as $model)
                                            <input type="hidden" name="tag_id[]" value="{{$model->id}}">
                                            <div  class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="tags" class="form-control-label">Tags uz<span class="tx-danger">*</span></label>
                                                    <input id="tags"  required class="form-control tags" type="text" name="tags[]" value="{{$model->tags['uz']}}" >
                                                </div>
                                            </div><!-- col-4 -->
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="tags2" class="form-control-label">Tags Ru<span class="tx-danger">*</span></label>
                                                    <input id="tags2" required class="form-control tags2" type="text" name="tags[]"  value="{{$model->tags['ru']}}">
                                                </div>
                                            </div><!-- col-4 -->
                                            <br>
                                      @endforeach
                                    </div>
                                </div>
                            @endif
                        </div><!-- row -->

                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-info mg-r-5">Update Form</button>
                        </div><!-- form-layout-footer -->
                     </form>
                    @endif
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
    </script>
@endpush
