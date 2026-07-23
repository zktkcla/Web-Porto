<?php
// Alur: header.php -> Hero -> Tentang -> Skill -> Proyek -> footer.php (kontak)
// Daftar variabel yang bisa diedit: lihat README.md

include 'includes/header.php';
include 'data/projects.php';

$skills = [
    "Data" => [
        ["name" => "Microsoft Excel", "icon" => "microsoftexcel"],
        ["name" => "Google Sheets",   "icon" => "googlesheets"],
        ["name" => "Tableau",         "icon" => null],
        ["name" => "Pandas",          "icon" => "pandas"],
        ["name" => "Matplotlib",      "icon" => null],
    ],
    "Bahasa & Framework" => [
        ["name" => "C",          "icon" => "c"],
        ["name" => "C++",        "icon" => "cplusplus"],
        ["name" => "PHP",        "icon" => "php"],
        ["name" => "JavaScript", "icon" => "javascript"],
        ["name" => "HTML5",      "icon" => "html5"],
        ["name" => "CSS",        "icon" => "css3"],
        ["name" => "Tailwind",   "icon" => "tailwindcss"],
        ["name" => "Python",     "icon" => "python"],
        ["name" => "SQL",        "icon" => null],
        ["name" => "Java",       "icon" => "java"],
    ],
    "Tools & Lainnya" => [
        ["name" => "Git & GitHub", "icon" => "github"],
        ["name" => "Laragon",      "icon" => null],
        ["name" => "MySQL",        "icon" => "mysql"],
        ["name" => "Pandas",       "icon" => "pandas"],
        ["name" => "Figma",        "icon" => "figma"],
    ],
];

$rolesTyping = [
    "Mahasiswa Informatika",
    "Data Enthusiast",
    "Junior Web Developer",
];

$deskripsiHero = "Memiliki minat pada Data Analysis, Web Development, dan UI/UX Design, dengan kemampuan mengolah data, membuat visualisasi, merancang antarmuka yang intuitif, serta mengembangkan aplikasi web yang efisien dan berorientasi pada pengalaman pengguna.";
?>

    <!-- Hero -->
    <section id="beranda" class="relative min-h-[calc(100vh-56px)] flex items-center overflow-hidden text-textlight py-20">
        <div class="relative z-10 max-w-[1080px] mx-auto px-6 w-full grid grid-cols-[1.1fr_1fr] gap-[250px] items-center max-[860px]:grid-cols-1 max-[860px]:gap-12">

            <div class="opacity-0 [animation-delay:0.1s] animate-heroIn">
                <h1 class="font-display font-bold text-[clamp(30px,4.2vw,46px)] leading-tight mb-3.5">
                    Halo, saya <span class="text-lilac"><?php echo $namaLengkap; ?></span>
                </h1>
                <p class="font-display text-[17px] text-textmutedark mb-5 min-h-[40px]">
                    <span id="typedRole" class="typed-role"
                          data-roles='<?php echo htmlspecialchars(json_encode($rolesTyping), ENT_QUOTES, "UTF-8"); ?>'
                    ></span><span class="typed-cursor text-lilac animate-blink" aria-hidden="true">|</span>
                </p>

                <p class="text-[15px] leading-[1.7] text-textmutedark max-w-[440px] mb-7 opacity-0 animate-heroIn [animation-delay:0.4s]">
                    <?php echo $deskripsiHero; ?>
                </p>

                <div class="flex gap-3.5 flex-wrap opacity-0 animate-heroIn [animation-delay:0.55s]">
                    <a href="#projek" class="font-display text-sm px-[22px] py-3 rounded-lg inline-block bg-purple text-white shadow-purple transition-transform hover:-translate-y-0.5">Lihat Projek</a>
                    <a href="assets/cv.pdf" target="_blank" class="font-display text-sm px-[22px] py-3 rounded-lg inline-block border border-lilac/40 text-textlight transition-colors hover:border-lilac hover:text-lilac">Unduh CV</a>
                </div>
            </div>

            <div class="opacity-0 animate-heroIn [animation-delay:0.3s]">
                <div class="rounded-[10px] overflow-hidden border-2 border-purple/45 shadow-purple bg-inksoft">
                    <div class="relative aspect-[3/4] bg-[linear-gradient(160deg,rgba(124,58,237,0.18),rgba(20,18,31,0.4))] group">
                        <img
                            src="assets/img/foto-profil.jpg"
                            alt="Foto profil <?php echo $namaLengkap; ?>"
                            class="w-full h-full object-cover block transition-transform duration-500 group-hover:scale-[1.04]"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >
                        <div class="hidden absolute inset-0 flex-col items-center justify-center gap-3.5 text-center p-6 text-textmutedark border border-dashed border-lilac/35 m-3.5 rounded-lg">
                            <svg viewBox="0 0 24 24" class="w-12 h-12 text-lilac opacity-80" fill="none" stroke="currentColor" stroke-width="1.5">
                                <circle cx="12" cy="8" r="4"></circle>
                                <path d="M4 20c0-4.4 3.6-7 8-7s8 2.6 8 7"></path>
                            </svg>
                            <span class="font-display text-[12.5px] leading-[1.7]">Taruh fotomu di<br><code class="text-lilac">assets/img/foto-profil.jpg</code></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Tentang Saya -->
    <section id="tentang" class="min-h-screen flex flex-col justify-center py-20">
        <div class="max-w-[1080px] mx-auto px-6 w-full">
            <h2 class="reveal font-display font-bold text-[clamp(26px,3.2vw,34px)] mb-4 tracking-tight">Tentang Saya</h2>
            <div class="grid grid-cols-[1.4fr_0.8fr] gap-10 items-center max-[860px]:grid-cols-1">
                <p class="reveal leading-[1.8] text-textmutedark">
                    <?php
                    echo "Mahasiswa Informatika UPN Veteran Jawa Timur yang berfokus pada Data Analytics, Web Development, dan UI/UX Design. Menguasai SQL, Excel, Tableau, PHP, JavaScript, HTML, CSS, dan MySQL untuk membangun dashboard, menganalisis data, serta mengembangkan aplikasi web yang responsif dan mudah digunakan. Memiliki kemampuan analitis, teliti dalam menyelesaikan permasalahan, serta berkomitmen untuk terus mengembangkan solusi berbasis data, teknologi, dan pengalaman pengguna.";
                    ?>
                </p>
                <div class="grid grid-cols-2 gap-3.5">
                    <div class="reveal group bg-white/5 border border-white/10 backdrop-blur-sm rounded-[10px] p-[18px] text-center transition-all duration-300 hover:-translate-y-1 hover:border-purple/50 hover:bg-white/10 hover:shadow-purple cursor-default">
                        <span id="projectCountStat" class="block font-display text-2xl text-lilac font-bold transition-transform duration-300 group-hover:scale-110" data-counter="0" data-suffix="+">0+</span>
                        <span class="text-[12.5px] text-textmutedark">Projek Dibangun</span>
                    </div>
                    <div class="reveal group bg-white/5 border border-white/10 backdrop-blur-sm rounded-[10px] p-[18px] text-center transition-all duration-300 hover:-translate-y-1 hover:border-purple/50 hover:bg-white/10 hover:shadow-purple cursor-default">
                        <span class="block font-display text-2xl text-lilac font-bold transition-transform duration-300 group-hover:scale-110">Sem. 5</span>
                        <span class="text-[12.5px] text-textmutedark">Semester Aktif</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skill -->
    <section id="skill" class="min-h-screen flex flex-col justify-center py-20">
        <div class="max-w-[1080px] mx-auto px-6 w-full">
            <h2 class="reveal font-display font-bold text-[clamp(26px,3.2vw,34px)] mb-8 tracking-tight">Skill &amp; Tools</h2>

            <?php $rowIndex = 0; foreach ($skills as $kategori => $daftar): ?>
                <div class="reveal mb-9">
                    <h3 class="font-display text-sm text-lilac mb-3"><?php echo $kategori; ?></h3>
                    <div class="marquee-wrap overflow-hidden [mask-image:linear-gradient(90deg,transparent,black_8%,black_92%,transparent)]">
                        <div class="marquee-track flex gap-3.5 w-max <?php echo ($rowIndex % 2 === 0) ? 'animate-marqueeLeft' : 'animate-marqueeRight'; ?>">
                            <?php for ($rep = 0; $rep < 2; $rep++): ?>
                                <?php foreach ($daftar as $item): ?>
                                    <span class="shrink-0 inline-flex items-center gap-2 font-display text-[13px] px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-textlight">
                                        <?php if (!empty($item['icon'])): ?>
                                            <img src="https://cdn.simpleicons.org/<?php echo $item['icon']; ?>/C4B5FD"
                                                 alt="" class="w-4 h-4 shrink-0" loading="lazy"
                                                 onerror="this.remove();">
                                        <?php endif; ?>
                                        <?php echo $item['name']; ?>
                                    </span>
                                <?php endforeach; ?>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            <?php $rowIndex++; endforeach; ?>
        </div>
    </section>

    <!-- Proyek -->
    <section id="projek" class="min-h-screen flex flex-col justify-center py-20">
        <div class="max-w-[1080px] mx-auto px-6 w-full">
            <div class="reveal flex items-start justify-between flex-wrap gap-3.5 mb-2">
                <div>
                    <h2 class="font-display font-bold text-[clamp(26px,3.2vw,34px)] tracking-tight m-0">Projek Saya</h2>
                </div>
                <div class="flex items-center gap-2.5">
                    <a href="projek.php"
                       class="mt-1 font-display text-[13px] px-4 py-2.5 rounded-lg border border-purple text-lilac whitespace-nowrap transition-all hover:bg-purple hover:text-white hover:-translate-y-0.5">
                        Selengkapnya &rarr;
                    </a>
                </div>
            </div>
            <p class="reveal text-textmutedark max-w-[620px] leading-[1.7] mb-10">
                Kumpulan projek yang telah saya kerjakan. "Selengkapnya" untuk melihat semua projek per kategori.
            </p>

            <div class="project-grid grid grid-cols-[repeat(auto-fit,minmax(280px,1fr))] gap-[22px]" id="projectGrid">
                <p class="text-textmutedark col-span-full font-display text-sm" id="projectGridStatus">Memuat projek dari GitHub&hellip;</p>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var githubUsername = <?php echo json_encode($githubUsername); ?>;
    var manualProjects  = <?php echo json_encode($projectsManual); ?>;

    var grid       = document.getElementById("projectGrid");
    var statusEl   = document.getElementById("projectGridStatus");
    var countStat  = document.getElementById("projectCountStat");
    var refreshBtn = document.getElementById("refreshProjects");
    var refreshIcon = document.getElementById("refreshIcon");
    var FEATURED_LIMIT = 3;

    function shuffle(arr) {
        var a = arr.slice();
        for (var i = a.length - 1; i > 0; i--) {
            var j = Math.floor(Math.random() * (i + 1));
            var tmp = a[i]; a[i] = a[j]; a[j] = tmp;
        }
        return a;
    }

    function render(isRefresh) {
        if (statusEl) statusEl.textContent = "Memuat projek dari GitHub\u2026";
        if (isRefresh && refreshIcon) refreshIcon.classList.add("animate-spin");

        window.PortfolioProjects.load(githubUsername, manualProjects).then(function (result) {
            if (countStat) {
                countStat.setAttribute("data-counter", result.projects.length);
            }

            var list = isRefresh ? shuffle(result.projects) : result.projects;
            list = list.slice(0, FEATURED_LIMIT);

            grid.innerHTML = list.map(window.PortfolioProjects.cardHTML).join("") ||
                '<p class="text-textmutedark col-span-full">Belum ada projek untuk ditampilkan.</p>';
        }).finally(function () {
            if (refreshIcon) refreshIcon.classList.remove("animate-spin");
        });
    }

    render(false);
    setInterval(function () { render(true); }, 15000);

    if (refreshBtn) {
        refreshBtn.addEventListener("click", function () { render(true); });
    }
});
</script>
