// JavaScript Document
$(document).ready(function(e) {
	$('#btnsubmit').hide();


	$('#btnsubmit').bind('click',function(e){
		e.preventDefault()
		var id = $('#workorder').val()
		var url = "alloc.php?id="+id
		window.location = url
		})
    $('#workorder').bind('blur',function(e){
		var id = $('#workorder').val()
		var cdetails = $('#address').val()
		var url = "checklog.php?id="+id
		$.get(url,function(data,status){
			if (data == 0){
				alert("Link Not Found Please Contact Admin");

			}
			else {
			var datas = data.split(":")
			if (datas.length>0){
			$('#workorder').val(datas[0])
			$('#entryno').val(datas[1])
 			$('#client').val(datas[2])
			$('#circuitid').val(datas[3])
			$('#projectmanager').val(datas[4])
			$('#startdate').val(datas[5])
			$('#cdetails').val(datas[6])
			$('#workorder1').val(datas[0])
			$('#workorder2').val(datas[0])
			$('#servicetype').val(datas[7])
			$('#technology').val(datas[8])
			$('#jobdescription').val(datas[9])
			$('#execution').val(datas[10])
			$('#status').val(datas[11])
			$('#ipaddress').val(datas[12])
			$('#address').val(datas[13])
			$('#buildingname').val(datas[14])
			$('#buildingid').val(datas[15])
			$('#orderdeadline').val(datas[16])

			}
			
			}
			})
		})
});