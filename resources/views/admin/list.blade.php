<html>
    <head>
        <title>Employee List</title>
    </head>
    
    <body>
        <button><a href="employ">Add Employ</a></button>
        <button><a href="employ-twin">Find 2 Id Data</a></button>
        <button><a href="list-two-table">Join Table</a></button><button>
        <table border="1" width="100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Gender</th>
                <th>Education</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            @foreach($employlist as $list)
            <tr>
                <td>{{$list['id']}}</td>
                <td>{{$list['name']}}</td>
                <td>{{$list['email']}}</td>
                
                <td><a href="employ-list/{{$list['id']}}">Delete</a> || <a href="employ-show/{{$list['id']}}">Update</a></td>
            </tr>
            @endforeach
            
        </table>
            
            <ul><p>Data From Table Using 2 ID</p></ul>
        <p>{{$employlist}}</p>
    </body>
</html>