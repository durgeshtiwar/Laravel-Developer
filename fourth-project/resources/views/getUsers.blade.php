<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @vite('resources/css/app.css')
    <title>Users Table</title>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-4xl p-4 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center mb-4">Users List</h2>

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="p-3 border border-gray-300">ID</th>
                    <th class="p-3 border border-gray-300">Profile Image</th>
                    <th class="p-3 border border-gray-300">Name</th>
                    <th class="p-3 border border-gray-300">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="bg-gray-50 hover:bg-gray-100">
                    <td class="p-3 border border-gray-300 text-center">{{$user->id}}</td>
                    <td class="p-3 border border-gray-300 text-center">
                        <img src="{{url('images/'.$user->profile_image)}}" alt="Profile" class="w-12 h-12 rounded-full mx-auto">
                    </td>
                    <td class="p-3 border border-gray-300 text-center">{{$user->name}}</td>
                    <td class="p-3 border border-gray-300 text-center">{{$user->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
