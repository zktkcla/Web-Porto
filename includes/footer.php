<?php
$email     = "zkgtyr@email.com";
$linkedin  = "https://linkedin.com/in/althaf-hilmi-haidar-283a3a3a6";
$instagram = "https://instagram.com/zkgtyr";
$twitter   = "https://x.com/zkgtyr";
?>

    <!-- Kontak -->
    <section id="kontak" class="min-h-screen flex flex-col justify-center py-20 text-textlight">
        <div class="max-w-[1080px] mx-auto px-6 w-full grid grid-cols-2 gap-14 items-center max-[860px]:grid-cols-1">

            <div>
                <h2 class="reveal font-display font-bold text-[clamp(26px,3.2vw,34px)] mb-4 tracking-tight">Let's Connect!</h2>
                <p class="reveal text-textmutedark max-w-[620px] leading-[1.7]">
                Terbuka untuk peluang dan kolaborasi di bidang Data Analytics, Web Development, dan UI/UX Design. Saya siap membantu mewujudkan solusi berbasis data, teknologi, dan pengalaman pengguna. Hubungi saya melalui kontak berikut.
                </p>
            </div>

            <div class="max-w-[560px] w-full rounded-[10px] overflow-hidden border border-purple/35 shadow-purple bg-inksoft">
                <div class="flex items-center justify-between pl-3.5 pr-1 py-0 bg-purple/10 border-b border-purple/25">
                    <span class="font-display text-xs text-textmutedark">kontak.sh</span>
                    <div class="flex items-center">
                        <span class="w-10 h-8 flex items-center justify-center text-textmutedark hover:bg-purple/20 transition-colors cursor-default">
                            <svg viewBox="0 0 10 10" class="w-2.5 h-2.5" fill="none"><path d="M0 5h10" stroke="currentColor" stroke-width="1"/></svg>
                        </span>
                        <span class="w-10 h-8 flex items-center justify-center text-textmutedark hover:bg-purple/20 transition-colors cursor-default">
                            <svg viewBox="0 0 10 10" class="w-2.5 h-2.5" fill="none"><rect x="0.5" y="0.5" width="9" height="9" stroke="currentColor" stroke-width="1"/></svg>
                        </span>
                        <span class="w-10 h-8 flex items-center justify-center text-textmutedark hover:bg-[#E81123] hover:text-white transition-colors cursor-default">
                            <svg viewBox="0 0 10 10" class="w-2.5 h-2.5" fill="none"><path d="M0 0l10 10M10 0L0 10" stroke="currentColor" stroke-width="1"/></svg>
                        </span>
                    </div>
                </div>
                <div class="p-2.5">

                    <a href="mailto:<?php echo $email; ?>" class="reveal group flex items-center gap-3.5 px-3 py-3.5 rounded-lg transition-all hover:bg-purple/15 hover:pl-[18px] border-b border-purple/15">
                        <span class="w-[38px] h-[38px] shrink-0 flex items-center justify-center rounded-full bg-purple/18 text-lilac">
                            <svg viewBox="0 0 24 24" class="w-[18px] h-[18px]" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/><path d="m3.5 6 8.5 6.5L20.5 6"/></svg>
                        </span>
                        <span class="flex flex-col gap-0.5 flex-grow min-w-0">
                            <span class="font-display text-[11.5px] text-textmutedark uppercase tracking-wide">Email</span>
                            <span class="font-display text-sm text-textlight truncate"><?php echo $email; ?></span>
                        </span>
                        <span class="font-display text-purple opacity-0 -translate-x-1.5 transition-all group-hover:opacity-100 group-hover:translate-x-0">&rarr;</span>
                    </a>

                    <a href="<?php echo $github; ?>" target="_blank" rel="noopener" class="reveal group flex items-center gap-3.5 px-3 py-3.5 rounded-lg transition-all hover:bg-purple/15 hover:pl-[18px] border-b border-purple/15">
                        <span class="w-[38px] h-[38px] shrink-0 flex items-center justify-center rounded-full bg-purple/18 text-lilac">
                            <svg viewBox="0 0 24 24" class="w-[18px] h-[18px]" fill="currentColor"><path d="M12 2a10 10 0 0 0-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.15-1.11-1.46-1.11-1.46-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.56-1.11-4.56-4.93 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02a9.4 9.4 0 0 1 5 0c1.9-1.3 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.59 1.03 2.68 0 3.83-2.34 4.68-4.57 4.92.36.31.68.92.68 1.85v2.75c0 .26.18.58.69.48A10 10 0 0 0 12 2Z"/></svg>
                        </span>
                        <span class="flex flex-col gap-0.5 flex-grow min-w-0">
                            <span class="font-display text-[11.5px] text-textmutedark uppercase tracking-wide">GitHub</span>
                            <span class="font-display text-sm text-textlight truncate"><?php echo preg_replace('#^https?://#', '', $github); ?></span>
                        </span>
                        <span class="font-display text-purple opacity-0 -translate-x-1.5 transition-all group-hover:opacity-100 group-hover:translate-x-0">&rarr;</span>
                    </a>

                    <a href="<?php echo $linkedin; ?>" target="_blank" rel="noopener" class="reveal group flex items-center gap-3.5 px-3 py-3.5 rounded-lg transition-all hover:bg-purple/15 hover:pl-[18px] <?php echo (!empty($instagram) || !empty($twitter)) ? 'border-b border-purple/15' : ''; ?>">
                        <span class="w-[38px] h-[38px] shrink-0 flex items-center justify-center rounded-full bg-purple/18 text-lilac">
                            <svg viewBox="0 0 24 24" class="w-[18px] h-[18px]" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3 9h4v12H3V9Zm7 0h3.8v1.71h.05c.53-.98 1.83-2.02 3.77-2.02 4.03 0 4.78 2.5 4.78 5.76V21h-4v-5.86c0-1.4-.03-3.2-1.98-3.2-1.98 0-2.28 1.5-2.28 3.1V21h-4V9Z"/></svg>
                        </span>
                        <span class="flex flex-col gap-0.5 flex-grow min-w-0">
                            <span class="font-display text-[11.5px] text-textmutedark uppercase tracking-wide">LinkedIn</span>
                            <span class="font-display text-sm text-textlight truncate"><?php echo preg_replace('#^https?://#', '', $linkedin); ?></span>
                        </span>
                        <span class="font-display text-purple opacity-0 -translate-x-1.5 transition-all group-hover:opacity-100 group-hover:translate-x-0">&rarr;</span>
                    </a>

                    <?php if (!empty($instagram) || !empty($twitter)): ?>
                    <?php $socialCols = (!empty($instagram) ? 1 : 0) + (!empty($twitter) ? 1 : 0); ?>
                    <div class="grid <?php echo $socialCols === 2 ? 'grid-cols-2 divide-x divide-purple/20' : 'grid-cols-1'; ?>">
                        <?php if (!empty($instagram)): ?>
                        <a href="<?php echo $instagram; ?>" target="_blank" rel="noopener" title="Instagram"
                           class="group flex items-center justify-center gap-2 py-4 transition-colors hover:bg-[#F43F5E]/15">
                            <svg viewBox="0 0 24 24" class="w-[18px] h-[18px] shrink-0 text-textmutedark transition-colors group-hover:text-[#F43F5E]" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                            </svg>
                            <span class="font-display text-sm text-textlight transition-colors group-hover:text-[#F43F5E]">Instagram</span>
                        </a>
                        <?php endif; ?>
                        <?php if (!empty($twitter)): ?>
                        <a href="<?php echo $twitter; ?>" target="_blank" rel="noopener" title="X (Twitter)"
                           class="group flex items-center justify-center gap-2 py-4 transition-colors hover:bg-[#3B82F6]/15">
                           <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[18px] shrink-0 text-textmutedark transition-colors group-hover:text-[#3B82F6]" fill="none" stroke="currentColor"class="bi bi-twitter-x" viewBox="0 0 16 16">
                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                            </svg>
                            <span class="font-display text-sm text-textlight transition-colors group-hover:text-[#3B82F6]">X</span>
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </section>

    <footer class="bg-ink border-t border-purple/20">
        <div class="max-w-[1080px] mx-auto px-6 py-5 text-center text-[12.5px] text-textmutedark">
            <p>&copy; <?php echo date("Y"); ?> <?php echo $namaLengkap; ?>. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>