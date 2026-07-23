<?php
// Halaman semua proyek (GitHub + manual) dengan filter kategori — lihat README.md

include 'includes/header.php';
include 'data/projects.php';
?>

    <section class="min-h-screen py-28">
        <div class="max-w-[1080px] mx-auto px-6">
            <a href="index.php#projek" class="inline-block mt-10 font-display text-[13px] text-textmutedark hover:text-lilac transition-colors mb-4">&larr; Kembali ke beranda</a>
            <h1 class="font-display font-bold text-[clamp(28px,4vw,40px)] tracking-tight mb-4">Semua Proyek</h1>
            <p class="text-textmutedark max-w-[620px] leading-[1.7] mb-8">
                Kumpulan projek yang pernah saya kerjakan dan dikelompokkan berdasarkan kategori. Pilih tab untuk filter kategori.
            </p>

            <div class="flex flex-wrap gap-2.5 mb-10" id="categoryTabs">
                <button type="button" data-filter="all"  class="cat-tab active font-display text-[13px] px-4 py-2 rounded-full border border-white/15 text-textlight transition-colors">Semua</button>
                <button type="button" data-filter="data" class="cat-tab font-display text-[13px] px-4 py-2 rounded-full border border-white/15 text-textmutedark transition-colors">Data</button>
                <button type="button" data-filter="web"  class="cat-tab font-display text-[13px] px-4 py-2 rounded-full border border-white/15 text-textmutedark transition-colors">Web</button>
                <button type="button" data-filter="uiux" class="cat-tab font-display text-[13px] px-4 py-2 rounded-full border border-white/15 text-textmutedark transition-colors">UI &amp; UX</button>
                <button type="button" data-filter="os" class="cat-tab font-display text-[13px] px-4 py-2 rounded-full border border-white/15 text-textmutedark transition-colors">Operating System</button>
            </div>

            <div class="grid grid-cols-[repeat(auto-fit,minmax(280px,1fr))] gap-[22px]" id="allProjectGrid">
                <p class="text-textmutedark col-span-full font-display text-sm">Memuat proyek dari GitHub&hellip;</p>
            </div>

        </div>
    </section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var githubUsername = <?php echo json_encode($githubUsername); ?>;
    var manualProjects  = <?php echo json_encode($projectsManual); ?>;

    var grid = document.getElementById("allProjectGrid");
    var tabs = document.querySelectorAll(".cat-tab");
    var currentFilter = "all";

    function applyFilter() {
        var cards = grid.querySelectorAll("[data-category]");
        cards.forEach(function (card) {
            var show = currentFilter === "all" || card.getAttribute("data-category") === currentFilter;
            card.style.display = show ? "" : "none";
        });
    }

    tabs.forEach(function (tab) {
        tab.addEventListener("click", function () {
            tabs.forEach(function (t) { t.classList.remove("active"); });
            tab.classList.add("active");
            currentFilter = tab.getAttribute("data-filter");
            applyFilter();
        });
    });

    window.PortfolioProjects.load(githubUsername, manualProjects).then(function (result) {
        grid.innerHTML = result.projects.map(window.PortfolioProjects.cardHTML).join("") ||
            '<p class="text-textmutedark col-span-full">Belum ada proyek untuk ditampilkan.</p>';
        applyFilter();
    });
});
</script>
