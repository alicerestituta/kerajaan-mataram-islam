# Product Requirements Document (PRD)
## KratonBot: Asisten AI Cagar Budaya Kerajaan Mataram Islam di Surakarta

---

### 1. Document Control & Metadata
- **Nama Proyek:** KratonBot (Portal & AI Virtual Assistant Mataram Islam Surakarta)
- **Status:** Draft / Menunggu Persetujuan Pengguna (Quality Gate 1)
- **Target Release:** v1.0.0
- **Lead Orchestrator / Author:** Antigravity AI Pair Programming Team
- **Terakhir Diperbarui:** 2026-11-02

---

### 2. Overview & Problem Statement
#### 2.1 Latar Belakang
Warisan sejarah perpecahan Kerajaan Mataram Islam di Surakarta melahirkan dua entitas budaya agung: **Keraton Kasunanan Surakarta Hadiningrat** dan **Pura Mangkunegaran**. Informasi mengenai sejarah, arsitektur pusaka (seperti Pendopo Ageng, Pracima Tuin), seni tari sakral (Bedhaya Suryasumirat, Bedhaya Anglir Mendhung), hingga panduan kunjungan wisata budaya seringkali terfragmentasi dan sulit diakses dengan penjelasan interaktif yang terpercaya.

#### 2.2 Problem Statement
- Pengunjung web membutuhkan panduan interaktif berbasis dialog cerdas (*conversational agent*) yang dapat menjawab pertanyaan seputar sejarah, tata krama, silsilah, dan wisata sejarah secara akurat.
- Antarmuka chatbot saat ini di `resources/views/chatbot.blade.php` masih menggunakan *hardcoded mock responses* di sisi client.
- Dibutuhkan integrasi nyata dengan alur **Langflow RAG (Retrieval-Augmented Generation)** yang terhubung dengan Astra DB Vector Store (`kraton_documents`) dan Google Gemini LLM.

---

### 3. Goals & Non-Goals
#### 3.1 Goals (Tujuan Utama)
1. **Integrasi Langflow RAG:** Menghubungkan antarmuka `/chatbot` ke backend Langflow melalui endpoint aman (Laravel proxy controller) agar API key tidak terekspos ke browser publik.
2. **Knowledge Retrieval Terpercaya:** Menyajikan jawaban berbasis dokumen resmi sejarah Keraton Surakarta dan Pura Mangkunegaran melalui RAG Astra DB.
3. **Session & History Continuity:** Mendukung *session memory* per sesi percakapan pengguna sehingga dialog dapat berkesinambungan.
4. **Resilience & Graceful Fallback:** Menyediakan penanganan error yang anggun jika API Langflow atau Astra DB mengalami latensi tinggi atau status *hibernate* (502/503), dengan beralih ke cache / kurasi jawaban lokal.
5. **Preservasi Estetika Editorial:** Menjaga keindahan desain bertema *renaissance/heritage dark editorial* yang telah dibangun pada Blade view.

#### 3.2 Non-Goals (Bukan Ruang Lingkup Saat Ini)
- Menggantikan sistem tiket fisik resmi keraton secara langsung (booking calendar via Composio Google Calendar bersifat penunjang/fase berikutnya).
- Memberikan jawaban di luar konteks sejarah, seni, budaya, dan pariwisata Keraton Surakarta dan Pura Mangkunegaran.
- Melakukan fine-tuning model LLM dari awal (RAG via Langflow sudah mencukupi).

---

### 4. Target Persona Pengguna
1. **Wisatawan & Edukator Budaya:** Mencari panduan etiket kunjungan, jadwal upacara adat (misal Kirab Malam 1 Sura), dan objek penting di Pura Mangkunegaran dan Keraton Solo.
2. **Pelajar & Peneliti Sejarah:** Membutuhkan konteks akurat mengenai Perjanjian Giyanti (1755), Perjanjian Salatiga (1757), kiprah Raden Mas Said (KGPAA Mangkunegara I / Pangeran Sambernyawa), dan filosofi Tri Dharma.
3. **Masyarakat Umum / Penggemar Seni Jawa:** Ingin mengetahui keunikan seni tari, busana adat, gamelan pusaka (Kyai Udan Arum, Kyai Kanyut Mesem), serta arsitektur tanpa paku di Pendopo Ageng.

---

### 5. Feature Prioritization & Scope (MoSCoW)

| Kategori | ID | Fitur | Deskripsi | Prioritas |
|---|---|---|---|:---:|
| **Backend** | BE-01 | Langflow Client Service | Service PHP di Laravel untuk memanggil Langflow REST API dengan autentikasi `Authorization: Bearer <API_KEY>`. | **P0 (Must)** |
| **Backend** | BE-02 | Chatbot Proxy Controller | Endpoint API internal (`POST /api/chat`) dengan rate limiting & validasi input, mencegah kebocoran API key. | **P0 (Must)** |
| **Backend** | BE-03 | Session State Handler | Pengelolaan `session_id` untuk mempertahankan memori percakapan berurutan. | **P0 (Must)** |
| **Backend** | BE-04 | Offline / Fallback Handler | Fallback respons cerdas saat Astra DB / Langflow mengalami downtime/sleep (502/503). | **P0 (Must)** |
| **Frontend** | FE-01 | Dynamic Fetch Integration | Menghubungkan form input & quick question cards di `chatbot.blade.php` ke `/api/chat`. | **P0 (Must)** |
| **Frontend** | FE-02 | Streaming / Real-time Typing UX | Efek visual pengetikan halus dengan indikator status pengolahan catatan sejarah. | **P1 (Should)** |
| **Integrasi** | INT-01| Astra DB Vector Store Sync | Verifikasi koleksi `kraton_documents` di Astra DB untuk proses retrieval RAG. | **P1 (Should)** |
| **Integrasi** | INT-02| Composio Calendar Sync | Pemicuan aksi Google Calendar via Langflow saat pengguna menanyakan reservasi agenda. | **P2 (Could)** |

---

### 6. User Stories & Acceptance Criteria

#### US-01: Mengirim Pertanyaan Sejarah Bebas
- **Sebagai** pengguna website,
- **Saya ingin** mengetik pertanyaan spesifik seputar sejarah Mataram Islam di kotak dialog,
- **Sehingga** saya mendapatkan jawaban akurat yang bersumber dari arsip RAG KratonBot.
- **Acceptance Criteria:**
  1. Input pertanyaan dikirim via AJAX/fetch ke endpoint internal Laravel.
  2. Sistem menampilkan indikator loading (*"Sedang menelusuri catatan sejarah..."*).
  3. Respon dari Langflow diterima dan ditampilkan dalam format dialog bergaya editorial.
  4. Riwayat pesan tetap tersusun rapi dan auto-scroll ke bawah.

#### US-02: Memilih Topik Cepat (Quick Action Cards)
- **Sebagai** pengguna baru,
- **Saya ingin** mengklik salah satu kartu cepat (Sejarah, Seni & Budaya, Kunjungan),
- **Sehingga** dialog langsung terbuka tanpa harus mengetik manual.
- **Acceptance Criteria:**
  1. Mengklik kartu langsung menyamarkan hero intro dan memunculkan conversation view.
  2. Pertanyaan kartu otomatis dieksekusi dan dijawab oleh sistem.

#### US-03: Mulai Topik Baru (Reset Session)
- **Sebagai** pengguna,
- **Saya ingin** mengatur ulang sesi percakapan dengan tombol *[ Mulai Topik Baru ]*,
- **Sehingga** riwayat dibersihkan dan ID sesi baru dibuat di Langflow.
- **Acceptance Criteria:**
  1. Tombol me-reset tampilan kembali ke initial cards.
  2. Sesi chat lama dibersihkan dari memori browser dan `session_id` baru digenerate.

---

### 7. Non-Functional Requirements (NFR)
1. **Keamanan (Security):**
   - API key Langflow (`sk-...`) dan token Astra DB (`AstraCS:...`) **wajib** disimpan di `.env` server dan tidak boleh masuk ke bundle client JavaScript atau git commit.
   - Endpoint `/api/chat` dilindungi CSRF token dan rate-limiting (misal: 20 request per menit per IP).
   - Sanitasi input teks untuk mencegah XSS & prompt injection dasar.
2. **Performa (Performance):**
   - Response time proxy backend ke Langflow ditargetkan < 4 detik (pada kondisi model aktif).
   - Timeout diset maksimal 15 detik sebelum beralih ke gracefully degraded fallback response.
3. **Aksesibilitas & UI/UX:**
   - Desain responsif di layar mobile, tablet, dan desktop.
   - Kontras warna teks memenuhi standar keterbacaan (WCAG AA).

---

### 8. Asumsi & Ketergantungan (Assumptions & Dependencies)
1. **Langflow Server / Instance Host:**
   - *Asumsi:* Pengguna memiliki instance Langflow aktif di DataStax Astra (`https://api.langflow.astra.datastax.com`) atau server Langflow mandiri.
   - *Catatan Status:* Pengujian awal menunjukkan Astra DB / Langflow Cloud mengembalikan status 502/503 (kemungkinan cluster dalam mode *idle/sleep* yang memerlukan tombol wake-up di dashboard Astra DataStax).
2. **Koleksi Vektor Dokumen:**
   - *Asumsi:* Koleksi Astra DB bernama `kraton_documents` dengan embeddings Google Gemini sudah siap atau dapat diisi menggunakan alur baca dokumen di `Flow.json`.
3. **Fallback Resiliency:**
   - Sistem akan memiliki *built-in fallback knowledge* lokal jika koneksi ke Langflow terputus, sehingga pengguna tidak pernah mendapati layar error kosong.

---

### 9. Milestones & Delivery Roadmap
- **Milestone 1:** Persetujuan PRD & Dokumen Arsitektur (Quality Gate 1) — *Tahap Sekarang*.
- **Milestone 2:** Konfigurasi Environtment (`.env`) & Laravel Service Proxy (`LangflowService`, Controller, Route).
- **Milestone 3:** Integrasi Frontend `chatbot.blade.php` (AJAX dynamic interaction & session management).
- **Milestone 4:** Pengujian Fungsional, Verifikasi Visual Browser, & Audit Keamanan (Quality Gate 2).
- **Milestone 5:** Rilis & Git Stage Review (Quality Gate 3).
