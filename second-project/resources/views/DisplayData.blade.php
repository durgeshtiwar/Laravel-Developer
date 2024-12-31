<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <title>Table Example</title>
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
    </style>
</head>
<body>
    <h1>Student Information</h1>
    <table>
        <thead>
            <tr>
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
                <td>{{$std->id}}</td>
                <td>{{$std->name}}</td>
                <td>{{$std->course}}</td>
                <td>{{$std->batch}}</td>
                <td>{{$std->city}}</td>
                <td>{{$std->year}}</td>
                <td>
                    <button><a  class='delete' href="{{'delete/'.$std->id}}"><i class="fa-solid fa-trash"></a></i></button>
                    <button><a  class='update' href="{{'edit/'.$std->id}}"><i class="fa-solid fa-pen-to-square"></a></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
