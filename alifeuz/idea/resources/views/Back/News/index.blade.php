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
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card card-body-title py-3 px-2">
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
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">News DataTable</h6>
            <p class="mg-b-20 mg-sm-b-30">
                <a href="{{route('news.create')}}" class=" btn btn-primary">
                    <i class=" fa fa-plus  " style="font-size: 3vh"></i>
                </a>
            </p>
            <div class="table-wrapper text-center">
                <table id="datatable1" class=" table display  table-hover table-bordered table-orange responsive nowrap">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        @role('super_admin_role')
                          <th class="text-center">User Name</th>
                        @endrole
                        <th class="text-center">Category</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Photo</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">View</th>
                        <th class="text-center">Update</th>
                        @role('super_admin_role')
                          <th class="text-center">Delete</th>
                        @endrole
                    </tr>
                    </thead>
                    <tbody>
                    @if (isset($db))
                    @foreach($db as $model )
                    <tr>
                        <td class="text-dark">{{$model->id}}</td>
                        @role('super_admin_role')
                        <td class="text-dark">{{$model->user->name}}</td>
                        @endrole
                        <td class="text-dark">{{$model->category->name['uz']}}</td>
                        <td class="text-dark">
                            {{$model->title['uz']}}
                        </td>
                        <td><img src="{{'/'.$model->img}}" style="width: 10vh; height: 10vh" alt="bu"></td>
                        <td class="text-dark">{{$model->status}}</td>
                        <td><i class="fa fa-eye text-dark" style="font-size: 3vh"></i></td>
                        <td>
                            <a href="{{route('news.edit',$model->id)}}">
                                <i class="fa fa-pencil text-primary" style="font-size: 3vh"></i>
                            </a>
                        </td>
                        @role('super_admin_role')
                            <td>
                                <a href="{{route('news.delete',$model->id)}}">
                                    <i class=" fa fa-trash text-danger" style="font-size: 3vh"></i>
                                </a>
                            </td>
                        @endrole
                    </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
                {{$db->links()}}
            </div><!-- table-wrapper -->
        </div><!-- card -->
    </div>
@endsection

@push("js")
    <script>
     /*   $(document).ready(function () {

            $("#form_modal").submit(function(e) {
                e.preventDefault();
                var markupStr = $('#summernote').summernote('code');
                console.log(markupStr);
               var formData=new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "",
                    data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    dataType:"JSON",
                    success: function (data) {
                        var html='';
                        if (data.errors){
                            html="<div class='alert alert-danger'>";
                            for (var count=0;data.errors.length;count++){
                                html+='<p>'+data.errors[count]+'<p>';
                            }
                            html+='<div>';
                        }
                        if(data.success){
                            html="<div class='alert alert-success'>"+data.success+"<div>";
                            $("#form_modal")[0].reset();
                        }
                        $("#form_result").html(html);
                    }
                });
            });
        });*/
    </script>
@endpush

