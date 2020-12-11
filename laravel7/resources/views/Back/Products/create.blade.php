@extends('Back.Layout.layout')
@section('content')
    <div class="advanced-form-area mg-b-15">
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
            </div>
        </div>
        <div class="container-fluid">
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mg-b-20">
                                        <label for="ca_id" class="form-group">Markets</label>
                                        <select required  name="market_id" id="ca_id" class="form-control">
                                            @if(isset($markets))
                                                @foreach($markets as $market)
                                                    <option value="{{$market->id}}">{{$market->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="sub_id" class="form-group">Category</label>
                                    <select required  name="category_id" id="sub_id" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1">
                                        @if(isset($categories))
                                            <option >Tanlang</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name()}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Name Uz</label>
                                    <input required type="text" id="label" name="name[uz]" class="form-control" placeholder="Name uz">
                                </div>
                                <div class="col-lg-6">
                                    <label for="name" class="form-group">Name Ru</label>
                                    <input required type="text" id="name" name="name[ru]" class="form-control" placeholder="Name ru">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Title Uz</label>
                                    <textarea name="title[uz]" required id="label" rows="4" class="form-control" placeholder="Title uz"></textarea>
                                </div>
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Title Ru</label>
                                      <textarea name="title[ru]" required id="label" rows="4" class="form-control" placeholder="Title ru"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Price</label>
                                    <input name="price" required id="label" class="form-control" placeholder="Price">
                                </div>
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Share Price</label>
                                    <input name="share_price" required id="label"  class="form-control" placeholder="Share_price">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="body1" class="form-group">Status</label>
                                    <select name="status" id="body1" class="form-control">
                                        <option value="inactive">inactive</option>
                                        <option value="active">active</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="body1" class="form-group">Recommen</label>
                                    <select name="recommen" id="body1" class="form-control">
                                        <option value="0">inrecommen</option>
                                        <option value="1">recommen</option>
                                    </select>
                                </div>
                                <div class="col-lg-2" style="margin-top: 25px">
                                    <button type="button" class="btn btn-primary" onclick="btnClick()"><i class="fa fa-plus px-1"></i></button>
                                </div>
                                <div class="col-lg-10">
                                    <div id="formline" class="form-layout">
                                        <div id="form"  class="row mg-b-25">
                                            <div  class="col-lg-10">
                                                <div class="form-group">
                                                    <label for="img" class="form-control-label">Images<span class="text-danger">*</span></label>
                                                    <input id="img" required class="form-control" type="file" name="images[]"  placeholder="Enter Categories Uz">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center mg-t-30" >
                                    <input type="submit" class="btn btn-danger" value="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="/Back/css/select2/select2.min.css">
    <link rel="stylesheet" href="/Back/css/chosen/bootstrap-chosen.css">
    <link rel="stylesheet" href="/Back/css/dropzone.css">
@endpush
@push('js')
    <script src="/Back/js/chosen/chosen.jquery.js"></script>
    <script src="/Back/js/chosen/chosen-active.js"></script>
    <script src="/Back/js/dropzone.js"></script>
    <script src="/Back/js/select2/select2.full.min.js"></script>
    <script src="/Back/js/select2/select2-active.js"></script>
    <script>
       /* $(document).ready(function () {
            $('.js-example-basic-single').select2({
                placeholder: 'This is my placeholder',
                allowClear: false
            });
            $(".chosen-select").change(function(event) {
                event.preventDefault();
                 var id = $('#ca_id').val();
                $.ajax({
                    type: 'POST',
                    url: "{{--{{route('products.select')}}--}}",
                    data: {id:id,_token:'{{--{{csrf_token()}}--}}'},
                    dataType:"JSON",
                    success: function (data) {
                        if (data.success){
                            $('#sub_id').html(data.success);
                        }
                    }
                });
            });
        });*/
    </script>
    <script type="text/javascript">
        var i=1;
        function btnClick() {
            var a = document.querySelector('#form');
            var clone = a.cloneNode(true);
            var t=clone.id='form'+i++;
            var newDiv=document.createElement('div');
            newDiv.className='col-lg-2';
            newDiv.style.margin="25px 0 0 0";
            var newBtn=document.createElement('input');
            newBtn.className='btn btn-danger';
            newBtn.id=t;
            newBtn.type='button';
            newBtn.value='remove';
            newBtn.onclick=function btnRemove() {
                var removeClick=document.getElementById(t);
                removeClick.remove();
            };
            newDiv.appendChild(newBtn);
            clone.appendChild(newDiv);
            document.getElementById('formline').appendChild(clone);

        }

    </script>
@endpush
