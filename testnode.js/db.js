const mysql = require('mysql2');

// สร้าง connection
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'WEBAPP012'
});

// เชื่อมต่อ
connection.connect((err) => {
  if (err) {
    console.error('เกิดข้อผิดพลาดในการเชื่อมต่อ:', err);
    return;
  }
  console.log('เชื่อมต่อ MySQL สำเร็จ!');
});

// ตัวอย่างการ Query ข้อมูล
connection.query('SELECT * FROM users', (err, results) => {
  if (err) {
    console.error('เกิดข้อผิดพลาดในการ Query:', err);
    return;
  }
  console.log('ผลลัพธ์:', results);
});

// ปิดการเชื่อมต่อ
connection.end();

// =======