# 🚀 PANDUAN LENGKAP MIGRASI MAILCOW KE SERVER BARU
**Pemerintah Kota Tebing Tinggi**
- **Mail Hostname**: `mail.tebingtinggikota.go.id`
- **Domain Email**: `tebingtinggikota.go.id`
- **Status Versi**: *Diselaraskan 100% Persis Sesuai Versi yang Sedang Berjalan*

---

## 📋 DAFTAR ISI
1. [Spesifikasi Persis Versi Aplikasi yang Berjalan](#1-spesifikasi-persis-versi-aplikasi-yang-berjalan)
2. [Tabel Seluruh 14+ Microservices Mailcow & Versinya](#2-tabel-seluruh-14-microservices-mailcow--versinya)
3. [Port Firewall yang Wajib Dibuka](#3-port-firewall-yang-wajib-dibuka)
4. [Struktur Folder Backup Migrasi](#4-struktur-folder-backup-migrasi)
5. [Langkah-Langkah Eksekusi Migrasi Step-by-Step](#5-langkah-langkah-eksekusi-migrasi-step-by-step)
6. [Verifikasi & Pengujian Pasca Migrasi](#6-verifikasi--pengujian-pasca-migrasi)

---

## 1. Spesifikasi Persis Versi Aplikasi yang Berjalan

Berikut adalah rincian versi software sistem yang **saat ini aktif berjalan di server**:

### A. Sistem Operasi Host
- **Distribusi OS**: `Ubuntu 20.04.6 LTS (Focal Fossa)` *(Dapat menggunakan Ubuntu 20.04.6 LTS atau 22.04 LTS di server baru)*
- **Kernel Linux**: `5.4.0-216-generic` (x86_64 64-bit)

### B. Docker & Docker Compose
- **Docker Engine**: **`Version 28.1.1`** (Build `4eba377`)
- **Docker Compose**: **`Version v2.35.1`** (Docker Compose Plugin v2)

**Perintah Instalasi Docker & Compose di Server Baru:**
```bash
# Update repository & install paket pendukung
sudo apt update && sudo apt install -y curl git rsync tar openssl ufw

# Install Docker Engine resmi
curl -fsSL https://get.docker.com | sudo sh

# Aktifkan dan jalankan Docker daemon
sudo systemctl enable --now docker

# Verifikasi versi (Pastikan Docker v28.x & Compose v2.35.x)
docker --version
docker compose version
```

### C. Database & Cache Engine
Mailcow mengisolasi database di dalam container microservices:
- **RDBMS Utama**: **`MariaDB 10.11`** (Image: `mariadb:10.11`)
- **Key-Value Store / In-Memory Cache**: **`Redis 7.4.6-alpine`** (Image: `redis:7.4.6-alpine`)
- **Object Cache**: **`Memcached alpine`** (Image: `memcached:alpine`)

### D. DNS Server Host (Reverse DNS / PTR)
- **BIND 9**: **`BIND 9.18.30-0ubuntu0.20.04.2-Ubuntu`**
```bash
sudo apt install -y bind9 bind9utils bind9-doc
```

---

## 2. Tabel Seluruh 14+ Microservices Mailcow & Versinya

Semua layanan di bawah ini didefinisikan pada `docker-compose.yml` dengan tag versi presisi:

| No | Service Container | Image Docker & Tag Versi Aktif | Fungsi / Komponen |
| :---: | :--- | :--- | :--- |
| 1 | **`mysql-mailcow`** | `mariadb:10.11` | Database MariaDB (Mailbox, domain, kuota, SOGo data) |
| 2 | **`redis-mailcow`** | `redis:7.4.6-alpine` | Redis cache, rate limiting, token antispam |
| 3 | **`memcached-mailcow`** | `memcached:alpine` | Object memory cache untuk Webmail SOGo |
| 4 | **`postfix-mailcow`** | `ghcr.io/mailcow/postfix:1.80` | MTA (SMTP/SMTPS/Submission: port 25, 465, 587) |
| 5 | **`dovecot-mailcow`** | `ghcr.io/mailcow/dovecot:2.34-legacy` | MDA (IMAP/IMAPS/POP3/POPS/Sieve: 143, 993, 110, 995, 4190) |
| 6 | **`sogo-mailcow`** | `ghcr.io/mailcow/sogo:1.129` | Webmail Groupware SOGo, Kalender CalDAV, Kontak CardDAV, ActiveSync |
| 7 | **`rspamd-mailcow`** | `ghcr.io/mailcow/rspamd:2.1` | Anti-Spam (DKIM signing, SPF, DMARC, ARC, Bayes filter) |
| 8 | **`clamd-mailcow`** | `ghcr.io/mailcow/clamd:1.70` | Antivirus engine ClamAV untuk lampiran email |
| 9 | **`olefy-mailcow`** | `ghcr.io/mailcow/olefy:1.14` | Scanner Macro VBA untuk dokumen Microsoft Office |
| 10 | **`nginx-mailcow`** | `ghcr.io/mailcow/nginx:1.03` | Web server & Reverse proxy HTTPS port 443 & 80 |
| 11 | **`php-fpm-mailcow`** | `ghcr.io/mailcow/phpfpm:1.93` | Backend PHP-FPM Admin UI & REST API |
| 12 | **`unbound-mailcow`** | `ghcr.io/mailcow/unbound:1.24` | Recursive DNS caching lokal container (DNSBL filter) |
| 13 | **`acme-mailcow`** | `ghcr.io/mailcow/acme:1.92` | ACME client Let's Encrypt |
| 14 | **`watchdog-mailcow`** | `ghcr.io/mailcow/watchdog:2.07` | Health monitor & auto-healing container |
| 15 | **`dockerapi-mailcow`** | `ghcr.io/mailcow/dockerapi:2.11` | Docker API interface helper |
| 16 | **`ofelia-mailcow`** | `mcuadros/ofelia:latest` | Job scheduler / Cron berbasis Docker |
| 17 | **`netfilter-mailcow`** | `ghcr.io/mailcow/netfilter:1.62` | Fail2ban host iptables auto-blocker |
| 18 | **`ipv6nat-mailcow`** | `robbertkl/ipv6nat` | IPv6 NAT helper |

---

## 3. Port Firewall yang Wajib Dibuka

| Port | Protokol | Layanan | Keterangan |
| :--- | :--- | :--- | :--- |
| **25** | TCP | Postfix (SMTP) | Lalu lintas email antar mail server (*Wajib dibuka/unblock oleh ISP/Cloud*) |
| **465** | TCP | Postfix (SMTPS) | Pengiriman email client (SSL/TLS implisit) |
| **587** | TCP | Postfix (Submission) | Pengiriman email client (STARTTLS) |
| **993** | TCP | Dovecot (IMAPS) | Pengambilan email IMAP via SSL/TLS |
| **143** | TCP | Dovecot (IMAP) | Pengambilan email IMAP (STARTTLS) |
| **995** | TCP | Dovecot (POPS) | Pengambilan email POP3 via SSL/TLS |
| **4190** | TCP | Dovecot (ManageSieve) | Pengelolaan filter aturan email |
| **80** | TCP | Nginx (HTTP) | Redirect otomatis ke HTTPS (port 443) |
| **443** | TCP | Nginx (HTTPS) | Webmail SOGo & Panel Admin Mailcow |
| **53** | TCP/UDP | BIND 9 | Authoritative DNS / PTR rDNS (*jika server mengelola PTR*) |

---

## 4. Struktur Folder Backup Migrasi (`/opt/migrasi_mailcow`)

```
/opt/migrasi_mailcow/
├── PANDUAN_MIGRASI.md          <- Dokumen spesifikasi dan panduan ini
├── config_backup/              <- File konfigurasi & SSL
│   ├── mailcow.conf            <- Konfigurasi hostname mail.tebingtinggikota.go.id & kredensial
│   ├── .env                    <- Environment variables compose
│   ├── ssl/                    <- Sertifikat SSL GlobalSign Wildcard (*.tebingtinggikota.go.id)
│   │   ├── cert.pem            <- Fullchain cert
│   │   ├── key.pem             <- Private key
│   │   └── dhparams.pem        <- DH Parameter
│   └── conf/                   <- Kustomisasi konfigurasi (SOGo branding, Postfix, Unbound, dll.)
├── bind_backup/                <- Backup konfigurasi BIND 9 (/etc/bind) & zona PTR
│   ├── named.conf.local
│   ├── named.conf.options
│   └── db.103.137.124          <- PTR Record: 103.137.124.96 -> mail.tebingtinggikota.go.id
└── data_backup/                <- Arsip volume Docker (Ukuran: ~200 MB)
    └── mailcow-*/
        ├── backup_mariadb.tar.gz   <- Database MariaDB 10.11
        ├── backup_vmail.tar.gz     <- Seluruh file email mailbox pengguna
        ├── backup_redis.tar.gz     <- Cache & token rate limiting
        ├── backup_rspamd.tar.gz    <- Model pembelajaran antispam Bayes
        ├── backup_postfix.tar.gz   <- Antrean spool Postfix
        └── backup_crypt.tar.gz     <- Kunci enkripsi mailbox
```

---

## 5. Langkah-Langkah Eksekusi Migrasi Step-by-Step

### [LANGKAH 1] Transfer Folder Backup ke Server Baru
Dari server lama, jalankan transfer via `rsync`:
```bash
rsync -avzhP /opt/migrasi_mailcow/ root@IP_SERVER_BARU:/opt/migrasi_mailcow/
```

---

### [LANGKAH 2] Setup Direktori Mailcow di Server Baru
Di **server baru**, clone repositori Mailcow:
```bash
cd /opt
git clone https://github.com/febriwinando/Mailcow-Docker.git mailcow-dockerized
cd /opt/mailcow-dockerized
```

---

### [LANGKAH 3] Restore Konfigurasi & Sertifikat SSL
Di **server baru**, salin seluruh konfigurasi yang sudah disiapkan:
```bash
cd /opt/mailcow-dockerized

# 1. Salin mailcow.conf dan .env
cp /opt/migrasi_mailcow/config_backup/mailcow.conf .
cp /opt/migrasi_mailcow/config_backup/.env .

# 2. Salin sertifikat SSL GlobalSign Wildcard
cp -r /opt/migrasi_mailcow/config_backup/ssl/* data/assets/ssl/

# 3. Salin kustomisasi konfigurasi (SOGo, Postfix, dll.)
cp -r /opt/migrasi_mailcow/config_backup/conf/* data/conf/
```

---

### [LANGKAH 4] Unduh Seluruh Image Container
Di **server baru**, tarik image yang sesuai dengan daftar versi:
```bash
cd /opt/mailcow-dockerized
docker compose pull
```

---

### [LANGKAH 5] Restore Seluruh Data Volume (Database & Mailbox)
Di **server baru**, jalankan skrip restore resmi Mailcow:
```bash
cd /opt/mailcow-dockerized
chmod 777 /opt/migrasi_mailcow/data_backup
BACKUP_LOCATION=/opt/migrasi_mailcow/data_backup ./helper-scripts/backup_and_restore.sh restore
```
*Saat skrip meminta pilihan komponen, pilih **`all`** untuk merestore Database MariaDB 10.11, seluruh pesan email `vmail`, Redis, dan Rspamd.*

---

### [LANGKAH 6] Restore Konfigurasi BIND 9 (Jika Diperlukan)
Di **server baru**, jika server baru melayani PTR record `103.137.124.96`:
```bash
sudo cp /opt/migrasi_mailcow/bind_backup/named.conf.local /etc/bind/
sudo cp /opt/migrasi_mailcow/bind_backup/named.conf.options /etc/bind/
sudo cp /opt/migrasi_mailcow/bind_backup/db.103.137.124 /etc/bind/

# Restart BIND 9
sudo systemctl restart bind9
sudo systemctl enable bind9
```

---

### [LANGKAH 7] Jalankan Seluruh Layanan Mailcow
Di **server baru**, jalankan container:
```bash
cd /opt/mailcow-dockerized
docker compose up -d
```

Periksa status seluruh container (pastikan semua berstatus `Up` / `healthy`):
```bash
docker compose ps
```

---

## 6. Verifikasi & Pengujian Pasca Migrasi

1. **Akses Webmail SOGo & Admin UI**:
   - Buka `https://mail.tebingtinggikota.go.id`
   - Pastikan gembok sertifikat SSL aktif & valid (GlobalSign Wildcard).
   - Login dengan akun admin dan salah satu akun email pengguna.

2. **Cek Realtime Log**:
   ```bash
   docker compose logs -f postfix-mailcow
   docker compose logs -f dovecot-mailcow
   docker compose logs -f sogo-mailcow
   ```

3. **Uji Pengiriman & Penerimaan Email**:
   - Kirim email dari luar (Gmail/Yahoo) ke akun `@tebingtinggikota.go.id`.
   - Balas email dari Webmail SOGo ke alamat luar.
   - Periksa skor deliverability di [mail-tester.com](https://www.mail-tester.com).
