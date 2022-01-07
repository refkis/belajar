//get akan menjadi property baru dari sebuah object
const biodata = {
    namaDepan: "Refki",
    namaBelakang: "Santriono",
    get fullName() {
        return `${this.namaDepan} ${this.namaBelakang}`
    },


    //untuk merubah isi dari property
    set fullName(val) {
        const splitArray = val.split(" ")
        this.namaDepan = splitArray [0]
        this.namaBelakang = splitArray [1]


    }
}
// console.log(biodata.namaDepan)
// console.log(biodata.namaBelakang)
// //memanggil getter
// console.log(biodata.fullName)

//hasil dari setter setelah ubah data property
console.log(biodata.fullName="Kiref Triono")
console.log(biodata.namaDepan)
console.log(biodata.namaBelakang)
