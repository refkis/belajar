function sayHello (nama){
console.log(`Hello ${nama}`)
}

say =sayHello
sayHello("Refki")
say("Reref")

function beriNama(callback){
    callback("Santri")//sayHello("Santri")
}

beriNama(sayHello)
beriNama(say)//sayHello("Santri")