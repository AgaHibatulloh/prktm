accUsername = 'Daspro'      #username yang benar
accPassword = 'PPL4s!ks'    #password yang benar

i = 3
while (i > 0):
    username = input('Masukkan username Anda :')
    password = input('Masukkan password Anda :')
    if(accUsername == username and accPassword == password):
        print("selamat, Anda Berhasil login!")
        break
    else:
        if(i > 1):
            i -= 1
            print('Login gagal, percobaan tersisa',i,"kali")
        elif (i <= 1):
            print("coba lagi besok")
            break
        
    
    
