
// const names = ["Refki","Santri","ono",1,2,3,4,5,6]

// //mengambil data biasanya
// const firstName = names[0]
// const middleName = names[1]
// console.log(firstName)

// //destructuring mengambil data dari ARRAY

// const [firstName,middleName,lastName, ...sisa]=names
// console.log(firstName)
// console.log(middleName)
// console.log(lastName)
// console.log(sisa)


//mengambil data dari OBJECT

// const biodata = {
//     namaDepan: "Refki",
//     namaBelakang: "Santriono",
//     alamat:{
//         desa: "Pijoan",
//         kec: "Jaluko",
//         kab: "Muaro Jambi"
//     },
//     hobi:"memancing",
//     channel:"resarea"
// }

// //destructuring property
// let {namaDepan, namaBelakang, alamat, ...lainnya}=biodata

// console.log(namaDepan)
// console.log(namaBelakang)
// console.log(alamat)
// console.log(lainnya)

// //destructuring sub property
// let {namaDepan, namaBelakang, alamat:{desa,kec,kab}, ...lainnya}=biodata

// console.log(namaDepan)
// console.log(namaBelakang)
// console.log(desa)
// console.log(lainnya)


// //destructuring sub property
// let {namaDepan, namaBelakang, alamat:{...address}, ...lainnya}=biodata

// console.log(namaDepan)
// console.log(namaBelakang)
// console.log(address)
// console.log(lainnya)

// //destructuring parameter OBJECT
// function displayBiodata({ namaDepan, namaBelakang, ...lainnya }) {

//     console.log(namaDepan)
//     console.log(namaBelakang)
//     console.table(lainnya)
// }

// const biodata = {
//     namaDepan: "Refki",
//     namaBelakang: "Santriono",
//     alamat:{
//         desa: "Pijoan",
//         kec: "Jaluko",
//         kab: "Muaro Jambi"
//     },
//     hobi:"memancing",
//     channel:"resarea"
// }

// displayBiodata(biodata)


// //destructuring ARRAY
// function hitungArray ([first, second]){
//     return first + second
// }
// console.log(hitungArray([1,2]))
// console.log(hitungArray([120,20]))


// //destructuring ARRAY dgn default value 

// const names = ["Refki"]
// const [firstName , lastName = "Santriono"]= names

// console.log(firstName)
// console.log(lastName)


//destructuring OBJECT dgn default value 
// const biodata = {
//     namaDepan: "Refki",
// }

// let { namaDepan, namaBelakang = "Santriono" } = biodata
// console.log(namaDepan)
// console.log(namaBelakang)


//destructuring merubah nama Property pada Object
const biodata = {
    firstName: "Refki",
    lastName: "Santriono",
}

let {
    firstName: namaDepan,
    lastName: namaBelakang
} = biodata

console.log(namaDepan)
console.log(namaBelakang)