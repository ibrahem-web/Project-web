<!-- profile.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>الملف الشخصي - مركز الأجيال الصاعدة التعليمي</title>

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
  <link href="css/style.css" rel="stylesheet">
  <link href="images/icon1.png" rel="icon">
  
  <style>
    .profile-section {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      padding: 20px;
      margin-bottom: 30px;
    }
    
    .profile-section h2 {
      color: #fb873f;
      margin-bottom: 20px;
    }
    
    .loading-spinner {
      text-align: center;
      padding: 30px;
    }
    
    .password-match {
      font-size: 12px;
      margin-left: 10px;
    }
    
    .enrolled-courses {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }
    
    .course-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      transition: transform 0.3s ease;
    }
    
    .course-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .course-title {
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }
    
    .course-teacher {
      font-size: 14px;
      color: #666;
    }
    
    .course-duration {
      font-size: 14px;
      color: #888;
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <?php include 'header.php'; ?>

  <section class="page-header text-white" style="background-image: url('images/carousel-2.jpg'); padding: 5rem 2rem 4rem; text-align: center; min-height: 50vh;">
    <div class="container text-center">
      <h1 class="display-3 fw-bold" style="color: #fb873f;">الملف الشخصي</h1>
    </div>
  </section>

  <div class="container my-5">
    <div class="row">
      <div class="col-md-4">
        <div class="profile-section">
          <h2>معلومات الحساب</h2>
          <div id="profileInfoContainer">
            <div class="loading-spinner">
              <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">جاري التحميل...</span>
              </div>
              <p>جاري تحميل معلومات الحساب...</p>
            </div>
          </div>
        </div>
        
        <div class="profile-section">
          <h2>تحديث معلومات الحساب</h2>
          <form id="updateProfileForm">
            <div class="mb-3">
              <label for="fullName" class="form-label">الاسم الكامل</label>
              <input type="text" class="form-control" id="fullName" name="fullName">
            </div>
            <div class="mb-3">
              <label for="phoneNumber" class="form-label">رقم الهاتف</label>
              <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber">
            </div>
            <button type="submit" class="btn btn-orange">تحديث المعلومات</button>
          </form>
        </div>
        
        <div class="profile-section">
          <h2>تغيير كلمة المرور</h2>
          <form id="changePasswordForm">
            <div class="mb-3">
              <label for="oldPassword" class="form-label">كلمة المرور الحالية</label>
              <input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
            </div>
            <div class="mb-3">
              <label for="newPassword" class="form-label">كلمة المرور الجديدة</label>
              <input type="password" class="form-control" id="newPassword" name="newPassword" required>
            </div>
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">تأكيد كلمة المرور الجديدة</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
              <span id="passwordMatch" class="password-match"></span>
            </div>
            <button type="submit" class="btn btn-orange" id="changePasswordBtn" disabled>تغيير كلمة المرور</button>
          </form>
        </div>
      </div>
      
      <div class="col-md-8">
        <div class="profile-section">
          <h2>الدورات المسجل فيها</h2>
          <div id="enrolledCoursesContainer">
            <div class="loading-spinner">
              <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">جاري التحميل...</span>
              </div>
              <p>جاري تحميل الدورات المسجل فيها...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/auth.js"></script>
  <script src="js/courses.js"></script>
  // Replace the entire script section in profile.php with this:

<script>
    document.addEventListener('DOMContentLoaded', async function() {
      // Check if user is logged in
      if (!isLoggedIn()) {
        window.location.href = 'login.php';
        return;
      }
      
      // Load user profile
      await loadUserProfile();
      
      // Load enrolled courses
      await loadEnrolledCourses();
      
      // Setup form submission handlers
      document.getElementById('updateProfileForm').addEventListener('submit', updateProfile);
      document.getElementById('changePasswordForm').addEventListener('submit', changePassword);
      
      // Password confirmation check
      const newPassword = document.getElementById('newPassword');
      const confirmPassword = document.getElementById('confirmPassword');
      const passwordMatch = document.getElementById('passwordMatch');
      const changePasswordBtn = document.getElementById('changePasswordBtn');
      
      function checkPasswordMatch() {
        if (confirmPassword.value !== '') {
          if (newPassword.value === confirmPassword.value) {
            passwordMatch.textContent = 'كلمتا المرور متطابقتان ✓';
            passwordMatch.style.color = 'green';
            changePasswordBtn.disabled = false;
          } else {
            passwordMatch.textContent = 'كلمتا المرور غير متطابقتين ✗';
            passwordMatch.style.color = 'red';
            changePasswordBtn.disabled = true;
          }
        } else {
          passwordMatch.textContent = '';
          changePasswordBtn.disabled = true;
        }
      }
      
      newPassword.addEventListener('input', checkPasswordMatch);
      confirmPassword.addEventListener('input', checkPasswordMatch);
    });
    
    // Load user profile
    async function loadUserProfile() {
      try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/users/profile`, {
          headers: {
            'Authorization': `Bearer ${token}`
          }
        });
        
        if (!response.ok) {
          throw new Error('Failed to load profile');
        }
        
        const userData = await response.json();
        displayUserProfile(userData);
        
        // Populate update form
        document.getElementById('fullName').value = userData.fullName || '';
        document.getElementById('phoneNumber').value = userData.phoneNumber || '';
        
      } catch (error) {
        console.error('Error loading profile:', error);
        Toastify({
          text: "فشل في تحميل معلومات الملف الشخصي",
          duration: 3000,
          close: true,
          gravity: "top",
          position: "center",
          backgroundColor: "#F44336",
        }).showToast();
      }
    }
    
    // Display user profile
    function displayUserProfile(user) {
      const container = document.getElementById('profileInfoContainer');
      
      const html = `
        <div class="mb-3">
          <p><strong>اسم المستخدم:</strong> ${user.username}</p>
          <p><strong>البريد الإلكتروني:</strong> ${user.email}</p>
          <p><strong>الاسم الكامل:</strong> ${user.fullName || 'غير محدد'}</p>
          <p><strong>رقم الهاتف:</strong> ${user.phoneNumber || 'غير محدد'}</p>
        </div>
      `;
      
      container.innerHTML = html;
    }
    
    // Load enrolled courses
    async function loadEnrolledCourses() {
      try {
        const courses = await getUserEnrolledCourses();
        displayEnrolledCourses(courses);
      } catch (error) {
        console.error('Error loading enrolled courses:', error);
        
        // Show fallback message
        const container = document.getElementById('enrolledCoursesContainer');
        container.innerHTML = '<p>فشل في تحميل الدورات المسجل فيها</p>';
      }
    }
    
    // Display enrolled courses
    function displayEnrolledCourses(courses) {
      const container = document.getElementById('enrolledCoursesContainer');
      
      if (!courses || courses.length === 0) {
        container.innerHTML = '<p>لم تقم بالتسجيل في أي دورة بعد.</p>';
        return;
      }
      
      let html = '<div class="enrolled-courses">';
      
      courses.forEach(course => {
        html += `
          <div class="course-card">
            <div class="course-title">${course.name}</div>
            <div class="course-teacher">المعلم: ${course.teacher ? course.teacher.name : 'غير محدد'}</div>
            <div class="course-duration">المدة: ${course.duration || 'غير محددة'}</div>
          </div>
        `;
      });
      
      html += '</div>';
      container.innerHTML = html;
    }
    
    // Update profile
    async function updateProfile(e) {
      e.preventDefault();
      
      const fullName = document.getElementById('fullName').value;
      const phoneNumber = document.getElementById('phoneNumber').value;
      
      try {
        await updateUserProfile(fullName, phoneNumber);
        await loadUserProfile(); // Reload to show updated data
      } catch (error) {
        console.error('Error updating profile:', error);
      }
    }
    
    // Change password
    async function changePassword(e) {
      e.preventDefault();
      
      const oldPassword = document.getElementById('oldPassword').value;
      const newPassword = document.getElementById('newPassword').value;
      
      if (!oldPassword || !newPassword) {
        Toastify({
          text: "يرجى ملء جميع الحقول",
          duration: 3000,
          close: true,
          gravity: "top",
          position: "center",
          backgroundColor: "#F44336",
        }).showToast();
        return;
      }
      
      try {
        await changeUserPassword(oldPassword, newPassword);
        document.getElementById('changePasswordForm').reset();
        document.getElementById('passwordMatch').textContent = '';
        document.getElementById('changePasswordBtn').disabled = true;
      } catch (error) {
        console.error('Error changing password:', error);
      }
    }
</script>
</body>
</html>