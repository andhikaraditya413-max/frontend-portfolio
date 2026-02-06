<?php
$profile = json_decode(file_get_contents("http://localhost:3000/api/profile"),true);
$skills = json_decode(file_get_contents("http://localhost:3000/api/skills"),true);
$projects = json_decode(file_get_contents("http://localhost:3000/api/projects"),true);
?>

<!DOCTYPE html>
<html>
<head>
<title>Portfolio</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0f172a] text-white">

<!-- NAVBAR -->
<nav class="flex justify-between px-10 py-5 bg-[#0b1220]">
  <h1 class="text-xl font-bold text-blue-400">Pure Portfolio</h1>
  <div class="space-x-6 text-gray-300">
    <a href="#" class="hover:text-blue-400">Home</a>
    <a href="#skills" class="hover:text-blue-400">Skills</a>
    <a href="#projects" class="hover:text-blue-400">Projects</a>
  </div>
</nav>

<!-- HERO -->
<section class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center py-16 px-6">

  <!-- LEFT -->
  <div>
    <h2 class="text-4xl font-bold mb-3">
      Hi, I'm <?= $profile['name'] ?>
    </h2>

    <h3 class="text-3xl text-blue-400 mb-4">
      <?= $profile['title'] ?>
    </h3>

    <p class="text-gray-400 leading-relaxed">
      <?= $profile['bio'] ?>
    </p>

    <div class="mt-6 space-x-4">
      <button class="bg-blue-500 px-6 py-2 rounded hover:bg-blue-600">
        Contact Me
      </button>
    </div>
  </div>

  <!-- RIGHT -->
  <div class="flex justify-center">
    <img src="assets/WhatsApp Image 2026-02-03 at 13.34.30.jpeg" 
         class="w-72 h-72 object-cover rounded-full">
  </div>

</section>

<!-- SKILLS -->
<section id="skills" class="max-w-5xl mx-auto py-16 px-6 text-center">
  <h2 class="text-3xl font-bold mb-10">My Expertise</h2>

  <div class="grid md:grid-cols-3 gap-8">

  <?php foreach($skills as $s): ?>
    <div class="bg-[#1e293b] p-6 rounded-lg">
      <h3 class="text-xl mb-4"><?= $s['skill_name'] ?></h3>

      <div class="w-full bg-gray-700 h-3 rounded">
        <div class="bg-blue-500 h-3 rounded w-[80%]"></div>
      </div>

      <p class="text-sm text-gray-400 mt-2">80%</p>
    </div>
  <?php endforeach; ?>

  </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="max-w-5xl mx-auto py-16 px-6">
  <h2 class="text-3xl font-bold text-center mb-10">Projects</h2>

  <div class="grid md:grid-cols-2 gap-6">

  <?php foreach($projects as $p): ?>
    <div class="bg-[#1e293b] p-6 rounded-lg hover:scale-105 transition">

      <h3 class="text-xl font-bold mb-2 text-blue-400">
        <?= $p['title'] ?>
      </h3>

      <p class="text-gray-400 mb-4">
        <?= $p['description'] ?>
      </p>

      <a href="<?= $p['link'] ?>" 
         class="text-blue-400 hover:underline">
         View Project →
      </a>

    </div>
  <?php endforeach; ?>

  </div>
</section>

</body>
</html>
