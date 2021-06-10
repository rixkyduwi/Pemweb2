var myflag = $('#txtindex').val();
var test = document.getElementById('Table Customer'); //js
function viewItems() {
    var path = 'http://kelas4a.local/assets/scripts/ajax/';
    $('#TableCustomer').html('');
    $.ajax({
        type: "POST",
        url: path + "getcust.php",
        data: "",
        success: function (response) {
            $('#TableCustomer').html('');
            $('#TableCustomer').html(response); //ajax

            $('.linkk').bind('click', function () {

                var idcust = $(this).attr('hreff');
                $('#txtindex').val(idcust);
                $('#txtcustid').val(idcust);
                $('#CustomerModal').modal('show', {
                    backdrop: 'static'
                });

            })
        }
    });
} //

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
        $('#CustomerModal').modal('show', { backdrop: 'static'});
    });
});
$().on('', function(){
    var
})