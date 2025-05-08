document.querySelectorAll('.menu a').forEach(menuItem => {
    menuItem.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior
        const page = this.getAttribute('data-page'); // Get the page name

        // Fetch the content for the selected page dynamically
        fetch(`${page}.php`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('content').innerHTML = data; // Update content area
            })
            .catch(error => {
                document.getElementById('content').innerHTML = "<p>Error loading content.</p>";
                console.error('Error:', error);
            });
    });
});
