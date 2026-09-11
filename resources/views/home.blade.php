<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Muhammad Haris Suhud — Web Developer & Embedded Systems / IoT Developer">
    <title>Muhammad Haris Suhud | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand fw-800" href="#home">
            <img src="{{ asset('images/logo.png') }}"
                alt="Haris"
                class="navbar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item ms-lg-2"><a class="btn btn-sm btn-primary-custom" href="#contact">Let's Talk</a></li>
            </ul>
        </div>
    </div>
</nav>

<header id="home" class="hero">
    <div class="hero-grid"></div>
    <div class="container position-relative z-2">
        <div class="row align-items-center min-vh-100 py-5">
            <!-- SISI KIRI: TEKS & TOMBOL -->
            <div class="col-lg-7 mb-5 mb-lg-0">
            <!-- Eyebrow Badge -->
            <div class="eyebrow-badge reveal delay-1 mb-3">
                <i class="bi bi-code-slash me-1"></i> Full Stack / Embedded Developer
            </div>

            <!-- Title -->
            <h1 class="hero-title reveal delay-1">
                Hi 👋, I'm <span class="gradient-text">Muhammad Haris Suhud.</span>
            </h1>

            <!-- Subtitle & Copy -->
            <h2 class="hero-subtitle reveal delay-2">Full Stack Developer | Embedded Systems | IoT</h2>
            <p class="hero-copy reveal delay-2">
                D4 Informatics Engineering graduate focused on building web applications, embedded systems, and IoT solutions.
            </p>

            <!-- STATISTIK BADGE (Dengan Efek Timbul) -->
            <div class="hero-stats d-flex gap-3 my-4 reveal delay-2">
                <div class="stat-card">
                    <h3>2+</h3>
                    <p>Years Exp.</p>
                </div>
                <div class="stat-card">
                    <h3>10+</h3>
                    <p>Projects</p>
                </div>
                <div class="stat-card">
                    <h3>5+</h3>
                    <p>Certifications</p>
                </div>
            </div>

            <!-- TOMBOL CTA -->
            <div class="d-flex flex-wrap gap-3 reveal delay-3">
                <a href="#contact" class="btn btn-primary-custom btn-lg">
                    <i class="bi bi-send-fill me-2"></i> Hire Me
                </a>
                <a href="#" class="btn btn-outline-custom btn-lg">
                    <i class="bi bi-download me-2"></i> Download CV
                </a>
            </div>

            <!-- SOSIAL MEDIA -->
            <div class="hero-socials reveal delay-3 mt-4">
                <a href="https://github.com/hariscom11" aria-label="GitHub"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/in/muhammad-haris-16476b24a/" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="https://wa.me/6281358369671" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>

            <!-- SISI KANAN: CARD PROFIL BERGERAK & GELOMBANG -->
            <div class="col-lg-5 d-flex justify-content-center">
                <div class="profile-card float-animation">
                    <div class="profile-avatar-wrapper">
                        <!-- Elemen Gelombang/Pulse -->
                        <div class="wave wave-1"></div>
                        <div class="wave wave-2"></div>
                        <div class="wave wave-3"></div>

                        <!-- Foto Profil -->
                        <img src="{{ asset('images/foto-saya.png') }}" alt="Muhammad Haris Suhud" class="profile-avatar">
                    </div>

                    <div class="profile-info text-center mt-3">
                        <h4 class="profile-name">Muhammad Haris Suhud</h4>
                        <p class="profile-handle">@_harissuhud03</p>
                        <p class="profile-location"><i class="bi bi-geo-alt-fill text-emerald me-1"></i> Pasuruan, Indonesia</p>
                        <span class="profile-role">Full Stack & Embedded Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="scroll-hint" href="#about"><span></span> Scroll to explore</a>
</header>

<section id="about" class="section section-soft min-vh-100 d-flex align-items-center py-5">
    <div class="container my-auto">
        <!-- Title Center -->
        <div class="text-center mb-5 reveal">
            <div class="section-label d-inline-flex align-items-center gap-2 mb-2">
            </div>
            <h2 class="section-title text-white">About Me</h2>
        </div>

        <div class="row g-4 align-items-stretch justify-content-center">
            <!-- Kolom Kiri: Foto / Gambar Anime -->
            <div class="col-lg-5">
                <div class="glass-card h-100 p-4 text-center d-flex flex-column justify-content-center align-items-center reveal">
                    <div class="profile-img-wrapper overflow-hidden rounded-4 w-100 h-100">
                        <!-- Ganti src dengan path foto anime Anda -->
                       <img src="{{ asset('images/foto.jpg') }}" alt="Profile Image" class="img-fluid w-100 h-100 object-fit-cover rounded-4">
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Deskripsi + Expertise + Stats -->
           <div class="col-lg-6">
                <div class="glass-card p-4 p-lg-5 h-100 d-flex flex-column justify-content-between reveal">
                    <div class="flex-grow-1">
                        <h3 class="about-headline mb-3 text-emerald">
                            <i class="bi bi-code-slash me-2"></i>Building useful things with code & technology.
                        </h3>
                        <p class="section-copy text-white mb-3" style="text-align: justify; -webkit-hyphens: auto; hyphens: auto;">
                            I am a Full-Stack Web Developer and Embedded Systems & IoT Developer with an educational background in Informatics Engineering. I have experience developing web applications, programming microcontrollers, and integrating sensors and devices into IoT projects.
                        </p>
                        <p class="section-copy text-white mb-3" style="text-align: justify; -webkit-hyphens: auto; hyphens: auto;">
                            I enjoy building practical digital solutions that combine software and hardware. With experience in Laravel, CodeIgniter, PHP, JavaScript, MySQL, ESP8266, ESP32, LattePandaV2 and embedded systems, I am always enthusiastic about learning new technologies and transforming ideas into functional, reliable solutions.
                        </p>
                    </div>

                    <!-- Kartu/Pembungkus Core Expertise -->
                    <div class="mt-4 p-3 rounded-3 border border-secondary border-opacity-25 bg-dark bg-opacity-50">
                        <h5 class="text-emerald fs-6 mb-3">
                            <i class="bi bi-gear-fill me-2"></i>Core Expertise
                        </h5>

                        <div class="row g-3 text-start fs-7">
                            <div class="col-6 text-light"><i class="bi bi-check2-circle text-emerald me-2"></i>Web Development</div>
                            <div class="col-6 text-light"><i class="bi bi-check2-circle text-emerald me-2"></i>Embedded Systems</div>
                            <div class="col-6 text-light"><i class="bi bi-check2-circle text-emerald me-2"></i>IoT Integration</div>
                            <div class="col-6 text-light"><i class="bi bi-check2-circle text-emerald me-2"></i>Project Management</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="section skills-section">
    <div class="container">

        <div class="skills-heading reveal">
            <div class="skills-main-title">
                <i class="bi bi-tools"></i>
                <h2>Technical Skills & Technologies</h2>
            </div>

            <div class="skills-title-line"></div>
        </div>

        {{-- FRONTEND --}}
        <div class="skill-category reveal">
            <div class="skill-category-title">
                <i class="bi bi-palette-fill"></i>
                <span>Frontend Development</span>
            </div>

            <div class="tech-grid-new">

                <div class="tech-card">
                    <i class="devicon-html5-plain colored"></i>
                    <span>HTML5</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-css3-plain colored"></i>
                    <span>CSS3</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-javascript-plain colored"></i>
                    <span>JavaScript</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-bootstrap-plain colored"></i>
                    <span>Bootstrap</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-tailwindcss-original colored"></i>
                    <span>Tailwind</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-vuejs-plain colored"></i>
                    <span>Vue.js</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-react-original colored"></i>
                    <span>React</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-nuxtjs-plain colored"></i>
                    <span>Nuxt.js</span>
                </div>

            </div>
        </div>


        {{-- BACKEND --}}
        <div class="skill-category reveal">
            <div class="skill-category-title">
                <i class="bi bi-server"></i>
                <span>Backend Development</span>
            </div>

            <div class="tech-grid-new">

                <div class="tech-card">
                    <i class="devicon-php-plain colored"></i>
                    <span>PHP</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-laravel-original colored"></i>
                    <span>Laravel</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-codeigniter-plain colored"></i>
                    <span>CodeIgniter</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-nodejs-plain colored"></i>
                    <span>Node.js</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-mysql-plain colored"></i>
                    <span>MySQL</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-postgresql-plain colored"></i>
                    <span>PostgreSQL</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-firebase-plain colored"></i>
                    <span>Firebase</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-supabase-plain colored"></i>
                    <span>Supabase</span>
                </div>

            </div>
        </div>


        {{-- DEVOPS --}}
        <div class="skill-category reveal">
            <div class="skill-category-title">
                <i class="bi bi-wrench-adjustable"></i>
                <span>DevOps & Tools</span>
            </div>

            <div class="tech-grid-new">

                <div class="tech-card">
                    <i class="devicon-git-plain colored"></i>
                    <span>Git</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-github-original"></i>
                    <span>GitHub</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-gitlab-plain colored"></i>
                    <span>GitLab</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-postman-plain colored"></i>
                    <span>Postman</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-vscode-plain colored"></i>
                    <span>VS Code</span>
                </div>

                <div class="tech-card">
                    <i class="bi bi-microsoft"></i>
                    <span>Microsoft Office</span>
                </div>

            </div>
        </div>


        {{-- EMBEDDED --}}
        <div class="skill-category reveal">
            <div class="skill-category-title">
                <i class="bi bi-cpu-fill"></i>
                <span>Embedded</span>
            </div>

            <div class="tech-grid-new">

                 <div class="tech-card">
                    <i class="devicon-arduino-plain colored"></i>
                    <span>Arduino</span>
                </div>

                <div class="tech-card">
                    <i class="bi bi-cpu-fill embedded-icon"></i>
                    <span>Microcontroller</span>
                </div>

                <div class="tech-card">
                    <i class="bi bi-cpu-fill embedded-icon"></i>
                    <span>LattePanda V2</span>
                </div>

                <div class="tech-card">
                    <i class="devicon-cplusplus-plain colored"></i>
                    <span>C/C++</span>
                </div>

                <div class="tech-card">
                    <i class="bi bi-broadcast-pin embedded-icon"></i>
                    <span>MQTT</span>
                </div>

                <div class="tech-card">
                    <i class="bi bi-code-square embedded-icon"></i>
                    <span>Arduino IDE</span>
                </div>

                <div class="tech-card">
                    <i class="bi bi-diagram-3-fill embedded-icon"></i>
                    <span>GPIO & Sensors</span>
                </div>

                <div class="tech-card">
                    <i class="bi bi-wifi embedded-icon"></i>
                    <span>IoT</span>
                </div>

            </div>
        </div>

    </div>
</section>

<section id="projects" class="section section-soft">
    <div class="container">
        <div class="section-heading reveal">
            <div class="section-label">03 — Projects</div>
            <h2 class="section-title">Selected work.</h2>
            <p class="section-copy">Beberapa project yang dapat kamu jadikan showcase. Ganti deskripsi, gambar, dan link sesuai project aslimu.</p>
        </div>
        <div class="row g-4">
            @foreach($projects as $project)
            <div class="col-md-6">
                <article class="project-card glass-card reveal delay-{{ $loop->index }}">
                    <div class="project-visual"><i class="bi {{ $project['icon'] }}"></i><span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span></div>
                    <div class="p-4">
                        <div class="project-category">{{ $project['category'] }}</div>
                        <h3>{{ $project['title'] }}</h3>
                        <p class="section-copy">{{ $project['description'] }}</p>
                        <div class="tags mb-4">@foreach($project['tech'] as $tech)<span>{{ $tech }}</span>@endforeach</div>
                        <a href="{{ $project['link'] }}" class="project-link">View Project <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="experience" class="section">
    <div class="container">
        <div class="section-heading reveal">
            <div class="section-label">04 — Experience</div>
            <h2 class="section-title">Where I've learned & worked.</h2>
        </div>
        <div class="timeline">
            @foreach($experiences as $experience)
            <div class="timeline-item reveal">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="timeline-period">{{ $experience['period'] }}</span>
                    <h3>{{ $experience['role'] }}</h3>
                    <p>{{ $experience['company'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="achievement glass-card reveal">
            <div class="achievement-icon"><i class="bi bi-trophy-fill"></i></div>
            <div><div class="section-label">Achievement</div><h2>1st Place — KMIPN VI</h2><p>Juara 1 kategori Perancangan Bisnis TIK.</p></div>
            <div class="achievement-arrow"><i class="bi bi-arrow-up-right"></i></div>
        </div>
    </div>
</section>

<section id="contact" class="section contact-section">
    <div class="container">
        <div class="contact-card glass-card text-center reveal">
            <div class="section-label">05 — Contact</div>
            <h2 class="contact-title">Let's build something<br><span class="gradient-text">meaningful.</span></h2>
            <p class="section-copy mx-auto">Terbuka untuk kesempatan kerja, kolaborasi project, dan diskusi seputar teknologi.</p>
            <a href="mailto:emailkamu@example.com" class="btn btn-primary-custom btn-lg mt-3">Get In Touch <i class="bi bi-arrow-up-right"></i></a>
            <div class="hero-socials justify-content-center mt-4">
                <a href="#" aria-label="GitHub"><i class="bi bi-github"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="mailto:emailkamu@example.com" aria-label="Email"><i class="bi bi-envelope"></i></a>
                <a href="#" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>
    </div>
</section>

<footer class="footer"><div class="container d-flex flex-wrap justify-content-between gap-3"><span>© {{ date('Y') }} Muhammad Haris Suhud.</span><span>Built with Laravel & Bootstrap.</span></div></footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
