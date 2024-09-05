/* const password = prompt("masukan password");

if (password.length >= 10 && password.indexOf(" ") === -1) {
  console.log("password valid");
} else {
  console.error("password tidak memnuhi syarat");
} */

/* let umur = parseInt(prompt("masukan umur mu : "));
let gender = prompt("masukan jenis kelamin mu : \n pilih antara pria atau wanita").toLowerCase();
if (gender === "pria" && umur >= 20) {
  console.log("kamu bisa mengikuti pertandingan UFC");
} else {
  console.log("maaf kamu ga bisa ikutan");
}
 */

/* const rowMurid = [
  ["icam", "fadilah", "sese", "futuh"],
  ["eza", "ninis", "embi", "ono"],
  ["aqila", "nando", "endif", "parid"],
]; */

/* for (let i = 0; i < rowMurid.length; i++) {
  const row = rowMurid[i];
  console.log(`row ke ${i + 1}`);
  for (let j = 0; j < row.length; j++) {
    console.log(row[j]);
  }
} */

/* let i = 0;
while (i < rowMurid.length) {
  console.log(`row ke ${i + 1}`);
  let j = 0;
  const data = rowMurid[i];
  while (j < data.length) {
    console.log(data[j]);
    j++;
  }
  i++;
} */

/* for (let row of rowMurid) {
  for (let data of row) {
    console.log(data);
  }
} */

/* const dataWarga = {
  icam: 20,
  fadilah: 22,
  sese: 16,
  endif: 12,
  aqila: 12,
  ono: 22,
};

for (let row in dataWarga) {
  console.log(`nama: ${row} berusia ${dataWarga[row]}`);
}
 */

// function pertama() {
//   console.log("Ini fungsi pertama");
//   kedua();
// }

// function kedua() {
//   console.log("Ini fungsi kedua");
//   ketiga();
// }

// function ketiga() {
//   console.log("Ini fungsi ketiga");
// }

// pertama();

// let tambah = function (a, b) {
//   alert(`Hasil dari penjumlahan ${a} + ${b} adalah ${a + b}`);

//   function perkalian(a, b) {
//     let str = `Hasil dari perkalian ${a} x ${b} adalah ${a * b}`;
//     return str;
//   }

//   // Memanggil fungsi perkalian di dalam fungsi tambah
//   let hasilPerkalian = perkalian(a, b);
//   alert(hasilPerkalian);
// };

// reduce()
// const produk = [
//   { nama: "Laptop", harga: 1000 },
//   { nama: "Phone", harga: 500 },
//   { nama: "Tablet", harga: 300 },
// ];

// const totalHarga = produk.reduce(function (acc, product) {
//   return acc + product.harga;
// }, 0);

// console.log(totalHarga); // Output: 1800

/* acc adalah singkatan dari "accumulator" atau "penampung." Ini adalah variabel yang menyimpan total sementara dari harga-harga barang yang sudah ditambahkan sejauh ini.
product.price adalah harga dari barang yang sedang diproses dalam iterasi saat ini.
Setiap kali reduce() memproses sebuah elemen (dalam hal ini, setiap objek produk), ia akan melakukan operasi acc + product.price, yang berarti:

Iterasi Pertama:

acc mulai dengan nilai 0 (karena kita mengatur initialValue sebagai 0).
Produk pertama adalah Laptop dengan harga Rp 1.000.000.
acc + product.price menjadi 0 + 1000, yang hasilnya adalah 1000.
acc sekarang menjadi 1000.
Iterasi Kedua:

acc sekarang adalah 1000.
Produk kedua adalah Ponsel dengan harga Rp 500.000.
acc + product.price menjadi 1000 + 500, yang hasilnya adalah 1500.
acc sekarang menjadi 1500.
Iterasi Ketiga:

acc sekarang adalah 1500.
Produk ketiga adalah Tablet dengan harga Rp 300.000.
acc + product.price menjadi 1500 + 300, yang hasilnya adalah 1800.
acc sekarang menjadi 1800.
Pada akhir semua iterasi, nilai acc adalah 1800, yang merupakan total harga dari semua barang. */

// function cetak(nama = "(belum di isi)") {
//   console.log(`hallo nama saya ${nama}`);
// }

// let arr1 = [0, 1, 2, 3, 4, 5];
// let arr2 = [6, 7, 8, 9, 10];
// let gabung = [...arr1, ...arr2];
// Math.max(...gabung);

// spread operator
// const arr1 = ["icam", "futuh", "fadilah", "syafa"];
// console.log(...arr1);
// membuat array menjadi non array

// const dataUser = {
//   name: "futuh",
//   email: "futuhiqram$gmail.com",
// };

function tambah_tanpa_batas(...a) {
  let v = a.reduce((total, el) => total - el);
  alert(`Hasil yang kamu inputkan ${v}`);
}

const nama = ["icam", "fadilah", "futuh", "iqram", "multazam", "sese", "denu"];
// array ini bisa di masukin ke situ langsung menggunakan spread ...element, atau kamu bisa masukin di argumen nya sesuai kehendak kamu nanti
/* 
juara(...nama);
output:
script.js:158 Juara satu di raih oleh icam
script.js:159 Juara dua di raih oleh fadilah
script.js:160 Juara tiga di raih oleh futuh
script.js:161 Peserta lainnya: iqram,multazam,sese,denu
*/

// function juara(juara1, juara2, juara3, ...pesertaLain) {
//   console.log(`Juara satu di raih oleh ${juara1}`);
//   console.log(`Juara dua di raih oleh ${juara2}`);
//   console.log(`Juara tiga di raih oleh ${juara3}`);
//   console.log(`Peserta lainnya: ${pesertaLain}`);
// }

// distarcting
// const [gg, re, gf] = nama;
