//syncronus
// const getUserSync = (id) =>{

//     const nama= id === 1 ? 'Refki' : 'Santriono';
//     return {id, nama};
// }
// const userSatu = getUserSync(1);
// console.log(userSatu);
// const userDua = getUserSync(2);
// console.log(userDua);

//Asyncronus

const getUser = (id, cb) =>{
        const time = id === 1 ? 3000 : 2000;
    setTimeout(()=>{
        const nama = id === 1 ? 'Refki' : 'Santriono';
        cb({id, nama});
    },time);
};

const userSatu = getUser(1, (hasil) =>{
    console.log(hasil);
});

const userDua = getUser(2, (hasil) =>{
    console.log(hasil);
});


const newLocal = 'halo';
console.log(newLocal);
