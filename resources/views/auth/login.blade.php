{{ $undefinedVariable }}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Dashboard Admin</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        /* Animated Background */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            z-index: -2;
        }

        /* Floating shapes animation */
        body::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(120, 119, 198, 0.2) 0%, transparent 50%);
            animation: float 20s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-30px) rotate(120deg);
            }

            66% {
                transform: translateY(15px) rotate(240deg);
            }
        }

        /* Particle effect */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: particleFloat 6s ease-in-out infinite;
        }

        .particle:nth-child(1) {
            width: 6px;
            height: 6px;
            top: 20%;
            left: 20%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 8px;
            height: 8px;
            top: 80%;
            left: 80%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            width: 4px;
            height: 4px;
            top: 40%;
            left: 70%;
            animation-delay: 4s;
        }

        .particle:nth-child(4) {
            width: 10px;
            height: 10px;
            top: 70%;
            left: 30%;
            animation-delay: 1s;
        }

        .particle:nth-child(5) {
            width: 5px;
            height: 5px;
            top: 10%;
            left: 60%;
            animation-delay: 3s;
        }

        @keyframes particleFloat {

            0%,
            100% {
                transform: translateY(0px) translateX(0px);
                opacity: 0.7;
            }

            50% {
                transform: translateY(-100px) translateX(50px);
                opacity: 1;
            }
        }

        .container3 {
            width: 100%;
            max-width: 420px;
            padding: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow:
                0 25px 45px rgba(0, 0, 0, 0.1),
                0 0 0 1px rgba(255, 255, 255, 0.2);
            position: relative;
            animation: slideUp 0.8s ease-out;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.9);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .login-form {
            padding: 40px 35px;
            text-align: center;
            position: relative;
        }

        .login-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            border-radius: 2px;
            transform: translateX(-50%);
        }

        .login-form h2 {
            margin-bottom: 30px;
            color: #2c3e50;
            font-weight: 700;
            font-size: 24px;
            position: relative;
            margin-top: 20px;
        }

        .login-form h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            width: 50px;
            height: 2px;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            transform: translateX(-50%);
            border-radius: 1px;
        }

        .form-group {
            margin-bottom: 25px;
            text-align: left;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .form-group input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e8ed;
            border-radius: 12px;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
            position: relative;
        }

        .form-group input:focus {
            outline: none;
            border-color: #74ebd5;
            box-shadow: 0 0 0 3px rgba(116, 235, 213, 0.1);
            transform: translateY(-2px);
            background: white;
        }

        .form-group input:focus+label,
        .form-group:focus-within label {
            color: #74ebd5;
        }

        /* Input Icons */
        .form-group {
            position: relative;
        }



        .btn-login {
            width: 100%;
            padding: 15px 20px;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            color: white;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-top: 10px;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #acb6e5, #74ebd5);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(116, 235, 213, 0.3);
        }

        .btn-login:hover::before {
            left: 0;
        }

        .btn-login:active {
            transform: translateY(0);
        }

        /* Loading animation */
        .btn-login.loading {
            pointer-events: none;
        }



        @keyframes spin {
            0% {
                transform: translateY(-50%) rotate(0deg);
            }

            100% {
                transform: translateY(-50%) rotate(360deg);
            }
        }

        /* Forgot password link */
        .forgot-password {
            margin-top: 20px;
            text-align: center;
        }

        .forgot-password a {
            color: #74ebd5;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #acb6e5;
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container3 {
                max-width: 90%;
                margin: 20px;
            }

            .login-form {
                padding: 30px 25px;
            }

            .login-form h2 {
                font-size: 20px;
            }
        }

        /* Error message styling */
        .error-message {
            background: rgba(231, 76, 60, 0.1);
            color: #e74c3c;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            border-left: 4px solid #e74c3c;
        }

        /* Success message */
        .success-message {
            background: rgba(46, 204, 113, 0.1);
            color: #2ecc71;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            border-left: 4px solid #2ecc71;
        }
    </style>
</head>

<body>
    <!-- Particle Effect -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container3">
        <div class="login-form">
            <h2>Login Dashboard Pondok Pesantren</h2>

            <!-- Add this if you have error messages from Laravel -->
            <!-- @if ($errors->any())
                <div class="error-message">
                    {{ $errors->first() }}
                </div>
            @endif -->

            <form action="/login" method="POST" id="loginForm">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-login" id="loginBtn">
                        Login
                    </button>
                </div>
            </form>


        </div>
    </div>

    <script>
        // Enhanced form interaction
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const btn = document.getElementById('loginBtn');
            btn.classList.add('loading');
            btn.innerHTML = 'Memproses...';

            // Remove loading state after 3 seconds (for demo)
            // In real implementation, this should be handled by the server response
            setTimeout(() => {
                btn.classList.remove('loading');
                btn.innerHTML = 'Login';
            }, 3000);
        });

        // Input focus animation
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });

        // Keyboard navigation enhancement
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && e.target.tagName !== 'BUTTON') {
                const form = document.getElementById('loginForm');
                const inputs = form.querySelectorAll('input');
                const currentIndex = Array.from(inputs).indexOf(e.target);

                if (currentIndex < inputs.length - 1) {
                    inputs[currentIndex + 1].focus();
                } else {
                    document.getElementById('loginBtn').click();
                }
            }
        });
    </script>
</body>

</html>
