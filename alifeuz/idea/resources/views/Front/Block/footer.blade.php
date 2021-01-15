<footer id="footer">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-5">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="index.html" class="logo"><img src="/Front/img/logo1.png" style="max-height: 70px;max-width: 180px" alt=""></a>
                    </div>
                    <ul class="footer-nav">
                        <li><a href="#" style="color: #0c0c0c">Privacy Policy</a></li>
                        <li><a href="#" style="color: #0c0c0c">Advertisement</a></li>
                    </ul>
                    <div class="footer-copyright">
								<span style="color: #0c0c0c">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="alife.uz" target="_blank">Alife.uz</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-widget">
                            <h3 class="footer-title" >@lang('msg.about_as')</h3>
                            <ul class="footer-links">
                                <li><a href="{{route('about')}}" style="color: #0c0c0c">@lang('msg.about_as')</a></li>
                                <li><a href="#" style="color: #0c0c0c">Join Us</a></li>
                                <li><a href="contact.html" style="color: #0c0c0c">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-widget">
                            <h3 class="footer-title">@lang('msg.category')</h3>
                            <ul class="footer-links">
                                @if(isset($categories))
                                   @foreach($categories as $category)
                                    <li>
                                        <a href="#" style="color: #0c0c0c">{{$category->name()}}</a>
                                    </li>
                                   @endforeach    
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Join our Newsletter</h3>
                    <div class="footer-newsletter">
                        <form>
                            <input class="input" type="email" name="newsletter" placeholder="Enter your email">
                            <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com/Alifeuz-106645457587766"><i class="fa fa-facebook " style="color: #0c0c0c"></i></a></li>
                        <li><a href="https://t.me/alife_uz"><i class="fa fa-telegram" style="color: #0c0c0c"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" style="color: #0c0c0c"></i></a></li>
                        <li><a href="https://www.instagram.com/alife.uz/"><i class="fa fa-instagram" style="color: #0c0c0c"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>

