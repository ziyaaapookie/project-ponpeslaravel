@extends('layouts.layouts')



@section('content')


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

@endsection