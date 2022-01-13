public class TypeData {
    public static void main(String[] args) {
        // tipe data
        // byte iniByte = 100;

        // System.out.println(iniByte);

        // konversi otomatis
        // byte->short->int->long->float->double

        // konversi manual
        // double->float->long->int->short->byte

        // string
        // char r = 'R';
        // char e = 'E';
        // char f = 'F';
        // System.out.print(r);
        // System.out.print(e);
        // System.out.print(f);

        // String namaDepan = "Refki";
        // String namaBelakang = "Santriono";
        // String namaLengkap = namaDepan + " " +namaBelakang;

        // System.out.println(namaDepan);
        // System.out.println(namaBelakang);
        // System.out.print(namaLengkap);;

        // Variable

        // String nama ;
        // nama = "Refki Santriono";

        // int umur = 30 ;

        // var umur = 30;

        // //variabel konstan tidak bisa diubah

        // final String nama = "Refki Santriono";
        // System.out.println("Nama : "+nama + " Umur :" +umur);

        // int iniInt = 100 ;
        // Integer iniObject = iniInt;

        // short iniShort = iniObject.shortValue();
        // System.out.println(iniShort);

        // String [] myArray;
        // myArray = new String[2];
        // myArray[0] = "Refki";
        // myArray[1] = "Santriono";

        // System.out.print(myArray[0]);

        // String[][] members = {
        // {"Refki","Santriono"},
        // {"Kiref","Triono"}
        // };
        // System.out.println(members[0][0]);
        // System.out.println(members[0][1]);
        // System.out.println(members[1][0]);
        // System.out.println(members[1][1]);

        // Operasi Matematika

        // int a = 100;
        // int b = 10;

        // System.out.println(a + b);
        // System.out.println(a - b);
        // System.out.println(a * b);
        // System.out.println(a / b);
        // System.out.println(a % b);

        // Augmanted Asign
        // int a = 100;

        // a += 9;
        // System.out.println(a);// 109

        // a -= 9;
        // System.out.println(a);// 100

        // a *= 9;
        // System.out.println(a);// 900

        // a /= 9;
        // System.out.println(a);// 100

        // a %= 9;
        // System.out.println(a);// 1

        // // Unary
        // a++;
        // System.out.println(a);// 2

        // Switch Lamda
        // var nilai = "";
        // switch (nilai) {
        // case "A"-> System.out.println("Dengan Pujian");
        // case "B","C"-> System.out.println("Pujian");
        // case "D","E"-> System.out.println("Tidak Lulus");
        // default->System.out.println("Anda Salah Jurusan");
        // }

        
        // for (int i = 1; i <= 10; i++) {
        //     System.out.println("nilai ke " + i);

        // }

        // sayHelloWorld();
        var hasil = penjumlahan(100, 200);
        System.out.println(hasil);

    }
    // static void sayHelloWorld (){
    //     System.out.println("Hello World");

    // }

    static int penjumlahan(int value1, int value2){
        var total  = value1 +value2;
        return total;
    }

}
