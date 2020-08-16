<div class="modal fade" id="dialog1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <div class="modal-header">
                <h5 class="modal-title">Xóa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                Bạn có chắc muốn xóa?
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>   
                <button  type="submit" class="btn delete-confirm"><a href="{{ route('can-ho.xoa', ['id' => $can_ho-> canho_id]) }}"  class="btn btn-danger delete-confirm"><i class="fa fa-trash"></i></a></button>
                
            </div>
            
        </div>
    </div>
</div>