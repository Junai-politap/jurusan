<x-base>
    @include('section.page-title', [
        'page_title' => 'Berita',
    ])

    <section class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <div class="news-head">
                                    <img src="{{ url("public/$berita->gambar") }}"
                                        onerror="this.src='{{ url('public/base') }}/berita.jpg';"
                                        style="object-fit: cover; position: static; width: 100%; height: 400px;">
                                </div>
                                <h1 class="news-title">
                                    {{ $berita->nama_berita }}
                                </h1>
                                <div class="meta">
                                    <div class="meta-left">
                                        <span class="date"><i class="fa fa-clock-o"></i>
                                            {{ date('d-F-Y', strtotime($berita->tanggal_kegiatan)) }}
                                        </span>
                                    </div>

                                </div>
                                <div class="news-text">
                                    <p style="font-family: 'Times New Roman', Times, serif">
                                        {!! nl2br($berita->detail) !!}
                                    </p>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">
                        <div class="single-widget recent-post">
                            <h3 class="title">Berita Terbaru</h3>
                            @foreach ($data_berita as $berita)
                                <div class="single-post">
                                    {{-- <div class="image">
                                        <img src="{{ url("public/$berita->gambar") }}"
                                            onerror="this.src='{{ url('public/base') }}/berita.jpg';"
                                            style="object-fit: cover; position: static; width: 40%;">
                                    </div> --}}

                                    <h5 class="title" style="font-size: 100%"><a href="{{ url("berita/$berita->id") }}">{{ $berita->nama_berita }}</a></h5>
                                    <ul class="comment">
                                        <li style="color: blue"><i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{ date('d-F-Y', strtotime($berita->tanggal_kegiatan)) }}
                                        </li>

                                    </ul>
                                </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

</x-base>
