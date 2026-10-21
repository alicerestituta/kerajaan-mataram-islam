<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asisten Virtual - Kerajaan Mataram Islam di Kota Surakarta</title>
    <meta name="description" content="Pendamping digital sejarah, seni, dan kebudayaan Pura Mangkunegaran Surakarta.">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- Editorial Fonts Matching Reference -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Plus+Jakarta+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-color: #0B0C0B;
            color: #E2DAD0;
            font-family: 'Cormorant Garamond', Georgia, serif;
        }

        .font-sans-ui {
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
        }

        .font-editorial-title {
            font-family: 'Playfair Display', 'Cormorant Garamond', Georgia, serif;
        }

        .chat-scroll::-webkit-scrollbar {
            width: 3px;
        }
        .chat-scroll::-webkit-scrollbar-track {
            background: #0B0C0B;
        }
        .chat-scroll::-webkit-scrollbar-thumb {
            background: #2A2B28;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between selection:bg-[#33312B] selection:text-[#F4EFE6]">

    <!-- ========================================================================= -->
    <!-- TOP HEADER -->
    <!-- ========================================================================= -->
    <header class="w-full max-w-6xl mx-auto px-6 sm:px-10 pt-8 pb-4">
        <div class="flex items-center justify-between pb-4 border-b border-[#252420]">
            <a 
                href="{{ route('home') }}" 
                class="inline-flex items-center justify-center text-[#8C867A] hover:text-[#F4EFE6] transition-colors group" 
                title="Kembali ke Beranda"
                aria-label="Kembali ke Beranda"
            >
                <svg class="w-5 h-5 sm:w-6 sm:h-6 transition-transform group-hover:-translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
    </header>

    <!-- ========================================================================= -->
    <!-- MAIN CONTENT CONTAINER -->
    <!-- ========================================================================= -->
    <main class="w-full max-w-4xl mx-auto px-6 sm:px-8 flex-1 flex flex-col justify-center py-6 sm:py-8">

        <!-- INTRO HERO BLOCK -->
        <div id="introHero" class="text-center mb-8 sm:mb-10">
            <div class="text-2xl sm:text-3xl italic text-[#D5CBB9] mb-1 sm:mb-2">
                Sugeng Rawuh
            </div>
            <h1 class="font-editorial-title text-3xl sm:text-4xl md:text-5xl text-[#F4EFE6] tracking-tight mb-3 sm:mb-4">
                Menelusuri Jejak Sejarah, Seni, dan Warisan Mataram Islam di Surakarta.
            </h1>
        </div>

        <!-- INITIAL GREETING + QUICK QUESTION CARDS (MATCHING REFERENCE EXACTLY) -->
        <div id="initialView" class="space-y-4">

            <!-- Greeting Card -->
            <div class="border border-[#252420] bg-[#111211] p-6 sm:p-7 text-[#E2DAD0] text-base sm:text-lg leading-relaxed font-normal">
                Saya hadir untuk menemani perjalanan Anda mengenal dua warisan agung pecahan Mataram Islam: Keraton Kasunanan dan Pura Mangkunegaran. Apa yang ingin Anda jelajahi hari ini?
            </div>

            <!-- Quick Asking Cards Grid (3 Columns) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3.5 pt-1">
                
                <!-- Card 1 -->
                <button 
                    onclick="askQuickQuestion('Bagaimana kisah berdirinya Mangkunegaran?')"
                    class="border border-[#252420] bg-[#111211] p-5 text-left hover:border-[#4A473E] hover:bg-[#141614] transition-all group flex flex-col justify-between min-h-[110px]"
                >
                    <div class="font-sans-ui text-[10px] sm:text-[11px] tracking-[0.22em] text-[#8C867A] uppercase mb-2">
                        I. &nbsp;SEJARAH
                    </div>
                    <div class="text-sm sm:text-[15px] text-[#DDD5C8] leading-snug group-hover:text-white transition-colors">
                        Bagaimana kisah perpecahan Mataram hingga lahirnya Keraton Surakarta dan Mangkunegaran?
                    </div>
                </button>

                <!-- Card 2 -->
                <button 
                    onclick="askQuickQuestion('Ceritakan tentang tari dan pusaka istana.')"
                    class="border border-[#252420] bg-[#111211] p-5 text-left hover:border-[#4A473E] hover:bg-[#141614] transition-all group flex flex-col justify-between min-h-[110px]"
                >
                    <div class="font-sans-ui text-[10px] sm:text-[11px] tracking-[0.22em] text-[#8C867A] uppercase mb-2">
                        II. &nbsp;SENI & BUDAYA
                    </div>
                    <div class="text-sm sm:text-[15px] text-[#DDD5C8] leading-snug group-hover:text-white transition-colors">
                        Apa perbedaan tradisi tari, busana, dan pusaka antara Keraton dan Mangkunegaran?
                    </div>
                </button>

                <!-- Card 3 -->
                <button 
                    onclick="askQuickQuestion('Apa yang dapat saya temukan di Pura?')"
                    class="border border-[#252420] bg-[#111211] p-5 text-left hover:border-[#4A473E] hover:bg-[#141614] transition-all group flex flex-col justify-between min-h-[110px]"
                >
                    <div class="font-sans-ui text-[10px] sm:text-[11px] tracking-[0.22em] text-[#8C867A] uppercase mb-2">
                        III. &nbsp;KUNJUNGAN
                    </div>
                    <div class="text-sm sm:text-[15px] text-[#DDD5C8] leading-snug group-hover:text-white transition-colors">
                        Panduan wisata, rute, dan apa saja yang bisa saya temukan di kedua istana Solo?
                    </div>
                </button>

            </div>

        </div>

        <!-- ACTIVE CHAT CONVERSATION LOG (Appears when user asks a question) -->
        <div id="conversationView" class="hidden flex-1 flex flex-col justify-end overflow-hidden mb-4">
            <div class="flex items-center justify-between pb-3 border-b border-[#252420] mb-4">
                <span class="font-sans-ui text-[11px] tracking-[0.22em] text-[#8C867A] uppercase">
                    DIALOG BERSAMA ASISTEN
                </span>
                <button onclick="resetConversation()" class="font-sans-ui text-[10px] tracking-[0.18em] text-[#A69E92] hover:text-white uppercase transition-colors">
                    [ Mulai Topik Baru ]
                </button>
            </div>

            <div id="messagesLog" class="overflow-y-auto chat-scroll max-h-[50vh] space-y-4 pr-1">
                <!-- Messages appended dynamically -->
            </div>

            <!-- Typing indicator -->
            <div id="typingIndicator" class="hidden text-xs text-[#8C867A] italic py-2 pl-1 font-light">
                Sedang menyusun catatan sejarah...
            </div>
        </div>

        <!-- INPUT BAR (MATCHING REFERENCE EXACTLY) -->
        <div class="mt-6 sm:mt-7">
            <form onsubmit="handleFormSubmit(event)" class="border border-[#252420] bg-[#111211] p-2 sm:p-2.5 flex items-center justify-between gap-3 focus-within:border-[#4A473E] transition-colors">
                <input 
                    type="text" 
                    id="userQuestionInput"
                    placeholder="Tuliskan pertanyaan Anda di sini..." 
                    class="w-full bg-transparent px-3 sm:px-4 py-1.5 text-sm sm:text-base text-[#E2DAD0] placeholder-[#686359] focus:outline-none font-light"
                    autocomplete="off"
                />
                <button 
                    type="submit" 
                    class="font-sans-ui text-[10px] sm:text-[11px] tracking-[0.22em] text-[#B0A89B] hover:text-white hover:border-[#6B6559] border border-[#33312B] bg-transparent px-6 sm:px-7 py-2.5 uppercase transition-all shrink-0"
                >
                    KIRIM
                </button>
            </form>
        </div>

        <!-- FOOTER DISCLAIMER (MATCHING REFERENCE EXACTLY) -->
        <div class="mt-3.5 sm:mt-4 text-center">
            <p class="font-sans-ui text-[10px] sm:text-[11px] text-[#706B62] font-light tracking-wide">
                Seluruh informasi yang disampaikan diambil dari sumber dan babad sejarah resmi dua istana Surakarta.
            </p>
        </div>

    </main>

    <!-- Empty bottom space balancer -->
    <div class="h-4 sm:h-6"></div>

    <!-- ========================================================================= -->
    <!-- LIGHTWEIGHT SCRIPT ENGINE -->
    <!-- ========================================================================= -->
    <script>
        const historicalAnswers = {
            sejarah: `Praja Mangkunegaran didirikan secara resmi pada 17 Maret 1757 melalui momentum Perjanjian Salatiga, yang mengakhiri perjuangan gerilya panjang Raden Mas Said melawan kekuatan gabungan VOC Belanda.\n\nAtas kepiawaian taktik perang dan kepemimpinannya, Raden Mas Said dikukuhkan sebagai Kanjeng Gusti Pangeran Adipati Arya (KGPAA) Mangkunegara I dengan julukan legendaris "Pangeran Sambernyawa". Di bawah kepemimpinannya, Mangkunegaran tumbuh menjadi praja berdaulat yang mandiri, melahirkan pasukan prajurit elit berkuda wanita pertama di Nusantara, serta meletakkan fondasi falsafah Tri Dharma yang lestari hingga kini.`,

            seni: `Pura Mangkunegaran merupakan kiblat pelestarian seni adiluhung Jawa klasik:\n\n• Tari Sakral: Lahir mahakarya tari Bedhaya Suryasumirat, Bedhaya Anglir Mendhung (menggambarkan strategi perang gerilya Mangkunegara I), dan Bedhaya Diradameta yang bernafaskan keberanian ksatria.\n• Gamelan Pusaka: Tersimpan gamelan Kyai Udan Arum, Kyai Udan Riris, dan Kyai Kanyut Mesem yang berusia ratusan tahun dan hanya ditabuh pada upacara agung tertentu.\n• Pusaka Keris: Keris pusaka Kyai Balabar, Kyai Jalak, dan perlengkapan regalia kerajaan berhias tatahan emas murni peninggalan Mataram.`,

            kunjungan: `Di kawasan Cagar Budaya Pura Mangkunegaran, Anda dapat menjelajahi:\n\n1. Pendopo Ageng — Bangunan joglo kayu jati terbesar di Nusantara seluas 3.500 m² yang dibangun tanpa paku besi, beratap Joglo Trajumas dan berhias lukisan batik Kumudawati 8 warna.\n2. Museum Istana — Menampilkan koleksi busana pengantin tradisional, mahkota, perhiasan emas, arca klasik, dan senjata keris bersejarah.\n3. Pracima Tuin — Taman air dan gastronomi bergaya perpaduan arsitektur Jawa dan Eropa peninggalan era Mangkunegara VII.\n4. Perpustakaan Reksa Pustaka — Tempat penyimpanan ribuan manuskrip kuno, babad, dan arsip bersejarah Jawa.`
        };

        function askQuickQuestion(questionText) {
            switchToConversation();
            appendMessage('user', questionText);
            generateAnswer(questionText);
        }

        function handleFormSubmit(e) {
            e.preventDefault();
            const input = document.getElementById('userQuestionInput');
            const query = input.value.trim();
            if (!query) return;

            switchToConversation();
            appendMessage('user', query);
            input.value = '';
            generateAnswer(query);
        }

        function switchToConversation() {
            document.getElementById('initialView').classList.add('hidden');
            document.getElementById('introHero').classList.add('hidden');
            document.getElementById('conversationView').classList.remove('hidden');
        }

        function resetConversation() {
            document.getElementById('messagesLog').innerHTML = '';
            document.getElementById('conversationView').classList.add('hidden');
            document.getElementById('introHero').classList.remove('hidden');
            document.getElementById('initialView').classList.remove('hidden');
            document.getElementById('userQuestionInput').value = '';
        }

        function appendMessage(sender, text) {
            const container = document.getElementById('messagesLog');
            const el = document.createElement('div');

            if (sender === 'user') {
                el.className = 'border border-[#252420] bg-[#161715] p-4 text-[#F4EFE6] text-sm sm:text-base font-light';
                el.innerHTML = `<span class="font-sans-ui text-[10px] tracking-[0.2em] text-[#8C867A] uppercase block mb-1">PERTANYAAN ANDA</span>` + escapeHtml(text);
            } else {
                el.className = 'border border-[#252420] bg-[#111211] p-5 sm:p-6 text-[#E2DAD0] text-sm sm:text-base leading-relaxed';
                el.innerHTML = `<span class="font-sans-ui text-[10px] tracking-[0.2em] text-[#8C867A] uppercase block mb-2">SANG PENDAMPING</span><div class="whitespace-pre-line">${escapeHtml(text)}</div>`;
            }

            container.appendChild(el);
            container.scrollTop = container.scrollHeight;
        }

        function generateAnswer(query) {
            const typing = document.getElementById('typingIndicator');
            typing.classList.remove('hidden');
            const container = document.getElementById('messagesLog');
            container.scrollTop = container.scrollHeight;

            const q = query.toLowerCase();
            let reply = "";

            if (q.includes('kisah') || q.includes('berdiri') || q.includes('sejarah') || q.includes('sambernyawa') || q.includes('salatiga') || q.includes('said')) {
                reply = historicalAnswers.sejarah;
            } else if (q.includes('tari') || q.includes('seni') || q.includes('pusaka') || q.includes('budaya') || q.includes('gamelan') || q.includes('keris')) {
                reply = historicalAnswers.seni;
            } else if (q.includes('kunjungan') || q.includes('temukan') || q.includes('pendopo') || q.includes('museum') || q.includes('pracima') || q.includes('wisata')) {
                reply = historicalAnswers.kunjungan;
            } else if (q.includes('tri dharma') || q.includes('dharma') || q.includes('semboyan')) {
                reply = `Ajaran Tri Dharma Mangkunegaran (1757) memuat tiga prinsip luhur kepemimpinan dan kebangsaan:\n\n1. Mulat Sarira Hangrasa Wani — Berani mawas diri dan jujur mengakui kekurangan diri sendiri.\n2. Rumangsa Melu Handarbeni — Merasa ikut memiliki tanah air dan warisan kebudayaan.\n3. Wajib Melu Hangrungkebi — Wajib berkorban membela dan melestarikan keluhuran bangsa.`;
            } else {
                reply = `Terima kasih atas pertanyaan Anda mengenai "${query}".\n\nPura Mangkunegaran Surakarta adalah cagar budaya peninggalan Mataram yang sarat nilai adiluhung, mulai dari arsitektur megah Pendopo Ageng tanpa paku besi, tradisi seni tari Bedhaya, hingga kebijaksanaan luhur KGPAA Mangkunegara I.\n\nSilakan pilih topik seputar Sejarah Perjanjian Salatiga, Seni & Pusaka Istana, atau Panduan Kunjungan untuk penjelasan lebih terperinci.`;
            }

            setTimeout(() => {
                typing.classList.add('hidden');
                appendMessage('bot', reply);
            }, 450);
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.innerText = text;
            return div.innerHTML;
        }
    </script>
</body>
</html>
