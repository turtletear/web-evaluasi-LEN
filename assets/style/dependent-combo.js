/*
// object literal holding data for option elements
var Select_List_Data = {
    
    'bagian': { // name of associated select box
        
        // names match option values in controlling select box
        sekper: {
            text: ['Legal', 'Komunikasi Korporasi', 'Program  Kemitraan & Bina Lingkungan', 'Manajemen Korporasi'],
            value: ['Legal', 'Komunikasi Korporasi', 'Program  Kemitraan & Bina Lingkungan', 'Manajemen Korporasi']
        },
        satpi: {
            text: ['Monitoring & Kualitas Audit', 'Audit'],
            value: ['Monitoring & Kualitas Audit', 'Audit']
        },
        penjmutu: {
            text: ['Penjaminan Mutu', 'Penjaminan Sistem', 'Keselamatan, Kesehatan Kerja, dan Lingkungan'],
            value: ['Penjaminan Mutu', 'Penjaminan Sistem', 'Keselamatan, Kesehatan Kerja, dan Lingkungan']
        },
        keuakun: {
            text: ['Keuangan', 'Akuntansi & Perpajakan'],
            value: ['Keuangan', 'Akuntansi & Perpajakan']
        },
        sdmu: {
            text: ['Sumber Daya Manusia', 'Urusan Umum'],
            value: ['Sumber Daya Manusia', 'Urusan Umum']
        },
        pemtek: {
            text: ['Produl Hankam & TIKN', 'Produk Perkeretaapian', 'Produk Energi & Traksi'],
            value: ['Produl Hankam & TIKN', 'Produk Perkeretaapian', 'Produk Energi & Traksi']
        },
        logis: {
            text: ['Perencanaan & Pengendalian Logistik', 'Operasi Logistik', 'Pengendalian Persediaan & Operasi Gudang'],
            value: ['Perencanaan & Pengendalian Logistik', 'Operasi Logistik', 'Pengendalian Persediaan & Operasi Gudang']
        },
        manstraop: {
            text: ['Perencanaan & Evaluasi Korporasi', 'Sistem Informasi', 'Pengembangan Bisnis & Investasi','Manajemen Risiko & Administrasi Kontrak'],
            value: ['Perencanaan & Evaluasi Korporasi', 'Sistem Informasi', 'Pengembangan Bisnis & Investasi','Manajemen Risiko & Administrasi Kontrak']
        },
        asdir: {
            text: ['-'],
            value: ['-']
        },
        enersisda: {
            text: ['Pemasaran & Penjualan', 'Rekayasa Sistem', 'Komersial'],
            value: ['Pemasaran & Penjualan', 'Rekayasa Sistem', 'Komersial']
        },
        sistrans: {
            text: ['Pemasaran & Penjualan', 'Rekayasa Sistem', 'Komersial'],
            value: ['Pemasaran & Penjualan', 'Rekayasa Sistem', 'Komersial']
        },
        elekhan: {
            text: ['Rekayasa Sistem', 'Komersial'],
            value: ['Rekayasa Sistem', 'Komersial']
        },
        tiknav: {
            text: ['Pemasaran & Penjualan', 'Rekayasa Sistem', 'Komersial'],
            value: ['Pemasaran & Penjualan', 'Rekayasa Sistem', 'Komersial']
        },
        industri: {
            text: ['Pemasaran & Penjualan', 'Rekayasa Produksi & Purna Jual', 'Rekayasa Produk', 'Perencanaan & Pengendalian Produksi'],
            value: ['Pemasaran & Penjualan', 'Rekayasa Produksi & Purna Jual', 'Rekayasa Produk', 'Perencanaan & Pengendalian Produksi']
        },
    
    }    
};

// removes all option elements in select box 
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }
    
    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;
        
        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if ( obj.value ) {
                o.value = obj.value[i];
            }
            
            f.appendChild(o);
        }
        return f;
    }
    if (obj) {
        if ( obj.text ) {
            opts = addOptions(obj);
            f.appendChild(opts);
        } else {
            for ( var prop in obj ) {
                if ( obj.hasOwnProperty(prop) ) {
                    labels.push(prop);
                }
            }
            
            for (var i=0, len=labels.length; i<len; i++) {
                group = document.createElement('optgroup');
                group.label = labels[i];
                f.appendChild(group);
                opts = addOptions(obj[ labels[i] ] );
                group.appendChild(opts);
            }
        }
        sel.appendChild(f);
        
    }

}
//document.forms['mainForm'].elements['divisi'].onchange
// anonymous function assigned to onchange event of controlling select box
document.forms['mainForm'].elements['divisi'].onchange = function(e) {
    // name of associated select box
    var relName = 'bagian';

    // reference to associated select box 
    var relList = this.form.elements[ relName ];
    
    // get data from object literal based on selection in controlling select box (this.value)
    var obj = Select_List_Data[ relName ][ this.value ];
    
    // remove current option elements
    removeAllOptions(relList, true);
    
    // call function to add optgroup/option elements
    // pass reference to associated select box and data for new options
    appendDataToSelect(relList, obj);
};

// populate associated select box as page loads
(function() { // immediate function to avoid globals
    
    var form = document.forms['mainForm'];
    
    // reference to controlling select box
    var sel = form.elements['divisi'];
    sel.selectedIndex = 0;
    
    // name of associated select box
    var relName = 'bagian';
    // reference to associated select box
    var rel = form.elements[ relName ];
    
    // get data for associated select box passing its name
    // and value of selected in controlling select box
    var data = Select_List_Data[ relName ][ sel.value ];
    
    // add options to associated select box
    appendDataToSelect(rel, data);
    
}()); */

function getDivisi(){
    $.ajax({
        type : 'get',
        url : site_url+'fetchDivisi',
        dataType : 'json',
        success : function(result){
            $('#divisi').append('<option disabled selected value >-- Divisi --</option>');
            $.each(result, function(i, data){
                $('#divisi').append('<option value='+ data.id_divisi +'>'+ data.nama_divisi +'</option>');
            })
        }

    });
}

function getBagian() {
    $('#divisi').change(function() {
        var idDiv = $(this).val();
        // console.log("print id = " + idDiv);
        $.ajax({
            type : 'get',
            url : site_url+'fetchBagian/'+ idDiv,
            dataType : 'json',
            success : function(result){
                $('#bagian').empty();
                $('#bagian').append('<option disabled selected value >-- Bagian --</option>');
                $.each(result, function(i, data){
                    $('#bagian').append('<option value='+ data.id_bagian +'>'+ data.nama_bagian +'</option>');
                })
            }
    
        }); //end ajax
    });
}

