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
            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Name Uz</label>
                                    <input required type="text" id="label" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <label for="name" class="form-group">Email</label>
                                    <input required type="email" id="name" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-lg-6 mg-t-30">
                                    <label for="label" class="form-group">Password</label>
                                    <input required type="password" id="label" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="col-lg-6 mg-t-30">
                                    <label for="label" class="form-group">Password Confirmed</label>
                                    <input required type="password" id="label" name="confirm" class="form-control" placeholder="Password">
                                </div>
                                <div class="col-lg-6 mg-t-30">
                                    <label for="label" class="form-group">Tel</label>
                                    <input required type="text" id="label" name="tel" class="form-control" placeholder="Password">
                                </div>
                                <div class="col-lg-6 mg-t-30">
                                    <label for="label" class="form-group">Is admin</label>
                                    <select name="admin" class="form-control" id="label">
                                        <option value="0">User</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <div class="sparkline10-graph">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mg-t-30" >
                                                <input type="submit" class="btn btn-danger" value="submit">
                                            </div>
                                        </div>
                                    </div>
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
