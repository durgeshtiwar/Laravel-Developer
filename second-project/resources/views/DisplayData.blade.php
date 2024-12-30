<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width-width, initial-scale=1.0">
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
            text-align: left;
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
    </style>
</head>
<body>
    <h1>Student Information</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Batch</th>
                <th>City</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $std)
            <tr>
                <td>{{$std->name}}</td>
                <td>{{$std->course}}</td>
                <td>{{$std->batch}}</td>
                <td>{{$std->city}}</td>
                <td>{{$std->year}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
