<x-base>

    <section class="slider">
        <div class="hero-slider">
            @foreach ($list_slide as $slide)
                <div class="single-slider" style="background-image:url('{{ url("public/$slide->gambar") }}')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text" style="text-align:center; margin-top:35%">
                                    <div class="button center">
                                        <p class="btn" style="font-size:200%">{{ $slide->title }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>


    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Offer Different Services To Improve Your Health</h2>
                        <img src="{{ url('public/base') }}/img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-service">
                        <i class="icofont icofont-prescription"></i>
                        <h4><a href="service-details.html">General Treatment</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-service">
                        <i class="icofont icofont-tooth"></i>
                        <h4><a href="service-details.html">Teeth Whitening</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-service">
                        <i class="icofont icofont-heart-alt"></i>
                        <h4><a href="service-details.html">Heart Surgery</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-service">
                        <i class="icofont icofont-listening"></i>
                        <h4><a href="service-details.html">Ear Treatment</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-service">
                        <i class="icofont icofont-eye-alt"></i>
                        <h4><a href="service-details.html">Vision Problems</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-service">
                        <i class="icofont icofont-blood"></i>
                        <h4><a href="service-details.html">Blood Transfusion</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div id="" class="fun-facts section overlay">
        <div class="container">

        </div>
    </div>


    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Berita Terbaru</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($list_berita as $berita)
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="{{ url("berita/$berita->id") }}">
                            <div class="single-news" style="margin-bottom: 5%">
                                <div class="news-head">
                                    <img src="{{ url("public/$berita->gambar") }}"
                                        onerror="this.src='{{ url('public/base') }}/berita.jpg';"
                                        style="object-fit: cover; position: static; width: 100%; height: 400px;">
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        <div class="date"> {{ date('d-F-Y', strtotime($berita->tanggal_kegiatan)) }}
                                        </div>
                                        <p><a href="">
                                                {{ $berita->nama_berita }}
                                            </a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


</x-base>
