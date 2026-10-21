<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kerajaan Mataram Islam di Kota Surakarta</title>
    <meta name="description" content="Pura Mangkunegaran Surakarta Hadiningrat — Cagar Budaya Nasional.">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- Renaissance & Classical Editorial Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400;0,6..96,500;0,6..96,600;1,6..96,400&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Pinyon+Script&family=Plus+Jakarta+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-renaissance-display {
            font-family: 'Bodoni Moda', 'Didot', Garamond, serif;
            font-optical-sizing: auto;
        }
        .font-renaissance-script {
            font-family: 'Pinyon Script', cursive;
        }
        .font-archival {
            font-family: 'Cormorant Garamond', Georgia, serif;
        }
        .font-caption {
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
        }

        /* Oil Painting Varnish & Canvas Tone Grading */
        .oil-painting-layer {
            filter: contrast(1.16) saturate(0.92) sepia(0.24) brightness(0.86);
        }

        /* Classical Hairline Link Animation */
        .renaissance-link {
            position: relative;
            letter-spacing: 0.28em;
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .renaissance-link::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 50%;
            width: 0;
            height: 1px;
            background: #EAE3CF;
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            transform: translateX(-50%);
            opacity: 0.7;
        }
        .renaissance-link:hover::after {
            width: 100%;
        }
        .renaissance-link:hover {
            color: #FFFFFF;
            letter-spacing: 0.34em;
        }

        /* =========================================================================
           ENTRANCE ANIMATIONS (Smooth Staggered Fade Up on Load)
           ========================================================================= */
        @keyframes heroFadeUp {
            0% {
                opacity: 0;
                transform: translateY(22px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes heroTitleReveal {
            0% {
                opacity: 0;
                transform: translateY(28px) scale(0.97);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes frameFadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes bgSubtleZoom {
            0% {
                opacity: 0.6;
                transform: scale(1.08);
            }
            100% {
                opacity: 1;
                transform: scale(1.02);
            }
        }

        .animate-hero-bg {
            animation: bgSubtleZoom 2.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            will-change: transform, opacity;
        }

        .animate-frame {
            animation: frameFadeIn 1.8s ease forwards;
            animation-delay: 0.2s;
            opacity: 0;
            will-change: opacity;
        }

        .animate-hero-1 {
            animation: heroFadeUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            animation-delay: 0.25s;
            opacity: 0;
            will-change: transform, opacity;
        }

        .animate-hero-2 {
            animation: heroFadeUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            animation-delay: 0.4s;
            opacity: 0;
            will-change: transform, opacity;
        }

        .animate-hero-3 {
            animation: heroTitleReveal 1.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            animation-delay: 0.55s;
            opacity: 0;
            will-change: transform, opacity;
        }

        .animate-hero-4 {
            animation: heroFadeUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            animation-delay: 0.7s;
            opacity: 0;
            will-change: transform, opacity;
        }

        .animate-hero-5 {
            animation: heroFadeUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            animation-delay: 0.85s;
            opacity: 0;
            will-change: transform, opacity;
        }

        .animate-hero-6 {
            animation: heroFadeUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            animation-delay: 1.0s;
            opacity: 0;
            will-change: transform, opacity;
        }
    </style>
</head>
<body class="bg-[#0A0D0B] text-[#EAE3CF] min-h-screen w-full overflow-x-hidden select-none">

    <!-- =========================================================================
         HERO SECTION (Full Screen Viewport)
         ========================================================================= -->
    <section id="hero" class="relative h-screen w-full overflow-hidden flex flex-col justify-between">
        <div class="absolute inset-0 z-0 overflow-hidden">
            <!-- Primary Photo Asset (Pendopo Ageng Night View) with Gentle Entrance Zoom -->
            <img 
                src="/images/kerajaan-mataram.jpg" 
                alt="Pura Mangkunegaran" 
                class="absolute inset-0 w-full h-full object-cover object-center oil-painting-layer animate-hero-bg"
                style="object-fit: cover; object-position: center center;"
            />

            <!-- Fine Art Glaze / Umber & Raw Sienna Chiaroscuro Overlays -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#0A0D0B]/85 via-transparent to-[#0A0D0B]"></div>
            <div class="absolute inset-0 bg-radial from-[#C5A059]/10 via-[#18231C]/35 to-[#070908]/85 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-[#0E1410]/20 mix-blend-color"></div>

            <!-- Subtle Canvas Linen / Oil Painting Texture Filter -->
            <svg class="pointer-events-none absolute inset-0 w-full h-full opacity-[0.16] mix-blend-overlay" xmlns="http://www.w3.org/2000/svg">
                <filter id="linenCanvas">
                    <feTurbulence type="fractalNoise" baseFrequency="0.75" numOctaves="3" stitchTiles="stitch" />
                    <feColorMatrix type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 0.8 0"/>
                </filter>
                <rect width="100%" height="100%" filter="url(#linenCanvas)" />
            </svg>
        </div>

        <!-- Gallery Register Marks (Entrance Fade In) -->
        <div class="pointer-events-none absolute inset-3 sm:inset-6 md:inset-8 border border-[#EAE3CF]/15 z-20 animate-frame">
            <div class="absolute -top-1.5 -left-1.5 w-3 h-3 border-t border-l border-[#EAE3CF]/50"></div>
            <div class="absolute -top-1.5 -right-1.5 w-3 h-3 border-t border-r border-[#EAE3CF]/50"></div>
            <div class="absolute -bottom-1.5 -left-1.5 w-3 h-3 border-b border-l border-[#EAE3CF]/50"></div>
            <div class="absolute -bottom-1.5 -right-1.5 w-3 h-3 border-b border-r border-[#EAE3CF]/50"></div>
        </div>

        <main class="relative z-30 max-w-5xl mx-auto px-6 text-center my-auto py-2 flex flex-col items-center">
            <!-- 2. Top Script Line -->
            <div class="font-renaissance-script text-2xl sm:text-3xl md:text-4xl text-[#C5A059] tracking-normal mb-1 sm:mb-2 opacity-90 drop-shadow-[0_2px_8px_rgba(0,0,0,0.8)] animate-hero-2">
                Mengenal Lebih Dekat
            </div>

            <!-- 3. Grand Monumental Display Line -->
            <h1 class="font-renaissance-display text-4xl sm:text-6xl md:text-7xl lg:text-[5.5rem] font-medium tracking-[0.08em] sm:tracking-[0.14em] text-[#F4EFE6] uppercase leading-[1.05] drop-shadow-[0_4px_24px_rgba(0,0,0,0.95)] animate-hero-3">
                Kerajaan Mataram Islam
            </h1>

            <!-- 4. Bottom Script Line -->
            <div class="font-renaissance-script text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-[#C5A059] tracking-wide mt-1 sm:mt-2 mb-6 drop-shadow-[0_2px_12px_rgba(0,0,0,0.85)] animate-hero-4">
                di Kota Surakarta
            </div>

            <!-- 5. Poetic Tri Dharma Inscription -->
            <p class="font-archival text-xs sm:text-sm md:text-base text-[#D5CBB9]/80 italic max-w-xl mx-auto tracking-[0.18em] leading-relaxed mb-8 animate-hero-5">
                Kuncara Ruming Bangsa Dumunung Aneng Luhuring Budaya
            </p>

            <!-- 6. Museum / Chatbot Entrance Trigger -->
            <div class="pt-2 animate-hero-6">
                <a 
                    href="/chatbot" 
                    class="renaissance-link font-archival text-[11px] sm:text-xs text-[#EAE3CF]/90 uppercase py-2 px-1 focus:outline-none"
                >
                    [ Tanya Sejarah ]
                </a>
            </div>
        </main>
    </section>

    <!-- =========================================================================
         TIMELINE SECTION (LINIMASA) - Exact Implementation
         ========================================================================= -->
    <section id="linimasa" class="relative bg-[#0B0A09] text-[#EAE3CF] py-28 sm:py-36 px-4 sm:px-8 overflow-hidden">
        
        <!-- Section Header -->
        <div class="max-w-4xl mx-auto text-center mb-24 sm:mb-32">
            <div class="font-renaissance-script text-2xl sm:text-3xl text-[#C5A059] mb-2 tracking-wide">
                Jejak Perjalanan Kerajaan
            </div>
            
            <!-- Title with Horizontal Side Lines -->
            <div class="flex items-center justify-center gap-6 sm:gap-10 mb-5">
                <div class="h-[1px] w-16 sm:w-44 bg-gradient-to-r from-transparent to-[#EAE3CF]/15"></div>
                <h2 class="font-renaissance-display text-3xl sm:text-5xl tracking-[0.28em] text-[#F4EFE6] uppercase font-normal pl-[0.28em]">
                    LINIMASA
                </h2>
                <div class="h-[1px] w-16 sm:w-44 bg-gradient-to-l from-transparent to-[#EAE3CF]/15"></div>
            </div>

            <p class="font-archival italic text-sm sm:text-base text-[#A39B8B] max-w-md mx-auto leading-relaxed tracking-wide">
                Dari berdirinya Mataram Islam di Kotagede hingga<br class="hidden sm:inline">
                lahirnya Pura Mangkunegaran di Surakarta.
            </p>
        </div>

        <!-- Timeline Main Container -->
        <div class="relative max-w-5xl mx-auto">
            
            <!-- Central Vertical Spine Line -->
            <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-[1px] bg-[#EAE3CF]/15 -translate-x-1/2"></div>

            <!-- =================================================================
                 ITEM 1: 1587 - 1601 (AWAL MULA)
                 Left: Image | Right: Text
                 ================================================================= -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-0 items-start mb-24 md:mb-32">
                <!-- Left Column: Image -->
                <div class="md:pr-14 lg:pr-20 flex justify-center md:justify-end">
                     <div class="w-full max-w-[300px] sm:max-w-[330px] aspect-[4/5] overflow-hidden bg-[#141311]">
                        <img 
                            src="/images/kerajaan-mataram.jpg" 
                            alt="Awal Mula Kerajaan Mataram Islam" 
                            class="w-full h-full object-cover object-center"
                        />
                    </div>
                </div>

                <!-- Right Column: Content -->
                <div class="md:pl-10 lg:pl-12 pt-1 flex flex-col items-start text-left">
                    <!-- Date Indicator Row -->
                    <div class="flex items-center gap-4 mb-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#C5A059] shrink-0"></span>
                        <span class="w-8 sm:w-10 h-[1px] bg-[#EAE3CF]/20"></span>
                        <span class="font-archival text-xs sm:text-[13px] tracking-[0.22em] text-[#B8AFA0]">
                            1587 – 1601
                        </span>
                    </div>

                    <!-- Script Subtitle -->
                    <div class="font-renaissance-script text-2xl sm:text-[26px] text-[#C5A059] mb-1">
                        Panembahan Senopati
                    </div>

                    <!-- Main Period Title -->
                    <h3 class="font-renaissance-display text-xl sm:text-2xl tracking-[0.18em] text-[#F4EFE6] uppercase mb-4 font-normal">
                        AWAL MULA
                    </h3>

                    <!-- Description Paragraph -->
                    <p class="font-archival text-sm sm:text-[15px] text-[#9E9689] leading-[1.8] mb-5 max-w-[340px]">
                        Panembahan Senopati mendirikan Kerajaan Mataram Islam dengan pusat pemerintahan di Kotagede, meletakkan dasar bagi dinasti yang kelak menurunkan raja-raja Jawa.
                    </p>

                    <!-- Location Tag -->
                    <div class="font-archival text-[9.5px] sm:text-[10px] tracking-[0.28em] text-[#787267] uppercase">
                        [ KOTAGEDE, YOGYAKARTA ]
                    </div>
                </div>
            </div>

            <!-- =================================================================
                 ITEM 2: 1613 - 1645 (MASA KEEMASAN)
                 Left: Text | Right: Image
                 ================================================================= -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-0 items-start mb-24 md:mb-32">
                <!-- Left Column: Content -->
                <div class="order-2 md:order-1 md:pr-10 lg:pr-12 pt-1 flex flex-col items-start md:items-end text-left md:text-right">
                    <!-- Date Indicator Row -->
                    <div class="flex items-center gap-4 mb-3">
                        <span class="font-archival text-xs sm:text-[13px] tracking-[0.22em] text-[#B8AFA0]">
                            1613 – 1645
                        </span>
                        <span class="w-8 sm:w-10 h-[1px] bg-[#EAE3CF]/20"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-[#C5A059] shrink-0"></span>
                    </div>

                    <!-- Script Subtitle -->
                    <div class="font-renaissance-script text-2xl sm:text-[26px] text-[#C5A059] mb-1">
                        Sultan Agung
                    </div>

                    <!-- Main Period Title -->
                    <h3 class="font-renaissance-display text-xl sm:text-2xl tracking-[0.18em] text-[#F4EFE6] uppercase mb-4 font-normal">
                        MASA KEEMASAN
                    </h3>

                    <!-- Description Paragraph -->
                    <p class="font-archival text-sm sm:text-[15px] text-[#9E9689] leading-[1.8] mb-5 max-w-[340px]">
                        Di bawah Sultan Agung, Mataram mencapai puncak kejayaan—wilayahnya meluas, seni dan budaya Jawa berkembang, dan penanggalan Jawa-Islam disusun.
                    </p>

                    <!-- Location Tag -->
                    <div class="font-archival text-[9.5px] sm:text-[10px] tracking-[0.28em] text-[#787267] uppercase">
                        [ KERTA, PLERED ]
                    </div>
                </div>

                <!-- Right Column: Image -->
                <div class="order-1 md:order-2 md:pl-14 lg:pl-20 flex justify-center md:justify-start">
                    <div class="w-full max-w-[340px] sm:max-w-[420px] overflow-hidden bg-[#141311]">
                        <img 
                            src="/images/peta-persebaran.jpg" 
                            alt="Masa Keemasan Sultan Agung" 
                            class="w-full h-auto block"
                        />
                    </div>
                </div>
            </div>

            <!-- =================================================================
                 ITEM 3: 1755 (PERJANJIAN GIYANTI)
                 Left: Image | Right: Text
                 ================================================================= -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-0 items-start mb-24 md:mb-32">
                <!-- Left Column: Image -->
                <div class="md:pr-14 lg:pr-20 flex justify-center md:justify-end">
                    <div class="w-full max-w-[300px] sm:max-w-[330px] aspect-[4/5] overflow-hidden bg-[#141311]">
                        <img 
                            src="/images/keraton-surakarta.jpg" 
                            alt="Perjanjian Giyanti" 
                            class="w-full h-full object-cover object-center"
                        />
                    </div>
                </div>

                <!-- Right Column: Content -->
                <div class="md:pl-10 lg:pl-12 pt-1 flex flex-col items-start text-left">
                    <!-- Date Indicator Row -->
                    <div class="flex items-center gap-4 mb-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#C5A059] shrink-0"></span>
                        <span class="w-8 sm:w-10 h-[1px] bg-[#EAE3CF]/20"></span>
                        <span class="font-archival text-xs sm:text-[13px] tracking-[0.22em] text-[#B8AFA0]">
                            1755
                        </span>
                    </div>

                    <!-- Script Subtitle -->
                    <div class="font-renaissance-script text-2xl sm:text-[26px] text-[#C5A059] mb-1">
                        Pembagian Mataram
                    </div>

                    <!-- Main Period Title -->
                    <h3 class="font-renaissance-display text-xl sm:text-2xl tracking-[0.18em] text-[#F4EFE6] uppercase leading-[1.35] mb-4 font-normal">
                        PERJANJIAN<br>GIYANTI
                    </h3>

                    <!-- Description Paragraph -->
                    <p class="font-archival text-sm sm:text-[15px] text-[#9E9689] leading-[1.8] mb-5 max-w-[340px]">
                        Mataram dibagi dua menjadi Kasunanan Surakarta dan Kasultanan Yogyakarta, menandai babak baru sejarah Jawa.
                    </p>

                    <!-- Location Tag -->
                    <div class="font-archival text-[9.5px] sm:text-[10px] tracking-[0.28em] text-[#787267] uppercase">
                        [ SURAKARTA HADININGRAT ]
                    </div>
                </div>
            </div>

            <!-- =================================================================
                 ITEM 4: 1757 (BERDIRINYA MANGKUNEGARAN)
                 Left: Text | Right: Image
                 ================================================================= -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-0 items-start">
                <!-- Left Column: Content -->
                <div class="order-2 md:order-1 md:pr-10 lg:pr-12 pt-1 flex flex-col items-start md:items-end text-left md:text-right">
                    <!-- Date Indicator Row -->
                    <div class="flex items-center gap-4 mb-3">
                        <span class="font-archival text-xs sm:text-[13px] tracking-[0.22em] text-[#B8AFA0]">
                            1757
                        </span>
                        <span class="w-8 sm:w-10 h-[1px] bg-[#EAE3CF]/20"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-[#C5A059] shrink-0"></span>
                    </div>

                    <!-- Script Subtitle -->
                    <div class="font-renaissance-script text-2xl sm:text-[26px] text-[#C5A059] mb-1">
                        Perjanjian Salatiga
                    </div>

                    <!-- Main Period Title -->
                    <h3 class="font-renaissance-display text-xl sm:text-2xl tracking-[0.18em] text-[#F4EFE6] uppercase leading-[1.35] mb-4 font-normal">
                        BERDIRINYA<br>MANGKUNEGARAN
                    </h3>

                    <!-- Description Paragraph -->
                    <p class="font-archival text-sm sm:text-[15px] text-[#9E9689] leading-[1.8] mb-5 max-w-[340px]">
                        R.M. Said dikukuhkan sebagai Mangkunegara I, dan Pura Mangkunegaran berdiri sebagai Kadipaten Mangkunegaran di Surakarta.
                    </p>

                    <!-- Location Tag -->
                    <div class="font-archival text-[9.5px] sm:text-[10px] tracking-[0.28em] text-[#787267] uppercase">
                        [ PURA MANGKUNEGARAN ]
                    </div>
                </div>

                <!-- Right Column: Image -->
                <div class="order-1 md:order-2 md:pl-14 lg:pl-20 flex justify-center md:justify-start">
                    <div class="w-full max-w-[300px] sm:max-w-[330px] aspect-[4/5] overflow-hidden bg-[#141311]">
                        <img 
                            src="/images/pura-mangkunegaran.jpg" 
                            alt="Berdirinya Mangkunegaran" 
                            class="w-full h-full object-cover object-center"
                        />
                    </div>
                </div>
            </div>

        </div>
    </section>

</body>
</html>