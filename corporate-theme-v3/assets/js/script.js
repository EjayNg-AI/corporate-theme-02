document.addEventListener('DOMContentLoaded', function() {
    // Hamburger menu toggle
    const hamburger = document.querySelector(".hamburger");
    const mobileMenu = document.querySelector(".mobile-menu");
    const overlay = document.querySelector(".overlay");
    const body = document.body;

    function closeMobileMenu() {
        if (mobileMenu) {
            mobileMenu.classList.remove("active");
        }
        if (overlay) {
            overlay.classList.remove("active");
        }
        if (hamburger) {
            hamburger.setAttribute("aria-expanded", "false");
        }
        body.style.overflow = "";
    }

    if (hamburger) {
        hamburger.addEventListener("click", function () {
            const isOpen = mobileMenu.classList.toggle("active");
            overlay.classList.toggle("active", isOpen);
            hamburger.setAttribute("aria-expanded", isOpen ? "true" : "false");
            body.style.overflow = isOpen ? "hidden" : "";
        });
    }

    if (overlay) {
        overlay.addEventListener("click", closeMobileMenu);
    }

    // Mobile submenu toggle (only on mobile)
    function isMobile() {
        return window.innerWidth < 700;
    }
    
    const mobileNavButtons = document.querySelectorAll(".mobile-menu .nav-item > button.nav-link");
    mobileNavButtons.forEach((btn) => {
        btn.addEventListener("click", function (e) {
            if (!isMobile()) return; // Only allow on mobile
            e.preventDefault();
            const parent = btn.parentElement;
            const isOpen = parent.classList.toggle("open");
            btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
            // Close other open submenus
            document
                .querySelectorAll(".mobile-menu .nav-item")
                .forEach((item) => {
                    if (item !== parent) {
                        item.classList.remove("open");
                        const otherBtn = item.querySelector("button.nav-link");
                        if (otherBtn) {
                            otherBtn.setAttribute("aria-expanded", "false");
                        }
                    }
                });
        });
    });

    // Prevent click effect on desktop nav menu items with submenus
    const desktopNavButtons = document.querySelectorAll('.nav .nav-link[aria-haspopup="true"]');
    desktopNavButtons.forEach((btn) => {
        btn.addEventListener("click", function (e) {
            // Only prevent on desktop
            if (window.innerWidth >= 700) {
                e.preventDefault();
                // Optionally, blur the button to remove focus highlight after click
                btn.blur();
            }
        });
    });

    // Close mobile menu on resize to desktop
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 700) {
            closeMobileMenu();
            document
                .querySelectorAll(".mobile-menu .nav-item.open")
                .forEach((item) => {
                    item.classList.remove("open");
                    const btn = item.querySelector("button.nav-link");
                    if (btn) {
                        btn.setAttribute("aria-expanded", "false");
                    }
                });
        }
    });

    // Light/Dark mode toggle
    const themeToggle = document.querySelector(".theme-toggle");
    
    function setTheme(dark) {
        if (dark) {
            // Dark mode is active
            body.classList.add("dark-mode");
            if (themeToggle) {
                themeToggle.innerHTML = "&#9788;"; // Show Sun icon (click to go to light)
            }
        } else {
            // Light mode is active
            body.classList.remove("dark-mode");
            if (themeToggle) {
                themeToggle.innerHTML = "&#9790;"; // Show Moon icon (click to go to dark)
            }
        }
        // Set cookie instead of localStorage for PHP compatibility
        document.cookie = "theme=" + (dark ? "dark" : "light") + ";path=/;max-age=" + (365 * 24 * 60 * 60);
    }

    // Initialize theme
    (function () {
        // Get theme from cookie
        const cookies = document.cookie.split(';');
        let savedTheme = null;
        
        cookies.forEach(cookie => {
            const [name, value] = cookie.trim().split('=');
            if (name === 'theme') {
                savedTheme = value;
            }
        });
        
        const prefersDark =
            window.matchMedia &&
            window.matchMedia("(prefers-color-scheme: dark)").matches;

        if (savedTheme === "dark") {
            setTheme(true);
        } else if (savedTheme === "light") {
            setTheme(false);
        } else {
            // No saved theme, rely on system preference or default to light
            if (prefersDark) {
                setTheme(true);
            } else {
                setTheme(false); // Default to light
            }
        }
    })();

    if (themeToggle) {
        themeToggle.addEventListener("click", function () {
            setTheme(!body.classList.contains("dark-mode"));
        });
    }

    // Accessibility: close mobile menu with ESC
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && mobileMenu && mobileMenu.classList.contains("active")) {
            closeMobileMenu();
        }
    });

    // WhatsApp button functionality
    const whatsappButton = document.getElementById("whatsappBtn");
    
    if (whatsappButton) {
        whatsappButton.addEventListener("click", function (event) {
            // Prevent default link behavior if needed
            event.preventDefault();
            
            // Open WhatsApp Web in a new tab
            window.open("https://web.whatsapp.com/", "_blank");
        });
    }

    // Handle WordPress navigation block for desktop dropdowns
    const wpNavItems = document.querySelectorAll('.wp-block-navigation-item__content');
    wpNavItems.forEach(item => {
        const parent = item.closest('.wp-block-navigation-item');
        if (parent && parent.querySelector('.wp-block-navigation__submenu-container')) {
            // Add arrow to items with submenus
            if (!item.querySelector('.arrow')) {
                const arrow = document.createElement('span');
                arrow.className = 'arrow';
                arrow.innerHTML = '&#9662;';
                item.appendChild(arrow);
            }
        }
    });

    // WordPress admin bar adjustment
    const adminBar = document.querySelector('#wpadminbar');
    if (adminBar) {
        const header = document.querySelector('.header');
        if (header) {
            const adminBarHeight = adminBar.offsetHeight;
            header.style.top = adminBarHeight + 'px';
        }
    }
});