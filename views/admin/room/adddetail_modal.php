<!-- addroom_modal.php -->

<div class="modal fade" id="roomdetailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Add New Room</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- ตัวอย่างฟอร์มสำหรับเพิ่มห้องใหม่ -->
                <form action="add_detail_db.php" method="post">
                    <div class="form-group">
                        <label for="fname">Details ID</label>
                        <input type="text" class="form-control" id="fname" name="fname">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="roomName">Zone</label>
                        <select class="form-select" aria-label="Default select example" name="permiss_id">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <!-- เพิ่มฟอร์มหรือข้อมูลที่คุณต้องการใน modal นี้ -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="addroom" class="btn btn-success">Add Room</button>
            </div>
        </div>
    </div>
</div>