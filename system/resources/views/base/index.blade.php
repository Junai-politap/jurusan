<x-base>

    <section class="slider">
        <div class="hero-slider">
            @foreach ($list_slide as $slide)
                <div class="single-slider" style="background-image:url('{{ url("public/$slide->gambar") }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="text">
                                    <h1 style="background-color:white; text-align:center; border-radius: 25px; text-transform: uppercase;">
                                        {{ $slide->title }}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>


    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2> Jurusan Teknik Eletro dan Teknik Informatika</h2>
                        <img src="{{ url('public/base') }}/img/section-img.png" alt="#">

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($list_visimisi_ti->where('label', 'Visi') as $visimisi_ti)
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Left -->
                        <div class="choose-left">
                            <h5>{{ $visimisi_ti->label }} {{ $visimisi_ti->unit_kerja }}</h5>
                            <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                {!! nl2br($visimisi_ti->isi) !!}
                            </p>
                        </div>
                        <!-- End Choose Left -->
                    </div>
                @endforeach

                @foreach ($list_visimisi_te->where('label', 'Visi') as $visimisi_te)
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Left -->
                        <div class="choose-left">
                            <h5>{{ $visimisi_te->label }} {{ $visimisi_te->unit_kerja }}</h5>
                            <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                {!! nl2br($visimisi_te->isi) !!}
                            </p>
                        </div>
                        <!-- End Choose Left -->
                    </div>
                @endforeach

            </div>

            <div class="row">
                @foreach ($list_visimisi_ti->where('label', 'Misi') as $visimisi_ti)
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Left -->
                        <div class="choose-left">
                            <h5>{{ $visimisi_ti->label }} {{ $visimisi_ti->unit_kerja }}</h5>
                            <p>
                                {!! nl2br($visimisi_ti->isi) !!}
                            </p>
                        </div>
                        <!-- End Choose Left -->
                    </div>
                @endforeach

                @foreach ($list_visimisi_te->where('label', 'Misi') as $visimisi_te)
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Left -->
                        <div class="choose-left">
                            <h5>{{ $visimisi_te->label }} {{ $visimisi_te->unit_kerja }}</h5>
                            <p>
                                {!! nl2br($visimisi_te->isi) !!}
                            </p>
                        </div>
                        <!-- End Choose Left -->
                    </div>
                @endforeach

            </div>

            <div class="row">
                @foreach ($list_visimisi_ti->where('label', 'Tujuan') as $visimisi_ti)
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Left -->
                        <div class="choose-left">
                            <h5>{{ $visimisi_ti->label }} {{ $visimisi_ti->unit_kerja }}</h5>
                            <p>
                                {!! nl2br($visimisi_ti->isi) !!}
                            </p>
                        </div>
                        <!-- End Choose Left -->
                    </div>
                @endforeach

                @foreach ($list_visimisi_te->where('label', 'Tujuan') as $visimisi_te)
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Left -->
                        <div class="choose-left">
                            <h5>{{ $visimisi_te->label }} {{ $visimisi_te->unit_kerja }}</h5>
                            <p>
                                {!! nl2br($visimisi_te->isi) !!}
                            </p>
                        </div>
                        <!-- End Choose Left -->
                    </div>
                @endforeach

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
