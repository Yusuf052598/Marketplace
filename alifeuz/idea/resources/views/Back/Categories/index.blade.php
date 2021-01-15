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
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">News DataTable</h6>
            <p class="mg-b-20 mg-sm-b-30">
                <a href="{{route('categories.create')}}" class="btn btn-primary">Create</a>
            </p>
            <div class="table-wrapper text-center">
                <table id="datatable1" class=" table display table-hover table-bordered table-orange responsive nowrap">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Category Uz</th>
                        <th class="text-center">Category Ru</th>
                        <th class="text-center">View</th>
                        <th class="text-center">Update</th>
                        <th class="text-center">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($db))
                        @foreach($db as $model)
                            <tr>
                                <td class="text-dark">{{$model->id}}</td>
                                <td class="text-dark">{{$model->name['uz']}}</td>
                                <td class="text-dark">{{$model->name['ru']}}</td>
                                <td><i class=" fa fa-eye text-dark" style="font-size: 3vh"></i></td>
                                <td><a href="{{route('categories.edit',$model->id)}}"><i class="fa fa-pencil text-primary" style="font-size: 3vh"></i></a></td>
                                <td>
                                    <a href="{{route('categories.delete',$model->id)}}"><i class="fa fa-trash text-danger" style="font-size: 3vh"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div><!-- card -->
    </div>
@endsection
