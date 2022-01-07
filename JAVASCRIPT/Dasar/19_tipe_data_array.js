//Push Array

let nama = []
 nama.push("Refki","Kiref","Santri","Triono")

console.log(nama.length)
console.log(nama[1])

nama[0] = "Reref"

console.table(nama)

nama.push("Refki Lagi")
console.table( nama ) 

nama.push(1,2,3,4)
console.table( nama ) 

nama.push([1,2,3,4,["array","array"]])
console.table( nama ) 

