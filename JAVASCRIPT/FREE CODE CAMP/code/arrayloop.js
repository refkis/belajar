function greaterThanTen(arr) {
    let newArr = [];
    for (let i = 0; i < arr.length; i++) {
      if (arr[i] > 10) {
        newArr.push(arr[i]);
      }
    }
    return newArr;
  }
  
  hasil= greaterThanTen([2, 12, 8, 14, 80, 0, 1]);
  console.log(hasil)

