@extends('master')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_1.jpg') }}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a
                            href="{{route('house.list')}}">Properties <i class="fa fa-chevron-right"></i></a></span>

                    <span>Properties Single <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Property Details</h1>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="ftco-section ftco-property-details">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="height: 500px">
                <div class="property-details">
                    <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($house->houseDetails as $key => $item)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" @if ($key===0)
                                {{'class="active"'}} @endif></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($house->houseDetails as $key => $item)
                            <div class="carousel-item @if ($key == 0)
                                    {{"active"}}
                                    @endif">
                                <img src="{{ asset('storage/' . $item->filename) }}" class="d-block" style="height: 500px" alt="image">
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            @if(\Illuminate\Support\Facades\Auth::user())
            @if(\Illuminate\Support\Facades\Auth::user()->id!==$house->user_id)
            <div class="col-md-4">
                <div
                    style="border: 1px solid rgb(221, 221, 221); border-radius: 12px; padding: 24px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px; position: sticky; top: 150px; height: 500px;">
                    <form action="{{ route('rent', $house->id) }}">
                        <h4><b>{{$house->price}}$</b><small> /night</small></h4>
                        Check-in: <input class="@error('check_in') is-invalid @enderror"  id="startDate" name="check_in"
                            readonly required value="{{old('check_in')}}"/>
                        @error('check_in')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        Checkout: <input class="@error('checkout') is-invalid @enderror" id="endDate" name="checkout"
                            readonly required value="{{old('checkout')}}"/>
                        @error('checkout')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group mt-2">
                            <button class="form-control"
                                style="background: linear-gradient(to right, rgb(230, 30, 77) 0%, rgb(227, 28, 95) 50%, rgb(215, 4, 102) 100%) !important">
                                Book now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @endif
            @else
            <div class="col-md-4">
                <div
                    style="border: 1px solid rgb(221, 221, 221); border-radius: 12px; padding: 24px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px; position: sticky; top: 150px; height: 500px;">
                    <form action="{{ route('rent', $house->id) }}">
                        <div class="form-group">
                            <h4><b>{{$house->price}}$</b><small> /night</small></h4>
                            Check-in: <input class="@error('check_in') is-invalid @enderror" id="startDate"
                                name="check_in" readonly required value="{{old('check_in')}}"/>
                            @error('check_in')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            Checkout: <input class="@error('checkout') is-invalid @enderror" id="endDate"
                                name="checkout" readonly required value="{{old('checkout')}}" />
                            @error('checkout')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <button class="form-control"
                                style="background: linear-gradient(to right, rgb(230, 30, 77) 0%, rgb(227, 28, 95) 50%, rgb(215, 4, 102) 100%) !important">
                                Book now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <span class="subheading">{{$house->house_category}}</span>
                    <h2 id="name-house" data-id="{{$house->id}}">{{$house->name}}</h2>
                </div>
            </div>
            <div class="col-md-12 pills">
                <div class="bd-example bd-example-tabs">
                    <div class="d-flex">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                    href="#pills-description" role="tab" aria-controls="pills-description"
                                    aria-expanded="true">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                    href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                    aria-expanded="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review"
                                    role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                            </li>
                            @if(\Illuminate\Support\Facades\Auth::user())
                            @if(\Illuminate\Support\Facades\Auth::user()->id==$house->user_id)
                            <li class="nav-item">
                                <a class="btn btn-outline-success"
                                    href="{{route('users.history-show',$house->id)}}">Rental List</a>
                            </li>
                            @endif
                            @endif
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                            aria-labelledby="pills-description-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="fa fa-check-circle"></span>Address:
                                            {{$house->address}}
                                        </li>
                                        <li class="check"><span class="fa fa-check-circle"></span>Bed
                                            Rooms: {{$house->bedroom_amount}}</li>
                                        <li class="check"><span class="fa fa-check-circle"></span>Bath
                                            Rooms: {{$house->bathroom_amount}}</li>
                                        <li class="check"><span
                                                class="fa fa-check-circle"></span>{{$house->room_category}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="fa fa-check-circle"></span>Year Build::
                                            2019
                                        </li>
                                        <li class="check"><span class="fa fa-check-circle"></span>Price:
                                            {{$house->price}}</li>
                                        <li class="check"><span class="fa fa-check-circle"></span>Security:
                                            24/24
                                        </li>
                                        <li class="check"><span class="fa fa-check-circle"></span>Garage: 2</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel"
                            aria-labelledby="pills-manufacturer-tab">
                            {!! $house->description !!} <br>
                            <div class="map" style="visibility: hidden; display:inline;">{{$house->location}}</div>
                            <div class="google-map">
                            </div>
                            <style>
                                iframe {
                                    width: 100%;
                                    margin-top: -90px;
                                }
                            </style>
                        </div>

                        <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="head">{{ count($reviews['comments']) }} Comments</h3>
                                    <div>
                                        @foreach($reviews['comments'] as $rating)
                                        <div class="review d-flex">
                                            <div class="user-img"
                                                style="height: 100px; background-image: url('{{ asset("storage/" . $rating->user->image)}}')">
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">{{ $rating->user->name }}</span>
                                                    <span class="text-right">{{ $rating->created_at }}</span>
                                                </h4>
                                                <p class="star" style="margin-top: 10px">
                                                    <span>
                                                        @for($i = 0; $i < $rating->stars; $i++)
                                                            <i class="fa fa-star"></i>
                                                            @endfor
                                                    </span>
                                                </p>
                                                <p style="margin-top: 10px">{{ $rating->comments }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rating-wrap">
                                        <h3 class="head">Total reviews</h3>
                                        <div class="wrap">
                                            <p class="star" style="margin-top: 10px">
                                                <span style="margin-right: 18px">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    ({{ $reviews['total'] != 0 ? round($reviews['5'] / $reviews['total']*100) : 0 }}
                                                    %)
                                                </span>
                                                <span>{{ $reviews['5'] }} Reviews</span>
                                            </p>
                                            <p class="star" style="margin-top: 10px">
                                                <span style="margin-right: 18px">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star" style="color: gray"></i>
                                                    ({{ $reviews['total'] != 0 ? round($reviews['4'] / $reviews['total']*100) : 0 }}
                                                    %)
                                                </span>
                                                <span>{{ $reviews['4'] }} Reviews</span>
                                            </p>
                                            <p class="star" style="margin-top: 10px">
                                                <span style="margin-right: 18px">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star" style="color: gray"></i>
                                                    <i class="fa fa-star" style="color: gray"></i>
                                                    ({{ $reviews['total'] != 0 ? round($reviews['3'] / $reviews['total']*100) : 0 }}
                                                    %)
                                                </span>
                                                <span>{{ $reviews['3'] }} Reviews</span>
                                            </p>
                                            <p class="star" style="margin-top: 10px">
                                                <span style="margin-right: 18px">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star" style="color: gray"></i>
                                                    <i class="fa fa-star" style="color: gray"></i>
                                                    <i class="fa fa-star" style="color: gray"></i>
                                                    ({{ $reviews['total'] != 0 ? round($reviews['2'] / $reviews['total']*100) : 0 }}
                                                    %)
                                                </span>
                                                <span>{{ $reviews['2'] }} Reviews</span>
                                            </p>
                                            <p class="star" style="margin-top: 10px">
                                                <span style="margin-right: 18px">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star" style="color: gray"></i>
                                                    <i class="fa fa-star" style="color: gray"></i>
                                                    <i class="fa fa-star" style="color: gray"></i>
                                                    <i class="fa fa-star" style="color: gray"></i>
                                                    ({{ $reviews['total'] != 0 ? round($reviews['1'] / $reviews['total']*100) : 0 }}
                                                    %)
                                                </span>
                                                <span>{{ $reviews['1'] }} Reviews</span>
                                            </p>
                                            <hr>
                                            <p class="star" style="margin-top: 10px">
                                                <span style="margin-right: 18px">
                                                    <i class="fa fa-star star-1"></i>
                                                    <i class="fa fa-star star-2"></i>
                                                    <i class="fa fa-star star-3"></i>
                                                    <i class="fa fa-star star-4"></i>
                                                    <i class="fa fa-star star-5"></i>
                                                    <span
                                                        class="average">{{ $reviews['total'] != 0 ? round(($reviews['5']*5 + $reviews['4']*4 + $reviews['3']*3 + $reviews['2']*2 + $reviews['1']*1) / $reviews['total'], 2) : 0 }}</span>
                                                </span>
                                                <span>{{ $reviews['total'] }} Reviews</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            @foreach($bonusHouse as $house)
            <div class="col-md-3">
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
                                <div class="img" style="background-image: url({{asset('images/bg_2.jpg')}});"></div>
                                {{--                                <h3 class="ml-2">John Dorf</h3>--}}
                            </div>
                            <span class="text-right">{{$house->created_at}}</span>
                        </div>
                    </div>
                    <span class="text-right">{{$house->created_at}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
