// js/admin.js

// Admin Authentication Guard
function checkAdminAccess() {
    const token = localStorage.getItem('token');
    const role = localStorage.getItem('role');
    
    if (!token || role !== 'ADMIN') {
        window.location.href = 'login.php';
        return false;
    }
    
    return true;
}

// Helper function to build full image URL
function buildImageUrl(imagePath, defaultImage = 'images/icon1.png') {
    if (!imagePath) return defaultImage;
    
    // If imagePath already contains http, return as is
    if (imagePath.startsWith('http')) return imagePath;
    
    // Build full URL
    return `${API_BASE_URL.replace('/api', '')}/uploads${imagePath}`;
}

// Get all teachers (admin)
async function getAllTeachersAdmin() {
    if (!checkAdminAccess()) return [];
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/teachers`, {
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });
        
        if (!response.ok) {
            throw new Error('Failed to fetch teachers');
        }
        
        const teachers = await response.json();
        
        // Fix image URLs
        return teachers.map(teacher => ({
            ...teacher,
            imagePath: buildImageUrl(teacher.imagePath, 'images/icon1.png')
        }));
    } catch (error) {
        console.error('Error fetching teachers:', error);
        
        Toastify({
            text: "فشل في جلب بيانات المعلمين",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return [];
    }
}

// Add a new teacher
async function addTeacher(teacherData) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/teachers`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify(teacherData),
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Failed to add teacher');
        }
        
        Toastify({
            text: "تم إضافة المعلم بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return data;
    } catch (error) {
        console.error('Error adding teacher:', error);
        
        Toastify({
            text: error.message || "فشل في إضافة المعلم",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Update a teacher
async function updateTeacher(id, teacherData) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/teachers/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify(teacherData),
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Failed to update teacher');
        }
        
        Toastify({
            text: "تم تحديث بيانات المعلم بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return data;
    } catch (error) {
        console.error('Error updating teacher:', error);
        
        Toastify({
            text: error.message || "فشل في تحديث بيانات المعلم",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Delete a teacher
async function deleteTeacher(id) {
    if (!checkAdminAccess()) return false;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/teachers/${id}`, {
            method: 'DELETE',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });
        
        if (!response.ok) {
            throw new Error('Failed to delete teacher');
        }
        
        Toastify({
            text: "تم حذف المعلم بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return true;
    } catch (error) {
        console.error('Error deleting teacher:', error);
        
        Toastify({
            text: error.message || "فشل في حذف المعلم",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return false;
    }
}

// Upload teacher image
async function uploadTeacherImage(file) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const formData = new FormData();
        formData.append('file', file);
        
        const response = await fetch(`${API_BASE_URL}/teachers/upload-image`, {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`
            },
            body: formData
        });

        const imagePath = await response.text();
        
        if (!response.ok) {
            throw new Error('Failed to upload image');
        }
        
        return imagePath;
    } catch (error) {
        console.error('Error uploading image:', error);
        
        Toastify({
            text: "فشل في رفع الصورة",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Get all courses (admin)
async function getAllCoursesAdmin() {
    if (!checkAdminAccess()) return [];
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/courses`, {
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });
        
        if (!response.ok) {
            throw new Error('Failed to fetch courses');
        }
        
        const courses = await response.json();
        
        // Fix image URLs
        return courses.map(course => ({
            ...course,
            imagePath: buildImageUrl(course.imagePath, 'images/icon1.png'),
            teacher: course.teacher ? {
                ...course.teacher,
                imagePath: buildImageUrl(course.teacher.imagePath, 'images/icon1.png')
            } : null
        }));
    } catch (error) {
        console.error('Error fetching courses:', error);
        
        Toastify({
            text: "فشل في جلب بيانات الدورات",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return [];
    }
}

// Add a new course
async function addCourse(courseData) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/courses`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify(courseData),
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Failed to add course');
        }
        
        Toastify({
            text: "تم إضافة الدورة بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return data;
    } catch (error) {
        console.error('Error adding course:', error);
        
        Toastify({
            text: error.message || "فشل في إضافة الدورة",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Update a course
async function updateCourse(id, courseData) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/courses/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify(courseData),
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Failed to update course');
        }
        
        Toastify({
            text: "تم تحديث بيانات الدورة بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return data;
    } catch (error) {
        console.error('Error updating course:', error);
        
        Toastify({
            text: error.message || "فشل في تحديث بيانات الدورة",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Delete a course
async function deleteCourse(id) {
    if (!checkAdminAccess()) return false;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/courses/${id}`, {
            method: 'DELETE',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });
        
        if (!response.ok) {
            throw new Error('Failed to delete course');
        }
        
        Toastify({
            text: "تم حذف الدورة بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return true;
    } catch (error) {
        console.error('Error deleting course:', error);
        
        Toastify({
            text: error.message || "فشل في حذف الدورة",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return false;
    }
}

// Upload course image
async function uploadCourseImage(file) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const formData = new FormData();
        formData.append('file', file);
        
        const response = await fetch(`${API_BASE_URL}/courses/upload-image`, {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`
            },
            body: formData
        });

        const imagePath = await response.text();
        
        if (!response.ok) {
            throw new Error('Failed to upload image');
        }
        
        return imagePath;
    } catch (error) {
        console.error('Error uploading image:', error);
        
        Toastify({
            text: "فشل في رفع الصورة",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Get all advertisements (admin)
async function getAllAdvertisementsAdmin() {
    if (!checkAdminAccess()) return [];
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/advertisements/admin`, {
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });
        
        if (!response.ok) {
            throw new Error('Failed to fetch advertisements');
        }
        
        const ads = await response.json();
        
        // Fix image URLs
        return ads.map(ad => ({
            ...ad,
            mediaPath: buildImageUrl(ad.mediaPath, 'images/carousel-1.jpg')
        }));
    } catch (error) {
        console.error('Error fetching advertisements:', error);
        
        Toastify({
            text: "فشل في جلب بيانات الإعلانات",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return [];
    }
}

// Add a new advertisement
async function addAdvertisement(adData) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/advertisements`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify(adData),
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Failed to add advertisement');
        }
        
        Toastify({
            text: "تم إضافة الإعلان بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return data;
    } catch (error) {
        console.error('Error adding advertisement:', error);
        
        Toastify({
            text: error.message || "فشل في إضافة الإعلان",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Update an advertisement
async function updateAdvertisement(id, adData) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/advertisements/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify(adData),
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Failed to update advertisement');
        }
        
        Toastify({
            text: "تم تحديث بيانات الإعلان بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return data;
    } catch (error) {
        console.error('Error updating advertisement:', error);
        
        Toastify({
            text: error.message || "فشل في تحديث بيانات الإعلان",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Delete an advertisement
async function deleteAdvertisement(id) {
    if (!checkAdminAccess()) return false;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/advertisements/${id}`, {
            method: 'DELETE',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });
        
        if (!response.ok) {
            throw new Error('Failed to delete advertisement');
        }
        
        Toastify({
            text: "تم حذف الإعلان بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return true;
    } catch (error) {
        console.error('Error deleting advertisement:', error);
        
        Toastify({
            text: error.message || "فشل في حذف الإعلان",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return false;
    }
}

// Upload advertisement media
async function uploadAdvertisementMedia(file) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const formData = new FormData();
        formData.append('file', file);
        
        const response = await fetch(`${API_BASE_URL}/advertisements/upload-media`, {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`
            },
            body: formData
        });

        const mediaPath = await response.text();
        
        if (!response.ok) {
            throw new Error('Failed to upload media');
        }
        
        return mediaPath;
    } catch (error) {
        console.error('Error uploading media:', error);
        
        Toastify({
            text: "فشل في رفع الوسائط",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Get all achievements (admin)
async function getAllAchievementsAdmin() {
    if (!checkAdminAccess()) return [];
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/achievements`, {
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });
        
        if (!response.ok) {
            throw new Error('Failed to fetch achievements');
        }
        
        const achievements = await response.json();
        
        // Fix image URLs
        return achievements.map(achievement => ({
            ...achievement,
            imagePath: buildImageUrl(achievement.imagePath, 'images/icon1.png')
        }));
    } catch (error) {
        console.error('Error fetching achievements:', error);
        
        Toastify({
            text: "فشل في جلب بيانات الإنجازات",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return [];
    }
}

// Add a new achievement
async function addAchievement(achievementData) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/achievements`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify(achievementData),
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Failed to add achievement');
        }
        
        Toastify({
            text: "تم إضافة الإنجاز بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return data;
    } catch (error) {
        console.error('Error adding achievement:', error);
        
        Toastify({
            text: error.message || "فشل في إضافة الإنجاز",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Update an achievement
async function updateAchievement(id, achievementData) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/achievements/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify(achievementData),
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Failed to update achievement');
        }
        
        Toastify({
            text: "تم تحديث بيانات الإنجاز بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return data;
    } catch (error) {
        console.error('Error updating achievement:', error);
        
        Toastify({
            text: error.message || "فشل في تحديث بيانات الإنجاز",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Delete an achievement
async function deleteAchievement(id) {
    if (!checkAdminAccess()) return false;
    
    try {
        const token = localStorage.getItem('token');
        const response = await fetch(`${API_BASE_URL}/achievements/${id}`, {
            method: 'DELETE',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });
        
        if (!response.ok) {
            throw new Error('Failed to delete achievement');
        }
        
        Toastify({
            text: "تم حذف الإنجاز بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return true;
    } catch (error) {
        console.error('Error deleting achievement:', error);
        
        Toastify({
            text: error.message || "فشل في حذف الإنجاز",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return false;
    }
}

// Upload achievement image
async function uploadAchievementImage(file) {
    if (!checkAdminAccess()) return null;
    
    try {
        const token = localStorage.getItem('token');
        const formData = new FormData();
        formData.append('file', file);
        
        const response = await fetch(`${API_BASE_URL}/achievements/upload-image`, {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`
            },
            body: formData
        });

        const imagePath = await response.text();
        
        if (!response.ok) {
            throw new Error('Failed to upload image');
        }
        
        return imagePath;
    } catch (error) {
        console.error('Error uploading image:', error);
        
        Toastify({
            text: "فشل في رفع الصورة",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}