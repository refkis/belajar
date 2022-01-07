function useStrictMode(){
    'use strict' 
    const person ={
        firstName : "Refki"
    }
    //error
    with (person){
        console.log(firstName)
    }
}

useStrictMode()

{/* fungsi yg tidak direkomendasikan untuk digunakan pada mode 'use strict' */}
/* 
with
var
delete
dll
*/