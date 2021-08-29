<html>
    <head>
        <title>About</title>
        <style>
            table, th{border: 1px solid black;}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th> ID </th>
                <th> NAME </th>
                <th> EMAIL </th>
                <th> MOBILE </th>
            </tr>
        <?php foreach($data as $row) {
            echo '<tr>';
            echo '<td>'.$row->id.'</td>';
            echo '<td>'.$row->name.'</td>';
            echo '<td>'.$row->email.'</td>';
            echo '<td>'.$row->mobile.'</td>';
            echo '<td><a href="deleteData?id='.$row->id.'">Delete</a></td>';
            echo '<td><a href="updateData?id='.$row->id.'">Update</a></td>';
            echo '</tr>';
        }        
        ?>
    </body>
</html>