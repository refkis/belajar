function sumFibs(num) {

    let f0 = 0
    let f1 = 1
    let result = 0
    let next
    for (let i = 1; i <= num; i++) {
        if (f1 % 2 ===1 && f1 <=num ) 
        {
            result += f1
        }
        next = f0 + f1
        // console.log(f1)
        f0 = f1
        f1 = next 
        }
       return result   
}
console.log(sumFibs(4))