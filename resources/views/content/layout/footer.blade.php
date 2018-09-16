<div class="gap"></div>

<footer class="main-footer">
    <div class="container">
        <div class="row row-col-gap" data-gutter="60">
            <div class="col-md-3">
                <h4 class="widget-title-sm">TheBox Shop</h4>
                <p>Nullam magnis magnis maecenas neque ut purus condimentum semper senectus feugiat et</p>
                <ul class="main-footer-social-list">
                    <li>
                        <a class="fa fa-facebook" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-twitter" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-pinterest" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-instagram" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-google-plus" href="#"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="widget-title-sm">Popular Tags</h4>
                <ul class="main-footer-tag-list">
                    <li><a href="#">New Season</a>
                    </li>
                    <li><a href="#">Watches</a>
                    </li>
                    <li><a href="#">woman</a>
                    </li>
                    <li><a href="#">classic</a>
                    </li>
                    <li><a href="#">modern</a>
                    </li>
                    <li><a href="#">blue</a>
                    </li>
                    <li><a href="#">shoes</a>
                    </li>
                    <li><a href="#">running</a>
                    </li>
                    <li><a href="#">jeans</a>
                    </li>
                    <li><a href="#">sports</a>
                    </li>
                    <li><a href="#">laptops</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="widget-title-sm">Newsletter</h4>
                <form>
                    <div class="form-group">
                        <label>Sign up to the newsletter</label>
                        <input class="newsletter-input form-control" placeholder="Your e-mail address" type="text" />
                    </div>
                    <input class="btn btn-primary" type="submit" value="Sign up" />
                </form>
            </div>
        </div>
        <ul class="main-footer-links-list">
            <li><a href="{{ url('/about_us') }}">About Us</a>
            </li>
            <li><a href="#">Legal</a>
            </li>
            <li><a href="#">Support & Customer Service</a>
            </li>
            <li><a href="#">Privacy</a>
            </li>
            <li><a href="#">Terms</a>
            </li>
            <li><a href="#">Shipping</a>
            </li>
        </ul>
    </div>
</footer>


    <script src="{{ asset('public/content/js/jquery.js') }}"></script>
    <script src="{{ asset('public/content/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/content/js/icheck.js') }}"></script>
    <script src="{{ asset('public/content/js/ionrangeslider.js') }}"></script>
    <script src="{{ asset('public/content/js/jqzoom.js') }}"></script>
    <script src="{{ asset('public/content/js/card-payment.js') }}"></script>
    <script src="{{ asset('public/content/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('public/content/js/magnific.js') }}"></script>
    <script src="{{ asset('public/content/js/custom.js') }}"></script>

    @yield('js')

    </div>

</body>

</html>