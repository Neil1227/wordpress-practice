# 🏛️ Agency Component Vault (WordPress Partials Library)

A modular library of pre-built, production-ready WordPress template parts (partials) for rapidly building client websites.

---

## 📁 Vault Directory Structure

```text
agency-component-vault/
├── 01-navbars/
│   ├── navbar-standard.php               # Clean brand logo + menu + CTA button
│   └── navbar-emergency-strip.php        # Top notice strip + navbar combo
├── 02-heroes/
│   ├── hero-medical-clinic.php           # High-converting clinic hero (dual CTAs)
│   ├── hero-tech-blog.php                # Developer / Blog hero with pill badge
│   └── hero-lead-capture.php             # Lead generation hero
├── 03-trust-badges/
│   ├── trust-badges-4col.php             # 4 Trust badges (Rating, Experience, etc.)
│   └── stats-counter-3col.php            # 3 Big numeric stat counters
├── 04-cards-and-grids/
│   ├── card-service.php                  # Service / treatment card with category badge
│   ├── card-blog-post.php                # Blog post card with thumbnail & meta
│   └── card-pricing-tier.php             # Pricing package card
├── 05-teams/
│   ├── team-doctors-grid.php             # Specialists / Doctors cards with booking links
│   └── team-agency-cards.php             # Creative agency team members
├── 06-cta-banners/
│   ├── cta-urgent-call.php               # Phone hotline banner with Customizer support
│   └── cta-appointment-booking.php       # Online booking / consultation banner
├── 07-testimonials/
│   └── testimonials-3col.php             # 5-star customer reviews grid
├── 08-footers/
│   └── footer-multi-col.php              # Multi-column business footer
├── 09-page-templates/
│   ├── page-doctors.php                  # Full specialists directory page
│   ├── single-doctor.php                 # Individual doctor / staff bio profile layout
│   ├── single-service.php                # Individual service / treatment detail layout with sticky booking
│   ├── page-contact.php                  # Interactive contact form & business details
│   └── 404.php                           # Modern recovery 404 error page (search + popular links)
└── styles/
    └── component-styles.css              # Modular CSS classes for all components
```

---

## 🚀 How to Use Any Component in 30 Seconds:

1. **Copy the PHP file** into your theme's `template-parts/` folder.
2. **Copy the corresponding CSS rules** from `styles/component-styles.css` into your theme's `style.css`.
3. **Call it in any template** (`front-page.php`, `index.php`, `page.php`, etc.):

```php
<?php
// Example: Loading a Hero partial with custom arguments
get_template_part( 'template-parts/hero-medical-clinic', null, array(
    'badge'         => '⭐ Voted #1 in 2026',
    'title'         => 'Advanced Eye Care & Lasik Surgery',
    'subtitle'      => 'Comprehensive vision exams and state-of-the-art eye care for the whole family.',
    'cta_primary'   => 'Book Eye Exam',
    'cta_secondary' => 'Explore Glasses',
) );
?>
```

---

## 🎨 CSS Variable Theming
All components use CSS variables. Change `--primary` in your `style.css`, and all vault components will automatically adopt the new client's brand color!
