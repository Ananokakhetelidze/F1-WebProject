const links = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('main section');

    links.forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        const target = link.getAttribute('data-target');

        // Remove active from all links and sections
        links.forEach(l => l.classList.remove('active'));
        sections.forEach(s => s.classList.remove('active'));

        // Add active to clicked link and corresponding section
        link.classList.add('active');
        document.getElementById(target).classList.add('active');
      });
    });