barang = int(input("jumlah barang : "))
x = 0               #melakukan loop selama variabel x kurang dari atau sama dengan 0
hargatotal = 0      #melakukan loop selama variabel 'hargatotal' kurang dari atau sama dengan 0

while (x < barang):
    harga = int (input('masukkan harga barang : '))
    hargatotal += harga
    x+=1

if(hargatotal > 75000): 
    diskon = hargatotal * 20 / 100
    print('Total belanjaan sebelum diskon Rp.', hargatotal)
    print('Total belanjaan sesudah diskon Rp.', hargatotal-diskon)
else:  
    print('Total belanjaan Rp.', hargatotal)