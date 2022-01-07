class Employee {
    constructor(firstName){
        this.firstName = firstName
    }
    sayHello(name) {
        console.log(`hi ${name}, ini adalah Employee ${this.firstName}`)
    }
}

class Manager extends Employee {
//child wahib memanggil constructor dari parent
    constructor(firstName, lastName){
        super(firstName)
        this.lastName = lastName
    }
    sayHello(name) {
        console.log(`hi ${name}, ini adalah Manager ${this.firstName}`)
    }

}
const refka = new Employee ("Refka")
refka.sayHello("JOKI")
console.log(refka)

const refki = new Manager ("Refki", "Santriono")
refki.sayHello("Joko")
console.log(refki)
