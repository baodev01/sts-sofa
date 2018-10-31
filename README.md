# sts-sofa


branch
	master
		dev/master_dev
			dev/branch_201810
			....
			
Ngon ngu lam trinh:
	php
Framework: 
	laravel v5.6
		docs: https://laravel.com/docs/5.6

DataBase: mysql

PHP: 7.2.0
	
	
Server Requirements
The Laravel framework has a few system requirements:

PHP >= 7.1.3
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
Ctype PHP Extension
JSON PHP Extension


php : current using
PHP: 7.2.0

	
Bước 3: Chạy ứng dụng
		sau khi đã cài đặt thành công các bạn có thể run ứng dụng lên bằng 2 cách.
		Cách 1: truy cập thằng vào folder public của dự án, Nếu sử dụng XAMPP thì các bạn có thể truy cập theo đường dẫn
		http://localhost/blog/public
		
		Cách 2: Các bạn dùng terminal truy cập truy cập vào trong folder của dự án và gõ lệnh



========================================
composer create-project laravel/laravel sofahoangvu "5.6.*" --prefer-dist

php artisan serve

php artisan key:generate

config/app.php
	timezone
	locale