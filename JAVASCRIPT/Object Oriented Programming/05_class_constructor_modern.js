class Person {
    constructor (name) {
        
        console.log(`membuat new person -> ${name}`)

    }

}
Person.prototype.sayHello = function () {

}

const refki = new Person("Refki")
console.log(refki);