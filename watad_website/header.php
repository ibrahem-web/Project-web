<!-- Updated header.php -->
<script>
  window.addEventListener('scroll', function () {
    const header = document.querySelector('.main-header');
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
  
  // Check login status when DOM loaded
  document.addEventListener('DOMContentLoaded', function() {
    updateHeaderLoginStatus();
  });
  
  // Update header based on login status
  function updateHeaderLoginStatus() {
    const isLoggedIn = localStorage.getItem('token') !== null;
    const userRole = localStorage.getItem('role');
    const username = localStorage.getItem('username');
    
    const loginNavItem = document.getElementById('loginNavItem');
    const profileNavItem = document.getElementById('profileNavItem');
    const adminNavItem = document.getElementById('adminNavItem');
    const logoutNavItem = document.getElementById('logoutNavItem');
    
    if (isLoggedIn) {
      // User is logged in
      if (loginNavItem) loginNavItem.style.display = 'none';
      if (profileNavItem) {
        profileNavItem.style.display = 'block';
        const profileLink = profileNavItem.querySelector('a');
        if (profileLink) profileLink.textContent = `مرحباً، ${username || 'المستخدم'}`;
      }
      if (logoutNavItem) logoutNavItem.style.display = 'block';
      
      // Show admin link if admin
      if (adminNavItem && userRole === 'ADMIN') {
        adminNavItem.style.display = 'block';
      } else if (adminNavItem) {
        adminNavItem.style.display = 'none';
      }
    } else {
      // User is not logged in
      if (loginNavItem) loginNavItem.style.display = 'block';
      if (profileNavItem) profileNavItem.style.display = 'none';
      if (adminNavItem) adminNavItem.style.display = 'none';
      if (logoutNavItem) logoutNavItem.style.display = 'none';
    }
  }
  
  // Logout function
  function handleLogout() {
    logoutUser();
  }
</script>

<header class="main-header">
  <div class="container d-flex justify-content-between align-items-center">
    <a href="index.php"><img src="images/icon1.png" alt="Logo"></a>

    <nav class="d-none d-md-block">
      <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="index.php">الرئيسية</a></li>
        <li class="nav-item"><a class="nav-link" href="studingLevels.php">المراحل الدراسية</a></li>
        <li class="nav-item"><a class="nav-link" href="teachers.php">المعلمون</a></li>
        <li class="nav-item"><a class="nav-link" href="coursesSection.php">قسم التدريب</a></li>
        <li class="nav-item"><a class="nav-link" href="print_page.php">الطباعة و التصوير</a></li>
        <li class="nav-item"><a class="nav-link" href="techno_page.php">تكنو أجيال</a></li>
        <li class="nav-item" id="loginNavItem"><a class="nav-link" href="login.php">تسجيل الدخول</a></li>
        <li class="nav-item" id="profileNavItem" style="display: none;"><a class="nav-link" href="profile.php">مرحباً</a></li>
        <li class="nav-item" id="adminNavItem" style="display: none;"><a class="nav-link" href="adminPage.php">لوحة التحكم</a></li>
        <li class="nav-item" id="logoutNavItem" style="display: none;"><a class="nav-link" href="#" onclick="handleLogout()">تسجيل الخروج</a></li>
      </ul>
    </nav>

    <div class="dropdown d-block d-md-none">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        القائمة
      </button>
      <ul class="dropdown-menu text-end">
        <li><a class="dropdown-item" href="index.php">الرئيسية</a></li>
        <li><a class="dropdown-item" href="studingLevels.php">المراحل الدراسية</a></li>
        <li><a class="dropdown-item" href="teachers.php">المعلمون</a></li>
        <li><a class="dropdown-item" href="coursesSection.php">قسم التدريب</a></li>
        <li><a class="dropdown-item" href="print_page.php">الطباعة والتصوير</a></li>
        <li><a class="dropdown-item" href="techno_page.php">تكنو أجيال</a></li>
        <li><hr class="dropdown-divider"></li>
        <li id="mobileLoginItem"><a class="dropdown-item" href="login.php">تسجيل دخول</a></li>
        <li id="mobileProfileItem" style="display: none;"><a class="dropdown-item" href="profile.php">الملف الشخصي</a></li>
        <li id="mobileAdminItem" style="display: none;"><a class="dropdown-item" href="adminPage.php">لوحة التحكم</a></li>
        <li id="mobileLogoutItem" style="display: none;"><a class="dropdown-item" href="#" onclick="handleLogout()">تسجيل الخروج</a></li>
      </ul>
    </div>
  </div>
</header>

<script>
  // Also update mobile menu
  document.addEventListener('DOMContentLoaded', function() {
    const isLoggedIn = localStorage.getItem('token') !== null;
    const userRole = localStorage.getItem('role');
    
    const mobileLoginItem = document.getElementById('mobileLoginItem');
    const mobileProfileItem = document.getElementById('mobileProfileItem');
    const mobileAdminItem = document.getElementById('mobileAdminItem');
    const mobileLogoutItem = document.getElementById('mobileLogoutItem');
    
    if (isLoggedIn) {
      if (mobileLoginItem) mobileLoginItem.style.display = 'none';
      if (mobileProfileItem) mobileProfileItem.style.display = 'block';
      if (mobileLogoutItem) mobileLogoutItem.style.display = 'block';
      
      if (mobileAdminItem && userRole === 'ADMIN') {
        mobileAdminItem.style.display = 'block';
      } else if (mobileAdminItem) {
        mobileAdminItem.style.display = 'none';
      }
    } else {
      if (mobileLoginItem) mobileLoginItem.style.display = 'block';
      if (mobileProfileItem) mobileProfileItem.style.display = 'none';
      if (mobileAdminItem) mobileAdminItem.style.display = 'none';
      if (mobileLogoutItem) mobileLogoutItem.style.display = 'none';
    }
  });
</script>