@extends('layouts.layouts')



@section('content')


<section id="artikel" style="background-color: #f5f5f5" data-aos="zoom-in" data-aos-delay="600">
    <div class="section-title">
        <h2>Artikel & Blog Dakwah</h2>
        <p>Kumpulan tulisan dan kajian islami dari para ustadz/ustadzah</p>
    </div>

    <div class="artikel-container">
        @foreach ($artikels as $item)
        <div class="artikel-card">
            <div class="artikel-image">
                <img src="{ asset('storage/artikel/' . $item->image) }}" alt="Keutamaan Menghafal Al-Qur'an" />
            </div>
            <div class="artikel-content">
                <span class="artikel-category">{{$item->kategoriartikel}}</span>
                <h3> {{$item->judulartikel}}</h3>
                <p>
                    {{$item->deskripsi}}
                </p>
                <div class="artikel-meta">
                    <span><i class="far fa-user"></i> {{$item->pembuat}}</span>

                </div>
            </div>
        </div>
        @endforeach


    </div>


</section>


@endsection