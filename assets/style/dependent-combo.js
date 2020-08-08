function getDivisi(){
    $.ajax({
        type : 'get',
        url : site_url+'C_tambah_admin/fetchDivisi',
        dataType : 'json',
        success : function(result){
            $.each(result, function(i, data){
                $('#divisi').append('<option value='+ data.id_divisi +'>'+ data.nama_divisi +'</option>');
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
                    $('#bagian').append('<option value="'+ data.nama_bagian +'">'+ data.nama_bagian +'</option>');
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
                            console.log('ini adalah id_divisi : ' + idDiv)
                            if ($(this).prop("checked")== true) {
                                console.log(data.nama_bagian+ " with id: "+ data.id_bagian + " is now active")
                                updateStatusBagian(data.id_bagian, idDiv, 1)
                            }
                            else{
                                console.log(data.nama_bagian + " is now deactive")
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


