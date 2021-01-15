@extends('Back.Marketplace.Layout.layout')
@section('content')
    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
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
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Cards <span class="table-project-n">Data</span> Table</h1>
                                <div class="sparkline13-outline-icon">
                                    <span><a href="#" class="btn btn-custon-rounded-two btn-danger">Create</a></span>
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
                                        <th data-field="markets">Market</th>
                                        <th data-field="user" >User id</th>
                                        <th data-field="product">Product</th>
                                        <th data-field="count" >Count</th>
                                        <th data-field="view">View</th>
                                        <th data-field="edit1" >Edit</th>
                                        <th data-field="delete">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($cards))
                                        @foreach($cards as $card)
                                            <tr>
                                                <td></td>
                                                <td>{{$card->id}}</td>
                                                <td>{{$card->market}}</td>
                                                <td>{{$card->user_id}}</td>
                                                <td>{{$card->product_id}}</td>
                                                <td>{{$card->quantity}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-white">
                                                        <i class="fa fa-eye fa-2x "></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-white">
                                                        <i class="fa fa-pencil-square fa-2x text-info"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('cards.delete',$card->id)}}" class="btn btn-white text-center">
                                                        <i class="fa fa-trash text-danger fa-2x"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @elseif(isset($main_cards))
                                        @foreach($main_cards as $card)
                                            <tr>
                                                <td></td>
                                                <td>{{$card->id}}</td>
                                                <td>{{$card->market->name}}</td>
                                                <td>{{$card->user_id}}</td>
                                                <td>{{$card->product_id}}</td>
                                                <td>{{$card->quantity}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-white">
                                                        <i class="fa fa-eye fa-2x "></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-white">
                                                        <i class="fa fa-pencil-square fa-2x text-info"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('cards.delete',$card->id)}}" class="btn btn-white text-center">
                                                        <i class="fa fa-trash text-danger fa-2x"></i>
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

