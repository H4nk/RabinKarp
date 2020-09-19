# RabinKarp
Rabin Karp adalah salah satu algoritma pencarian string yang menggunakan teknik hasing dan rolling hash.
Rabin karp banyak dimanfaatkan untuk melakukan pencekan plagiat sebuah file. pada aplikasi kali ini saya membuat aplikasi plagiat menggunakan algoritma rabin karp dengan 2 buah file perbandingan.
teknik yang digunakan untuk plagiat adalah :
1. Menghilangkan semua simbol dan spesial karakter dan menghapus semua spasi.
2. menentukan berapa besaran K-Gram nya.
Makin besar K-Gram yang digunakan makin kecil presentasi plagiatnya, dan sebaliknya begitu. makin kecil K-Gram yang di gunakankan maka makin besar juga persentase plagiatnya.
3. Menentukan berapa besaran Basis Hash nya.
Basis yang digunakan biasanya adalah basis 3, basis 5, basis 11. tapi pada aplikasi diberikan kebebesan untuk user untuk menentukan nilai basis. setiap nilai basis yang digunakan akan memberikan nilai yang berbeda .
