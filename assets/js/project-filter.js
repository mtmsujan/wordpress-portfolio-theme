// Filter projects
document.addEventListener('DOMContentLoaded', function () {
    // Get all filter buttons
    const filters = document.querySelectorAll('.filter');
    // Get all project items
    const projectItems = document.querySelectorAll('.project-item');

    // Add click event listener to each filter button
    filters.forEach(filter => {
        filter.addEventListener('click', function () {
            const filterValue = this.getAttribute('data-filter');

            // Remove active class from all filters
            filters.forEach(f => f.classList.remove('active'));
            // Add active class to the clicked filter
            this.classList.add('active');

            if (filterValue === 'all') {
                // Show all projects if 'all' filter is selected
                projectItems.forEach(item => item.style.display = 'block');
            } else {
                // Show/Hide projects based on their category classes
                projectItems.forEach(item => {
                    if (item.classList.contains(filterValue)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        });
    });
});
