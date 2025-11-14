
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

<link href="images/icon1.png" rel="icon">
<!-- Add to head of all pages that need notifications -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
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
    <div class="header-bar"><a style=" text-decoration: none;  color: white;" href="adminPageCourse.php"> Admin Dashboard &nbsp </a>
        
        <button class="logout" onclick="logout()">Log Out</button>
    </div>

    <div class="container">
    <h1>Manger Dashboard</h1>
    <div class="header">

            <div class="patient-info">
                <p><strong>Admin Name:</strong> #view name</p>  
                <p><strong>Phone Number:</strong> #view number</p> 
            </div>
            
        </div>
      

        <?php if (!empty($_GET['message'])): ?>
            <p style="color: green;"><?= htmlspecialchars($_GET['message']) ?></p>
        <?php endif; ?>
        
         <!-- Update Personal Information Section -->
      <div class="section">
            <h2>تحديث بيانات المستخدم</h2>

            <!-- Change Phone Number -->
            <form id="updatePhoneForm" method="post" action="">
                <label for="Phone_number">رقم الجوال</label>
                <input name="Phone_number" type="text" id="Phone_number" >

                <button type="submit" name="updatePhoneNumber">تحديث رقم الجوال</button>
            </form>

            <!-- Change Password -->
            <form id="updatePasswordForm" method="post" action="">
          
                <label for="password">كلمة السر</label>
                <input name="password" type="password" id="password">
               
                <label for="confirmPassword">تاكيد كلمة السر</label>
                <input name="confirmPassword" type="password" id="confirmPassword">
               
                <button type="submit" name="updatePassword">تحديث كلمة السر</button>
                <span id="passwordMatch" class="password-match"></span>
            </form>
        </div>
    </div>
    </div>

    <script>
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    const passwordMatch = document.getElementById('passwordMatch');
    const updatePasswordButton = document.querySelector('button[name="updatePassword"]');
    const updatePasswordForm = document.getElementById('updatePasswordForm');

    // Disable the button initially
    updatePasswordButton.disabled = true;

    // Function to validate form inputs
    function validateForm() {
        const password = passwordInput.value.trim();
        const confirmPassword = confirmPasswordInput.value.trim();

        // Check if both fields are filled
        const allFilled = password !== "" && confirmPassword !== "";

        // Check if passwords match
        const passwordsMatch = password === confirmPassword;

        // Toggle button state
        updatePasswordButton.disabled = !(allFilled && passwordsMatch);

        // Show password match feedback
        if (allFilled) {
            if (passwordsMatch) {
                passwordMatch.style.display = 'inline';
                passwordMatch.style.color = 'green';
                passwordMatch.textContent = '✔ Passwords Match';
            } else {
                passwordMatch.style.display = 'inline';
                passwordMatch.style.color = 'red';
                passwordMatch.textContent = '✘ Passwords Do Not Match';
            }
        } else {
            passwordMatch.style.display = 'none'; // Hide feedback if fields are not filled
        }
    }

    // Attach input event listener to form fields
    passwordInput.addEventListener('input', validateForm);
    confirmPasswordInput.addEventListener('input', validateForm);

    // Logout function
    function logout() {
        window.location.href = 'Classes/logOutManger.php';
    }
</script>

          <div class="footer">
          &copy; كل الحقوق محفوظه لمركز الأجيال الصاعدة 2025.
    </div>
</body>
</html>
