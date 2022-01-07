class Person {
    constructor (name) {
        
        this.name = name
        // this.sayHello = function (){
        //     console.log(`Hi ${name}, ini akan masuk ke prperty object`)
        // }

    }
    sayHello(name){
        console.log(`Hi ${name}, ini akan masuk ke prototype`)
    }

}
Person.prototype.sayHello = function () {

}

const refki = new Person("Refki")
console.log(refki);
console.log(refki.name);