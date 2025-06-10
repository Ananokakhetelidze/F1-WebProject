
document.querySelectorAll('.filter-button').forEach(button => {
    button.addEventListener('click', () => {
        // Update active button
        document.querySelectorAll('.filter-button').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const filter = button.getAttribute('data-filter');
        const rows = document.querySelectorAll('.race-schedule tbody tr');

        rows.forEach(row => {
            const status = row.querySelector('.race-status').classList.contains('status-' + filter);
            row.style.display = filter === 'all' || status ? '' : 'none';
        });
    });
});
