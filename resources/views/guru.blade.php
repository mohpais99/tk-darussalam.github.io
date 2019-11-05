@extends('layouts.app')

@section('content')
    
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/landing/belajar.jpg');">
    {{-- <div class="overlay"></div> --}}
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread" style="color: #a64dff !important">Guru Kami</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="fas fa-arrow-circle-right"></i></a></span> <span>Guru </span></p>
        </div>
      </div>
    </div>
  </section>
      
      <section class="ftco-section ftco-no-pb">
          <div class="container">
              <div class="row">
                    @foreach ($guru as $item)    
                        <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="staff">
                                <div class="img-wrap d-flex align-items-stretch">
                                    <div class="img align-self-stretch" style="background-image: url({{$item->defaultFoto()}});"></div>
                                </div>
                                <div class="text pt-3 text-center">
                                    <h3>{{$item->name}}</h3>
                                    <span class="position mb-2">{{$item->jabatan}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach                
              </div>
          </div>
      </section>
@endsection