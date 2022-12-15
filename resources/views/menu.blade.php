@extends('layouts.app')
@section('title')
@endsection
@section('head')
@endsection


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Specialties</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="ftco-search">
            <div class="row">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Popular</a>

                        <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-1" aria-selected="true">Breackfast</a>

                        <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-2" aria-selected="false">Lunch</a>

                        <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-3" aria-selected="false">Dinner</a>

                        <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-4" aria-selected="false">Snaks</a>

                        <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-5" aria-selected="false">Drinks</a>

                    </div>
                </div>
                <div class="col-md-12 tab-wrap">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                            <div class="row d-flex align-items-stretch">
                                @foreach ($Popular as $Menu)
                                <div class="col-md-6 col-lg-3 mb-5 ftco-animate">
                                    <div class="menu text-center">
                                        <div class="img" style="background-image: url({{asset($Menu['img'])}});"></div>
                                        <div class="text p-3">
                                            <h3>{{$Menu['name']}}</h3>
                                            <span class="position mb-3">{{$Menu['menu']}}</span>
                                            <div class="d-flex justify-content-around align-items-center">
                                                <a href="tel:+8801751763310" class="btn btn-sm btn-primary">Order Now</a>
                                                <h3> ৳{{$Menu['price']}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                            <div class="row d-flex align-items-stretch">
                                @foreach ($Breakfast as $Menu)
                                    <div class="col-md-6 col-lg-3 mb-5 ftco-animate">
                                        <div class="menu text-center">
                                            <div class="img" style="background-image: url({{asset($Menu['img'])}});"></div>
                                            <div class="text p-3">
                                                <h3>{{$Menu['name']}}</h3>
                                                <span class="position mb-3">{{$Menu['menu']}}</span>
                                                <div class="d-flex justify-content-around align-items-center">
                                                    <a href="tel:+8801751763310" class="btn btn-sm btn-primary">Order Now</a>
                                                    <h3> ৳{{$Menu['price']}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                            <div class="row d-flex align-items-stretch">
                                @foreach ($Lunch as $Menu)
                                    <div class="col-md-6 col-lg-3 mb-5 ftco-animate">
                                        <div class="menu text-center">
                                            <div class="img" style="background-image: url({{asset($Menu['img'])}});"></div>
                                            <div class="text p-3">
                                                <h3>{{$Menu['name']}}</h3>
                                                <span class="position mb-3">{{$Menu['menu']}}</span>
                                                <div class="d-flex justify-content-around align-items-center">
                                                    <a href="tel:+8801751763310" class="btn btn-sm btn-primary">Order Now</a>
                                                    <h3> ৳{{$Menu['price']}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                            <div class="row d-flex align-items-stretch">
                                @foreach ($Snaks as $Menu)
                                    <div class="col-md-6 col-lg-3 mb-5 ftco-animate">
                                        <div class="menu text-center">
                                            <div class="img" style="background-image: url({{asset($Menu['img'])}});"></div>
                                            <div class="text p-3">
                                                <h3>{{$Menu['name']}}</h3>
                                                <span class="position mb-3">{{$Menu['menu']}}</span>
                                                <div class="d-flex justify-content-around align-items-center">
                                                    <a href="tel:+8801751763310" class="btn btn-sm btn-primary">Order Now</a>
                                                    <h3> ৳{{$Menu['price']}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
                            <div class="row d-flex align-items-stretch">
                                @foreach ($Dinner as $Menu)
                                    <div class="col-md-6 col-lg-3 mb-5 ftco-animate">
                                        <div class="menu text-center">
                                            <div class="img" style="background-image: url({{asset($Menu['img'])}});"></div>
                                            <div class="text p-3">
                                                <h3>{{$Menu['name']}}</h3>
                                                <span class="position mb-3">{{$Menu['menu']}}</span>
                                                <div class="d-flex justify-content-around align-items-center">
                                                    <a href="tel:+8801751763310" class="btn btn-sm btn-primary">Order Now</a>
                                                    <h3> ৳{{$Menu['price']}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-day-6-tab">
                            <div class="row d-flex align-items-stretch">
                                @foreach ($Drinks as $Menu)
                                    <div class="col-md-6 col-lg-3 mb-5 ftco-animate">
                                        <div class="menu text-center">
                                            <div class="img" style="background-image: url({{asset($Menu['img'])}});"></div>
                                            <div class="text p-3">
                                                <h3>{{$Menu['name']}}</h3>
                                                <span class="position mb-3">{{$Menu['menu']}}</span>
                                                <div class="d-flex justify-content-around align-items-center">
                                                    <a href="tel:+8801751763310" class="btn btn-sm btn-primary">Order Now</a>
                                                    <h3> ৳{{$Menu['price']}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
@endsection
