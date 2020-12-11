@extends('Front.Layout.layout')
@section('content')
    <section class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                        <h3 class="text-center">Tel nomer</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <form action="{{route('sign.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6 form-group">
                                        <label for="phone">Tel nomer</label>
                                        <input id="phone" type="text" class="form-control" name="tel" placeholder="Tel nomer">
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <input  type="submit" class="btn btn-primary" value="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@push('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
@endpush
@push('js')
    <script>
        $(document).ready(function (){
            $.mask.definitions['9']='';
            $.mask.definitions['n']='[0-9]';
            jQuery(function($){
                $("#phone").mask("+998 nn nnn nn nn");
            });
        });
    </script>
@endpush
