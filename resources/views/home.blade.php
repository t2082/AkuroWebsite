<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Trang Chủ</title>
    
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        .intro-text{
            font-family: "Baloo 2"; 
            font-optical-sizing: auto; 
            color: rgba(255, 255, 255, 0.6); 
            font-size: 18px;
        }

        
    </style>
    
</head>
<body>
    <header class="bg-gray-800">
        @include('components.navbar')
        <div class="container mx-auto flex pt-6 pb-24">
            <!-- Section left -->
            <div class="w-full md:w-1/2 flex flex-col items-center justify-center px-6">
                <h2 style='font-family: "Baloo 2"; font-optical-sizing: auto; font-weight: 600; color: white; font-size: 43px'>Chào mừng đến với trang của Akuro |</h2>
                <p  class="intro-text mt-10 border-l border-gray-500 pl-10">" Xin chào và cảm ơn bạn đã ghé thăm!<br>
                    Trang web được tạo ra với mục đích chia sẻ về cuộc sống và sở thích cá nhân của tôi.<br>
                    Trong blog này, bạn sẽ tìm thấy những bài viết đa dạng từ chủ đề cá nhân, kinh nghiệm sống, đến các bài phân tích sâu sắc về các vấn đề xã hội. <br>
                    Tôi tin rằng mỗi câu chuyện, mỗi trải nghiệm đều có giá trị riêng và mong muốn gửi chúng với bạn qua từng dòng chữ.<br>
                    Nếu bạn có bất kỳ câu hỏi, ý kiến hoặc muốn chia sẻ với tôi, đừng ngại nhắn cho tôi thông qua những liên kết bên trên<br>
                    Cảm ơn bạn đã ghé thăm trang. Tôi hy vọng bạn sẽ thấy nó thú vị! "</p>
                <p class="intro-text mt-10 pl-96 text-2xl">- Akuro -</p>
            </div>
        
            <!-- Section right -->
            <div class="w-full md:w-1/2 px-6">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <div class="relative">
                            <!-- Slideshow container -->
                            <div class="overflow-hidden rounded-lg relative w-full h-auto">
                                <!-- Slides -->
                                <div class="mySlides fade">
                                    <img src="{{asset('assets/images/slide_1.jpg')}}" style="width:100%" class="w-[300px] h-[500px] object-cover">
                                </div>
                                <div class="mySlides fade">
                                    <img src="{{asset('assets/images/slide_2.jpg')}}" style="width:100%" class="w-[300px] h-[500px] object-cover">
                                </div>
                                <div class="mySlides fade">
                                    <img src="{{asset('assets/images/slide_3.jpg')}}" style="width:100%" class="w-[300px] h-[500px] object-cover">
                                </div>
                                <a class="absolute top-1/2 left-0 bg-gray-200 text-black hover:text-white hover:bg-gray-800 p-3 cursor-pointer" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="absolute top-1/2 right-0 bg-gray-200 text-black hover:text-white hover:bg-gray-800 p-3 cursor-pointer" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </header>
    <main >
        
        <h2 class="title-text text-center mt-5 mb-3">Các bài viết mới nhất</h2>     
        <hr class="mx-96">
        <div class="container mx-auto px-4 mt-7 mb-10">
            <div class="grid md:grid-cols-3 gap-4">

                @foreach ($blog as $blog)
                    <div class=" rounded overflow-hidden shadow-lg">
                        <a href="{{ route('blog.read', $blog) }}">
                            <img class="w-full" src="{{asset('assets/images/slide_1.jpg')}}" alt="Article image" style="height: 300px; object-fit: cover;">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{ $blog->title }}</div>
                                <div class="h-16">
                                    <p class="text-gray-700 text-base line-clamp-2 break-words overflow-hidden overflow-ellipsis">
                                        {{ $blog->description }}
                                    </p>
                                </div>
                                <p class="text-gray-600 text-xs text-right">Updated at: {{$blog->updated_at}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        
        <hr class="mx-48">

        {{-- PRODUCT --}}

        <h2 class="title-text text-center mt-5 mb-3">Các sản phẩm của Tân</h2>     
        <hr class="mx-96">

        <div class="container mx-auto px-4 mt-7 pb-20">
            <div class="grid md:grid-cols-3 gap-4">
                <!-- Bài viết 1 -->
                <div class=" rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="/path/to/article-image1.jpg" alt="Article image" style="height: 300px; object-fit: cover;">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Tiêu đề bài viết 1</div>
                        <p class="text-gray-700 text-base">
                            Tóm tắt nội dung bài viết 1...
                        </p>
                        <p class="text-gray-600 text-xs">Ngày giờ viết</p>
                    </div>
                </div>
        
                <!-- Bài viết 2 -->
                <div class=" rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="/path/to/article-image2.jpg" alt="Article image" style="height: 300px; object-fit: cover;">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Tiêu đề bài viết 2</div>
                        <p class="text-gray-700 text-base">
                            Tóm tắt nội dung bài viết 2...
                        </p>
                        <p class="text-gray-600 text-xs">Ngày giờ viết</p>
                    </div>
                </div>
        
                <!-- Bài viết 3 -->
                <div class=" rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="/path/to/article-image3.jpg" alt="Article image" style="height: 300px; object-fit: cover;">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Tiêu đề bài viết 3</div>
                        <p class="text-gray-700 text-base">
                            Tóm tắt nội dung bài viết 3...
                        </p>
                        <p class="text-gray-600 text-xs">Ngày giờ viết</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.footer')

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        function currentSlide(n) {
            showSlides(slideIndex -= n);
        }
        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex+=1;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex-1].style.display = "block";  

            setTimeout(showSlides, 5000)
        }

    </script>
</body>
</html>