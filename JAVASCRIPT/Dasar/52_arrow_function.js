// // Versi Blok
// const sayHello = (nama) => 
// { 
//   const say = `Hello ${nama}`
//   console.log(say)
// }

// sayHello("Refki")


// // Versi 1 baris
// const sayHello = (nama) => console.log( `Hello ${nama}`)

// sayHello("Refki")

// // Return Value Blok
// const sum = (first, second) => {
//     return first + second}

//// Return Value one line
// const sum = (first, second) => first + second

// console.log(sum(10,20))

//Arrow Function tanpa () kalau parameter hanya 1
// const sayHello = name => console.log(`Hello ${name}`)

// sayHello("Refki")

// Arrow Function sbg parameter utk function lain
function giveMeName (callback){
callback("Refki")
}

// giveMeName ((name) => console.log(`Hello ${name}`)) //versi 1
giveMeName (name => console.log(`Hello ${name}`)) // () bisa dihapus