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
            <a href="" class="button_modal btn btn-primary" data-toggle="modal" data-target="#modaldemo1">
                <i class=" fa fa-plus  " style="font-size: 3vh"></i>
            </a>
            </p>
            <div class="table-wrapper text-center">
                <table id="datatable1" class=" table display table-hover table-bordered table-orange responsive nowrap">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Country name</th>
                        <th class="text-center">City name</th>
                        <th class="text-center">View</th>
                        <th class="text-center">Update</th>
                        <th class="text-center">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                     @if (isset($db))
                    @foreach($db as $model)
                    <tr id="tableId">
                        <td class="text-dark" id="id_name">{{$model->id}}</td>
                        <td class="text-dark">
                        {{ $model->name}}
                        </td>
                        <td class="text-dark">
                           {{$model->last_name}}
                        </td>
                        <td><i class=" fa fa-eye text-dark" style="font-size: 3vh"></i></td>
                        <td><a href="#"><i class=" fa fa-pencil text-primary" style="font-size: 3vh"></i></a></td>
                        <td><button class="btn btn-danger"><i class=" fa fa-trash " style="font-size: 3vh"></i></button></td>
                    </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
               {{$db->links()}}
            </div><!-- table-wrapper -->
        </div><!-- card -->
    </div>
    <!-- BASIC MODAL -->
    <div id="modaldemo1" class="modal fade">
        <div class="modal-dialog  modal-dialog-vertical-center" role="document">
            <div class="modal-content bd-0 tx-14 col-lg-12" style="width: 1000px">
                <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="form_html"></div>
                    <form  id="form_modal" class="form_modal" method="post">
                       <div class="form-group">
                             <label for="name">Name<span class="tx-danger">*</span></label>
                             <input id="name"   class="form-control" type="text" name="name"  placeholder="Name">
                        </div><!-- col-4 -->
                        <div class="form-group">
                            <label for="last_name" >Last_name<span class="tx-danger">*</span></label>
                            <input id="last_name" class="form-control" type="text" name="last_name"  placeholder="Lastname">
                        </div>
                    </form>
                <div class="modal-footer">
                    <button type="button"  class="submitBtn" id="submitBtn">save</button>
                    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->


@endsection
@push("js")
     <script>
        $(document).ready(function () {

            $("#submitBtn").click(function(e) {
                 e.preventDefault();
                 var name=$("#name").val();
                 var last_name=$("#last_name").val();
                $.ajax({
                    type: "POST",
                    url: "{{route('tests.store')}}",
                    data: {name:name,last_name:last_name,_token:"{{csrf_token()}}"},
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
                              html="<td class='text-dark'>"+data.success.id+"</td>"+
                                  "<td class='text-dark'>"+data.success.name+"</td>"+
                                  "<td class='text-dark'>"+data.success.last_name+"</td>";
                              html+="<td><i class='fa fa-eye text-dark' style='font-size: 3vh'></i></td>";
                              html+="<td><i class='fa fa-pencil text-primary' style='font-size: 3vh'></i></td>";
                              html+="<td><a href='#'><i class='fa fa-trash btn btn-danger' style='font-size: 3vh'></i></a></td>";

                            $("#form_modal")[0].reset();
                          }
                        $("#tableId").html(html);
                    }
                });
            });
        });
    </script>

@endpush

