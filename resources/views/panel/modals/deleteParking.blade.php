<div id="deleteParkingModal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Usuń Parking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="fid" class="parking-id d-none"></label>
                <span class="parking-count d-none"></span>
                <input type="hidden" class="form-control d-none" id="fid" disabled>
                <p class="comment">Czy napewno że chcesz usunąć parking <span class="patient-name"></span>?</p>
                <span class="hidden id d-none"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary delete">
                    <span id="footer_action_button" class="glyphicon">Tak, usuń</span>
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Nie, anuluj</button>
            </div>
        </div>
    </div>
</div>


<script>

    // DELETE VISIT
    $(document).on('click', '.delete-parking', function() {
        $('.parking-id').text($(this).data('id'));
        $('#deleteParkingModal').modal('show');
    });

    $('.modal-footer').on('click', '.delete', function(){

        var count = $('.patient-table tr').length;
        --count;

        $.ajax({
            type: 'POST',
            url: 'deleteParking',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.parking-id').text()
            },
            success: function(data){

                $('#deleteParkingModal').modal('hide');
                window.location.reload();
            }
        });
    });



</script>
