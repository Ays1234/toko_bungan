@extends('layouts.layout')

@section('title', 'Press')

@section('content')

<style>
    .title{
        font-size: 48px;
        padding: 50px 0;
    }
    .paragraf p{
        font-size: 17px;
        padding: 10px 0;
        line-height: 2;
    }
    .py-35,{
        padding: 35px 0;
    }
    .paragraf img{
        padding: 20px 0 35px 0;
    }
    .description h2{
        font-size: 24px;
    }
    .description li{
        font-size: 13px;
    }
    .b-font::first-letter{
        padding-right: 15px;
        margin: -60px 0;
        font-size: 110px;
        float: left;
    }
    @media only screen and (max-width: 767px) {
        .paragraf h2{
            font-size: 26px;
        }
    }
</style>


<section class="section-padding">
    <img src="{{ asset('assets/img/press/PRESS_2_Kecil-kecil Cabai Rawit/PRESS_2_Kecil-kecil-Cabai-Rawit_BANNER.jpg') }}" alt="" class="img-fluid" width="100%">
    <div class="container px-5">
        <div class="paragraf mb-5">
            <h2 class="text-center fw-bold title">Kecil-kecil Cabe Rawit</h2>
            <p>Di saat anak-anak seumuran mereka asyik berjalan-jalan ke mal dan tempat bermain Askary Nurrachmat Malik, Kevin Handoko, Vincent Caesar J.L, dan Audrey Aureli malah mengunjungi nursery.</p>
            <h2 class="text-center fw-bold title">Anggrek oleh-oleh</h2>
            <p class="b-font">
                Kalau Nurro, Kevin, dan Audrey jadi kolektor cilik karena pengaruh keluarga, di Banjarmasin, Kalimantan Selatan, Vincent Caecar J.L, mengoleksi anggrek karena sang tetangga. Waktu itu, 6 tahun silam, Vincent mendapat oleh-oleh anggrek spesies<em>, Coelogyne dayana</em>. “Bunganya cantik, menjuntai ke bawah seperti tirai, dan harum,” kata bungsu dari 4 bersaudara itu.
            </p>
            <div class="d-flex justify-content-center">
                <div class="col-sm-8">
                    <img src="{{ asset('assets/img/press/PRESS_2_Kecil-kecil Cabai Rawit/PRESS_2_Kecil-kecil-Cabai-Rawit_A.jpg') }}" alt="" class="img-fluid" width="100%">
                </div>
            </div>
            <p>Gara-gara anggrek oleh-oleh itu, Vincent jadi ketagihan mengoleksi anggota famili Orchidaceae yang menurutnya unik. Sebut saja paphiophedilum, catacetum, cynodes, angraecum, dan anguloa. Beruntung sang ayah yang berprofesi sebagai kontraktor mendukung hobi Vincent. Pada tahun 2006, sebanyak 200 anggota famili Orchidaceae-setengahnya merupakan paphiopedium-diboyong dari kebun salah seorang kolektor kenalan di Taiwan. Hingga akhir 2006, Vincent berhasil mengumpulkan 250 jenis anggrek. Sebagian besar adalah jenis paphiopedilum, dendrobium, phalaenopsis, dan oncidium.</p>
            <p>Sejak saat itu Vincent rajin mengikuti kontes anggrek. Lazimnya yang dibawa naik pentas koleksi anggrek yang berbunga unik dan <em>showy</em>. Contohnya oncidium white fairy yang pertama kali dikonteskan pada 2003. Hasilnya, dari minimal 30 kontes nasional dan internasional, anggrek koleksi Vincent selalu meraih juara. Hingga kini ia berhasil menerima 43 penghargaan. Tak heran bila siswa kelas 9 SMP Santa Maria Banjarmasin itu terkenal sebagai anak yang memiliki segudang prestasi di bidang anggrek.</p>
            <p>Hingga kini, Vincent berhasil mengumpulkan 500 jenis anggrek. Untuk membiayai hobi, siswa kelas 3 SMP itu mulai melakukan kegiatan jual-beli anggrek. Sama seperti kolektor cilik lainnya, buat Vincent Sabtu-Minggu pun lebih asyik dihabiskan untuk merawat tanaman. <strong>(Rosy Nur Apriyanti)</strong></p>
        </div>
    </div>
</section>

@endsection

@push('scripts')

@endpush
