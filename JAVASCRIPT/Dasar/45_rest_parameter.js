//iterasi dengan mengirim data lebih dari 1
function sum(...data) {
    let total = 0
    for (const item of data) {
        total += item
    }
    console.log(`Total is ${total}`)
}

sum(1, 2, 3, 4, 5, 6)

// spread sintax

dataMauDikirim = [2, 4, 5, 6, 7]
sum(dataMauDikirim)//SALAH
//harus diubah ke spread sintax jika data yg mw dikirim sudah dalam bentuk array
sum(...dataMauDikirim)//BENAR
