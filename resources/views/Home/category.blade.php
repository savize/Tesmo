@extends('Home.Layout.home')

@section('content')    
<h3 class="d-flex align-items-center justify-content-center text-primary">{{ $category->Name }} Products</h3> 

  <div class="row mt-4 justify-content-center">
    <div class="col-6">
        <ul class="list-group">
            @foreach ($category->products() as $product)                            
                <li class="list-group-item">
                    <div class="row align-items-center text-center">
                      <div class="col">
                                        <img class="img" src="{{ asset('img/'.$product->img) }}"; alt="" width="65">
                                    </div>
                        <div class="col">
                            {{ $product->brand()->first()->Title}}
                        </div>
                        <div class="col">
                            {{ $product->Name }}                                  
                        </div>
                        <div class="col">
                            £ {{ $product->Price }}
                        </div>
                        @if (Auth::user())
                        <div class="col">
                            <a href="{{ route('basket.add', ['product_id'=>$product->id, 'brand_id'=>$product->brand()->first()->id]) }}" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Add</a>
                        </div>
                        @endif

                    </div>
                </li>
                @endforeach
        </ul>
    </div>
</div>



@endsection