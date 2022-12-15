@extends('layouts.app')

@section('title')
LOVELY FRIED CHICKEN |
@endsection

@section('head')
@endsection


@section('content')
<section class="home-slider owl-carousel js-fullheight">

  <div class="slider-item js-fullheight" style="background-image: url({{asset('assets/images/bg_1.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
        <div class="col-md-12 col-sm-12 text-center ftco-animate">
          <span class="subheading">LFC</span>
          <h1 class="mb-4">Best Restaurant</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="slider-item js-fullheight" style="background-image: url({{asset('assets/images/bg_2.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
        <div class="col-md-12 col-sm-12 text-center ftco-animate">
          <span class="subheading">LFC</span>
          <h1 class="mb-4">Nutritious &amp; Tasty</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="slider-item js-fullheight" style="background-image: url({{asset('assets/images/bg_3.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
        <div class="col-md-12 col-sm-12 text-center ftco-animate">
          <span class="subheading">LFC</span>
          <h1 class="mb-4">Delicious Specialties</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="featured">
          <div class="row mb-2">
            @foreach ($SliderProducts as $Product)
            <div class="col-md-3">
              <div class="featured-menus ftco-animate">
                <div class="menu-img img" style="background-image: url({{asset($Product['img'])}});"></div>
                <div class="text text-center">
                  <h3>{{$Product['name']}}</h3>
                  <p>{{$Product['menu']}}</p>
                  <h3>৳{{$Product['price']}}</h3>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-wrap-about">
  <div class="container">
    <div class="row">
      <div class="col-md-7 d-flex">
        <div class="img img-1 mr-md-2" style="background-image: url({{asset('assets/images/about.jpg')}});"></div>
        <div class="img img-2 ml-md-2" style="background-image: url({{asset('assets/images/about-1.jpg')}});"></div>
      </div>
      <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
        <div class="heading-section mb-4 my-5 my-md-0">
          <span class="subheading">About</span>
          <h2 class="mb-4">Lovely Fried Chicken</h2>
        </div>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
          paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <div class="time">
            <span><strong>Address:</strong> Kunia Targas Gazipur North Side of Tairunnesa Medical College</span>
            <span>Mon - Fri <strong>8 AM - 11 PM</strong></span>
            <span><a href="#">+880 1748 696066</a></span>
          </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
  <div class="container">
    <div class="row d-md-flex">
      <div class="col-md-9">
        <div class="row d-md-flex align-items-center">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="5">0</strong>
                <span>Years of Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="116">0</strong>
                <span>Menus/Dish</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="10">0</strong>
                <span>Staffs</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="15000">0</strong>
                <span>Happy Customers</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center text-md-left">
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-12 text-center heading-section ftco-animate">
        <span class="subheading">Packages</span>
        <h2 class="mb-4">Our Best Meal</h2>
      </div>
    </div>
    <div class="row">
      @foreach ($BestMeal as $menu )
        <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
          <div class="media block-6 services d-block">
            <img class="img" height="200px" src={{$menu['img']}} alt="" >
            <div class="media-body p-2 mt-3">
              <h3 class="heading">{{$menu['name']}} </h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-12 text-center heading-section ftco-animate">
        <span class="subheading">Specialties</span>
        <h2 class="mb-4">Our Menu</h2>
      </div>
    </div>
    <div class="row">
      @foreach($SpacialProducts as $Product)
      <div class="col-md-6 col-lg-3 mb-5 ftco-animate">
        <div class="menu text-center">
          <div class="img" style="background-image: url({{asset($Product['img'])}});"></div>
          <div class="text p-3">
            <h3> {{$Product['name']}} </h3>
            <span class="position mb-2">{{$Product['menu']}}</span>
            <h3> ৳{{$Product['price']}}</h3>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row text-center">
      <div class="col-md-12"><a href="/menu" class="btn btn-primary py-2 px-4">See More</a></div>
    </div>
  </div>
</section>

<section class="ftco-section img" style="background-image: url({{asset('assets/images/bg_3.jpg')}})" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
        <div class="heading-section ftco-animate mb-5 text-center">
          <span class="subheading">Book a table</span>
          <h2 class="mb-4">Make Reservation</h2>
        </div>
        <form action="#">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" placeholder="Phone">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" id="book_date" placeholder="Date">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Time</label>
                <input type="text" class="form-control" id="book_time" placeholder="Time">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Person</label>
                <div class="select-wrap one-third">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control">
                    <option value="">Person</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4+</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="form-group text-center">
                <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section img">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-12 text-center heading-section ftco-animate">
        <span class="subheading">Most</span>
        <h2 class="mb-4">Popular Menu</h2>
      </div>
    </div>
    <div class="row ftco-animate justify-content-center">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          @foreach ($PopularMenu as $menu)
            <div class="item">
              <div class="testimony-wrap text-center pb-5">
                <img src="{{asset($menu['img'])}}" class="user-img mb-1" alt=" ">
                <div class="text px-5 py-3">
                  <p class="name"> {{$menu['name']}} </p>
                  <span class="position">৳{{$menu['price']}} </span>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
@endsection
