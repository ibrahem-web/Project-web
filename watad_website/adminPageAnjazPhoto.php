<!-- Updated adminPageAnjazPhoto.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Achievements</title>
    <link href="images/icon1.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Always load in this exact order -->
<script src="js/config.js"></script>
<script src="js/auth.js"></script>
<script src="js/teachers.js"></script>
<script src="js/courses.js"></script>
<script src="js/advertisements.js"></script>
<script src="js/achievements.js"></script>
<script src="js/admin.js"></script>
<!-- Other scripts -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header .admin-info {
            font-size: 14px;
            color: #555;
        }

        .header-bar {
            background-color:#333;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            color: white;
            font-size: 40px;
            font-family: 'Georgia', serif;
            font-weight: bold;
            position: sticky;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .logout {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        .logout:hover {
            background-color: #c82333;
        }

        .section {
            margin-bottom: 30px;
        }

        .section h2 {
            color: #555;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f4f4f4;
        }

        form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        form input[type="text"], form input[type="tel"], form textarea {
            width: 95%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 15px;
        }

        form textarea {
            height: 100px;
            resize: vertical;
        }

        form button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #218838;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        .success {
            color: green;
            font-size: 14px;
        }

        .footer {
            padding: 10px 0;
            background-color: #222;
            color: white;
            text-align: center;
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 1000;
        }

        .delete-button {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .delete-button:hover {
            background-color: #c82333;
        }

        .edit-button {
            background-color:#ffa726;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .edit-button:hover {
            background-color:#ffa726;
        }

        .preview-image {
            max-width: 100px;
            max-height: 100px;
            margin-top: 10px;
            border-radius: 5px;
            display: none;
        }

        .loading-spinner {
            text-align: center;
            padding: 20px;
        }

        .achievement-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .achievement-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
        }

        .achievement-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .achievement-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .achievement-buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header-bar">
        Admin Dashboard
        <button class="logout" onclick="logoutUser()">Log Out</button>
    </div>

    <div class="container">
        <h1>Achievements Management</h1>
        <div class="header">
            <div class="admin-info">
                <p><strong>Admin Name:</strong> <span id="adminName">Loading...</span></p>  
                <p><strong>Phone Number:</strong> <span id="adminPhone">Loading...</span></p> 
            </div>
            <a href="mangerInfoUpgradeAnjaz.php" class="edit-button">Edit Admin Information</a>
        </div>

        <div class="section">
            <h2>صور الإنجازات الحالية</h2>
            <div id="achievementsContainer">
                <div class="loading-spinner">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">جاري التحميل...</span>
                    </div>
                    <p>جاري تحميل بيانات الإنجازات...</p>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>إضافة إنجاز جديد</h2>

            <form id="addAchievementForm">
                <div class="mb-3">
                    <label for="achievementTitle">عنوان الإنجاز</label>
                    <input type="text" class="form-control" id="achievementTitle" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="achievementDescription">وصف الإنجاز</label>
                    <textarea class="form-control" id="achievementDescription" name="description" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="achievementImage">صورة الإنجاز</label>
                    <input type="file" class="form-control" id="achievementImage" name="image" accept="image/*">
                    <img id="imagePreview" class="preview-image" src="#" alt="Preview">
                </div>

                <button type="submit" class="btn btn-primary">إضافة الإنجاز</button>
            </form>
        </div>
    </div>

    <div class="footer">
        &copy; كل الحقوق محفوظة لمركز الأجيال الصاعدة 2025.
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
            document.getElementById('adminName').textContent = username || 'Admin';
            
            // Load achievements
            loadAchievements();
            
            // Handle form submission
            document.getElementById('addAchievementForm').addEventListener('submit', addNewAchievement);
            
            // Show image preview
            document.getElementById('achievementImage').addEventListener('change', function(e) {
                const preview = document.getElementById('imagePreview');
                const file = e.target.files[0];
                
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    }
                    reader.readAsDataURL(file);
                } else {
                    preview.style.display = 'none';
                }
            });
        });
        
        // Load all achievements
        async function loadAchievements() {
            const achievements = await getAllAchievementsAdmin();
            displayAchievementsGallery(achievements);
        }
        
        // Display achievements gallery
        function displayAchievementsGallery(achievements) {
            const container = document.getElementById('achievementsContainer');
            
            if (!achievements || achievements.length === 0) {
                container.innerHTML = '<p>لا يوجد إنجازات حالياً.</p>';
                return;
            }
            
            let galleryHtml = '<div class="achievement-gallery">';
            
            achievements.forEach(achievement => {
                galleryHtml += `
                    <div class="achievement-item">
                        <img src="${achievement.imagePath || 'images/default.jpg'}" alt="${achievement.title}">
                        <div class="achievement-title">${achievement.title || 'بدون عنوان'}</div>
                        <div class="achievement-description">${achievement.description?.substring(0, 50) || 'بدون وصف'}${achievement.description?.length > 50 ? '...' : ''}</div>
                        <div class="achievement-buttons">
                            <button class="delete-button" onclick="confirmDeleteAchievement(${achievement.id})">Delete</button>
                            <button class="edit-button" onclick="editAchievement(${achievement.id})">Edit</button>
                        </div>
                    </div>
                `;
            });
            
            galleryHtml += '</div>';
            
            container.innerHTML = galleryHtml;
        }
        
        // Add new achievement
        async function addNewAchievement(e) {
            e.preventDefault();
            
            const titleInput = document.getElementById('achievementTitle');
            const descriptionInput = document.getElementById('achievementDescription');
            const imageInput = document.getElementById('achievementImage');
            
            if (!titleInput.value) {
                Toastify({
                    text: "الرجاء إدخال عنوان الإنجاز",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#F44336",
                }).showToast();
                return;
            }
            
            let imagePath = null;
            
            // Upload image if provided
            if (imageInput.files && imageInput.files[0]) {
                imagePath = await uploadAchievementImage(imageInput.files[0]);
                if (!imagePath) {
                    return;
                }
            }
            
            const achievementData = {
                title: titleInput.value,
                description: descriptionInput.value,
                imagePath: imagePath
            };
            
            const result = await addAchievement(achievementData);
            
            if (result) {
                // Clear form
                document.getElementById('addAchievementForm').reset();
                document.getElementById('imagePreview').style.display = 'none';
                
                // Reload achievements
                await loadAchievements();
            }
        }
        
        // Confirm delete achievement
        function confirmDeleteAchievement(achievementId) {
            if (confirm('هل أنت متأكد من حذف هذا الإنجاز؟')) {
                deleteAchievementById(achievementId);
            }
        }
        
        // Delete achievement
        async function deleteAchievementById(achievementId) {
            const result = await deleteAchievement(achievementId);
            
            if (result) {
                await loadAchievements();
            }
        }
        
        // Edit achievement (redirect to edit page)
        function editAchievement(achievementId) {
            window.location.href = `editAchievement.php?id=${achievementId}`;
        }
    </script>
</body>
</html>