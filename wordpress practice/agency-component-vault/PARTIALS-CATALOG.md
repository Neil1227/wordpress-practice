# 🏛️ WordPress Agency Component Vault — Cheat Sheet Catalog

> **Quick Copy & Paste Reference Guide** for theme developers. Easily copy full page layout recipes or individual modular template part calls directly into your WordPress theme files.

---

## 📋 Quick Navigation Index

| Cheat Sheet # | Page / Feature | Target Template File | Description |
| :--- | :--- | :--- | :--- |
| **01** | [Homepage Layout](#-cheat-sheet-1-homepage-front-pagephp) | `front-page.php` | Full agency & clinic homepage composition |
| **02** | [Services Directory](#-cheat-sheet-2-services-directory-page-servicesphp) | `page-services.php` | Full offerings, pricing tiers & metrics |
| **03** | [Single Service / Guide](#-cheat-sheet-3-single-service--treatment-detail-single-servicephp) | `single-service.php` | Clinical treatment guide layout |
| **04** | [Doctors Directory](#-cheat-sheet-4-doctors-directory-page-doctorsphp) | `page-doctors.php` | Medical team directory & badges |
| **05** | [Single Doctor Profile](#-cheat-sheet-5-individual-doctor-profile-single-doctorphp) | `single-doctor.php` | Practitioner bio & booking box |
| **06** | [Contact & Location](#-cheat-sheet-6-contact--location-page-page-contactphp) | `page-contact.php` | Location cards & inquiry form |
| **07** | [404 Error Recovery](#-cheat-sheet-7-404-error-recovery-page-404php) | `404.php` | High-converting 404 recovery page |
| **08** | [All 1-Liner Partials](#-cheat-sheet-8-all-1-liner-partial-calls-quick-reference) | Quick Reference | 14 Reusable partial snippets |

---

## 🚀 Cheat Sheet 1: Homepage (`front-page.php`)

> High-converting homepage recipe combining top notice bar, clinic hero, social proof badges, service cards, doctor grid, testimonials, hotline CTA, and multi-col footer.

```php
<?php
// front-page.php
get_header();

// 1. Navigation & Announcement Top Strip
get_template_part( 'template-parts/navbar-emergency-strip' );

// 2. Hero Section with Dual CTAs
get_template_part( 'template-parts/hero-medical-clinic', null, array(
    'badge'         => 'Board-Certified Specialists in 2026',
    'title'         => 'Exceptional Care & Proven Results for Your Health',
    'subtitle'      => 'Experience modern, patient-first care with verified clinical precision.',
    'cta_primary'   => 'Book Appointment Today',
    'cta_secondary' => 'Explore All Services',
    'primary_url'   => '#appointment',
    'secondary_url' => '#services',
) );

// 3. Social Proof Trust Badges (4 Columns)
get_template_part( 'template-parts/trust-badges-4col' );

// 4. Featured Services Grid (3 Columns)
get_template_part( 'template-parts/card-service' );

// 5. Specialist Doctors Team Directory
get_template_part( 'template-parts/team-doctors-grid' );

// 6. Patient 5-Star Reviews & Testimonials
get_template_part( 'template-parts/testimonials-3col' );

// 7. Urgent Hotline Call-To-Action Banner
get_template_part( 'template-parts/cta-urgent-call', null, array(
    'title'    => 'Need Immediate Assistance or Same-Day Slot?',
    'subtitle' => 'Our clinic hotline is open 24/7. Walk-ins are always welcome.',
    'phone'    => '(555) 019-2834',
) );

// 8. Business Footer
get_template_part( 'template-parts/footer-multi-col' );

get_footer();
?>
```

---

## 🏥 Cheat Sheet 2: Services Directory Page (`page-services.php`)

> Full clinical offerings overview featuring pricing packages, trust counter metrics, 5-star reviews, and direct consultation CTA.

```php
<?php
// page-services.php
get_header();

// 1. Hero Section
get_template_part( 'template-parts/hero-medical-clinic', null, array(
    'badge'         => 'Our Full Clinical Offerings',
    'title'         => 'Comprehensive Treatments & Procedures',
    'subtitle'      => 'Transparent pricing, 100% pain-free treatments, and direct insurance billing.',
    'cta_primary'   => 'Request a Consultation',
    'primary_url'   => '#appointment',
) );

// 2. Big Metrics Counter Strip (15+ Years, 8.5k Patients, 99.4% Rating)
get_template_part( 'template-parts/stats-counter-3col' );

// 3. 3-Tier Pricing Packages
get_template_part( 'template-parts/card-pricing-tier', null, array(
    'featured' => true,
    'badge'    => 'Most Popular',
    'tier'     => 'Complete Care Package',
    'price'    => '$299',
    'period'   => '/ session',
    'btn_text' => 'Choose This Plan',
) );

// 4. Testimonials
get_template_part( 'template-parts/testimonials-3col' );

// 5. Urgent Hotline Banner
get_template_part( 'template-parts/cta-urgent-call' );

get_footer();
?>
```

---

## 🩺 Cheat Sheet 3: Single Service / Treatment Detail (`single-service.php`)

> Comprehensive editorial treatment page template with hero, sub-hero floating schedule ribbon, zig-zag educational sections, semantic HTML5 accordions, care plan cards, and practice locations.

```php
<?php
// single-service.php
get_header();

// 1. Single Service Clinical Guide (Hero + Floating Bar + Zig-Zag Accordions + Locations)
// (Loads the complete layout from 09-page-templates/single-service.php)

// 2. 5-Star Testimonials Grid
get_template_part( 'template-parts/testimonials-3col', null, array(
    'title' => 'Patient Results & Verified Experiences',
) );

// 3. Urgent Hotline CTA
get_template_part( 'template-parts/cta-urgent-call', null, array(
    'title' => 'Ready to Schedule This Treatment?',
    'phone' => '(973) 790-1300',
) );

get_footer();
?>
```

---

## 👨‍⚕️ Cheat Sheet 4: Doctors Directory (`page-doctors.php`)

> Complete medical and dental practitioner directory with trust proof, practitioner cards, ratings, and booking action triggers.

```php
<?php
// page-doctors.php
get_header();

// 1. Doctors Hero
get_template_part( 'template-parts/hero-medical-clinic', null, array(
    'badge'         => 'Board-Certified Practitioners in 2026',
    'title'         => 'Meet Our Medical & Dental Specialists',
    'subtitle'      => 'Our compassionate practitioners bring over 40+ years of combined clinical excellence.',
    'cta_primary'   => 'Book Appointment with Specialist',
    'primary_url'   => '#appointment',
) );

// 2. 4-Column Trust Badges
get_template_part( 'template-parts/trust-badges-4col' );

// 3. Full Doctors Grid
get_template_part( 'template-parts/team-doctors-grid' );

// 4. Urgent Hotline Banner
get_template_part( 'template-parts/cta-urgent-call' );

get_footer();
?>
```

---

## 👤 Cheat Sheet 5: Individual Doctor Profile (`single-doctor.php`)

> Detailed practitioner bio page layout with doctor photo, credentials, verified patient reviews, and direct consultation booking sidebar.

```php
<?php
// single-doctor.php
get_header();

// 1. Doctor Bio Layout (Photo + Credentials + Booking Box)
// (Loads the complete layout from 09-page-templates/single-doctor.php)

// 2. Patient Reviews for this Doctor
get_template_part( 'template-parts/testimonials-3col', null, array(
    'title' => 'Verified Patient Reviews for Dr. Vance',
) );

// 3. Direct Phone CTA Banner
get_template_part( 'template-parts/cta-urgent-call', null, array(
    'title' => 'Have Questions Before Booking?',
    'phone' => '(555) 019-2834',
) );

get_footer();
?>
```

---

## 📞 Cheat Sheet 6: Contact & Location Page (`page-contact.php`)

> Multi-location practice contact page template with facility cards, operating hours, interactive map area, and contact form.

```php
<?php
// page-contact.php
get_header();

// 1. Contact Hero
get_template_part( 'template-parts/hero-medical-clinic', null, array(
    'badge'         => 'Convenient Central Practice',
    'title'         => 'Get in Touch with Our Clinical Team',
    'subtitle'      => 'We are here to help. Reach out by phone, email, or visit our modern clinic facility.',
    'cta_primary'   => 'Call (555) 019-2834',
    'primary_url'   => 'tel:5550192834',
) );

// 2. Contact Grid (Location Cards + Message Form)
// (Loads the complete layout from 09-page-templates/page-contact.php)

// 3. Urgent Hotline CTA
get_template_part( 'template-parts/cta-urgent-call' );

get_footer();
?>
```

---

## ⚠️ Cheat Sheet 7: 404 Error Recovery Page (`404.php`)

> User-friendly 404 page template designed to convert lost traffic back into active leads with search bar, popular destination links, and hotline banner.

```php
<?php
// 404.php
get_header();

// 1. 404 Recovery Layout (Badge + Search Bar + 2x2 Popular Links + Return Button)
// (Loads the complete layout from 09-page-templates/404.php)

// 2. Support Hotline Banner
get_template_part( 'template-parts/cta-urgent-call', null, array(
    'title' => 'Looking for Immediate Assistance?',
) );

get_footer();
?>
```

---

## 📌 Cheat Sheet 8: All 1-Liner Partial Calls (Quick Reference)

> Quick copy-paste snippet index for every individual template part component in the vault. Drop any single line directly into your PHP template files wherever needed.

### 01. Navbars
```php
// Clean header with brand logo, WordPress menu, and a CTA action button
get_template_part( 'template-parts/navbar-standard' );

// Header with top announcement notice strip (hours, location, hotline)
get_template_part( 'template-parts/navbar-emergency-strip' );
```

### 02. Heroes
```php
// High-converting clinic hero with pill badge, headline, and dual action buttons
get_template_part( 'template-parts/hero-medical-clinic' );

// Clean technical headline with engineering badge for dev blogs and portfolios
get_template_part( 'template-parts/hero-tech-blog' );

// Centered headline with email/phone lead capture consultation input box
get_template_part( 'template-parts/hero-lead-capture' );
```

### 03. Trust Proof & Metrics
```php
// 4-column social proof badges (Certified Specialists, Modern Tech, 4.9 Rating, Warranty)
get_template_part( 'template-parts/trust-badges-4col' );

// Dark navy strip with 3 large glowing numbers (15+ Years, 8.5k Patients, 99.4% Rating)
get_template_part( 'template-parts/stats-counter-3col' );
```

### 04. Cards & Grids
```php
// Service/treatment card with thumbnail, category pill, excerpt, and "Details" link
get_template_part( 'template-parts/card-service' );

// Blog article card with author avatar, publish date, category tag, and read more
get_template_part( 'template-parts/card-blog-post' );

// 3-tier pricing package card with popular ribbon, price, and feature checklist
get_template_part( 'template-parts/card-pricing-tier' );
```

### 05. Teams & Specialists
```php
// 3-column doctor profiles with avatars, specialties, 5-star ratings, and booking links
get_template_part( 'template-parts/team-doctors-grid' );

// Modern agency team cards for Lead Architect, Design Director, and Growth Strategist
get_template_part( 'template-parts/team-agency-cards' );
```

### 06. Call-To-Action (CTA) Banners
```php
// High-urgency gradient phone banner with direct clickable tel: hotline button
get_template_part( 'template-parts/cta-urgent-call' );

// Dark luxury booking card inviting visitors to reserve consultation slots online
get_template_part( 'template-parts/cta-appointment-booking' );
```

### 07. Testimonials & Reviews
```php
// 3-column patient review cards with 5 gold stars, quotes, verified badges, and names
get_template_part( 'template-parts/testimonials-3col' );
```

### 08. Footers
```php
// 3-column footer with brand mission, operating hours, contact info, and copyright
get_template_part( 'template-parts/footer-multi-col' );
```
