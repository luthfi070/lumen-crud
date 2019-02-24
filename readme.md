# Penjelasan

ini adalah crud simple di lumen dimana kita mengoperasikan crud nya melalui aplikasi bernama `postman`, anda bisa mendapatkan postman di https://www.getpostman.com/downloads/

# Files

terdapat 2 controller yaitu KelasController yang berfungsi mengatur `crud` di `table kelas` dan SiswaController yang berfungsi mengatur `crud` di `table siswa`

# Cara kerja
pertama database di buat dulu melalui aplikasi database manager biasa seperti `sqlyog` lalu pembuatan table dilakukan melalui migration, kemudian dibuatlah kelas kelas pada setiap table yang berisi variable `fillable` dan `controller` nya untuk setiap table, di `controller` ini lah fungsi fungsi untuk mengoperasikan crud di buat

## Cara penginstalan

- download postman di https://www.getpostman.com/downloads/
- buat database nya di sqlyog bernama api_sekolah
- clone/download file nya
- buka postman 
- gunakan method `POST` untuk melakukan tambah data, tambahkan `id` nya di akhir url apabila ingin membaca datanya, gunakan method `DELETE` apabila ingin menghapus data dan tambahkan `id` nya di akhir url, gunakan `GET` apabila ingin mengedit  


