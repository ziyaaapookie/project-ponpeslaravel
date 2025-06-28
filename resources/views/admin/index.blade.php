<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        /* Header */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 20px 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #007bff, #0056b3);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .header h1 {
            font-size: 28px;
            font-weight: 700;
            background: linear-gradient(45deg, #007bff, #0056b3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #28a745, #20c997);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .welcome-section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 40px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .welcome-section h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .welcome-section p {
            color: #666;
            font-size: 16px;
        }

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #007bff, #0056b3);
        }

        .card-image {
            height: 200px;
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .card-image::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg,
                    rgba(0, 123, 255, 0.1),
                    rgba(0, 86, 179, 0.1));
        }

        .card-icon {
            font-size: 80px;
            color: #007bff;
            z-index: 1;
            position: relative;
        }

        .card-content {
            padding: 25px;
        }

        .card-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card-description {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .card-button {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
        }

        .card-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
            color: white;
        }

        /* Stats Section */
        .stats-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: scale(1.05);
        }

        .stat-number {
            font-size: 32px;
            font-weight: 700;
            color: #007bff;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #666;
            font-size: 14px;
        }

        /* Footer */
        .footer {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.1);
        }

        .logout-section {
            margin-bottom: 20px;
        }

        .logout-btn {
            background: linear-gradient(45deg, #dc3545, #c82333);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(220, 53, 69, 0.3);
        }

        .logout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(220, 53, 69, 0.4);
        }

        .register-btn {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
        }

        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
            color: white;
        }

        .copyright {
            color: #666;
            font-size: 14px;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeInUp 0.6s ease forwards;
        }

        .animate-delay-1 {
            animation-delay: 0.1s;
        }

        .animate-delay-2 {
            animation-delay: 0.2s;
        }

        .animate-delay-3 {
            animation-delay: 0.3s;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }

            .header h1 {
                font-size: 24px;
                text-align: center;
            }

            .cards-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .main-content {
                padding: 0 15px;
            }

            .welcome-section {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .card-content {
                padding: 20px;
            }

            .card-title {
                font-size: 20px;
            }
        }
    </style>

    <!-- Font Awesome CDN -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <title>Dashboard Admin</title>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="header-content">
            <div class="logo-section">
                <div class="logo">IL</div>
                <h1>Dashboard Ponpes</h1>
            </div>
            <div style="text-align: center; padding-bottom: 20px;">
                @auth
                <form action="/logout" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" style="background-color:rgb(207, 8, 8); color: #fff; border: none; padding: 20px 40px; border-radius: 100px; cursor: pointer;font-size:1rem;font-weight: bold;">Logout</button>
                </form>
                @else
                <a href="/register" style="background-color: #dc3545; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; text-decoration: none;">Register</a>
                @endauth
            </div>
        </div>


    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Welcome Section -->
        <div class="welcome-section animate-fade-in">
            <h2>Selamat Datang di Dashboard Admin</h2>
            <p>Kelola semua aspek website dengan mudah dan efisien</p>
        </div>

        <!-- Cards Grid -->
        <div class="cards-grid">
            <div class="card animate-fade-in animate-delay-1">
                <div class="card-image">
                    <i class="fas fa-book card-icon"></i>
                </div>
                <div class="card-content">
                    <h5 class="card-title">
                        <i class="fas fa-book"></i>
                        Artikel
                    </h5>
                    <p class="card-description">
                        Perbarui informasi tentang artikel berita atau blog terbaru dari pondok.
                    </p>
                    <a href="{{route('artikel')}}" class="card-button">
                        <i class="fas fa-edit"></i>
                        Klik Disini
                    </a>
                </div>
            </div>

            <div class="card animate-fade-in animate-delay-2">
                <div class="card-image">
                    <i class="fas fa-images card-icon"></i>
                </div>
                <div class="card-content">
                    <h5 class="card-title">
                        <i class="fas fa-images"></i>
                        Galeri
                    </h5>
                    <p class="card-description">
                        Unggah dan kelola foto serta video kegiatan pondok pesantren dalam galeri kita.
                    </p>
                    <a href="{{route('galeri')}}" class="card-button">
                        <i class="fas fa-edit"></i>
                        Klik Disini
                    </a>
                </div>
            </div>


            <div class="card animate-fade-in animate-delay-2">
                <div class="card-image">
                    <i class="fas fa-users card-icon"></i>
                </div>
                <div class="card-content">
                    <h5 class="card-title">
                        <i class="fas fa-users"></i>
                        Staff
                    </h5>
                    <p class="card-description">
                        Perbarui informasi profil para ustadz, ustadzah, dan seluruh staf pengajar serta pengurus pondok
                    </p>
                    <a href="{{route('staff')}}" class="card-button">
                        <i class="fas fa-edit"></i>
                        Klik Disini
                    </a>
                </div>
            </div>


            <div class="card animate-fade-in animate-delay-2">
                <div class="card-image">
                    <i class="fas fa-graduation-cap card-icon"></i>
                </div>
                <div class="card-content">
                    <h5 class="card-title">
                        <i class="fas fa-graduation-cap"></i>
                        Program Pendidikan
                    </h5>
                    <p class="card-description">
                        Perbarui detail program pendidikan unggulan pondok pesantren. Pastikan informasi ini transparan dan mudah dipahami.
                    </p>
                    <a href="{{route('programpendidikan')}}" class="card-button">
                        <i class="fas fa-edit"></i>
                        Klik Disini
                    </a>
                </div>
            </div>


            <div class="card animate-fade-in animate-delay-2">
                <div class="card-image">
                    <i class="fas fa-calendar-alt card-icon"></i>
                </div>
                <div class="card-content">
                    <h5 class="card-title">
                        <i class="fas fa-calendar-alt"></i>
                        Agenda
                    </h5>
                    <p class="card-description">
                        Update seluruh agenda penting pondok pesantren, seperti jadwal pengajian, liburan, ujian, hingga acara peringatan hari besar Islam.
                    </p>
                    <a href="{{route('agenda')}}" class="card-button">
                        <i class="fas fa-edit"></i>
                        Klik Disini
                    </a>
                </div>
            </div>









            <div class="card animate-fade-in animate-delay-2">
                <div class="card-image">
                    <i class="fas fa-comments card-icon"></i>
                </div>
                <div class="card-content">
                    <h5 class="card-title">
                        <i class="fas fa-comments"></i>
                        Testimoni
                    </h5>
                    <p class="card-description">
                        Kumpulkan dan tampilkan testimoni positif dari santri, alumni, atau wali santri yang telah merasakan manfaat pendidikan di pondok kita.
                    </p>
                    <a href="{{route('testimoni')}}" class="card-button">
                        <i class="fas fa-edit"></i>
                        Klik Disini
                    </a>
                </div>
            </div>
        </div>
    </div>



    <script>
        // Add smooth scrolling and interactive effects
        document.addEventListener("DOMContentLoaded", function() {
            // Add loading animation to cards
            const cards = document.querySelectorAll(".card");
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = "1";
                    card.style.transform = "translateY(0)";
                }, index * 100);
            });

            // Add click effects to buttons
            const buttons = document.querySelectorAll(
                ".card-button, .logout-btn, .register-btn"
            );
            buttons.forEach((button) => {
                button.addEventListener("click", function(e) {
                    // Create ripple effect
                    const ripple = document.createElement("span");
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.width = ripple.style.height = size + "px";
                    ripple.style.left = x + "px";
                    ripple.style.top = y + "px";
                    ripple.classList.add("ripple");

                    this.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Add floating animation to cards
            setInterval(() => {
                cards.forEach((card, index) => {
                    const delay = index * 200;
                    setTimeout(() => {
                        card.style.transform = "translateY(-5px)";
                        setTimeout(() => {
                            card.style.transform = "translateY(0)";
                        }, 1000);
                    }, delay);
                });
            }, 5000);
        });

        // Add ripple effect styles
        const style = document.createElement("style");
        style.textContent = `
            .ripple {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.3);
                transform: scale(0);
                animation: ripple-animation 0.6s linear;
                pointer-events: none;
            }


        `;
        document.head.appendChild(style);
    </script>
</body>

</html>