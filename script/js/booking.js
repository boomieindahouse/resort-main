<script>
    document.getElementById("bookingForm").addEventListener("submit", function (e) {
        e.preventDefault();

        // ดึงข้อมูลจากฟอร์ม
        const fname = document.getElementById("fname").value;
        const lname = document.getElementById("lname").value;
        const start_date = document.getElementById("start_date").value;
        const end_date = document.getElementById("end_date").value;
        const room_type = document.getElementById("room_type").value;
        const comments = document.getElementById("comments").value;

        // ทำตรวจสอบข้อมูลที่ถูกต้องได้ตราบใด
        if (fname === "" || lname === "" || start_date === "" || end_date === "") {
            alert("กรุณากรอกข้อมูลที่จำเป็นให้ครบ");
            return;
        }

        // ทำรีเควสไปยังเซิร์ฟเวอร์สำหรับการจองห้องพัก
        // และจัดการการส่งข้อมูลที่กำหนดไว้ในเซิร์ฟเวอร์

        // หลังจากสำเร็จในการจองห้อง คุณสามารถแสดงข้อความขอบคุณหรือเปิดหน้ายืนยันการจองเพิ่มเติม
        alert("การจองห้องพักเสร็จสมบูรณ์!");
    });
</script>
