@extends('Home.Layout.home')

@section('content')
    

    <div class="container-fluid mb-4">
        <h2 class="text-center text-dark">{{ $brand->Title }}</h2>
    </div>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-6">
                <img class="img-thumbnail" src="{{ asset('img/'.$brand->Image) }}"; alt="" width="1204">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 mt-4">
                <a class="btn btn-secondary" href="{{ route('brands', ['id' => $brand->id]) }}" role="button">All</a>
                
                @php
                $uniqueCategories = $products->pluck('category')->unique('Name')
                @endphp

                @foreach ($uniqueCategories as $categ)
                <a class="btn btn-secondary" href="{{ route('brands', ['id' => $brand->id, 'categId'=> $categ->id]) }}" role="button">
                    {{ $categ->Name }}
                </a>
                @endforeach
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
                <div class="col-6">
                    <ul class="list-group">
                        @foreach ($products as $product)                            
                            <li class="list-group-item">
                                <div class="row align-items-center text-center">
                                    <div class="col">
                                        <img class="img" src="{{ asset('img/'.$product->img) }}"; alt="" width="65">
                                    </div>
                                    <div class="col">
                                        {{ $product->Name }}                                  
                                    </div>
                                    <div class="col">
                                        £ {{ $product->Price }}
                                    </div>
                                    @if (Auth::user())
                                    <div class="col">
                                        <a href="{{ route('basket.add', ['product_id'=>$product->id, 'brand_id'=>$brand->id]) }}" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Add</a>
                                    </div>
                                    @endif
                                </div>
                            </li>
                            @endforeach
                            @if (!Auth::user())
                            <div class="alert alert-warning mt-3 d-flex justify-content-center">
                            <p>Login/ register to purchase the products</p>
                        </div>
                            @endif
                    </ul>
                </div>
            </div>

    </div>

@endsection