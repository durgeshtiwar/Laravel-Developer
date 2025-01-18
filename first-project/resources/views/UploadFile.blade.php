<!DOCTYPE html>
<html lang="en">
<head>
<style>
      
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.upload-container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 300px;
}

h2 {
    margin-bottom: 20px;
    font-size: 20px;
    color: #333;
}

.custom-file-upload {
    display: inline-block;
    padding: 10px 20px;
    cursor: pointer;
    background-color: #007BFF;
    color: white;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 14px;
    border: none;
    text-align: center;
}

.custom-file-upload:hover {
    background-color: #0056b3;
}

input[type="file"] {
    display: none;
}

button {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

button:hover {
    background-color: #218838;
}

</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File Upload</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="upload-container">
        <h2>Upload Your File</h2>
        <form action="/uploadFile" method="post" enctype="multipart/form-data">
            @csrf
            <label for="file-upload" class="custom-file-upload">
                Choose File
            </label>
            <input type="file" id="file-upload" name="file">
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
