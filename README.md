# try-docker-compose
week6-try-docker-compose

# 🐳 Docker Compose: LEMP Stack (Linux, Nginx, MariaDB, PHP)

ยินดีต้อนรับสู่โปรเจกต์ตัวอย่างสำหรับเรียนรู้ **Docker Compose** ขั้นพื้นฐาน
โปรเจกต์นี้จะจำลอง Web Server ที่ประกอบด้วย 3 ส่วนหลักที่ทำงานร่วมกัน:

1.  **Nginx**: ทำหน้าที่เป็น Web Server (ด่านหน้า)
2.  **PHP-FPM**: ทำหน้าที่ประมวลผลภาษา PHP (พ่อครัว)
3.  **MariaDB**: ทำหน้าที่เป็นฐานข้อมูล (ห้องเก็บของ)

---

## 📂 โครงสร้างไฟล์ (Project Structure)

ก่อนเริ่มรัน ตรวจสอบให้แน่ใจว่าคุณสร้างไฟล์และโฟลเดอร์ตามนี้ครับ:

```text
my-web-server/
├── docker-compose.yml      # พระเอกของเรา: ไฟล์กำหนดการทำงานทั้งหมด
├── html/
│   └── index.php           # ไฟล์หน้าเว็บ PHP ของเรา
└── nginx/
    └── default.conf        # ไฟล์ตั้งค่า Nginx ให้คุยกับ PHP รู้เรื่อง
