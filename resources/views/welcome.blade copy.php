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
    <!-- Navigation -->
    <nav class="navbar">
        <a class="navbar-brand" href="{{ url("#profil") }}">
            <img src="{{ asset('/img/ponpes-amikom-jogja.png') }}" alt="Logo Pondok Pesantren Amikom" style="height: 50px; margin-right: 10px;">
            <span>Pondok Pesantren Amikom</span>
        </a>

        <button class="mobile-menu-btn">
            <i class="fas fa-bars"></i>
        </button>

        <div class="navbar-menu">
            <a href="{{ url("#profil") }}">Profil Pesantren</a>
            <a href="{{ url("#program") }}">Program Pendidikan</a>
            <a href="{{ url("#galeri") }}">Galeri</a>
            <a href="{{ url("#agenda") }}">Agenda</a>
            <a href="{{ url("#artikel") }}">Artikel</a>

            <a href="{{ url("#staff") }}">Staff</a>

            <a href="{{ url("#testimoni") }}">Testimoni</a>
            <a class="btn" href="https://wa.me/6281234567890" target="_blank">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
        </div>
    </nav>

    <!-- Profile Section -->
    <section id="profil" data-aos="fade-up" data-aos-delay="500">
        <div class="section-title">
            <h1>Selamat Datang Di Website</h1>
            <h2>Pondok Pesantren Amikom</h2>
            <p>Mengenal lebih dekat tentang Pondok Pesantren kami</p>
        </div>

        <div class="profil-container">
            <div class="profil-image">
                <img src="{{ asset("/img/ponpes-amikom.jpg") }}" alt="Pondok Pesantren" />
            </div>
            <div class="profil-content">
                <h3>Pendidikan Berkualitas Berbasis Nilai-Nilai Islam</h3>
                <p>
                    Pondok Pesantren Amikom adalah lembaga pendidikan Islam yang
                    menggabungkan pendidikan agama dengan pendidikan modern. Kami
                    berkomitmen untuk mencetak generasi Qur'ani yang berakhlak mulia,
                    berpengetahuan luas, dan siap menghadapi tantangan zaman.
                </p>
                <p>
                    Dengan sistem pendidikan yang komprehensif, kami mengintegrasikan
                    pembelajaran Al-Qur'an, kitab kuning, dan ilmu pengetahuan umum
                    dalam suasana yang kondusif untuk perkembangan spiritual dan
                    intelektual santri.
                </p>

                <div class="profil-stats">
                    <div class="stat-item">
                        <h4>500+</h4>
                        <p>Santri Aktif</p>
                    </div>
                    <div class="stat-item">
                        <h4>25+</h4>
                        <p>Ustadz/Ustadzah</p>
                    </div>
                    <div class="stat-item">
                        <h4>15</h4>
                        <p>Tahun Pengalaman</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section -->
    <section id="program" style="background-color: #f5f5f5" data-aos="fade-left" data-aos-delay="500">
        <div class="section-title">
            <h2>Program Pendidikan</h2>
            <p>Berbagai program unggulan yang kami tawarkan</p>
        </div>

        <div class="program-container">
            <div class="program-card">
                <div class="program-image">
                    <img src="{{ asset("/img/program-1.jpeg") }}" alt="Tahfidz Al-Qur'an" />
                </div>
                <div class="program-content">
                    <h3>Tahfidz Al-Qur'an</h3>
                    <p>
                        Program menghafal Al-Qur'an dengan metode yang efektif dan
                        terstruktur, dibimbing oleh para hafidz/hafidzah yang
                        berpengalaman.
                    </p>
                    <div class="program-meta">
                        <span><i class="fas fa-clock"></i> 3 Tahun</span>
                        <span><i class="fas fa-user-graduate"></i> 100 Santri</span>
                    </div>
                </div>
            </div>

            <div class="program-card">
                <div class="program-image">
                    <img src="{{ asset("/img/program-2.jpg") }}" alt="Pendidikan Diniyah" />
                </div>
                <div class="program-content">
                    <h3>Pendidikan Diniyah</h3>
                    <p>
                        Pembelajaran kitab-kitab klasik (turats) meliputi bidang aqidah,
                        fiqh, hadits, tafsir, bahasa Arab, dan akhlak.
                    </p>
                    <div class="program-meta">
                        <span><i class="fas fa-clock"></i> 6 Tahun</span>
                        <span><i class="fas fa-user-graduate"></i> 200 Santri</span>
                    </div>
                </div>
            </div>

            <div class="program-card">
                <div class="program-image">
                    <img src="{{ asset("/img/program-3.jpg") }}" alt="Sekolah Formal" />
                </div>
                <div class="program-content">
                    <h3>Sekolah Formal</h3>
                    <p>
                        Pendidikan formal setara SD, SMP, dan SMA dengan kurikulum
                        nasional plus pendidikan agama yang intensif.
                    </p>
                    <div class="program-meta">
                        <span><i class="fas fa-clock"></i> 12 Tahun</span>
                        <span><i class="fas fa-user-graduate"></i> 300 Santri</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- gaelriii starrttt -->
    <section id="galeri" data-aos="fade-right" data-aos-delay="500">
        <div class="section-title">
            <h2>Galeri Kegiatan</h2>
            <p>Dokumentasi kegiatan santri dan lingkungan pesantren</p>
        </div>

        <div
            style="
          max-width: 1500px;
          margin: auto;
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
          gap: 1.5rem;
        ">
            <div
                style="
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
          ">
                <img
                    src="{{ asset("/img/kegiatan-dipondok.jpg") }}"
                    alt="Kegiatan Santri 1"
                    style="
              width: 120%;
              height: 200px;
              object-fit: cover;
              transition: transform 0.3s ease;
            " />
            </div>
            <div
                style="
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
          ">
                <img
                    src="{{ asset("/img/kegiatan-dipondok.jpg") }}"
                    alt="Kegiatan Santri 2"
                    style="
              width: 120%;
              height: 200px;
              object-fit: cover;
              transition: transform 0.3s ease;
            " />
            </div>
            <div
                style="
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
          ">
                <img
                    src="{{ asset("/img/kegiatan-dipondok.jpg") }}"
                    alt="Kegiatan Santri 3"
                    style="
              width: 120%;
              height: 200px;
              object-fit: cover;
              transition: transform 0.3s ease;
            " />
            </div>
            <div
                style="
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
          ">
                <img
                    src="{{ asset("/img/kegiatan-dipondok.jpg") }}"
                    alt="Kegiatan Santri 4"
                    style="
              width: 120%;
              height: 200px;
              object-fit: cover;
              transition: transform 0.3s ease;
            " />
            </div>

            <div
                style="
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
          ">
                <img
                    src="{{ asset("/img/kegiatan-dipondok.jpg") }}"
                    alt="Kegiatan Santri 4"
                    style="
              width: 120%;
              height: 200px;
              object-fit: cover;
              transition: transform 0.3s ease;
            " />
            </div>
        </div>
    </section>

    <!-- gaelri end -->
    <!-- Agenda Section -->
    <section id="agenda" data-aos="fade-down" data-aos-delay="500">
        <div class="section-title">
            <h2>Agenda & Kegiatan</h2>
            <p>Jadwal kegiatan terbaru di Pondok Pesantren kami</p>
        </div>

        <div class="agenda-container">
            <div class="agenda-item">
                <div class="agenda-date">
                    <span class="day">15</span>
                    <span class="month">Juli 2025</span>
                </div>
                <div class="agenda-content">
                    <h3>Peringatan Isra' Mi'raj</h3>
                    <div class="agenda-meta">
                        <span><i class="fas fa-clock"></i> 08.00 - Selesai</span>
                        <span><i class="fas fa-map-marker-alt"></i> Aula Utama</span>
                    </div>
                    <p>
                        Acara peringatan Isra' Mi'raj Nabi Muhammad SAW dengan berbagai
                        rangkaian kegiatan termasuk ceramah agama, pembacaan shalawat, dan
                        pentas seni islami.
                    </p>
                </div>
            </div>

            <div class="agenda-item">
                <div class="agenda-date">
                    <span class="day">22</span>
                    <span class="month">Juli 2025</span>
                </div>
                <div class="agenda-content">
                    <h3>Munasabahtul Qur'an</h3>
                    <div class="agenda-meta">
                        <span><i class="fas fa-clock"></i> 07.30 - 12.00</span>
                        <span><i class="fas fa-map-marker-alt"></i> Masjid Pesantren</span>
                    </div>
                    <p>
                        Kompetisi hafalan Al-Qur'an antar santri dengan berbagai kategori
                        mulai dari juz 1, juz 30, hingga hafalan 5 juz, 10 juz, dan 30
                        juz.
                    </p>
                </div>
            </div>

            <div class="agenda-item">
                <div class="agenda-date">
                    <span class="day">28</span>
                    <span class="month">Juli 2025</span>
                </div>
                <div class="agenda-content">
                    <h3>Pelatihan Kepemimpinan Santri</h3>
                    <div class="agenda-meta">
                        <span><i class="fas fa-clock"></i> 13.00 - 17.00</span>
                        <span><i class="fas fa-map-marker-alt"></i> Ruang Serbaguna</span>
                    </div>
                    <p>
                        Pelatihan untuk pengurus OSIS dan pengurus asrama untuk
                        meningkatkan kemampuan kepemimpinan dan manajemen organisasi.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- section untukberita start -->
    <section id="artikel" style="background-color: #f5f5f5" data-aos="zoom-in" data-aos-delay="600">
        <div class="section-title">
            <h2>Artikel & Blog Dakwah</h2>
            <p>Kumpulan tulisan dan kajian islami dari para ustadz/ustadzah</p>
        </div>

        <div class="artikel-container">
            <div class="artikel-card">
                <div class="artikel-image">
                    <img src="{{ asset("/img/program-1.jpeg") }}" alt="Keutamaan Menghafal Al-Qur'an" />
                </div>
                <div class="artikel-content">
                    <span class="artikel-category">Tahfidz</span>
                    <h3>Keutamaan Menghafal Al-Qur'an di Usia Muda</h3>
                    <p>
                        Menghafal Al-Qur'an di usia muda memiliki banyak keutamaan.
                        Artikel ini membahas bagaimana memotivasi santri untuk mencintai
                        Al-Qur'an dan metode efektif menghafal...
                    </p>
                    <div class="artikel-meta">
                        <span><i class="far fa-user"></i> Ust. Ahmad Fauzi</span>
                        <span><i class="far fa-calendar-alt"></i> 10 Juni 2023</span>
                    </div>
                </div>
            </div>

            <div class="artikel-card">
                <div class="artikel-image">
                    <img
                        src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80"
                        alt="Pendidikan Karakter" />
                </div>
                <div class="artikel-content">
                    <span class="artikel-category">Pendidikan</span>
                    <h3>Membangun Karakter Santri Melalui Nilai-nilai Islam</h3>
                    <p>
                        Pendidikan karakter adalah pondasi utama dalam sistem pendidikan
                        pesantren. Bagaimana kita menanamkan akhlak mulia kepada santri
                        dalam kehidupan sehari-hari...
                    </p>
                    <div class="artikel-meta">
                        <span><i class="far fa-user"></i> Ustzh. Fatimah Azzahra</span>
                        <span><i class="far fa-calendar-alt"></i> 25 Mei 2023</span>
                    </div>
                </div>
            </div>

            <div class="artikel-card">
                <div class="artikel-image">
                    <img
                        src="https://images.unsplash.com/photo-1588072432904-843af37f03ed?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80"
                        alt="Fiqh Kontemporer" />
                </div>
                <div class="artikel-content">
                    <span class="artikel-category">Kajian</span>
                    <h3>Menjawab Tantangan Fiqh di Era Digital</h3>
                    <p>
                        Perkembangan teknologi membawa tantangan baru dalam penerapan fiqh
                        islam. Bagaimana menyikapi berbagai persoalan kontemporer dengan
                        tetap berpegang pada prinsip syariah...
                    </p>
                    <div class="artikel-meta">
                        <span><i class="far fa-user"></i> Ust. Muhammad Hadi</span>
                        <span><i class="far fa-calendar-alt"></i> 12 April 2023</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section berita end -->
    <!-- SECTION 101 STAR -->
    <!-- Staff & Pengajar Section -->
    <section id="staff" style="background-color: #f5f5f5" data-aos="zoom-in" data-aos-delay="600">
        <div class="section-title">
            <h2>Staff & Pengajar</h2>
            <p>Tim pengajar profesional dan berpengalaman</p>
        </div>

        <div class="staff-container">
            <div class="staff-card">
                <img
                    src="https://randomuser.me/api/portraits/men/75.jpg"
                    alt="Ustadz"
                    class="staff-image" />
                <div class="staff-info">
                    <h3>Ust. Ahmad Fauzi</h3>
                    <p>Mudir Pesantren</p>
                </div>
            </div>

            <div class="staff-card">
                <img
                    src="https://randomuser.me/api/portraits/men/42.jpg"
                    alt="Ustadz"
                    class="staff-image" />
                <div class="staff-info">
                    <h3>Ust. Muhammad Hadi</h3>
                    <p>Ketua Tahfidz</p>
                </div>
            </div>

            <div class="staff-card">
                <img
                    src="https://randomuser.me/api/portraits/women/63.jpg"
                    alt="Ustadzah"
                    class="staff-image" />
                <div class="staff-info">
                    <h3>Ustzh. Fatimah</h3>
                    <p>Kepala Sekolah</p>
                </div>
            </div>

            <div class="staff-card">
                <img
                    src="https://randomuser.me/api/portraits/men/65.jpg"
                    alt="Ustadz"
                    class="staff-image" />
                <div class="staff-info">
                    <h3>Ust. Abdul Qodir</h3>
                    <p>B. Arab & Fiqh</p>
                </div>
            </div>

            <div class="staff-card">
                <img
                    src="https://randomuser.me/api/portraits/women/45.jpg"
                    alt="Ustadzah"
                    class="staff-image" />
                <div class="staff-info">
                    <h3>Ustzh. Aisyah</h3>
                    <p>Tahfidz Wanita</p>
                </div>
            </div>

            <div class="staff-card">
                <img
                    src="https://randomuser.me/api/portraits/men/31.jpg"
                    alt="Ustadz"
                    class="staff-image" />
                <div class="staff-info">
                    <h3>Ust. Imam Nawawi</h3>
                    <p>Aqidah & Akhlaq</p>
                </div>
            </div>

            <div class="staff-card">
                <img
                    src="https://randomuser.me/api/portraits/women/32.jpg"
                    alt="Ustadzah"
                    class="staff-image" />
                <div class="staff-info">
                    <h3>Ustzh. Zainab</h3>
                    <p>Sains Islam</p>
                </div>
            </div>

            <div class="staff-card">
                <img
                    src="https://randomuser.me/api/portraits/men/55.jpg"
                    alt="Ustadz"
                    class="staff-image" />
                <div class="staff-info">
                    <h3>Ust. Abdullah</h3>
                    <p>Kepala Asrama</p>
                </div>
            </div>

            <div class="staff-card">
                <img
                    src="https://randomuser.me/api/portraits/men/77.jpg"
                    alt="Ustadz"
                    class="staff-image" />
                <div class="staff-info">
                    <h3>Ust. Ali Hasan</h3>
                    <p>Tahfidz Putra</p>
                </div>
            </div>

            <div class="staff-card">
                <img
                    src="https://randomuser.me/api/portraits/women/22.jpg"
                    alt="Ustadzah"
                    class="staff-image" />
                <div class="staff-info">
                    <h3>Ustzh. Khadijah</h3>
                    <p>Bimbingan Konseling</p>
                </div>
            </div>
        </div>
    </section>

    <!-- seksti testimoni start -->
    <!-- Testimoni Section -->
    <section id="testimoni" data-aos="zoom-in" data-aos-delay="600">
        <div class="section-title">
            <h2>Apa Kata Mereka</h2>
            <p>Testimoni dari wali santri dan alumni</p>
        </div>

        <div class="testimoni-container">
            <div class="testimoni-card">
                <p class="testimoni-content">
                    Anak saya sangat berkembang setelah mondok di sini, tidak hanya
                    dalam bidang agama tapi juga dalam kemandirian dan kedisiplinan.
                    Sistem pendidikan yang seimbang antara dunia dan akhirat.
                </p>
                <div class="testimoni-author">
                    <img
                        src="https://randomuser.me/api/portraits/women/65.jpg"
                        alt="Orang Tua Santri" />
                    <div class="author-info">
                        <h4>Ibu Siti Aminah</h4>
                        <p>Wali Santri</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimoni-card">
                <p class="testimoni-content">
                    Sebagai alumni, saya sangat berterima kasih pada pesantren ini yang
                    telah membentuk karakter dan pemahaman agama saya. Bekal ilmu yang
                    diberikan sangat bermanfaat dalam kehidupan bermasyarakat.
                </p>
                <div class="testimoni-author">
                    <img
                        src="https://randomuser.me/api/portraits/men/32.jpg"
                        alt="Alumni" />
                    <div class="author-info">
                        <h4>Ahmad Fauzan</h4>
                        <p>Alumni 2019</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimoni-card">
                <p class="testimoni-content">
                    Pengajar yang kompeten dan peduli dengan perkembangan santri.
                    Fasilitas cukup memadai dan lingkungan yang kondusif untuk belajar
                    agama. Anak saya betah dan semangat berangkat setiap minggunya.
                </p>
                <div class="testimoni-author">
                    <img
                        src="https://randomuser.me/api/portraits/women/43.jpg"
                        alt="Orang Tua Santri" />
                    <div class="author-info">
                        <h4>Ibu Rahma Susanti</h4>
                        <p>Wali Santri</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seksti testimoni end -->
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
                        <i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No. 123, Desa
                        Ilmu, Kecamatan Qur'ani, Kabupaten Sunnah
                    </p>
                    <p><i class="fas fa-phone"></i> (021) 1234-5678</p>
                    <p><i class="fas fa-envelope"></i> info@pondokpesantren.com</p>
                    <p>
                        <i class="fas fa-clock"></i> Senin - Jum'at: 08.00 - 16.00 WIB
                    </p>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>
                &copy; 2023 Pondok Pesantren [Nama Pesantren]. All Rights Reserved |
                Developed with
                <i class="fas fa-heart" style="color: #ff4757"></i> by Tim IT
                Pesantren
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