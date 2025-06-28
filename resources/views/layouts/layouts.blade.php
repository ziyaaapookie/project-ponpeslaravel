<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pondok Pesantren Amikom</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body>


    @include('layouts.navbar')

    @yield('content')


    <!-- SECTION 101 END -->
    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <div class="footer-logo">
                    <img src="{{ asset("/./img/demo-logo-pondok.png") }}" alt="Logo Pondok Pesantren" />
                    <p>
                        Pondok Pesantren Modern yang mengintegrasikan pendidikan agama
                        dengan pengembangan karakter untuk mencetak generasi Qur'ani yang
                        berakhlak mulia.
                    </p>
                </div>
                <div class="footer-social">
                    <a href="{{ url("#") }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ url("#") }}"><i class="fab fa-instagram"></i></a>
                    <a href="{{ url("#") }}"><i class="fab fa-youtube"></i></a>
                    <a href="{{ url("#") }}"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- <div class="footer-col">
          <h3 class="footer-title">Tautan Cepat</h3>
          <div class="footer-links">
            <ul>
              <li>
                <a href="{{ url("#") }}"><i class="fas fa-chevron-right"></i> Beranda</a>
              </li>
              <li>
                <a href="{{ url("#") }}"
                  ><i class="fas fa-chevron-right"></i> Profil Pesantren</a
                >
              </li>
              <li>
                <a href="{{ url("#") }}"
                  ><i class="fas fa-chevron-right"></i> Program Pendidikan</a
                >
              </li>
              <li>
                <a href="{{ url("#") }}"><i class="fas fa-chevron-right"></i> Pendaftaran</a>
              </li>
              <li>
                <a href="{{ url("#") }}"><i class="fas fa-chevron-right"></i> Galeri</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="footer-col">
          <h3 class="footer-title">Program Unggulan</h3>
          <div class="footer-links">
            <ul>
              <li>
                <a href="{{ url("#") }}"
                  ><i class="fas fa-chevron-right"></i> Tahfidz Al-Qur'an</a
                >
              </li>
              <li>
                <a href="{{ url("#") }}"
                  ><i class="fas fa-chevron-right"></i> Pendidikan Diniyah</a
                >
              </li>
              <li>
                <a href="{{ url("#") }}"
                  ><i class="fas fa-chevron-right"></i> Sekolah Formal</a
                >
              </li>
              <li>
                <a href="{{ url("#") }}"
                  ><i class="fas fa-chevron-right"></i> Pelatihan
                  Kepemimpinan</a
                >
              </li>
              <li>
                <a href="{{ url("#") }}"
                  ><i class="fas fa-chevron-right"></i> Kajian Rutin</a
                >
              </li>
            </ul>
          </div>
        </div> -->

            <div class="footer-col">
                <h3 class="footer-title">Kontak Kami</h3>
                <div class="footer-contact">
                    <p>
                        <i class="fas fa-map-marker-alt"></i> Jl. Proyek Pemrograman Dengan Judul Ponpes Digital
                    </p>
                    <p><i class="fas fa-phone"></i> (021) 1234-5678-91011 </p>
                    <p><i class="fas fa-envelope"></i> info@pondokpesantrendigital.com</p>
                    <p>
                        <i class="fas fa-clock"></i> Senin - Jum'at: 07.00 - 15.00 WIB
                    </p>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>
                &copy; 2025 Pondok Pesantren Digital. All Rights Reserved |
                Developed with
                <i class="fas fa-heart" style="color: #ff4757"></i> by ZRGDR
            </p>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>