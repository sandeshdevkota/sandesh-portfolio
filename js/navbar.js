function showContent(buttonNumber) {
    // Hide all content divs
    for (let i = 1; i <= 5; i++) {
        document.getElementById(`content${i}`).style.display = 'none';
    }

    // Remove 'active' class from all buttons
    for (let i = 1; i <= 5; i++) {
        document.querySelector(`.button${i}`).classList.remove('active');
    }

    // Show the content of the clicked button
    document.getElementById(`content${buttonNumber}`).style.display = 'block';

    // Add 'active' class to the clicked button
    document.querySelector(`.button${buttonNumber}`).classList.add('active');
}