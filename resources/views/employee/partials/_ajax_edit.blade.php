<script type="text/javascript">
    $(document).ready(function() {

        //  URL
        var url = $('#formeditemployeeurl').val();
        
        // Submit create employee
        $('#formeditemployee').on('submit',function(e) { 

            e.preventDefault();
            var data = $(this).serialize();

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "PATCH",
                url: url, // This is what I have updated
                data: data
            }).done(function(resp) {

                if (resp.success === true) {

                    document.getElementById("formeditemployee").reset();
                    $('#EditModal').modal('hide');
                    var table = $('#datatables').DataTable();
                    table.ajax.reload( null, false );
                    demo.showNotification('success','bottom','right',resp.message)

                }else{

                    $('#EditModal').modal('hide');
                    demo.showNotification('danger','bottom','right',resp.message)

                }
                
            }).fail(function (e) { 

                $('#EditModal').modal('hide');
                demo.showNotification('danger','bottom','right',resp.message)

            }).always(function (e) { 
            })
        
        })
    });
</script>