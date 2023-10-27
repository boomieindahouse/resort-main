<!-- addemployee_modal.php -->

<div class="modal fade" id="empModal" tabindex="-1" role="dialog" aria-labelledby="empModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="empModalLabel">Add Employee</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- ตัวอย่างฟอร์มสำหรับเพิ่มห้องใหม่ -->
                <form action="/add_emp_db" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fname">First name</label>
                        <input type="text" class="form-control" id="fname" name="fname">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="cfpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="cfpassword" name="cfpassword">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" pattern="^[0-9]{10}$" class="form-control" id="phone" name="phone"
                            maxlength="10">
                    </div>
                    <div class="form-group">
                        <label for="permission">Permission</label><br>
                        <select class="form-select" aria-label="Default select example" name="permiss_id">
                            <option value="1">Admin</option>
                            <option value="2">Employee</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="personal_id">Personal ID</label>
                        <input type="text" class="form-control" id="personal_id" name="personal_id" maxlength="13"
                            pattern="^[0-9]{13}$">
                    </div>
                    <div class="form-group">
                        <label for="img">Employee Image</label>
                        <input type="file" class="form-control" id="imgInput" name="img">
                        <img width="100%" id="previewImg" alt="">
                    </div>
                    <!-- เพิ่มฟอร์มหรือข้อมูลที่คุณต้องการใน modal นี้ -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="addemp" class="btn btn-success">Add Employee</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script>
    let imgInput = document.getElementById('imgInput');
    let previewImg = document.getElementById('previewImg');

    imgInput.onchange = evt => {
        const [file] = imgInput.files;
        if (file) {
            previewImg.src = URL.createObjectURL(file);
        }
    }
</script>