<!DOCTYPE html>
<html>
<head>
    <title>Authors</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
    <div class="max-w-3xl mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4 text-green-600">List of Authors</h1>
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr class="bg-green-100">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Author Name</th>
                    <th class="border px-4 py-2">Country</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                    <tr class="hover:bg-green-50">
                        <td class="border px-4 py-2">{{ $author['id'] }}</td>
                        <td class="border px-4 py-2">{{ $author['name'] }}</td>
                        <td class="border px-4 py-2">{{ $author['country'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/genres" class="text-green-500 underline mt-4 inline-block">Go to Genres</a>
    </div>
</body>
</html>
