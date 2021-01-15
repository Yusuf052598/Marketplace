@extends('Front.Marketplace.Layout.layout')
@section('content')
    <section class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="text-center">Register</h3>
                    <h2 class="text-center">{{\Illuminate\Support\Facades\Cache::get('sms')}}</h2>
                </div>
                <div class="col-lg-12 text-center">
                      @if(session()->get('error'))
                            <div class="alert alert-success text-dark">
                                {{session()->get('error')}}
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
            <form action="{{route('sign.check')}}" method="POST" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6 form-group">
                                        <label for="sms">Verify sms<span class="time ml-3 text-success"></span></label>
                                        <input id="sms" type="text" class="form-control" name="sms" placeholder="SMS">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <input id="btn_verify"  type="submit" class="btn_verify btn btn-primary" value="submit">
                                <a href="#" id="send_again">Send sms</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" name="number" value="{{$id}}">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('sign.lost')}}" id="send_sms" method="post">
                                @csrf
                                <input type="hidden" name="number" value="{{$id}}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
@endpush
@push('js')
    <script>
        $(document).ready(function (){
            let sec=59;
            let min=2;
          setInterval(function (){
            if(min===2){
                $('.time').html(min+':'+sec);
                sec--;
                if (sec === 0){
                    sec=59;
                    min=1;
                }
            }
            else if(min===1){
                $('.time').html(min+':'+sec);
                sec--;
                if (sec === 0){
                    sec=59;
                    min=0;
                }
            }
            else if(min===0){
                $('.time').html(min+':'+sec);
                sec--;
                if (sec===0){
                    min=5;
                }
            }
          },1000);
        });
        $('#send_again').click(function () {
            $('#send_sms').submit();
            start();
        })
    </script>
@endpush

