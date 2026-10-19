<?php
/**
 * Template Part: Header Navigation with Mobile Hamburger Menu & Bootstrap Icons
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<style>
  .eye-header {
    position: sticky;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1050;
    background: #ffffff;
    box-shadow: 0 4px 20px rgba(15, 23, 42, 0.08);
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
  }

  /* Utility Topbar */
  .eye-header__topbar {
    background: #0369a1;
    color: #ffffff;
    padding: 7px 0;
    font-size: 0.85rem;
  }

  .eye-header__topbar-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 0.75rem;
  }

  .eye-header__contact-item {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    color: #f0f9ff;
    text-decoration: none;
    font-weight: 500;
  }

  .eye-header__contact-item:hover {
    color: #ffffff;
    text-decoration: underline;
  }

  /* Main Navigation Bar */
  .eye-header__main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0.9rem 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .eye-header__brand {
    display: flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
    color: #0f172a;
  }

  .eye-header__logo-icon {
    width: 44px;
    height: 44px;
    background: linear-gradient(135deg, #0284c7, #0369a1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(2, 132, 199, 0.3);
    font-size: 1.35rem;
  }

  .eye-header__brand-text {
    display: flex;
    flex-direction: column;
  }

  .eye-header__brand-title {
    font-size: 1.25rem;
    font-weight: 800;
    letter-spacing: -0.02em;
    color: #0f172a;
    line-height: 1.1;
  }

  .eye-header__brand-tag {
    font-size: 0.75rem;
    color: #0284c7;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }

  /* Desktop Nav Links */
  .eye-header__nav {
    display: flex;
    align-items: center;
    gap: 1.75rem;
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .eye-header__nav-link {
    text-decoration: none;
    color: #334155;
    font-weight: 600;
    font-size: 0.95rem;
    transition: color 0.2s ease;
    position: relative;
    padding: 6px 0;
  }

  .eye-header__nav-link:hover,
  .eye-header__nav-link.is-active {
    color: #0284c7;
  }

  .eye-header__btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #0284c7;
    color: #ffffff;
    padding: 0.65rem 1.4rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.25s ease;
    box-shadow: 0 4px 12px rgba(2, 132, 199, 0.25);
  }

  .eye-header__btn:hover {
    background: #0369a1;
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(2, 132, 199, 0.35);
  }

  /* Hamburger Toggle Button (Mobile) */
  .eye-hamburger-btn {
    display: none;
    background: transparent;
    border: none;
    color: #0f172a;
    font-size: 1.75rem;
    cursor: pointer;
    padding: 0.25rem 0.5rem;
    line-height: 1;
  }

  /* Mobile Slide-Down Drawer */
  .eye-mobile-drawer {
    display: none;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
    padding: 1.5rem;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
  }

  .eye-mobile-drawer.is-open {
    display: block;
  }

  .eye-mobile-drawer__list {
    list-style: none;
    padding: 0;
    margin: 0 0 1.5rem 0;
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }

  .eye-mobile-drawer__link {
    color: #1e293b;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.05rem;
    display: block;
    padding: 0.25rem 0;
  }

  .eye-mobile-drawer__link:hover {
    color: #0284c7;
  }

  .eye-mobile-drawer__btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    background: #0284c7;
    color: #ffffff;
    padding: 0.85rem;
    border-radius: 50px;
    font-weight: 700;
    text-decoration: none;
  }

  @media (max-width: 991px) {
    .eye-header__nav,
    .eye-header__btn {
      display: none;
    }
    .eye-hamburger-btn {
      display: block;
    }
  }
</style>

<header class="eye-header">
  
  <!-- Utility Topbar with Bootstrap Icons -->
  <div class="eye-header__topbar">
    <div class="eye-header__topbar-inner">
      <div>
        <i class="bi bi-geo-alt-fill"></i> 123 Health Ave, Suite 400, New Jersey &bull; Mon - Fri: 8:00 AM - 5:00 PM
      </div>
      <div style="display: flex; gap: 1.25rem;">
        <a href="tel:18005553937" class="eye-header__contact-item">
          <i class="bi bi-telephone-fill"></i> <span>(800) 555-EYES</span>
        </a>
        <a href="#portal" class="eye-header__contact-item">
          <i class="bi bi-lock-fill"></i> <span>Patient Portal</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Navigation Bar -->
  <div class="eye-header__main">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="eye-header__brand">
      <div class="eye-header__logo-icon">
        <i class="bi bi-eye-fill"></i>
      </div>
      <div class="eye-header__brand-text">
        <span class="eye-header__brand-title"><?php bloginfo( 'name' ); ?></span>
        <span class="eye-header__brand-tag">Ophthalmology & Surgery</span>
      </div>
    </a>

    <!-- Desktop Navigation (Reviews removed, linked to home/sections) -->
    <nav>
      <ul class="eye-header__nav">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="eye-header__nav-link">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="eye-header__nav-link">Services</a></li>
        <li><a href="<?php echo esc_url( home_url( '/our-surgeons/' ) ); ?>" class="eye-header__nav-link">Our Surgeons</a></li>
        <li><a href="<?php echo esc_url( home_url( '/locations/' ) ); ?>" class="eye-header__nav-link">Locations</a></li>
        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="eye-header__nav-link">Eye Health Blog</a></li>
      </ul>
    </nav>

    <!-- Desktop CTA Button -->
    <a href="#book-appointment" class="eye-header__btn">
      <span>Book Consultation</span>
      <i class="bi bi-arrow-right"></i>
    </a>

    <!-- Mobile Hamburger Toggle Button -->
    <button class="eye-hamburger-btn" id="eyeHamburgerToggle" aria-label="Toggle Navigation Menu">
      <i class="bi bi-list"></i>
    </button>
  </div>

  <!-- Mobile Dropdown Drawer -->
  <div class="eye-mobile-drawer" id="eyeMobileDrawer">
    <ul class="eye-mobile-drawer__list">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="eye-mobile-drawer__link">Home / Services Hub</a></li>
      <li><a href="<?php echo esc_url( home_url( '/our-surgeons/' ) ); ?>" class="eye-mobile-drawer__link">Our Eye Surgeons</a></li>
      <li><a href="<?php echo esc_url( home_url( '/locations/' ) ); ?>" class="eye-mobile-drawer__link">Clinic Locations & Hours</a></li>
      <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="eye-mobile-drawer__link">Eye Health & Patient Articles</a></li>
      <li><a href="tel:18005553937" class="eye-mobile-drawer__link"><i class="bi bi-telephone"></i> Call (800) 555-EYES</a></li>
    </ul>
    <a href="#book-appointment" class="eye-mobile-drawer__btn">
      <span>Book Online Appointment</span>
      <i class="bi bi-calendar2-check-fill"></i>
    </a>
  </div>

</header>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('eyeHamburgerToggle');
    const drawer = document.getElementById('eyeMobileDrawer');
    
    if (toggleBtn && drawer) {
      toggleBtn.addEventListener('click', function() {
        drawer.classList.toggle('is-open');
        const icon = toggleBtn.querySelector('i');
        if (drawer.classList.contains('is-open')) {
          icon.className = 'bi bi-x-lg';
        } else {
          icon.className = 'bi bi-list';
        }
      });
    }
  });
</script>
