<?php
// Assuming a user is logged in
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Portfolio Market</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet">

  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
  rel="stylesheet"/>
  
  <link rel="stylesheet" href="src/styles/base.css">
  <link rel="stylesheet" href="src/styles/about.css">
  <link rel="stylesheet" href="src/styles/projects.css">
  <link rel="stylesheet" href="src/styles/contact.css">
  <link rel="stylesheet" href="src/styles/home.css">
  <link rel="stylesheet" href="src/styles/certificates.css">
  <link rel="icon" href="styles/img/myWebIcon/cyydev-icon.png" type="image/png">
</head>
<body class="d-flex flex-column min-vh-100">
  <!-- Navbar Tabs -->
  <div class="container mt-4">
    <ul class="nav nav-tabs flex-wrap justify-content-center" id="portfolioTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="certificates-tab" data-bs-toggle="tab" data-bs-target="#certificates" type="button" role="tab" aria-controls="certificates" aria-selected="false">Certificates</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">Projects</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="market-tab" data-bs-toggle="tab" data-bs-target="#market" type="button" role="tab" aria-controls="market" aria-selected="false">Market</button>
      </li>
    </ul>
  </div>

    <!-- Tab Content -->
    <div class="tab-content mt-4 mb-5" id="portfolioTabsContent">
      <!-- Home Tab -->
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <section class="p-5 text-center text-light bg-black">
          <div class="container">
            <h1>Welcome to My Portfolio</h1>
            <div class="home-content" id="home-content">
                <div class="intro-wrapper">
                    <p class="intro">
                        console.log('Hello, I'm Cerwin');
                        <span>
                            VHDL & WEB DEVELOPER <br> TECH. SUPPORT SERVICES
                        </span>
                        &mdash; Bachelor of Science in Computer Engineering &mdash;
                    </p>
                </div>
          </div>
        </section>
      </div>

      <!-- About Tab -->
      <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
        <section class="p-5">
          <div class="container">
            <!-- About Section with Picture -->
            <div class="row align-items-center mb-5">
              <!-- Picture Column -->
              <div class="col-md-4 text-center">
                <img src="src/styles/img/avatar.jpeg" alt="Your Name" class="img-fluid rounded-circle shadow" style="max-width: 200px;">
              </div>
      
              <!-- Summary Column -->
              <div class="col-md-8">
                <h2>About Me</h2>
                <p class="lead">
                  Hi! I'm Cerwin Roxas, a passionate developer with expertise in web development, e-commerce solutions, and creating dynamic user interfaces. I thrive on learning new technologies and building solutions that solve real-world problems. My goal is to continuously improve and contribute to impactful projects while expanding my skills.
                </p>
              </div>
            </div>
      
            <!-- Education Section -->
            <div class="mb-4">
              <h3>Education</h3>
              <ul class="list-group">
                <li class="list-group-item">
                  <strong>Bachelor of Science in Computer Engineering</strong> <br>
                  Tanauan City College - Graduated: 2024
                </li>
                <li class="list-group-item">
                  <strong>STEM Strand</strong> <br>
                  FAITH Fidelis Senior Highschool - Graduated: 2020
                </li>
              </ul>
            </div>
      
            <!-- Work Experience Section -->
            <div>
              <h3>Work Experience</h3>
              <ul class="list-group">
                <li class="list-group-item">
                  <strong>IT Staff Intern</strong> <br>
                  Torres Technology Center Corp. (Jan 2024 - March 2024) <br>
                  <small>Responsibilities:</small>
                  <ul>
                    <li>Developed responsive web interfaces using HTML, CSS, and JavaScript.</li>
                    <li>Worked with cross-functional teams to implement e-commerce functionalities.</li>
                    <li>Optimized UI/UX designs for better performance and user experience.</li>
                  </ul>
                </li>
                <li class="list-group-item">
                  <strong>Service Crew Member</strong> <br>
                  McDonald's (Jun 2023 - Jan 2024) <br>
                  <small>Responsibilities:</small>
                  <ul>
                    <li>Assisted in designing and building dynamic web pages for clients.</li>
                    <li>Conducted testing and debugging of frontend code.</li>
                    <li>Supported the team in integrating APIs with frontend components.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </div>
      
      <!-- Contact Tab -->
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <section class="p-5">
          <div class="container">
            <h2>Contact Me</h2>
            <p class="lead">Feel free to reach out to me through any of the platforms below:</p>
      
            <!-- Contact Details -->
            <ul class="list-unstyled">
              <li class="mb-3">
                <i class="fas fa-envelope me-2"></i> 
                <strong>Email:</strong> 
                <a href="mailto:your-email@example.com">Cerwinroxas17@gmail.com</a>
              </li>
              <li class="mb-3">
                <i class="fas fa-phone me-2"></i> 
                <strong>Phone:</strong> 
                <a href="tel:+1234567890">(+63)976-0069-306</a>
              </li>
            </ul>
      
            <!-- Social Media Links -->
            <h3>Social Media</h3>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://github.com/Serwinooo" target="_blank" class="text-dark">
                  <i class="fab fa-github fa-2x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/cerwin-roxas-67b436250/" target="_blank" class="text-primary">
                  <i class="fab fa-linkedin fa-2x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://x.com/itsmecerwin" target="_blank" class="text-info">
                  <i class="fab fa-twitter fa-2x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.tiktok.com/@cennnnyyy" target="_blank" class="text-dark">
                  <i class="fab fa-tiktok fa-2x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/crwnrxs/" target="_blank" class="text-danger">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
              </li>
            </ul>
      
            <!-- Contact Form -->
            <h3 class="mt-5">Get in Touch</h3>
            <form id="contactForm">
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
              </div>
      
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
      
              <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
              </div>
      
              <div class="mb-3">
                <label for="purpose" class="form-label">Purpose</label>
                <select class="form-select" id="purpose" name="purpose" required>
                  <option value="" disabled selected>Select Purpose</option>
                  <option value="Inquiry">Inquiry</option>
                  <option value="Feedback">Feedback</option>
                  <option value="Support">Support</option>
                  <option value="Collaboration">Collaboration</option>
                </select>
              </div>
      
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
              </div>
      
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </section>
      </div>
      
      <div class="tab-pane fade" id="certificates" role="tabpanel" aria-labelledby="certificates-tab">
        <section class="p-5">
          <div class="container">
            <h2 class="mb-4">My Certificates</h2>
            <p class="lead">Here are some of my certifications:</p>
      
            <!-- Certificate Image Slider -->
            <div id="certificateSlider" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <!-- Certificate 1 -->
                <div class="carousel-item active">
                  <img src="src/styles/certificates/Certificate of Participation (33).webp" class="d-block mx-auto img-fluid rounded" alt="Certificate 1">
                </div>
                <!-- Certificate 2 -->
                <div class="carousel-item">
                  <img src="src/styles/certificates/Cerwin R.webp" class="d-block mx-auto img-fluid rounded" alt="Certificate 2">
                </div>
                <!-- Certificate 3 -->
                <div class="carousel-item">
                  <img src="src/styles/certificates/Cerwin_Manzo_Roxas20240405-73-xqlvwu.webp" class="d-block mx-auto img-fluid rounded" alt="Certificate 3">
                </div>
                <!-- Add more certificates as needed -->
              </div>
      
              <!-- Slider Navigation Buttons -->
              <button class="carousel-control-prev" type="button" data-bs-target="#certificateSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#certificateSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section>
      </div>      

      <!-- Projects Tab -->
      <div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="projects-tab">
        <section class="p-5">
          <div class="container">
            <h2 class="mb-4">My Projects</h2>
            <p class="lead">Explore my projects by category:</p>
      
            <!-- Sub Tabs for Project Categories -->
            <ul class="nav nav-tabs" id="projectCategories" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="designs-tab" data-bs-toggle="tab" data-bs-target="#designs" type="button" role="tab" aria-controls="designs" aria-selected="true">
                  Designs
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="programs-tab" data-bs-toggle="tab" data-bs-target="#programs" type="button" role="tab" aria-controls="programs" aria-selected="false">
                  Programs
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="others-tab" data-bs-toggle="tab" data-bs-target="#others" type="button" role="tab" aria-controls="others" aria-selected="false">
                  Other Projects
                </button>
              </li>
            </ul>
      
            <div class="tab-pane-proj fade show active" id="designs" role="tabpanel" aria-labelledby="designs-tab">
                <h3>Project Designs</h3>
                <p class="lead">Here are some of my design projects:</p>
              
                <!-- Image Gallery -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <!-- Design Image 1 -->
                  <div class="col">
                    <div class="design-image-wrapper">
                      <img src="src/styles/project-img/BLCK_FRONT.png" class="design-image" alt="Design Project 1">
                    </div>
                  </div>
                  <!-- Design Image 2 -->
                  <div class="col">
                    <div class="design-image-wrapper">
                      <img src="src/styles/project-img/BLCK_BACK.png" class="design-image" alt="Design Project 2">
                    </div>
                  </div>
                  <!-- Design Image 3 -->
                  <div class="col">
                    <div class="design-image-wrapper">
                      <img src="src/styles/project-img/F&B CPE.png" class="design-image" alt="Design Project 3">
                    </div>
                  </div>
                  <!-- Add more images here -->
                  <div class="col">
                    <div class="design-image-wrapper">
                      <img src="src/styles/project-img/image2.png" class="design-image" alt="Design Project 3">
                    </div>
                  </div>

                  <div class="col">
                    <div class="design-image-wrapper">
                      <img src="src/styles/project-img/BDHBT1.png" class="design-image" alt="Design Project 3">
                    </div>
                  </div>

                  <div class="col">
                    <div class="design-image-wrapper">
                      <img src="src/styles/project-img/Front-1.png" class="design-image" alt="Design Project 3">
                    </div>
                  </div>

                </div>
              </div>              
              
                <!-- Project Programs -->
                <div class="tab-pane-proj fade" id="programs" role="tabpanel" aria-labelledby="programs-tab">
                  <h3>Project Programs</h3>
                  <p class="lead">Here are some of my programming projects:</p>
                  <div class="row g-3">
                    <!-- Program Project 1 -->
                    <div class="col-md-4">
                      <div class="card">
                        <img src="src/styles/project-img/programs/vhdl/386861738_1296717507653025_5316877998385460287_n.png" class="card-img-top" alt="Program Project 1">
                        <div class="card-body">
                          <h5 class="card-title">MVM VHDL</h5>
                          <p class="card-text">RTL design & Waveform to synthesize and showcase the flow of the system before developmen using
                            Xinyx. Tech. Stack used: VHDL & Testbench.
                          </p>
                          <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                      </div>
                    </div>
                    <!-- Add more program projects here -->
                  </div>
                </div>
              
                <!-- Other Projects -->
                <div class="tab-pane-proj fade" id="others" role="tabpanel" aria-labelledby="others-tab">
                  <h3>Other Projects</h3>
                  <p class="lead">Here are some of my other projects:</p>
                  <div class="row g-3">
                    <!-- Other Project 1 -->
                    <div class="col-md-4">
                      <div class="card">
                        <img src="styles/img/projects/other1.jpg" class="card-img-top" alt="Other Project 1">
                        <div class="card-body">
                          <h5 class="card-title">Other Project 1</h5>
                          <p class="card-text">Description of Other Project 1.</p>
                          <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                      </div>
                    </div>
                    <!-- Add more other projects here -->
                  </div>
                </div>
              </div>
              </section>
              </div>

      <!-- Market Tab -->
      <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
          <section class="p-5 bg-light">
              <div class="container">
                  <h2 class="text-center mb-5">Available Products for Sale</h2>
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                  <?php
                  include 'src/include/db_connect.php';

                  // Check database connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }

                  $sql = "SELECT * FROM products";
                  $result = mysqli_query($conn, $sql);

                  // Check if products are available
                  if (mysqli_num_rows($result) > 0) {
                      while ($product = mysqli_fetch_assoc($result)) {
                          echo '
                          <div class="col">
                              <div class="card h-100">
                                  <img src="src/page/admin/images/products/' . $product['image'] . '" class="card-img-top" alt="' . $product['name'] . '">
                                  <div class="card-body">
                                      <h5 class="card-title">' . $product['name'] . '</h5>
                                      <p class="card-text">' . $product['description'] . '</p>
                                      <p class="card-text"><strong>$' . number_format($product['price'], 2) . '</strong></p>
                                      <form action="src/page/503.html" method="POST">
                                          <div class="mb-3">
                                              <label for="quantity-' . $product['id'] . '" class="form-label">Quantity</label>
                                              <input type="number" class="form-control" id="quantity-' . $product['id'] . '" name="quantity" min="1" value="1" required>
                                          </div>
                                          <input type="hidden" name="product_id" value="' . $product['id'] . '">
                                          <button type="submit" class="btn btn-primary">Purchase</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                          ';
                      }
                  } else {
                      echo "<p>No products available.</p>";
                  }

                  mysqli_close($conn);
                  ?>
                  </div>
              </div>
          </section>
      </div>

<!-- Chat Widget -->
<div id="chat-widget" style="position: fixed; bottom: 20px; right: 20px; width: 300px;">
    <div id="chat-header" style="background: #007bff; color: white; padding: 10px; cursor: pointer;">
        <span>Chat with Admin</span>
        <span id="chat-toggle" style="float: right;">&#x25BC;</span>
    </div>
    <div id="chat-body" style="background: white; height: 400px; display: none; border: 1px solid #007bff; overflow-y: auto;">
        <div id="chat-messages" style="padding: 10px; height: 340px; overflow-y: auto;"></div>
        <form id="chat-form" style="padding: 10px; border-top: 1px solid #007bff;">
            <input type="text" id="chat-input" class="form-control" placeholder="Type a message..." required>
            <button type="submit" class="btn btn-primary btn-sm mt-2">Send</button>
        </form>
    </div>
</div>


</div>

  <!-- Footer -->
  <footer class="bg-black text-center text-light p-3 mt-auto">
    <p>&copy; 2025 My Portfolio | Designed by Cerwin</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

  <script src="main.js"></script>
  <script src="src/scripts/contact.js"></script>
  <!-- <script src="src/scripts/market.js"></script> -->

</body>
</html