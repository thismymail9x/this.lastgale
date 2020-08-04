@extends('master')
@section('content')
    <?php
    $ratingArray = [
        '1' => 'Very Bad',
        '2' => 'Poor',
        '3' => 'Ok',
        '4' => 'Good',
        '5' => 'Excellent',
    ]
    ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/bg_1.jpg') }});"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-0 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Host <i
                                        class="fa fa-chevron-right"></i></a></span> <span>Rental <i
                                    class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-3 bread">Rental</h1>
                </div>
            </div>
        </div>
    </section>
    <div>
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name House</th>
                    <th scope="col">Arrival Date</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $key=> $order)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td><a href="{{route('house.details', $order->house->id)}}">{{$order->house->name}}</a></td>
                        <td>{{\Carbon\Carbon::create($order->arrival_date)->toFormattedDateString()}}</td>
                        <td>{{\Carbon\Carbon::create($order->departure_date)->toFormattedDateString()}}</td>
                        <td>{{$order->status}}</td>
                        <input type="text" hidden
                               value="{{$date= \Carbon\Carbon::create($order->arrival_date)->diffInDays($currentDate) }}">
                        {{-- @dd($date) --}}
                        @if( $date < 1)
                            <td>
                            </td>
                        @else
                            <td><a href="{{route('order.delete',$order->id)}}" class="btn btn-warning"
                                   onclick="return confirm('Are you sure?')">Cancel</a></td>
                        @endif
                        <td>
                            <?php
                            $rating = new \App\Rating();
                            $existRating = $rating->where('house_id', '=', $order->house_id)->where('user_id', '=', $order->user_id)->first();
                            ?>
                            <div class="btn btn-success" data-toggle="modal" data-target="{{'#myReview' . $key}}">Review</div>
                            <div class="modal fade" id="{{'myReview' . $key}}" role="dialog">
                                <div class="modal-dialog modal-dialog modal-lg">
                                    <div class="container modal-content" style="background: #f7f7f7">
                                        <form class="container" method="post"
                                              id="{{ $existRating ? 'formReviewUpdate'.$key : 'formReviewCreate'.$key }}"
                                              style="margin: 20px" action="">
                                            @csrf
                                            <h2 style="text-align: center">Review</h2>
                                            <input type="hidden" name="house" value="{{ $order->house_id }}">
                                            <input type="hidden" name="user" value="{{ $order->user_id }}">
                                            <div>
                                                <h3>Star Rating</h3>

                                                @for($i = 1; $i <= ($existRating ? $existRating['stars'] : 5); $i++)
                                                    <span class="fa fa-star star-{{ $i }} checked"></span>
                                                @endfor
                                                @for($i = ($existRating ? $existRating['stars'] + 1 : 6); $i <= 5; $i++ )
                                                    <span class="fa fa-star star-{{ $i }}"></span>
                                                @endfor
                                                <br>
                                                <input
                                                        class="result-rating1 btn btn-success"
                                                        style="width: 130px; background: #24A148"
                                                        value="{{ $existRating ? $existRating['stars'] : 'Excellent' }}"
                                                        readonly>
                                                <input name="stars" class="result-rating2" type="hidden"
                                                       value="{{ $existRating ? $existRating['stars'] : 5 }}">

                                            </div>
                                            <div id="ratingError">

                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <h3>Description</h3>
                                                <textarea class="form-control" name="comments" cols="30"

                                                          rows="5">{{ $existRating ? $existRating['comments'] : '' }}</textarea>

                                            </div>
                                            <hr>
                                            @if($existRating)
                                                <input type="submit" class="col-5 btn btn-primary" id="edit"
                                                       value="Edit">
                                                <a onclick="return confirm('Are you delete your review?')"
                                                   href="{{ route('ratings.delete', $existRating['id']) }}"
                                                   class="col-5 btn btn-secondary" style="float: right">Delete</a>
                                            @else
                                                <input type="submit" class="btn-primary" value="Send">
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function () {
                                    $('.star-5').hover(function () {
                                        $('.star-5, .star-4, .star-3, .star-2, .star-1').addClass('checked');
                                        $('.result-rating1').val('Excellent');
                                        $('.result-rating2').val(5);
                                    });
                                    $('.star-4').hover(function () {
                                        $('.star-5').removeClass('checked');
                                        $('.star-4, .star-3, .star-2, .star-1').addClass('checked');
                                        $('.result-rating1').val('Good');
                                        $('.result-rating2').val(4);
                                    });
                                    $('.star-3').hover(function () {
                                        $('.star-5, .star-4').removeClass('checked');
                                        $('.star-3, .star-2, .star-1').addClass('checked');
                                        $('.result-rating1').val('Ok');
                                        $('.result-rating2').val(3);
                                    });
                                    $('.star-2').hover(function () {
                                        $('.star-5, .star-4, .star-3').removeClass('checked');
                                        $('.star-2, .star-1').addClass('checked');
                                        $('.result-rating1').val('Poor');
                                        $('.result-rating2').val(2);
                                    });
                                    $('.star-1').hover(function () {
                                        $('.star-5, .star-4, .star-3, .star-2').removeClass('checked');
                                        $('.star-1').addClass('checked');
                                        $('.result-rating1').val('Very bad');
                                        $('.result-rating2').val(1);
                                    });

                                    $("{{'#formReviewCreate'.$key}}").submit(function (e) {
                                        e.preventDefault();
                                        let formData = new FormData(this);
                                        $.ajax({
                                            method: 'POST',
                                            header: {
                                                Accept: 'location/json'
                                            },
                                            url: '{{route('ratings.create')}}',
                                            data: formData,
                                            contentType: false,
                                            processData: false,
                                            success: () => {
                                                swal({title: 'Thank you for review!!!', type: 'success'});
                                                $('*').click(function () {
                                                    window.location.reload()
                                                })
                                            },
                                            error: (response) => {
                                                console.log(response);
                                                if (response.status === 422) {
                                                    let errors = response.responseJSON.errors;
                                                    $("#ratingError").css('color', 'red').text(errors);
                                                }
                                            }
                                        })
                                    });
                                })
                            </script>
                            @if($existRating)
                                <script>
                                    $(document).ready(function () {
                                        $("{{'#formReviewUpdate'.$key}}").submit(function (e) {
                                            e.preventDefault();
                                            let formData = new FormData(this);
                                            $.ajax({
                                                method: 'POST',
                                                header: {
                                                    Accept: 'location/json'
                                                },
                                                url: '{{ route('ratings.update', $existRating['id']) }}',
                                                data: formData,
                                                contentType: false,
                                                processData: false,
                                                success: () => {
                                                    swal({title: 'Update review is successfully!!!', type: 'success'});
                                                    $('*').click(function () {
                                                        window.location.reload()
                                                    })
                                                },
                                                error: (response) => {
                                                    console.log(response);
                                                    if (response.status === 422) {
                                                        let errors = response.responseJSON.errors;
                                                        $("#ratingError").css('color', 'red').text(errors);
                                                    }
                                                }
                                            })
                                        })
                                    });
                                </script>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
