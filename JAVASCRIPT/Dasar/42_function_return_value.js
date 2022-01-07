function sayHello(namaDepan, namaBelakang) {
    const say = `Halo ${namaDepan} ${namaBelakang}`

    return say
}
console.log(sayHello("Refki", "Santriono"))


function hasilAkhir(value) {
    if (value > 90) {
        return "A"
    } else if (value > 75) {
        return "B"
    } else {
        return "C atau D atau E"
    }
}
console.log(hasilAkhir(50))


function content (array, pencari){
    for (const element of array){
        console.log(`isi: ${element}`)
        if (element === pencari){
            return true
        }
    }
    return false
}

console.log(content([1,3,4,4,5,2,3,4,5,2],2))