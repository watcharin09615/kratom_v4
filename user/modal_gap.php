<!-- Modal -->
<div class="modal fade" id="img<?php echo $row_am['id_petition'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ใบรับรอง</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-dialog-scrollable">
                <img src="<?= $row_am['img'] ?>" class="img-fluid" alt="...">
            </div>
                
            <div class="modal-footer">
                <button type="button" class="btn btn-success m-2" onclick=" window.open('<?= $row_am['img'] ?>', '_blank'); return false;">เปิดหน้าต่างใหม่</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
</div>