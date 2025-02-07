
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

@extends('Home.Layout.home')

@section('content')
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10">

                <div class="row mb-4">
                    <div class="col text-start align-content-start">
                        <h3 class="fw-normal mb-0">Your Shopping Cart</h3>
                        <a class="btn btn-primary mt-3" href="{{ route('basket.history') }}" role="button">Shopping
                            History</a>
                    </div>
                    <div class="col text-end">
                        <h5 class="fw-normal mb-0">Wallet Balance: £ {{ $wallet->price }}</h5>
                    </div>

                </div>

                @if ($basketItems->count() != 0)
                    @foreach ($basketItems as $item)
                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-2">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-1">
                                        <img src="{{ asset('img/' . $item->product()->img) }}" class="img-fluid rounded-3">
                                    </div>
                                    <div class="col-3 d-flex ml-2">
                                        <h6 class="mb-2">{{ $item->product()->Name . ' | ' . $item->brand()->Title }}
                                        </h6>
                                    </div>
                                    <div class="col-2 d-flex">
                                        <div class="col">
                                            <a href="{{ route('basket.remove', ['product_id' => $item->product_id]) }}"><i
                                                    class="fa fa-minus"></i>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h6>{{ $item->count }}</h6>
                                        </div>
                                        <div class="col">
                                            <a
                                                href="{{ route('basket.add', ['brand_id' => $item->brand_id, 'product_id' => $item->product_id]) }}"><i
                                                    class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <h6 class="mb-0">£ {{ $item->product()->Price }}</h6>
                                    </div>
                                    <div class="col-1">
                                        <a href="{{ route('basket.del', ['product_id' => $item->product_id]) }}"
                                            class="text-danger"><i class="fa fa-trash fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="card">
                        <div class="card-body justify-content-center">
                          <div class="row">
                            <h3 class="fw-normal mb-0">Total Amount: £ {{ $amount }}</h3>
                          </div>
                          <div class="row mt-3">
                            <a href="{{ route('checkout', ['user_id' => Auth::user()->id]) }}"><button type="button"
                              class="btn btn-warning btn-block btn-lg">Checkout</button>
                          </div>

                            </a>
                        </div>

                    </div>
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
