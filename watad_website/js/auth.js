// js/auth.js - Clean version without API_BASE_URL declaration

// Wait for API_BASE_URL to be available
function waitForAPI() {
    return new Promise((resolve) => {
        if (window.API_BASE_URL) {
            resolve();
        } else {
            setTimeout(() => waitForAPI().then(resolve), 100);
        }
    });
}

// Login function
async function loginUser(username, password) {
    await waitForAPI();
    
    try {
        const response = await fetch(`${window.API_BASE_URL}/auth/login`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ username, password }),
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Login failed');
        }

        // Store token and user details in localStorage
        localStorage.setItem('token', data.token);
        localStorage.setItem('userId', data.id);
        localStorage.setItem('username', data.username);
        localStorage.setItem('role', data.role);
        
        // Show success notification
        if (typeof Toastify !== 'undefined') {
            Toastify({
                text: "تم تسجيل الدخول بنجاح",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "center",
                backgroundColor: "#4CAF50",
            }).showToast();
        }
        
        // Redirect based on role
        if (data.role === 'ADMIN') {
            window.location.href = 'adminPage.php';
        } else {
            window.location.href = 'index.php';
        }
        
    } catch (error) {
        console.error('Login error:', error);
        
        // Show error notification
        if (typeof Toastify !== 'undefined') {
            Toastify({
                text: error.message || "فشل تسجيل الدخول",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "center",
                backgroundColor: "#F44336",
            }).showToast();
        }
    }
}

// Signup function
async function updateUserProfile(fullName, phoneNumber) {
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/users/profile`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify({ fullName, phoneNumber })
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Failed to update profile');
        }
        
        Toastify({
            text: "تم تحديث الملف الشخصي بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return data;
    } catch (error) {
        console.error('Error updating profile:', error);
        
        Toastify({
            text: error.message || "فشل في تحديث الملف الشخصي",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        throw error;
    }
}
async function changeUserPassword(oldPassword, newPassword) {
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/users/change-password`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify({ oldPassword, newPassword })
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Failed to change password');
        }
        
        Toastify({
            text: "تم تغيير كلمة المرور بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return data;
    } catch (error) {
        console.error('Error changing password:', error);
        
        Toastify({
            text: error.message || "فشل في تغيير كلمة المرور",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        throw error;
    }
}

async function registerUser(username, email, password, fullName, phoneNumber) {
    await waitForAPI();
    
    try {
        const response = await fetch(`${window.API_BASE_URL}/auth/signup`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ 
                username, 
                email, 
                password, 
                fullName, 
                phoneNumber 
            }),
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Registration failed');
        }
        
        // Show success notification
        if (typeof Toastify !== 'undefined') {
            Toastify({
                text: "تم إنشاء الحساب بنجاح، يمكنك تسجيل الدخول الآن",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "center",
                backgroundColor: "#4CAF50",
            }).showToast();
        }
        
        // Redirect to login page
        window.location.href = 'login.php';
        
    } catch (error) {
        console.error('Registration error:', error);
        
        // Show error notification
        if (typeof Toastify !== 'undefined') {
            Toastify({
                text: error.message || "فشل إنشاء الحساب",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "center",
                backgroundColor: "#F44336",
            }).showToast();
        }
    }
}

// Check if user is logged in
function isLoggedIn() {
    return localStorage.getItem('token') !== null;
}

// Get user's role
function getUserRole() {
    return localStorage.getItem('role');
}

// Logout function
function logoutUser() {
    localStorage.removeItem('token');
    localStorage.removeItem('userId');
    localStorage.removeItem('username');
    localStorage.removeItem('role');
    
    // Show logout notification
    if (typeof Toastify !== 'undefined') {
        Toastify({
            text: "تم تسجيل الخروج بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
    }
    
    window.location.href = 'index.php';
}

// Make functions globally available
window.loginUser = loginUser;
window.registerUser = registerUser;
window.isLoggedIn = isLoggedIn;
window.getUserRole = getUserRole;
window.logoutUser = logoutUser;
window.updateUserProfile = updateUserProfile;
window.changeUserPassword = changeUserPassword;