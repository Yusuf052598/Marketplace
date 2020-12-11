@extends('Back.Layout.layout')
@section('content')
    <div class="basic-form-area mg-b-15">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline12-list shadow-reset mg-t-30">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Permission Create</h1>
                            <div class="sparkline12-outline-icon">
                                <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
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
                            <div class="row">
                                <form action="{{route('permission_user.store')}}" method="post">
                                    @csrf
                                    <div class="col-lg-12">
                                        <label for="id1" >Permission<span class="tx-danger">*</span></label>
                                        <select name="permission_id" id="id" class="form-control">
                                            <option value="">Tanlang</option>
                                            @if(isset($permissions))
                                                @foreach($permissions as $permission)
                                                    <option value="{{$permission->id}}">{{$permission->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div><!-- col-4 -->
                                    <div  class="col-lg-12">
                                        <label for="id" class="mt-2">Model Name<span class="tx-danger">*</span></label>
                                        <select name="model_id" id="id" class="form-control">
                                            <option value="">Tanlang</option>
                                            @if(isset($users))
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-12 mg-t-30" >
                                        <input type="submit" class="btn btn-success" value="create">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
