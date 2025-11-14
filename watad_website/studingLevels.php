<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>مركز الأجيال الصاعدة التعليمي</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- Add to head of all pages that need notifications -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
<!-- Always load in this exact order -->
<script src="js/config.js"></script>
<script src="js/auth.js"></script>
<script src="js/teachers.js"></script>
<script src="js/courses.js"></script>
<script src="js/advertisements.js"></script>
<script src="js/achievements.js"></script>
<script src="js/admin.js"></script>
<!-- Other scripts -->
  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link href="images/icon1.png" rel="icon">
</head>

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
    .stage-card .arrow {
      font-size: 22px;
      color: #fb8c00;
      transition: transform 0.3s;
    }
    .grade-list {
      margin-top: 15px;
    }
    .grade-card {
      background-color: #fff;
      border-radius: 8px;
      padding: 10px 15px;
      margin-bottom: 10px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
      cursor: pointer;
      transition: background 0.3s;
    }
    .grade-card:hover {
      background-color: #f0f0f0;
    }
    .grade-card .collapse .sub-grade {
      padding: 5px 20px;
    }
    .sub-grade a {
      text-decoration: none;
      color: #333;
      display: block;
      padding: 4px 0;
    }
    .sub-grade a:hover {
      color: #fb8c00;
    }
  </style>
<body>



  <?php include 'header.php'; ?>

  <!-- ترويسة التدريب -->

  <section class="page-header text-white" style="background-image: url('images/carousel-2.jpg'); padding: 10rem 2rem 4rem;
    text-align: center;
    margin-top: 0px;
    min-height: 50vh;">
    <div class="container text-center">
    <h1 class="display-3 fw-bold" style="color: #fb873f; text-align: center;">  المراحل الدراسية</h1>

    
    </div>
  </section>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
  
  <div class="row g-4 justify-content-center">

    <!-- المرحلة الابتدائية -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#primaryGrades">
        <img src="images/pngegg.png" alt="ابتدائية">
        <h5>المرحلة الابتدائية</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse grade-list" id="primaryGrades">
        <div class="grade-card"><a href="elementry.php">الصف الأول</a></div>
        <div class="grade-card"><a href="elementry.php">الصف الثاني</a></div>
        <div class="grade-card"><a href="elementry.php">الصف الثالث</a></div>
        <div class="grade-card"><a href="elementry.php">الصف الرابع</a></div>
        <div class="grade-card"><a href="elementry.php">الصف الخامس</a></div>
        <div class="grade-card"><a href="elementry.php">الصف السادس</a></div>
      </div>
    </div>

    <!-- المرحلة الإعدادية -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#prepGrades">
        <img src="images/pngegg3.png" alt="إعدادية">
        <h5>المرحلة الإعدادية</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse grade-list" id="prepGrades">
        <div class="grade-card"><a href="elementry.php">الصف السابع</a></div>
        <div class="grade-card"><a href="elementry.php">الصف الثامن</a></div>
        <div class="grade-card"><a href="elementry.php">الصف التاسع</a></div>
      </div>
    </div>

    <!-- المرحلة الثانوية -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#secondaryGrades">
        <img src="images/pngegg1.png" alt="ثانوية">
        <h5>المرحلة الثانوية</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse grade-list" id="secondaryGrades">
        <!-- الصف العاشر -->
        <div class="grade-card"><a href="secoundary.php">الصف العاشر</a></div>

        <!-- الحادي عشر -->
        <div class="grade-card" data-bs-toggle="collapse" data-bs-target="#grade11Sub">
          الحادي عشر
        </div>
        <div class="collapse sub-grade" id="grade11Sub">
          <a href="secoundary_s.php">علمي</a>
          <a href="secoundary_a.php">أدبي</a>
        </div>

        <!-- الثاني عشر -->
        <div class="grade-card" data-bs-toggle="collapse" data-bs-target="#grade12Sub">
          الثاني عشر
        </div>
        <div class="collapse sub-grade" id="grade12Sub">
          <a href="secoundary_s.php">علمي</a>
          <a href="secoundary_a.php">أدبي</a>
        </div>
      </div>
    </div>

  </div>
</div>

 <!-- الفوتر -->
 <?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
