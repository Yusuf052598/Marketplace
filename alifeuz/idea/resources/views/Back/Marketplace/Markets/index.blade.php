@extends('Back.Marketplace.Layout.layout')
@section('content')
    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
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
                            <li class="nav-item">
                                <a href="#" class="nav-link">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('cards')}}" class="nav-link">Cards</a>
                            </li>
                        </ul>
                    </div>
                </div>
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
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Markets <span class="table-project-n">Data</span> Table</h1>
                                <div class="sparkline13-outline-icon">
                                    <span><a href="{{route('market.create')}}" class="btn btn-custon-rounded-two btn-danger">Create</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="user">User Name</th>
                                        <th data-field="market">Market</th>
                                        <th data-field="img" >Img</th>
                                        <th data-field="edit1" >Edit</th>
                                        <th data-field="delete" >Delete</th>
                                        <th data-field="view" >View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($markets))
                                            @foreach($markets as $market)
                                            <tr>
                                                <td></td>
                                                <td>{{$market->id}}</td>
                                                <td>{{$market->user->name}}</td>
                                                <td>{{$market->name}}</td>
                                                <td>
                                                    <img style="width: 100px; height:100px" src="{{'/'.$market->img}}" alt="">
                                                </td>
                                                <td class="datatable-ct">
                                                    <i class="fa fa-eye fa-2x text-white"></i>
                                                </td>
                                                <td class="datatable-ct">
                                                    <a href="{{route('market.edit',$market->id)}}">
                                                        <i class="fa fa-pencil fa-2x"></i>
                                                    </a>
                                                </td>
                                                <td class="datatable-ct">
                                                    <a href="{{route('market.delete',$market->id)}}">
                                                        <i class="fa fa-trash fa-2x text-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
@endsection
