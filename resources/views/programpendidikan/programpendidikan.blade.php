@extends('layouts.layouts')



@section('content')


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

@endsection