<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>المواد الدراسية - مركز الأجيال الصاعدة التعليمي</title>

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
  <link href="css/styles.css" rel="stylesheet">
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
    .register-btn {
      margin-top: 10px;
    }
    .register-btn button {
      transition: background-color 0.3s ease;
    }
    .register-btn button:hover {
      background-color: #fb8c00;
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="page-header text-white" style="background-image: url('images/carousel-2.jpg'); padding: 5rem 2rem 4rem; text-align: center; min-height: 50vh;">
  <div class="container text-center">
    <h1 class="display-3 fw-bold" style="color: #fb873f;">المواد الدراسية</h1>
  </div>
</section>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
  <div class="row g-4 justify-content-center">

    <!-- مادة 1 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject1">
        <h5>لغة عربية</h5>
      </div>
      <div class="collapse subject-info" id="subject1">
        <p><strong>أيام الدراسة:</strong> السبت، الإثنين، الأربعاء</p>
        <p><strong>اسم المعلم:</strong> سارة علي</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

    <!-- مادة 2 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject2">
        <h5>رياضيات</h5>
      </div>
      <div class="collapse subject-info" id="subject2">
        <p><strong>أيام الدراسة:</strong> الأحد، الثلاثاء، الخميس</p>
        <p><strong>اسم المعلم:</strong> أحمد محمد</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

    <!-- مادة 3 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject3">
        <h5>فيزياء</h5>
      </div>
      <div class="collapse subject-info" id="subject3">
        <p><strong>أيام الدراسة:</strong> الاثنين، الأربعاء</p>
        <p><strong>اسم المعلم:</strong> خالد يوسف</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

    <!-- مادة 4 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject4">
        <h5>كيمياء</h5>
      </div>
      <div class="collapse subject-info" id="subject4">
        <p><strong>أيام الدراسة:</strong> السبت، الإثنين، الأربعاء</p>
        <p><strong>اسم المعلم:</strong> منى سمير</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

    <!-- مادة 5 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject5">
        <h5>أحياء</h5>
      </div>
      <div class="collapse subject-info" id="subject5">
        <p><strong>أيام الدراسة:</strong> الأحد، الثلاثاء، الخميس</p>
        <p><strong>اسم المعلم:</strong> ليلى عبد الله</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

    <!-- مادة 6 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject6">
        <h5>جغرافيا</h5>
      </div>
      <div class="collapse subject-info" id="subject6">
        <p><strong>أيام الدراسة:</strong> الاثنين، الأربعاء</p>
        <p><strong>اسم المعلم:</strong> سامي كريم</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

    <!-- مادة 7 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject7">
        <h5>فلسفة</h5>
      </div>
      <div class="collapse subject-info" id="subject7">
        <p><strong>أيام الدراسة:</strong> السبت، الإثنين، الأربعاء</p>
        <p><strong>اسم المعلم:</strong> فاطمة عبد الرحيم</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

    <!-- مادة 8 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject8">
        <h5>لغة إنجليزية</h5>
      </div>
      <div class="collapse subject-info" id="subject8">
        <p><strong>أيام الدراسة:</strong> الأحد، الثلاثاء، الخميس</p>
        <p><strong>اسم المعلم:</strong> يوسف نادر</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

    <!-- مادة 9 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject9">
        <h5>تاريخ</h5>
      </div>
      <div class="collapse subject-info" id="subject9">
        <p><strong>أيام الدراسة:</strong> الاثنين، الأربعاء</p>
        <p><strong>اسم المعلم:</strong> رامي عبد الفتاح</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

    <!-- مادة 10 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject10">
        <h5>إحصاء</h5>
      </div>
      <div class="collapse subject-info" id="subject10">
        <p><strong>أيام الدراسة:</strong> السبت، الإثنين، الأربعاء</p>
        <p><strong>اسم المعلم:</strong> عادل حسان</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

    <!-- مادة 11 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject11">
        <h5>علوم الكمبيوتر</h5>
      </div>
      <div class="collapse subject-info" id="subject11">
        <p><strong>أيام الدراسة:</strong> الأحد، الثلاثاء، الخميس</p>
        <p><strong>اسم المعلم:</strong> أمل جمال</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

    <!-- مادة 12 -->
    <div class="col-md-4">
      <div class="subject-card" data-bs-toggle="collapse" data-bs-target="#subject12">
        <h5>لغة فرنسية</h5>
      </div>
      <div class="collapse subject-info" id="subject12">
        <p><strong>أيام الدراسة:</strong> الاثنين، الأربعاء</p>
        <p><strong>اسم المعلم:</strong> مريم محمود</p>
        <div class="register-btn">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">تسجيل</button>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Modal تسجيل -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">تسجيل في المادة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="studentName" class="form-label">اسم الطالب</label>
            <input type="text" class="form-control" id="studentName" required>
          </div>
          <div class="mb-3">
            <label for="studentPhone" class="form-label">رقم الهاتف</label>
            <input type="tel" class="form-control" id="studentPhone" required>
          </div>
          <button type="submit" class="btn btn-primary">تسجيل</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
