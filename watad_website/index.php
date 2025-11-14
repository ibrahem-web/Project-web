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
  <Style>
    body { margin: 0; font-family: Arial, sans-serif; }

    .ad-banner {
      position: relative;
      width: 100%;
      height: 300px;
      cursor: pointer;
    }

    .ad-banner img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .ad-text {
      position: absolute;
      bottom: 20px;
      left: 30px;
      background: rgba(0,0,0,0.6);
      color: white;
      padding: 10px 20px;
      font-size: 24px;
      border-radius: 8px;
    }

    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.7);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: white;
      padding: 20px;
      border-radius: 10px;
      width: 90%;
      max-width: 600px;
      text-align: center;
      position: relative;
    }

    .modal-content img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .close {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 28px;
      font-weight: bold;
      color: #333;
      cursor: pointer;
    }

    .loading-spinner {
      text-align: center;
      padding: 30px;
    }
  </style>
</head>

<body>

<?php include 'header.php'; ?>

<section class="hero">
  <div class="container text-center">
      <h1 class="display-3 fw-bold" style="color: #fb873f; text-align: center;">مركز الأجيال الصاعدة التعليمي</h1>
      <p>منصة تعليمية إلكترونية توفر بيئة متطورة بأسلوب حديث ومبسط لدعم الطلاب في جميع المراحل لتحقيق النجاح والتفوق.</p>
      <a href="aboutus.php" class="btn btn-orange">من نحن</a>
  </div>
</section>
<!-- Hero End -->

<!-- Advertisements Section -->
<section class="container my-4" style="border-radius: 30px;">
  <h1 class="mb-3" style="color: #fb873f; text-align: center;">إعلانات مركز أجيال</h1>

  <div id="advertisementContainer">
    <!-- Loading spinner -->
    <div class="loading-spinner">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">جاري التحميل...</span>
      </div>
      <p>جاري تحميل الإعلانات...</p>
    </div>
  </div>
</section>

<!-- Features Start -->
<section class="container my-5">
  <div class="row g-2 text-center">
    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
      <h1 style="color: #fb873f;">استثمر في أهدافك المهنية مع مركز الأجيال الصاعدة</h1>
      <p class="mb-5">الدورات التعليمية، المشاريع، التخصصات، والشهادات المهنية في مجالات متنوعة، مع أفضل المعلمين</p>
    </div>
  </div>
  
  <div class="row text-center">
    <div class="col-md-4">
      <div class="feature-box">
        <img src="images/icon1.png" alt="" width="60px" class="mb-4">
        <h3>خطة دراسية متكاملة</h3>
        <p>محاضرات يومية سهلة الاستخدام، بأسلوب سلس مع نخبة من المعلمين المميزين.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-box">
        <img src="images/icon2.png" alt="" width="60px" class="mb-4">
        <h3>اسعار تتناسب الجميع</h3>
        <p>سهولة الاشتراك والوصول إلى المواد التعليمية بمرونة عبر بطاقات مسبقة الدفع.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-box">
        <img src="images/icon4.png" alt="" width="60px" class="mb-4">
        <h3>مميزات</h3>
        <p>متابعة الدروس و المحاضرات في أي وقت ومن أي مكان بجودة عالية وشرح مبسط ومباشر.</p>
      </div>
    </div>
  </div>
</section>

<!-- Achievements Section -->
<section class="container my-5">
  <h1 class="mb-3" style="color: #fb873f; text-align: center;">إنجازات المركز</h1>
  
  <div id="achievementsContainer">
    <!-- Loading spinner -->
    <div class="loading-spinner">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">جاري التحميل...</span>
      </div>
      <p>جاري تحميل الإنجازات...</p>
    </div>
  </div>
</section>

<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
        <div class="position-relative h-100">
          <img class="img-fluid position-absolute w-100 h-100" src="images/carousel-1.jpg" alt="" style="object-fit: cover;">
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="mb-3" style="color: #fb873f;">عن المركز</h1>
        <h2 class="mb-4" style="color: #fb873f;">مرحباً بكم في مركز الأجيال الصاعدة</h2>
        <p class="mb-4">في مركز الأجيال الصاعدة، نؤمن بتوفير تجارب تعلم مبتكرة وقابلة للتكيف مع جدولك الزمني وأسلوبك التعليمي. انضم إلينا في احتضان مستقبل التعليم واكتشاف إمكانياتك مع الدورات التدريبية الشاملة لدينا.</p>
        <p class="mb-4"> مرحباً بك في مركز الأجيال الصاعدة، بوابتك لفرص تعلم لا حدود لها. نحن ملتزمون بجعل التعليم في متناول الجميع، نقدم مجموعة متنوعة من الدورات التي يقدمها خبراء في مجالاتهم. مهمتنا هي تمكين المتعلمين في جميع أنحاء العالم، وتوفير منصة تعتمد على المجتمع حيث المعرفة ليس لها حدود.</p>
        <div class="row gy-2 gx-4 mb-4">
          <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right  me-2"></i>مدربون خبراء</p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>جلسات تفاعلية مباشرة</p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>دورات شاملة ومتنوعة</p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>مشاركة المجتمع</p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>مسارات تعلم مخصصة</p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>شهادات معترف بها</p>
          </div>
        </div>
        <a href="#" class="btn btn-orange" style="border-radius: 15px;">تواصل معنا</a>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- FAQ Start  -->
<div class="container-xxl py-5 category">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="mb-3" style="color: #fb873f;">أسئلة شائعة</h1>
    </div>
    <div class="row g-2">
      <div class="col-12">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                ما هو مركز الأجيال الصاعدة التعليمي؟
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                مركز الأجيال الصاعدة هو مبادرة تعليمية تهدف إلى تقديم دورات تدريبية شاملة في مختلف المجالات من خلال الإنترنت، لدعم الطلاب في جميع مراحل التعليم لتحقيق النجاح والتفوق.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                لماذا يجب أن أختار مركز الأجيال الصاعدة للدورات ؟
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                مركز الأجيال الصاعدة يقدم دورات تعليمية مجانية عالية الجودة تتيح للمتعلمين الوصول إلى المعرفة والمهارات التي تساعدهم على التقدم في حياتهم المهنية.
                كما أن الدورات مصممة لتكون مرنة وسهلة الاستخدام، مما يسمح للمتعلمين بالتعلم في أي وقت ومن أي مكان.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                كم عدد الدورات المجانية التي يمكنني التسجيل فيها في نفس الوقت؟
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                يمكنك التسجيل في العديد من الدورات المجانية في نفس الوقت حسب رغبتكو
                ومع ذلك، يُفضل أن تختار الدورات التي تتناسب مع جدولك الزمني واهتماماتك لضمان تحقيق أقصى استفادة من التعلم.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                كيف يمكنني التسجيل في هذه الدورات؟
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                يمكنك التسجيل عن طريق النقر على زر "التسجيل" في أعلى الصفحة باستخدام بريدك الإلكتروني أو حسابك في Google.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                ما هي الدورات  الأكثر شعبية التي يقدمها مركز الأجيال الصاعدة؟
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                يركز مركز الأجيال الصاعدة على المفاهيم والمهارات المطلوبة في سوق العمل، حيث يمكن للمتعلمين تطوير المهارات والمعرفة التي تتناسب مع احتياجات الصناعة في المجال الذي يختارونه. ويوفر المركز مجموعة واسعة من الدورات في مجالات مرموقة، مما يساعد المتعلمين في جميع أنحاء العالم على تحقيق أهدافهم المهنية.

                <p>بعض الدورات المجانية الأكثر شعبية التي يقدمها مركز الأجيال الصاعدة والتي تتمتع بطلب عالٍ تشمل:</p>
                <ul>
                  <li>دورات علوم البيانات المجانية</li>
                  <li>دورات الذكاء الاصطناعي المجانية</li>
                  <li>دورات البرمجة المجانية</li>
                  <li>دورات الحوسبة السحابية المجانية</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FAQ End  -->

<?php include 'footer.php'; ?>

<!-- Bootstrap and other scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Load scripts in correct order -->
<script src="js/config.js"></script>
<script src="js/auth.js"></script>
<script src="js/advertisements.js"></script>
<script src="js/achievements.js"></script>

<script>
  // Load advertisements and achievements when page loads
  document.addEventListener('DOMContentLoaded', async function() {
    try {
      // Load and display advertisements
      const advertisements = await getActiveAdvertisements();
      createAdvertisementCarousel(advertisements, 'advertisementContainer');

      // Load and display achievements
      const achievements = await getAllAchievements();
      displayAchievements(achievements, 'achievementsContainer');

      // Check if user is already logged in and update UI accordingly
      if (typeof updateHeaderLoginStatus === 'function') {
        updateHeaderLoginStatus();
      }
    } catch (error) {
      console.error('Error loading page data:', error);
    }
  });

  // Modal functions (retaining original functionality)
  function openModal(id) {
    document.getElementById(id).style.display = 'flex';
  }

  function closeModal(id) {
    document.getElementById(id).style.display = 'none';
  }

  window.addEventListener('click', function (e) {
    document.querySelectorAll('.modal').forEach(modal => {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
  });
</script>

</body>
</html>