<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/0241eb844d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="sidebar">
        <div class="profile-section">
            <div class="profile-image">
                <img src="https://via.placeholder.com/80x80/4a9eff/ffffff?text=GA" alt="Gary Axen">
            </div>
            <h2 class="profile-name">Gary Axen</h2>
            
            <div class="social-links">
                <a href="#" class="social-link" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-link" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-link" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-link" title="Email">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="#" class="social-link" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i>
                    About
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-briefcase"></i>
                    Portfolio
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-cog"></i>
                    Services
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    Contact
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-sign-in-alt"></i>
                    Log In
                </a>
            </li>
        </ul>

        <div class="footer">
            <p>© Copyright <strong>iPortfolio</strong><br>
            Designed by <a href="#">BootstrapMade</a><br>
            Back-End by <a href="#">Gary Axen</a></p>
        </div>
    </nav>

    <main class="main-content">
        <div class="hero-section">
            <h1 class="hero-title">Gary Axen</h1>
            <p class="hero-subtitle">I'm a Developer</p>
        </div>
    </main>

    <script>
        // Active link management
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                
                // Add active class to clicked link
                this.classList.add('active');
            });
        });

        // Smooth scrolling effect for social links
        document.querySelectorAll('.social-link').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.1)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
</body>
</html>
</body>
</html>