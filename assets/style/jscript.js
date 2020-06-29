function f_lain() {
    var lain = document.getElementById("Lainnya");
    var put = document.getElementById("putus");
    var pag = document.getElementById("pagu");
    var kpag = document.getElementById("kode_pagu");
    lain.style.display = "block";
    put.style.display = "none";
    pag.style.display = "none";
    kpag.style.display = "none";
    localStorage.setItem('stat','lain');
}

function f_put() {
    var lain = document.getElementById("Lainnya");
    var put = document.getElementById("putus");
    var pag = document.getElementById("pagu");
    var kpag = document.getElementById("kode_pagu");
    lain.style.display = "none";
    put.style.display = "block";
    pag.style.display = "none";
    kpag.style.display = "none";
    localStorage.setItem('stat','putus');
}

function f_other() {
    var lain = document.getElementById("Lainnya");
    var put = document.getElementById("putus");
    var pag = document.getElementById("pagu");
    var kpag = document.getElementById("kode_pagu");
    lain.style.display = "none";
    put.style.display = "none";
    pag.style.display = "block";
    kpag.style.display = "block";
    localStorage.setItem('stat','other');
}

function func1() {
    var a = document.getElementById("combo1");
    var x = a.value;
    if (x === "Lainnya"){
        f_lain();
    }
    else if(x === "Diputus") {
        f_put();
    }
    else{
        f_other();
    }
}


// function main_f() {

// }