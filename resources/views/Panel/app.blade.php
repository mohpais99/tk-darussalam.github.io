<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Welcome To | TK Darussalam</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core Css -->
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
        <!-- Waves Effect Css -->
        <link href="{{ asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />
        <!-- Bootstrap Select Css -->
        <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="{{ asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />
        <!-- Custom Css -->
        <link href="{{ asset('csspanel/style.css')}}" rel="stylesheet">
        <link href="{{ asset('csspanel/custom.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="{{ asset('csspanel/themes/all-themes.css')}}" rel="stylesheet" />
    </head>
    <body class="theme-red">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="/panel">TK DARUSSALAM</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right position">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu mr-4">
                                <li><a href="/profile"><i class="material-icons">person</i>Profile</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/logout"><i class="material-icons">input</i>Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                @if (Auth()->User()->role === 'superadmin' or Auth()->User()->role === 'guru')
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="{{Auth()->User()->defaultFoto()}}" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name">{{Auth()->User()->getName()}}</div>
                        <div class="email">{{Auth()->User()->email}}</div>
                    </div>
                </div>
                @endif

                <!-- User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="">
                            <a href="/panel">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                        @if (auth()->user()->role === 'superadmin')
                        <li>
                            <a href="/data-guru">
                                <i class="material-icons">library_books</i>
                                <span>Data Guru</span>
                            </a>
                        </li>

                        @endif
                        @if (auth()->user()->role === 'superadmin' or auth()->user()->role === 'guru')
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">library_books</i>
                                <span>Data Siswa</span>
                            </a>
                            <ul class="ml-menu">
                                @php
                                    $getClass = \App\Kelas::all();
                                @endphp
                                @foreach ($getClass as $item)
                                <li>
                                    <a href="/data-siswa/{{$item->id}}">Kelas {{$item->nama_kelas}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="/gallery-tk-jaya">
                                <i class="material-icons">perm_media</i>
                                <span>Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a href="/event-tk-jaya">
                                <i class="material-icons">turned_in_not</i>
                                <span>Event</span>
                            </a>
                        </li>
                        @endif
                        @if (auth()->user()->role === 'superadmin')
                        <li>
                            <a href="/pemberitahuan">
                                <i class="material-icons">content_copy</i>
                                <span>Berita</span>
                            </a>
                        </li>
                        <li>
                            <a href="/semua-tabungan">
                                <i class="material-icons">monetization_on</i>
                                <span>Tabungan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/pesan">
                                <i class="material-icons">message</i>
                                <span>Pesan</span>
                            </a>
                        </li>
                        @endif
                        @if (auth()->user()->role === 'siswa')
                        <li>
                            <a href="/nilai-akademik">
                                <i class="material-icons">view_list</i>
                                <span>Akademik</span>
                            </a>
                        </li>
                        <li>
                            <a href="/tabungan">
                                <i class="material-icons">monetization_on</i>
                                <span>Tabungan</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2019  <a href="/">TK Darussalam</a>.
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>

        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap Core Js -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
        <!-- Select Plugin Js -->
        <script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
        <!-- Waves Effect Plugin Js -->
        <script src="{{ asset('plugins/node-waves/waves.js')}}"></script>
        <!-- Jquery CountTo Plugin Js -->
        <script src="{{ asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>
        <!-- Morris Plugin Js -->
        <!-- Custom Js -->
        <script src="{{ asset('jspanel/admin.js')}}"></script>
        <script src="{{ asset('jspanel/printPage.js')}}"></script>
        <script src="{{ asset('jspanel/pages/index.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if (Session::has('success'))
                toastr.success('How Awesome!!', '{{Session::get('success')}}')
            @endif
            @if (Session::has('error'))
                toastr.error('Something Wrong!!', '{{Session::get('error')}}')
            @endif
        </script>
        <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

        @yield('js')
    </body>

</html>
