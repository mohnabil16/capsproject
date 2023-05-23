@extends('layout.tamplate')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide mt-5 px-3 py-3 mx-auto mt-5">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{asset('poto\FIFA.jpeg')}}" class="d-block img-fluid" alt="gambar1">
    </div>
    <div class="carousel-item">
        <img src="{{asset('poto\NBA.jpeg')}}" class="d-block img-fluid" alt="gambar2">
    </div>
    <div class="carousel-item">
        <img src="{{asset('poto\6.jpeg')}}" class="d-block img-fluid" alt="gambar3">
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container">
    @foreach ($product as $item)
    <div class="row" >
        <div class="w-50 center border rounded px-3 py-3 mx-auto mt-5 shadow-sm">
        <div class="product text-center">
            <img src="{{asset('poto\Ps4.jpeg')}}" class="product-img-top" alt="" width="200px">
        <div class="product-body">
            <h5 class="product-title">{{$item->name}}</h5>
            <h6 class="product-price">Rp. {{$item->price}}</h6>
            <p class="product-desc">{{$item->category->name}}</p>
<form action="{{url('cart')}}" method="post">
    @csrf
    {{-- <input type="number" value="1" min="1" class="form-control" style="width: 100px"> --}}
    <input type="hidden" name="product_id" value="{{$item->id}}">
    <a href="" class="btn btn-dark d-grid ">Tambah</a>
</form>

        </div>
        </div>
    </div>
    </div>
    @endforeach
</div>
@endsection
