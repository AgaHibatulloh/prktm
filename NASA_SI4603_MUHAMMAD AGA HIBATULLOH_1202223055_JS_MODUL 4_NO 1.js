const prompt = require('prompt-sync')()
const barang = prompt('masukkan banyak barang belanjaan : ')
let i = 0               //melakukan loop selama variabel i kurang dari atau sama dengan 0
let hargatotal = 0      //melakukan loop selama variabel hargatotal kurang dari atau sama dengan 0

while (i < barang){
    let harga = prompt('Masukkan harga barang : ')
    hargatotal += Number(harga)
    i++
}
if(hargatotal > 75000){
    let diskon = hargatotal * 20 / 100
    console.log('Total belanjaan sebelum diskon Rp.', hargatotal);
    console.log('Total belanjaan sesudah diskon Rp.', hargatotal-diskon);
} else {
    console.log('Total belanjaan Rp.',hargatotal);
}