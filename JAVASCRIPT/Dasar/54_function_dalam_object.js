// //memasukan Anonymous function ke dalam property object
// const orang = {
//     nama : "Refki",
//     sayHello : function (nama){
//    console.log(`Hallo ${nama}`)
//     }
// }

// orang.sayHello("Santri")

// //menambahkan function Anonymous ke dalam property object yg sudah ada
const orang = {
    nama : "Refki",
   
}
orang.sayHello = function (nama){
    console.log(`Hallo ${nama}`)
     }
orang.sayHello("Santri")