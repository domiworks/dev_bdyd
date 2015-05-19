@extends('layouts.layout')
@section('content')  

@include('navigations.front')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDYD 2015</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">BDYD</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Scrolling Nav</h1>
                    <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
                  <p>Dewasa ini segala hal menjadi serba instan. Semua orang ingin mengerjakan semuanya dengan cepat tanpa merepotkan dirinya sendiri. Semakin banyak makanan cepat saji yang diproduksi dalam wadah berbahan dasar plastik, sterofoam dan kertas untuk menjawab kebutuhan manusia. Hal itu menyebabkan 'produksi' sampah juga semakin banyak.
Mahasiswa sebagai agen perubahan seharusnya bisa memberi dampak positif dari ilmunya untuk diaplikasikan pada lingkungan sekitar. Mahasiswa seharusnya juga turut mengambil peran terhadap hal-hal yang terjadi di lingkungan universitas mereka masing-masing.

David McClelland, seorang sosiolog terkemuka, mengatakan bahwa suatu negara akan maju jika terdapat entrepreneur sedikitnya sebanyak 2% dari total jumlah penduduknya. Sedangkan saat ini presentase entrepreneur di Indonesia hanya sebesar 1,26% dari jumlah penduduk. Melihat adanya hal tersebut, perlu adanya pemberian pengarahan yang aplikatif mengenai entrepreneurship kepada mahasiswa yang merupakan pemegang peranan penting dalam pertumbuhan entrepreneur di Indonesia.

Oleh karena itu, acara Parahyangan Green Challenge yang akan diselenggarakan di Universitas Kato
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Section</h1>
                </div>
                <p>Dewasa ini segala hal menjadi serba instan. Semua orang ingin mengerjakan semuanya dengan cepat tanpa merepotkan dirinya sendiri. Semakin banyak makanan cepat saji yang diproduksi dalam wadah berbahan dasar plastik, sterofoam dan kertas untuk menjawab kebutuhan manusia. Hal itu menyebabkan 'produksi' sampah juga semakin banyak.
Mahasiswa sebagai agen perubahan seharusnya bisa memberi dampak positif dari ilmunya untuk diaplikasikan pada lingkungan sekitar. Mahasiswa seharusnya juga turut mengambil peran terhadap hal-hal yang terjadi di lingkungan universitas mereka masing-masing.

David McClelland, seorang sosiolog terkemuka, mengatakan bahwa suatu negara akan maju jika terdapat entrepreneur sedikitnya sebanyak 2% dari total jumlah penduduknya. Sedangkan saat ini presentase entrepreneur di Indonesia hanya sebesar 1,26% dari jumlah penduduk. Melihat adanya hal tersebut, perlu adanya pemberian pengarahan yang aplikatif mengenai entrepreneurship kepada mahasiswa yang merupakan pemegang peranan penting dalam pertumbuhan entrepreneur di Indonesia.

Oleh karena itu, acara Parahyangan Green Challenge yang akan diselenggarakan di Universitas Katolik Parahyangan dibuat dalam lingkup nasional untuk memberikan pemahaman kepada mahasiswa di Indonesia akan bahaya dan dampak yang ditimbulkan oleh sampah dalam lingkungan universitasnya masing-masing. Acara Parahyangan Green Challenge juga mengajak mahasiswa untuk melakukan pengolahan sampah menjadi suatu barang yang memberikan nilai tambah dan dapat dijual kembali. Sampah yang akan diolah adalah sampah yang dimiliki warga sekitar universitas dan aplikatif yang dapat membantu warga untuk meringankan masalah sosial warga. Kegiatan Parahyangan Green Challenge akan memberikan dorongan kepada mahasiswa sehingga timbul kecintaan pada lingkungan, kepekaan, dan hati yang tergerak untuk membuat suatu perubahan di lingkungan tempat tinggal mereka.</p>

            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Section</h1>
                </div><p>Dewasa ini segala hal menjadi serba instan. Semua orang ingin mengerjakan semuanya dengan cepat tanpa merepotkan dirinya sendiri. Semakin banyak makanan cepat saji yang diproduksi dalam wadah berbahan dasar plastik, sterofoam dan kertas untuk menjawab kebutuhan manusia. Hal itu menyebabkan 'produksi' sampah juga semakin banyak.
Mahasiswa sebagai agen perubahan seharusnya bisa memberi dampak positif dari ilmunya untuk diaplikasikan pada lingkungan sekitar. Mahasiswa seharusnya juga turut mengambil peran terhadap hal-hal yang terjadi di lingkungan universitas mereka masing-masing.

David McClelland, seorang sosiolog terkemuka, mengatakan bahwa suatu negara akan maju jika terdapat entrepreneur sedikitnya sebanyak 2% dari total jumlah penduduknya. Sedangkan saat ini presentase entrepreneur di Indonesia hanya sebesar 1,26% dari jumlah penduduk. Melihat adanya hal tersebut, perlu adanya pemberian pengarahan yang aplikatif mengenai entrepreneurship kepada mahasiswa yang merupakan pemegang peranan penting dalam pertumbuhan entrepreneur di Indonesia.

Oleh karena itu, acara Parahyangan Green Challenge yang akan diselenggarakan di Universitas Katolik Parahyangan dibuat dalam lingkup nasional untuk memberikan pemahaman kepada mahasiswa di Indonesia akan bahaya dan dampak yang ditimbulkan oleh sampah dalam lingkungan universitasnya masing-masing. Acara Parahyangan Green Challenge juga mengajak mahasiswa untuk melakukan pengolahan sampah menjadi suatu barang yang memberikan nilai tambah dan dapat dijual kembali. Sampah yang akan diolah adalah sampah yang dimiliki warga sekitar universitas dan aplikatif yang dapat membantu warga untuk meringankan masalah sosial warga. Kegiatan Parahyangan Green Challenge akan memberikan dorongan kepada mahasiswa sehingga timbul kecintaan pada lingkungan, kepekaan, dan hati yang tergerak untuk membuat suatu perubahan di lingkungan tempat tinggal mereka.
</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Section</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
@home