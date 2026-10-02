# 🐮 Mailcow: dockerized — Panduan Instalasi & Konfigurasi

**Mailcow: dockerized** adalah email server suite lengkap berbasis Docker yang menggabungkan berbagai komponen open-source email enterprise (Postfix, Dovecot, SOGo, Rspamd, ClamAV, MariaDB, Redis, Unbound, ACME Let's Encrypt, dan Nginx) ke dalam lingkungan microservices yang terisolasi dan mudah dikelola.

---

## 📋 Daftar Isi
1. [Prasyarat Sistem (Prerequisites)](#1-prasyarat-sistem-prerequisites)
2. [Kebutuhan Port & DNS](#2-kebutuhan-port--dns)
3. [Langkah Instalasi Step-by-Step](#3-langkah-instalasi-step-by-step)
4. [Konfigurasi mailcow.conf](#4-konfigurasi-mailcowconf)
5. [Manajemen Sertifikat SSL / TLS](#5-manajemen-sertifikat-ssl--tls)
6. [Akses Webmail & Panel Admin](#6-akses-webmail--panel-admin)
7. [Operasional & Pemeliharaan (Maintenance)](#7-operasional--pemeliharaan-maintenance)
8. [Troubleshooting Umum](#8-troubleshooting-umum)

---

## 1. Prasyarat Sistem (Prerequisites)

### A. Kebutuhan Perangkat Keras
- **CPU**: Minimal 2 Core (Disarankan 4 Core untuk beban tinggi).
- **RAM**:
  - Minimal **4 GB** (Disarankan **6 GB - 8 GB** jika mengaktifkan ClamAV Antivirus & Solr FTS).
  - Jika RAM < 4 GB, nonaktifkan ClamAV (`SKIP_CLAMD=y`) dan Solr (`SKIP_FTS=y`) pada `mailcow.conf`.
- **Penyimpanan**: Minimal **20 GB SSD/NVMe** (Sesuaikan dengan kuota penyimpanan mailbox).

### B. Kebutuhan Perangkat Lunak
- **OS**: Linux 64-bit (Ubuntu 20.04/22.04/24.04 LTS, Debian 11/12, Rocky Linux/AlmaLinux 8/9).
- **Docker Engine**: Versi terbaru (>= 20.10.x).
- **Docker Compose**: Docker Compose Plugin v2 (`docker compose`).
- **Git & Curl**.

Install Docker & Compose di Ubuntu/Debian (jika belum terpasang):
```bash
curl -fsSL https://get.docker.com | sudo sh
sudo systemctl enable --now docker
```

---

## 2. Kebutuhan Port & DNS

### A. Port yang Harus Terbuka (Firewall)
Pastikan port-port berikut diizinkan di firewall host/cloud security group:

| Port | Protokol | Layanan | Keterangan |
| :--- | :--- | :--- | :--- |
| **25** | TCP | SMTP | Pengiriman & penerimaan email antar mail server (*Wajib tidak diblokir ISP/Cloud Provider*) |
| **465** | TCP | SMTPS | SMTP dengan enkripsi SSL/TLS implisit |
| **587** | TCP | Submission | SMTP submission dari client email (STARTTLS) |
| **143** | TCP | IMAP | Akses email client (STARTTLS) |
| **993** | TCP | IMAPS | Akses email client dengan SSL/TLS |
| **110** | TCP | POP3 | Akses email POP3 (STARTTLS) |
| **995** | TCP | POPS | Akses email POP3 dengan SSL/TLS |
| **4190** | TCP | ManageSieve | Pengaturan filter aturan email Dovecot |
| **80** | TCP | HTTP | Validasi ACME Let's Encrypt & Redirect HTTP ke HTTPS |
| **443** | TCP | HTTPS | Webmail SOGo dan Web UI Panel Admin |

### B. Konfigurasi Record DNS
Buat DNS record di domain management Anda sebelum menjalankan Mailcow:

| Tipe | Nama Host | Nilai / Target |
| :--- | :--- | :--- |
| **A** | `mail.domain.com` | `IP_PUBLIC_SERVER` |
| **MX** | `domain.com` | `mail.domain.com` (Priority 10) |
| **CNAME** | `autodiscover.domain.com` | `mail.domain.com` |
| **CNAME** | `autoconfig.domain.com` | `mail.domain.com` |
| **TXT (SPF)** | `domain.com` | `"v=spf1 mx a:mail.domain.com ~all"` |
| **PTR (rDNS)** | `IP_PUBLIC_SERVER` | `mail.domain.com` *(Diatur di penyedia VPS/ISP)* |

---

## 3. Langkah Instalasi Step-by-Step

### Langkah 1: Clone Repository Mailcow
Simpan repositori pada direktori `/opt/mailcow-dockerized`:
```bash
cd /opt
git clone https://github.com/mailcow/mailcow-dockerized
cd /opt/mailcow-dockerized
```

### Langkah 2: Generate File Konfigurasi
Jalankan skrip generator konfigurasi:
```bash
./generate_config.sh
```
Skrip akan meminta:
- **Mail server hostname (FQDN)**: Masukkan hostname mail server Anda (Contoh: `mail.domain.com`).
- **Timezone**: Masukkan zona waktu Anda (Contoh: `Asia/Jakarta`).

Skrip akan secara otomatis membuat file `mailcow.conf` dengan password acak yang aman untuk database MariaDB dan Redis.

### Langkah 3: Tarik Image Docker
```bash
docker compose pull
```

### Langkah 4: Jalankan Service Mailcow
Jalankan seluruh container dalam mode background (detached):
```bash
docker compose up -d
```

### Langkah 5: Verifikasi Status Container
Pastikan seluruh container dalam status `Up` atau `Up (healthy)`:
```bash
docker compose ps
```

---

## 4. Konfigurasi `mailcow.conf`

File `mailcow.conf` merupakan pusat seluruh pengaturan Mailcow. Beberapa parameter penting:

```ini
# Hostname Utama
MAILCOW_HOSTNAME=mail.domain.com

# Binding Port HTTP & HTTPS
HTTP_PORT=80
HTTPS_PORT=443
HTTP_REDIRECT=y

# Optimasi Resource Server Kecil (RAM < 4GB)
SKIP_CLAMD=n      # Ubah ke 'y' jika ingin menonaktifkan ClamAV (hemat RAM ~1.5GB)
SKIP_FTS=n        # Ubah ke 'y' jika ingin menonaktifkan Fulltext Search Dovecot
SKIP_SOGO=n       # Jangan diubah kecuali tidak membutuhkan Webmail SOGo

# Let's Encrypt (ACME)
SKIP_LETS_ENCRYPT=n
ADDITIONAL_SAN=   # Domain tambahan untuk SSL (pisahkan koma, contoh: webmail.domain.com)
```

Setelah mengubah file `mailcow.conf`, terapkan perubahan dengan:
```bash
docker compose up -d
```

---

## 5. Manajemen Sertifikat SSL / TLS

### A. Otomatisasi Let's Encrypt (Default)
Secara default, container `acme-mailcow` akan otomatis memverifikasi domain Anda melalui HTTP Challenge pada port 80 dan menerbitkan sertifikat SSL Let's Encrypt.
- Pastikan Port 80 dan 443 terbuka ke publik.
- Pastikan DNS A record `MAILCOW_HOSTNAME` sudah mengarah ke IP publik server.

### B. Menggunakan Sertifikat Sendiri (Custom / Commercial / Wildcard SSL)
Jika Anda menggunakan sertifikat komersial atau Wildcard SSL:
1. Matikan ACME Let's Encrypt di `mailcow.conf`:
   ```ini
   SKIP_LETS_ENCRYPT=y
   ```
2. Letakkan file sertifikat Anda di folder `data/assets/ssl/`:
   - `data/assets/ssl/cert.pem` *(Sertifikat Anda + Intermediate/CA Bundle)*
   - `data/assets/ssl/key.pem` *(Private Key tanpa passphrase)*
3. Restart container yang menggunakan SSL:
   ```bash
   docker compose restart nginx-mailcow postfix-mailcow dovecot-mailcow
   ```

---

## 6. Akses Webmail & Panel Admin

1. Buka browser dan akses alamat server Anda:
   - **URL**: `https://mail.domain.com`
2. **Kredensial Default Admin**:
   - **Username**: `admin`
   - **Password**: `moohoo`
3. ⚠️ **PENTING**: Segera ganti password default `admin` setelah login pertama kali melalui menu **Configuration** > **Admin Accounts**.
4. Di panel admin, Anda dapat:
   - Menambahkan **Domain** email.
   - Membuat **Mailbox** / akun email pengguna.
   - Mengambil public key **DKIM** untuk dipasang di DNS.
   - Mengatur kuota, alias, dan routing email.
5. Pengguna biasa dapat login ke Webmail SOGo di URL yang sama menggunakan alamat email dan password masing-masing.

---

## 7. Operasional & Pemeliharaan (Maintenance)

### Perintah Docker Compose Dasar
```bash
# Melihat status service
docker compose ps

# Melihat realtime log seluruh service
docker compose logs -f

# Melihat log service spesifik (contoh: postfix atau rspamd)
docker compose logs -f postfix-mailcow
docker compose logs -f rspamd-mailcow

# Me-restart seluruh stack
docker compose down && docker compose up -d
```

### Update Versi Mailcow
Mailcow menyediakan skrip update resmi yang aman:
```bash
./update.sh
```

### Backup & Restore
Mailcow dilengkapi skrip backup komprehensif (database MariaDB, maildir, konfigurasi, dan SOGo):
```bash
# Melakukan backup penuh ke direktori tujuan
BACKUP_LOCATION=/var/backup/mailcow ./helper-scripts/backup_and_restore.sh backup all

# Melakukan restore data dari backup
BACKUP_LOCATION=/var/backup/mailcow ./helper-scripts/backup_and_restore.sh restore
```

### Reset Password Admin (Jika Lupa Password)
```bash
./helper-scripts/mailcow-reset-admin.sh
```

---

## 8. Troubleshooting Umum

1. **Port 25 Terblokir (Outbound SMTP)**:
   - Banyak penyedia cloud (AWS EC2, Google Cloud, DigitalOcean, Linode) memblokir port 25 secara default.
   - Periksa koneksi port 25 keluar: `telnet smtp.gmail.com 25` atau `nc -zv smtp.gmail.com 25`.
   - Solusi: Minta unblock port 25 ke support provider cloud, atau gunakan SMTP Relay (Smart Host) di menu **Configuration** > **Routing** di panel Mailcow.

2. **Email Masuk ke Folder Spam**:
   - Pastikan **PTR / rDNS** IP Publik server Anda cocok dengan `MAILCOW_HOSTNAME`.
   - Pastikan record **SPF**, **DKIM** (diaktifkan di Mailcow UI), dan **DMARC** sudah terpasang valid di DNS.
   - Cek skor reputasi email Anda melalui tools seperti [mail-tester.com](https://www.mail-tester.com).

3. **Let's Encrypt Gagal Menerbitkan Sertifikat**:
   - Cek log ACME: `docker compose logs -f acme-mailcow`.
   - Pastikan firewall mengizinkan port 80 dan tidak ada reverse proxy lain di luar Docker yang menghadang path `/.well-known/acme-challenge/`.

---

## 📄 Lisensi & Dukungan
- Proyek ini dirilis di bawah lisensi **GNU General Public License v3.0**.
- Dokumentasi resmi: [https://docs.mailcow.email](https://docs.mailcow.email)
- Komunitas Mailcow: [https://community.mailcow.email](https://community.mailcow.email)
