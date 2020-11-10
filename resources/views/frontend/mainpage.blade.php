@extends('layouts.frontendtemplate')
@section('title', 'home')
@section('content')
    <style>
        .styleText {
            text-shadow: 2px 2px #5F6A6A;
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                {{--side-bar component --}}
                <x-sidebar-component></x-sidebar-component>
            </div>
            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid sliderImg" src="{{ asset('images/sliders/gm.jpg') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid sliderImg" src="{{ asset('images/sliders/bella.png') }}"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid sliderImg" src="{{ asset('images/sliders/brand.jpg') }}"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        {{-- popular items --}}
        <div class="container row mt-5">
            <div class="col-12 bg-info text-light mb-5">
                <h3 class="myFont">popular items</h3>
            </div>
            @foreach ($randomItems as $item)
                <x-item-component :item="$item"></x-item-component>
            @endforeach
        </div>

        {{-- promotion items --}}
        <div class="container row mt-5">
            <div class="col-12 bg-info text-light mb-5">
                <h3 class="myFont">promotion items</h3>
            </div>
            @foreach ($discountItems as $item)
                <x-item-component :item="$item"></x-item-component>
            @endforeach
            <div class="col-12">
                {{ $discountItems->links() }}
            </div>
        </div>

        {{-- covid items --}}
        <div class="container row mt-5">
            <div class="col-12 bg-info text-light mb-5">
                <h3 class="myFont">covid-19 protection & accessories</h3>
            </div>
            @foreach ($covidItems as $item)
                <x-item-component :item="$item"></x-item-component>
            @endforeach
            <div class="col-12">
                {{ $covidItems->links() }}
            </div>
        </div>

        {{-- brands --}}
        <div class="container row mt-5">
            <div class="col-12 bg-info text-light mb-5">
                <h3 class="myFont">in shop brands</h3>
            </div>
            @foreach ($brands as $brand)
                <div class="col-lg-3 col-md-4 mb-4 myFont">
                    <div class="card h-100">
                        <img width="200" height="200" style="object-fit: cover;" class="card-img-top img_hover"
                            src="{{ asset($brand->photo) }}" alt="">
                    </div>
                </div>
            @endforeach
            <div class="col-12">
                {{ $covidItems->links() }}
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('my_asset/js/custom.js') }}"></script>
@endsection
