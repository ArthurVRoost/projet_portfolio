<nav class="sidebar">
        <div class="profile-section-back">
            <div class="profile-image-back">
                <img src="{{ $about->avatar->image }}" alt="Gary Axen">
            </div>
            <h2 class="profile-name-back">Gary Axen</h2>
            
            <div class="social-links-back">
                <a href="#" class="social-link-back" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-link-back" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-link-back" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-link-back" title="Email">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="#" class="social-link-back" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <ul class="nav-menu">
            <li class="nav-item-back">
                <a href="{{ route('logout') }}" class="nav-link">
                    <i class="fas fa-sign-in-alt"></i>
                    Log Out
                </a>
            </li>
            <li class="nav-item-back">
                <a href="#home" class="nav-link ">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>
            <li class="nav-item-back">
                <a href="#about" class="nav-link">
                    <i class="fas fa-user"></i>
                    About
                </a>
            </li>
            <li class="nav-item-back">
                <a href="{{ route('portfolios.index') }}" class="nav-link">
                    <i class="fas fa-briefcase"></i>
                    Portfolio
                </a>
            </li>
            <li class="nav-item-back">
                <a href="#skill" class="nav-link">
                    <i class="fas fa-briefcase"></i>
                    Skills
                </a>
            </li>
            <li class="nav-item-back">
                <a href="#services" class="nav-link">
                    <i class="fas fa-cog"></i>
                    Services
                </a>
            </li>
            <li class="nav-item-back">
                <a href="#testemonials" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    Testemonials
                </a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    Contact
                </a>
            </li>
            <li class="nav-item-back">
                <a href="#messages" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    Mail Box
                </a>
            </li>
        </ul>

        <div class="footer-back">
            <p>© Copyright <strong>iPortfolio</strong><br>
        </div>
    </nav>

    