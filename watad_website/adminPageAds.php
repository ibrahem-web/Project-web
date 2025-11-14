<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الإعلانات - مركز الأجيال الصاعدة</title>
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

        .ads-table-container {
            overflow-x: auto;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gray-200);
        }

        .ads-table {
            width: 100%;
            border-collapse: collapse;
            background: var(--white);
            margin: 0;
        }

        .ads-table th {
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

        .ads-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--gray-200);
            vertical-align: middle;
        }

        .ads-table tr:hover {
            background: var(--gray-50);
        }

        .ad-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
        }

        .status-badge {
            padding: 0.375rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-active {
            background: rgba(74, 222, 128, 0.2);
            color: #059669;
        }

        .status-inactive {
            background: rgba(248, 113, 113, 0.2);
            color: #dc2626;
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

        .form-group {
            margin-bottom: 1.5rem;
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
            margin: 0 auto;
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
            
            .ads-table th,
            .ads-table td {
                padding: 0.75rem 0.5rem;
                font-size: 0.875rem;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 0.25rem;
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
                <i class="fas fa-bullhorn"></i>
                إدارة الإعلانات
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
                <li class="breadcrumb-item active">إدارة الإعلانات</li>
            </ol>
        </nav>

        <!-- Page Header -->
        <div class="page-header fade-in">
            <h1 class="page-title">
                <i class="fas fa-bullhorn"></i>
                إدارة الإعلانات
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
                <a href="mangerInfoUpgradeAds.php" class="edit-admin-btn">
                    <i class="fas fa-user-edit"></i>
                    تعديل معلومات المدير
                </a>
            </div>
        </div>

        <!-- Current Ads Section -->
        <div class="content-section fade-in">
            <h2 class="section-title">
                <i class="fas fa-list"></i>
                كل الإعلانات
            </h2>
            <div id="adsTableContainer">
                <div class="loading-container">
                    <div class="loading-spinner"></div>
                    <p>جاري تحميل بيانات الإعلانات...</p>
                </div>
            </div>
        </div>

        <!-- Add New Ad Section -->
        <div class="content-section fade-in">
            <h2 class="section-title">
                <i class="fas fa-plus-circle"></i>
                إضافة إعلان جديد
            </h2>

            <form id="addAdForm" class="add-form">
                <div class="form-group">
                    <label for="title" class="form-label">
                        <i class="fas fa-heading"></i>
                        عنوان الإعلان
                    </label>
                    <input type="text" class="form-control" id="title" name="title" required placeholder="أدخل عنوان الإعلان">
                </div>

                <div class="form-group">
                    <label for="description" class="form-label">
                        <i class="fas fa-align-left"></i>
                        وصف الإعلان
                    </label>
                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="أدخل وصف مفصل للإعلان"></textarea>
                </div>

                <div class="form-group">
                    <label for="adMedia" class="form-label">
                        <i class="fas fa-image"></i>
                        صورة/فيديو الإعلان
                    </label>
                    <div class="file-input-wrapper">
                        <input type="file" class="file-input" id="adMedia" name="adMedia" accept="image/*,video/*">
                        <label for="adMedia" class="file-input-label">
                            <i class="fas fa-cloud-upload-alt"></i>
                            اختر صورة أو فيديو للإعلان
                        </label>
                    </div>
                    <div class="preview-container">
                        <img id="mediaPreview" class="preview-image" src="#" alt="Preview">
                    </div>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-save"></i>
                    إضافة الإعلان
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/auth.js"></script>
    <script src="js/admin.js"></script>
    <script>
        // Check if user is admin
        document.addEventListener('DOMContentLoaded', function() {
            if (!checkAdminAccess()) {
                return;
            }
            
            // Display admin info
            const username = localStorage.getItem('username');
            document.getElementById('adminName').textContent = username || 'المدير';
            
            // Load advertisements
            loadAdvertisements();
            
            // Handle form submission
            document.getElementById('addAdForm').addEventListener('submit', addNewAdvertisement);
            
            // Show media preview
            document.getElementById('adMedia').addEventListener('change', function(e) {
                const preview = document.getElementById('mediaPreview');
                const file = e.target.files[0];
                const label = document.querySelector('.file-input-label');
                
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                        label.innerHTML = `<i class="fas fa-check"></i> تم اختيار الملف: ${file.name}`;
                        label.style.borderColor = 'var(--success-color)';
                        label.style.color = 'var(--success-color)';
                    }
                    reader.readAsDataURL(file);
                } else {
                    preview.style.display = 'none';
                    label.innerHTML = '<i class="fas fa-cloud-upload-alt"></i> اختر صورة أو فيديو للإعلان';
                    label.style.borderColor = '';
                    label.style.color = '';
                }
            });
        });
        
        // Load all advertisements
        async function loadAdvertisements() {
            try {
                const ads = await getAllAdvertisementsAdmin();
                displayAdsTable(ads);
            } catch (error) {
                console.error('Error loading advertisements:', error);
                document.getElementById('adsTableContainer').innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h3>حدث خطأ</h3>
                        <p>فشل في تحميل بيانات الإعلانات</p>
                    </div>
                `;
            }
        }
        
        // Display advertisements table
        function displayAdsTable(ads) {
            const container = document.getElementById('adsTableContainer');
            
            if (!ads || ads.length === 0) {
                container.innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-bullhorn"></i>
                        <h3>لا توجد إعلانات حالياً</h3>
                        <p>قم بإضافة أول إعلان للمركز من النموذج أدناه</p>
                    </div>
                `;
                return;
            }
            
            let tableHtml = `
                <div class="ads-table-container">
                    <table class="ads-table">
                        <thead>
                            <tr>
                                <th><i class="fas fa-heading"></i> عنوان الإعلان</th>
                                <th><i class="fas fa-align-left"></i> الوصف</th>
                                <th><i class="fas fa-image"></i> الصورة</th>
                                <th><i class="fas fa-toggle-on"></i> الحالة</th>
                                <th><i class="fas fa-cogs"></i> إجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
            `;
            
            ads.forEach((ad, index) => {
                const truncatedDescription = ad.description && ad.description.length > 50 
                    ? ad.description.substring(0, 50) + '...' 
                    : ad.description || 'لا يوجد وصف';
                
                tableHtml += `
                    <tr class="slide-in" style="animation-delay: ${index * 0.1}s">
                        <td>
                            <strong>${ad.title || 'بدون عنوان'}</strong>
                        </td>
                        <td>
                            <span title="${ad.description || ''}">${truncatedDescription}</span>
                        </td>
                        <td>
                            ${ad.mediaPath ? 
                                `<img src="${ad.mediaPath}" alt="صورة الإعلان" class="ad-image">` : 
                                '<span class="text-muted"><i class="fas fa-image"></i> لا توجد صورة</span>'
                            }
                        </td>
                        <td>
                            <span class="status-badge ${ad.active ? 'status-active' : 'status-inactive'}">
                                <i class="fas fa-${ad.active ? 'check-circle' : 'times-circle'}"></i>
                                ${ad.active ? 'نشط' : 'غير نشط'}
                            </span>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="editAd.php?id=${ad.id}" class="action-btn btn-edit">
                                    <i class="fas fa-edit"></i>
                                    تعديل
                                </a>
                                <button class="action-btn btn-delete" onclick="confirmDeleteAd(${ad.id})">
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
        
        // Add new advertisement
        async function addNewAdvertisement(e) {
            e.preventDefault();
            
            const titleInput = document.getElementById('title');
            const descriptionInput = document.getElementById('description');
            const mediaInput = document.getElementById('adMedia');
            const submitBtn = document.querySelector('.submit-btn');
            
            if (!titleInput.value.trim()) {
                Toastify({
                    text: "الرجاء إدخال عنوان الإعلان",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#f87171",
                }).showToast();
                titleInput.focus();
                return;
            }
            
            // Show loading state
            submitBtn.disabled = true;
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري الإضافة...';
            
            let mediaPath = null;
            
            // Upload media if provided
            if (mediaInput.files && mediaInput.files[0]) {
                mediaPath = await uploadAdvertisementMedia(mediaInput.files[0]);
                if (!mediaPath) {
                    // Reset button state
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                    return;
                }
            }
            
            const adData = {
                title: titleInput.value.trim(),
                description: descriptionInput.value.trim(),
                mediaPath: mediaPath,
                active: true
            };
            
            const result = await addAdvertisement(adData);
            
            // Reset button state
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
            
            if (result) {
                // Clear form
                document.getElementById('addAdForm').reset();
                document.getElementById('mediaPreview').style.display = 'none';
                
                // Reset file input label
                const label = document.querySelector('.file-input-label');
                label.innerHTML = '<i class="fas fa-cloud-upload-alt"></i> اختر صورة أو فيديو للإعلان';
                label.style.borderColor = '';
                label.style.color = '';
                
                // Reload advertisements
                await loadAdvertisements();
                
                // Show success message
                Toastify({
                    text: "تم إضافة الإعلان بنجاح",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#4ade80",
                }).showToast();
            }
        }
        
        // Confirm delete advertisement
        function confirmDeleteAd(adId) {
            const result = confirm('هل أنت متأكد من حذف هذا الإعلان؟\n\nلن تتمكن من التراجع عن هذا الإجراء.');
            if (result) {
                deleteAdById(adId);
            }
        }
        
        // Delete advertisement
        async function deleteAdById(adId) {
            try {
                const result = await deleteAdvertisement(adId);
                
                if (result) {
                    await loadAdvertisements();
                    
                    Toastify({
                        text: "تم حذف الإعلان بنجاح",
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "center",
                        backgroundColor: "#4ade80",
                    }).showToast();
                }
            } catch (error) {
                console.error('Error deleting advertisement:', error);
                
                Toastify({
                    text: "حدث خطأ في حذف الإعلان",
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