<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรายรับและรายจ่าย</title>
    <link rel="stylesheet" href="/styles/your_styles.css">
</head>
<body>
    <h1>เพิ่มรายรับและรายจ่าย</h1>
    <form method="post" action="add_expense_db.php">
        <label for="name_list">ประเภทรายการ:</label>
        <select name="name_list" id="name_list">
            <option value="รายรับ">รายรับ</option>
            <option value="รายจ่าย">รายจ่าย</option>
        </select>

        <label for="price">จำนวนเงิน:</label>
        <input type="text" name="price" id="price" required>


        <button type="submit" name="submit">บันทึกรายการ</button>
    </form>
</body>
</html>
