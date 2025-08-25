
<nav class="sidebar">
        <div class="profile-section-back">
            <div class="profile-image-back">
                <img src="{{ asset($about->avatar->image)}}" alt="Gary Axen">
            </div>
            <h2 class="profile-name-back">Gary Axen</h2>
            <h3 class="h3ADMIN">ADMIN</h3>
            
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
                <a href="{{ route('about.edit', $about->id) }}" class="nav-link">
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
                <a href="{{ route('skills.index') }}" class="nav-link">
                    <i class="fas fa-briefcase"></i>
                    Skills
                </a>
            </li>
            <li class="nav-item-back">
                <a href="{{ route('services.index') }}" class="nav-link">
                    <i class="fas fa-cog"></i>
                    Services
                </a>
            </li>
            <li class="nav-item-back">
                <a href="{{ route('testimonials.index') }}" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    Testemonials
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contacts.edit', $about->id) }}" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    Contact
                </a>
            </li>
            <li class="nav-item-back">
                <a href="{{ route('messages.index') }}" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    Mail Box
                </a>
            </li>
        </ul>

        <div class="footer-back">
            <p>© Copyright <strong>iPortfolio</strong><br>
        </div>
    </nav>

    