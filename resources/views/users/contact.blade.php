<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Homepage | Clickclean</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <body>
    @include('layouts.header')
    <section class="banner" style="background-image: url('{{ asset('images/cropped-view-of-cleaner-washing-stairs-with-mop-SXHPS6U.jpg') }}');">
            <div class="content-area">
            <div class="content">
            <h1>Contact Us</h1>
            <p>HOME</a> &nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp; &nbsp;CONTACT US</p>
            </div>
            </div>
        </section>

        <section id="contact-info">
            <div class="container-grd">
                <div class="box">
                    <img src="{{ asset('images/telephone.png') }}" class="bx" alt="">
                    <h3>Contact</h3>
                    <p>1500 - 144 /</p>
                    <p>+6281234567890</p>
                    <p>clickcleanoffice@gmail.com</p>
                </div>
                <div class="box">
                    <img src="{{ asset('images/address.png') }}" class="bx" alt="">
                    <h3>Alamat</h3>
                    <p>Clickclean Company Center,</p>
                    <p>Jln. Soedirman No.450</p>
                    <p>Jakarta, Indonesia</p>
                </div>
                <div class="box">
                    <img src="{{ asset('images/workhour.png') }}" class="bx" alt="">
                    <h3>Jam Kerja</h3>
                    <p>Buka Senin - Sabtu</p>
                    <p>08.00 - 17.00</p>
                    <p>Hari Minggu Tutup</p>
                </div>
            </div>
        </section>

    <section id="map">
        <div class="foto-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.266513813553!2d106.79777681431028!3d-6.228551362731653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14600e6df87%3A0x918cf99888f7fa28!2sJl.%20Jend.%20Sudirman%20No.450%2C%20RT.1%2FRW.3%2C%20Gelora%2C%20Kecamatan%20Tanah%20Abang%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010270!5e0!3m2!1sid!2sid!4v1637861330270!5m2!1sid!2sid" width="1290" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    @include('layouts.footer')
<body>
<html> 