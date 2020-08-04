@extends('master')
@section('content')
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
<section>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h4>What kind of place are you listing ?</h4>
                        <p>Provide personal details and how we can reach you.</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('house.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">FIRST, CHOOSE YOUR PROPERTY TYPE</label>
                                <select name="house_category" id="" class="form-control">
                                    <option value="Homestay">Homstay</option>
                                    <option value="Detached house">Detached house</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Villa">Villa</option>
                                </select>
                            </div>
                            <div class="form-grouup">
                                <label for="">GUESTS WILL SEE THE NAME OF YOUR HOUSE</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    required>
                            </div>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="">RENTAL TYPE ?</label>
                                <select name="room_category" id="" class="form-control">
                                    <option value="Entire place">Entire place</option>
                                    <option value="Private room">Private room</option>
                                    <option value="Shared room">Shared rom</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Bathroom?</label>
                                <select name="bathroom_amount" id="" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Bedroom?</label>
                                <select name="bedroom_amount" id="" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input class="form-control @error('address') is-invalid @enderror" type="text"
                                    name="address" id="">
                            </div>
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="">Price($)</label>
                                <input class="form-control @error('price') is-invalid @enderror" type="text"
                                    name="price" id="">
                            </div>
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            {{--                            them location map--}}
                            <div class="form-group">
                                <label for="">Location</label>
                                <input class="form-control " type="text" name="location" id="">
                            </div>


                            {{--                            end them location map--}}
                            <div class="form-group @error('description') is-invalid @enderror">
                                <label for="">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('description');
                                </script>
                            </div>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group @error('image') is-invalid @enderror">
                                <label for="">Image</label>
                                {{-- <div class="file-loading">
                                    <input id="image" name="image[]" type="file" multiple>
                                </div> --}}
                                <input id="image" name="image[]" type="file" class="file"
                                    data-browse-on-zone-click="true" multiple>
                                <div id="file-errors"></div>
                                @if (session('extension'))
                                <div class="alert alert-danger">{{session('extension')}}</div>
                                @endif

                            </div>
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <button class="btn-lg btn-success" style="float: right">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $("#image").fileinput({
    theme: "fas",
    uploadUrl: "/file-upload-batch/2",
    elErrorContainer: '#file-errors',
    allowedFileExtensions: ["jpg", "png", "jpeg"]
});
</script>
@endsection
