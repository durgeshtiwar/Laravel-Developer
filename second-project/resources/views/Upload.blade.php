<!DOCTYPE html>
<html lang="en">
<head>
    <title>Image Upload Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Reset */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.upload-container {
    background: #fff;
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 300px;
}

h1 {
    margin-bottom: 20px;
    font-size: 20px;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

input[type="file"] {
    display: none;
}

.custom-file-upload {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    text-align: center;
}

.custom-file-upload:hover {
    background-color: #0056b3;
}

button {
    background-color: #28a745;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

button:hover {
    background-color: #218838;
}

    </style>
</head>
<body>
    <div class="upload-container">
        <h1>Upload Your Image</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="image-upload" class="custom-file-upload">
                <i class="fas fa-cloud-upload-alt"></i> Choose Image
            </label>
            <input type="file" id="image-upload" name="image" accept="image/*" required>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
