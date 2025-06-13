<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Klinik Gigi - SENYUM SEHAT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #ffffff;
            position: relative;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow-x: hidden;
        }

        /* Animated background elements */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .bg-animation .shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.4;
        }

        .shape-1 {
            background: linear-gradient(120deg, #34d399, #10b981);
            width: 500px;
            height: 500px;
            top: -100px;
            right: -100px;
            animation: float-1 15s ease-in-out infinite alternate;
        }

        .shape-2 {
            background: linear-gradient(-120deg, #6ee7b7, #059669);
            width: 400px;
            height: 400px;
            bottom: -100px;
            left: -100px;
            animation: float-2 20s ease-in-out infinite alternate;
        }

        .shape-3 {
            background: linear-gradient(45deg, #a7f3d0, #34d399);
            width: 300px;
            height: 300px;
            top: 40%;
            left: 10%;
            animation: float-3 18s ease-in-out infinite alternate;
        }

        .shape-4 {
            background: linear-gradient(-45deg, #d1fae5, #6ee7b7);
            width: 250px;
            height: 250px;
            top: 30%;
            right: 15%;
            animation: float-4 22s ease-in-out infinite alternate;
        }

        @keyframes float-1 {
            0% {
                transform: translate(0, 0) scale(1);
            }
            100% {
                transform: translate(-50px, 50px) scale(1.2);
            }
        }

        @keyframes float-2 {
            0% {
                transform: translate(0, 0) scale(1);
            }
            100% {
                transform: translate(50px, -70px) scale(1.3);
            }
        }

        @keyframes float-3 {
            0% {
                transform: translate(0, 0) scale(1);
            }
            100% {
                transform: translate(60px, 30px) scale(1.2);
            }
        }

        @keyframes float-4 {
            0% {
                transform: translate(0, 0) scale(1);
            }
            100% {
                transform: translate(-80px, -40px) scale(1.1);
            }
        }

        .navbar {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
            width: 100%;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            top: 0;
            z-index: 10;
            border-bottom: 1px solid rgba(16, 185, 129, 0.1);
            animation: fadeInDown 1s ease;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .navbar h1 {
            color: #065f46;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
            font-size: 2rem;
            letter-spacing: 1px;
        }

        .navbar h1 span {
            color: #059669;
            position: relative;
            display: inline-block;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
            padding: 40px;
            max-width: 450px;
            width: 100%;
            border: 2px solid rgba(209, 250, 229, 0.7);
            transform: translateY(0);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
            animation: fadeIn 1s ease;
            overflow: hidden;
            position: relative;
        }

        .card::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to right,
                rgba(16, 185, 129, 0.05),
                rgba(16, 185, 129, 0.02),
                rgba(16, 185, 129, 0.05)
            );
            transform: rotate(45deg);
            animation: shine 4s infinite;
            pointer-events: none;
        }

        @keyframes shine {
            0% {
                left: -100%;
                opacity: 0;
            }
            20% {
                left: 100%;
                opacity: 0.5;
            }
            100% {
                left: 100%;
                opacity: 0;
            }
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(5, 150, 105, 0.15);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card h2 {
            color: #065f46;
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5rem;
            position: relative;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
            font-weight: 700;
            letter-spacing: 1px;
        }

        .card h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(to right, #10b981, #6ee7b7);
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .input-group {
            position: relative;
            margin-bottom: 30px;
            background: rgba(209, 250, 229, 0.3);
            border-radius: 8px;
            padding: 5px 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
        }

        .input-group label {
            position: absolute;
            top: 5px;
            left: 15px;
            padding: 8px 0;
            font-size: 18px;
            color: #047857;
            pointer-events: none;
            transition: 0.3s ease all;
            text-transform: uppercase;
            font-weight: 700;
            opacity: 1;
            letter-spacing: 1px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
        }

        .input-group input {
            width: 100%;
            padding: 15px 0 10px;
            font-size: 18px;
            color: #065f46;
            border: none;
            border-bottom: 2px solid rgba(16, 185, 129, 0.3);
            outline: none;
            background: transparent;
            transition: 0.3s ease all;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .input-group input:focus {
            border-bottom: 3px solid #10b981;
        }

        .input-group input:focus ~ label,
        .input-group input:valid ~ label {
            top: -20px;
            font-size: 14px;
            color: #ffffff;
            font-weight: bold;
            background: rgba(16, 185, 129, 0.8);
            padding: 2px 10px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .input-group .icon {
            position: absolute;
            right: 15px;
            top: 15px;
            color: #059669;
            font-size: 24px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
        }

        .submit-btn {
            background: linear-gradient(to right, #059669, #10b981);
            color: white;
            padding: 18px 0;
            border-radius: 50px;
            text-align: center;
            border: none;
            width: 100%;
            font-size: 20px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
            position: relative;
            overflow: hidden;
            letter-spacing: 2px;
            margin-top: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .submit-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0),
                rgba(255, 255, 255, 0.4),
                rgba(255, 255, 255, 0)
            );
            transition: all 0.8s ease;
        }

        .submit-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(16, 185, 129, 0.4);
            background: linear-gradient(to right, #047857, #059669);
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .footer {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            width: 100%;
            padding: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            border-top: 1px solid rgba(16, 185, 129, 0.1);
            animation: fadeInUp 1s ease;
        }

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

        .footer-content {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
            width: 90%;
            max-width: 1200px;
        }

        .contact-info {
            display: flex;
            align-items: center;
            background: white;
            padding: 12px 20px;
            border-radius: 50px;
            margin: 0 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                transform: scale(1);
            }
            50% {
                box-shadow: 0 5px 25px rgba(16, 185, 129, 0.2);
                transform: scale(1.03);
            }
            100% {
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                transform: scale(1);
            }
        }
        
        .contact-info::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0),
                rgba(16, 185, 129, 0.1),
                rgba(255, 255, 255, 0)
            );
            transform: rotate(45deg);
            animation: shineContact 3s infinite;
            pointer-events: none;
        }
        
        @keyframes shineContact {
            0% {
                left: -100%;
                opacity: 0;
            }
            20% {
                left: 100%;
                opacity: 0.6;
            }
            100% {
                left: 100%;
                opacity: 0;
            }
        }

        .contact-info p {
            margin: 0;
            font-size: 16px;
            color: #065f46;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .contact-info i {
            margin-right: 10px;
            font-size: 20px;
            color: #10b981;
        }

        .social-icons {
            display: flex;
            margin-left: 20px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
            color: #10b981;
            background: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .social-icons a::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #10b981, #6ee7b7);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .social-icons a:hover {
            transform: translateY(-5px) rotate(360deg);
            color: white;
        }
        
        .social-icons a:hover::before {
            opacity: 1;
        }
        
        .social-icons a i {
            font-size: 22px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:nth-child(1) {
            animation: float 3s ease-in-out infinite;
        }
        
        .social-icons a:nth-child(2) {
            animation: float 3s ease-in-out infinite 0.3s;
        }
        
        .social-icons a:nth-child(3) {
            animation: float 3s ease-in-out infinite 0.6s;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
            100% {
                transform: translateY(0);
            }
        }

        /* Animasi tambahan untuk input */
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }

        .shake {
            animation: shake 0.5s ease;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .navbar h1 {
                font-size: 1.5rem;
            }
            .card {
                padding: 30px;
            }
            .footer-content {
                flex-direction: column;
            }
            .footer p {
                margin: 10px 0;
            }
            .social-icons {
                margin-left: 0;
                margin-top: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Background Animation Elements -->
    <div class="bg-animation">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
    </div>

    <!-- Navbar dengan efek blur -->
    <nav class="navbar">
        <h1><span>Klinik Gigi</span> - SENYUM SEHAT</h1>
    </nav>

    <!-- Container untuk memastikan konten login berada di tengah -->
    <div class="container">
        <!-- Card Login dengan efek hover dan animasi -->
        <div class="card">
            <h2>Silahkan Login</h2>
            <form action="{{ route('login') }}" method="POST" id="loginForm">
                @csrf
                <div class="input-group">
                    <input type="text" name="name" required>
                    <label>Username</label>
                    <i class="fas fa-user icon"></i>
                </div>

                <div class="input-group">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <i class="fas fa-lock icon"></i>
                </div>

                <button type="submit" class="submit-btn">MASUK</button>
            </form>
        </div>
    </div>

    <!-- Footer dengan informasi kontak dan ikon media sosial -->
    <div class="footer">
        <div class="footer-content">
            <div class="contact-info">
                <i class="fas fa-phone"></i>
                <p>+62 821-6000-8258</p>
            </div>
            <div class="contact-info">
                <i class="fas fa-envelope"></i>
                <p>spesialisgigi@gmail.com</p>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <script>
        // Animasi untuk form ketika submit
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            document.querySelector('.card').classList.add('shake');
            setTimeout(() => {
                document.querySelector('.card').classList.remove('shake');
            }, 500);
        });

        // Efek focus untuk input fields
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentNode.querySelector('.icon').style.color = '#10b981';
                this.parentNode.querySelector('.icon').style.transform = 'scale(1.2)';
                this.parentNode.style.boxShadow = '0 0 15px rgba(16, 185, 129, 0.3)';
            });
            input.addEventListener('blur', function() {
                this.parentNode.querySelector('.icon').style.color = '#059669';
                this.parentNode.querySelector('.icon').style.transform = 'scale(1)';
                this.parentNode.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.03)';
            });
        });
        
        // Animasi tambahan untuk contact info
        document.querySelectorAll('.contact-info').forEach((item, index) => {
            item.style.animationDelay = `${index * 0.2}s`;
        });
    </script>

</body>

</html>