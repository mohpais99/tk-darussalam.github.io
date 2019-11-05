@extends('layouts.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/landing/belajar.jpg');">
        {{-- <div class="overlay"></div> --}}
        <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="color: #a64dff !important">Info Pendaftaran</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fas fa-arrow-circle-right"></i></a></span> <span>Info Pendaftaran</span></p>
            </div>
        </div>
        </div>
    </section>
      
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="text-center heading-section ftco-animate fadeInUp ftco-animated">
                        <h2 class="mb-5"><span>Pendaftaran</span> TK Darussalam</h2>
                    </div>
                    <!-- Nav tabs -->
                    <div class="card bdr">
                        <!-- Nav pills -->
                        <ul class="nav nav-pills">
                            <li class="nav-item tabs">
                                <a class="nav-link active" data-toggle="pill" href="#jadwal">Jadwal Pendaftaran</a>
                            </li>
                            <li class="nav-item tabs">
                                <a class="nav-link" data-toggle="pill" href="#info">Info Pendaftaran</a>
                            </li>
                            <li class="nav-item tabs">
                                <a class="nav-link" data-toggle="pill" href="#tarif">Tarif</a>
                            </li>
                        </ul>
                            
                            <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane container active" id="jadwal">
                                <ul>
                                    <li>Pendaftaran mulai Januari s.d. Juli 2019.</li>
                                    <li>Mengembalikan Formulir 1 minggu setelah mendaftar dilengkapi :
                                        <ul>
                                            <li>Foto copy Akte kelahiran 1 lembar.</li>
                                            <li>Foto copy Kartu keluarga 1 lembar.</li>
                                            <li>Pas foto berwarna ukuran 3×4 cm = 2 lembar.</li>
                                        </ul>
                                    </li>
                                    <li>Observasi calon murid dengan guru kelas dan wawancara orang tua dengan Kepala TK.</li>
                                    <li>Penyelesaian Administrasi Keuangan selambat-lambatnya 1 minggu setelah dinyatakan diterima.</li>
                                    <li>Masuk sekolah ( Pembagian kelas ) hari Senin tanggal, 18 Juli 2019 jam. 08.00</li>
                                </ul>
                            </div>
                            <div class="tab-pane container fade" id="info">
                                <ul>
                                    <li>Sekretariat TK Perguruan ”Cikini” Jln. Cikini Raya No.74-76 Jakarta Pusat. Telepon (021) 3102287, 0815 8542 9521</li>
                                    <li>W a k t u : Senin s.d. Jum’at : pukul 07.30-15.00 WIB. Sabtu : pukul 07.30-12.00 WIB.</li>
                                </ul>
                            </div>
                            <div class="tab-pane container fade" id="tarif">
                                <ul>
                                    <li>Uang Formulir Pendaftaran Rp. 250.000,-</li>
                                    <li>Bagi orangtua murid yang mendaftaran anaknya, dimana kakak/adiknya saat ini bersekolah di Perguruan ”Cikini” diberi keringanan pembayaran Uang Pangkal sebesar 10 % dan dapat diangsur sebanyak 3x dalam 3 bulan terhitung dari tanggal, diterimanya calon murid</li>
                                    <li>Membayar Uang sekolah bulan Juli 2019</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/landing/islam.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5 bg-primary">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <span class="subheading">Pendaftaran Info</span>
                        <h2 class="mb-4" style="font-size: 24px;">PPDB (Penerimaan Peserta Didik Baru)</h2>
                        <p>Daftarkan segera anak anda di TK kami ...</p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="images/brosur.jpg" class="img-fluid img-thumbnail" alt="...">
                        </div>
                        <div class="col">
                            <img src="images/brosur.jpg" class="img-fluid img-thumbnail" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

