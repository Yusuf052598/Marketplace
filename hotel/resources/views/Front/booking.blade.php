@extends('Front.Layouts.layout')
@section('content')

<section class="py-5">
    <div class="container">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Velara</span>
                <h2><span>Booking</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
               <div id="multiple" class="article">
                <div class="multi-select-calendar"></div>
                <div class="box"></div>
            </div>
             
        </div>
        <div class="col-lg-4">
            <h3>ROOMS</h3>
            <form>
                <div>
                    <input id="checkbox-2" class="checkbox-custom" name="checkbox-2" type="checkbox">
                    <label for="checkbox-2" class="checkbox-custom-label">Suite</label>
                </div>
                <div>
                    <input id="checkbox-3" class="checkbox-custom" name="checkbox-3" type="checkbox">
                    <label for="checkbox-3"class="checkbox-custom-label">Family room</label>
                </div>
                <div>
                    <input id="checkbox-4" class="checkbox-custom" name="checkbox-4" type="checkbox">
                    <label for="checkbox-4"class="checkbox-custom-label">Deluxe room</label>
                </div>
                <div>
                    <input id="checkbox-5" class="checkbox-custom" name="checkbox-5" type="checkbox">
                    <label for="checkbox-5"class="checkbox-custom-label">Classic room</label>
                </div>
            </form>
        </div>
        <!-- </div> -->
        <div class="col-lg-4">
            <h3>GUESTS</h3>
            <div class="row no-gutters">
                <div class="col-6">
                    <form>
                        <div>
                            <input id="checkbox-6" class="checkbox-custom" name="checkbox-2" type="checkbox">
                            <label for="checkbox-6" class="checkbox-custom-label">1</label>
                        </div>
                        <div>
                            <input id="checkbox-7" class="checkbox-custom" name="checkbox-3" type="checkbox">
                            <label for="checkbox-7"class="checkbox-custom-label">2</label>
                        </div>
                        <div>
                            <input id="checkbox-8" class="checkbox-custom" name="checkbox-4" type="checkbox">
                            <label for="checkbox-8"class="checkbox-custom-label">3</label>
                        </div>
                        <div>
                            <input id="checkbox-9" class="checkbox-custom" name="checkbox-5" type="checkbox">
                            <label for="checkbox-9"class="checkbox-custom-label">4</label>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <form>
                        <div>
                            <input id="checkbox-10" class="checkbox-custom" name="checkbox-2" type="checkbox">
                            <label for="checkbox-10" class="checkbox-custom-label">5</label>
                        </div>
                        <div>
                            <input id="checkbox-11" class="checkbox-custom" name="checkbox-3" type="checkbox">
                            <label for="checkbox-11"class="checkbox-custom-label">6</label>
                        </div>
                        <div>
                            <input id="checkbox-12" class="checkbox-custom" name="checkbox-4" type="checkbox">
                            <label for="checkbox-12"class="checkbox-custom-label">7</label>
                        </div>
                        <div>
                            <input id="checkbox-13" class="checkbox-custom" name="checkbox-5" type="checkbox">
                            <label for="checkbox-13"class="checkbox-custom-label">8</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="instagram instagram1 ftco-section ftco-no-pb">
    <section style="text-align: center;" class="contactt">
        <div class="container">
            <div class="data">
                <div class="row center">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <span class="span1">DATA : </span>
                        <span> 
                            <!-- <div id="multiple" class="article">
                                <div class="box"></div>
                            </div> -->
                        </span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <span class="span1">ROOMS : </span><span>Suite</span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <span class="span1">GUESTS : </span><span>1</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" style="margin: 0 auto">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Phone number">
                    <input type="text" placeholder="Email">
                    <button class="btn1">Send</button>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">

        <div class="row no-gutters">
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/rasm1.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/rasm1.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/rasm2.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/rasm2.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/rasm9.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/rasm9.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/rasm4.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/rasm4.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/rasm10.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/rasm10.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
