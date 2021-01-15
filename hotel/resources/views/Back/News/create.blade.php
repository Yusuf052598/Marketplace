@extends('Back.Layouts.layout')
@section('content')
    <div class="content-wrapper">
      <section class="content">
          <div class="row">
              <div class="col-md-12 mt-2">
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
              <div class="col-md-12">
                  <div class="card card-default">
                      <div class="card-body p-0">
                          <form action="{{route('admin.news.store')}}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="m-3">
                                  <label for="exampleFormControlInput1" class="form-label">Url</label>
                                  <input type="text" name="url" class="form-control" id="exampleFormControlInput1" placeholder="Url">
                              </div>
                              <div class="m-3">
                                  <div class="row">
                                      <div class="col-md-4">
                                          <label for="exampleFormControlTextarea1" class="form-label">Title uz</label>
                                          <input type="text" name="title[uz]" required class="form-control" id="exampleFormControlInput1" placeholder="Title uz">
                                      </div>
                                      <div class="col-md-4">
                                          <label for="exampleFormControlTextarea1" class="form-label">Title ru</label>
                                          <input type="text" name="title[ru]" required class="form-control" id="exampleFormControlInput1" placeholder="Title ru">
                                      </div>
                                      <div class="col-md-4">
                                          <label for="exampleFormControlTextarea1" class="form-label">Title en</label>
                                          <input type="text" name="title[en]" required class="form-control" id="exampleFormControlInput1" placeholder="Title en">
                                      </div>
                                  </div>
                              </div>
                              <div class="m-3">
                                  <label for="exampleFormControlTextarea1" class="form-label">Body uz</label>
                                  <textarea class="form-control"  required name="body[uz]" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <div class="m-3">
                                  <label for="exampleFormControlTextarea1" class="form-label">Body Ru</label>
                                  <textarea class="form-control" required  name="body[ru]" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <div class="m-3">
                                  <label for="exampleFormControlTextarea1" class="form-label">Body En</label>
                                  <textarea class="form-control" required name="body[en]" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <div class="m-3 pb-2">
                                  <label for="exampleFormControlTextarea1" class="form-label">Photo</label>
                                  <input  class="form-control pb-1" required name="img" type="file">
                              </div>
                              <div class="m-3 pb-2 text-center">
                                  <input type="submit" class="btn btn-primary" value="Submit">
                              </div>
                          </form>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
          </div>
      </section>
    </div>
@endsection
