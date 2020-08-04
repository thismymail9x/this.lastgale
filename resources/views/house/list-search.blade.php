@extends('master')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/bg_1.jpg') }});"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-0 text-center">

                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i
                                    class="fa fa-chevron-right"></i></a></span><span>Properties <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-3 bread">Gallery</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate p-4">
                        <form action="{{route('list.search')}}" class="search-property-1" method="get">
                            <div class="row">
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Date</label>
                                        <div class="form-field">
                                            <input class="btn btn-warning" data-toggle="modal"
                                                   data-target="#myModalPickDay" value="Choose Day" id="input-chooseDay"
                                                   readonly>
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
                                                {{--                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>--}}
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
                                                {{--                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>--}}
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
                                                {{--                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>--}}
                                                <select name="price_limit" id="" class="form-control">
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
    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <br>
                    <br>

                    <h2 class="mb-2">Gallery</h2>
                </div>
            </div>
            <div class="row">
                @if(count($arrayHouse)== 0)
                    <h3 style="text-align: center">Non-data</h3>
                @endif
                @foreach ($arrayHouse as $house)

                    <div class="col-md-4">
                        <div class="property-wrap ftco-animate">
                            <a href="{{route('house.details', $house->id)}}" class="img"
                               style="background-image: url({{asset('storage/' . $house->houseDetails()->first()->filename)}})">
                                <p class="price"><span class="orig-price">${{$house->price}}</span></p>
                            </a>
                            <div class="text">
                                {{--                        <ul class="property_list">--}}
                                {{--                            <li><span class="flaticon-bed"></span>{{$house->bedroom_amount}}</li>--}}
                                {{--                            <li><span class="flaticon-bathtub"></span>{{$house->bathroom_amount}}</li>--}}
                                {{--                        </ul>--}}
                                <h3><a href="#">{{$house->name}}</a></h3>
                                <span class="location">{{$house->address}}</span>
                                <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                    <span class="fa fa-link"></span>
                                </a>
                                <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                    <div class="d-flex align-items-center">
                                        <div class="img" style="background-image: url({{asset('#')}});"></div>
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
    </section>
@endsection
