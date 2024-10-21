$(document).ready(function() {
    $('#loginForm').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        const email = $('#email').val();
        const password = $('#password').val();

        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: { email: email, password: password }, // Data to be sent
            dataType: 'json', // Expect JSON response from server
            success: function(response) {
                if (response.status === "Login Successful") {
                    window.location.href = 'dashboard.php';
                } else {
                    alert(response.message); // Display error message
                }
            },
            error: function() {
                alert("An error occurred while processing the login request.");
            }
        });
    });
});