<x-base>
    @include('section.page-title', [
        'page_title' => 'Berita',
    ])

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
                        <a href="{{url("berita/$berita->id")}}">
                        <div class="single-news" style="margin-bottom: 5%">
                            <div class="news-head">
                                <img src="{{ url("public/$berita->gambar") }}"
                                    onerror="this.src='{{ url('public/base') }}/berita.jpg';"
                                    style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date"> {{ date('d-F-Y', strtotime($berita->tanggal_kegiatan)) }}</div>
                                    <p><a href="">
                                            {{ $berita->nama_berita }}
                                        </a>
                                    </p>

                                </div>
                            </div>
                        </a>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-base>
