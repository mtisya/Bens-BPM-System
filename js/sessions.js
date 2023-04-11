// JavaScript Document
$(document).ready(function(e) {
 var date = new Date();
 var curryear = date.getFullYear();
 var prevdate = curryear-1
 var nextdate = curryear + 1;
 var str = "<option value="+prevdate+">"+prevdate+"</option><option value="+curryear+">"+curryear+"</option>";
 $('#cboyear').html(str);
 for (var i=1;i<=2;i++){
	 $('#cbosess').append("<option value="+i+">"+i+"</option>")
	 }
$('#btnset').bind('click',function(e){
e.preventDefault()
	var year = $('#cboyear').val()
	var sess = $('#cbosess').val()
	var url = "addSession.php?year="+year+"&sess="+cbosess
	$.get(url,function(data,status){
		alert(data)
		}
	)
	})
});