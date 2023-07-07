# Lab7Web

### Leman - 312110148
### TI.21.C.1
## PHP FRAMEWORK (CODEIGNITER)

## LANGKAH LANGKAH PRAKTIKUM

Buka XAMPP,pada bagian Apache klik Config (PHP.ini)'<P>'
![Gambar1](ss/1.XAMPP.png)
Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan.'<P>'
Kemudian simpan kembali filenya dan restart Apache web server.'<P>'
![Gambar2](ss/2.png)

•Unduh CODEIGNITER 4 '<P>'
•Extrak file zip Codeigniter ke direktori htdocs/.'<P>'
• Ubah nama direktory framework-4.x.xx menjadi ci4. '<P>'
• Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/ '<P>'
![Gambar3](ss/3.png)

Buka CMD lalu arahkan lokasi direktori sesuai dengan direktori kerja project yang dibuat 
Perintah untuk memanggil CLI CODEIGNITER adalah'<P>'
php spark'<P>'
![Gambar4](ss/4.png)

Mengaktifkan Mode Debugging '<P>'
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan
error apabila terjadi kesalahan dalam membuat kode program.'<P>'
Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan
kesalahan seperti berikut.'<P>'
![Gambar5](ss/5.png)

Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variabel CI_ENVIRINMENT menjadi development.'<P>'
![Gambar6](ss/6.png)

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI (php spark routes)'<P>'
![Gambar7](ss/7.png)

Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori
Controller kemudian isi kodenya seperti berikut.'<P>'
![Gambar8](ss/8.png)
Ini adalah hasilnya'<P>'
![Gambar9](ss/9.png)

Secara default fitur autoroute pada Codeiginiter sudah aktif.'<P>'
Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false.'<P>'
```php
  {$routes->setAutoRoute(true);}
```
Tambahkan method baru pada Controller Page seperti berikut. '<P>'
public function tos()'<P>'
{'<P>'
echo "ini halaman Term of Services";'<P>'
}'<P>'
![Gambar10](ss/10.png)

Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan
nama about.php pada direktori view (app/view/about.php)'<P>'
Ubah method about pada class Controller Page menjadi seperti berikut:'<P>'
![Gambar11](ss/11.png)
Ini adalah Hasilnya
![Gambar12](ss/12.png)

Buat file css pada direktori public dengan nama style.css'<P>'
![Gambar13](ss/13.png)

Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php
File app/view/template/header.php'<P>'
![Gambar14](ss/14H.png)
![Gambar15](ss/15F.png)

Selanjutnya refresh tampilan pada alamat http://localhost:8080/about '<P>'
Ini adalah hasilnya '<P>'
![Gambar16](ss/16.png)
