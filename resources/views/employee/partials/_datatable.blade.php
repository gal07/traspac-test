<script type="text/javascript">
    $(document).ready(function() {

        demo.initFormExtendedDatetimepickers();

        var url = $('#datatabemployee').val();

        let table = $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            },
            "processing": false,
            "serverSide": false,
            "ajax":
            {
                "headers": {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                "url": url+'/datatable_employee?filter=all',
                "type": "POST",
            },
            stateSave:true,
            info:true,
            columns: [
                { data: 'nip' },
                { data: 'nama' },
                { data: 'jabatan' },
                { data: 'tugas' },
                { data: 'unit_kerja' },
                { data: 'action' },
            ]
        });

        // Edit record
        table.on('click', '.update-btn', function() {
            // open Modal
            $("#EditModal").modal('toggle');
            let id = $(this).data('id');

            $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: "POST",
                    url: url+'/employee/getform', // This is what I have updated
                    data:{ 'id':id }
                }).done(function(resp) {

                    if (resp.success === true) {

                       let data = resp.data;
                       let date = data.born_date;
                       let myDate = new Date(date);
                       let resdate = (myDate.getMonth() + 1) + '/' + myDate.getDate() + '/' + myDate.getFullYear();
                       
                       $("#idtarget").val(data.id);
                       $("#edit_name").val(data.name);
                       $("#edit_nip").val(data.nip);
                       $("#edit_phone_number").val(data.phone_number);
                       $("#edit_tax_number").val(data.tax_number);
                       $("#edit_born_date").val(resdate);
                       $("#edit_born_place").val(data.born_place);
                       $("#edit_address").val(data.address);
                       $("#edit_religion option[value="+data.religion+"]").prop('selected', true);
                       $("#edit_group option[value="+data.group+"]").prop('selected', true);
                       $("#edit_formation option[value="+data.formation+"]").prop('selected', true);
                       $("#edit_position option[value="+data.position+"]").prop('selected', true);
                       $("#edit_work_unit option[value="+data.work_unit+"]").prop('selected', true);
                       $("#edit_placed_job option[value="+data.placed_job+"]").prop('selected', true);
                       if (data.gender == "Pria") {
                        $("#gender1").attr("checked", true).click(); 
                       }
                       if (data.gender == "Wanita") {
                        $("#gender2").attr("checked", true).click(); 
                       }
                       $('#edit_name').keyup();
                       $('#edit_nip').keyup();
                       $('#edit_phone_number').keyup();
                       $('#edit_tax_number').keyup();
                       $('#edit_born_date').keyup();
                       $('#edit_born_place').keyup();
                       $('#edit_address').keyup();


                    }else{

                        demo.showNotification('danger','bottom','right',resp.message)

                    }
                    
                }).fail(function (e) { 

                    demo.showNotification('danger','bottom','right',e)

                }).always(function (e) {

                })

            
        });

        // Delete a record
        table.on('click', '.remove', function(e) {

            let id = $(this).data('id');

            swal({

                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Yes, delete it!',
                buttonsStyling: false

            }).then(function() {


                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: "DELETE",
                    url: url+'/employee', // This is what I have updated
                    data:{ 'id':id }
                }).done(function(resp) {

                    if (resp.success === true) {

                        swal({
                            title: 'Hapus!',
                            text: resp.message,
                            type: 'success',
                            confirmButtonClass: "btn btn-success",
                            buttonsStyling: false
                        })

                        table.ajax.reload( null, false );

                    }else{

                        swal({
                            title: 'Batal',
                            text: resp.message,
                            type: 'error',
                            confirmButtonClass: "btn btn-info",
                            buttonsStyling: false
                        })

                    }
                    
                }).fail(function (e) { 

                    swal({
                        title: 'Batal',
                        text: resp.message,
                        type: 'error',
                        confirmButtonClass: "btn btn-info",
                        buttonsStyling: false
                    })

                }).always(function (e) {

                })

                

                
            });
        });

        // Change filter
        $("#formfilteremployee").on("submit",function (e) { 

            e.preventDefault();
            var filter = $("#filter_employee_workunit").val();
            $('#datatables').DataTable().ajax.url(url+'/datatable_employee?filter='+filter).load(e=>{
                demo.showNotification('success','bottom','right',e.message)
            },true);

        })


        $('.card .material-datatables label').addClass('form-group');


    });
</script>