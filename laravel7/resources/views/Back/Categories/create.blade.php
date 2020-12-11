@extends('Back.Layout.layout')
@section('content')
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                @role('moderator_role')
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
                @endrole
                <div class="col-lg-12">
                    <div class="sparkline12-list shadow-reset mg-t-30">
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
                                    <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-12">
                                            <label for="login2">Markets</label>
                                            <select name="market_id" id="login2" class="form-control">
                                                <option>Tanlang</option>
                                                @foreach($markets as $market)
                                                    <option value="{{$market->id}}">{{$market->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('market_id')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="login2">Name Uz</label>
                                            <input required type="text" id="login2" name="name[uz]" class="form-control " />
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="login3">Name Ru</label>
                                            <input required type="text" id="login3" name="name[ru]" class="form-control " />
                                        </div>
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
    </div>
@endsection
