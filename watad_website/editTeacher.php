<!-- Updated editTeacher.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher</title>
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
            margin-bottom: 15px;
        }

        form label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        form button {
            margin-top: 10px;
        }

        .teacher-info {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .teacher-info h2 {
            margin-top: 0;
        }

        .footer {
            padding: 10px 0;
            background-color: #222;
            color: white;
            text-align: center;
            width: 100%;
            margin-top: 50px;
        }

        .loading-spinner {
            text-align: center;
            padding: 20px;
        }

        .teacher-image {
            max-width: 150px;
            max-height: 150px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .preview-image {
            max-width: 100px;
            max-height: 100px;
            margin-top: 10px;
            border-radius: 5px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="header-bar">
        <a style="text-decoration: none; color: white;" href="adminPage.php">Admin Dashboard &nbsp;</a>
        <button class="logout" onclick="logoutUser()">Log Out</button>
    </div>

    <div class="container">
        <h1>تعديل بيانات المعلم</h1>

        <div id="teacherInfoContainer">
            <div class="loading-spinner">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">جاري التحميل...</span>
                </div>
                <p>جاري تحميل بيانات المعلم...</p>
            </div>
        </div>

        <div class="section">
            <h2>تحديث اسم المعلم</h2>
            <form id="updateNameForm">
                <div class="mb-3">
                    <label for="name" class="form-label">اسم المعلم</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <button type="submit" class="btn btn-primary">تحديث الاسم</button>
            </form>
        </div>

        <div class="section">
            <h2>تحديث رقم الجوال</h2>
            <form id="updatePhoneForm">
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">رقم الجوال</label>
                    <input type="text" class="form-control" id="phoneNumber" required>
                </div>
                <button type="submit" class="btn btn-primary">تحديث رقم الجوال</button>
            </form>
        </div>

        <div class="section">
            <h2>تحديث المساق</h2>
            <form id="updateSubjectForm">
                <div class="mb-3">
                    <label for="subject" class="form-label">المساق</label>
                    <input type="text" class="form-control" id="subject" required>
                </div>
                <button type="submit" class="btn btn-primary">تحديث المساق</button>
            </form>
        </div>

        <div class="section">
            <h2>تحديث المرحلة الدراسية</h2>
            <form id="updateLevelForm">
                <div class="mb-3">
                    <label for="level" class="form-label">المرحلة الدراسية</label>
                    <input type="text" class="form-control" id="level" required>
                </div>
                <button type="submit" class="btn btn-primary">تحديث المرحلة الدراسية</button>
            </form>
        </div>

        <div class="section">
            <h2>تحديث صورة المعلم</h2>
            <form id="updateImageForm">
                <div class="mb-3">
                    <label for="teacherImage" class="form-label">صورة المعلم</label>
                    <input type="file" class="form-control" id="teacherImage" accept="image/*">
                    <img id="imagePreview" class="preview-image" src="#" alt="Preview">
                </div>
                <button type="submit" class="btn btn-primary">تحديث الصورة</button>
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
        let teacherId = null;
        let teacherData = null;
        
        // Check if user is admin and get teacher ID from URL
        document.addEventListener('DOMContentLoaded', async function() {
            if (!checkAdminAccess()) {
                return;
            }
            
            // Get teacher ID from URL
            const urlParams = new URLSearchParams(window.location.search);
            teacherId = urlParams.get('id');
            
            if (!teacherId) {
                Toastify({
                    text: "معرف المعلم غير موجود",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#F44336",
                }).showToast();
                
                setTimeout(() => {
                    window.location.href = 'adminPage.php';
                }, 3000);
                return;
            }
            
            // Load teacher data
            await loadTeacherData();
            
            // Setup form submission handlers
            document.getElementById('updateNameForm').addEventListener('submit', updateTeacherName);
            document.getElementById('updatePhoneForm').addEventListener('submit', updateTeacherPhone);
            document.getElementById('updateSubjectForm').addEventListener('submit', updateTeacherSubject);
            document.getElementById('updateLevelForm').addEventListener('submit', updateTeacherLevel);
            document.getElementById('updateImageForm').addEventListener('submit', updateTeacherImage);
            
            // Show image preview
            document.getElementById('teacherImage').addEventListener('change', function(e) {
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
        
        // Load teacher data
        async function loadTeacherData() {
            try {
                const response = await fetch(`http://localhost:8080/api/teachers/${teacherId}`, {
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    }
                });
                
                if (!response.ok) {
                    throw new Error('Failed to fetch teacher data');
                }
                
                teacherData = await response.json();
                displayTeacherInfo(teacherData);
                
                // Populate form fields
                document.getElementById('name').value = teacherData.name || '';
                document.getElementById('phoneNumber').value = teacherData.phoneNumber || '';
                document.getElementById('subject').value = teacherData.subject || '';
                document.getElementById('level').value = teacherData.level || '';
                
            } catch (error) {
                console.error('Error loading teacher data:', error);
                
                Toastify({
                    text: "فشل في تحميل بيانات المعلم",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#F44336",
                }).showToast();
            }
        }
        
        // Display teacher info
        function displayTeacherInfo(teacher) {
            const container = document.getElementById('teacherInfoContainer');
            
            const html = `
                <div class="teacher-info">
                    <h2>معلومات المعلم</h2>
                    ${teacher.imagePath ? `<img src="${teacher.imagePath}" alt="${teacher.name}" class="teacher-image">` : ''}
                    <table class="table">
                        <tr>
                            <th>الاسم</th>
                            <td>${teacher.name || ''}</td>
                        </tr>
                        <tr>
                            <th>رقم الجوال</th>
                            <td>${teacher.phoneNumber || ''}</td>
                        </tr>
                        <tr>
                            <th>المساق</th>
                            <td>${teacher.subject || ''}</td>
                        </tr>
                        <tr>
                            <th>المرحلة الدراسية</th>
                            <td>${teacher.level || ''}</td>
                        </tr>
                    </table>
                </div>
            `;
            
            container.innerHTML = html;
        }
        
        // Update teacher name
        async function updateTeacherName(e) {
            e.preventDefault();
            
            const nameInput = document.getElementById('name');
            
            if (!nameInput.value) {
                Toastify({
                    text: "الرجاء إدخال اسم المعلم",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#F44336",
                }).showToast();
                return;
            }
            
            const updatedData = { ...teacherData, name: nameInput.value };
            const result = await updateTeacher(teacherId, updatedData);
            
            if (result) {
                teacherData = result;
                displayTeacherInfo(teacherData);
            }
        }
        
        // Update teacher phone
        async function updateTeacherPhone(e) {
            e.preventDefault();
            
            const phoneInput = document.getElementById('phoneNumber');
            
            const updatedData = { ...teacherData, phoneNumber: phoneInput.value };
            const result = await updateTeacher(teacherId, updatedData);
            
            if (result) {
                teacherData = result;
                displayTeacherInfo(teacherData);
            }
        }
        
        // Update teacher subject
        async function updateTeacherSubject(e) {
            e.preventDefault();
            
            const subjectInput = document.getElementById('subject');
            
            const updatedData = { ...teacherData, subject: subjectInput.value };
            const result = await updateTeacher(teacherId, updatedData);
            
            if (result) {
                teacherData = result;
                displayTeacherInfo(teacherData);
            }
        }
        
        // Update teacher level
        async function updateTeacherLevel(e) {
            e.preventDefault();
            
            const levelInput = document.getElementById('level');
            
            const updatedData = { ...teacherData, level: levelInput.value };
            const result = await updateTeacher(teacherId, updatedData);
            
            if (result) {
                teacherData = result;
                displayTeacherInfo(teacherData);
            }
        }
        
        // Update teacher image
        async function updateTeacherImage(e) {
            e.preventDefault();
            
            const imageInput = document.getElementById('teacherImage');
            
            if (!imageInput.files || !imageInput.files[0]) {
                Toastify({
                    text: "الرجاء اختيار صورة",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#F44336",
                }).showToast();
                return;
            }
            
            const imagePath = await uploadTeacherImage(imageInput.files[0]);
            if (!imagePath) {
                return;
            }
            
            const updatedData = { ...teacherData, imagePath };
            const result = await updateTeacher(teacherId, updatedData);
            
            if (result) {
                teacherData = result;
                displayTeacherInfo(teacherData);
                document.getElementById('imagePreview').style.display = 'none';
                document.getElementById('updateImageForm').reset();
            }
        }
    </script>
</body>
</html>