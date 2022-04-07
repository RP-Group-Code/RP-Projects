#
# num = int(input("Masukan Nomor : "))
#
# for i in range(0, num): #baris
#     for j in range(0, num-i): #spasi
#         print(end=" ")
#     for j in range(0, i+1): #bintang
#         print("*", end=" ")
#     print() #enter

# for row in range (6):
#     for col in range (7):
#         if (row==0 and col%3!=0) or (row==1 and col%3==0) or (row-col==2) or (row+col==8):
#             print("*", end=" ")
#         else:
#             print(end=" ")
#     print()
#
# for($a=0; $a<=9; $a++){
#     for($b=0; $b<$a; $b++){
#         echo $b.' ';
#     }
#     echo '<br>';
# }

bil = int(input("Masukan Bilangan :"))

if bil % 2 == 0:
    print(" %d Merupakan Bilangan Genap" % bil)
else:
    print("%d Merupakan Bilangan Ganjil" % bil)