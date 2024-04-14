<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
    @include('partials.header')
    
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Book List</h1>
        <table class="w-full border-collapse border border-gray-300 rounded-lg overflow-hidden">
            <thead>
                <tr>
                    <th class="px-4 py-3 bg-gray-100 text-gray-700">ID</th>
                    <th class="px-4 py-3 bg-gray-100 text-gray-700">Title</th>
                    <th class="px-4 py-3 bg-gray-100 text-gray-700">Author</th>
                    <th class="px-4 py-3 bg-gray-100 text-gray-700">ISBN</th>
                    <th class="px-4 py-3 bg-gray-100 text-gray-700">Description</th>
                    <th class="px-4 py-3 bg-gray-100 text-gray-700">Date Published</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td class="px-4 py-3 border">{{ $book->id }}</td>
                    <td class="px-4 py-3 border">{{ $book->title }}</td>
                    <td class="px-4 py-3 border">{{ $book->author }}</td>
                    <td class="px-4 py-3 border">{{ $book->isbn }}</td>
                    <td class="px-4 py-3 border">{{ $book->description }}</td>
                    <td class="px-4 py-3 border">{{ $book->date_published }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
