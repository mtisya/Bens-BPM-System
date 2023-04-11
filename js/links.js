// JavaScript Document
function verifyPayments(id){
	var workorder  = prompt("Enter Workorder Value")
	var url = "verifylink.php?id="+id+"&workorder="+workorder 
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET",url,true)
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState==4&&xmlhttp.status==200){
			var data = xmlhttp.responseText;
			if (data == 1){
				alert("Link Updated Successfully")
				var url = "receipt_gen.php?id="+id
				var xmlhtp = new XMLHttpRequest();
				xmlhtp.open("GET",url,true);
				xmlhtp.onreadystatechange = function(){
					if (xmlhtp.readyState==4&&xmlhtp.status==200){
						alert("Receipt Sent to Customer Email Pending Delivery")
						}
					}
				xmlhtp.send(null)
			location.reload();
				}
			else if (data == -1){
				alert ("Workorder value do not match confirm and try again");
				}
			}
		}
	xmlhttp.send(null)
	}
			  