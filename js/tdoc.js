// JavaScript Document
$(document).ready(function(e) {
	$('#btnsubmit').hide();


	$('#btnsubmit').bind('click',function(e){
		e.preventDefault()
		var id = $('#studentid').val()
		var url = "alloc.php?id="+id
		window.location = url
		})
    $('#workorder').bind('blur',function(e){
		var id = $('#workorder').val()
		var cdetails = $('#address').val()
		var url = "checklink.php?id="+id+"&cdetails="+cdetails
		$.get(url,function(data,status){
			if (data == 0){
				alert("Link Not Found Please Contact Admin");

			}
			else {
			var datas = data.split(":")
			if (datas.length>0){
			$('#workorder').val(datas[0])
			$('#client').val(datas[1])
 			$('#address').val(datas[2])
			$('#telephone').val(datas[3])
			$('#datereceived').val(datas[4])
			$('#projectmanager').val(datas[5])
			$('#orderdeadline').val(datas[6])
			$('#workorder1').val(datas[0])
			$('#workorder2').val(datas[0])
			}
			
			}
			})
		})
});