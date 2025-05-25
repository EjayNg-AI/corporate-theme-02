    <header class="header">
      <div class="logo">
        <img
          src="https://via.placeholder.com/160x50.png?text=Logo"
          alt="Corporate Logo"
        />
      </div>

      <div class="header-right-controls">
        <!-- Desktop Nav -->
        <nav class="nav" aria-label="Main navigation">
          <ul>
            <li class="nav-item">
              <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <button
                class="nav-link"
                aria-haspopup="true"
                aria-expanded="false"
                type="button"
              >
                Services
                <span class="arrow">&#9662;</span>
              </button>
              <div class="dropdown" role="menu">
                <a href="#">Consulting</a>
                <a href="#">Implementation</a>
                <a href="#">Support</a>
              </div>
            </li>
            <li class="nav-item">
              <button
                class="nav-link"
                aria-haspopup="true"
                aria-expanded="false"
                type="button"
              >
                Solutions
                <span class="arrow">&#9662;</span>
              </button>
              <div class="dropdown" role="menu">
                <a href="#">Cloud</a>
                <a href="#">On-Premise</a>
                <a href="#">Hybrid</a>
              </div>
            </li>
            <li class="nav-item">
              <button
                class="nav-link"
                aria-haspopup="true"
                aria-expanded="false"
                type="button"
              >
                Resources
                <span class="arrow">&#9662;</span>
              </button>
              <div class="dropdown" role="menu">
                <a href="#">Blog</a>
                <a href="#">Case Studies</a>
                <a href="#">Webinars</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Contact</a>
            </li>
          </ul>
        </nav>
        <!-- Hamburger for Mobile -->
        <button
          class="hamburger"
          aria-label="Open menu"
          aria-controls="mobile-menu"
          aria-expanded="false"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
        <!-- Light/Dark Toggle -->
        <button
          class="theme-toggle"
          aria-label="Toggle light/dark mode"
          title="Toggle light/dark mode"
        >
          &#9790;
          <!-- Moon icon (initial for light mode) -->
        </button>
      </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div class="overlay"></div>
    <nav class="mobile-menu" id="mobile-menu" aria-label="Mobile navigation">
      <ul>
        <li class="nav-item">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <button
            class="nav-link"
            aria-haspopup="true"
            aria-expanded="false"
            type="button"
          >
            Services
            <span class="arrow">&#9662;</span>
          </button>
          <div class="dropdown" role="menu">
            <a href="#">Consulting</a>
            <a href="#">Implementation</a>
            <a href="#">Support</a>
          </div>
        </li>
        <li class="nav-item">
          <button
            class="nav-link"
            aria-haspopup="true"
            aria-expanded="false"
            type="button"
          >
            Solutions
            <span class="arrow">&#9662;</span>
          </button>
          <div class="dropdown" role="menu">
            <a href="#">Cloud</a>
            <a href="#">On-Premise</a>
            <a href="#">Hybrid</a>
          </div>
        </li>
        <li class="nav-item">
          <button
            class="nav-link"
            aria-haspopup="true"
            aria-expanded="false"
            type="button"
          >
            Resources
            <span class="arrow">&#9662;</span>
          </button>
          <div class="dropdown" role="menu">
            <a href="#">Blog</a>
            <a href="#">Case Studies</a>
            <a href="#">Webinars</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
    </nav>

