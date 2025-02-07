@extends('Home.Layout.home')
@section('content')
    <div id="carouselExampleCaptions" style="height: 250px" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/bg1.jpg') }}" class="d-block w-100" style="height: 250px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/b2.jpg') }}" class="d-block w-100" style="height: 250px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/bg3.jpg') }}" class="d-block w-100" style="height: 250px" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row mt-3">
        @if (count($brands) == 0)
            <h4>No result found!</h4>
        @else
        <h4>Found brands:</h4>

            @foreach ($brands as $brand)
                <div class="card m-2" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $brand->Title }}</h5>
                        <p class="card-text"></p>

                        <a href="{{ route('brands', ['id' => $brand->id, 'name' => $brand->Title]) }}"><img
                                class="img-thumbnail" src="{{ asset('img/' . $brand->Image) }}" alt=""
                                width="200" height="100"></a>

                    </div>
                </div>
            @endforeach
        @endif

    </div>
@endsection
