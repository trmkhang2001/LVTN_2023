<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web bán hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body, html {
            font-family: 'Times New Roman', sans-serif;
            height: 100%;
            overflow: auto; /* Đảm bảo có khả năng cuộn chuột */
            background-color: #f2f2f2;
            margin: 0;
            cursor: pointer; /* Lăn con trỏ chuột khi xem web */
        }
        
        header {
            background-color: red;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        nav {
            background-color: red;
            color: white;
            padding: 10px;
            text-align: center;
            flex-grow: 1;
            position: relative;
            z-index: 1;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav li {
            margin-bottom: 8px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            display: block;
        }

        nav a:hover {
            background-color: white;
            color: red;
        }

        .btn {
            background-color: red;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-left: 8px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn:hover {
            background-color: white;
            color: red;
        }

        .search-container {
            display: flex;
            align-items: center;
            flex-grow: 1;
        }

        .search-input {
            padding: 8px;
            border: 1px solid #555;
            border-radius: 4px;
            margin-left: 8px;
            flex-grow: 1;
        }

        .search-icon {
            padding: 8px;
            background-color: white;
            border: 1px solid #555;
            border-radius: 10px;
            display: flex;
            align-items: center;
            color: black;
        }

        nav a.btn-category {
            background-color: #800000;
        }

        nav a.btn-category:hover {
            background-color: white;
            color: #800000;
        }

        .electronics-menu {
            background-color: rgba(255, 255, 255, 0.9); /* Sử dụng màu nền với độ trong suốt */
            border-radius: 10px;
            padding: 10px;
            width: 220px;
            position: fixed;
            top: 120px;
            left: 80px;
            bottom: 40px;
            z-index: 1000; /* Đặt giá trị z-index đủ cao */
        }

        .electronics-menu a {
            color: #333;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 5px 15px;
            margin-bottom: 5px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .electronics-menu a:hover {
            background-color: red;
            color: white;
        }

        .electronics-menu i {
            margin-right: 8px; /* Khoảng cách giữa icon và chữ trong electronics-menu */
        }

        section {
            padding: 20px;
            background-color: yellow;
            margin: auto;
            z-index: 0;
        }

        footer {
            padding: 20px;
            background-color: green;
            color: white;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 0;
        }
        .menu-hidden{
            display: none;
        }
    </style>
</head>
<body>

<div class="" style="
    /* position: relative; */
    display: flex;
    /* justify-content: space-between; */
    align-items: center;
    position: fixed;
    padding: 10px;
">
<div>
            <a href="#" class="btn"><i class="fas fa-desktop"></i> HK Computer Store</a>
        </div>
        <div class="search-container">
            <nav>
                <ul>
                    <li><a  class="btn btn-category btn-menu"><i class="fas fa-list"></i> Danh mục</a></li>
                    
                </ul>
            </nav>
            <input type="text" class="search-input" placeholder="Bạn cần tìm gì ?">
            <div class="btn search-icon"><i class="fas fa-search"></i></div>
        </div>
        <div>
            <span class="btn"><i class="fas fa-phone"></i> Hotline : 1900 1900</span>
            <a href="#" class="btn"><i class="fas fa-shopping-cart"></i> Cart</a>
            <a href="#" class="btn"><i class="fas fa-user"></i> Login</a>
        </div>
</div>

    <!-- Danh mục thiết bị điện tử -->
    <div class="electronics-menu menu-hidden">
        <a href="#"><i class="fas fa-laptop"></i> Laptop</a>
        <a href="#"><i class="fas fa-gamepad"></i> Laptop Gaming</a>
        <a href="#"><i class="fas fa-percent"></i> PC KM Đặc Biệt</a>
        <a href="#"><i class="fas fa-desktop"></i> PC Gaming</a>
        <a href="#"><i class="fas fa-briefcase"></i> PC Làm việc</a>
        <a href="#"><i class="fas fa-hdd"></i> Bộ nhớ lưu trữ</a>
        <a href="#"><i class="fas fa-microchip"></i> Linh kiện PC</a>
        <a href="#"><i class="fab fa-apple"></i> Apple</a>
        <a href="#"><i class="fas fa-desktop"></i> Màn hình</a>
        <a href="#"><i class="fas fa-keyboard"></i> Bàn phím</a>
        <a href="#"><i class="fas fa-mouse"></i> Chuột + Lót chuột</a>
        <a href="#"><i class="fas fa-headphones"></i> Tai Nghe - Loa, Ghế - Bàn</a>
        <a href="#"><i class="fas fa-wifi"></i> Phần mềm & Mạng</a>
        <a href="#"><i class="fas fa-cogs"></i> Phụ kiện</a>
    </div>

    <section>
        
    </section>

    <footer>
        <div>
            <p>© 2023 HK Computer Store. All rights reserved.</p>
        </div>
        <div>
            <a href="#" class="btn"><i class="fas fa-info-circle"></i> Chính sách bảo hành</a>
        </div>
    </footer>

</body>
<script>
    $('.btn-menu').on("click",function(){
        $('.electronics-menu').removeClass('menu-hidden');
        console.log('clic r');
    })
</script>
</html>
