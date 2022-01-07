//kalo Truthy diambil yg true dluan
//kalo Falsy diambil yg false terakhir

console.log("Hallo" || '')
console.log("" || [])
console.log("0" || 0)
console.log(0 || "Nol")
console.log(null || "Nol")
console.log(null || 0)

const biodata = {
    namaDepan : "",
    namaBelakang : "Santriono"
}

const namaLengkap = biodata.namaDepan || biodata.namaBelakang

console.log(namaLengkap)