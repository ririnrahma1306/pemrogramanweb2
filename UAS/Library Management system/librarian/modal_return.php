	<div id="delete_book<?php echo $borrow_details_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-success">Apakah Benar Buku Telah Di Kembalikan?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-success" href="return_save.php<?php echo '?id='.$id; ?>&<?php echo 'book_id='.$book_id; ?>">Ya</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Tutup</button>
		</div>
    </div>
	
