<footer>
    <div class="shadow">
        <div class="container">
            <div class="sp-1 row align-items-center">
                <div class="col-md-7">
                    <div class="info">
                        <div class="logo">
                            <img src="{{ asset('assets/img/apache.png') }}" alt="logo" class="img-fluid">
                        </div>
                        <div class="address">
                            <h5>{{ $infos[3] }}</h5>
                            <h5>Phone: {{ $infos[1] }} <br> Email: {{ $infos[2] }}</h5>
                            <ul class="social list-unstyled">
                                <li class="list-inline-item"><a href="{{ 'http://www.facebook.com/' . $infos[5] }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="{{ 'http://www.twitter.com/' . $infos[5] }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="{{ 'http://www.instagram.com/' . $infos[5] }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="{{ 'http://www.youtube.com/' . $infos[5] }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/img/footer-img.jpg') }}" alt="#" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>