<!-- Updated coursesSection.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>مركز الأجيال الصاعدة التعليمي</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <link href="css/style.css" rel="stylesheet">
  <link href="images/icon1.png" rel="icon">
<!-- Always load in this exact order -->
<script src="js/config.js"></script>
<script src="js/auth.js"></script>
<script src="js/teachers.js"></script>
<script src="js/courses.js"></script>
<script src="js/advertisements.js"></script>
<script src="js/achievements.js"></script>
<script src="js/admin.js"></script>
<!-- Other scripts -->
</head>
<body>

  <?php include 'header.php'; ?>

  <!-- ترويسة التدريب -->
  <section class="page-header text-white" style="background-image: url('images/carousel-2.jpg'); padding: 5rem 2rem 4rem;
    text-align: center;
    margin-top: 0px;
    min-height: 50vh;">
    <div class="container text-center">
      <h1 class="display-3 fw-bold" style="color: #fb873f; text-align: center;">قسم التدريب</h1>
    </div>
  </section>

  <!-- الدورات -->
  <div class="container py-5">
    <div class="row g-4" id="coursesContainer">
      <!-- Course cards will be populated here dynamically -->
      <div class="text-center w-100">
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">جاري التحميل...</span>
        </div>
        <p>جاري تحميل الدورات...</p>
      </div>
    </div>
  </div>

  <!-- Modal تسجيل -->
  <div class="modal fade" id="enrollmentModal" tabindex="-1" aria-labelledby="enrollmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="enrollmentModalLabel">تأكيد التسجيل في الدورة</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>هل أنت متأكد من رغبتك في التسجيل في هذه الدورة؟</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
          <button type="button" class="btn btn-primary" id="confirmEnrollBtn" onclick="confirmEnrollment(this.getAttribute('data-course-id'))">تأكيد التسجيل</button>
        </div>
      </div>
    </div>
  </div>

  <!-- الفوتر -->
  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/auth.js"></script>
  <script src="js/courses.js"></script>
  <script>
    // Load courses when page loads
    document.addEventListener('DOMContentLoaded', async function() {
      const courses = await getAllCourses();
      displayCourses(courses, 'coursesContainer');
    });
  </script>
</body>
</html>