
<html>
<body>
<div align="right"><h1> Software Requirements Spesification</h1></div>

<p align="right"><b>Version 1.7 </b><br>
<p align="right">30 Oktober 2023</b>
<p align="center">


<p align="right"><b>Data Absensi Smp 25 Pekanbaru <br>
</b>
<p align="right">Kelompok 9 <br>
 Reza Oktafian            (2157301079)<br>
 Pendawa Maulana    (2257301110)<br>
 Ramadhan Pasaribu       (2257301111)<br><br><br>

<p align="right"><b>Jurusan Sistem Informasi</b><br>
<p align="right"><b>Politeknik Negeri Caltex Riau</b>
<p align="right"><b>2023</b>
</p>
</body>
</html>
 

**BAB I Pendahuluan**
----------
1.1 Tujuan
----------
Dokumen Software Requirement Specification (SRS) merupakan dokumen   spesifikasi perangkat lunak untuk membangun "Data Absensi Siswa Smp 25 Pekanbaru". Dokumen ini dibangun untuk memudahkan Sekolah Smp 25 Pekanbaru untuk menginput data-data Siswa yang ada di Kelas. Sehingga dokumen ini dapat dijadikan acuan teknis untuk membangun perangkat lunak "Data Absensi Siswa Smp 25 Pekanbaru".

1.2   Lingkup
----------
Data Absensi Siswa Smp 25 Pekanbaru merupakan aplikasi yang kami bangun untuk mempermudah Guru Sekolah Smp 25 Peknabaru dalam melihat perkembangan yang ada di sekolahnya yaitu perkembangan pendidikan, Data Siswa, Alfa, Sakit, Izin. dan memudahkan Guru dalam menginput data-datanya.

1.3    Akronim, singkatan, definisi
----------

| Istilah | Definisi |
| ------ | ------ |
| SRS |Software Requirement Specification|
| Login | Digunakan untuk mengakses aplikasi |
| Software Requirement Specification | perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasi pembuat dengan pengguna |
| Use Case | situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda |

1.4   Referensi
----------
Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah :
- http://hasantarmizi.blogspot.co.id/2017/04/pengertian-sublime-text.html
- IEEE. IEEE Std 830-1998 IEEE Recommended Practice for Software  Requirements Specifications. IEEE Computer Society, 1998. 1.5  Overview 
- _SRSExample-webapp.pdf_

1.5   Overview
----------

Bab selanjutnya yaitu menjelaskan sistem yang di terapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada aplikasi yang dibuat.

**BAB II Gambaran umum**
----------
Pada zaman era globalisasi perkembangan teknologi begitu sangat pesat, salah satunya ialah perkembangan teknologi di bidang software engineering dimana software engineering dapat digunakan dalam kehidupan sehari - hari .Dalam studi kasus ini kami menganalisis kebutuhan suatu sekolah di daerah Pekanbaru tepatnya di Marpoyan Damai .kasus yang kami peroleh pembuatan Data Absensi Siswa. Maka dari itu kami sebagai software engineering merancang sebuah sistem sesuai dengan kebutuhan Sekolah dengan menerapkan Sistem Informasi di sekolah Smp 25 Pekanbaru. Sehingga memudahkan Guru dalam menginputkan data-data Siswa. Software yang kami buat ini berbasis website dimana website sebagai admin, kepala sekolah dan Guru . Sistem yang kami buat di dalamnya terdapat angka kelahiran, angka kematian, pekerjaan, agama, laporan ( untuk admin/guru ), grafik dan laporan ( untuk kepala sekolah ). Berikut akan kami jelaskan  sistem software kami,  admin fungsi utama yaitu :
   - Input Nama Siswa
   - Input Nomor Induk Sekolah Nasional
   - Input Kelas
   - Input Alfa
   - Input Hadir
   - Laporan
   
   Berikut ini fungsi user dalam bentuk grafik :
   - View Kehadiran Siswa
   - View Alfa
   - View Izin
   - View Laporan

2.1   Perspektif produk
----------
Data Absensi Siswa Smp 25 Pekanbaru adalah sebuah sistem Informasi data absensi siswa yang di aplikasiskan pada website. Terdapat 3 jenis yaitu admin, Kepala Sekolah dan Guru. Pengolahan data di kelola oleh admin dan guru pada website dan Kepala Sekolah hanya melihat grafik dan laporan pada website.

Pada sistem informasi data absensi siswa ini akan menampilkan grafik data absensi siswa yang sudah di inputkan oleh admin

**2.1.1 Antarmuka sistem**

![reza](https://github.com/rezaoktafian/Project-framework/assets/149589325/cc72e38c-ae97-4608-aafd-2d221f0facbf)

Sistem aplikasi Data Absensi Siswa Smp 25 Pekanbaru memiliki 3 user yaitu guru, admin dan kepala sekolah. Kepala sekolah mempunyai fungsi yaitu melakukan view grafik dan bisa view laporan. Admin bertugas untuk mengelola data, supaya data bisa di akses oleh kepala sekolah.

**2.1.2 Antarmuka pengguna**

   - **Mockup Admin ( Website )**

|  |  |
|--|--|
|!<img width="926" alt="Screenshot 2024-01-11 234706" src="https://github.com/rezaoktafian/Project-framework/assets/149589325/5f1a1537-a80c-4fc7-9bce-e4e235e0af17">| 
|![Screenshot 2024-01-11 234741](https://github.com/rezaoktafian/Project-framework/assets/149589325/f3a7826b-0cbf-4cea-8b45-d61864fb9b77)
|
|![Screenshot 2024-01-11 234909](https://github.com/rezaoktafian/Project-framework/assets/149589325/7376cc1f-4758-4028-82eb-0b49f1d247a9)
|![Screenshot 2024-01-11 234934](https://github.com/rezaoktafian/Project-framework/assets/149589325/c086f8fe-4a98-41e4-b761-37595ec715c6)
|![Screenshot 2024-01-11 234949](https://github.com/rezaoktafian/Project-framework/assets/149589325/930eed14-5e44-4b0a-b918-d0cc36a3f51f)
 
**2.1.3 Antarmuka perangkat keras**

![pp](https://github.com/rezaoktafian/Project-framework/assets/149589325/39a99638-5038-47a6-8553-5e4dbc1c8ba3)

Antarmuka perangkat keras yang digunakan untuk mengoperasikan Perangkat Lunak Data Absensi Siswa Smp 25 Pekanbaru antara lain :

1. PC / Laptop
Untuk menjalankan Aplikasi ini admin membutuhkan sebuah PC yang menggunakan OS Windows, Linux, atau MAC dan sudah terinstall browser .

**2.1.4 Antarmuka perangkat lunak**

Tidak ada

**2.1.5 Antarmuka Komunikasi**

Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Data Absensi Siswa Smp 25 Pekanbaru antara lain :
1. Kabel Lan UTP RJ45
2. Modem
3. wifi

**2.1.6 Batasan memori**

Tidak ada

**2.1.7 Operasi-operasi**

| Operasi | Fungsi |
| ------ | ------ |
| Login | Digunakan untuk mengakses aplikasi |
| Input Data | Digunakan untuk memasukkan data-data |
| Kembali | Digunakan untuk kembali ke halaman sebelumnya |
| Hapus | Digunakan untuk menghapus data |
| Edit | Digunakan untuk mengubah data |
| View | Digunakan untuk menampilkan data |
| Simpan | Digunakan untuk menyimpan data |
| Cetak | Digunakan untuk mencetak laporan |

**2.1.8 Kebutuhan adaptasi**

Tidak ada
   
2.2 Spesifikasi Kebutuhan fungsional
----------
![](https://raw.githubusercontent.com/)

**2.2.1 Guru login**

Use Case: Login

Diagram :
![guru](https://github.com/rezaoktafian/Project-framework/assets/149589325/863bf043-d7b5-4443-84ba-82509c0819ba)

Deskripsi Singkat
Admin melakukan login dengan memasukan username password.
Deskripsi Langkah-langkah
1. Guru melakukan login dengan username dan password
2. Sistem melakukan validasi login
3. Bila sukses sistem akan mengarahkan ke halaman beranda
4. Bila gagal sistem akan menampilkan peringatan

Xref: Bagian 3.2.3, Login Guru
      
**2.2.2 Guru input data siswa**

Use Case: Input data siswa

Diagram:
![](https://raw.githubusercontent.com/)
      
Deskripsi Singkat
Admin melakukan input data siswa dan sistem menyimpan data pada database.
Deskripsi Langkah-langkah
1. Guru melakukan input data siswa, Nisn, dan lain-lain.
2. Guru mengklik tombol simpan.
3. Sistem menyimpan data siswa.
4. Bila data sudah ada sistem akan menampilkan peringatan

Xref: Bagian 3.2.4, Input data siswa

**2.2.3 Guru melihat data siswa**

Use Case: View data siswa

Diagram:
![data](https://github.com/rezaoktafian/Project-framework/assets/149589325/5d7a869b-2d58-4895-95e4-a5505c6abb55)


Deskripsi Singkat
Admin dapat melihat data kependudukan setelah di inputkan.
Deskripsi Langkah-langkah
1. Sistem akan menampilkan data Absensi Siswa.
2. Admin melihat data dan dapat mengedit atau menghapusnya.
3. Sistem menampilkan edit data siswa
4. Guru  mengedit data siswa yang baru atau yang sudah ada
5. Sistem melakukan validasi jika data sudah ada maka muncul peringatan jika belum sistem akan menyimpan

Xref: Bagian 3.2.5, View data siswa
   
**2.2.4 Generate Laporan**

Use Case: Laporan

Diagram:
![](https://raw.githubusercontent.com/)

Deskripsi Singkat
Sistem akan mengirimkan data absensi siswa dan yang lainnya ke fungsi laporan
Deskripsi Langkah-langkah
1. Sistem menampilkan laporan absensi siswa
2. Admin memilih combobox tersebut dan klik tombol cetak
3. Sistem akan menampilkan hasil laporan.
4. Admin mencetak laporan 

Xref: Bagian 3.2.6, Cetak Laporan

**2.2.5 Guru mengelola Siswa**

Use Case: Mengelola Siswa

Diagram:


Deskripsi Singkat
Sistem akan menampilkan form user dan admin dapat menambah user sesuai kebutuhan.
Deskripsi Langkah-langkah
1. Admin mengklik manajemen user, lalu memilih nik dan hak akses user kemudian klik tambah
2. Sistem akan menyimpan data user ke database dan menampilkan data user yang dipilih.
3. Admin bisa menghapus hak akses user.

Xref: Bagian 3.2.7, Mengelola user



2.3   Spesifikasi Kebutuhan non-fungsional
----------
- Tabel Kebutuhan Non-Fungsional 

   | No | Deskripsi |
   | ------ | ------ |
   | 1 | Semua interface dan fungsi menggunakan Bahasa Indonesia |
   | 2 | Perangkat Lunak dapat dipakai di semua platofrm  OS ( Admin dan Guru ) 
 
2.4   Karakteristik pengguna
----------
Karakteristik pengguna dari perangkat lunak ini adalah pengguna langsung berinteraksi dengan sistem tanpa harus dihubungkan dengan hak akses atau level autentikasi.

2.5   Batasan-batasan
----------
- Perangkat lunak web hanya dijalankan di windows (7,8,10). 
- Waktu pengembangan perangkat lunak yang singkat membuat adanya kemungkinan tidak semua fungsi yang ada dapat dilaksanakan.

2.6   Asumsi-asumsi
----------
Maksimal penginputan id atau memasukkan kode pada aplikasi ini adalah 9999, lebih dari itu program akan muncul peringatan"Anda telah melebihi batas maksimum".

2.7   Kebutuhan Penyeimbang
----------
Tidak ada


BAB III Requirement specification
----------
3.1 Persyaratan Antarmuka Eksternal
----------
Salah satu cara mengakses aplikasi ini yaitu dengan hak akses yang di berikan oleh admin, login melalui aplikasi ini dengan mencantumkan username kemudian sistem akan mencocokkan username guru dan kepala sekolah smp 25 pekanbaru. Setelah login berhasil kepala sekolah dapat melihat grafik data absensi siswa dan laporan siswa smp 25 pekanbaru di aplikasi tersebut.
      
3.2 Functional Requirement
----------
Logika Struktur terdapat pada bagian 3.3.1
**3.2.1 Guru login**

|  |  |
|--|--|
| Nama Fungsi | Login |
| Xref | Bagian 2.2.3, Login admin |
| Trigger | Membuka aplikasi Data Absensi Siswa Smp 25 Pekanbaru |
| Precondition | Halaman login admin |
| Basic Path | 1. Admin melakukan login dengan username dan password <br> 2. Sistem melakukan validasi login <br> 3. Bila sukses sistem akan mengarahkan ke halaman beranda <br> 4. Bila gagal sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Admin berhasil login dan mengakses aplikasi Data Absensi Siswa Smp 25 Pekanbaru |
| Exception Push | Username dan password salah |
   
**3.2.2 Guru input data siswa**

|  |  |
|--|--|
| Nama Fungsi | Input data siswa |
| Xref | Bagian 2.2.4, Input data siswa |
| Trigger | Membuka aplikasi Data Absensi Siswa Smp 25 Pekanbaru |
| Precondition | Halaman utama admin |
| Basic Path | 1. Admin melakukan input data Nama Siswa, Nisn, Alfa, Hadir dan lain-lain <br> 2. Admin mengklik tombol simpan <br> 3. Sistem menyimpan data kependudukan <br> 4. Bila data sudah ada sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Halaman form input data absensi siswa |
| Exception Push | Tidak ada koneksi |
   
**3.2.3 Guru melihat data Absensi Siswa**

|  |  |
|--|--|
| Nama Fungsi | View data Absensi Siswa |
| Xref | Bagian 2.2.5, View data Absensi Siswa |
| Trigger | Membuka Data Absensi Siswa Smp 25 Pekanbaru |
| Precondition | Halaman form input data |
| Basic Path | 1. Sistem akan menampilkan data Absensi Siswa Smp 25 Pekanbaru. <br> 2. Admin melihat data dan dapat mengedit atau menghapusnya. <br> 3. Sistem menampilkan edit data absensi siswa  <br>4. Admin  mengedit data absensi yang baru atau yang sudah ada<br>5. Sistem melakukan validasi jika data sudah ada maka muncul peringatan jika belum sistem akan menyimpan|
| Alternative | Tidak ada |
| Post Condition | Halaman data absensi |
| Exception Push | Tidak ada koneksi |
   
**3.2.4 Cetak Laporan**

|  |  |
|--|--|
| Nama Fungsi | Laporan |
| Xref | Bagian 2.2.6, Cetak Laporan |
| Trigger | Membuka Data Absensi Siswa Smp 25 Pekanbaru |
| Precondition | halaman utama admin |
| Basic Path | 1. Admin mengklik tombol laporan <br> 2. Sistem menampilkan laporan kependudukan <br> 3. Admin memilih combobox tersebut dan klik tombol lihat <br>4. Sistem akan menampilkan hasil laporan. <br>5. Admin mencetak laporan  |
| Alternative | Tidak ada |
| Post Condition | Halaman Laporan |
| Exception Push | Tidak ada koneksi, data belum diinput |

**3.2.5  Guru mengelola siswa**

|  |  |
|--|--|
| Nama Fungsi | Mengelola user |
| Xref | Bagian 2.2.7, Mengelola user |
| Trigger | Membuka Data Absensi Siswa Smp 25 Pekanbaru | 
| Precondition | halaman utama admin |
| Basic Path | 1. Sistem menampilkan form.<br>2. Admin mengisi form user dengan jabatan, tanggal mulai, tanggal berakhir, dll kemudian klik tombol simpan.<br>3. Sistem akan menyimpan data user ke database.  |
| Post Condition | Halaman user |
| Exception Push | Tidak ada koneksi, data belum diinput |
   
3.3 Struktur Detail Kebutuhan Non-Fungsional
----------
**3.3.1 Logika Struktur Data**
Struktur data logika pada sistem Aplikasi presensi menggunakan kehadiran terdapat struktur Database yang dijelaskan menggunakan ERD.

![WhatsApp Image 2023-11-09 at 01 48 52](https://github.com/rezaoktafian/Project-framework/assets/149589325/8dc169d2-54eb-4cbe-8ef4-73d3b67663c4)

**Tabel Guru**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| Id_user| int | Nomer auto increment Id_user|
| Username | varchar | berisikan email untuk akses login user dan username untuk akses admin |
| Password | varchar | berisikan password untuk login admin dan user |

**Tabel Siswa**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| NISN | varchar | nomer induk siswa negeri |
| Nama | varchar | nomer induk siswa negri|
| jns_kelamin | varchar | Identifikasi jenis kelamin|
| Tgl_lahir | date | tanggal lahir siswa |
| Kelas | varchar | Identifikasi Kelas |

**Tabel Laporan**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| Id_laporan| int | Nomer auto increment Id_laporan|
| Id_siswa| int | foreignt key tabel siswa |
| laporan | varchar | berisi laporan data absensi |





