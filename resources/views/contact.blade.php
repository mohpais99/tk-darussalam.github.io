@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/landing/belajar.jpg');">
    {{-- <div class="overlay"></div> --}}
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread" style="color: #a64dff !important">Kontak</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="fas fa-arrow-circle-right"></i></a></span> <span>Kontak </span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-services ftco-no-pb mb-4" style="font-size: 16px;">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="fa fa-location-arrow" style="font-size:32px;"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Alamat TK</h3>
                <p>Jl. Jatinegara Kaum I, RT.10/RW.3, Jatinegara Kaum, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13250</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary " style="text-align: center">
            <div class="media block-6 d-block text-center align-center" style="text-align: center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="fa fa-phone" style="font-size:32px;"></span>
              </div>
              <div class="media-body p-2 mt-3" >
                <h3 class="heading">Kontak TK</h3>
                <p>Silahkan Hubungi kami di 0822-1369-9967 untuk info lebih lanjut</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="fa fa-envelope" style="font-size:32px;"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Email TK</h3>
                <p>Anda dapat mengirimkan e-mail ke : ICDarussalam@gmail.com</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
      
      <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
          <div class="container">
              <div class="text-center heading-section ftco-animate fadeInUp ftco-animated">
                  <h2 class="mb-5"><span>Alamat</span> TK Darussalam</h2>
              </div>
              <div class="row d-flex align-items-stretch no-gutters">
                  <div class="col-md-6 pt-3 d-flex align-items-stretch iframe-container">
                      <!-- Embedded Google Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4588859443797!2d106.89830901446645!3d-6.20303669550949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5ef5f00193f%3A0xf026a3cc85d3493!2sTK.%20Darussalam!5e0!3m2!1sen!2sid!4v1567333068331!5m2!1sen!2sid" allowfullscreen></iframe>
                  </div>
                  <div class="col-md-6 pt-4 pl-4 pr-4 p-md-5 order-md-last bg-light">
                    <form action="/kirim-pesan" method="POST">
                      {{csrf_field()}}
                      <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama anda" required>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email anda" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" maxlength="12" name="no_telp" placeholder="Nomor yang dapat dihubungi" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="umur" placeholder="Umur si kecil" required>
                      </div>
                      <div class="form-group">
                        <textarea name="pesan" rows="7" class="form-control" placeholder="Pesan..." required></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
                      </div>
                    </form>
                  </div>
                  
              </div>
          </div>
      </section>

@endsection