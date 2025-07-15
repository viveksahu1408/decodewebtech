<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Decode Web Tech</title>

  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- ✅ Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- ✅ Font Awesome for Icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <style>
    :root {
      --bg: #f4f4f4;
      --text: #333;
      --primary: #009688;
      --secondary: #00695c;
      --white: #fff;
    }

    body.dark {
      --bg: #121212;
      --text: #e0e0e0;
      --primary: #26a69a;
      --secondary: #004d40;
      --white: #1e1e1e;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background: var(--bg);
      color: var(--text);
      transition: all 0.3s ease;
    }

    header {
      background: #222;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      flex-wrap: wrap;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }

    nav ul {
      display: flex;
      list-style: none;
      flex-wrap: wrap;
    }

    nav li {
      margin-left: 20px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
    }

    #toggle-btn {
      background: none;
      border: none;
      color: #fff;
      font-size: 1.2rem;
      cursor: pointer;
      margin-left: 1rem;
    }

    #hero {
      background: var(--primary);
      color: #fff;
      text-align: center;
      padding: 4rem 2rem;
    }

    .btn {
      display: inline-block;
      margin: 1rem 0.5rem;
      padding: 0.7rem 1.5rem;
      background: #fff;
      color: var(--primary);
      border: none;
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
      transition: 0.3s;
    }

    .btn:hover {
      background: var(--secondary);
      color: #fff;
    }

    .btn-secondary {
      background: var(--secondary);
      color: #fff;
    }

    section {
      padding: 3rem 2rem;
      background: var(--white);
      margin-bottom: 1rem;
    }

    h2 {
      margin-bottom: 1rem;
      text-align: center;
    }

    /* Services */
    .services-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 0.7rem;
      font-size: 1.1rem;
    }

    .services-list li::before {
      content: "✔ ";
      color: var(--primary);
    }

    /* Portfolio */
    .projects {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: center;
    }

    .project-card {
      background: #eee;
      padding: 1rem;
      border-radius: 8px;
      width: 300px;
      transition: transform 0.3s;
    }

    .project-card:hover {
      transform: scale(1.05);
    }

    .project-card img {
      width: 100%;
      border-radius: 6px;
    }

    .project-card h3 {
      margin: 0.5rem 0;
    }

    /* Contact */
    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      max-width: 500px;
      margin: auto;
    }

    input, textarea {
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      padding: 0.75rem;
      background: var(--primary);
      color: #fff;
      border: none;
      cursor: pointer;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 1rem;
      background: #222;
      color: #fff;
    }

    footer a {
      color: #00e5ff;
      margin: 0 0.5rem;
      text-decoration: none;
    }

    .service-card {
      transition: transform 0.3s ease;
    }

    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
    }

    .service-card img {
      height: 200px;
      object-fit: cover;
    }

    .toggle-btn {
      cursor: pointer;
      font-size: 1.4rem;
      color: white;
    }

    .dark-mode .navbar {
      background-color: #1e1e1e !important;
    }

    .dark-mode .card {
      background-color: #232323;
      color: #eee;
    }

    .dark-mode .btn {
      background-color: #00bfa5;
      color: white;
      }

    /* Responsive */
    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        align-items: flex-start;
        margin-top: 1rem;
      }

      .projects {
        flex-direction: column;
      }

      .project-card {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">Decode Web Tech</div>
    <nav>
      <ul>
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <button id="toggle-btn" title="Toggle Dark Mode"><i class="fas fa-moon"></i></button>
  </header>


   <!-- Hero -->
  <section id="hero" class="text-center text-white bg-sucess py-5">
    <div class="container">
      <h1 class="display-4">Welcome to Decode Web Tech</h1>
      <p class="lead">Digital Marketing | Web Design | App Design | SEO | Social Media</p>
      <a href="#services" class="btn btn-light me-2">Our Services</a>
      <a href="#contact" class="btn btn-dark">Get in Touch</a>
    </div>
  </section>

  <!-- <section id="hero">
    <h1>Hi, I'm Raj</h1>
    <p>I build fast, clean, and responsive websites.</p>
    <a href="#portfolio" class="btn">View My Work</a>
    <a href="#contact" class="btn btn-secondary">Hire Me</a>
  </section> -->


  <!-- <section id="about">
    <h2>About Me</h2>
    <p>I’m a web developer with 3+ years of experience in HTML, CSS, JavaScript, and React. I focus on building responsive and user-friendly websites.</p>
  </section> -->

  <section id="about" class="py-5 bg-white text-dark">
  <div class="container">
    <div class="card shadow-lg p-4 p-md-5 border-0">
      <h2 class="text-center text-primary mb-4">About Decode WebTech</h2>
      <p class="text-center lead mb-4">
        Decode WebTech is a Katni-based digital agency founded by <strong>Vivek Sahu</strong>, dedicated to bringing local businesses online through affordable and professional digital solutions.
      </p>
      <ul class="mb-4">
        <li>🎓 MCA from a Central University</li>
        <li>📘 Pursuing BSc in Data Science from IIT Madras</li>
        <li>🧑‍💻 Trained in Ahmedabad with real industry exposure</li>
        <li>🏢 Currently Software Developer at Govt. Tilak College, Katni</li>
      </ul>
      <p class="mb-4">
        We specialize in <strong>Website Development (PHP/Yii2)</strong>, <strong>Android Apps (Kotlin)</strong>, and user-friendly UI/UX for schools, hospitals, and local startups.
      </p>
      <div class="bg-light rounded p-4">
        <h3 class="text-primary mb-3">Why Decode WebTech?</h3>
        <ul class="mb-0">
          <li>💰 Affordable pricing – starting at ₹2999</li>
          <li>🚀 Fast delivery & responsive support</li>
          <li>🎨 Clean and responsive designs</li>
          <li>🤝 Local expertise and trust</li>
        </ul>
      </div>
    </div>
  </div>
</section>


  

   <!-- Services Section -->
  <section id="services" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4"><i class="fas fa-tools"></i> My Services</h2>
      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card service-card shadow-sm">
            <img src="https://images.pexels.com/photos/811587/pexels-photo-811587.jpeg" class="card-img-top" alt="Web Design">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-paint-brush"></i> Web Design</h5>
              <p class="card-text">Beautiful and modern website designs that attract users.</p>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card service-card shadow-sm">
            <img src="https://images.pexels.com/photos/3584994/pexels-photo-3584994.jpeg" class="card-img-top" alt="Frontend Dev">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-code"></i> Frontend Development</h5>
              <p class="card-text">Responsive, fast and clean UI using latest tech stack.</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card service-card shadow-sm">
            <img src="https://cdn.dribbble.com/userupload/11363174/file/original-f376e8b87fa11a3afb5657bcbeda9bca.png?resize=2048x1536&vertical=center" class="card-img-top" alt="SEO">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-search"></i> App designs</h5>
              <p class="card-text">Get your coustum Mobile Apps with latest technology Flutter.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card service-card shadow-sm">
            <img src="https://cdn.dribbble.com/userupload/17105800/file/original-d49dfa00ec9bb890eb18630d9aa1001a.png?resize=2048x1536&vertical=center" class="card-img-top" alt="Web Design">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-paint-brush"></i> Social Media Post</h5>
              <p class="card-text">Beautiful and modern social media post and designs that attract users.</p>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card service-card shadow-sm">
            <img src="https://cdn.dribbble.com/userupload/22142131/file/original-38a13aac20fdb565d5bd96a414cde5ca.png?resize=752x564&vertical=center" class="card-img-top" alt="Frontend Dev">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-code"></i> Graphics Designing</h5>
              <p class="card-text">Responsive, fast and clean graphics like wedding invitations,poster etc.</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card service-card shadow-sm">
            <img src="https://images.pexels.com/photos/577210/pexels-photo-577210.jpeg" class="card-img-top" alt="SEO">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-search"></i> SEO Optimization</h5>
              <p class="card-text">Rank your site higher on Google with proper SEO.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="portfolio">
    <h2><i class="fas fa-briefcase"></i> Projects</h2>
    <div class="projects">
      <div class="project-card">
        <img src="https://images.pexels.com/photos/3584994/pexels-photo-3584994.jpeg" alt="Project 1" />
        <h3>Landing Page</h3>
        <p>A clean product landing page.</p>
        <a href="#" class="btn">View</a>
      </div>
      <div class="project-card">
        <img src="https://cdn.dribbble.com/userupload/14773880/file/original-aacc0e8f71d8edc9e40253480f202cfc.jpg?resize=752x&vertical=center" alt="Project 2" />
        <h3>Portfolio Site</h3>
        <p>My personal portfolio with animations.</p>
        <a href="#" class="btn">View</a>
      </div>
      <div class="project-card">
        <img src="https://cdn.dribbble.com/userupload/23744973/file/original-c2466431951d7f3c8f5ac2d6e7a84d5b.jpg?resize=2048x1536&vertical=center" alt="Project 3" />
        <h3>E-commerce UI</h3>
        <p>Responsive shopping website layout.</p>
        <a href="#" class="btn">View</a>
      </div>
      <div class="project-card">
        <img src="https://cdn.dribbble.com/userupload/37125399/file/original-769e0b86f702b69834898016b20738eb.png?resize=1504x1128&vertical=center" alt="Project 1" />
        <h3>Restaurent Websites</h3>
        <p>A clean product landing page.</p>
        <a href="#" class="btn">View</a>
      </div>
      <div class="project-card">
        <img src="https://cdn.dribbble.com/userupload/6344607/file/original-172f08b28486db70c4305e8bba1e7985.png?resize=2048x1536&vertical=center" alt="Project 2" />
        <h3>School Websites</h3>
        <p>My personal portfolio with animations.</p>
        <a href="#" class="btn">View</a>
      </div>
      <div class="project-card">
        <img src="https://cdn.dribbble.com/userupload/11404926/file/original-7299eff3d2111c2e5faaed0a9b7e24da.png?resize=2048x1536&vertical=center" alt="Project 1" />
        <h3>Hospital Websites</h3>
        <p>A clean product landing page.</p>
        <a href="#" class="btn">View</a>
      </div>
      
    </div>
  </section>

  <section id="contact">
    <h2><i class="fas fa-envelope"></i> Contact Me</h2>
    <form action="https://formspree.io/f/your-form-id" method="POST">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <textarea name="message" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <footer>
    <p>© 2025 Decode Web Tech</p>
    <p>
      <a href="https://www.instagram.com/decodewebtech/"><i class="fab fa-linkedin"></i>Instagram</a>
      <a href="#"><i class="fab fa-github"></i>github</a>
      <a href="#"><i class="fab fa-twitter"></i>X</a>
    </p>
  </footer>

  <script>
    // Dark mode toggle
    const toggleBtn = document.getElementById('toggle-btn');
    toggleBtn.addEventListener('click', () => {
      document.body.classList.toggle('dark');
    });
  </script>

</body>
</html>
