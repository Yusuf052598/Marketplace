@extends('Back.Layouts.layout')
@section('content')
    <div class="content-wrapper">
        <div class="col-md-12 mt-2">
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
        <a  class="btn btn-primary m-3" href="{{route('res.create')}}">Create</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Url</th>
                <th scope="col">Title</th>
                <th scope="col">Photo</th>
                <th scope="col">Price</th>
                <th scope="col">View</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($res))
                @foreach($res as $model)
                    <tr>
                        <th scope="row">{{$model->id}}</th>
                        <td>{{$model->url}}</td>
                        <td>{{$model->title['uz']}}</td>
                        <td><img src="{{'/'.$model->img}}" style="width: 50px;height: 50px" alt=""></td>
                        <td>{{$model->price}}</td>
                        <td><i class="fa fa-eye"></i></td>
                        <td>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil text-blue" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('res.delete',$model->id)}}">
                                <i class="fa fa-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
            {{$res->links()}}
            </tbody>
        </table>
    </div>
@endsection
