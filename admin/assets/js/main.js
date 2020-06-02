// for datatable
    //    $(document).ready(function(){$('#dt,.dt').DataTable({
    //     "lengthMenu": [5,10],
    //     "pageLength": 5,
    //     dom: 'Bfrtip',
    //     buttons: [
    //         'copy', 'csv', 'excel', 'pdf', 'print'
    //     ]
    //   });
    // });

    $(document).ready(function() {
    $('#dt').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
// end of it

//this is to change the status of the image
    $(document).ready(function(){
      $('.changeStatus').click(function(){
        var a=$(this).attr('data-id');
      });
    });

// this is to enter the id of image
$(document).ready(function(){
    $('#image_info').on('show.bs.modal', function (e) {
        var iid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'fetch_image_info.php', //Here you will fetch records
            data :  'imgid='+ iid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});

// this is to fetch the data of lab
$(document).ready(function(){
    $('#modalview').on('show.bs.modal', function (e) {
        var iid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'view_lab_info.php', //Here you will fetch records
            data :  'lab_id='+ iid, //Pass $id
            success : function(data){
            $('#md_value').html(data);//Show fetched data from database
            }
        });
     });
});

// this is to fetch the data of lab and edit it
$(document).ready(function(){
    $('#edit_modal').on('show.bs.modal', function (e) {
        var iid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'edit_lab_info.php', //Here you will fetch records
            data :  'lab_id='+ iid, //Pass $id
            success : function(data){
            $('.modal_edit_lab').html(data);//Show fetched data from database
            }
        });
     });
});

// this is to fetch the data of reasons and edit it
$(document).ready(function(){
    $('#reasonview').on('show.bs.modal', function (e) {
        var iid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'edit_reason_info.php', //Here you will fetch records
            data :  'r_id='+ iid, //Pass $id
            success : function(data){
            $('#md_reason').html(data);//Show fetched data from database
            }
        });
     });
});

// this is to fetch the data of notice and edit it
$(document).ready(function(){
    $('#modaledit').on('show.bs.modal', function (e) {
        var iid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'edit_notice_info.php', //Here you will fetch records
            data :  'notice_id='+ iid, //Pass $id
            success : function(data){
            $('#notice_edit').html(data);//Show fetched data from database
            }
        });
     });
});

// to display the box by clicking on the box
$(document).ready(function(){
	$('#weeks,.toglePhone,.mailTable,.logoTable,.togleNotice,.socials').hide();
});
function togleweek()
{
	$('#weeks').toggle();
}
function toglephT()
{
  $('.toglePhone').toggle();
}
function toglemail()
{
  $('.mailTable').toggle();
}
function togllogo()
{
  $('.logoTable').toggle();
}
function toglnotice()
{
  $('.togleNotice').toggle();
}
function toglesocial()
{
  $('.socials').toggle();
}
// end of this script
//to align the content


// to make the datatable buttons
// $('#dt').DataTable( {
//                dom: 'lBfrtip',
//
//        "buttons": [
//            {
//              extend: 'copy',
//              text: '<i class="fa fa-files-o" title="Copy"></i>'
//            },
//            {
//              extend: 'csv',
//              text: '<i class="fa fa-file-text-o" title="CSV"></i>'
//            },
//            {
//              extend: 'excel',
//              text: '<i class="fa fa-file-excel-o" title="Excel"></i>'
//            },
//            {
//              extend: 'pdf',
//              text: '<i class="fa fa-file-pdf-o" title="Pdf"></i>'
//            },
//            {
//              extend: 'print',
//              text: '<i class="fa fa-print" title="Print"></i>'
//            }],
//
//        } );
