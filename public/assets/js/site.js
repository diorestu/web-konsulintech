document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.menu_bar[role="button"]').forEach((button) => {
        button.addEventListener('keydown', (event) => {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                button.click();
            }
        });
    });

    const projects = document.querySelector('[data-portfolio-projects]');
    const query = new URLSearchParams(window.location.search).get('q')?.trim().toLocaleLowerCase();
    if (projects && query) {
        let matches = 0;
        projects.querySelectorAll('.project-item').forEach((project) => {
            const matched = project.textContent.toLocaleLowerCase().includes(query);
            project.parentElement.hidden = !matched;
            if (matched) matches++;
        });
        if (!matches) {
            const notice = document.createElement('p');
            notice.className = 'alert alert-info';
            notice.setAttribute('role', 'status');
            notice.textContent = projects.dataset.noResults;
            projects.prepend(notice);
        }
    }

    const scrollToTarget = (target) => {
        const smoother = window.ScrollSmoother?.get();
        if (smoother) {
            document.getElementById('smooth-wrapper').scrollTop = 0;
            smoother.scrollTo(target, true, 'top 100px');
        } else {
            target.scrollIntoView({ block: 'center', behavior: 'smooth' });
        }
    };
    document.addEventListener('click', (event) => {
        const link = event.target.closest('a[href]');
        if (!link) return;
        const url = new URL(link.href, window.location.href);
        if (url.origin !== location.origin || url.pathname !== location.pathname || !url.hash || url.hash === '#') return;
        const target = document.getElementById(decodeURIComponent(url.hash.slice(1)));
        if (!target) return;
        event.preventDefault();
        scrollToTarget(target);
    });
    window.addEventListener('load', () => {
        const errors = document.getElementById('contact-errors');
        const target = errors || document.getElementById(decodeURIComponent(location.hash.slice(1)));
        if (target) requestAnimationFrame(() => {
            scrollToTarget(target);
            if (errors) errors.focus({ preventScroll: true });
        });
    });
});
