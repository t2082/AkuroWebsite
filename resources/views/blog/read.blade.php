<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header>
        @include('components.navbar')
    </header>
    <main>
        <div class="mt-10">
            <article class="mx-52 bg-white shadow-md rounded-lg overflow-hidden mb-10 p-8">
                <img class="w-full h-96 object-cover" src="{{ $blog->image }}" alt="Article Image">
                <h1 class="text-5xl font-bold my-20 text-center">{{ $blog->title }}</h1>
                <hr class="mx-40">
                <div class="mt-20 space-y-4 text-gray-800">
                    {!! $blog->content !!}
                </div>
                <p class="text-base text-gray-500 mt-10">Created at: {{ $blog->created_at }} - Update at:
                    {{ $blog->updated_at }}</p>
            </article>
        </div>
    </main>
    <footer>
        @include('components.footer')
    </footer>
</body>

</html>
