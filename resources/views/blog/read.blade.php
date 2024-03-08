<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Article Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10">
        <article class="bg-white shadow-md rounded-lg overflow-hidden">
            <img class="w-full h-64 object-cover" src="your-image-url.jpg" alt="Article Image">
            <div class="p-8">
                <h1 class="text-3xl font-bold mb-4">{{ $blog->title }}</h1>
                <p class="text-sm text-gray-600">By Author Name - Date</p>
                <div class="mt-6 space-y-4 text-gray-800">
                    {!! $blog->content !!}
                </div>
            </div>
        </article>
    </div>
</body>
</html>
