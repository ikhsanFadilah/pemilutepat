<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Jasa pembuatan website untuk bisnis, sekolah, organisasi, HRM, Apotek, Retail & POS">
  <meta name="keywords" content="jasa pembuatan website,jasa pembuatan web,web design, web designer,web desain,web desainer,jasa desain web">
  <meta name="dcterms.subject" content="jasa pembuatan website,jasa pembuatan web,web design, web designer,web desain,web desainer,jasa desain web">
  <meta name="dcterms.type" content="Service">
  <meta name="dcterms.language" content="id">
  <link rel="canonical" href="https://www.jinggacloud.com">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Jasa Pembuatan Website Kilat">
  <meta property="og:description" content="Jasa pembuatan website kilat untuk perusahaan, sekolah, organisasi, dll">
  <meta property="og:url" content="https://www.jinggacloud.com">
  <meta property="og:site_name" content="Rumahweb">
  <meta property="og:image" content="https://www.jinggacloud.com/jc.ico">
  <meta property="og:locale" content="id_ID">
  <meta property="fb:app_id" content="231307203869836">
  <meta name="dcterms.type" content="Service">
  <meta name="dcterms.language" content="id">
  <link rel="shortcut icon" href="https://www.jinggacloud.com/jc.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="https://www.jinggacloud.com/jc.ico"> <link rel="”publisher”" href="”https://plus.google.com/+jinggacloud”/">
  <meta name="generator" content="Jinggacloud V.2.0.3">
  <meta name="copyright" content="Jinggacloud">
  <meta name="robots" content="index,follow,noodp,noydir">
  <meta name="author" content="Jinggacloud">
  <link rel="alternate" type="application/rss+xml" title="Jinggacloud jasa pembuatan website » Feed" href="https://www.jinggacloud.com/page/feed">
  <title>{{ config('app.name') }} - Landing Page</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
</head>
<body id="page-top" class="landing-page no-skin-config">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top navbar-expand-md" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="index.html">{{ config('app.name') }}</a>
                <div class="navbar-header page-scroll">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav-link page-scroll" href="#page-top">Home</a></li>
                        <li><a class="nav-link page-scroll" href="#features">Features</a></li>
                        <li><a class="nav-link page-scroll" href="#testimonials">Testimonials</a></li>
                        <li><a class="nav-link page-scroll" href="#pricing">Pricing</a></li>
                        <li><a class="nav-link page-scroll" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div id="inSlider" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="container">
                <div class="carousel-caption">
                  <h1>Teknologi terkini,<br/>
                      support berbagai gadget,<br/>
                      solusi aplikasi website.</h1>
                    <p>KAMI MEMBANGUN WEBSITE YANG AKAN MEMBANGUN BISNIS ANDA.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#features" role="button">Selengkapnya</a>
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <img src="{{ asset('img/landing/laptop.png') }}" alt="laptop"/>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>Solusi tepat <br/> mengembangkan bisnis anda.</h1>
                    <p>Tingkatkan kinerja &amp; penghasilan menggunakan website.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#inSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#inSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<section id="features" class="container services">
  <div class="row">
      <div class="col-lg-12 text-center">
          <div class="navy-line"></div>
          <h1>Mengapa Jinggacloud ?</h1>
          <p>Lebih dari 100+ fitur, sudah menggunakan desain responsif dan Laravel PHP Framework.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-md-3 text-center wow fadeInLeft">
          <div>
              <i class="fa fa-laptop features-icon"></i>
              <h2>Halaman Responsif</h2>
              <p>Memberikan prioritas pada desain responsif karena kami yakin pengunjung situs menggunakan berbagai jenis gadget dan browser yang berbeda.</p>
          </div>
      </div>
      <div class="col-md-3 text-center wow fadeInRight">
          <div>
              <i class="fa fa-envelope features-icon"></i>
              <h2>Halaman Surat</h2>
              <p>Pesan masuk akan masuk email dan inbox di panel admin. Balas pesan masuk langsung ke email hanya dari panel admin.</p>
          </div>
      </div>
      <div class="col-md-3 text-center wow fadeInRight">
          <div>
              <i class="fa fa-cog fa-spin features-icon"></i>
              <h2>Cara Kerja</h2>
              <p>Kami selalu melakukan inovasi terus menerus kearah teknologi yang lebih baik untuk meningkatkan kualitas produk kami.</p>
          </div>
      </div>
      <div class="col-md-3 text-center wow fadeInRight">
          <div>
              <i class="fa fa-tasks features-icon"></i>
              <h2>Quality Control</h2>
              <p>Semua produk sudah melewati proses quality control yang ketat, jinggacloud telah melakukan runing test terlebih dahulu sebelum didistribusikan ke konsumen.</p>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-3 text-center wow fadeInRight">
          <div>
              <i class="fa fa-tags features-icon"></i>
              <h2>12 Kategori Website</h2>
              <p>Company Profile, Catalogue, e-Commerce, e-Learning, HRM, Apotek, Retail &amp; POS, &amp; Hotel.</p>
          </div>
      </div>
      <div class="col-md-3 text-center wow fadeInRight">
          <div>
              <i class="fa fa-cogs features-icon"></i>
              <h2>Versi Kustom</h2>
              <p>Jinggacloud juga melayani proyek kustom, seperti kombinasi antara HRM + e-Commerce.</p>
          </div>
      </div>
      <div class="col-md-3 text-center wow fadeInRight">
          <div>
              <i class="fa fa-money features-icon"></i>
              <h2>Harga Kompetitif</h2>
              <p>Website kami bukanlah yang termurah di pasaran, kami memberikan kualitas website yang lebih tinggi daripada website yang lebih mahal sekalipun.</p>
          </div>
      </div>
      <div class="col-md-3 text-center wow fadeInRight">
          <div>
              <i class="fa fa-user-md features-icon"></i>
              <h2>After Sales</h2>
              <p>Layanan after-sales kami mencakup seluruh dukungan yang diperlukan, mulai dari panduan penggunaan, perbaikan jika terjadi error.</p>
          </div>
      </div>
  </div>
</section>

<section id="testimonials" class="navy-section testimonials">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center wow zoomIn">
                <i class="fa fa-comment big-icon"></i>
                <h1>
                    Apa kata pengguna kami
                </h1>
                <div class="testimonials-text">
                    <i>"web programmer yang disarankan, sesuai dengan permintaan dan kebutuhan yang saya harapkan, saya percaya jika menggunakan aplikasi buatan jinggacloud sangat ringan, performa website akan lebih maksimal dan terjamin keamanannya. Saya telah menggunakan produk HRM dari jinggacloud, kinerjanya sangat ringan meski spesifikasi gadget rendah. Terima kasih Jinggacloud"</i>
                </div>
                <small>
                    <strong>15 Oktober 2017 - Irvan Samuel</strong>
                </small>
            </div>
        </div>
    </div>

</section>

<section class="comments gray-section" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Apa kata mitra jinggacloud ?</h1>
                <p>Berikut adalah tiga ucapan terbaik berdasarkan komentar langsung dari mitra.</p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-4">
                <div class="bubble">
                    "Sangat membantu kinerja kami menjadi lebih maksimal, dimulai dari barang masuk, barang keluar, stock opname otomatis, sampai POS nya, recommended seller."
                </div>
                <div class="comments-avatar">
                    <a href="#" class="pull-left">
                        <img alt="image" src="{{ asset('img/landing/avatar3.jpg') }}">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Arni Aryudia Yuana
                        </div>
                        <small class="text-muted">Toko obat Arta</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bubble">
                    "Web company profile &amp; katalog nya sangat bagus, sesuai dengan keinginan kami dimulai dari perpaduan warna, penempatan gambar dan yang paling kami suka bisa customize ganti logo, gambar, background sangat dinamis dan responsive."
                </div>
                <div class="comments-avatar">
                    <a href="#" class="pull-left">
                        <img alt="image" src="{{ asset('img/landing/avatar1.jpg') }}">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Ghayda Zahin Wibowo
                        </div>
                        <small class="text-muted">Donat Madu Cihanjuang</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bubble">
                    "Sistem informasi HRM yang saya kontrak 1 tahun, dapat uji coba aplikasi terlebih dahulu selama 1 bulan. dilengkapi dengan fitur yang menunjang internal perusahaan terutama HRD dan staff."
                </div>
                <div class="comments-avatar">
                    <a href="#" class="pull-left">
                        <img alt="image" src="{{ asset('img/landing/avatar2.jpg') }}">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Lilik Chuk
                        </div>
                        <small class="text-muted">Human Resource</small>
                    </div>
                </div>
            </div>



        </div>
    </div>

</section>

<section id="pricing" class="pricing">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Harga Aplikasi</h1>
                <p>Jinggacloud memiliki 12 kategori aplikasi berbasis website, seperti yang berikut :</p>
            </div>
        </div>
        <div class="row" style="margin-bottom:20px">
          @if(count($products) > 0)
                @foreach($products as $product)
                @php
                if($product->priceup > 0){
                    $price = 'Mulai dari Rp '.number_format($product->price,0,',','.');
                } else {
                    $price = 'Rp '.number_format($product->price,0,',','.');
                }
                @endphp
            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        {{ $product->title }}
                    </li>
                    <li class="pricing-desc">
                        {{ $product->description }}
                    </li>
                    <li class="pricing-price">
                        <span>{{ $price }} / {{ $product->unit }}</span>
                    </li>
                    <li>
                        <button class="btn btn-primary readmore" data-id="{{ $product->slug }}">Read More</button>
                    </li>
                </ul>
            </div>
            @endforeach
          @else
            <div style="margin:0 auto">
              <span class="alert alert-info">Pada saat ini tidak ada produk yang dipasarkan.</span>
            </div>
          @endif
        </div>
    </div>

</section>

<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Kontak</h1>
                <p>Butuh bantuan dan informasi tentang jinggacloud ? Kontak saja</p>
            </div>
        </div>
        <div class="row m-b-lg justify-content-center">
            <div class="col-lg-3 ">
              <address>
                  <strong><span class="navy">{{ config('app.name') }}</span></strong><br/>
                  Chandra Wibowo<br/>
                  Halimun Residence C4 66<br/>
                  Katapang - Soreang, Bandung<br/>
                  <abbr title="Phone">P:</abbr> (+62) 889-283-0970
              </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    Dapatkan informasi terbaru dari jinggacloud kapanpun dan dimanapun, banyak cara untuk lebih dekat dengan jinggacloud menggunakan kontak atau mengikuti media sosial jinggacloud.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:chandra@wibowo.id" class="btn btn-primary">Kirim Pesan</a>
                <p class="m-t-sm">
                    Ikuti jinggacloud
                </p>
                <ul class="list-inline social-icon">
                    <li class="list-inline-item"><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" title=""><i class="fa fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#" title=""><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center m-t-lg m-b-lg">
                <p><strong>{{ date('Y') }} &copy; by {{ config('app.name') }}</strong></p>
            </div>
        </div>
    </div>
</section>

<div class="modal inmodal" id="mail" tabindex="-1" role="dialog" aria-hidden="true"></div>
<div class="modal inmodal" id="readmore" tabindex="-1" role="dialog" aria-hidden="true"></div>
<div class="modal inmodal" id="ordernow" tabindex="-1" role="dialog" aria-hidden="true"></div>

<!-- Mainly scripts -->
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('js/inspinia.js') }}"></script>
<script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('js/plugins/wow/wow.min.js') }}"></script>

<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '#navbar',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

<script src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.mail').click(function(){
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:"{{ url('/formmail') }}",
                type:"POST",
                success:function(data){
                    $('#mail').html(data);
                    $('#mail').modal('show');
                    $('.send').click(function(){
                        var name = $('input[name=name]').val(),
                        subject = $('input[name=subject]').val(),
                        mail = $('input[name=mail]').val(),
                        message = $('textarea[name=message]').val();
                        $.ajax({
                            headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            url:"{{ url('/sendmail') }}",
                            type:"POST",
                            data:{name:name,subject:subject,mail:mail,message:message},
                            success:function(send){
                                $('#mail').modal('hide');
                                swal({
                                    title: "Terimakasih",
                                    text: "Pesan anda telah terkirim, info lebih lanjut periksa kotak masuk email anda.",
                                    type: "success"
                                });
                            }
                        })
                    });
                }
            });
        });
        $('.readmore').on('click',function(event){
            var id = $(this).data('id');
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:"{{ url('/readmore') }}",
                type:"POST",
                data:{id:id,},
                success:function(data){
                    $('#readmore').html(data);
                    $('#readmore').modal('show');
                    $('.order').click(function(){
                        var id = $(this).data('id');
                        $.ajax({
                            headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            url:"{{ url('/ordernow') }}",
                            type:"POST",
                            data:{id:id},
                            success:function(data){
                                $('#ordernow').html(data);
                                $('#readmore').modal('hide');
                                $('#ordernow').modal('show');
                                $('.orderclose').click(function(){
                                    $('#ordernow').modal('hide');
                                    $('#readmore').modal('show');
                                });
                                $('.order').click(function(){
                                    var id = $('.order').data('id'),
                                    name = $('input[name=name]').val(),
                                    phone = $('input[name=phone]').val(),
                                    mail = $('input[name=mail]').val(),
                                    address = $('textarea[name=address]').val();
                                    $.ajax({
                                        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                        url:"{{ url('/order') }}",
                                        type:"POST",
                                        data:{id:id,name:name,phone:phone,mail:mail,address:address},
                                        success:function(data){
                                            $('#ordernow').modal('hide');
                                            swal({
                                                title: "Terimakasih",
                                                text: "Pesanan akan segera diproses, kami akan menghubungi anda dalam waktu dekat.",
                                                type: "success"
                                            });
                                        }
                                    });
                                });
                            }
                        });
                    });
                }
            });
        });
    });
</script>

</body>
</html>
