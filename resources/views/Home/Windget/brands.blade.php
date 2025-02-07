
@foreach ($brands as $brand)
    
<div class="card m-2" style="width: 15rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $brand->Title }}</h5>
        <p class="card-text"></p>
        <a href="{{ route('brands', ['id' => $brand->id, 'name'=>$brand->Title]) }}"><img class="img-thumbnail" src="{{ asset('img/'.$brand->Image) }}" alt="" width="200" height="100"></a>
        <a href="{{ route('brands', ['id' => $brand->id, 'name'=>$brand->Title]) }}" class="card-link link-underline link-underline-opacity-0">View more ></a>
  </div>
</div>    
@endforeach

