@extends('Back.layouts.login')
@section('content')
    <div class="row no-gutters" style="border: 1px solid #ffffff;box-shadow:2px 4px 13px salmon;">
        <div class="col-lg-5 lorem" >
            <div>
                <h2>Amanda Template</h2>
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum facere fugiat laboriosam nihil non similique. Culpa dicta quaerat ullam voluptatibus?</p>

                <hr>
                <p>Don't have an account? <br> <a href="#">Sign up Now</a></p>
            </div>
        </div>
        <div class="col-lg-7">
            <form method="POST" action="{{route('check') }}">
                @csrf
                <h5 class="tx-gray-800 mg-b-25">Signin to Your Account</h5>

                <div class="form-group">
                    <label for="name" class="form-control-label">{{ __('Name') }}</label>
                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your username" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label for="password" class="form-control-label">{{ __('Password') }}</label>
                    <input id="password" type="password" placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group mg-b-20"><a href="">Reset password</a></div>

                <button type="submit" class="btn btn-block">
                    {{ __('Login') }}
                </button>
            </form>
        </div><!-- col-7 -->
    </div><!-- row -->
@endsection
@push('js')
    <script>
        if(window.matchMedia('(max-width:768px)').matches){
            $('.lorem').hide();
            $('.no-gutters').css({'border':'0','box-shadow':'0'});
        }   
   </script>
@endpush
