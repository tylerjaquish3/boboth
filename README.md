# Boboth Vision Clinic Website

A professional website for **Boboth Vision Clinic**, a family-owned optometry practice serving the Lower Yakima Valley in Grandview, Washington.

## About the Business

Boboth Vision Clinic is a family-owned and operated optometry practice that has been serving the community for over 35 years. The clinic is staffed by three doctors:

- **Dr. Everett Boboth** - Pacific University College of Optometry (2012)
- **Dr. Cole Boboth** - Pacific University College of Optometry (2014)
- **Dr. Cameron Boboth** - Midwestern University (2017), specializing in Pediatric and Vision Therapy

### Services Offered
- Eye Health Exams
- Pre-Surgical Evaluations (LASIK, cataract)
- Contact Lens Fittings
- Family Eye Care
- Diabetic Eye Exams
- Vision Therapy
- In-house lens edging (same-day glasses)

### Contact Information
- **Address:** 1023 W. Wine Country Rd, Grandview, WA 98930
- **Phone:** 509.882.2650
- **Fax:** 509.882.4225
- **Email:** doctors@bobothvision.com
- **Facebook:** [facebook.com/bobothvision](https://facebook.com/bobothvision)

### Office Hours
| Day | Hours |
|-----|-------|
| Monday - Wednesday | 8:30 am - 5:30 pm |
| Thursday | 8:00 am - 5:00 pm |
| Friday | 7:00 am - 12:00 pm |

## Tech Stack

- **Backend:** PHP
- **Frontend:** HTML, CSS, JavaScript
- **CSS Framework:** Bootstrap 3
- **Icons:** Font Awesome
- **Database:** MySQL (based on SQL structure files)
- **Additional Libraries:**
  - jQuery 1.8.2
  - Isotope (for layouts)
  - Animate.css (for animations)
  - Google reCAPTCHA (for form protection)

## Project Structure

```
├── index.php                 # Main homepage
├── appointment_form.html     # Appointment request form
├── appointment_request.php   # Appointment form handler
├── order_cl_form.html        # Contact lens order form
├── review.html               # Customer review submission form
├── review_send.php           # Review form handler
├── send_email.php            # Contact form email handler
├── admin/                    # Admin panel
│   ├── index.html            # Admin login page
│   ├── admin_home.php        # Admin dashboard
│   ├── checklogin.php        # Login authentication
│   ├── logout.php            # Logout handler
│   ├── approved_review.php   # Review approval system
│   └── reviews/              # Review management
├── css/                      # Stylesheets
├── js/                       # JavaScript files
├── font/                     # Font Awesome icons
├── images/                   # Site images
└── database/                 # Database structure files
```

## Features

- **Responsive Design:** Mobile-friendly layout using Bootstrap
- **Appointment Requests:** Online form for scheduling appointments
- **Contact Form:** Email contact with reCAPTCHA protection
- **Customer Testimonials:** Rotating carousel of patient reviews
- **Review System:** Patients can submit reviews (admin approval required)
- **Virtual Try-On:** Integration with FramesData for virtual glasses try-on
- **Admin Panel:** Secure admin area for managing reviews and content
- **Google Maps:** Embedded map showing clinic location

## Setup

1. Configure your web server (Apache/Nginx) with PHP support
2. Import the database structure from `database/` folder
3. Update database credentials in admin configuration files
4. Ensure proper file permissions for PHP scripts
5. Configure email settings in `send_email.php`

## Hosting & Deployment

### Web Hosting Access

- **Hosting Control Panel:** `https://www.spectrumbusiness.net/`
- **Credentials:** Stored in LastPass (search for "Boboth" or the hosting provider name)

### Automated Deployment (GitHub Actions)

This project uses GitHub Actions to automatically deploy changes via FTP when code is pushed to the `master` branch.

**How it works:**
1. Push changes to the `master` branch
2. GitHub Actions workflow triggers automatically
3. Files are deployed to the web server via FTP

**GitHub Secrets Required:**

The following secrets must be configured in the repository settings (`Settings > Secrets and variables > Actions`):

| Secret Name | Description |
|-------------|-------------|
| `FTP_SERVER` | FTP server hostname |
| `FTP_USERNAME` | FTP username |
| `FTP_PASSWORD` | FTP password |

**Workflow file location:** `.github/workflows/deploy.yml`

**To manually trigger a deployment:**
1. Go to the repository on GitHub
2. Navigate to `Actions` tab
3. Select the deployment workflow
4. Click "Run workflow"

**Troubleshooting:**
- Check the Actions tab for deployment logs if something fails
- Verify FTP credentials in Spectrum Business account match the GitHub Secrets
- Ensure the FTP user has write permissions to the web root

## License

All Rights Reserved - Boboth Vision Clinic