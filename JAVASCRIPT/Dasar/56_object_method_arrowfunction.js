//di arrow function this akan mengacu ke windows
const biodata = {
    nama : "Refki",
    sayHello :  (value) => {
        console.log(`Hi ${value} my Name is ${this.nama}`)//this akan kosong 
       
    }

}
biodata.sayHello("Santri")