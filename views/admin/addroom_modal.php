<!-- addroom_modal.php -->

<div class="modal fade" id="roomModal" tabindex="-1" role="dialog" aria-labelledby="roomModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roomModalLabel">Add New Room</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- ตัวอย่างฟอร์มสำหรับเพิ่มห้องใหม่ -->
                <form action="add_room_controller.php" method="post">
                    <div class="form-group">
                        <label for="roomName">Room Name</label>
                        <input type="file" class="form-control" id="roomname" name="roomname">
                    </div>
                    <div class="form-group">
                        <label for="roomName">Bed Type</label>
                        <input type="text" class="form-control" id="bedtype" name="bedtype">
                    </div>
                    <div class="form-group">
                        <label for="roomName">Zone</label>
                        <input type="text" class="form-control" id="zone" name="zone">
                    </div>
                    <div class="form-group">
                        <label for="roomName">Status</label>
                        <input type="text" class="form-control" id="roomstatus" name="roomstatus">
                    </div>
                    <div class="form-group">
                        <label for="roomName">Book Date</label>
                        <input type="text" class="form-control" id="bookdate" name="bookdate">
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