# Kyanon Digital - K-Fresh Trainee Test 2026

Dự án này chứa bài làm cho vị trí **Magento/Drupal Trainee** thuộc chương trình **K-Fresh 2026**

## Cấu trúc thư mục

* **`Report.md`**: File báo cáo lý thuyết.
* **`Solution.php`**: File mã nguồn thực hành. 

## Hướng dẫn chạy file PHP trên VSCode

Để chạy thử mã nguồn `Solution.php` và xem kết quả đầu ra trực tiếp trên Visual Studio Code, thực hiện theo các bước dưới đây:

### 1. Yêu cầu môi trường
* Đảm bảo máy tính đã được cài đặt **PHP**. Có thể kiểm tra nhanh xem PHP đã sẵn sàng chưa bằng cách mở terminal và gõ lệnh: `php -v`.
* Đảm bảo đường dẫn cài đặt PHP đã được thêm vào biến môi trường (Environment Variables) của hệ điều hành.

### 2. Các bước thực thi trên Terminal của VSCode
1. **Mở thư mục dự án**: Khởi động VSCode và mở thư mục chứa các file bài làm (thư mục có chứa file `Solution.php`).
2. **Mở Terminal tích hợp**: Mở cửa sổ Terminal trong VSCode.
3. **Chạy file PHP**: Trong cửa sổ Terminal vừa hiện lên, hãy gõ dòng lệnh sau và nhấn **Enter**:

   ```bash
   php Solution.php
   ```
4. **Kiểm tra kết quả**: Terminal sẽ in ra kết quả thực thi của chương trình, bao gồm:
   * Danh sách sản phẩm đầy đủ ban đầu.
   * Danh sách sản phẩm sau khi được lọc theo danh mục cụ thể (Ví dụ: *Backpacks*).
   * Danh sách sản phẩm sau khi đã được áp dụng mức giảm giá (Ví dụ: *50%*).