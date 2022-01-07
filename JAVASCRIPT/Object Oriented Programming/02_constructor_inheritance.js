function Employee(firstName) {
    this.firstName = firstName
    this.sayHello = function (name) {
        console.log(`Halo ${nama}, aku ${this.firstName}`)
    }
}

function Manager(firstName, lastName) {
    Employee.call(this, firstName)
    this.lastName = lastName
}
const refki = new Manager("Refki","Santriono")

console.log(refki)