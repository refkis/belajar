function Person(firstName, lastName) {

    this.firstName = firstName
    this.lastName = lastName
    this.sayHello = function (name) {
        console.log(`Hi ${name}, saya ${this.firstName}`)
    }
}


// const refki = new Person()
// refki.firstName = "Refki"
// refki.lastName = "Santriono"
// refki.sayHello ("Kamu")

const refki = new Person("Refki","Santriono")
console.log(refki)