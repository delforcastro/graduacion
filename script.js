document.addEventListener('DOMContentLoaded', () => {

    /* Menú Flotante (FAB) */
    const fabTrigger = document.getElementById('fabTrigger');
    const fabPanel = document.getElementById('fabPanel');

    function openFab() {
        fabPanel.classList.add('is-open');
        fabTrigger.classList.add('is-open');
        fabTrigger.setAttribute('aria-expanded', 'true');
        fabPanel.setAttribute('aria-hidden', 'false');
    }

    function closeFab() {
        fabPanel.classList.remove('is-open');
        fabTrigger.classList.remove('is-open');
        fabTrigger.setAttribute('aria-expanded', 'false');
        fabPanel.setAttribute('aria-hidden', 'true');
    }

    if (fabTrigger && fabPanel) {
        fabTrigger.addEventListener('click', (e) => {
            e.stopPropagation();
            fabPanel.classList.contains('is-open') ? closeFab() : openFab();
        });

        document.addEventListener('click', (e) => {
            if (!fabPanel.contains(e.target) && !fabTrigger.contains(e.target)) {
                closeFab();
            }
        });

        document.querySelectorAll('[data-close]').forEach(el => {
            el.addEventListener('click', () => setTimeout(closeFab, 80));
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeFab();
        });
    }


    /* Flechas de Scroll (Mobile) */
    const btnUp = document.getElementById('btnTravelUp');
    const btnDown = document.getElementById('btnTravelDown');

    if (btnUp && btnDown) {
        const scrollAmt = () => window.innerHeight * 0.75;
        btnUp.addEventListener('click', () => window.scrollBy({ top: -scrollAmt(), behavior: 'smooth' }));
        btnDown.addEventListener('click', () => window.scrollBy({ top: scrollAmt(), behavior: 'smooth' }));
    }


    /* Egresados - Generación Dinámica */
    const groups = [
        { id: 'group-gastronomia', count: 5 },
        { id: 'group-agroecologia', count: 10 },
        { id: 'group-enologia', count: 12 },
        { id: 'group-software', count: 15 },
        { id: 'group-enfermeria', count: 23 },
    ];

    const nombres = ["Ana", "Juan", "María", "Carlos", "Lucía", "Diego", "Elena", "Mateo",
        "Sofía", "Javier", "Valentina", "Nicolás", "Paula", "Andrés", "Camila", "Ricardo"];
    const apellidos = ["García", "Rodríguez", "Pérez", "Fernández", "López",
        "Martínez", "Sánchez", "González", "Gómez", "Díaz", "Álvarez", "Romero", "Sosa", "Ruiz"];

    const rnd = (arr) => arr[Math.floor(Math.random() * arr.length)];
    const randomName = () => `${rnd(apellidos)} ${rnd(apellidos)}, ${rnd(nombres)}`;

    groups.forEach(({ id, count }) => {
        const container = document.getElementById(id);
        if (!container) return;

        const names = Array.from({ length: count }, randomName)
            .sort((a, b) => a.localeCompare(b, 'es'));

        const fragment = document.createDocumentFragment();
        names.forEach((name, i) => {
            const card = document.createElement('div');
            card.className = 'graduate-card reveal';
            card.style.transitionDelay = `${(i % 4) * 0.08}s`;
            card.innerHTML = `<p class="grad-name">${name}</p>`;
            fragment.appendChild(card);
        });
        container.appendChild(fragment);
    });


    /* Animaciones de Entrada (Reveal) */
    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.08, rootMargin: '0px 0px -40px 0px' }
    );

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

});
