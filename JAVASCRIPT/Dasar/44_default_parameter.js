function register(name, gender="UNKNOWN"){
    console.log(name)
    console.log(gender)
}

register() //undefined, UNKNOWN
register("Refki") //gender akan berisi default UNKNOWN
register("Refki",null) //gender akan berisi default null
