@extends('Back.Layout.layout')
@section('content')
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-animate-list shadow-reset mg-b-15 menu-list-wrap">
                        <ul class="nav nav-tabs custom-menu-wrap custom-menu-wrap-st">
                            @role('super_admin_role')
                            <li class="nav-item">
                                <a href="{{route('market')}}" class="nav-link ">Markets</a>
                            </li>
                            @endrole
                            @role('moderator_role')
                            <li class="nav-item">
                                <a href="{{route('categories')}}" class="nav-link ">Categories</a>
                            </li>
                            @endrole
                            <li class="nav-item">
                                <a href="{{route('market.product')}}" class="nav-link">Products</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Orders</a>
                            </li>
                            <li class="nav-item"><a href="{{route('cards')}}" class="nav-link">Cards</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sparkline12-list shadow-reset mg-t-30">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Markets Create</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
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
                                        <div class="row">
                                            <form action="{{route('market.store')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-lg-6">
                                                    <label for="user_id">Admin</label>
                                                    <select name="user_id" id="user_id" class="form-control">
                                                        <option value="">Tanlang</option>
                                                        @if(isset($users))
                                                            @foreach($users as $user)
                                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="region_id">Region</label>
                                                    <select name="region_id"  id="region_id" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1">
                                                        <option value="">Tanlang</option>
                                                        @if(isset($regions))
                                                            @foreach($regions as $region)
                                                                <option value="{{$region->id}}">{{$region->name}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="login2">Market Name</label>
                                                    <input required type="text" id="login2" name="name" class="form-control " />
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login3" for="login3">Brand Images</label>
                                                    <input required type="file" id="login3" name="img" class="form-control" style="padding-bottom: 30px" />
                                                </div>
                                                <div class="col-lg-12 mg-t-30" >
                                                    <input type="submit" class="btn btn-primary" value="create">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="/Back/css/select2/select2.min.css">
    <link rel="stylesheet" href="/Back/css/chosen/bootstrap-chosen.css">
    <link rel="stylesheet" href="/Back/css/dropzone.css">
@endpush
@push('js')
    <script src="/Back/js/chosen/chosen.jquery.js"></script>
    <script src="/Back/js/chosen/chosen-active.js"></script>
    <script src="/Back/js/dropzone.js"></script>
    <script src="/Back/js/select2/select2.full.min.js"></script>
    <script src="/Back/js/select2/select2-active.js"></script>
@endpush
