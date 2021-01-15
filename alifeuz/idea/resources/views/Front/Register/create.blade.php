@extends('Front.layouts.layout')
@section('content')
    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-title">
                        <h2>Royhatdan otish</h2>
                    </div>
                </div>
            </div>
            @if(session()->get('success'))
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                           <div class="alert alert-success text-dark">
                                {{session()->get('success')}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="contact-form-area">
                        <form action="{{route('register.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                    @error('name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="last_name">LastName</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Lastname">
                                    @error('last_name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="example@gmal.com">
                                    @error('email')
                                    <div class="alert alert-danger">@lang('msg.unique')</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    @error('password')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn newspaper-btn mt-30 w-100" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                @if (isset($news))
                    @foreach ($news as $model)
                        <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex" >
                                <div class="post-thumb">
                                    <a href="#"><img src="{{'/'.$model->img}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="" class="post-catagory">{{$model->category->name()}}</a>
                                    <div class="post-meta">
                                        <a href="{{route('categories.single',['id'=>$model->id,'title'=>$model->slugName()])}}" class="post-title">
                                            <h6>{{$model->title()}}</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Single Featured Post -->
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Form Area End ##### -->
@endsection
