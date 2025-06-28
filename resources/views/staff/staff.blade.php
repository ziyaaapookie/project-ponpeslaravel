@extends('layouts.layouts')



@section('content')


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

@endsection