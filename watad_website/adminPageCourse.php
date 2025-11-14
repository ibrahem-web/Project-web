<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الدورات - مركز الأجيال الصاعدة</title>
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
            --gray-600: #475569;
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
            display: flex;
            align-items: center;
            gap: 0.5rem;
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

        .page-header {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--gray-200);
        }

        .page-title {
            color: var(--gray-800);
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .page-title i {
            color: var(--primary-color);
            font-size: 2rem;
        }

        .admin-info-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .admin-info {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .admin-info-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--gray-700);
            font-weight: 500;
        }

        .admin-info-item i {
            color: var(--primary-color);
            width: 20px;
        }

        .edit-admin-btn {
            background: var(--primary-gradient);
            color: var(--white);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .edit-admin-btn:hover {
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .content-section {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--gray-200);
        }

        .section-title {
            color: var(--gray-800);
            font-weight: 700;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding-bottom: 1rem;
            border-bottom: 3px solid var(--primary-color);
        }

        .courses-table-container {
            overflow-x: auto;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gray-200);
        }

        .courses-table {
            width: 100%;
            border-collapse: collapse;
            background: var(--white);
            margin: 0;
        }

        .courses-table th {
            background: var(--primary-gradient);
            color: var(--white);
            padding: 1rem;
            text-align: right;
            font-weight: 600;
            border: none;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .courses-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--gray-200);
            vertical-align: middle;
        }

        .courses-table tr:hover {
            background: var(--gray-50);
        }

        .course-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
        }

        .teacher-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .teacher-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--primary-color);
        }

        .duration-badge {
            background: rgba(102, 126, 234, 0.1);
            color: var(--primary-color);
            padding: 0.375rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
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
            cursor: pointer;
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
            transform: translateY(-2px);
        }

        .btn-delete:hover {
            background: #ef4444;
            color: var(--white);
            transform: translateY(-2px);
        }

        .add-form {
            background: var(--gray-50);
            border: 2px dashed var(--gray-300);
            border-radius: var(--border-radius);
            padding: 2rem;
            margin-top: 1.5rem;
            transition: var(--transition);
        }

        .add-form:hover {
            border-color: var(--primary-color);
            background: rgba(102, 126, 234, 0.05);
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            font-weight: 600;
            color: var(--gray-700);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-control {
            border: 2px solid var(--gray-200);
            border-radius: var(--border-radius);
            padding: 0.75rem;
            transition: var(--transition);
            font-family: inherit;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            outline: none;
        }

        .form-select {
            border: 2px solid var(--gray-200);
            border-radius: var(--border-radius);
            padding: 0.75rem;
            transition: var(--transition);
            font-family: inherit;
            background: var(--white);
        }

        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            outline: none;
        }

        .file-input-wrapper {
            position: relative;
            display: inline-block;
            cursor: pointer;
            width: 100%;
        }

        .file-input {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }

        .file-input-label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem;
            border: 2px dashed var(--gray-300);
            border-radius: var(--border-radius);
            background: var(--white);
            color: var(--gray-600);
            font-weight: 500;
            transition: var(--transition);
            cursor: pointer;
        }

        .file-input-label:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
            background: rgba(102, 126, 234, 0.05);
        }

        .preview-container {
            margin-top: 1rem;
            text-align: center;
        }

        .preview-image {
            max-width: 200px;
            max-height: 200px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            display: none;
        }

        .submit-btn {
            background: var(--primary-gradient);
            color: var(--white);
            border: none;
            padding: 1rem 2rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            font-size: 1.1rem;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin: 2rem auto 0;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
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
            width: 50px;
            height: 50px;
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

        .empty-state {
            text-align: center;
            padding: 3rem;
            color: var(--gray-600);
        }

        .empty-state i {
            font-size: 4rem;
            color: var(--gray-400);
            margin-bottom: 1rem;
        }

        .empty-state h3 {
            color: var(--gray-700);
            margin-bottom: 0.5rem;
        }

        .breadcrumb {
            background: none;
            padding: 0;
            margin-bottom: 1rem;
        }

        .breadcrumb-item {
            display: flex;
            align-items: center;
        }

        .breadcrumb-item a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-item.active {
            color: var(--gray-600);
        }

        .course-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--info-color) 100%);
            color: var(--white);
            padding: 1.5rem;
            border-radius: var(--border-radius);
            text-align: center;
            box-shadow: var(--shadow-md);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.875rem;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .main-container {
                padding: 1rem;
            }
            
            .header-content {
                padding: 0 1rem;
            }
            
            .header-title {
                font-size: 1.5rem;
            }
            
            .admin-info-section {
                flex-direction: column;
                align-items: stretch;
                text-align: center;
            }
            
            .page-header {
                padding: 1.5rem;
            }
            
            .content-section {
                padding: 1.5rem;
            }
            
            .courses-table th,
            .courses-table td {
                padding: 0.75rem 0.5rem;
                font-size: 0.875rem;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 0.25rem;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-in {
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <div class="header-bar">
        <div class="header-content">
            <h1 class="header-title">
                <i class="fas fa-graduation-cap"></i>
                إدارة الدورات
            </h1>
<button class="logout-btn" onclick="logoutUser()">
                <i class="fas fa-sign-out-alt"></i>
                تسجيل خروج
            </button>
        </div>
    </div>

    <div class="main-container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="fade-in">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="adminPage.php">
                        <i class="fas fa-home"></i>
                        الرئيسية
                    </a>
                </li>
                <li class="breadcrumb-item active">إدارة الدورات</li>
            </ol>
        </nav>

        <!-- Page Header -->
        <div class="page-header fade-in">
            <h1 class="page-title">
                <i class="fas fa-graduation-cap"></i>
                إدارة الدورات
            </h1>
            <div class="admin-info-section">
                <div class="admin-info">
                    <div class="admin-info-item">
                        <i class="fas fa-user"></i>
                        <span><strong>اسم المدير:</strong> <span id="adminName">جاري التحميل...</span></span>
                    </div>
                    <div class="admin-info-item">
                        <i class="fas fa-phone"></i>
                        <span><strong>رقم الهاتف:</strong> <span id="adminPhone">جاري التحميل...</span></span>
                    </div>
                </div>
                <a href="mangerInfoUpgradeCourse.php" class="edit-admin-btn">
                    <i class="fas fa-user-edit"></i>
                    تعديل معلومات المدير
                </a>
            </div>
        </div>

        <!-- Course Statistics -->
        <div class="course-stats fade-in">
            <div class="stat-card">
                <div class="stat-number" id="totalCourses">0</div>
                <div class="stat-label">إجمالي الدورات</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="activeTeachers">0</div>
                <div class="stat-label">المعلمين النشطين</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="avgDuration">0</div>
                <div class="stat-label">متوسط مدة الدورة</div>
            </div>
        </div>

        <!-- Current Courses Section -->
        <div class="content-section fade-in">
            <h2 class="section-title">
                <i class="fas fa-list"></i>
                كل الدورات
            </h2>
            <div id="coursesTableContainer">
                <div class="loading-container">
                    <div class="loading-spinner"></div>
                    <p>جاري تحميل بيانات الدورات...</p>
                </div>
            </div>
        </div>

        <!-- Add New Course Section -->
        <div class="content-section fade-in">
            <h2 class="section-title">
                <i class="fas fa-plus-circle"></i>
                إضافة دورة جديدة
            </h2>

            <form id="addCourseForm" class="add-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="courseName" class="form-label">
                            <i class="fas fa-book"></i>
                            اسم الدورة
                        </label>
                        <input type="text" class="form-control" id="courseName" name="name" required placeholder="أدخل اسم الدورة">
                    </div>
                    
                    <div class="form-group">
                        <label for="courseTeacher" class="form-label">
                            <i class="fas fa-chalkboard-teacher"></i>
                            المعلم المسؤول
                        </label>
                        <select class="form-select" id="courseTeacher" name="teacherId" required>
                            <option value="">اختر المعلم</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="courseDuration" class="form-label">
                            <i class="fas fa-clock"></i>
                            مدة الدورة
                        </label>
                        <input type="text" class="form-control" id="courseDuration" name="duration" placeholder="مثال: 3 أشهر، 12 أسبوع">
                    </div>
                    
                    <div class="form-group">
                        <label for="coursePrice" class="form-label">
                            <i class="fas fa-dollar-sign"></i>
                            سعر الدورة
                        </label>
                        <input type="number" class="form-control" id="coursePrice" name="price" placeholder="السعر بالشيكل" min="0">
                    </div>
                </div>

                <div class="form-group">
                    <label for="courseDescription" class="form-label">
                        <i class="fas fa-align-left"></i>
                        وصف الدورة
                    </label>
                    <textarea class="form-control" id="courseDescription" name="description" rows="4" placeholder="أدخل وصف مفصل للدورة"></textarea>
                </div>

                <div class="form-group">
                    <label for="courseImage" class="form-label">
                        <i class="fas fa-image"></i>
                        صورة الدورة
                    </label>
                    <div class="file-input-wrapper">
                        <input type="file" class="file-input" id="courseImage" name="image" accept="image/*">
                        <label for="courseImage" class="file-input-label">
                            <i class="fas fa-cloud-upload-alt"></i>
                            اختر صورة للدورة
                        </label>
                    </div>
                    <div class="preview-container">
                        <img id="imagePreview" class="preview-image" src="#" alt="Preview">
                    </div>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-save"></i>
                    إضافة الدورة
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Global variables
        let allTeachers = [];
        let allCourses = [];

        // Check if user is admin
        document.addEventListener('DOMContentLoaded', function() {
            if (!checkAdminAccess()) {
                return;
            }
            
            // Display admin info
            const username = localStorage.getItem('username');
            document.getElementById('adminName').textContent = username || 'المدير';
            
            // Load initial data
            loadTeachers();
            loadCourses();
            loadStats();
            
            // Handle form submission
            document.getElementById('addCourseForm').addEventListener('submit', addNewCourse);
            
            // Show image preview
            document.getElementById('courseImage').addEventListener('change', function(e) {
                const preview = document.getElementById('imagePreview');
                const file = e.target.files[0];
                const label = document.querySelector('.file-input-label');
                
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                        label.innerHTML = `<i class="fas fa-check"></i> تم اختيار الصورة: ${file.name}`;
                        label.style.borderColor = 'var(--success-color)';
                        label.style.color = 'var(--success-color)';
                    }
                    reader.readAsDataURL(file);
                } else {
                    preview.style.display = 'none';
                    label.innerHTML = '<i class="fas fa-cloud-upload-alt"></i> اختر صورة للدورة';
                    label.style.borderColor = '';
                    label.style.color = '';
                }
            });
        });

        // Load teachers for dropdown
        async function loadTeachers() {
            try {
                allTeachers = await getAllTeachersAdmin();
                populateTeacherDropdown();
            } catch (error) {
                console.error('Error loading teachers:', error);
            }
        }

        // Populate teacher dropdown
        function populateTeacherDropdown() {
            const select = document.getElementById('courseTeacher');
            select.innerHTML = '<option value="">اختر المعلم</option>';
            
            if (allTeachers && allTeachers.length > 0) {
                allTeachers.forEach(teacher => {
                    const option = document.createElement('option');
                    option.value = teacher.id;
                    option.textContent = teacher.name;
                    select.appendChild(option);
                });
            }
        }

        // Load statistics
        async function loadStats() {
            try {
                const [courses, teachers] = await Promise.all([
                    getAllCoursesAdmin(),
                    getAllTeachersAdmin()
                ]);
                
                document.getElementById('totalCourses').textContent = courses?.length || 0;
                document.getElementById('activeTeachers').textContent = teachers?.length || 0;
                
                // Calculate average duration (simplified)
                if (courses && courses.length > 0) {
                    const avgDurationText = "متنوع";
                    document.getElementById('avgDuration').textContent = avgDurationText;
                }
            } catch (error) {
                console.error('Error loading stats:', error);
            }
        }
        
        // Load all courses
        async function loadCourses() {
            try {
                allCourses = await getAllCoursesAdmin();
                displayCoursesTable(allCourses);
            } catch (error) {
                console.error('Error loading courses:', error);
                document.getElementById('coursesTableContainer').innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h3>حدث خطأ</h3>
                        <p>فشل في تحميل بيانات الدورات</p>
                    </div>
                `;
            }
        }
        
        // Display courses table
        function displayCoursesTable(courses) {
            const container = document.getElementById('coursesTableContainer');
            
            if (!courses || courses.length === 0) {
                container.innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>لا توجد دورات حالياً</h3>
                        <p>قم بإضافة أول دورة للمركز من النموذج أدناه</p>
                    </div>
                `;
                return;
            }
            
            let tableHtml = `
                <div class="courses-table-container">
                    <table class="courses-table">
                        <thead>
                            <tr>
                                <th><i class="fas fa-image"></i> الصورة</th>
                                <th><i class="fas fa-book"></i> اسم الدورة</th>
                                <th><i class="fas fa-chalkboard-teacher"></i> المعلم</th>
                                <th><i class="fas fa-clock"></i> المدة</th>
                                <th><i class="fas fa-align-left"></i> الوصف</th>
                                <th><i class="fas fa-cogs"></i> إجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
            `;
            
            courses.forEach((course, index) => {
                const truncatedDescription = course.description && course.description.length > 50 
                    ? course.description.substring(0, 50) + '...' 
                    : course.description || 'لا يوجد وصف';
                
                tableHtml += `
                    <tr class="slide-in" style="animation-delay: ${index * 0.1}s">
                        <td>
                            ${course.imagePath ? 
                                `<img src="${course.imagePath}" alt="صورة الدورة" class="course-image">` : 
                                '<span class="text-muted"><i class="fas fa-image"></i></span>'
                            }
                        </td>
                        <td>
                            <strong>${course.name || 'بدون اسم'}</strong>
                        </td>
                        <td>
                            <div class="teacher-info">
                                ${course.teacher ? 
                                    `<img src="${course.teacher.imagePath || 'images/icon1.png'}" alt="${course.teacher.name}" class="teacher-avatar">
                                     <span>${course.teacher.name}</span>` :
                                    '<span class="text-muted">غير محدد</span>'
                                }
                            </div>
                        </td>
                        <td>
                            ${course.duration ? 
                                `<span class="duration-badge"><i class="fas fa-clock"></i> ${course.duration}</span>` :
                                '<span class="text-muted">غير محدد</span>'
                            }
                        </td>
                        <td>
                            <span title="${course.description || ''}">${truncatedDescription}</span>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="editCourse.php?id=${course.id}" class="action-btn btn-edit">
                                    <i class="fas fa-edit"></i>
                                    تعديل
                                </a>
                                <button class="action-btn btn-delete" onclick="confirmDeleteCourse(${course.id})">
                                    <i class="fas fa-trash"></i>
                                    حذف
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            });
            
            tableHtml += `
                        </tbody>
                    </table>
                </div>
            `;
            
            container.innerHTML = tableHtml;
        }
        
        // Add new course
        async function addNewCourse(e) {
            e.preventDefault();
            
            const nameInput = document.getElementById('courseName');
            const teacherSelect = document.getElementById('courseTeacher');
            const durationInput = document.getElementById('courseDuration');
            const priceInput = document.getElementById('coursePrice');
            const descriptionInput = document.getElementById('courseDescription');
            const imageInput = document.getElementById('courseImage');
            const submitBtn = document.querySelector('.submit-btn');
            
            if (!nameInput.value.trim()) {
                Toastify({
                    text: "الرجاء إدخال اسم الدورة",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#f87171",
                }).showToast();
                nameInput.focus();
                return;
            }

            if (!teacherSelect.value) {
                Toastify({
                    text: "الرجاء اختيار المعلم المسؤول",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#f87171",
                }).showToast();
                teacherSelect.focus();
                return;
            }
            
            // Show loading state
            submitBtn.disabled = true;
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري الإضافة...';
            
            let imagePath = null;
            
            // Upload image if provided
            if (imageInput.files && imageInput.files[0]) {
                imagePath = await uploadCourseImage(imageInput.files[0]);
                if (!imagePath) {
                    // Reset button state
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                    return;
                }
            }
            
            const courseData = {
                name: nameInput.value.trim(),
                teacherId: parseInt(teacherSelect.value),
                duration: durationInput.value.trim(),
                price: priceInput.value ? parseFloat(priceInput.value) : null,
                description: descriptionInput.value.trim(),
                imagePath: imagePath
            };
            
            const result = await addCourse(courseData);
            
            // Reset button state
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
            
            if (result) {
                // Clear form
                document.getElementById('addCourseForm').reset();
                document.getElementById('imagePreview').style.display = 'none';
                
                // Reset file input label
                const label = document.querySelector('.file-input-label');
                label.innerHTML = '<i class="fas fa-cloud-upload-alt"></i> اختر صورة للدورة';
                label.style.borderColor = '';
                label.style.color = '';
                
                // Reload courses and stats
                await loadCourses();
                await loadStats();
                
                // Show success message
                Toastify({
                    text: "تم إضافة الدورة بنجاح",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#4ade80",
                }).showToast();
            }
        }
        
        // Confirm delete course
        function confirmDeleteCourse(courseId) {
            const result = confirm('هل أنت متأكد من حذف هذه الدورة؟\n\nلن تتمكن من التراجع عن هذا الإجراء.');
            if (result) {
                deleteCourseById(courseId);
            }
        }
        
        // Delete course
        async function deleteCourseById(courseId) {
            try {
                const result = await deleteCourse(courseId);
                
                if (result) {
                    await loadCourses();
                    await loadStats();
                    
                    Toastify({
                        text: "تم حذف الدورة بنجاح",
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "center",
                        backgroundColor: "#4ade80",
                    }).showToast();
                }
            } catch (error) {
                console.error('Error deleting course:', error);
                
                Toastify({
                    text: "حدث خطأ في حذف الدورة",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#f87171",
                }).showToast();
            }
        }

        
    </script>
</body>
</html>