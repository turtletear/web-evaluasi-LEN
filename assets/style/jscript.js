function f_lain() {
    var lain = document.getElementById("Lainnya");
    var put = document.getElementById("putus");
    var pag = document.getElementById("pagu");
    lain.style.display = "block";
    put.style.display = "none";
    pag.style.display = "block";
    localStorage.setItem('stat','lain');
}

function f_put() {
    var lain = document.getElementById("Lainnya");
    var put = document.getElementById("putus");
    var pag = document.getElementById("pagu");
    lain.style.display = "none";
    put.style.display = "block";
    pag.style.display = "none";
    localStorage.setItem('stat','putus');
}

function f_other() {
    var lain = document.getElementById("Lainnya");
    var put = document.getElementById("putus");
    var pag = document.getElementById("pagu");
    lain.style.display = "none";
    put.style.display = "none";
    pag.style.display = "block";
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
    else if(x === "Diperpanjang 3 Bulan" || x === "Diperpanjang 6 Bulan" || x === "Diperpanjang 1 Tahun" ) {
        f_other();
    }
}


function hideCombo() {
    var x = document.getElementById("com_filter");
    var a = x.value;
    var dp1 = document.getElementById("datePicker");
    var dp2 = document.getElementById("datePicker2");
    if (a === "date") {
        dp1.style.display = "block";
        dp2.style.display = "block";
        localStorage.setItem('stat2','block');
        
    }
    else if (a === "completed" || a === "all"){
        dp1.style.display = "none";
        dp2.style.display = "none";
        localStorage.setItem('stat2','none');
        
    }

    
}