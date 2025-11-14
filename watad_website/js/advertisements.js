// js/advertisements.js (Fixed - removed API_BASE_URL declaration)

// Get active advertisements
async function getActiveAdvertisements() {
    try {
        const response = await fetch(`${API_BASE_URL}/advertisements`);
        const advertisements = await response.json();
        
        return advertisements.map(ad => ({
            ...ad,
            // Build full image URL
            mediaPath: ad.mediaPath ? `${API_BASE_URL.replace('/api', '')}/uploads${ad.mediaPath}` : 'images/carousel-1.jpg'
        }));
    } catch (error) {
        console.error('Error fetching advertisements:', error);
        throw error;
    }
}

// Function to create advertisement carousel
function createAdvertisementCarousel(advertisements, containerId) {
    const container = document.getElementById(containerId);
    if (!container || advertisements.length === 0) {
        if (container) {
            container.innerHTML = '<p class="text-center">لا توجد إعلانات متاحة حالياً</p>';
        }
        return;
    }
    
    // Clear the container
    container.innerHTML = '';
    
    // Build carousel HTML
    let carouselHtml = `
    <div id="advertisementCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
    `;
    
    // Add carousel items
    advertisements.forEach((ad, index) => {
        carouselHtml += `
            <div class="carousel-item ${index === 0 ? 'active' : ''}" data-bs-interval="6000">
                <div class="ad-banner" onclick="openModal('adModal${ad.id}')">
                    <img src="${ad.mediaPath || 'images/carousel-1.jpg'}" alt="${ad.title}" 
                         style="width:100%; height:300px; border-radius:20px; object-fit:cover;">
                    <div class="ad-text">${ad.title} - اضغط للمزيد</div>
                </div>

                <div id="adModal${ad.id}" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('adModal${ad.id}')">&times;</span>
                        <h2>${ad.title}</h2>
                        <img src="${ad.mediaPath || 'images/carousel-1.jpg'}" alt="${ad.title}" 
                             style="width:100%; height:300px; border-radius:20px;">
                        <p>${ad.description || ''}</p>
                    </div>
                </div>
            </div>
        `;
    });
    
    // Add navigation controls
    carouselHtml += `
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#advertisementCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#advertisementCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    `;
    
    // Set the HTML
    container.innerHTML = carouselHtml;
    
    // Initialize carousel
    if (window.bootstrap && window.bootstrap.Carousel) {
        new bootstrap.Carousel(document.getElementById('advertisementCarousel'), {
            interval: 6000
        });
    }
}

// Modal functions
function openModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.style.display = 'flex';
    }
}

function closeModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.style.display = 'none';
    }
}

window.addEventListener('click', function (e) {
    document.querySelectorAll('.modal').forEach(modal => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
});