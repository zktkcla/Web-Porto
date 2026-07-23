// Fetch repo GitHub + gabungkan dengan data manual, hasilkan HTML kartu proyek — lihat README.md
window.PortfolioProjects = (function () {

    const CATEGORY_BY_LANG = {
        "python": "data", "jupyter notebook": "data", "r": "data", "sql": "data",
        "html": "web", "css": "web", "javascript": "web", "typescript": "web",
        "php": "web", "vue": "web", "java": "web", "c++": "web", "c": "web",
    };

    const EXT_BY_LANG = {
        "Python": ".py", "Jupyter Notebook": ".ipynb", "JavaScript": ".js",
        "TypeScript": ".ts", "PHP": ".php", "HTML": ".html", "CSS": ".css",
        "SQL": ".sql", "Java": ".java", "C++": ".cpp", "C": ".c",
    };

    function guessCategory(language) {
        if (!language) return "web";
        return CATEGORY_BY_LANG[language.toLowerCase()] || "web";
    }

    function guessExt(language) {
        return EXT_BY_LANG[language] || ".repo";
    }

    async function fetchGithubRepos(username) {
        const res = await fetch("https://api.github.com/users/" + encodeURIComponent(username) + "/repos?sort=pushed&per_page=100");
        if (!res.ok) throw new Error("GitHub API error " + res.status);
        return res.json();
    }

    function mergeProjects(repos, manualList) {
        const manualByRepo = {};
        const manualOnly = [];

        (manualList || []).forEach(function (m) {
            if (m.repo) {
                manualByRepo[m.repo.toLowerCase()] = m;
            } else {
                manualOnly.push(m);
            }
        });

        const fromGithub = (repos || [])
            .filter(function (r) { return !r.fork; })
            .map(function (r) {
                const o = manualByRepo[r.name.toLowerCase()] || {};
                return {
                    title: o.title || r.name,
                    desc: o.desc || r.description || "Belum ada deskripsi untuk repo ini.",
                    tech: o.tech || (r.language ? [r.language] : []),
                    ext: o.ext || guessExt(r.language),
                    category: o.category || guessCategory(r.language),
                    github: r.html_url,
                    demo: o.demo || r.homepage || "",
                    updated: r.pushed_at,
                };
            });

        const manualCards = manualOnly.map(function (m) {
            return {
                title: m.title || "Proyek",
                desc: m.desc || "",
                tech: m.tech || [],
                ext: m.ext || ".fig",
                category: m.category || "uiux",
                github: "",
                demo: m.link || "",
                updated: null,
            };
        });

        return fromGithub.concat(manualCards).sort(function (a, b) {
            if (!a.updated && !b.updated) return 0;
            if (!a.updated) return 1;
            if (!b.updated) return -1;
            return new Date(b.updated) - new Date(a.updated);
        });
    }

    async function load(username, manualList) {
        try {
            const repos = await fetchGithubRepos(username);
            return { projects: mergeProjects(repos, manualList), source: "github" };
        } catch (err) {
            console.warn("Gagal ambil data dari GitHub, pakai data manual saja:", err);
            return { projects: mergeProjects([], manualList), source: "manual" };
        }
    }

    function escapeHTML(str) {
        return String(str).replace(/[&<>"']/g, function (c) {
            return { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" }[c];
        });
    }

    function cardHTML(p) {
        const techBadges = (p.tech || []).map(function (t) {
            return '<span class="font-display text-[11.5px] px-2.5 py-1 rounded-full bg-white/5 border border-white/10 text-lilac">' + escapeHTML(t) + '</span>';
        }).join("");

        const links = [];
        if (p.github) {
            links.push('<a href="' + p.github + '" target="_blank" rel="noopener" class="font-display text-[12.5px] text-purple hover:text-lilac transition-colors">GitHub &rarr;</a>');
        }
        if (p.demo) {
            links.push('<a href="' + p.demo + '" target="_blank" rel="noopener" class="font-display text-[12.5px] text-purple hover:text-lilac transition-colors">Lihat &rarr;</a>');
        }

        const fileName = escapeHTML(String(p.title).toLowerCase().replace(/\s+/g, "-")) + escapeHTML(p.ext);

        return (
            '<article class="reveal in-view bg-white/5 border border-white/10 rounded-[10px] overflow-hidden backdrop-blur-sm transition-all hover:-translate-y-1 hover:border-purple/40 hover:shadow-[0_22px_36px_-22px_rgba(76,29,149,0.55)]" data-category="' + escapeHTML(p.category) + '">' +
                '<div class="flex items-center gap-2 px-4 py-2.5 bg-white/5 border-b border-white/10 font-display text-xs text-lilac">' +
                    '<span class="bg-purple text-white text-[10px] px-1.5 py-0.5 rounded">' + escapeHTML(p.ext) + '</span>' +
                    '<span>' + fileName + '</span>' +
                '</div>' +
                '<div class="p-[18px_16px_20px]">' +
                    '<h3 class="font-display text-base mb-2 text-textlight">' + escapeHTML(p.title) + '</h3>' +
                    '<p class="text-sm leading-[1.65] text-textmutedark mb-3.5">' + escapeHTML(p.desc) + '</p>' +
                    '<div class="flex flex-wrap gap-1.5 mb-3.5">' + techBadges + '</div>' +
                    '<div class="flex gap-4">' + (links.join("") || '<span class="text-[12.5px] text-textmutedark/60">Tautan belum tersedia</span>') + '</div>' +
                '</div>' +
            '</article>'
        );
    }

    function revealCards(container, stagger) {
        if (!container) return;
        stagger = typeof stagger === "number" ? stagger : 60;
    
        var prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
        var cards = container.querySelectorAll(".reveal");
    
        if (prefersReducedMotion) {
            cards.forEach(function (card) { card.classList.add("in-view"); });
            return;
        }
    
        requestAnimationFrame(function () {
            cards.forEach(function (card, i) {
                setTimeout(function () {
                    card.classList.add("in-view");
                }, i * stagger);
            });
        });
    }

    return { load: load, cardHTML: cardHTML, revealCards: revealCards };
})();
