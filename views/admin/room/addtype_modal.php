<!-- addroom_modal.php -->

<div class="modal fade" id="roomtypeModal" tabindex="-1" role="dialog" aria-labelledby="typeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="typeModalLabel">Add New Room</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- ตัวอย่างฟอร์มสำหรับเพิ่มห้องใหม่ -->
                <form action="add_type_db.php" method="post">
                <div class="form-group">
                        <label for="typename">Type Name</label>
                        <input type="text" class="form-control" id="typename" name="typename">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    
                    <!-- เพิ่มฟอร์มหรือข้อมูลที่คุณต้องการใน modal นี้ -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="addtype" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>