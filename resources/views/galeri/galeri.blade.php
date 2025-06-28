@extends('layouts.layouts')



@section('content')

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



@endsection