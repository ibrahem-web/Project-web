<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>الطباعة و التصوير - مركز الأجيال الصاعدة التعليمي</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- Add to head of all pages that need notifications -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script> new WOW().init(); </script>
<!-- Always load in this exact order -->
<script src="js/config.js"></script>
<script src="js/auth.js"></script>
<script src="js/teachers.js"></script>
<script src="js/courses.js"></script>
<script src="js/advertisements.js"></script>
<script src="js/achievements.js"></script>
<script src="js/admin.js"></script>
<!-- Other scripts -->
  <link href="css/style.css" rel="stylesheet">
  <link href="images/icon1.png" rel="icon">

  <style>
    .subject-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 1rem;
      cursor: pointer;
      text-align: center;
      position: relative;
      transition: all 0.3s ease;
      border: 1px solid #ddd;
    }

    .subject-card:hover {
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      border-color: #fb8c00;
    }

    .subject-card h5 {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 10px;
      color: black;
      transition: color 0.3s ease;
    }

    .subject-card:hover h5 {
      color: #fb8c00;
    }

    .subject-info {
      margin-top: 15px;
      background-color: #fff;
      border-radius: 8px;
      padding: 10px 15px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    }

    .subject-info a {
      display: block;
      color: #0d6efd;
      text-decoration: none;
      margin-bottom: 5px;
      transition: color 0.3s ease;
    }

    .subject-info a:hover {
      color: #fb8c00;
    }

    .subject-card img {
      border-radius: 8px;
      margin-bottom: 15px;
      width: 60px;        /* تصغير الصورة */
      height: 60px;       /* تحديد الارتفاع */
      object-fit: cover;   /* الحفاظ على نسبة الصورة */
      margin-left: auto;
      margin-right: auto;
      display: block;
    }

    .subject-card-container {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .filter-container {
      margin-bottom: 30px;
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="page-header text-white" style="background-image: url('images/carousel-2.jpg'); padding: 5rem 2rem 4rem; text-align: center; min-height: 50vh;">
  <div class="container text-center">
    <h1 class="display-3 fw-bold" style="color: #fb873f;">الطباعة و التصوير</h1>
  </div>
</section>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
  
  <!-- قسم الفلاتر -->
  <div class="filter-container">
    <h4>تصفية المستندات</h4>
    <select class="form-select" id="filter" onchange="filterDocuments()">
      <option value="">اختر نوع المستند</option>
      <option value="guide">دليل إرشادي</option>
      <option value="form">نموذج استمارة</option>
      <option value="notes">ملزمة مشروحة</option>
      <option value="samples">نماذج امتحانات</option>
    </select>
  </div>

  <div class="subject-card-container">
    <!-- دليل إرشادي - مستند 1 -->
    <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#guide1" data-category="guide">
      <img src="images/icon1.png" alt="دليل الطباعة" class="img-fluid">
      <h5>دليل الطباعة</h5>
      <div class="collapse subject-info" id="guide1">
        <p><strong>روابط التحميل:</strong></p>
        <a href="files/printing_guide.pdf" download>📄 دليل الطباعة</a>
      </div>
    </div>

    <!-- نموذج استمارة - مستند 2 -->
    <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#form1" data-category="form">
      <img src="images/icon1.png" alt="نموذج استمارة" class="img-fluid">
      <h5>نموذج استمارة التسجيل</h5>
      <div class="collapse subject-info" id="form1">
        <p><strong>روابط التحميل:</strong></p>
        <a href="files/registration_form.pdf" download>📄 استمارة التسجيل</a>
      </div>
    </div>

    <!-- ملزمة مشروحة - مستند 3 -->
    <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#notes1" data-category="notes">
      <img src="images/icon1.png" alt="اللغة العربية" class="img-fluid">
      <h5>اللغة العربية</h5>
      <div class="collapse subject-info" id="notes1">
        <p><strong>روابط التحميل:</strong></p>
        <a href="files/arabic_notes.pdf" download>📄 ملزمة مشروحة</a>
        <a href="files/arabic_samples.pdf" download>📄 نماذج امتحانات</a>
      </div>
    </div>

    <!-- نماذج امتحانات - مستند 4 -->
    <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#samples1" data-category="samples">
      <img src="images/icon1.png" alt="نماذج امتحانات" class="img-fluid">
      <h5>نماذج امتحانات للرياضيات</h5>
      <div class="collapse subject-info" id="samples1">
        <p><strong>روابط التحميل:</strong></p>
        <a href="files/math_samples.pdf" download>📄 نماذج امتحانات</a>
      </div>
    </div>

  </div>

</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function filterDocuments() {
    const filterValue = document.getElementById("filter").value;
    const cards = document.querySelectorAll('.subject-card');
    cards.forEach(card => {
      if (filterValue === "" || card.getAttribute('data-category') === filterValue) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  }
</script>

</body>
</html>
