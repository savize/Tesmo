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

    <div class="row mt-4 pt-2">
        <h3 class="d-flex align-items-center justify-content-center">All Brands</h3>
        @include('Home.Windget.brands')
    </div>

    <div class="row">
        {{ $brands->links() }}
    </div>

    <div class="row">
        <h3 class="d-flex align-items-center justify-content-center">New Brands</h3>
        @foreach ($newB as $item)
            <div class="card bg-light m-2" style="width: 15rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->Title }}</h5>
                    <p class="card-text"></p>
                    <a href="{{ route('brands', ['id' => $item->id, 'name' => $item->Title]) }}"><img class="img-thumbnail"
                            src="{{ asset('img/' . $item->Image) }}" alt=""></a>
                    <a href="{{ route('brands', ['id' => $item->id, 'name' => $item->Title]) }}"
                        class="card-link link-underline link-underline-opacity-0">View more ></a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-4 pt-2 mb-4 pb-2">
        <h3 class="d-flex align-items-center justify-content-center">Categories</h3>

        @foreach ($cats as $item)
            <div class="card m-2 bg-secondary border border-0 justify-content-center"
                style="width: 15rem; --bs-bg-opacity: .1; ">
                <a class="link-underline link-underline-opacity-0"
                    href="{{ route('categs', ['id' => $item->id, 'category' => $item->Name]) }}">

                    <div class="card-body d-flex justify-content-center">
                        <h5 class="card-title">{{ $item->Name }}</h5>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
