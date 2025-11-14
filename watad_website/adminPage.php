<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - مركز الأجيال الصاعدة</title>
    <link href="images/icon1.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Scripts load order -->
    <script src="js/config.js"></script>
    <script src="js/auth.js"></script>
    <script src="js/teachers.js"></script>
    <script src="js/courses.js"></script>
    <script src="js/advertisements.js"></script>
    <script src="js/achievements.js"></script>
    <script src="js/admin.js"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap');
        
        :root {
            --primary-color: #667eea;
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-color: #f093fb;
            --success-color: #4ade80;
            --warning-color: #fbbf24;
            --danger-color: #f87171;
            --info-color: #60a5fa;
            --dark-color: #1f2937;
            --light-color: #f8fafc;
            --white: #ffffff;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #0f172a;
            --border-radius: 12px;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Cairo', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            color: var(--gray-800);
        }

        .header-bar {
            background: var(--primary-gradient);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1050;
            box-shadow: var(--shadow-lg);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .header-title {
            color: var(--white);
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header-title i {
            margin-left: 0.5rem;
            font-size: 1.8rem;
        }

        .logout-btn {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: var(--white);
            padding: 0.75rem 1.5rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: var(--transition);
            backdrop-filter: blur(10px);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logout-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: rgba(255, 255, 255, 0.5);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        .welcome-section {
            margin-bottom: 2rem;
        }

        .welcome-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .welcome-card {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--gray-200);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .welcome-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 4px;
            background: var(--primary-gradient);
        }

        .welcome-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }

        .welcome-card h5 {
            color: var(--gray-800);
            font-weight: 600;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .welcome-card p {
            color: var(--gray-700);
            margin-bottom: 0;
        }

        .quick-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 1rem;
        }

        .quick-action-btn {
            background: var(--primary-gradient);
            color: var(--white);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: var(--border-radius);
            font-size: 0.875rem;
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .quick-action-btn:hover {
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 1.5rem;
            text-align: center;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--gray-200);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: var(--white);
            background: var(--primary-gradient);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--gray-800);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--gray-600);
            font-weight: 500;
        }

        .custom-tabs {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--gray-200);
            overflow: hidden;
        }

        .custom-tabs .nav-tabs {
            border-bottom: none;
            background: var(--gray-100);
            padding: 0.5rem;
            margin: 0;
        }

        .custom-tabs .nav-link {
            border: none;
            border-radius: var(--border-radius);
            color: var(--gray-700);
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            margin: 0 0.25rem;
            transition: var(--transition);
            position: relative;
        }

        .custom-tabs .nav-link:hover {
            background: rgba(102, 126, 234, 0.1);
            color: var(--primary-color);
        }

        .custom-tabs .nav-link.active {
            background: var(--primary-gradient);
            color: var(--white);
            box-shadow: var(--shadow-md);
        }

        .tab-content {
            padding: 2rem;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .section-title {
            color: var(--gray-800);
            font-weight: 700;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .add-btn {
            background: var(--primary-gradient);
            color: var(--white);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .add-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .content-grid {
            display: grid;
            gap: 1.5rem;
        }

        .item-card {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gray-200);
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .item-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .item-image {
            width: 60px;
            height: 60px;
            border-radius: var(--border-radius);
            object-fit: cover;
            flex-shrink: 0;
        }

        .item-info {
            flex-grow: 1;
        }

        .item-title {
            color: var(--gray-800);
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .item-subtitle {
            color: var(--gray-600);
            font-size: 0.875rem;
            margin-bottom: 0.25rem;
        }

        .item-meta {
            color: var(--gray-500);
            font-size: 0.75rem;
        }

        .item-actions {
            display: flex;
            gap: 0.5rem;
            flex-shrink: 0;
        }

        .action-btn {
            border: none;
            padding: 0.5rem 1rem;
            border-radius: var(--border-radius);
            font-size: 0.875rem;
            font-weight: 500;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.25rem;
            text-decoration: none;
        }

        .btn-edit {
            background: var(--warning-color);
            color: var(--white);
        }

        .btn-delete {
            background: var(--danger-color);
            color: var(--white);
        }

        .btn-edit:hover {
            background: #f59e0b;
            color: var(--white);
            transform: translateY(-1px);
        }

        .btn-delete:hover {
            background: #ef4444;
            color: var(--white);
            transform: translateY(-1px);
        }

        .loading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            color: var(--gray-600);
        }

        .loading-spinner {
            width: 40px;
            height: 40px;
            border: 4px solid var(--gray-200);
            border-top: 4px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-bottom: 1rem;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .modal-content {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-xl);
        }

        .modal-header {
            background: var(--primary-gradient);
            color: var(--white);
            border-radius: var(--border-radius) var(--border-radius) 0 0;
            padding: 1.5rem;
        }

        .modal-title {
            font-weight: 700;
            margin: 0;
        }

        .btn-close {
            filter: invert(1);
        }

        .modal-body {
            padding: 2rem;
        }

        .form-control {
            border: 2px solid var(--gray-200);
            border-radius: var(--border-radius);
            padding: 0.75rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .form-label {
            font-weight: 600;
            color: var(--gray-700);
            margin-bottom: 0.5rem;
        }

        .empty-state {
            text-align: center;
            padding: 3rem;
            color: var(--gray-600);
        }

        .empty-state i {
            font-size: 3rem;
            color: var(--gray-400);
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .header-content {
                padding: 0 1rem;
            }
            
            .header-title {
                font-size: 1.5rem;
            }
            
            .main-container {
                padding: 1rem;
            }
            
            .welcome-cards {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .section-header {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }
            
            .item-card {
                flex-direction: column;
                text-align: center;
            }
            
            .item-actions {
                justify-content: center;
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="header-bar">
        <div class="header-content">
            <h1 class="header-title">
                <i class="fas fa-tachometer-alt"></i>
                لوحة تحكم المدير
            </h1>
            <button class="logout-btn" onclick="logoutUser()">
                <i class="fas fa-sign-out-alt"></i>
                تسجيل خروج
            </button>
        </div>
    </div>

    <div class="main-container">
        <div class="welcome-section fade-in">
            <div class="welcome-cards">
                <div class="welcome-card">
                    <h5>
                        <i class="fas fa-user-shield text-primary"></i>
                        مرحباً، <span id="adminName">المدير</span>
                    </h5>
                    <p>آخر تسجيل دخول: <span id="lastLogin">اليوم</span></p>
                    <p class="text-muted mt-2">إدارة شاملة لمركز الأجيال الصاعدة</p>
                </div>
                <div class="welcome-card">
                    <h5>
                        <i class="fas fa-rocket text-info"></i>
                        الإجراءات السريعة
                    </h5>
                    <div class="quick-actions">
                        <a href="adminPageAds.php" class="quick-action-btn">
                            <i class="fas fa-bullhorn"></i>
                            الإعلانات
                        </a>
                        <a href="adminPageAnjazPhoto.php" class="quick-action-btn">
                            <i class="fas fa-trophy"></i>
                            الإنجازات
                        </a>
                        <a href="adminPageCourse.php" class="quick-action-btn">
                            <i class="fas fa-graduation-cap"></i>
                            الدورات
                        </a>
                    </div>
                </div>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="stat-number" id="teachersCount">0</div>
                    <div class="stat-label">المعلمين</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="stat-number" id="coursesCount">0</div>
                    <div class="stat-label">الدورات</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="stat-number" id="achievementsCount">0</div>
                    <div class="stat-label">الإنجازات</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div class="stat-number" id="adsCount">0</div>
                    <div class="stat-label">الإعلانات</div>
                </div>
            </div>
        </div>

        <div class="custom-tabs fade-in">
            <ul class="nav nav-tabs" id="adminTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="teachers-tab" data-bs-toggle="tab" data-bs-target="#teachers" type="button" role="tab">
                        <i class="fas fa-chalkboard-teacher"></i>
                        المعلمين
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses" type="button" role="tab">
                        <i class="fas fa-book-open"></i>
                        الدورات
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="achievements-tab" data-bs-toggle="tab" data-bs-target="#achievements" type="button" role="tab">
                        <i class="fas fa-trophy"></i>
                        الإنجازات
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="advertisements-tab" data-bs-toggle="tab" data-bs-target="#advertisements" type="button" role="tab">
                        <i class="fas fa-bullhorn"></i>
                        الإعلانات
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="adminTabContent">
                <!-- Teachers Tab -->
                <div class="tab-pane fade show active" id="teachers" role="tabpanel">
                    <div class="section-header">
                        <h3 class="section-title">
                            <i class="fas fa-chalkboard-teacher"></i>
                            إدارة المعلمين
                        </h3>
                        <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addTeacherModal">
                            <i class="fas fa-plus"></i>
                            إضافة معلم جديد
                        </button>
                    </div>
                    <div id="teachersContainer">
                        <div class="loading-container">
                            <div class="loading-spinner"></div>
                            <p>جاري تحميل بيانات المعلمين...</p>
                        </div>
                    </div>
                </div>

                <!-- Courses Tab -->
                <div class="tab-pane fade" id="courses" role="tabpanel">
                    <div class="section-header">
                        <h3 class="section-title">
                            <i class="fas fa-book-open"></i>
                            إدارة الدورات
                        </h3>
                        <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addCourseModal">
                            <i class="fas fa-plus"></i>
                            إضافة دورة جديدة
                        </button>
                    </div>
                    <div id="coursesContainer">
                        <div class="loading-container">
                            <div class="loading-spinner"></div>
                            <p>جاري تحميل بيانات الدورات...</p>
                        </div>
                    </div>
                </div>

                <!-- Achievements Tab -->
                <div class="tab-pane fade" id="achievements" role="tabpanel">
                    <div class="section-header">
                        <h3 class="section-title">
                            <i class="fas fa-trophy"></i>
                            إدارة الإنجازات
                        </h3>
                        <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addAchievementModal">
                            <i class="fas fa-plus"></i>
                            إضافة إنجاز جديد
                        </button>
                    </div>
                    <div id="achievementsContainer">
                        <div class="loading-container">
                            <div class="loading-spinner"></div>
                            <p>جاري تحميل بيانات الإنجازات...</p>
                        </div>
                    </div>
                </div>

                <!-- Advertisements Tab -->
                <div class="tab-pane fade" id="advertisements" role="tabpanel">
                    <div class="section-header">
                        <h3 class="section-title">
                            <i class="fas fa-bullhorn"></i>
                            إدارة الإعلانات
                        </h3>
                        <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addAdModal">
                            <i class="fas fa-plus"></i>
                            إضافة إعلان جديد
                        </button>
                    </div>
                    <div id="advertisementsContainer">
                        <div class="loading-container">
                            <div class="loading-spinner"></div>
                            <p>جاري تحميل بيانات الإعلانات...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Teacher Modal -->
    <div class="modal fade" id="addTeacherModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-user-plus"></i>
                        إضافة معلم جديد
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addTeacherForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="teacherName" class="form-label">
                                        <i class="fas fa-user"></i>
                                        اسم المعلم
                                    </label>
                                    <input type="text" class="form-control" id="teacherName" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="teacherPhone" class="form-label">
                                        <i class="fas fa-phone"></i>
                                        رقم الهاتف
                                    </label>
                                    <input type="text" class="form-control" id="teacherPhone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="teacherSubject" class="form-label">
                                        <i class="fas fa-book"></i>
                                        المادة
                                    </label>
                                    <input type="text" class="form-control" id="teacherSubject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="teacherLevel" class="form-label">
                                        <i class="fas fa-layer-group"></i>
                                        المستوى
                                    </label>
                                    <input type="text" class="form-control" id="teacherLevel">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="teacherImage" class="form-label">
                                <i class="fas fa-image"></i>
                                صورة المعلم
                            </label>
                            <input type="file" class="form-control" id="teacherImage" accept="image/*">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn btn-primary" onclick="submitTeacherForm()">
                        <i class="fas fa-save"></i>
                        إضافة المعلم
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Check admin access and load data
        document.addEventListener('DOMContentLoaded', function() {
            if (!checkAdminAccess()) {
                return;
            }
            
            // Load admin info
            const username = localStorage.getItem('username');
            document.getElementById('adminName').textContent = username || 'المدير';
            
            // Load initial data
            loadTeachers();
            loadStats();
            
            // Tab change event listeners
            document.getElementById('courses-tab').addEventListener('click', loadCourses);
            document.getElementById('achievements-tab').addEventListener('click', loadAchievements);
            document.getElementById('advertisements-tab').addEventListener('click', loadAdvertisements);
        });

        // Load statistics
        async function loadStats() {
            try {
                const [teachers, courses, achievements, ads] = await Promise.all([
                    getAllTeachersAdmin(),
                    getAllCoursesAdmin(),
                    getAllAchievementsAdmin(),
                    getAllAdvertisementsAdmin()
                ]);
                
                document.getElementById('teachersCount').textContent = teachers?.length || 0;
                document.getElementById('coursesCount').textContent = courses?.length || 0;
                document.getElementById('achievementsCount').textContent = achievements?.length || 0;
                document.getElementById('adsCount').textContent = ads?.length || 0;
            } catch (error) {
                console.error('Error loading stats:', error);
            }
        }

        // Load teachers
        async function loadTeachers() {
            try {
                const teachers = await getAllTeachersAdmin();
                displayTeachersAdmin(teachers);
            } catch (error) {
                console.error('Error loading teachers:', error);
                document.getElementById('teachersContainer').innerHTML = '<div class="empty-state"><i class="fas fa-exclamation-triangle"></i><p>حدث خطأ في تحميل البيانات</p></div>';
            }
        }

        // Display teachers in admin format
        function displayTeachersAdmin(teachers) {
            const container = document.getElementById('teachersContainer');
            
            if (!teachers || teachers.length === 0) {
                container.innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>لا يوجد معلمين حالياً</p>
                    </div>
                `;
                return;
            }
            
            let html = '<div class="content-grid">';
            teachers.forEach(teacher => {
                html += `
                    <div class="item-card">
                        <img src="${teacher.imagePath || 'images/icon1.png'}" alt="${teacher.name}" class="item-image">
                        <div class="item-info">
                            <div class="item-title">${teacher.name}</div>
                            <div class="item-subtitle">المادة: ${teacher.subject || 'غير محدد'} | المستوى: ${teacher.level || 'غير محدد'}</div>
                            <div class="item-meta">الهاتف: ${teacher.phoneNumber || 'غير محدد'}</div>
                        </div>
                        <div class="item-actions">
                            <a href="editTeacher.php?id=${teacher.id}" class="action-btn btn-edit">
                                <i class="fas fa-edit"></i>
                                تعديل
                            </a>
                            <button class="action-btn btn-delete" onclick="confirmDeleteTeacher(${teacher.id})">
                                <i class="fas fa-trash"></i>
                                حذف
                            </button>
                        </div>
                    </div>
                `;
            });
            html += '</div>';
            
            container.innerHTML = html;
        }

        // Load courses
        async function loadCourses() {
            try {
                const courses = await getAllCoursesAdmin();
                displayCoursesAdmin(courses);
            } catch (error) {
                console.error('Error loading courses:', error);
                document.getElementById('coursesContainer').innerHTML = '<div class="empty-state"><i class="fas fa-exclamation-triangle"></i><p>حدث خطأ في تحميل البيانات</p></div>';
            }
        }

        // Display courses in admin format
        function displayCoursesAdmin(courses) {
            const container = document.getElementById('coursesContainer');
            
            if (!courses || courses.length === 0) {
                container.innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-book-open"></i>
                        <p>لا يوجد دورات حالياً</p>
                    </div>
                `;
                return;
            }
            
            let html = '<div class="content-grid">';
            courses.forEach(course => {
                html += `
                    <div class="item-card">
                        <img src="${course.imagePath || 'images/icon1.png'}" alt="${course.name}" class="item-image">
                        <div class="item-info">
                            <div class="item-title">${course.name}</div>
                            <div class="item-subtitle">المعلم: ${course.teacher ? course.teacher.name : 'غير محدد'}</div>
                            <div class="item-meta">المدة: ${course.duration || 'غير محدد'}</div>
                        </div>
                        <div class="item-actions">
                            <a href="editCourse.php?id=${course.id}" class="action-btn btn-edit">
                                <i class="fas fa-edit"></i>
                                تعديل
                            </a>
                            <button class="action-btn btn-delete" onclick="confirmDeleteCourse(${course.id})">
                                <i class="fas fa-trash"></i>
                                حذف
                            </button>
                        </div>
                    </div>
                `;
            });
            html += '</div>';
            
            container.innerHTML = html;
        }

        // Load achievements
        async function loadAchievements() {
            try {
                const achievements = await getAllAchievementsAdmin();
                displayAchievementsAdmin(achievements);
            } catch (error) {
                console.error('Error loading achievements:', error);
                document.getElementById('achievementsContainer').innerHTML = '<div class="empty-state"><i class="fas fa-exclamation-triangle"></i><p>حدث خطأ في تحميل البيانات</p></div>';
            }
        }

        // Display achievements in admin format
        function displayAchievementsAdmin(achievements) {
            const container = document.getElementById('achievementsContainer');
            
            if (!achievements || achievements.length === 0) {
                container.innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-trophy"></i>
                        <p>لا يوجد إنجازات حالياً</p>
                    </div>
                `;
                return;
            }
            
            let html = '<div class="content-grid">';
            achievements.forEach(achievement => {
                html += `
                    <div class="item-card">
                        <img src="${achievement.imagePath || 'images/icon1.png'}" alt="${achievement.title}" class="item-image">
                        <div class="item-info">
                            <div class="item-title">${achievement.title}</div>
                            <div class="item-subtitle">${achievement.description || 'لا يوجد وصف'}</div>
                        </div>
                        <div class="item-actions">
                            <button class="action-btn btn-edit" onclick="editAchievement(${achievement.id})">
                                <i class="fas fa-edit"></i>
                                تعديل
                            </button>
                            <button class="action-btn btn-delete" onclick="confirmDeleteAchievement(${achievement.id})">
                                <i class="fas fa-trash"></i>
                                حذف
                            </button>
                        </div>
                    </div>
                `;
            });
            html += '</div>';
            
            container.innerHTML = html;
        }

        // Load advertisements
        async function loadAdvertisements() {
            try {
                const ads = await getAllAdvertisementsAdmin();
                displayAdvertisementsAdmin(ads);
            } catch (error) {
                console.error('Error loading advertisements:', error);
                document.getElementById('advertisementsContainer').innerHTML = '<div class="empty-state"><i class="fas fa-exclamation-triangle"></i><p>حدث خطأ في تحميل البيانات</p></div>';
            }
        }

        // Display advertisements in admin format
        function displayAdvertisementsAdmin(ads) {
            const container = document.getElementById('advertisementsContainer');
            
            if (!ads || ads.length === 0) {
                container.innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-bullhorn"></i>
                        <p>لا يوجد إعلانات حالياً</p>
                    </div>
                `;
                return;
            }
            
            let html = '<div class="content-grid">';
            ads.forEach(ad => {
                html += `
                    <div class="item-card">
                        <img src="${ad.mediaPath || 'images/carousel-1.jpg'}" alt="${ad.title}" class="item-image">
                        <div class="item-info">
                            <div class="item-title">${ad.title}</div>
                            <div class="item-subtitle">${ad.description || 'لا يوجد وصف'}</div>
                            <div class="item-meta">الحالة: ${ad.active ? 'نشط' : 'غير نشط'}</div>
                        </div>
                        <div class="item-actions">
                            <a href="editAd.php?id=${ad.id}" class="action-btn btn-edit">
                                <i class="fas fa-edit"></i>
                                تعديل
                            </a>
                            <button class="action-btn btn-delete" onclick="confirmDeleteAd(${ad.id})">
                                <i class="fas fa-trash"></i>
                                حذف
                            </button>
                        </div>
                    </div>
                `;
            });
            html += '</div>';
            
            container.innerHTML = html;
        }

        // Submit teacher form
        async function submitTeacherForm() {
            const name = document.getElementById('teacherName').value;
            const phoneNumber = document.getElementById('teacherPhone').value;
            const subject = document.getElementById('teacherSubject').value;
            const level = document.getElementById('teacherLevel').value;
            const imageFile = document.getElementById('teacherImage').files[0];
            
            if (!name) {
                Toastify({
                    text: "اسم المعلم مطلوب",
                    backgroundColor: "#f87171",
                    className: "error",
                }).showToast();
                return;
            }
            
            let imagePath = null;
            if (imageFile) {
                imagePath = await uploadTeacherImage(imageFile);
                if (!imagePath) return;
            }
            
            const teacherData = { name, phoneNumber, subject, level, imagePath };
            const result = await addTeacher(teacherData);
            
            if (result) {
                // Close modal and reload teachers
                const modal = bootstrap.Modal.getInstance(document.getElementById('addTeacherModal'));
                modal.hide();
                document.getElementById('addTeacherForm').reset();
                await loadTeachers();
                await loadStats();
            }
        }

        // Delete confirmation functions
        function confirmDeleteTeacher(id) {
            if (confirm('هل أنت متأكد من حذف هذا المعلم؟')) {
                deleteTeacherById(id);
            }
        }

        function confirmDeleteCourse(id) {
            if (confirm('هل أنت متأكد من حذف هذه الدورة؟')) {
                deleteCourseById(id);
            }
        }

        function confirmDeleteAchievement(id) {
            if (confirm('هل أنت متأكد من حذف هذا الإنجاز؟')) {
                deleteAchievementById(id);
            }
        }

        function confirmDeleteAd(id) {
            if (confirm('هل أنت متأكد من حذف هذا الإعلان؟')) {
                deleteAdById(id);
            }
        }

        // Delete functions
        async function deleteTeacherById(id) {
            const result = await deleteTeacher(id);
            if (result) {
                await loadTeachers();
                await loadStats();
            }
        }

        async function deleteCourseById(id) {
            const result = await deleteCourse(id);
            if (result) {
                await loadCourses();
                await loadStats();
            }
        }

        async function deleteAchievementById(id) {
            const result = await deleteAchievement(id);
            if (result) {
                await loadAchievements();
                await loadStats();
            }
        }

        async function deleteAdById(id) {
            const result = await deleteAdvertisement(id);
            if (result) {
                await loadAdvertisements();
                await loadStats();
            }
        }

        function editAchievement(id) {
            window.location.href = `editAchievement.php?id=${id}`;
        }
    </script>
</body>
</html>