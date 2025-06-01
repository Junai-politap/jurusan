<header class="header" >
  
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="{{url('public/base')}}/jurusan.png" alt="#"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-10 col-md-10 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li><a href="{{url('/')}}">Dashboard </a></li>
                                    <li><a href="{{url('struktur-organisasi')}}">Struktur Organisasi </a></li>
                                    <li><a href="#">Program Studi <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="#">Teknologi Listrik</a></li>
                                            <li><a href="{{ url('https://jteti.politap.ac.id/teknologiinformasi') }}">Teknologi Informasi</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tenaga Pengajar <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('dosen-teknologi-listrik') }}">Teknologi Listrik</a></li>
                                            <li><a href="{{url('dosen-teknologi-informasi')}}">Teknologi Informasi</a></li>
                                        </ul>
                                    </li>

                                      <li><a href="#">Admin & Teknisi<i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('teknisi-teknologi-listrik')}}">Teknologi Listrik</a></li>
                                            <li><a href="{{url('teknisi-teknologi-informasi')}}">Teknologi Informasi</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('berita')}}">Berita </a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>