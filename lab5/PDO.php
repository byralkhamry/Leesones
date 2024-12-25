1. الاتصال بقاعدة البيانات
<?php
// إعدادات الاتصال
$host = 'localhost';
$dbname = 'your_database';
$username = 'your_username';
$password = 'your_password';

try {
    // إنشاء اتصال مع قاعدة البيانات
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // تعيين وضع الأخطاء إلى استثناءات
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "تم الاتصال بقاعدة البيانات باستخدام PDO!";
} catch (PDOException $e) {
    echo "خطأ في الاتصال: " . $e->getMessage();
}
2. تنفيذ استعلامات SQL


// استعلام لاختيار جميع السجلات من جدول "users"
$stmt = $pdo->query("SELECT * FROM users");

// جلب النتائج كصفوف مترابطة
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['username'] . "<br>";
}
3. استخدام الاستعلامات المحضرة (Prepared Statements)


// إعداد الاستعلام المحضر
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");

// ربط المعامل
$email = 'example@example.com';
$stmt->bindParam(':email', $email);

// تنفيذ الاستعلام
$stmt->execute();

// جلب النتائج
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    echo $row['username'] . "<br>";
}
4. إدارة الأخطاء

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // تنفيذ استعلام خاطئ لتوليد خطأ
    $pdo->exec("INVALID SQL QUERY");
} catch (PDOException $e) {
    echo "حدث خطأ: " . $e->getMessage();
}
5. إغلاق الاتصال

في// PDO لا يوجد دالة مباشرة لإغلاق الاتصال، لكن الاتصال يغلق تلقائيًا عند انتهاء تنفيذ السكربت//.

$pdo = null; // يمكن استخدام هذا لإغلاق الاتصال يدويًا إذا أردت
?>


  