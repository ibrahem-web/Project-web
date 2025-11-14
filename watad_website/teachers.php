<!-- Updated teachers.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>المعلمون - مركز الأجيال الصاعدة التعليمي</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script> new WOW().init(); </script>
  <link href="css/style.css" rel="stylesheet">
  <link href="images/icon1.png" rel="icon">
  <script src="js/config.js"></script>
<script src="js/auth.js"></script>
<script src="js/advertisements.js"></script>
<script src="js/achievements.js"></script>
<!-- Other scripts -->
  <style>
    .stage-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 1rem;
      cursor: pointer;
      text-align: center;
      position: relative;
      transition: all 0.3s ease;
    }
    .stage-card:hover {
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    .stage-card img {
      width: 100px;
      height: 100px;
      object-fit: contain;
      margin-bottom: 10px;
    }
    .stage-card h5 {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .arrow {
      font-size: 22px;
      color: #fb8c00;
    }
    .teacher-info {
      margin-top: 15px;
      background-color: #fff;
      border-radius: 8px;
      padding: 10px 15px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    }
    .loading-spinner {
      text-align: center;
      padding: 50px 0;
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="page-header text-white" style="background-image: url('images/carousel-2.jpg'); padding: 5rem 2rem 4rem; text-align: center; min-height: 50vh;">
  <div class="container text-center">
    <h1 class="display-3 fw-bold" style="color: #fb873f;">المعلمون</h1>
  </div>
</section>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
  <div class="row g-4 justify-content-center" id="teachersContainer">
    <!-- Loading spinner -->
    <div class="loading-spinner">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">جاري التحميل...</span>
      </div>
      <p>جاري تحميل بيانات المعلمين...</p>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Load scripts in correct order - CONFIG FIRST -->
<!-- Always load in this exact order -->
<script src="js/config.js"></script>
<script src="js/auth.js"></script>
<script src="js/teachers.js"></script>
<script src="js/courses.js"></script>
<script src="js/advertisements.js"></script>
<script src="js/achievements.js"></script>
<script src="js/admin.js"></script>

<script>
  // Load teachers when page loads
  document.addEventListener('DOMContentLoaded', async function() {
    try {
      console.log('DOM loaded, loading teachers...');
      
      // Wait a bit for all scripts to load
      await new Promise(resolve => setTimeout(resolve, 100));
      
      // Check if functions are available
      if (typeof getAllTeachers === 'undefined') {
        console.error('getAllTeachers function not available');
        return;
      }
      
      const teachers = await getAllTeachers();
      console.log('Teachers loaded:', teachers);
      
      if (typeof displayTeachers === 'undefined') {
        console.error('displayTeachers function not available');
        return;
      }
      
      displayTeachers(teachers, 'teachersContainer');
    } catch (error) {
      console.error('Error in teachers page:', error);
      
      // Show error message to user
      const container = document.getElementById('teachersContainer');
      if (container) {
        container.innerHTML = '<p class="text-center text-danger">حدث خطأ في تحميل بيانات المعلمين</p>';
      }
    }
  });
</script>

</body>
</html>