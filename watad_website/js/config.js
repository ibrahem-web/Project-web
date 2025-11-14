// js/config.js - ONLY PLACE WHERE API_BASE_URL IS DECLARED
const API_BASE_URL = 'http://localhost:8080/api';

// Make it globally available
window.API_BASE_URL = API_BASE_URL;

// Debug log to confirm it's loaded
console.log('Config loaded, API_BASE_URL:', API_BASE_URL);