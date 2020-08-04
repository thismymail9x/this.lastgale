@extends('master')
@section('content')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/bg_1.jpg') }});"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-0 text-center">

                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i
                                        class="fa fa-chevron-right"></i></a></span><span>Rental<i
                                    class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-3 bread">History</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section goto-here" style="background-image: url(https://www.joshloe.com/wp-content/uploads/2019/07/internet-heartbeat.gif)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">We have history</span>
                    <br>
                    <br>
                </div>
            </div>
            <div class="w3-card-4">
                <table class="w3-table-all">
                    <tr>
                        <th></th>
                        <th><i class="fas fa-user-md" style="font-size:15px;color:#2196F3"></i> &nbsp;Tenant name</th>
                        <th><i class="fas fa-envelope" style="font-size:20px;color:#2196F3"></i> &nbsp;Email</th>
                        <th><i class="fas fa-phone" style="font-size:20px;color:#2196F3"></i> &nbsp;Phone</th>
                        <th><i class="far fa-calendar-alt" style="font-size:20px;color:#2196F3"></i> &nbsp;Arrival date</th>
                        <th><i class="far fa-calendar-alt" style="font-size:20px;color:#2196F3"></i> &nbsp;Departure date</th>
                        <th><i class="fab fa-btc" style="font-size:20px;color:#2196F3"></i> &nbsp;Pay total</th>
                    </tr>
                    @foreach($order as $key=>$value)
                    <tr>
                        <th>{{++$key}}</th>
                        <th>{{$value->user->name}}</th>
                        <td>{{$value->user->email}}</td>
                        <td>{{$value->user->phone}}</td>
                        <td>{{$value->arrival_date}}</td>
                        <td>{{$value->departure_date}}</td>
                        <td>{{$value->total_price}}</td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>



@endsection