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