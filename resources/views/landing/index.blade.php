<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PORTAL E-POINT MTSN1 MUBA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/fe') }}/img/logo.jpeg" rel="icon">
    <link href="{{ asset('assets/fe') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/fe') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/fe') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/fe') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets/fe') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets/fe') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/fe') }}/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('assets/fe') }}/img/logo.jpeg" alt="">
                    <h1 class="sitename">MTSN 1 MUBA</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="{{route('login')}}" class="fw-bold">Login</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <div class="container"  style="margin-top: -250px;">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1><span>E-POINT MTSN 1 MUBA</span></h1>
                        <p>Sistem pencatatan pelanggaran siswa secara digital melalui E-POINT.</p>

                        <div class="d-flex">
                            <a href="#track" class="btn-get-started"><i class="bi bi-search me-1"></i>Track Pelanggaran</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="track" class="footer">

            <div class="footer-newsletter" style="margin-top:-60px">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <h4>Track Pelanggaran</h4>
                            <p>Masukkan NISN Siswa yang telah terdaftar!</p>
                            <form novalidate method="post" class="php-email-form">
                                @csrf
                                @method('POST')
                                <div class="newsletter-form">
                                    <input type="text" name="nisn" id="nisn" placeholder="Enter NISN"><button type="submit">Tracking</button>
                                </div>
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="box-message"></div>
                            </form>
                            

                        </div>
                    </div>
                </div>
            </div>


        </section><!-- /Featured Services Section -->


        <!-- Stats Section -->
        <section id="about" class="stats section">
            <div class="container section-title" data-aos="fade-up" style="margin-top: -60px">
                <h2>Statistik Siswa</h2>
                <p><span>Find Out More</span> <span class="description-title"><a href="#">Click Here</a></span>
                </p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-people-fill"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $siswa }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Jumlah Siswa</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-person-fill-exclamation"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $pelanggaran }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Jumlah Pelanggaran</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-person-workspace"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $guru }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Jumlah Guru</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-person-video3"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $kelas }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Jumlah Kelas</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p><span>Frequently Asked</span> <span class="description-title">Questions</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>Apa itu aplikasi E-Point Pelanggaran Tata Tertib Siswa di MTs Negeri 1 Musi Banyuasin?</h3>
                                <div class="faq-content">
                                    <p>Aplikasi E-Point adalah sistem elektronik yang digunakan untuk mencatat dan mengelola pelanggaran tata tertib siswa di MTs Negeri 1 Musi Banyuasin. </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Bagaimana cara mengakses aplikasi E-Point?</h3>
                                <div class="faq-content">
                                    <p> Aplikasi E-Point dapat diakses melalui website resmi <a href="https://mtsn1muba.sch.id" class="text-white fst-italic fw-bold" target="_blank">MTs Negeri 1 Musi Banyuasin</a>. </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3> Apa saja jenis pelanggaran tata tertib yang dicatat dalam aplikasi E-Point?</h3>
                                <div class="faq-content">
                                    <p>Aplikasi E-Point mencatat berbagai jenis pelanggaran seperti: keterlambatan, ketidakhadiran, pakaian tidak sesuai, perilaku tidak sopan, dan pelanggaran lainnya yang tercantum dalam tata tertib MTs Negeri 1 Musi Banyuasin.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            {{-- <div class="faq-item">
                                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item--> --}}

                            <div class="faq-item">
                                <h3>Apa yang terjadi jika saya mendapatkan poin pelanggaran?</h3>
                                <div class="faq-content">
                                    <p>
                                        Jika Anda mendapatkan poin pelanggaran, Anda akan dikenakan sanksi sesuai dengan jumlah poin yang diperoleh. Sanksi dapat berupa teguran, peringatan, atau hukuman lainnya sesuai dengan tata tertib MTs Negeri 1 Musi Banyuasin. Anda juga dapat melihat riwayat pelanggaran dan poin Anda melalui aplikasi E-Point.
                                        <br><span class="fw-bold">Catatan</span>
                                        <br>- Pertanyaan dan jawaban ini hanya contoh. Anda dapat menambahkan atau mengubah pertanyaan dan jawaban sesuai dengan kebutuhan aplikasi E-Point di MTs Negeri 1 Musi Banyuasin.
                                        <br>- Pastikan untuk menggunakan bahasa yang mudah dipahami dan memberikan informasi yang jelas dan akurat.

                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            {{-- <div class="faq-item">
                                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                                <div class="faq-content">
                                    <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed
                                        in suscipit sequi. Distinctio ipsam dolore et.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item--> --}}

                        </div>

                    </div><!-- End Faq Column-->

                </div>

            </div>

        </section><!-- /Faq Section -->


    </main>

    <footer id="footer" class="footer">

        <div class="container copyright text-center mb-0">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">MTSN 1 MUBA</strong> <span>All Rights
                    Reserved</span>
            </p>
            {{-- <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div> --}}
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/fe') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/fe') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('assets/fe') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets/fe') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets/fe') }}/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('assets/fe') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('assets/fe') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/fe') }}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('assets/fe') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/fe') }}/js/main.js"></script>
    {{-- <script>
        document.getElementById('trackingForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting the traditional way
    
            // Get the NISN value from the input field
            var nisn = document.getElementById('nisn').value;
    
            // Show loading message
            document.querySelector('.loading').style.display = 'block';
            document.querySelector('.error-message').style.display = 'none';
    
            // Perform AJAX request
            fetch('/track-pelanggaran', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value,
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({ nisn: nisn })
                })
                .then(response => response.json())
                .then(data => {
                    // Hide loading message
                    document.querySelector('.loading').style.display = 'none';
                    console.log(data);
                    if (data.status === 200) {
                        // Extract student information
                        var student = data.data.length > 0 ? data.data[0].student : {
                            nama: 'N/A',
                            nisn: 'N/A'
                        };
    
                        // Create student info HTML
                        var studentInfo = `
                            <h5>Nama Siswa: ${student.nama}</h5>
                            <h5>NISN: ${student.nisn}</h5>
                        `;
    
                        // Create table with the data
                        var tableHtml =
                            '<table class="table table-bordered"><thead class="thead-light"><tr><th>No</th><th>Nama Pelanggaran</th><th>Poin</th><th>Tanggal</th></tr></thead><tbody>';
                        data.data.forEach((pelanggaran, index) => {
                            var createdAt = new Date(pelanggaran.created_at);
                            var formattedDate = createdAt.toLocaleDateString('id-ID', {
                                day: '2-digit',
                                month: 'long',
                                year: 'numeric'
                            });
                            tableHtml +=
                                `<tr><td>${index + 1}</td><td>${pelanggaran.kategori.kategori_pelanggaran}</td><td>${pelanggaran.kategori.poin}</td><td>${formattedDate}</td></tr>`;
                        });
                        tableHtml += '</tbody></table>';
    
                        // Insert student info and table into box-message div
                        document.querySelector('.box-message').innerHTML = studentInfo + tableHtml;
                        document.querySelector('.box-message').style.display = 'block';
                    } else {
                        // Display error message
                        document.querySelector('.error-message').innerText = 'Error fetching data';
                        document.querySelector('.error-message').style.display = 'block';
                    }
                })
                .catch(error => {
                    // Hide loading message
                    document.querySelector('.loading').style.display = 'none';
    
                    // Display error message
                    document.querySelector('.error-message').innerText = 'An error occurred';
                    document.querySelector('.error-message').style.display = 'block';
                });
        });
    </script> --}}
    
</body>

</html>
