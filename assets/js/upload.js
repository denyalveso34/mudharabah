function preview() {
    var preview = document.getElementById("preview");
    var file    = document.getElementById("formFile").files[0];
    var reader  = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }
}
function previewFile() {
	var preview = document.getElementById('pdf-preview');
	var file    = document.querySelector('input[type=file]').files[0];
	var reader  = new FileReader();

	reader.onloadend = function () {
		preview.src = reader.result;
	}

	if (file) {
		reader.readAsDataURL(file);
	} else {
		preview.src = "";
	}
}
function clearImage() {
    document.getElementById('formFile').value = null;
    frame.src = "";
}