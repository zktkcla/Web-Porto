// Navigasi, scroll-reveal, counter, dan animasi mengetik di hero — lihat README.md

document.addEventListener("DOMContentLoaded", function () {
    // Toggle menu mobile
    const navToggle = document.getElementById("navToggle");
    const tabbar = document.getElementById("tabbar");

    if (navToggle && tabbar) {
        navToggle.addEventListener("click", function () {
            tabbar.classList.toggle("open");
        });

        tabbar.querySelectorAll(".tab").forEach(function (tab) {
            tab.addEventListener("click", function () {
                tabbar.classList.remove("open");
            });
        });
    }

    // Highlight tab aktif sesuai posisi scroll
    const sections = document.querySelectorAll("section[id]");
    const tabs = document.querySelectorAll(".tab");

    const observer = new IntersectionObserver(
        function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute("id");
                    tabs.forEach(function (tab) {
                        tab.classList.toggle(
                            "active",
                            tab.getAttribute("href").endsWith("#" + id)
                        );
                    });
                }
            });
        },
        { rootMargin: "-40% 0px -55% 0px" }
    );

    sections.forEach(function (section) {
        observer.observe(section);
    });

    // Scroll-reveal: tambahkan class "in-view" saat elemen .reveal terlihat
    const revealEls = document.querySelectorAll(".reveal");

    if (revealEls.length) {
        const revealObserver = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("in-view");
                        revealObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.90, rootMargin: "0px 0px -60px 0px" }
        );

        revealEls.forEach(function (el) {
            revealObserver.observe(el);
        });
    }

    // Animasi hitung naik untuk angka statistik
    const counterEls = document.querySelectorAll("[data-counter]");
    const prefersReducedMotionCounter = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    function animateCounter(el) {
        const target = parseInt(el.getAttribute("data-counter"), 10) || 0;
        const suffix = el.getAttribute("data-suffix") || "";

        if (prefersReducedMotionCounter) {
            el.textContent = target + suffix;
            return;
        }

        const duration = 3000; // ms
        const startTime = performance.now();

        function step(now) {
            const progress = Math.min((now - startTime) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
            el.textContent = Math.round(eased * target) + suffix;
            if (progress < 1) {
                requestAnimationFrame(step);
            }
        }

        requestAnimationFrame(step);
    }

    if (counterEls.length) {
        const counterObserver = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.4 }
        );

        counterEls.forEach(function (el) {
            counterObserver.observe(el);
        });
    }

    // Animasi mengetik untuk peran (role) di hero
    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    const typedEl = document.getElementById("typedRole");

    if (typedEl) {
        let roles = [];
        try {
            roles = JSON.parse(typedEl.getAttribute("data-roles") || "[]");
        } catch (e) {
            roles = [];
        }

        if (roles.length && !prefersReducedMotion) {
            let roleIndex = 0;
            let charIndex = 0;
            let deleting = false;

            const TYPING_SPEED = 65;    // ms per huruf saat mengetik
            const DELETING_SPEED = 32;  // ms per huruf saat menghapus
            const PAUSE_AFTER_TYPE = 1600; // jeda saat teks selesai diketik penuh
            const PAUSE_AFTER_DELETE = 300; // jeda sebelum mulai mengetik teks berikutnya

            function tick() {
                const current = roles[roleIndex];

                if (!deleting) {
                    charIndex++;
                    typedEl.textContent = current.slice(0, charIndex);

                    if (charIndex === current.length) {
                        deleting = true;
                        setTimeout(tick, PAUSE_AFTER_TYPE);
                        return;
                    }
                    setTimeout(tick, TYPING_SPEED);
                } else {
                    charIndex--;
                    typedEl.textContent = current.slice(0, charIndex);

                    if (charIndex === 0) {
                        deleting = false;
                        roleIndex = (roleIndex + 1) % roles.length;
                        setTimeout(tick, PAUSE_AFTER_DELETE);
                        return;
                    }
                    setTimeout(tick, DELETING_SPEED);
                }
            }

            tick();
        } else if (roles.length) {
            // Reduced motion: langsung tampilkan teks pertama tanpa animasi
            typedEl.textContent = roles[0];
        }
    }
});
