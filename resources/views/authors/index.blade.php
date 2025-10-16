<!DOCTYPE html>
<html>
<head>
    <title>Authors</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900">
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4 text-green-600">List of Authors</h1>
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-green-100">
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Country</th>
                <th class="border px-4 py-2">Books</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr class="hover:bg-green-50">
                    <td class="border px-4 py-2">{{ $author->name }}</td>
                    <td class="border px-4 py-2">{{ $author->country }}</td>
                    <td class="border px-4 py-2">
                        @foreach($author->books as $book)
                            <div>- {{ $book->title }}</div>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/books" class="text-green-500 underline mt-4 inline-block">View Books</a>
</div>
</body>
</html>
