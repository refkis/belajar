//REDUX digunakan untuk manajemen state secara global
import { createStore } from 'redux';
const buatStore = createStore

const dataBarang = {
        stok: 29
}
//REDUCER = berisi fungsi2 yg dapat merubah value pada STORE
const taskReducer = (state = dataBarang, action) => {
    // console.log(action)
    switch (action.type) {
        case 'TAMBAH_STOK':
            return {
                ...state,
                stok: state.stok + 1
            }
            break;
        case 'PENJUALAN':
            return {
                ...state,
                stok: state.stok - action.jumlahJual
            }
            break;

        default:
            return state;
    }
    

}
//STORE = Wadah besar untuk menyimpan State
const store = buatStore(taskReducer)
console.log(store.getState())

//SUBSCRIPTION = Proses pemantauan STORE yg diperlukan
store.subscribe(() =>{
    console.log('perubahan', store.getState())
})

//DISPACTH = Proses pemanggilan Reducer (fungsi2/tasklist) yang ada pada REDUCER
store.dispatch({ type: 'TAMBAH_STOK' })
console.log(store.getState())
store.dispatch({ type: 'PENJUALAN', jumlahJual: 1 })
console.log(store.getState())



