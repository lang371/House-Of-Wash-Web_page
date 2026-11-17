<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>House of Wash · Official Rates & Services</title>
  
  <!-- Google Fonts: Plus Jakarta Sans for clean modern typography -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Bootstrap 5 CSS & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  
  <style>
    /* Root variables for consistent dark theme styling */
    :root {
      --bg-slate: #0b0f19;
      --card-bg: rgba(18, 24, 38, 0.78);
      --card-border: rgba(255, 255, 255, 0.1);
      --accent-blue: #3b82f6;
    }

    /* Dark slate background with a subtle gradient overlay on top of the laundromat photo */
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: #f8fafc;
      min-height: 100vh;
      background: linear-gradient(rgba(11, 15, 25, 0.84), rgba(11, 15, 25, 0.95)), 
                  url('laundry-bg.jpg') center/cover fixed no-repeat;
      position: relative;
      overflow-x: hidden;
    }

    /* Ambient background glow effect */
    body::before {
      content: '';
      position: absolute;
      top: -100px;
      left: 15%;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, rgba(0, 0, 0, 0) 70%);
      z-index: 0;
      pointer-events: none;
    }

    .navbar, .container {
      position: relative;
      z-index: 10;
    }

    /* Frosted glass navbar styling */
    .navbar-custom {
      background: rgba(18, 24, 38, 0.7);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid var(--card-border);
      padding: 1.25rem 2rem;
    }

    /* Premium Dribbble-style glass cards with smooth hover effect */
    .dribbble-card {
      background: var(--card-bg);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid var(--card-border);
      border-radius: 24px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.1);
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
    }

    .dribbble-card:hover {
      transform: translateY(-4px);
      border-color: rgba(59, 130, 246, 0.35);
    }

    /* Primary glowing action button */
    .btn-primary-glow {
      background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
      border: none;
      border-radius: 50rem;
      font-weight: 700;
      box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
      transition: all 0.25s ease;
    }

    .btn-primary-glow:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 30px rgba(59, 130, 246, 0.6);
      background: linear-gradient(135deg, #60a5fa 0%, #2563eb 100%);
    }

    /* Glass outline button for secondary actions */
    .btn-outline-glass {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.15);
      color: #fff;
      border-radius: 50rem;
      font-weight: 600;
      backdrop-filter: blur(10px);
      transition: all 0.2s ease;
    }

    .btn-outline-glass:hover {
      background: rgba(255, 255, 255, 0.12);
      border-color: rgba(255, 255, 255, 0.3);
      color: #fff;
    }

    .badge-pill-custom {
      background: rgba(59, 130, 246, 0.15);
      color: #93c5fd;
      border: 1px solid rgba(59, 130, 246, 0.3);
      font-weight: 700;
      letter-spacing: 0.03em;
    }

    /* Table styling for official rates */
    .table-custom {
      color: #f8fafc;
      background: transparent;
    }
    .table-custom td, .table-custom th {
      background: transparent;
      border-color: rgba(255, 255, 255, 0.08);
      padding: 1rem;
      vertical-align: middle;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="#">
        <div class="rounded-3 p-2 d-grid place-items-center" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15);">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
            <path d="M19 2H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zm-1 2v2H6V4h12zm1 16H5a1 1 0 0 1-1-1v-10h16v10a1 1 0 0 1-1 1zm-7-9a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm0 6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zM7 5h2v1H7V5zm3 0h2v1h-2V5z"/>
          </svg>
        </div>
        <span class="fw-extrabold tracking-tight" style="font-weight: 800; letter-spacing: -0.02em;">House of Wash</span>
      </a>
      <div class="ms-auto d-flex align-items-center gap-4">
        <a href="#rates" class="text-white text-decoration-none small fw-semibold opacity-75 hover-opacity-100 d-none d-md-inline">Official Rates</a>
        <a href="#status" class="text-white text-decoration-none small fw-semibold opacity-75 hover-opacity-100 d-none d-md-inline">Live Status</a>
        <!-- Staff login gateway linking directly to your backend login.php -->
        <a href="login.php" class="btn btn-sm btn-outline-glass px-4 py-2">Staff Login</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="container py-5 my-4">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <span class="badge badge-pill-custom px-3 py-2 rounded-pill mb-4" style="font-size: 0.75rem;">
          <i class="bi bi-stars me-1 text-primary"></i> Official Price Board & Services
        </span>
        <h1 class="display-4 text-white mb-4" style="font-weight: 800; letter-spacing: -0.03em; line-height: 1.1;">
          Fast, Fresh, & <br><span style="background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Hassle-Free</span> Laundry Care.
        </h1>
        <p class="text-light opacity-75 mb-4 fs-5" style="max-width: 540px; line-height: 1.6;">
          Check our complete official service rates below, featuring 7kg and 10kg capacity options, drop-off bundles, and supplies.
        </p>
        <div class="d-flex flex-wrap gap-3">
          <a href="#rates" class="btn btn-primary-glow px-4 py-3 text-white d-inline-flex align-items-center gap-2">
            <i class="bi bi-table"></i> View Official Rates
          </a>
          <a href="#location" class="btn btn-outline-glass px-4 py-3 d-inline-flex align-items-center gap-2">
            <i class="bi bi-geo-alt-fill"></i> Visit Our Branch
          </a>
        </div>
      </div>

      <!-- Live Shop Status Card -->
      <div class="col-lg-5" id="status">
        <div class="dribbble-card p-4 p-xl-5">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-bold m-0" style="font-size: 1.1rem;">Live Availability</h5>
            <span class="badge bg-success bg-opacity-15 text-success border border-success border-opacity-25 px-3 py-1.5 rounded-pill small fw-bold">
              <span class="spinner-grow spinner-grow-sm me-1" role="status" style="width: 8px; height: 8px;"></span> Open Now
            </span>
          </div>
          <div class="row g-3">
            <div class="col-6">
              <div class="p-3 rounded-4" style="background: rgba(11, 15, 25, 0.6); border: 1px solid rgba(255,255,255,0.06);">
                <span class="text-uppercase text-muted fw-bold d-block mb-1" style="font-size: 0.65rem; letter-spacing: 0.08em;">Active Queue</span>
                <h3 class="fw-bold text-white mb-0">8</h3>
                <span class="text-muted small">Customers</span>
              </div>
            </div>
            <div class="col-6">
              <div class="p-3 rounded-4" style="background: rgba(11, 15, 25, 0.6); border: 1px solid rgba(255,255,255,0.06);">
                <span class="text-uppercase text-muted fw-bold d-block mb-1" style="font-size: 0.65rem; letter-spacing: 0.08em;">Machines Open</span>
                <h3 class="fw-bold text-success mb-0">3</h3>
                <span class="text-muted small">Available</span>
              </div>
            </div>
          </div>
          <div class="mt-4 pt-3 text-center small text-light opacity-75 border-top border-secondary border-opacity-25 d-flex align-items-center justify-content-center gap-2">
            <i class="bi bi-clock-history text-primary"></i> Operating Hours: 8:00 AM – 8:00 PM Daily
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Official Rates & Services Section (Directly mapped from the physical price board) -->
  <div class="container py-5 mb-5" id="rates">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-white mb-2" style="font-size: 2rem; letter-spacing: -0.02em;">Official Service Rates</h2>
      <p class="text-light opacity-75">Exact pricing based on our shop's service menu (7kg and 10kg capacities).</p>
    </div>

    <div class="row g-4">
      <!-- Main Rates Table -->
      <div class="col-lg-8">
        <div class="dribbble-card p-4 p-xl-4 h-100">
          <h5 class="fw-bold text-white mb-4"><i class="bi bi-list-check text-primary me-2"></i>Wash, Drop-Off & Dry Rates</h5>
          <div class="table-responsive">
            <table class="table table-custom mb-0">
              <thead>
                <tr class="border-bottom border-secondary border-opacity-25">
                  <th class="text-muted small uppercase">Service Type</th>
                  <th class="text-center text-primary fw-bold">7 KG Max</th>
                  <th class="text-center text-success fw-bold">10 KG Max</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <strong class="text-white">Regular Drop-Off</strong>
                    <div class="text-muted small" style="font-size: 0.75rem;">Detergent, Fabcon & Colorsafe included</div>
                  </td>
                  <td class="text-center fw-bold text-white">₱230</td>
                  <td class="text-center fw-bold text-white">₱400</td>
                </tr>
                <tr>
                  <td>
                    <strong class="text-white">Premium Drop-Off</strong>
                    <div class="text-muted small" style="font-size: 0.75rem;">Detergent, Fabcon & Colorsafe included</div>
                  </td>
                  <td class="text-center fw-bold text-white">₱250</td>
                  <td class="text-center fw-bold text-white">₱440</td>
                </tr>
                <tr>
                  <td><span class="text-light">Regular Wash</span></td>
                  <td class="text-center text-light opacity-75">₱80</td>
                  <td class="text-center text-light opacity-75">₱130</td>
                </tr>
                <tr>
                  <td><span class="text-light">Premium Wash</span></td>
                  <td class="text-center text-light opacity-75">₱95</td>
                  <td class="text-center text-light opacity-75">₱160</td>
                </tr>
                <tr>
                  <td><span class="text-light">Regular Dry</span></td>
                  <td class="text-center text-light opacity-75">₱100</td>
                  <td class="text-center text-light opacity-75">₱150</td>
                </tr>
                <tr>
                  <td><span class="text-light">Heavy Dry</span></td>
                  <td class="text-center text-light opacity-75">₱115</td>
                  <td class="text-center text-light opacity-75">₱180</td>
                </tr>
                <tr>
                  <td><span class="text-light">Extra Dry</span></td>
                  <td class="text-center text-light opacity-75">₱30</td>
                  <td class="text-center text-light opacity-75">₱40</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Special Items & Supplies Sidebar -->
      <div class="col-lg-4">
        <div class="dribbble-card p-4 p-xl-4 h-100 d-flex flex-column justify-content-between">
          <div>
            <h5 class="fw-bold text-white mb-4"><i class="bi bi-box-seam text-warning me-2"></i>Special Items & Supplies</h5>
            
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between align-items-center py-2 border-bottom border-secondary border-opacity-10">
                <span class="text-light">Comforter <small class="text-muted">(Per Pc)</small></span>
                <span class="fw-bold text-warning">₱300</span>
              </li>
              <li class="d-flex justify-content-between align-items-center py-2 border-bottom border-secondary border-opacity-10">
                <span class="text-light">Liquid Detergent <small class="text-muted">(100ml)</small></span>
                <span class="fw-bold text-white">₱20</span>
              </li>
              <li class="d-flex justify-content-between align-items-center py-2 border-bottom border-secondary border-opacity-10">
                <span class="text-light">Fabric Conditioner <small class="text-muted">(100ml)</small></span>
                <span class="fw-bold text-white">₱20</span>
              </li>
              <li class="d-flex justify-content-between align-items-center py-2 border-bottom border-secondary border-opacity-10">
                <span class="text-light">Colorsafe <small class="text-muted">(225ml)</small></span>
                <span class="fw-bold text-white">₱30</span>
              </li>
              <li class="d-flex justify-content-between align-items-center py-2 border-bottom border-secondary border-opacity-10">
                <span class="text-light">Colorsafe <small class="text-muted">(95ml)</small></span>
                <span class="fw-bold text-white">₱18</span>
              </li>
              <li class="d-flex justify-content-between align-items-center py-2">
                <span class="text-light">Plastic Packaging</span>
                <span class="fw-bold text-white">₱3</span>
              </li>
            </ul>
          </div>

          <div class="p-3 rounded-4" style="background: rgba(59, 130, 246, 0.1); border: 1px solid rgba(59, 130, 246, 0.2);">
            <div class="small text-light opacity-75 text-center">
              <i class="bi bi-info-circle text-primary me-1"></i> Drop-off services include detergent, fabcon, and colorsafe!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Location & Contact Section -->
  <div class="container pb-5 mb-4" id="location">
    <div class="dribbble-card p-4 p-md-5 text-center mx-auto" style="max-width: 760px;">
      <h4 class="fw-bold text-white mb-2">Visit House of Wash Today</h4>
      <p class="text-light opacity-75 small mb-4">Stop by our main branch for fast drop-off service or experience our modern self-service stations.</p>
      <div class="d-flex flex-wrap justify-content-center gap-4 text-light opacity-75 small">
        <span><i class="bi bi-geo-alt-fill text-primary me-1"></i> Main Branch, Bilaran</span>
        <span><i class="bi bi-telephone-fill text-success me-1"></i> (0912) 345-6789</span>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center py-4 border-top border-secondary border-opacity-10 text-light opacity-50 small">
    <p class="mb-0">&copy; 2026 House of Wash · Systems Engineering Coursework (IT 314)</p>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
