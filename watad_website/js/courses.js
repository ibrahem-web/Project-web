// js/courses.js (Fixed - removed API_BASE_URL declaration)

// Get all courses
async function getAllCourses() {
    try {
        const response = await fetch(`${API_BASE_URL}/courses`);
        
        if (!response.ok) {
            throw new Error('Failed to fetch courses');
        }
        
        const courses = await response.json();
        
        // Fix image URLs
        return courses.map(course => ({
            ...course,
            imagePath: course.imagePath ? `${API_BASE_URL.replace('/api', '')}/uploads${course.imagePath}` : 'images/icon1.png'
        }));
        
    } catch (error) {
        console.error('Error fetching courses:', error);
        
        Toastify({
            text: "فشل في جلب الدورات",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return [];
    }
}

// Get course by ID
async function getCourseById(id) {
    try {
        const response = await fetch(`${API_BASE_URL}/courses/${id}`);
        
        if (!response.ok) {
            throw new Error('Failed to fetch course');
        }
        
        return await response.json();
    } catch (error) {
        console.error(`Error fetching course ${id}:`, error);
        
        Toastify({
            text: "فشل في جلب معلومات الدورة",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return null;
    }
}

// Enroll in a course
async function enrollInCourse(courseId) {
    try {
        const token = localStorage.getItem('token');
        if (!token) {
            // Redirect to login page if not logged in
            window.location.href = 'login.php';
            return false;
        }
        
        const response = await fetch(`${API_BASE_URL}/enrollments`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify({ courseId }),
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Enrollment failed');
        }
        
        // Show success notification
        Toastify({
            text: "تم التسجيل في الدورة بنجاح",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#4CAF50",
        }).showToast();
        
        return true;
        
    } catch (error) {
        console.error('Enrollment error:', error);
        
        // Show error notification
        Toastify({
            text: error.message || "فشل التسجيل في الدورة",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return false;
    }
}

// Get user enrolled courses
async function getUserEnrolledCourses() {
    try {
        const token = localStorage.getItem('token');
        if (!token) {
            return [];
        }
        
        const response = await fetch(`${API_BASE_URL}/enrollments/my-courses`, {
            headers: {
                'Authorization': `Bearer ${token}`
            },
        });
        
        if (!response.ok) {
            throw new Error('Failed to fetch enrolled courses');
        }
        
        return await response.json();
    } catch (error) {
        console.error('Error fetching enrolled courses:', error);
        
        Toastify({
            text: "فشل في جلب الدورات المسجلة",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#F44336",
        }).showToast();
        
        return [];
    }
}

function displayCourses(courses, containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    
    container.innerHTML = '';
    
    if (courses.length === 0) {
        container.innerHTML = '<p class="text-center">لا توجد دورات متاحة حالياً</p>';
        return;
    }
    
    courses.forEach(course => {
        // Create course card HTML
        const courseHtml = `
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="${course.imagePath}" class="card-img-top" alt="${course.name}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="course-title">${course.name}</div>
                        <div class="course-info">
                            <span>${course.teacher ? course.teacher.name : 'غير محدد'}</span>
                            <span>${course.duration || '---'}</span>
                        </div>
                        <button class="btn btn-primary btn-register w-100" 
                                onclick="handleCourseEnrollment(${course.id})">تسجيل</button>
                    </div>
                </div>
            </div>
        `;
        
        // Append to container
        container.innerHTML += courseHtml;
    });
}

// Handle course enrollment button click
function handleCourseEnrollment(courseId) {
    // Check if user is logged in
    if (!isLoggedIn()) {
        Toastify({
            text: "يجب تسجيل الدخول أولاً للتسجيل في الدورة",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#FFA000",
        }).showToast();
        
        // Redirect to login page
        setTimeout(() => {
            window.location.href = 'login.php';
        }, 2000);
        return;
    }
    
    // Show enrollment confirmation modal
    const modal = document.getElementById('enrollmentModal');
    if (modal) {
        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();
        
        // Store course ID for enrollment confirmation
        const confirmBtn = document.getElementById('confirmEnrollBtn');
        if (confirmBtn) {
            confirmBtn.setAttribute('data-course-id', courseId);
        }
    }
}

// Handle enrollment confirmation
async function confirmEnrollment(courseId) {
    const result = await enrollInCourse(courseId);
    if (result) {
        // Close modal
        const modal = document.getElementById('enrollmentModal');
        if (modal) {
            const bootstrapModal = bootstrap.Modal.getInstance(modal);
            if (bootstrapModal) {
                bootstrapModal.hide();
            }
        }
    }
}