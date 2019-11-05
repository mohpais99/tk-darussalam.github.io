@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/landing/belajar.jpg');">
    {{-- <div class="overlay"></div> --}}
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread" style="color: #a64dff !important">Galeri Kami</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fas fa-arrow-circle-right"></i></a></span> <span>Galeri</span></p>
        </div>
      </div>
    </div>
  </section>
    

    <section class="ftco-gallery">
        <div class="container">
            <div class="col-md-12 text-center heading-section m-5">
                <h2 class=""><span>Galeri</span> TK Darussalam</h2>
            </div>
            <div class="row no-gutters">
                @foreach ($gallery as $item)
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery/{{$item->foto}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url('images/gallery/{{$item->foto}}');">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="fa fa-search-plus"></span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            {{-- <div class="row no-gutters my-5">
                <div class="col text-center">
                <div class="block-27">
                    <ul>
                    <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
                </div>
            </div> --}}
          </div>
      </section>
@endsection