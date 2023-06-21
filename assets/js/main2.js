$("#inputperencanaan").submit(function(e) {
    e.preventDefault();
    var formdata = new FormData();

    // Mendapat input dari FORM
    var form_data = $('#inputperencanaan').serializeArray();
    $.each(form_data, function (key, input) {
        formdata.append(input.name, input.value);
    });

    // File type
    formdata.append('file', $('input[name="file"]')[0].files[0]);
    formdata.append('foto', $('input[name="foto"]')[0].files[0]);
    
    for (var key of formdata.entries()) {
        console.log(key[0] + ', ' + key[1]);
    }

    $.ajax({
    	url : "http://localhost/fprpu/perencanaan/simpan",
    	type: "POST",
    	data: formdata,
    	processData: false,
    	contentType: false,
    	dataType: "JSON",
    	success: function(data) {
            console.log("wes teko kene");
            console.log(data);
            if (data.status!==200){
                Swal.fire({
                    title: "Error!",
                    text: data.message,
                    icon: "error",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: !1
                }); 
            } else {
                Swal.fire({
                    title: "Success!",
                    text: data.message,
                    icon: "success",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: !1
                }).then(function() {
                    window.location.href = data.redirecturl;
                });
            }

            // window.location.href = data.redirecturl;
        },
    	error: function (jqXHR, textStatus, errorThrown) {
            console.log("ono error");
            Swal.fire({
                title: "Error!",
                text: "ops, data tidak dapat disimpan",
                icon: "error",
                customClass: {
                    confirmButton: "btn btn-primary"
                },
                buttonsStyling: !1
            });

    		// location.reload();
    	}
    });
});













// referensi print 
// cek data apakah sudah didapat
    // console.log($(this).serialize());
    // console.log(formdata.entries());
    // for (var key of formdata.entries()) {
    //     console.log(key[0] + ', ' + key[1]);
    // }
    // var x = new FormData($('#inputperencanaan')[0]);
    // console.log(x);
    
    
    
    // 		form = data.form;
    // 		$.LoadingOverlay("hide");
    // 		if(data.status) {
    // 			Custombox.modal.close();
    // 			swal({
    // 			title: "Berhasil!",
    // 			text: 'Data Anda telah disimpan.',
    // 			icon: "success",
    // 			button: "OK",
    // 			})
    // 			.then((val) => {
    // 				if(data.info == "online") {
    // 					if(window.location.href.indexOf('warga') > 0 || window.location.href.indexOf('/online') > 0) {
    // 						resetForm = true;
    // 						$('#datatable').DataTable().ajax.reload();
    // 						if(data.id) cetak(false, data.info, data.id, false, 1, 8);
    // 					}
    // 					else {
    // 						if(data.id) cetak(base+"warga/", data.info, data.id, false, 1, 8);
    // 						else window.location.href = base+"warga/";
    // 					}
    // 				}
    // 				else {
    // 					if(window.location.href.indexOf('/ap') > 0 || window.location.href.indexOf('/sp') > 0 || window.location.href.indexOf('/all') > 0) {
    // 						resetForm = true;
    // 						$('#datatable').DataTable().ajax.reload();
    // 						if(data.id) cetak(false, data.info, data.id, false, 11);
    // 					}
    // 					else {
    // 						var a = document.getElementById("breadcrumbNavBar").querySelectorAll("a");
    // 						a.forEach(function(element) {
    // 							var href = element.href;
    // 							if (href.indexOf("/all") !== -1) {
    // 								if(data.id) cetak(href, data.info, data.id, false, 11);
    // 								else window.location.href = href;
    // 							}
    // 						});
    // 					}
    // 				}
    // 			});
    // 		}
    // 		else {
    // 			var info = (data.info == ''? 'Periksa kembali isian Anda': data.info);
    // 			swal({
    // 			title: "Gagal!",
    // 			text: info,
    // 			icon: "error",
    // 			button: "OK",
    // 			});
    // 		}