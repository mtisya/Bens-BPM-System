// JavaScript Document
$(document).ready(function(e) {
    $('#insertid').bind('click',function(e){
    	e.preventDefault()
		var id = $('#workorder').val()
		var url = "generateid.php?id="+id
		$.get(url,function(data,status){
			if (data == 0){
				alert("Custom ID Not Found Please Contact Admin");

			}
			else {
			var datas = data.split(":")
			if (datas.length>0){
			$('#workorder').val(datas[0])
			}
			}
			})
		})
});