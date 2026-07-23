<?php
// Variabel utama profil — daftar lengkap variabel yang bisa diedit ada di README.md
$namaLengkap    = "Althaf Hilmi Haidar";
$posisi         = "Mahasiswa Informatika · Data Analyst & Web Developer"; // dipakai di meta description
$github         = "https://github.com/zktkcla";
$githubUsername = basename(rtrim($github, '/'));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $namaLengkap; ?> — Portofolio</title>
    <meta name="description" content="Portofolio <?php echo $namaLengkap; ?>, <?php echo $posisi; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind Play CDN — lihat README.md untuk catatan produksi -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/projects.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: "#14121F",
                        inksoft: "#1D1A2E",
                        paper: "#F8F6FC",
                        paperalt: "#EFEAFA",
                        purple: { DEFAULT: "#7C3AED", deep: "#4C1D95" },
                        lilac: "#C4B5FD",
                        textdark: "#1E1B2E",
                        textlight: "#F1EDFB",
                        textmuted: "#6B6580",
                        textmutedark: "#A79CD1",
                        bordersoft: "#E2DBF5",
                    },
                    fontFamily: {
                        display: ["JetBrains Mono", "ui-monospace", "monospace"],
                        body: ["Manrope", "system-ui", "sans-serif"],
                    },
                    boxShadow: {
                        purple: "0 20px 40px -18px rgba(124,58,237,0.45)",
                    },
                    keyframes: {
                        heroGlowMove: {
                            "0%":   { transform: "translate(-6%, -4%) rotate(-4deg) scale(1)" },
                            "33%":  { transform: "translate(5%, 4%) rotate(3deg) scale(1.1)" },
                            "66%":  { transform: "translate(4%, -6%) rotate(-2deg) scale(1.05)" },
                            "100%": { transform: "translate(-5%, 5%) rotate(4deg) scale(1.12)" },
                        },
                        blink: { "50%": { opacity: 0 } },
                        heroIn: { to: { opacity: 1, transform: "translateY(0)" } },
                        marqueeLeft: { to: { transform: "translateX(-50%)" } },
                        marqueeRight: { from: { transform: "translateX(-50%)" }, to: { transform: "translateX(0)" } },
                    },
                    animation: {
                        heroGlow: "heroGlowMove 9s ease-in-out infinite alternate",
                        blink: "blink 0.9s step-end infinite",
                        heroIn: "heroIn 0.7s ease forwards",
                        marqueeLeft: "marqueeLeft 25s linear infinite",
                        marqueeRight: "marqueeRight 25s linear infinite",
                    },
                },
            },
        };
    </script>

    <style>
        html { scroll-behavior: smooth; }
        .tabbar::-webkit-scrollbar { display: none; }

        @media (max-width: 680px) {
            .nav-toggle { display: flex !important; }
            .tabbar {
                display: none;
                position: absolute;
                top: 56px; left: 0; right: 0;
                background: #14121F;
                flex-direction: column;
                padding: 8px 16px 16px;
                border-bottom: 1px solid rgba(124,58,237,0.3);
            }
            .tabbar.open { display: flex; }
            .tab { padding: 12px 6px; border-radius: 0; border-bottom: 1px solid rgba(124,58,237,0.15); }
        }

        .tab { border-bottom: 2px solid transparent; }
        .tab.active { color: #C4B5FD; background: rgba(124, 58, 237, 0.15); border-bottom-color: #7C3AED; }
        .tab:hover { color: #F1EDFB; }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            * { animation-duration: 0.001ms !important; transition-duration: 0.001ms !important; }
        }

        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.6s cubic-bezier(0.2,0.6,0.2,1), transform 0.6s cubic-bezier(0.2,0.6,0.2,1);
        }
        .reveal.in-view { opacity: 1; transform: translateY(0); }
        .project-grid .reveal:nth-child(1) { transition-delay: 0s; }
        .project-grid .reveal:nth-child(2) { transition-delay: 0.08s; }
        .project-grid .reveal:nth-child(3) { transition-delay: 0.16s; }
        .contact-list .reveal:nth-child(1) { transition-delay: 0s; }
        .contact-list .reveal:nth-child(2) { transition-delay: 0.06s; }
        .contact-list .reveal:nth-child(3) { transition-delay: 0.12s; }
        .contact-list .reveal:nth-child(4) { transition-delay: 0.18s; }

        .cat-tab.active { background: #7C3AED; border-color: #7C3AED; color: #F1EDFB; }
        .cat-tab:hover:not(.active) { border-color: rgba(196,181,253,0.5); color: #F1EDFB; }

        .marquee-track:hover { animation-play-state: paused; }
        @media (prefers-reduced-motion: reduce) {
            .marquee-track { animation: none !important; }
        }
    </style>
</head>
<body class="m-0 font-body text-textlight bg-ink antialiased">

    <!-- Background gradient animasi -->
    <div class="fixed inset-0 -z-10 overflow-hidden bg-ink" aria-hidden="true">
        <div class="absolute -inset-[25%] blur-[70px] opacity-80 animate-heroGlow" style="background:
            radial-gradient(560px circle at 22% 28%, rgba(124,58,237,0.38), transparent 60%),
            radial-gradient(480px circle at 78% 68%, rgba(196,181,253,0.24), transparent 60%),
            radial-gradient(420px circle at 45% 88%, rgba(76,29,149,0.34), transparent 62%);">
        </div>
    </div>

    <!-- Navigasi -->
    <header class="sticky top-0 z-50 bg-ink border-b border-purple/35">
        <div class="max-w-[1080px] mx-auto px-6 flex items-center gap-8 h-14">
            <div class="flex items-center gap-2 font-display text-textlight text-sm shrink-0">
                <span>AlthafHilmiHaidar</span>
            </div>

            <button class="nav-toggle hidden ml-auto flex-col gap-1 bg-transparent border-0 p-2 cursor-pointer" id="navToggle" aria-label="Buka menu">
                <span class="w-5 h-0.5 bg-textlight block"></span>
                <span class="w-5 h-0.5 bg-textlight block"></span>
                <span class="w-5 h-0.5 bg-textlight block"></span>
            </button>

            <nav class="tabbar flex gap-0.5 overflow-x-auto" id="tabbar">
                <a href="index.php#beranda" class="tab active font-display text-[13px] text-textmutedark px-3.5 py-2 rounded-t-md whitespace-nowrap transition-colors">beranda</a>
                <a href="index.php#tentang" class="tab font-display text-[13px] text-textmutedark px-3.5 py-2 rounded-t-md whitespace-nowrap transition-colors">tentang saya</a>
                <a href="index.php#skill" class="tab font-display text-[13px] text-textmutedark px-3.5 py-2 rounded-t-md whitespace-nowrap transition-colors">skill</a>
                <a href="index.php#projek" class="tab font-display text-[13px] text-textmutedark px-3.5 py-2 rounded-t-md whitespace-nowrap transition-colors">projek</a>
                <a href="index.php#kontak" class="tab font-display text-[13px] text-textmutedark px-3.5 py-2 rounded-t-md whitespace-nowrap transition-colors">kontak</a>
            </nav>
        </div>
    </header>
