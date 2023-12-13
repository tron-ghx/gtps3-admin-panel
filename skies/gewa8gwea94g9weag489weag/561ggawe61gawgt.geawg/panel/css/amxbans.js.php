function ToggleLayer(obj) {
	if(document.all) {
		if(document.all[obj].style.display == 'none') {
			document.all[obj].style.display = 'block';
		} else {
			document.all[obj].style.display = 'none';
		}
	} else {
		if(document.getElementById(obj).style.display == 'none') {
			if(document.getElementById(obj).tagName == 'DIV') {
				document.getElementById(obj).style.display = 'block';
			} else {
				document.getElementById(obj).style.display = 'table-row';
			}
		} else {
			document.getElementById(obj).style.display = 'none';
		}
	}
}

function NewToggleLayer(element) {
	var e = $('#' + element);
	if (e.css('display') == 'none') {
		e.show().find('div').slideDown('slow')
	} else {
		 e.find('div').slideUp('slow', function() { $(this).parent().parent().hide(); })
	}
}