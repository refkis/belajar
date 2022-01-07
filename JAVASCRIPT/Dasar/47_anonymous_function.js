const say = function(nama){
 console.log(`Hallo ${nama}`)
}

say("Refki")


function beriNama (callback){
    callback("Triono")
}
beriNama(function(name){
    console.log("Hi " + name)
})