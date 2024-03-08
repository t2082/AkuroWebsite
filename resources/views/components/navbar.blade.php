<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Micro+5&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap" rel="stylesheet">
@vite('resources/css/app.css')

<nav class="bg-black text-white p-3">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
            
            <a href="#" class="text-white mr-4 hover:text-gray-200">Giới thiệu</a>
            <a href="#" class="text-white mr-4 hover:text-gray-200">Liên hệ</a>
            <a href="#" class="text-white hover:text-gray-200">Ăn xin online</a>
        </div>

        <div class="flex items-center">
            <a href="https://facebook.com" class="text-white mr-4 hover:text-gray-200">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://instagram.com" class="text-white mr-4 hover:text-gray-200">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://github.com" class="text-white mr-4 hover:text-gray-200">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://linkedin.com" class="text-white hover:text-gray-200">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
</nav>

<nav class="bg-gray-800 text-white w-full z-50" id="navbar">
    <div class="container mx-auto flex justify-between items-center">
        <a href='/' class="flex items-center">
            <img src="{{ asset('assets/images/akuro_user.png') }}" alt="Logo" class="h-12 w-12 mr-2 rounded-sm"> 
            <div style='font-family: "Micro 5", sans-serif; font-size: 400%'>AKURO</div>
        </a>

        <div class="flex items-center">
            <a href="/" class="mr-4 font-baloo text-xl {{ Request::is('/') ? 'text-red-500 hover:text-red-600' : 'text-white  hover:text-gray-200'}}">| Trang chủ </a>
            <a href="/blog/list/" class="mr-4 font-baloo text-xl {{ Request::is('blog/list') ? 'text-red-500 hover:text-red-600' : 'text-white  hover:text-gray-200'}}">| Tất cả blog </a>
            <a href="#" class="mr-4 font-baloo text-xl {{ Request::is('/#') ? 'text-red-500 hover:text-red-600' : 'text-white  hover:text-gray-200'}}">| Nhạc của Tân </a>
            @if(Auth::check()) <!-- Kiểm tra xem người dùng đã đăng nhập chưa -->
                <p class="">|</p>
                @if(Auth::user()->role == 0)
                    <p class="mx-4 font-baloo text-xl">Xin chào <u>{{ Auth::user()->name }}</u></p>
                @else
                    <p class="mx-4 font-micro text-3xl text-yellow-200"><u>Administrator</u></p>
                @endif
            @endif
        </div>
    </div>
</nav>

<script>
    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar');
        if (window.scrollY > 100) {
            navbar.classList.add('shadow-md', 'fixed', 'top-0');
        } else {
            navbar.classList.remove('shadow-md', 'fixed');
        }
    });

</script>