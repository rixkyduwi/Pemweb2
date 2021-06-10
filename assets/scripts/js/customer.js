var myflag = $('#txtindex').val();
function viewItems() {
	var path = 'http://kelas4a.local/assets/scripts/ajax/';
	$('#TableCustomer').html('');
	$.ajax({
		type: "POST",
		url: path + "getcust.php",
		data: "",
		success: function (response) {
			$('#TableCustomer').html('');
			$('#TableCustomer').html(response);//ajax

			$('.linkk').bind('click', function () {

				var idcust = $(this).attr('hreff');
				$('#txtindex').val(idcust);
				$('#txtcustid').val(idcust);
				$('#CustomerModal').modal('show', { backdrop: 'static' });
			})
		}
	});
}//

$(document).ready(function () {
	viewItems();
	var path1 = 'http://kelas4a.local/assets/scripts/ajax/';
	$('#btnAddNew').click(function () {
		$('#h1-1').html('New Customer');
		$('#txtindex').val('new');
		$('#txtcustid').val('');
		$('#txtnama').val('');
		$('#txtaddr').val('');
		$('#txtphone').val('');
		$('#txtcity').val('');
		$('#CustomerModal').modal('show', { backdrop: 'static' });
	})

	//saving data
	$('#btnSave').click(function () {
		$('#message').removeClass();
		$('#message').html('');

		var flag = $('#txtindex').val();
		var custid = $('#txtcustid').val();
		var name = $('#txtnama').val();
		var addr = $('#txtaddr').val();
		var phone = $('#txtphone').val();
		var city = $('#txtcity').val();

		if ((name.trim() == '') || (custid == '')) {
			$('#message').removeClass();
			$('#message').addClass("alert alert-danger");
			$('#message').html("Please Fill Blank Field");
		}
		else {
			$.ajax({
				type: "POST",
				url: path1 + "savecust.php",
				data: 'flag=' + flag.trim() + '&custid=' + custid.trim() + '&nm=' + name.trim() + '&addr=' + addr.trim() + '&ph=' + phone.trim() + '&city=' + city.trim(),
				success: function (response) {
					if (response == 'OK') {
						swal({
							title: "Customer Has Been Created",
							text: "Customer Already Save",
							timer: 3000,
							type: "success",
							showConfirmButton: false
						});
						viewItems();
						$('#CustomerModal').modal('hide');
					}
					else {
						swal({
							title: "Save Data Invalid",
							text: "Data cannot be saved.Please try again",
							timer: 3000,
							type: "error",
							showConfirmButton: false
						});
					}
				}
			});
		}
	});

	$('#CustomerModal').on('', function () {
		var custid = $('#txtcustid').val();
		myflag = $('#txtindex').val();
		if (myflag != 'new') {
			$('#h1-1').html('Edit Customer');
		}
		$.ajax({
			type: "POST",
			url: path1 + "getcustdetail.php",
			data: 'id' + custid,
			success: function (response) {
				var json = $.parseJSON(response);
				var json = JSON.stringify(response);
				var jsonData = $.parseJSON(response);
				$(jsonData).each(function (i, val) {
					$.each(val, function (k, v) {
						switch (k) {
							case 'id': $('#txtindex').val(v);
								$('#h1-1').val('Edit Customer');
								$('#txtcustid').val(v);
								break;
							case 'nm': $('#txtnama').val(v);
								break;
							case 'addr': $('#txtaddr').val(v); break;
							case 'phone': $('#txtphone').val(v); break;
							case 'city': $('#txtcity').val(v); break;
						}
					})
				})
			}
		})

	})
});

