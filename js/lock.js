function showgrid() {
    // Prompt the user for a password
    var enteredPassword = prompt("Enter the password:");

    // Check if the entered password is correct
    if (enteredPassword === "devkota4") {
        // Password is correct, show the content
        document.getElementById('main-gallery-grid').style.display = 'grid';

        // Display success message in an alert
        alert("Password matched! Welcome to the content.");
    } else {
        // Password is incorrect, you can handle this as needed (e.g., display an error message)
        alert("Incorrect password. Access denied.");
    }
}