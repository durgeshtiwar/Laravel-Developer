<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <title>Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-color: #4CAF50;
            font-weight: bold;
            
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
        .update{
            color : green;
        }
        .delete{
            color : red;
        }
        .w-5.h-5{
            width: 15px;
        }
        .delete-button {
        background-color: #ff4d4d; /* Red background */
        color: white; /* White text */
        border: none; /* No border */
        border-radius: 5px; /* Rounded corners */
        padding: 10px 20px; /* Padding for size */
        font-size: 16px; /* Font size */
        cursor: pointer; /* Pointer cursor on hover */
        transition: background-color 0.3s ease; /* Smooth transition */
        margin: 10px;
        }

        .delete-button:hover {
        background-color: #ff1a1a; /* Darker red on hover */
        }

        .delete-button:active {
        background-color: #e60000; /* Even darker red when clicked */
        }

        .delete-button:focus {
        outline: none; /* Remove focus outline */
        box-shadow: 0 0 5px #ff4d4d; /* Add a subtle glow on focus */
        }

    </style>
</head>
<body>
    <h1>Student Information</h1>
    <div class="search-container">
    
    </div>
    <table>
        <thead>
            <form action="multi-delete" method="post">
                @csrf
            <tr>
                <th>Select</th>
                <th>Id</th>
                <th>Name</th>
                <th>Course</th>
                <th>Batch</th>
                <th>City</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $std)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{$std->id}}"></td>
                <td>{{$std->id}}</td>
                <td>{{$std->name}}</td>
                <td>{{$std->course}}</td>
                <td>{{$std->batch}}</td>
                <td>{{$std->city}}</td>
                <td>{{$std->year}}</td>
                <td>
                    <a  class='delete' href="{{'delete/'.$std->id}}"><i class="fa-solid fa-trash"></i></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a  class='update' href="{{'edit/'.$std->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button class="delete-button" type="submit">Delete Selected</button>
    </form>
    {{$students->links()}}
</body>
</html>
