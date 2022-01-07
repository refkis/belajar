//Object Kosong

let biodata = {}

biodata["nama"] ="Refki Santriono"
biodata["umur"] ="29"
biodata["alamat"] ="jambi"

delete biodata["umur"]
console.table( biodata ) 

const orang = {
    nama: "Refki Santriono",
    alamat: "Pijoan"
   }
//    console.table( orang ) 
console.log(`Nama Lengkap : ${orang.nama}`)
console.log(`Alamat : ${orang.alamat}`)