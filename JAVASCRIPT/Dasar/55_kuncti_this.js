// console.log(this); // global, function, inner function this akan mengacu ke Window (browser)



//this mengacu ke object jika di dlaam property
const biodata = {
    nama : "Refki",
    sayHello : function (value) {
        console.log(`Hi ${value} my Name is ${this.nama}`)
        console.log(this);
    }

}
biodata.sayHello("Santri")