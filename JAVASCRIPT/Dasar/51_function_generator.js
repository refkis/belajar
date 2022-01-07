function * buatNama() {
    yield "Refki",
    yield "Santriono"
}



const nama  =buatNama ()
for (const name of nama){
 console.log(name)
}

function * buatGanjil (value){
    for (let i = 1; i <= value; i++) {
        if (i % 2 === 1){
            yield i;
        }       
    }
}
//LAZY , harus dipanggil dlu baru di generate ,
const numbers = buatGanjil(10)
// for (const number of numbers){
//     console.log(number)
// }
console.log(numbers.next().value)
console.log(numbers.next().value)
console.log(numbers.next().value)