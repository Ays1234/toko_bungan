@extends('backend.layouts.master')
@section('title', 'Tambah Article')
@section('css')

@endsection

@section('content')
<div class="row wrapper border-bottom page-heading">
    <div class="col-lg-10">
        <h2>@yield('title')</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard.index')}}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Content</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>@yield('title')</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h4 class="font-weight-bold">@yield('title') &nbsp;
                        <small class="text-danger"> (*) Wajib diisi</small>
                    </h4>
                    <div class="ibox-tools">
                        <div class="p-0 text-right">
                            <a href="{{route('article.index')}}" class="btn btn-success b-r-xl"><i
                                    class="fa fa-arrow-left"></i>&nbsp;
                                kembali</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                        <form action="/add_article/create" method="post" id="submitData" style="overflow-x: none" enctype="multipart/form-data">
                           @csrf
                            <div class="row px-2">
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold">Judul <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control py-2 b-r-md" id="nama" name="judul"
                                                value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold">Photo Thumbnail <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input id="logo" name="thumbnail" type="file" class="custom-file-input">
                                                <label for="logo" class="custom-file-label">Choose file...</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="col-sm-12">
                                <div class="form-group row text-center">
                                    <h3 class="col-md-12 font-weight-bold">Deskripsi</h3>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="decompordis" class="col-md-3 col-form-label font-weight-bold">Photo Banner Article <span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input id="logo" type="file" name="photo_banner_article" class="custom-file-input">
                                            <label for="logo" class="custom-file-label">Choose file...</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="decompordis" class="col-md-3 col-form-label font-weight-bold">Deskripsi <span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <textarea class="form-control summernote" name="deskripsi" id="summernote" cols="150" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <style>
                                .title{
                                    font-size: 48px;
                                    padding: 50px 0;
                                }
                                .paragraf p{
                                    font-family: "Century Gothic", Sans-serif;
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
                                .b-font::first-letter{
                                    padding-right: 15px;
                                    margin: -60px 0;
                                    font-size: 110px;
                                    float: left;
                                }
                            </style>
                            <div class="col-sm-12">
                                <div class="summernote">
                                    <div class="paragraf mb-5 px-5">
                                        <h2 class="text-center title font-weight-bold" style="font-family: 'Century Gothic', Sans-serif;">Fungsi Optimal Desain Terbuka</h2>
                                        <p class="b-font">
                                            YANG ADA BANYAK tanamannya. Begitulah cara yang paling mudah mendeskripsikan seperti apa rupa bangunan Akses Domisili. Mendengarnya, Vincent Luhur, pendiri dan pemilik Aksen Domisili tertawa terbahak-bahak. “Bener, sih, begitu,” ujarnya. Tampak depan bangunan lima lantai ini memang didominasi warna hijau dedaunan. <br>
                                        </p>
                                        <p>
                                            Di bagian bawah, tanaman-tanaman dalam pot besar berbaris menutupi bagian muka dengan bukaan di depan pintu kaca yang terletak di tengah. Pada langit-langitnya, pot-pot kecil tergantung membentuk garis lurus dengan daun-daun yang menjulur ke bawah. Begitu pun teras di lantai-lantai berikutnya yang terlihat dari depan. Daun-daun berwarna hijau menyeruak seakan ingin bersenda gurau dengan angin semilir di depannya. Sementara dinding bangunan ini dibiarkan telanjang tanpa cat
                                        </p>
                                        <div class="row py-35">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('assets/img/press/PRESS_4_Fungsi Optimal Desain Terbuka/PRESS_4_Fungsi-Optimal-Desain-Terbuka_A.jpg') }}" alt="" class="img-fluid" width="100%">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{ asset('assets/img/press/PRESS_4_Fungsi Optimal Desain Terbuka/PRESS_4_Fungsi-Optimal-Desain-Terbuka_B.jpg') }}" alt="" class="img-fluid" width="100%">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{ asset('assets/img/press/PRESS_4_Fungsi Optimal Desain Terbuka/PRESS_4_Fungsi-Optimal-Desain-Terbuka_C.jpg') }}" alt="" class="img-fluid" width="100%">
                                            </div>
                                        </div>
                                        <p>Anak tangga membawa <em>dewi</em> masuk ke bangunan Aksen Domisili. Sekilas, banyak orang mungkin bingung, bangunan apakah ini. Apakah sebuah galeri, tempat menjual tanaman, atau kantor yang mendekor bangunannya dengan tanaman-tanaman hias. Berlokasi di Sawah Besar, Jakarta Pusat, Aksen Domisili mendeklarasikan dirinya sebagai ruang kreatif yang didedikasikan untuk tanaman dan seni dalam segala bentuk. Walau Anda dapat menemukan banyak jenis tanaman di sini, Aksen Domisili berfokus pada anggrek.</p>
                                        <p>Hal ini terkait dengan kecintaan Vincent terhadap anggrek. Vincent mulai mengumpulkan anggrek sejak ia berusia tujuh tahun. Ia percaya bahwa kompleksitas dan keanekaragaman anggrek yang luar biasa adalah representasi dari keindahan alam. Anggrek memang menarik dan punya banyak cerita. Hingga kini, Vincent memiliki koleksi yang mengesankan. Terdiri lebih dari 3.000 varietas, ditanam dan dipelihara dengan aman di kebun pembibitannya yang berlokasi di Banjarmasin, Kalimantan Selatan, dan Jakarta. Tak hanya menaruh hati pada anggerek, Vincent pun terjun langsung menjadi anggota Masyarakat Anggrek Indonesia.</p>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <p>Sebagai sebuah bangunan yang ingin menyatukan alam dengan seni, Aksen Domisili sangat bijaksana dalam menciptakan lingkungan yang dapat mendukung visi ini. Petama kali menginjakkan kaki di Aksen Domisili, lantai dasar terdiri sebuah ruang untuk Verdant Artisan Floristry dan selebihnya dibiarkan tak bersekat. Lantai dan dindingnya, seperti juga tampak luarnya, dibiarkan mentah, tanpa cat, tanpa keramik. Warna kelabu hasil proses mengaci ini berpadu dengan warna kecokelatan yang terlihat pada rak-rak kayu seta meja dan kursi, lalu sedikit warna hitam yang ditemukan di tepian pintu dan pegangan tangga. Warna-warna ceria hadir dari ilustrasi-ilustrasi anggrek yang terpampang di dinding dan tentunya, bintang dari Aksen Domisili, anggrek-anggrek yang diletakan di seluruh penjuru ruangan.</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{ asset('assets/img/press/PRESS_4_Fungsi Optimal Desain Terbuka/PRESS_4_Fungsi-Optimal-Desain-Terbuka_D.jpg') }}" alt="" class="img-fluid" width="100%">
                                            </div>
                                        </div>
                                        <p>Ada sebuah <em>counter</em> di bagian belakang yang menjual makanan kecil dan minuman. Awalnya seluruh bangunan tidak memakai pendingin ruangan. “Saya sendiri juga memang kurang suka dengan penggunaan AC,” ujar Vincent. Toh, seluruh pintu dan jendela selalu dibiarkan terbuka seharian. Namun Vincent juga menyadari banyak klien yang merasa perlu pendingin ruangan untuk menangkis udara panas Jakarta. Jalan keluarnya, sepotong area tempat makan dan minum ditutup kaca dan dilengkapi dengan pendingin ruangan. Kaca memberikan ilusi bahwa ruangan ini tetap luas dan tak bersekat. Namun tetap dapat menahan rasa sejuk dari si pendingin udara di dalam ruangan.</p>
                                        <div class="d-flex justify-content-center">
                                            <div class="col-sm-8">
                                                <img src="{{ asset('assets/img/press/PRESS_4_Fungsi Optimal Desain Terbuka/PRESS_4_Fungsi-Optimal-Desain-Terbuka_E.jpg') }}" alt="" class="img-fluid" width="100%">
                                            </div>
                                        </div>
                                        <p>Aksen Domisili beroperasi di bawah bendera Aksen, sebuah perusahaan <em>brand consulting. </em>Selain Aksen Domisili, grup ini juga membawahi beberapa anak perusahaan seperti VL Decoration dan Aksen Design yang tadinya memiliki lokasi kantor berjauhan. Atas dasar efisiensi, mereka menyatukan semuanya di Aksen Domisili yang selesai dibangun menjelang akhir 2018 tersebut. Walau demikian, ruang kantor hanya mengambil porsi kecil dari keseluruhan bangunan yaitu pada lantai mezanin, yang bersatu dengan perpustakaan.</p>
                                        <p>Dalam merancang bangunan Aksen Domisili, Vincent mengerahkan pengetahuan, pengalaman, dan imajinasinya sendiri. “Dari kecil saya ingin punya rumah yang tidak dicat. Ini mimpi saya. Sesuatu yang terlihat <em>unfinished </em>karena menurut saya ini ada <em>value</em>-nya,” ujarnya. Ketika pembangunan sudah berjalan 75 persen, ia masuk ke ranah desain interior. Lagi-lagi ia tidak menggunakan jasa profesional tapi mengerahkan kemampuannya sendiri. “Saya bikin draf, sketsa sendiri. Ketika barangnya datang, bisa berubah lagi,” ceritanya.</p>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('assets/img/press/PRESS_4_Fungsi Optimal Desain Terbuka/PRESS_4_Fungsi-Optimal-Desain-Terbuka_F.jpg') }}" alt="" class="img-fluid" width="100%">
                                            </div>
                                            <div class="col-sm-8">
                                                <p>Semua yang ada di Aksen Domisili terlahir dari impian Vincent. Seluruhnya khusus dibuat, bukan membeli produk jadi hasil pabrikan. Meja, kursi, dan seluruh produk yang menggunakan kayu, harus menggunakan kayu jati tanpa pelitur. Awalnya Vincent memilih kayu ulin dari Kalimantan. Ia jatuh cinta dengan warnanya yang pekat. Namun karena biaya transportasi di luar anggaran, rencana tersebut dibatalkan.</p>
                                                <p>Vincent ingin menghadirkan pengalaman yang menggelitik panca indera di Aksen Domisili. Karena itu ia enggan memelitur kayu-kayu disana. Baunya akan jadi berbeda, begitu katanya, kayu jati memiliki bau yang khas, sesuatu yang akan terdeteksi jika Anda benar-benar merasakan kehadirannya. Disini, tidak perlu ada keseragaman. Rak-rak tempat menampung pot-pot besar misalnya, warnanya bisa beragam. Di bagian atas lebih mudah dari bagian bawah. “Itu kayu lama bekas bongkaran,” kata Vincent. Tidak apa, secara alami kayu memang diciptakan tidak sama.</p>
                                            </div>
                                        </div>
                                        <p>Pilihan untuk tidak mengolah lantainya juga karena kecintaannya terhadap tanaman. Tanaman yang ada di Aksen Domisili tidak semuanya berukuran kecil yang terlihat manis di dalam ruangan tetapi juga yang berukuran besar dan tentunya berat. Dengan alasan tersebut, penggunaan keramik, granit, ataupun marmer pasti lebih berisiko. Vincent juga menampilkan instalasi listrik yang seperti mengular di langit-langit ruangan. “Polanya cantik, menurut saya. Bagaimana caranya saya membuat lekukan-lekukan dan sekrup-sekrup menjadi sebuah grafis yang indah di atas sana.”</p>
                                        <p>Beranjak ke lantai atas berikutnya, terdapat satu ruangan seperti ruang kelas. Ada tiga meja dengan kursi-kursi di sekelilingnya. Ruangan ini bisa dipakai untuk lokakarya, acara komunitas, yoga, dan lainnya. Bahkan Vincent pernah menerima permintaan untuk acara pernikahan. Ruangan ini pun dihiasi dengan anggrek dan tanaman lainnya serta ilustrasi-ilustrasi anggrek yang ada di dinding. Tujuannya, ia ingin mendekatkan dan mengedukasi masyarakat, dimulai dengan pengunjung Aksen Domisili, untuk lebih peka terhadap lingkungan dan tanaman. “Di seluruh bangunan ini kami memberlakukan Dilarang Merokok. Karena tanaman peka terhadap asao rokok,” ujar Vincent. Seluruh jendela dibiarkan terbuka membuat angin bebas mengalir ke dalamnya menghadirkan kesejukan walau tanpa bantuan pendingin udara. Karena kesyahduan yang tercipta, kebanyakan yang berkunjung ke Aksen Domisili adalah pekerja seni seperti pelukis, penulis, dan juga para yogi yang membutuhkan tempat berkonsentrasi dan berkontemplasi.</p>
                                        <p>Di lantai paling atas, ruang konservatori berdiri dengan gagahnya. Pot-pot anggrek berbaris di sekeliling ruangan, di tengah ruangan, hingga digantung. Semua bagian tersentuh dengan anggrek. Bentuk ruangan ini seperti limas dengan bagian atap tertutup kaca berwarna putih. Awalnya ia meminta kaca bening namun dibatalkan karena akan panas sekali. Pilihan pun berganti menjadi warna opal. Ternyata justru sinar mentari sulit menembusnya. Namun ia sudah pasrah karena memasangnya sangat sulit mengingat angin yang sangat kencang. Bagian depan dan belakang dibiarkan tanpa kaca, tetapi dilengkapi dengan kisi-kisi yang dapat dibuka dan ditutup. “Ini fungsinya untuk menahan angin,” kata Vincent.</p>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('assets/img/press/PRESS_4_Fungsi Optimal Desain Terbuka/PRESS_4_Fungsi-Optimal-Desain-Terbuka_G.jpg') }}" alt="" class="img-fluid" width="100%">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{ asset('assets/img/press/PRESS_4_Fungsi Optimal Desain Terbuka/PRESS_4_Fungsi-Optimal-Desain-Terbuka_H.jpg') }}" alt="" class="img-fluid" width="100%">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{ asset('assets/img/press/PRESS_4_Fungsi Optimal Desain Terbuka/PRESS_4_Fungsi-Optimal-Desain-Terbuka_I.jpg') }}" alt="" class="img-fluid" width="100%">
                                            </div>
                                        </div>
                                        <p>Meskipun Aksen Domisili senang berbagi pengetahuan dan pengalaman dengan para pengunjungnya. Mereka tetap berpegang teguh pada upaya melestarikan lingkungan yang ideal untuk tanaman. Caranya dengan membatasi jumlah pengunjung. Karena itu, jika Anda ingin berkunjung ke sini, apalagi bersama grup, disarankan untuk membuat janji terlebih dahulu.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row d-flex justify-content-end">
                                <div class="col-sm-4 col-sm-offset-2 d-flex justify-content-end">
                                    <a class="btn btn-default" href="{{route('article.index')}}">Batal</a>
                                    <button class="btn btn-primary mx-2" type="submit" id="simpan">
                                        <span class=""><i class="fa fa-floppy-o"></i> Simpan</span>
                                    </button>
                                </div>
                            </div>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        $('.summernote').summernote();

        $(".select2").select2({
            placeholder: "pilih device ....",
            allowClear: true
        });

        $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    });
</script>
@endpush
