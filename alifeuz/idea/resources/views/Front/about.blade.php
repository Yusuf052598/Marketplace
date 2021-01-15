@extends('Front.layouts.layout')
@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <div class="section-row">
                        <h2>About As</h2>
                        <p>Lorem ipsum dolor sit amet, ea eos tibique expetendis, tollit viderer ne nam. No ponderum accommodare eam, purto nominavi cum ea, sit no dolores tractatos. Scripta principes quaerendum ex has, ea mei omnes eruditi. Nec ex nulla mandamus, quot omnesque mel et. Amet habemus ancillae id eum, justo dignissim mei ea, vix ei tantas aliquid. Cu laudem impetus conclusionemque nec, velit erant persius te mel. Ut eum verterem perpetua scribentur.</p>
                        <figure class="figure-img">
                            <img class="img-responsive" src="/Front/img/about-1.jpg" alt="">
                        </figure>
                        <p>Vix mollis admodum ei, vis legimus voluptatum ut, vis reprimique efficiendi sadipscing ut. Eam ex animal assueverit consectetuer, et nominati maluisset repudiare nec. Rebum aperiam vis ne, ex summo aliquando dissentiunt vim. Quo ut cibo docendi. Suscipit indoctum ne quo, ne solet offendit hendrerit nec. Case malorum evertitur ei vel.</p>
                    </div>
                    <div class="row section-row">
                        <div class="col-md-6">
                            <figure class="figure-img">
                                <img class="img-responsive" src="/Front/img/about-2.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h3>Our Mission</h3>
                            <p>Id usu mutat debet tempor, fugit omnesque posidonium nec ei. An assum labitur ocurreret qui, eam aliquid ornatus tibique ut.</p>
                            <ul class="list-style">
                                <li><p>Vix mollis admodum ei, vis legimus voluptatum ut.</p></li>
                                <li><p>Cu cum alia vide malis. Vel aliquid facilis adolescens.</p></li>
                                <li><p>Laudem rationibus vim id. Te per illum ornatus.</p></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- aside -->
                <div class="col-md-4">
                    <!-- ad -->
                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="/Front/img/ad-1.jpg" alt="">
                        </a>
                    </div>
                    <!-- /ad -->
                     <!-- post widget -->
                   <div class="aside-widget">
                       @if(isset($most_reads))
                            <div class="section-title">
                                <h2> @lang('msg.eng_kop_oqilgan_xabarlar')</h2>
                            </div>
                               @foreach($most_reads as $model)
                             <div class="post post-widget">
                                    <a class="post-img" href="{{route('blog.show',['user'=>$model->user->name,'id'=>$model->id,'url'=>$model->slugName()])}}">
                                        <img src="{{$model->img}}" style="max-width: 100%; max-height: 90px" alt="">
                                    </a>
                                    <div class="post-body">
                                        <h3 class="post-title"><a href="{{route('blog.show',['user'=>$model->user->name,'id'=>$model->id,'url'=>$model->slugName()])}}">{{$model->title()}}</a></h3>
                                    </div>
                             </div>
                          @endforeach
                        @endif
                    </div>
                <!-- /post widget -->

                </div>
                <!-- /aside -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
