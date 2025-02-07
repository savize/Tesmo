@extends('Home.Layout.home')

@section('content')
<div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-10">

        <div class="row mb-4">
          <div class="col text-start">
            <h3 class="fw-normal mb-0">Your Shopping History</h3>
            <a class="btn btn-primary mt-3" href="{{ route('basket') }}" role="button">Back to Shopping Card</a>
          </div>
        </div>  

        @if ($baskets->count()!=0)
        @foreach ($baskets as $item)

        <div class="card rounded-3 mb-4">
          <div class="card-body p-2">
            <div class="row d-flex justify-content-between align-items-center">
        
              <div class="col d-flex ml-2">
                <h6 class="mb-2">Basket Amount: £ {{ $item->price}}  </h6>
              </div>
              <div class="col d-flex ml-2">
                <h6 class="mb-2">Date: {{ $item->created_at}}  </h6>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        {{-- {{ dd($products) }} --}}

        {{-- <div class="col">
            @foreach ($products as $item)
            <h6>{{ $item->product()->Name}}</h6>

            @endforeach
        </div> --}}

        {{-- <div class="card">
          <div class="card-body d-flex justify-content-center">
              <h3 class="fw-normal mb-0">Total Amount: £ {{ $amount }}</h3>  
          </div>
          <div class="card-body d-flex justify-content-center">
            <a href="{{ route('checkout',['user_id'=>Auth::user()->id]) }}"><button  type="button" class="btn btn-warning btn-block btn-lg">Checkout</button>
            </a>
          </div>
        </div> --}}
        @else
        <div class="card mb">
          <div class="card-body d-flex justify-content-center">
              <h3 class="fw-normal mb-0">Empty</h3>  
          </div>
        </div>
        @endif
    

      </div>
    </div>
  </div>
@endsection