# Architecture Decision Records (ADR)
## KratonBot — Kerajaan Mataram Islam di Surakarta

---

### ADR-001: Integrasi Langflow Menggunakan Server-Side Proxy di Laravel

#### Status:
Proposed (Menunggu Persetujuan Pengguna pada Quality Gate 1)

#### Konteks:
Pengguna ingin menghubungkan chatbot web dengan alur Langflow RAG menggunakan API key. Jika pemanggilan API dilakukan langsung dari browser pengguna via JavaScript client:
1. API key Langflow akan bocor ke publik melalui devtools network tab.
2. Muncul potensi kendala Cross-Origin Resource Sharing (CORS).
3. Sulit menerapkan rate limiting per IP pengguna atau mencatat log percakapan di server lokal.

#### Keputusan:
Menerapkan arsitektur **Server-Side Proxy Pattern**:
1. Frontend `chatbot.blade.php` hanya berkomunikasi dengan internal Laravel route (`POST /api/chat`).
2. Laravel controller memvalidasi input, memeriksa CSRF / session, dan mendelegasikan panggilan ke `App\Services\LangflowService`.
3. `LangflowService` menggunakan `Http::withToken(...)` atau `Http::withHeaders(...)` dari Laravel HTTP Client dengan timeout 12 detik.
4. Response diekstrak (teks respon dari `outputs[0].outputs[0].results.message.text` atau `output_value`) dan dikembalikan dalam format JSON bersih `{ success: true, message: "...", session_id: "..." }`.

#### Konsekuensi:
- **Positif:** Keamanan kredensial terjamin 100%, rate limiting dapat diatur di Laravel middleware, error handling terpusat.
- **Negatif:** Terdapat sedikit overhead latensi jaringan server-to-server (umumnya < 50ms).

---

### ADR-002: Resiliency & Graceful Degradation (Fallback Response)

#### Status:
Proposed

#### Konteks:
Layanan cloud gratis Astra DataStax Langflow memiliki kebijakan auto-hibernate saat tidak ada trafik, menghasilkan HTTP 502/503. Pengguna tidak boleh melihat error crash kosong atau layar rusak ketika layanan AI pihak ketiga sedang bangun (*cold start*) atau offline.

#### Keputusan:
1. Menyiapkan `HistoricalFallbackService` di Laravel yang memuat ringkasan sejarah inti (Perjanjian Salatiga, Pangeran Sambernyawa, Tari Bedhaya, Museum & Pracima Tuin Mangkunegaran, dsb).
2. Jika panggilan Langflow mengalami timeout (> 12s) atau status code >= 500:
   - Sistem mencatat error di log Laravel (`storage/logs/laravel.log`).
   - Sistem mengembalikan respon terarah dari fallback service disertai catatan ramah bahwa data disajikan dari arsip lokal cadangan.

#### Konsekuensi:
- Pengalaman pengguna tetap mulus dan informatif dalam kondisi apa pun.

---

### ADR-003: Session Tracking Berkelanjutan

#### Status:
Proposed

#### Konteks:
Langflow mendukung parameter `session_id` pada Chat Input / Chat Output untuk memelihara riwayat percakapan.

#### Keputusan:
1. Frontend menghasilkan UUID unik per sesi tab browser pengguna (`crypto.randomUUID()`).
2. UUID ini diteruskan pada setiap request dialog ke backend, dan diteruskan oleh Laravel ke Langflow.
3. Tombol `[ Mulai Topik Baru ]` akan memperbarui UUID ini dan membersihkan riwayat pesan.
