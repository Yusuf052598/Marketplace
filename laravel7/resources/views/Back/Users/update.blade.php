@extends('Back.Layout.layout')
@section('content')
    <div class="advanced-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
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
        <div class="container-fluid">
            @if(isset($user))
              <form action="{{route('user.update')}}" method="post" >
                 @csrf
                  @method('PUT')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Name</label>
                                    <input required type="text" id="label" name="name" class="form-control" value="{{$user->name}}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="name" class="form-group">Email</label>
                                    <input required type="email" id="name" name="email" class="form-control" value="{{$user->email}}">
                                </div>
                                <div class="col-lg-6 mg-t-30">
                                    <label for="label" class="form-group">Password</label>
                                    <input required type="text" id="label" name="password" class="form-control" value="{{$user->pass}}">
                                </div>
                                <div class="col-lg-6 mg-t-30">
                                    <label for="label" class="form-group">Tel</label>
                                    <input required type="text" id="label" name="tel" class="form-control" value="{{$user->tel}}">
                                </div>
                                <div class="col-lg-12 mg-t-30">
                                    <label for="label" class="form-group">Is admin</label>
                                    <select name="admin" class="form-control" id="label">
                                        <option value="0">User</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="col-lg-12">
                                    <div class="sparkline10-graph">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mg-t-30" >
                                                <input type="submit" class="btn btn-danger" value="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
@endsection
