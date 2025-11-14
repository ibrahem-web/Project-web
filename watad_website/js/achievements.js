// js/achievements.js (Fixed - removed API_BASE_URL declaration)

// Get all achievements
async function getAllAchievements() {
    try {
        const response = await fetch(`${API_BASE_URL}/achievements`);
        const achievements = await response.json();
        
        return achievements.map(achievement => ({
            ...achievement,
            // Build full image URL
            imagePath: achievement.imagePath ? `${API_BASE_URL.replace('/api', '')}/uploads${achievement.imagePath}` : 'images/icon1.png'
        }));
    } catch (error) {
        console.error('Error fetching achievements:', error);
        throw error;
    }
}

// Function to display achievements in carousels
function displayAchievements(achievements, containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    
    if (!achievements || achievements.length === 0) {
        container.innerHTML = '<p class="text-center">لا توجد إنجازات متاحة حالياً</p>';
        return;
    }
    
    // Clear the container
    container.innerHTML = '';
    
    // Create the row to hold carousels
    const row = document.createElement('div');
    row.className = 'row justify-content-center';
    container.appendChild(row);
    
    // Group achievements into sets of 2 (for 3 carousels with 2 items each)
    const achievementGroups = [];
    for (let i = 0; i < achievements.length; i += 2) {
        achievementGroups.push(achievements.slice(i, i + 2));
    }
    
    // Limit to 3 carousels (6 achievements)
    const limitedGroups = achievementGroups.slice(0, 3);
    
    // Create carousels
    limitedGroups.forEach((group, index) => {
        const colDiv = document.createElement('div');
        colDiv.className = 'col-md-4';
        
        let carouselHtml = `
            <div id="carousel${index + 1}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
        `;
        
        group.forEach((achievement, achievementIndex) => {
            carouselHtml += `
                <div class="carousel-item ${achievementIndex === 0 ? 'active' : ''}">
                    <img src="${achievement.imagePath || 'images/image1.jpg'}" class="d-block w-100 carousel-image" alt="${achievement.title}">
                </div>
            `;
        });
        
        carouselHtml += `
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel${index + 1}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel${index + 1}" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        `;
        
        colDiv.innerHTML = carouselHtml;
        row.appendChild(colDiv);
    });
}