<div id="viewImg" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Zdjęcie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt="img" class="img-fluid modal-img"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
            </div>
        </div>
    </div>
</div>


<script>

    // View Img
    $(document).on('click', '.table-img', function() {
        $('.modal-img').attr('src', $(this).data('img'));
        $('#viewImg').modal('show');
    });

</script>
