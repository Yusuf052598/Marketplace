@extends('Back.Layout.layout')
@section('content')
    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Products <span class="table-project-n">Data</span> Table</h1>
                                <div class="sparkline13-outline-icon">
                                    <span><a href="{{route('user.create')}}" class="btn btn-custon-rounded-two btn-danger">Create</a></span>
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
                                        <th data-field="name">Name</th>
                                        <th data-field="email" >Email</th>
                                        <th data-field="tel" >Tel</th>
                                        <th data-field="pass" >Password</th>
                                        <th data-field="admin" >Is Admin</th>
                                        <th data-field="edit1" >Edit</th>
                                        <th data-field="delete" >View</th>
                                        <th data-field="view" >View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($users))
                                        @foreach($users as $user)
                                            <tr>
                                                <td></td>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->tel}}</td>
                                                <td>{{$user->pass}}</td>
                                                <td>{{$user->admin}}</td>
                                                <td>
                                                    <a href="{{route('user.edit',$user->id)}}" class="btn btn-white">
                                                        <i class="fa fa-pencil-square fa-2x text-info"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('user.delete',$user->id)}}" class="btn btn-white text-center">
                                                        <i class="fa fa-trash text-danger fa-2x"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-white">
                                                        <i class="fa fa-eye fa-2x "></i>
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
