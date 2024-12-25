1. الاتصال بقاعدة البيانات
MySQL
الطريقة الإجرائية:

<?php
// إعدادات الاتصال
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database';

// إنشاء اتصال مع قاعدة البيانات
$conn = mysqli_connect($host, $username, $password, $dbname);

// التحقق من الاتصال
if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}

echo "تم الاتصال بقاعدة البيانات باستخدام MySQLi!";


الطريقة الكائنية:

// إعدادات الاتصال
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database';

// إنشاء اتصال مع قاعدة البيانات
$conn = new mysqli($host, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

echo "تم الاتصال بقاعدة البيانات باستخدام MySQLi!";
2. تنفيذ استعلامات SQL


الطريقة الإجرائية:

// استعلام لاختيار جميع السجلات من جدول "users"
$result = mysqli_query($conn, "SELECT * FROM users");

// التحقق من وجود السجلات
if (mysqli_num_rows($result) > 0) {
    // جلب السجلات
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['username'] . "<br>";
    }
} else {
    echo "لا توجد نتائج.";
}


الطريقة الكائنية:
// استعلام لاختيار جميع السجلات من جدول "users"
$result = $conn->query("SELECT * FROM users");

// التحقق من وجود السجلات
if ($result->num_rows > 0) {
    // جلب السجلات
    while ($row = $result->fetch_assoc()) {
        echo $row['username'] . "<br>";
    }
} else {
    echo "لا توجد نتائج.";
}
3. استخدام الاستعلامات المحضرة (Prepared Statements)
الطريقة الإجرائية:

// إعداد الاستعلام المحضر
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ?");

// ربط المعامل
$email = 'example@example.com';
mysqli_stmt_bind_param($stmt, "s", $email);

// تنفيذ الاستعلام
mysqli_stmt_execute($stmt);

// جلب النتائج
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['username'] . "<br>";
}

الطريقة الكائنية:
// إعداد الاستعلام المحضر
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");

// ربط المعامل
$email = 'example@example.com';
$stmt->bind_param("s", $email);

// تنفيذ الاستعلام
$stmt->execute();

// جلب النتائج
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo $row['username'] . "<br>";
}
4.ادارة الاخطاء
الطريقة الإجرائية:
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}

// تنفيذ استعلام خاطئ
$result = mysqli_query($conn, "INVALID SQL QUERY");

if (!$result) {
    echo "خطأ في الاستعلام: " . mysqli_error($conn);
}


الطريقة الكائنية:


$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// تنفيذ استعلام خاطئ
$result = $conn->query("INVALID SQL QUERY");

if (!$result) {
    echo "خطأ في الاستعلام: " . $conn->error;
}
5. إغلاق الاتصال

الطريقة الإجرائية:

mysqli_close($conn);

الطريقة الكائنية:

$conn->close();
?>