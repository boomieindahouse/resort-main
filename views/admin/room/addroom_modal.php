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
                <form action="/add_room_db" method="post" enctype="multipart/form-data">
                    <label for="room_id">หมายเลขห้อง:</label>
                    <input type="text" id="room_id" name="room_id" required><br><br>

                    <label for="room_status">สถานะห้อง:</label>
                    <select id="room_status" name="room_status" required>
                        <option value="">เลือกสถานะห้องพัก</option>
                        <option value="">พร้อมใช้งาน</option>
                        <option value="">ไม่พร้อมใช้งาน</option>
                    </select><br><br>


                    <label for="room_detail_id">รายละเอียดห้อง:</label>
                    <select id="room_detail_id" name="room_detail_id" required>
                        <option value="">เลือกรายละเอียดห้อง</option>
                        <?php
                        // เรียกข้อมูลรายละเอียดห้องจากฐานข้อมูลและแสดงเป็นรายการตัวเลือก
                        require_once "connect.php";
                        $query = $conn->query("SELECT room_detail_id, zone, room_type_id FROM room_details");
                        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                            $roomDetail = $row['zone'] . ' - ' . $row['room_type_id'];
                            echo '<option value="' . $row['room_detail_id'] . '">' . $roomDetail . '</option>';
                        }
                        ?>
                    </select><br><br>

                    <!-- สร้างส่วนสำหรับแสดงรายละเอียดข้อมูล room_detail และ room_type ที่นี่ -->
                    <div id="roomDetailInfo"></div>

                    <!-- You can add additional fields related to rooms as needed -->

                    <input type="submit" name="addroom" class="btn btn-success"  value="เพิ่มห้องพัก">
                    <script>
                    // เพิ่มเหตุการณ์ onchange ในเฟิลด์ room_detail_id
                    document.getElementById("room_detail_id").onchange = function () {
                        // เมื่อผู้ใช้เลือกรายละเอียดห้อง เราจะใช้ JavaScript เรียกข้อมูลจากฐานข้อมูลและแสดงรายละเอียดที่เลือก
                        var selectedRoomDetailId = this.value;
                        if (selectedRoomDetailId) {
                            // เรียกข้อมูลจากฐานข้อมูลโดยใช้ AJAX (เช่น fetch หรือ XMLHttpRequest)
                            // แสดงรายละเอียดข้อมูลที่ได้จากฐานข้อมูลใน div "roomDetailInfo"
                            // ต้องแน่ใจว่าคุณมี PHP script ที่จะดึงข้อมูลรายละเอียดจากฐานข้อมูล
                        } else {
                            // หากผู้ใช้ไม่ได้เลือกรายละเอียดห้อง ลบข้อมูลรายละเอียดที่แสดงออก
                            document.getElementById("roomDetailInfo").innerHTML = "";
                        }
                    };
                </script>
                </form>

                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="addroom" class="btn btn-success">Add Room</button>
            </div>
        </div>
    </div>
</div>