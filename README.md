Môi trường : Xampp

Khởi tạo database trong phpmyadmin

Chạy chương trình :
+ Clone code: git clone https://github.com/PhamMinhHieu1801/Thuc_Hanh_Lap_Trinh_Web.git
+ Config môi trường: 
cp .env.example .env
Khai tên database vừa khởi tạo và mật khẩu của root
+ Set application key: php artisan key:generate
+ Chạy các file tạo Database: php artisan migrate
+ Tạo các dữ liệu kiểm thử (không chạy nếu đã có dữ liệu): php artisan db:seed
+ Cài đặt các backage cần thiết: npm install
+ Biên dịch các file scss và js: npm run dev
+ Khởi động serve: php artisan serve
