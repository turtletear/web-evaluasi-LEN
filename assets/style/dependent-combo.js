function getDivisi(){
    $.ajax({
        type : 'get',
        url : site_url+'C_tambah_admin/fetchDivisi',
        dataType : 'json',
        success : function(result){
            $.each(result, function(i, data){
                $('#divisi').append(`<option value="`+ data.id_divisi +`">`+ data.nama_divisi +`</option>`);
            })
        }

    });
}

function getBagian() {
    $('#divisi').change(function() {
        var idDiv = $(this).val();
        $.ajax({
            type : 'get',
            url : site_url+'C_tambah_admin/fetchBagian/'+ idDiv,
            dataType : 'json',
            success : function(result){
                $('#bagian').empty();
                $.each(result, function(i, data){
                    $('#bagian').append('<option value="'+ data.id_bagian +'">'+ data.nama_bagian +'</option>');
                })
            }
    
        }); //end ajax
    });
}


function getAdmUK() {  //get data adminUK for atasan registration
    $('#bagian').change(function() {
        let idbag= $(this).val()
        let iddiv= $('#divisi').val()
        // console.log("id divisi : "+ iddiv +", id bagian : "+ idbag)
        $.ajax({
            type : 'get',
            url : site_url+'C_sign_up_atasan/fetchAdminUKjson/'+idbag+'/'+iddiv,
            dataType : 'json',
            success : function(result) {
                if (result) {
                    $('#admUK').val(result.nama+"-"+result.nik)
                }
                else{
                    $('#admUK').val("-")
                }
    
            },
            error : function(xhr, textStatus, error){
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(error);
            }
    
        });//end ajax

    })
}

function getBagian2() {  // for regis adminUK
    $('#divisi').change(function() {
        var idDiv = $(this).val();
        $.ajax({
            type : 'get',
            url : site_url+'C_tambah_admin/fetchBagian/'+ idDiv,
            dataType : 'json',
            success : function(result){
                $('#bagian').html('');
                $('#bagian').append(`<option selected disabled value>-- Bagian / Unit Kerja --</option>`);
                $.each(result, function(i, data){
                    $('#bagian').append(`<option class="opt_bag" value="`+ data.id_bagian + `">`+ data.nama_bagian +`</option>`);
                })
            }
    
        }); //end ajax
    });
}

function getAllBagian() { //for page setting_uk
    //get data bagian
    $('#divisi').change(function() {
        var idDiv = $(this).val()
        $.ajax({
            type : 'get',
            url : site_url+'C_setting_uk/fetchBagian/' + idDiv,
            dataType : 'json',
            success : function(result) {
                $('#checklist').empty()
                $.each(result, function(i, data){
                    if (data.status == 1) {
                        
                        var element = $(`
                            <input type="checkbox" class="form-check-input" id="checkbox" checked>
                            <label class="form-check-label">`+ data.nama_bagian +`</label> <br>
                        `).on('change', function() {
                            if ($(this).prop("checked")== true) {
                                updateStatusBagian(data.id_bagian, idDiv, 1)
                            }
                            else{
                                updateStatusBagian(data.id_bagian, idDiv, 0)
                            }
                        }) //end on change

                        $('#checklist').append(element)
                    }//end if
                    
                    
                    else{ //if data status = 0
                        var element = $(`
                        <input type="checkbox" class="form-check-input" id="checkbox">
                        <label class="form-check-label">`+ data.nama_bagian +`</label> <br>
                    `).on('change', function() {
                        console.log('ini adalah id_divisi : ' + idDiv)
                        if ($(this).prop("checked")== true) {
                            updateStatusBagian(data.id_bagian, idDiv, 1)
                        }
                        else{
                            updateStatusBagian(data.id_bagian, idDiv, 0)
                        }
                    }) //end on change

                    $('#checklist').append(element)
                    }// end else 
                    
                })
            }
        }); //end ajax
    })
} // end function


function updateStatusBagian(idBag, idDiv, value) {
    $.ajax({
        type : 'POST',
        url : site_url+'C_setting_uk/updateBagianStat',
        dataType : 'text',
        data : {
            'id_bagian' : idBag,
            'id_divisi' : idDiv,
            'value' : value
        },
        success : function(result) {
            console.log("update success!, " + result)
        },
        error : function(xhr, textStatus, error){
            console.log(xhr.statusText);
            console.log(textStatus);
            console.log(error);
        }
    }) //end ajax
}

function setDivBag(){
    $('#combo_atasan').change(function() {
        var idAt = $(this).val()
        $.ajax({
            type : 'get',
            url : site_url+'C_tambah_admin/fetchBagian2/'+ idAt,
            dataType : 'json',
            success : function(result) {
                data = result[0]
                $('#inp_div').val(data.nama_divisi);
                $('#inp_bag').val(data.nama_bagian);
            },
            error : function(xhr, textStatus, error){
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(error);
            }
        }); //end ajax
    });




}


