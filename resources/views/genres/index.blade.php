<!DOCTYPE html>
<html>
<head>
    <title>Genres</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
    <div class="max-w-3xl mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4 text-blue-600">List of Genres</h1>
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr class="bg-blue-100">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Genre Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($genres as $genre)
                    <tr class="hover:bg-blue-50">
                        <td class="border px-4 py-2">{{ $genre['id'] }}</td>
                        <td class="border px-4 py-2">{{ $genre['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/authors" class="text-blue-500 underline mt-4 inline-block">Go to Authors</a>
    </div>
</body>
</html>
