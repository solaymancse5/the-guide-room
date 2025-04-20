<?php include 'header.php'; ?>

<!-- Home Section -->
<section id="home" class="py-16 text-center">
  <h2 class="text-4xl font-bold mb-4">Welcome to The Guide Room</h2>
  <p class="text-lg">Your trusted place for HSC Science education – Physics, Chemistry, Math & ICT</p>
</section>

<!-- Courses Section -->
<section id="courses" class="py-12 bg-white">
  <div class="container mx-auto text-center">
    <h3 class="text-3xl font-semibold mb-6">Our Courses</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
      <?php
        $courses = ['Physics', 'Chemistry', 'Mathematics', 'ICT'];
        foreach($courses as $course) {
          echo \"<div class='p-4 bg-blue-50 rounded-xl shadow'>
                  <h4 class='text-xl font-bold'>$course</h4>
                </div>\";
        }
      ?>
    </div>
  </div>
</section>

<!-- Notes Section -->
<section id="notes" class="py-12">
  <div class="container mx-auto text-center">
    <h3 class="text-2xl font-semibold mb-4">Download Class Notes</h3>
    <p class="text-gray-600">Coming soon...</p>
  </div>
</section>

<!-- Videos Section -->
<section id="videos" class="py-12 bg-white">
  <div class="container mx-auto text-center">
    <h3 class="text-2xl font-semibold mb-4">Watch Our Videos</h3>
    <p class="text-gray-600">Coming soon...</p>
  </div>
</section>

<!-- Results Section -->
<section id="results" class="py-12">
  <div class="container mx-auto text-center">
    <h3 class="text-2xl font-semibold mb-4">Student Results</h3>
    <p class="text-gray-600">Feature coming soon...</p>
  </div>
</section>

<?php include 'footer.php'; ?>
