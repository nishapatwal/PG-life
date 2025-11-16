// In js/common.js (ensure this file is included in your index.html)

$(document).ready(function() {
    $('#signup-form').submit(function(event) {
        event.preventDefault(); // Stop default form submission
        // ... (your signup logic) ...
        window.location.href = 'dashboard.html'; // Redirect to dashboard
        // Or window.location.replace('dashboard.html'); for no back button history
    });

    $('#login-form').submit(function(event) {
        event.preventDefault(); // Stop default form submission
        // ... (your login validation logic) ...
        // Example: Check if username and password are not empty
        if ($('#username').val() !== '' && $('#password').val() !== '') {
            window.location.href = 'dashboard.html'; // Redirect to dashboard
            // Or window.location.replace('dashboard.html');
        } else {
            // Show error message
        }
    });
});