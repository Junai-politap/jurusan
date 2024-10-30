<x-base>

    @include('section.page-title', [
        'page_title' => 'Pegawai',
    ])

    <section class="pricing-table section">
        <div class="container">
           
            <div class="row">
                @foreach ($list_pegawai->where('jabatan', 'Dosen') as $pegawai)
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <img src="{{ url("public/$pegawai->foto") }}" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <h4 class="title">{{$pegawai->nama_lengkap}}, {{$pegawai->gelar_belakang}}</h4>
                            
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i><strong>NIP</strong>. {{$pegawai->nip}}</li>
                            <li><i class="icofont icofont-ui-check"></i><strong>Bidang Keahlian</strong>. {{$pegawai->bidang_keahlian}}</li>
                            <li><i class="icofont icofont-ui-check"></i><strong>Jabatan</strong>. {{$pegawai->jabatan}}</li>
                            <li style="text-transform: lowercase"><i class="icofont icofont-ui-check"></i><strong>Email</strong>. {{$pegawai->email}}</li>
                            
                        </ul>
                       
                    </div>
                </div>
                @endforeach
              
            </div>

            <div class="row">
                @foreach ($list_pegawai as $pegawai)
                @if ($pegawai->jabatan == 'Admin')
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <img src="{{ url("public/$pegawai->foto") }}" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <h4 class="title">{{$pegawai->nama_lengkap}}, {{$pegawai->gelar_belakang}}</h4>
                            
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i><strong>NIP</strong>. {{$pegawai->nip}}</li>
                            <li><i class="icofont icofont-ui-check"></i><strong>Bidang Keahlian</strong>. {{$pegawai->bidang_keahlian}}</li>
                            <li><i class="icofont icofont-ui-check"></i><strong>Jabatan</strong>. {{$pegawai->jabatan}}</li>
                            <li style="text-transform: lowercase"><i class="icofont icofont-ui-check"></i><strong>Email</strong>. {{$pegawai->email}}</li>
                            
                        </ul>
                       
                    </div>
                </div>
                @endif
                @if ($pegawai->jabatan == 'Teknisi')
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <img src="{{ url("public/$pegawai->foto") }}" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <h4 class="title">{{$pegawai->nama_lengkap}}, {{$pegawai->gelar_belakang}}</h4>
                            
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i><strong>NIP</strong>. {{$pegawai->nip}}</li>
                            <li><i class="icofont icofont-ui-check"></i><strong>Bidang Keahlian</strong>. {{$pegawai->bidang_keahlian}}</li>
                            <li><i class="icofont icofont-ui-check"></i><strong>Jabatan</strong>. {{$pegawai->jabatan}}</li>
                            <li style="text-transform: lowercase"><i class="icofont icofont-ui-check"></i><strong>Email</strong>. {{$pegawai->email}}</li>
                            
                        </ul>
                       
                    </div>
                </div>
                @endif
                @endforeach
              
            </div>
            
        </div>
    </section>
</x-base>
