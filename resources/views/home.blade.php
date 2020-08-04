@extends('master')
@section('content')
    <section class="hero-wrap" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt">
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt search-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate p-4">
                        <form action="{{route('list.search')}}" class="search-property-1" method="get">
                            <div class="row">
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Date </label>
                                        <div class="form-field">
                                            <input class="btn btn-warning" data-toggle="modal" data-target="#myModalPickDay" value="Choose Day" id="input-chooseDay" readonly>
                                            <input type="hidden" id="input-start" name="startDate">
                                            <input type="hidden" id="input-end" name="endDate">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Bed room</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <select name="bed_room" id="" class="form-control">
                                                    <option style="color: #495057" value="" selected>Choose</option>
                                                    <option style="color: #495057" value="1">1</option>
                                                    <option style="color: #495057" value="2">2</option>
                                                    <option style="color: #495057" value="3">3</option>
                                                    <option style="color: #495057" value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Bath room</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <select name="bath_room" id="" class="form-control">
                                                    <option style="color: #495057" value="" selected>Choose</option>
                                                    <option style="color: #495057" value="1">1</option>
                                                    <option style="color: #495057" value="2">2</option>
                                                    <option style="color: #495057" value="3">3</option>
                                                    <option style="color: #495057" value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Price Limit</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <select name="bath_room" id="" class="form-control">
                                                    <option style="color: #495057" value="" selected>Choose</option>
                                                    <option style="color: #495057" value="500000">500,000</option>
                                                    <option style="color: #495057" value="1000000">1,000,000</option>
                                                    <option style="color: #495057" value="1500000">1,500,000</option>
                                                    <option style="color: #495057" value="2000000">2,000,000</option>
                                                    <option style="color: #495057" value="5000000">5,000,000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Location</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="fa fa-search"></span></div>
                                            <input type="text" class="form-control" name="location"
                                                   placeholder="Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Search" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-primary">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-business"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Trusted by Thousands</h3>
                            <p style="color:black;">A small river named Duden flows by their place and supplies it with
                                the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-home"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Wide Range of Properties</h3>
                            <p style="color:black;">A small river named Duden flows by their place and supplies it with
                                the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-stats"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Financing Made Easy</h3>
                            <p style="color:black;">A small river named Duden flows by their place and supplies it with
                                the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-quarantine"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Locked in Pricing</h3>
                            <p style="color:black;">A small river named Duden flows by their place and supplies it with
                                the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Featured Properties start--}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Best Seller</h2>
                </div>
            </div>
{{--            <div class="row ftco-animate">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="carousel-properties owl-carousel ">--}}
{{--                        <div class="item">--}}
{{--                            @foreach($houses as $house)--}}
{{--                            <div class="property-wrap ftco-animate">--}}
{{--                                <a href="#" class="img" style="background-image: url({{asset('storage/' . $house->houseDetails()->first()->filename)}});">--}}
{{--                                    <div class="rent-sale">--}}
{{--                                        <span class="sale">Sale</span>--}}
{{--                                    </div>--}}
{{--                                    <p class="price"><span class="orig-price">{{$house->price}}</span></p>--}}
{{--                                </a>--}}
{{--                                <div class="text">--}}
{{--                                    <ul class="property_list">--}}
{{--                                        <li><span class="flaticon-bed"></span>3</li>--}}
{{--                                        <li><span class="flaticon-bathtub"></span>2</li>--}}
{{--                                        <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>--}}
{{--                                    </ul>--}}
{{--                                    <h3><a href="#">The Blue Sky Home</a></h3>--}}
{{--                                    <span class="location">Oakland</span>--}}
{{--                                    <a href="#" class="d-flex align-items-center justify-content-center btn-custom">--}}
{{--                                        <span class="fa fa-link"></span>--}}
{{--                                    </a>--}}
{{--                                    <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">--}}
{{--                                        <div class="d-flex align-items-center">--}}
{{--                                            <div class="img" style="background-image: url(images/person_1.jpg);"></div>--}}
{{--                                            <h3 class="ml-2">John Dorf</h3>--}}
{{--                                        </div>--}}
{{--                                        <span class="text-right">2 weeks ago</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="container mt-5">

                <div class="row">
                    @foreach($houses as $house)
                        <div class="col-md-4">
                            <div class="property-wrap ftco-animate">
                                <a href="{{route('house.details', $house->id)}}" class="img"
                                   style="background-image: url({{asset('storage/' . $house->houseDetails()->first()->filename)}})">
                                    <p class="price"><span class="orig-price">${{$house->price}}</span></p>
                                </a>
                                <div class="text">
                                    <h3><a href="#">{{$house->name}}</a></h3>
                                    <span class="location">{{$house->address}}</span>
                                    <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                        <span class="fa fa-link"></span>
                                    </a>
                                    <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                        <div class="d-flex align-items-center">
                                            <div class="img"
                                                 style="background-image: url({{asset('#')}});"></div>
                                            {{--                                <h3 class="ml-2">John Dorf</h3>--}}
                                        </div>
                                        <span class="text-right">{{$house->created_at}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    {{--Featured Properties end--}}


    <section class="ftco-section services-section bg-darken">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Work flow</span>
                    <h2 class="mb-3">How it works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>01</span>
                                <img src="images/blob.svg" alt="">
                            </div>
                            <h3>Evaluate Property</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>02</span>
                                <img src="images/blob.svg" alt=""></div>
                            <h3>Meet Your Agent</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>03</span>
                                <img src="images/blob.svg" alt=""></div>
                            <h3>Close the Deal</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>04</span>
                                <img src="images/blob.svg" alt=""></div>
                            <h3>Have Your Property</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row pt-md-5">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-5 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="1000">0</strong>
                            <span>Area <br>Population</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-5 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="2500">0</strong>
                            <span>Total <br>Properties</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-5 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="500">0</strong>
                            <span>Average <br>House</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-5 mb-4">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="67">0</strong>
                            <span>Total <br>Branches</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-agent">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Agents</span>
                    <h2 class="mb-4">Our Agents</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
                            <div class="desc">
                                <h3><a href="properties.html">Carlos Henderson</a></h3>
                                <p class="h-info"><span class="location">Listing</span> <span class="details">10
                                    Properties</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">Mike Bochs</a></h3>
                            <p class="h-info"><span class="location">Listing</span> <span class="details">10
                                Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">Jessica Moore</a></h3>
                            <p class="h-info"><span class="location">Listing</span> <span class="details">10
                                Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">Sarah Geronimo</a></h3>
                            <p class="h-info"><span class="position">Listing</span> <span class="details">10
                                Properties</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
