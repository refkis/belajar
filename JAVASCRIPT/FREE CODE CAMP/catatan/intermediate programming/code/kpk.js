function kpk(a,b){
    return (a/fpb(a,b))*b
}

function fpb(a,b) {
    return b == 0 ? a : fpb(b,a%b)
}

function smallestCommons(arr) {
//    let a = arr[0]
//    let b = arr[1]
   
//     let newFpb= fpb(a,b)
//    let newKpk = kpk(a,b)
let min =Math.min(...arr)
let max =Math.max(...arr)
for (let i = min; i<=max; i++){
    min= kpk(i,min)
}

    return min
  }
 console.log(smallestCommons([1,5])) 



console.log(kpk(2,3))