<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <title>Form</title>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <form class="bg-white p-6 rounded-lg shadow-lg w-96 space-y-4" action="{{route('user.create')}}" method="post" enctype="multipart/form-data">
    @csrf
        <h2 class="text-2xl font-bold text-center">Register</h2>
        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name" required>
            @error("name")
            <div class="text-red-500 font-bold">{{$message}}</div>
            @enderror
        </div>
        
        <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
            @error("email")
            <div class="text-red-500 font-bold">{{$message}}</div>
            @enderror
        </div>
        
        <div>
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
            @error("password")
            <div class="text-red-500 font-bold">{{$message}}</div>
            @enderror
        </div>
        
        <div>
            <label class="block text-gray-700">Profile Image</label>
            <input type="file" name="profile_image" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Register</button>
    </form>
</body>
</html>
