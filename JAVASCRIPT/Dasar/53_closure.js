//mengeluarkan fungsi lokal ke global scope
function tambahNilai(value) {
    const huruf = `Angka penambah ${value}`

    function add(param) {
        console.log(huruf);
        return value + param;
    }

    return add;
}

const tambah10 = tambahNilai(10);

console.log(tambah10(12))