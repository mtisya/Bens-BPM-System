// JavaScript Document
$(document).ready(function(e) {
	$('.error').hide()
	$('#notify').hide()
    $('#updatelog').bind('click',function(e){
		e.preventDefault()
		var workorder = $('#workorder').val()
		var entryno = $('#entryno').val()
		var client = $('#client').val()
		var projectmanager = $('#projectmanager').val()
		var address = $('#address').val()
		var jobdescription = $('#jobdescription').val()
		var cdetails = $('#cdetails').val()
		var technology = $('#technology').val()
		var circuitid = $('#circuitid').val()
		var execution = $('#execution').val()
		var servicetype = $('#servicetype').val()
		var ipaddress = $('#ipaddress').val()
		var buildingid= $('#buildingid').val()
		var status = $('#status').val()
		var buildingname = $('#buildingname').val()
		var startdate = $('#startdate').val()
		var orderdeadline = $('#orderdeadline').val()
		if (workorder.length<=0||entryno.length<=0||client.length<=0||projectmanager.length<=0||
			address.length<=0||jobdescription.length<=0||cdetails.length<=0||technology.length<=0||
			circuitid.length<=0||execution.length<=0||servicetype.length<=0||ipaddress.length<=0||buildingid.length<=0||
			status.length<=0||buildingname.length<=0||startdate.length<=0||orderdeadline.length<=0){
			$('#notify').html("All fields marked (*) are required, Please fill in N/A if not applicable");
			$('#notify').fadeIn('slow')
			}
		else {
			$('#notify').fadeOut('slow')
			var url = "updatelog.php?workorder="+workorder+"&entryno="+entryno+"&client="+client+"&projectmanager="+projectmanager+"&address="+address+"&jobdescription="+jobdescription+"&cdetails="+cdetails+"&technology="+technology+"&circuitid="+circuitid+"&execution="+execution+"&servicetype="+servicetype+"&ipaddress="+ipaddress+"&buildingid="+buildingid+"&status="+status+"&buildingname="+buildingname+"&startdate="+startdate+"&orderdeadline="+orderdeadline
			$.get(url,function(data,status){
				alert(data)
				confirm("Link updated successfully, Would you like to update another link?")
				window.location = "deploymentpopup.php"
				})
			}

		})
})