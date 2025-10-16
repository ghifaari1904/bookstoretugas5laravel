<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900">
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4 text-blue-600">List of Books</h1>
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-blue-100">
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Author</th>
                <th class="border px-4 py-2">Year</th>
                <th class="border px-4 py-2">Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr class="hover:bg-blue-50">
                    <td class="border px-4 py-2">{{ $book->title }}</td>
                    <td class="border px-4 py-2">{{ $book->author->name }}</td>
                    <td class="border px-4 py-2">{{ $book->published_year }}</td>
                    <td class="border px-4 py-2">{{ $book->genre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/authors" class="text-blue-500 underline mt-4 inline-block">View Authors</a>
</div>
</body>
</html>
