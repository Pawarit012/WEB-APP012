const modal = document.getElementById('order-modal');
const openBtn = document.querySelector('.btn a'); // ปุ่มเริ่มสั่งอาหาร
const closeBtn = document.querySelector('.modal-close');

openBtn.addEventListener('click', function(e) {
  e.preventDefault(); // กันการเปลี่ยนหน้า
  modal.style.display = 'flex';
});

closeBtn.addEventListener('click', function() {
  modal.style.display = 'none';
});

modal.addEventListener('click', function(e) {
  if (e.target === modal) { // คลิกนอกกล่องปิด modal
    modal.style.display = 'none';
  }
});
