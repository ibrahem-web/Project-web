function waitForAPI() {
    return new Promise((resolve) => {
        if (window.API_BASE_URL) {
            resolve();
        } else {
            setTimeout(() => waitForAPI().then(resolve), 100);
        }
    });
}
// Get all teachers
async function getAllTeachers() {
    await waitForAPI();
    
    try {
        console.log('Fetching teachers from:', `${window.API_BASE_URL}/teachers`);
        const response = await fetch(`${window.API_BASE_URL}/teachers`);
        
        if (!response.ok) {
            throw new Error('Failed to fetch teachers');
        }
        
        const teachers = await response.json();
        console.log('Teachers fetched:', teachers);
        
        // Fix image URLs
        return teachers.map(teacher => ({
            ...teacher,
            imagePath: teacher.imagePath ? `${window.API_BASE_URL.replace('/api', '')}/uploads${teacher.imagePath}` : 'images/icon1.png'
        }));
    } catch (error) {
        console.error('Error fetching teachers:', error);
        
        // Return empty array instead of dummy data
        return [];
    }
}

async function getTeacherById(id) {
    await waitForAPI();
    
    try {
        const response = await fetch(`${window.API_BASE_URL}/teachers/${id}`);
        
        if (!response.ok) {
            throw new Error('Failed to fetch teacher');
        }
        
        const teacher = await response.json();
        
        // Fix image URL
        teacher.imagePath = teacher.imagePath ? `${window.API_BASE_URL.replace('/api', '')}/uploads${teacher.imagePath}` : 'images/icon1.png';
        
        return teacher;
    } catch (error) {
        console.error(`Error fetching teacher ${id}:`, error);
        
        if (typeof Toastify !== 'undefined') {
            Toastify({
                text: "فشل في جلب معلومات المعلم",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "center",
                backgroundColor: "#F44336",
            }).showToast();
        }
        
        return null;
    }
}

// Function to display teachers
function displayTeachers(teachers, containerId) {
    console.log('Displaying teachers:', teachers);
    const container = document.getElementById(containerId);
    if (!container) {
        console.error('Container not found:', containerId);
        return;
    }
    
    container.innerHTML = '';
    
    if (!teachers || teachers.length === 0) {
        container.innerHTML = '<p class="text-center">لا يوجد معلمين متاحين حالياً</p>';
        return;
    }
    
    teachers.forEach(teacher => {
        // Create teacher card HTML
        const teacherHtml = `
            <div class="col-md-4">
              <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#teacher${teacher.id}">
                <img src="${teacher.imagePath}" alt="${teacher.name}">
                <h5>${teacher.name}</h5>
                <div class="arrow">&#9660;</div>
              </div>
              <div class="collapse teacher-info" id="teacher${teacher.id}">
                <p><strong>رقم الهاتف:</strong> ${teacher.phoneNumber || 'غير متوفر'}</p>
                <p><strong>المواد:</strong> ${teacher.subject || 'غير محدد'}</p>
                <p><strong>المستوى:</strong> ${teacher.level || 'غير محدد'}</p>
              </div>
            </div>
        `;
        
        // Append to container
        container.innerHTML += teacherHtml;
    });
    
    console.log('Teachers displayed successfully');
}

// Make functions globally available
window.getAllTeachers = getAllTeachers;
window.getTeacherById = getTeacherById;
window.displayTeachers = displayTeachers;
