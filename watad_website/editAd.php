<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل إعلان</title>
    <link href="images/icon1.png" rel="icon">
    <!-- Add to head of all pages that need notifications -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="js/config.js"></script>
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

    .header .patient-info {
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
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        position: sticky;
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

    form input[type="text"], form input[type="tel"], form input[type="password"] {
        width: 95%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 15px;
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
        background-color: #222;
        color: white;
        text-align: center;
        padding: 10px 0;
        margin-top: auto;
        width: 100%;
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

  
    .section h2 {
        color: #555;
        border-bottom: 2px solid #ddd;
        padding-bottom: 5px;
        margin-bottom: 20px;
    }

    #addTeachersForm {
        display: flex;
        flex-direction: column;
        gap: 15px; 
    }

    .input-group {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .input-group label {
        font-weight: bold;
        color: #333;
    }

    .input-group input {
        width: 95%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 15px;
    }

    .addTeacher-button {
        padding: 12px 45px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 15px;
        cursor: pointer;
        font-size: 16px;
        align-self: center; 
        transition: background-color 0.3s ease;
    }

    .addTeacher-button:hover {
        background-color: #218838;
    }

    
    @media (max-width: 600px) {
        #addDrugsForm {
            padding: 10px;
        }
    }

</style>
</head>
<body>
<div class="header-bar">
    <a style="text-decoration: none; color: white;" href="adminPageAds.php">لوحة تحكم المشرف &nbsp</a>
    <button class="logout" onclick="logout()">تسجيل الخروج</button>
</div>

<div class="container">
    <h1>صفحة لتعديل بيانات الإعلان</h1>

    <?php if (!empty($error)): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <?php if ($adData): ?>
        <div class="section">
            <h2>معلومات الإعلان</h2>
            <table>
                <tr>
                    <th>عنوان الإعلان</th>
                    <td><?= htmlspecialchars($adData['title']) ?></td>
                </tr>
                <tr>
                    <th>الوصف</th>
                    <td><?= htmlspecialchars($adData['description']) ?></td>
                </tr>
               
            </table>
        </div>
    <?php else: ?>
        <p>لا توجد معلومات إعلان متوفرة للتعديل.</p>
    <?php endif; ?>

    <!-- تحديث عنوان الإعلان -->
    <div class="section">
        <h2>تحديث عنوان الإعلان</h2>
        <form method="post" action="">
            <label for="title">العنوان</label>
            <input type="text" name="title" id="title" required>
            <button type="submit" name="updateTitle">تحديث العنوان</button>
        </form>
    </div>

    <!-- تحديث وصف الإعلان -->
    <div class="section">
        <h2>تحديث وصف الإعلان</h2>
        <form method="post" action="">
            <label for="description">الوصف</label>
            <input type="text" name="description" id="description" required>
            <button type="submit" name="updateDescription">تحديث الوصف</button>
        </form>
    </div>



    <!-- تحديث وصف الإعلان -->
    <div class="section">
        <h2>تحديث وصف الإعلان</h2>
        <form method="post" action="">
              <label for="media">رابط أو صورة الإعلان</label>
                <input type="file" name="media" accept="image/*,video/*">
            <button type="submit" name="updateDescription">تحديث الوصف</button>
        </form>
    </div>


    

   

</div>

<script>
    function logout() {
        window.location.href = 'Classes/logOutManger.php';
    }
</script>

<div class="footer">
    &copy; كل الحقوق محفوظة لمركز الأجيال الصاعدة 2025.
</div>
</body>
</html>
