@extends('layouts.layouts')

@section('content')

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
            @foreach ($program_pendidikans as $item)
            <div class="program-card">
                <div class="program-image">
                    <img src="{{ asset('storage/programpendidikan/' . $item->image) }}" alt="Tahfidz Al-Qur'an" />
                </div>
                <div class="program-content">
                    <h3>{{$item->judulprogram}}</h3>
                    <p>
                        {{$item->deskripsiprogram}}
                    </p>
                    <div class="program-meta">
                        <span><i class="fas fa-clock"></i> {{$item->tahun}}</span>
                        <span><i class="fas fa-user-graduate"></i> {{$item->jumlahsantri}}</span>
                    </div>
                </div>
            </div>
            @endforeach


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
            @foreach ($galeris as $item)
            <div
                style="
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
          ">
                <img
                    src="{{ asset('storage/galeri/' . $item->image) }}"
                    alt="Kegiatan Santri 2"
                    style="
              width: 120%;
              height: 200px;
              object-fit: cover;
              transition: transform 0.3s ease;
            " />
            </div>
            @endforeach



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

            @foreach ($agendas as $item)
            <div class="agenda-item">
                <div class="agenda-date">
                    <span class="day" style="font-size: 1.5rem;">{{$item->waktutanggal}}</span>

                </div>
                <div class="agenda-content">
                    <h3>{{$item->namakegiatan}}</h3>
                    <div class="agenda-meta">
                        <span><i class="fas fa-clock"></i>{{$item->jam}}</span>
                        <span><i class="fas fa-map-marker-alt"></i> {{$item->tempat}}</span>
                    </div>
                    <p>
                        {{$item->deskripsi}}
                    </p>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    <!-- section untukberita start -->
    <section id="artikel" style="background-color: #f5f5f5" data-aos="zoom-in" data-aos-delay="600">
        <div class="section-title">
            <h2>Artikel atau Quotes Dakwah Islami</h2>
            <p>Kumpulan tulisan atau kajian Quotes islami dari para ustadz/ustadzah</p>
        </div>

        <div class="artikel-container">
            @foreach ($artikels as $item)
            <div class="artikel-card">
                <div class="artikel-image">
                    <img src="{{ asset('storage/artikel/' . $item->image) }}" alt="Keutamaan Menghafal Al-Qur'an" />
                </div>
                <div class="artikel-content">
                    <span class="artikel-category">{{$item->kategoriartikel}}</span>
                    <h3>{{$item->judulartikel}}</h3>
                    <p>
                        {{$item->deskripsi}}
                    </p>
                    <div class="artikel-meta">
                        <span><i class="far fa-user"></i> {{$item->namapembuat}}</span>

                    </div>
                </div>
            </div>
            @endforeach





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
            @foreach ($staff as $item)
            <div class="staff-card">
                <img
                    src="{{ asset('storage/staff/' . $item->image) }}"
                    alt="Staff"
                    class="staff-image" />
                <div class="staff-info">
                    <h3>{{$item->nama}}</h3>
                    <p>{{$item->jabatan}}</p>
                </div>
            </div>

            @endforeach

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
            @foreach ($testimonis as $item)
            <div class="testimoni-card">
                <p class="testimoni-content">{{$item->katakata}}
                </p>
                <div class="testimoni-author">
                    <img
                        src="{{ asset('storage/testimoni/' . $item->image) }}"
                        alt="Orang Tua Santri" />
                    <div class="author-info">
                        <h4>{{$item->nama}}</h4>
                        <p>{{$item->hubungan}}</p>
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
            @endforeach

        </div>
    </section>
    <!-- seksti testimoni end -->
    <!-- SECTION 101 END -->


    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>


@endsection