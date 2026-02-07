<?php
$base = "https://backend-portfolio-production-4891.up.railway.app";
$profile = json_decode(file_get_contents("http://localhost:3000/api/profile"),true);
$skills = json_decode(file_get_contents("http://localhost:3000/api/skills"),true);
$projects = json_decode(file_get_contents("http://localhost:3000/api/projects"),true);
?>

<!DOCTYPE html>
<html>
<head>
<title>Portfolio</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://unpkg.com/vanilla-tilt@1.7.0/dist/vanilla-tilt.min.js"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
body {
  background: linear-gradient(
    -45deg,
    #0f172a,
    #020617,
    #0a192f,
    #020617
  );
  background-size: 400% 400%;
  animation: gradientMove 15s ease infinite;
}

@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
</style>
<style>
/* Neon Grid */
body::before{
  content:"";
  position:fixed;
  inset:0;
  background-image:
    linear-gradient(rgba(59,130,246,0.15) 1px, transparent 1px),
    linear-gradient(90deg, rgba(59,130,246,0.15) 1px, transparent 1px);
  background-size:40px 40px;
  z-index:-1;
}
</style>
<style>
.parallax-bg {
  background-image: url('https://images.unsplash.com/photo-1531297484001-80022131f5a1');
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
}
</style>
<style>
.hobby-img {
  overflow: hidden;
  border-radius: 12px;
}

.hobby-photo {
  transition: transform 0.3s ease;
  animation: breathing 6s infinite ease-in-out;
}

/* Efek hidup (zoom pelan) */
@keyframes breathing {
  0% { transform: scale(1); }
  50% { transform: scale(1.08); }
  100% { transform: scale(1); }
}

/* Hover zoom */
.hobby-img:hover .hobby-photo {
  transform: scale(1.15);
}
</style>

</head>

<body class="bg-[#0f172a] text-white">
<div id="particles-js" class="fixed inset-0 -z-10"></div>
<!-- NAVBAR -->
<nav class="sticky top-0 backdrop-blur-md bg-white/10 border-b border-white/10 flex justify-between px-10 py-5">
  <h1 class="text-xl font-bold text-blue-400">Pure Portfolio</h1>
  <div class="space-x-6 text-gray-300">
    <a href="#" class="hover:text-blue-400">Home</a>
    <a href="#skills" class="hover:text-blue-400">Skills</a>
    <a href="#hobby" class="hover:text-blue-400 transition">Hobby</a>
  </div>
</nav>

<!-- HERO -->
<section class="relative parallax max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center py-16 px-6">

  <!-- LEFT -->
  <div>
    <h2 class="text-4xl font-bold mb-3">
      Hi, I'm <?= $profile['name'] ?>
    </h2>

    <h3 class="text-3xl text-blue-400 mb-4">
  <span id="typing"></span>
    </h3>

    <p class="text-gray-400 leading-relaxed">
      <?= $profile['bio'] ?>
    </p>

    <div class="mt-6 space-x-4">
      <button class="bg-blue-500 px-6 py-2 rounded hover:bg-blue-600">
        Contact Me
      </button>
    </div>
    <div class="flex gap-6 mt-6 justify-center md:justify-start">

  <!-- Instagram -->
  <a href="https://instagram.com/andhkadmaprdtyagtgbgt" 
     target="_blank"
     class="text-2xl text-pink-500 
            hover:scale-125 
            hover:shadow-[0_0_20px_#ec4899]
            transition duration-300">

    <i class="fab fa-instagram"></i>
  </a>

  <!-- TikTok -->
  <a href="https://tiktok.com/@andhika.raditya7" 
     target="_blank"
     class="text-2xl text-white 
            hover:scale-125 
            hover:shadow-[0_0_20px_#25F4EE]
            transition duration-300">

    <i class="fab fa-tiktok"></i>
  </a>

</div>

  </div>

  <!-- RIGHT -->
  <div class="flex justify-center">
    
    <img src="assets/WhatsApp Image 2026-02-03 at 13.34.30.jpeg" 
         class="relative w-72 h-72 object-cover 
       rounded-full border border-blue-500/70
       backdrop-blur-lg
       shadow-[0_0_40px_rgba(59,130,246,0.8)]
       transform transition duration-500
       group-hover:scale-110">
  </div>

</section>

<!-- SKILLS -->
<section id="skills" class="max-w-5xl mx-auto py-16 px-6 text-center">
  <h2 class="text-3xl font-bold mb-10">My Expertise</h2>

  <div class="grid md:grid-cols-3 gap-8">

  <?php foreach($skills as $s): ?>
    <div class="tilt bg-[#1e293b] p-6 rounded-lg">
      <h3 class="text-xl mb-4"><?= $s['skill_name'] ?></h3>

      <div class="w-full bg-gray-700 h-3 rounded">
        <div class="bg-blue-500 h-3 rounded w-[80%]"></div>
      </div>

      <p class="text-sm text-gray-400 mt-2">80%</p>
    </div>
  <?php endforeach; ?>

  </div>
</section>
<!-- HOBBY -->
<section id="hobby" class="relative py-20 overflow-hidden">
  <h2 class="text-4xl font-bold text-center mb-10">My Hobbies</h2>

  <div class="grid md:grid-cols-3 gap-8">

    <!-- Hobby 1 -->
    <div class="tilt bg-[#1e293b] rounded-xl overflow-hidden shadow-lg hover:shadow-blue-500/30 transition">
    
      <img src="assets/kalap.jpg.jpeg" 
           class="hobby-photo w-full h-52 object-cover rounded-xl">

       <div class="p-5">
        <h3 class="text-xl font-bold text-blue-400">Banteng</h3>
        <p class="text-gray-400 mt-2">
          Saya selain bisa ngoding saya juga bisa kalap
         kalau kalap saya kereng medeni
        </p>
      </div>

    </div>

    <!-- Hobby 2 -->
    <div class="tilt bg-[#1e293b] rounded-xl overflow-hidden shadow-lg hover:shadow-blue-500/30 transition">

      <img src="assets/Pendekar.jpg.jpeg" 
           class="hobby-photo w-full h-52 object-cover rounded-xl">

      <div class="p-5">
        <h3 class="text-xl font-bold text-blue-400">Pendekar</h3>
        <p class="text-gray-400 mt-2">
          Tidak hanya kalap saya juga
          orang pintar dalam arti dukun
          saya juga kadang dipanggil mbah,gus,dll
        </p>
      </div>

    </div>

    <!-- Hobby 3 -->
    <div class="tilt bg-[#1e293b] rounded-xl overflow-hidden shadow-lg hover:shadow-blue-500/30 transition">

      <img src="assets/dolen.jpg.jpeg" 
           class="hobby-photo w-full h-52 object-cover rounded-xl">

      <div class="p-5">
        <h3 class="text-xl font-bold text-blue-400">dolen</h3>
        <p class="text-gray-400 mt-2">
          kehidupan saya tidak hanya mistis saja 
          saya juga dolen ke pantai dll yang penting
          tidak bermain wanitaa
        </p>
      </div>

    </div>

  </div>

</section>

<script>
new Typed("#typing", {
  strings: ["Web Developer UI/UX","Sing ganteng dewe","Ganok Tunggale"],
  typeSpeed: 80,
  backSpeed: 50,
  loop: true
});
</script>
<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

<script>
particlesJS("particles-js", {
  particles: {
    number: { value: 100 },
    color: { value: ["#3b82f6","#60a5fa","#93c5fd"] },
    shape: { type: "circle" },
    opacity: { value: 0.5 },
    size: { value: 3 },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#3b82f6",
      opacity: 0.3,
      width: 1
    },
    move: {
      enable: true,
      speed: 2,
      out_mode: "bounce"
    }
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: {
        enable: true,
        mode: "grab"
      },
      onclick: {
        enable: true,
        mode: "push"
      }
    },
    modes: {
      grab: {
        distance: 200,
        line_linked: { opacity: 0.8 }
      },
      push: { particles_nb: 4 }
    }
  },
  retina_detect: true
});
</script>
<script>
ScrollReveal().reveal("section", {
  distance: "60px",
  duration: 1500,
  origin: "bottom",
  interval: 200,
  reset: false
});
</script>
<script>
window.addEventListener("scroll", function(){
  const parallax = document.querySelector(".parallax");
  let offset = window.pageYOffset;
  parallax.style.transform = "translateY(" + offset * 0.2 + "px)";
});
</script>

</body>
</html>
