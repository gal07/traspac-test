<script type="text/javascript">
    $(document).ready(function() {

        var url = $('#formcreateemployeeurl').val();

        // Submit create employee
        $('#formcreateemployee').on('submit',function(e) { 

            e.preventDefault();
            var data = $(this).serialize();

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: url, // This is what I have updated
                data: data
            }).done(function(resp) {

                if (resp.success === true) {
                    document.getElementById("formcreateemployee").reset();
                    $('#myModal').modal('toggle');
                    var table = $('#datatables').DataTable();
                    table.ajax.reload( null, false );
                    demo.showNotification('success','bottom','right',resp.message)
                }else{

                    $('#myModal').modal('toggle');
                    demo.showNotification('danger','bottom','right',resp.message)

                }
                
            }).fail(function (e) { 

                $('#myModal').modal('toggle');
                demo.showNotification('danger','bottom','right',resp.message)

            }).always(function (e) { 
            })
        
        })
    });
</script>