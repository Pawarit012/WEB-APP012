<?php
// login.php - ระบบเข้าสู่ระบบ
session_start();
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    // ตรวจสอบข้อมูล
    if (empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'กรุณากรอกอีเมลและรหัสผ่าน']);
        exit;
    }
    
    // ค้นหาผู้ใช้
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password'])) {
        // เข้าสู่ระบบสำเร็จ
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];
        
        echo json_encode([
            'success' => true, 
            'message' => 'เข้าสู่ระบบสำเร็จ',
            'redirect' => 'dashboard.php'
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'อีเมลหรือรหัสผ่านไม่ถูกต้อง']);
    }
}
?>