<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f9f9f9;
}
table {
    width: 50%;
    border-collapse: collapse;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
th, td {
    padding: 12px 15px;
    border: 1px solid #ddd;
    text-align: left;
}
th {
    background-color: #4CAF50;
    color: white;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>

<table>
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
        <th>Batch</th>
        <th>City</th>
        <th>Year</th>
    </tr>
</thead>
<tbody>
    @foreach($getStudents as $students)
    <tr>
        <td>{{$students->id}}</td>
        <td>{{$students->name}}</td>
        <td>{{$students->course}}</td>
        <td>{{$students->batch}}</td>
        <td>{{$students->city}}</td>
        <td>{{$students->year}}</td>
    </tr>
    @endforeach
</tbody>
</table>
