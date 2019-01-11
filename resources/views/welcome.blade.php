@extends('layouts.master')

@section('content')
    <section class="sp-1 feature-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="text-capitalize">What we offer</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mt-4 feature-area-item">
                        <div class="img-wrapper">
                            <img src="assets/img/feature1.png" alt="feature image" class="img-fluid">
                        </div>
                        <h4>Professional Teacher</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-4 feature-area-item">
                        <div class="img-wrapper">
                            <img src="assets/img/feature2.png" alt="feature image" class="img-fluid">
                        </div>
                        <h4>International Curriculam</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-4 feature-area-item">
                        <div class="img-wrapper">
                            <img src="assets/img/feature3.png" alt="feature image" class="img-fluid">
                        </div>
                        <h4>Extra Curricular Activities</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sp-1 teacher-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="text-capitalize">Meet Our Teachers</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mt-4 teacher-area-item">
                        <div class="img-wrapper">
                            <img src="assets/img/teacher1.jpg" alt="feature image" class="img-fluid">
                        </div>
                        <div class="teacher-info">
                            <h4 class="name">Milon Rahman</h4>
                            <p class="title">Assistant Teacher</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-4 teacher-area-item">
                        <div class="img-wrapper">
                            <img src="assets/img/teacher2.jpg" alt="feature image" class="img-fluid">
                        </div>
                        <div class="teacher-info">
                            <h4 class="name">Mosarof Hossain</h4>
                            <p class="title">Principal</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-4 teacher-area-item">
                        <div class="img-wrapper">
                            <img src="assets/img/teacher3.jpg" alt="feature image" class="img-fluid">
                        </div>
                        <div class="teacher-info">
                            <h4 class="name">Setu Begum</h4>
                            <p class="title">Assistant Teacher</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sp-1 notice-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <div class="img-wrapper">
                        <img src="assets/img/notice.jpg" alt="notice image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="row mt-4 mt-md-0">
                        <div class="col-10 mx-auto text-center">
                            <h3 class="text-capitalize">Notice board</h3>
                        </div>
                    </div>
                    <ul class="list-unstyled notice-area-content">
                        <li class="notice-item">
                            <div class="date">
                                <p>03<br>Dec</p>
                            </div>
                            <div class="notice-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis accusantium eos dignissimos illo! Impedit, facilis <a href="#" class="more">see more</a href="#"></p>
                            </div>
                        </li>
                        <li class="notice-item">
                            <div class="date">
                                <p>03<br>Dec</p>
                            </div>
                            <div class="notice-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis accusantium eos dignissimos illo! Impedit, facilis <a href="#" class="more">see more</a href="#"></p>
                            </div>
                        </li>
                        <li class="notice-item">
                            <div class="date">
                                <p>03<br>Dec</p>
                            </div>
                            <div class="notice-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis accusantium eos dignissimos illo! Impedit, facilis <a href="#" class="more">see more</a href="#"></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection