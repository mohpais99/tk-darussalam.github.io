@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/BG-1.jpg);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        </div>
      </div>
  </section>


  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>Fasilitas</span> TK Kami</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="pricing-entry bg-light pb-4 text-center">
            <div class="img" style="background-image: url(images/landing/ruang-belajar.png);"></div>
            <div class="px-4">
              <h3>Ruang Belajar</h3>
              <p>Ruang belajar tersedia dan dilengkapi dengan loker dan alat pembelajaran yg lengkap</p>
            </div>
            <p class="button text-center">
              <button class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#ruangBelajar">Lihat Fasilitas</button>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="pricing-entry bg-light pb-4 text-center">
            <div class="img" style="background-image: url(images/landing/tempat-bermain.jpg);"></div>
            <div class="px-4">
              <h3>Tempat bermain</h3>
              <p>Tempat yang dapat digunakan siswa bermain ketika jam istirahat dan pembelajaran olahraga</p>
            </div>
            <p class="button text-center">
              <button class="btn btn-secondary px-4 py-3" data-toggle="modal" data-target="#tempatBermain" >Take A Course</button>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="pricing-entry bg-light active pb-4 text-center">
            <div class="img" style="background-image: url(images/landing/aula.jpg);"></div>
            <div class="px-4">
              <h3>Aula</h3>
              <p>Aula besar yang dapat digunakan untuk mengadakan acara pentas atau kegiatan lainnya</p>
            </div>
            <p class="button text-center">
              <button class="btn btn-tertiary px-4 py-3" data-toggle="modal" data-target="#aula">Lihat Fasilitas</button>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="pricing-entry bg-light pb-4 text-center">
            <div class="img" style="background-image: url(images/landing/perpustakaan.jpeg);"></div>
            <div class="px-4">
              <h3>Perpustaakan</h3>
              <p>Perpustaakan yang menyediakan buku bacaan untuk menambah wawasan anak</p>
            </div>
            <p class="button text-center">
              <button class="btn btn-quarternary px-4 py-3" data-toggle="modal" data-target="#perpustakaan">Lihat Fasilitas</button>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
      <div class="row justify-content-center pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class=""><span>Ekstrakulikuler</span> yang Tersedia</h2>
        </div>
      </div>
      <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fa fa-child"></span></div>
              <div class="text">
                <h3>MENARI</h3>
                <p> Aktifitas menari sangat efektif dalam membantu mengembangkan seorang anak untuk tumbuh dewasa dan sehat secara fisik, emosional, sosial, dan kognitif</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fa fa-paint-brush"></span></div>
              <div class="text">
                <h3>MELUKIS</h3>
                <p>Aktifitas melukis dapat membantu melatih kecerdasan motorik, meningkatkan memori,melatih kesabaran, mengurangi emosi negative dan meningkatkan kreativitas</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fas fa-swimmer"></span></div>
              <div class="text">
                <h3>BERENANG</h3>
                <p>Aktifitas berenang dapat meningkatkan fungsi jantung, melatih pernapasan, mengurangi stress, menambah tinggi badan dan menguatkan otot</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fas fa-book-open"></span></div>
              <div class="text">
                <h3>MEMBACA AL-QURAN</h3>
                <p>Mengenalkan Al-Qur’an pada anak sejak kecil dapat membantu perkembangan dalam berpikirnya dalam mempelajari Al-Qur’an, apabila kegiatan ini dilakukan terus menerus akan menambah pengetahuan pada anak tentang Al-Qur’an</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fa fa-comments"></span></div>
              <div class="text">
                <h3>BAHASA INGGRIS</h3>
                <p>Belajar bahasa inggris sejak dini dapat membantu meningkatkan kepercayaan diri, kreatifitas, gemar membaca, mudah bersosialisasi dan meningkatkan interaksi orangtua-anak</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fas fa-drum"></span></div>
              <div class="text">
                <h3>DRUM BAND</h3>
                <p>Manfaat Drum Band bagi anak yaitu dapat mengembangkan karakter, melatih berkomunikasi, berinteraksi dan bekerjasama, fokus dan disiplin dan menstimulus perkembangan saraf dan sel otak</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="ftco-intro" style="background-image: url(images/landing/islam.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h2><i>“Anak-anak lebih membutuhkan contoh dibandingkan kritik.” – Jospeh Joubeh, Pensees</i></h2>
          <p class="mb-0">TK Darussalam menerapkan sistem belajar sambil bermain, yang artinya siswa akan diberikan contoh pelajaran dari kegiatan bermain yang ada. Hal itu didukung oleh tenaga kerja pendidik TK Darussalam yang berkualitas sesuai standar yang ada</p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-4">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class=""><span>Event</span> TK Darussalam</h2>
          </div>
        </div>
        <div class="row">
            @foreach ($event as $item)                    
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <div class="block-20 d-flex align-items-end" style="background-image: url('/images/event/{{$item->foto}}');">
                            <div class="meta-date text-center p-2">
                            <span class="day">{{date('d', strtotime($item->tanggal_event))}}</span>
                            <span class="mos">{{date('M', strtotime($item->tanggal_event))}}</span>
                            <span class="yr">{{date('Y', strtotime($item->tanggal_event))}}</span>
                            </div>
                          </div>
                        <div class="text p-3 text-center" >
                            <h3 class="heading" style="font-size:16px !important;">{{$item->nama_event}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
  </section>
  
  <section class="ftco-gallery">
    <div class="container-wrap">
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
    </div>
  </section>

  @include('inc.fasilitasModal')
  @endsection