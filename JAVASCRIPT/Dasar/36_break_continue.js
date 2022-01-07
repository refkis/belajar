// let nilaiAwal = 1
// while (true) {
//     let hasil = `Perulangan ke : ${nilaiAwal}`
//     console.log(hasil)
//     nilaiAwal++

//     if (nilaiAwal > 3) {
//         break
//     }
// }


//CONTINUE
//jika kondisi terpenuhi akan dilewati tidak perlu dieksekusi
//ganjil
// for(let a=1;a < 10 ; a++){
//     if(a % 2 ===0){
//         continue
//     }
//     console.log(`perulangan ke ${a}`)
// }
//genap
for(let a=1;a < 10 ; a++){
    if(a % 2 !==0){
        continue
    }
    console.log(`perulangan ke ${a}`)
}