
`GET` باستخدام 

<?php
// process_get.php

if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']); // تأمين البيانات المدخلة
    echo "مرحبًا، " . $name;
} else {
    echo "عبير";
}
?>




`POST` باستخدام 

<?php
// process_post.php

if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']); // تأمين البيانات المدخلة
    echo "مرحبًا، " . $name;
} else {
    echo "عبير";
}
?>
