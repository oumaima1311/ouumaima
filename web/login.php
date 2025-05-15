
<?php
session_start();

// الاتصال بقاعدة البيانات
$conn = new mysqli("localhost", "root", "", "baase_cliente");

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استقبال البيانات من النموذج
$Mail_Clt = $_POST['Mail_Clt'];
$Mot_Clt = $_POST['Mot_Clt'];

// البحث عن العميل في قاعدة البيانات
$sql = "SELECT Id_Clt, No_Clt, Pno_Clt, Mot_Clt FROM Client WHERE Mail_Clt = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $Mail_Clt);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // التحقق من كلمة المرور
    if (password_verify($Mot_Clt, $row['Mot_Clt'])) {
        // تخزين معلومات الجلسة
        $_SESSION['client_id'] = $row['Id_Clt'];
        $_SESSION['client_name'] = $row['No_Clt'] . " " . $row['Pno_Clt'];
        
        echo "مرحباً " . $_SESSION['client_name'] . "! تم تسجيل دخولك بنجاح.";
        echo '<br><a href="commande_produit.html">الذهاب إلى صفحة الطلبات</a>';
    } else {
        echo "كلمة المرور غير صحيحة!";
    }
} else {
    echo "البريد الإلكتروني غير مسجل!";
}

$stmt->close();
$conn->close();
?>