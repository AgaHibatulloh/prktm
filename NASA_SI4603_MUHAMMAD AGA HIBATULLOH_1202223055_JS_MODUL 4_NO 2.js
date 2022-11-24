const prompt = require('prompt-sync')()
let accUsername = 'Daspro'
let accPassword = 'PPL4s!k'

let i = 3   //melakukan loop selama variabel i kurang dari atau sama dengan 3

while (i > 0){
    let username = prompt('Masukkan username Anda : ')
    let password = prompt('Masukkan password Anda : ')
    if(accUsername === username && accPassword === password){
        console.log("selamat, Anda Berhasil login!");
        break
    }else {
        if(i > 1){
            i -= 1
            console.log('Login gagal, percobaan tersisa',i,"kali");
        }else if(i <= 1) {
            console.log("coba lagi besok");
            break
        }
    }
    
}