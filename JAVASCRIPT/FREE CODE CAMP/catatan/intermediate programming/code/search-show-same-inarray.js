function whatIsInAName(collection, source) {
    const arr = [];
    // Only change code below this line
    let keys = Object.keys(source)
    // let keys2 =Object.keys(collection[0])
    // console.log(keys2)
    collection.forEach((obj) => {
        let temp = []
        keys.forEach((key) => {
            if (obj[key] === source[key]) {
                temp.push(obj)
            }
        })

        if (temp.length >= keys.length) {
            arr.push(obj)
        }
    })
    // let a = collection.filter((obj)=> Object.keys(source).every((key)=> obj[key] === source[key]))
    // arr.push(a[0])
    // Only change code above this line
    return arr;
}
console.log(whatIsInAName([{ "apple": 1 }, { "apple": 1 }, { "apple": 1, "bat": 2 }], { "apple": 1 }));
console.log(whatIsInAName([{ "apple": 1, "bat": 2 }, { "apple": 1 }, { "apple": 1, "bat": 2, "cookie": 2 }], { "apple": 1, "cookie": 2 }))  