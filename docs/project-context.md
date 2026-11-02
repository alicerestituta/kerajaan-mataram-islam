# Project Context: Kerajaan Mataram Islam di Surakarta

Dokumen ini mencatat konteks proyek, status aktif, konfigurasi lingkungan, dan ketergantungan sistem untuk mengoptimalkan penggunaan token AI.

---

## 1. Identitas Proyek
- **Nama Aplikasi:** Portal Budaya & KratonBot (Kerajaan Mataram Islam Surakarta)
- **Teknologi Utama:** 
  - Framework Backend: Laravel 12 (PHP 8.2+)
  - Frontend: Blade Templates, Tailwind CSS v4, Vanilla JS, Google Fonts (Bodoni Moda, Cormorant Garamond, Pinyon Script, Plus Jakarta Sans)
  - UI Component Engine: Livewire / Flux
  - AI Engine: Langflow (Flow ID: `7e293092-5ba0-4e31-8b1b-e858fb5b8e7a`)
  - Vector Database: DataStax Astra DB (`db_kraton`, collection `kraton_documents`)
  - AI Model / Provider: Google Generative AI (Gemini Flash)
- **Repositori:** `alicerestituta/kerajaan-mataram-islam`

---

## 2. Struktur Alur Langflow (`Flow.json`)
Struktur workflow Langflow yang telah diekspor di root proyek:
1. **Chat Input (`ChatInput-v9w4f`):** Menerima pesan teks pengguna dengan parameter `session_id` dan `should_store_message: true`.
2. **Astra DB Vector Store (`ext:datastax:AstraDBVectorStoreComponent@official-UbxxD`):**
   - Keyspace: `default_keyspace`
   - Collection: `kraton_documents`
   - Embedding: Google Generative AI Embeddings
   - Search: Similarity search dengan reranker Nvidia
3. **Prompt Template (`Prompt Template-0mWW9`):**
   - Persona: *KratonBot* — Asisten wisata sejarah berfokus pada Keraton Kasunanan Surakarta dan Pura Mangkunegaran.
4. **Language Model (`LanguageModelComponent-ZiTMN`):**
   - Provider: Google Gemini
   - Temperature: 0.1
5. **Chat Output (`ChatOutput-KZaCV`):** Mengembalikan respon teks hasil inferensi ke pengguna.
6. **Integrasi Tambahan:**
   - Text Splitter & File Parser (Docling / EasyOCR)
   - Composio Google Calendar Component (manajemen agenda/wisata)

---

## 3. Konfigurasi Lingkungan (`.env`)
Variabel kunci yang dibutuhkan untuk integrasi:
```ini
LANGFLOW_BASE_URL=https://api.langflow.astra.datastax.com
LANGFLOW_PROJECT_ID=your-project-id
LANGFLOW_FLOW_ID=7e293092-5ba0-4e31-8b1b-e858fb5b8e7a
LANGFLOW_API_KEY=your-langflow-api-key

ASTRA_DB_API_ENDPOINT=https://your-astra-db-endpoint.apps.astra.datastax.com
ASTRA_DB_APPLICATION_TOKEN=your-astradb-application-token
ASTRA_DB_KEYSPACE=default_keyspace
ASTRA_DB_COLLECTION=kraton_documents
```

---

## 4. Status Konektivitas & Temuan
- **Uji Langflow Endpoint:** Endpoint cloud mengembalikan status `502 Bad Gateway` / Astra DB `503 Service Unavailable`. Hal ini lazim pada cluster Astra DataStax gratis yang otomatis tertidur (*hibernated*) jika tidak ada lalu lintas beberapa waktu. Pengguna dapat menekan tombol *Resume / Wake-up* pada web console Astra DataStax.
- **Strategi Ketahanan:** Sistem Laravel dirancang memiliki *fallback mechanism* berbasis kurasi data lokal jika koneksi ke Langflow mengalami timeout atau status 5xx.

---

## 5. Milestone Proyek
- [x] **Milestone 0:** Eksplorasi repositori & verifikasi `Flow.json`.
- [x] **Milestone 1:** Penyusunan PRD (`docs/product/PRD.md`) & ADR (`docs/architecture/decisions.md`).
- [ ] **Milestone 2 (Pending User Approval):** Pembuatan backend proxy `LangflowService` & route `/api/chat`.
- [ ] **Milestone 3:** Penyesuaian `chatbot.blade.php` ke API dinamis.
- [ ] **Milestone 4:** Quality Gate 2 (Testing & Security Verification).
- [ ] **Milestone 5:** Quality Gate 3 (Git Review & Staging).
