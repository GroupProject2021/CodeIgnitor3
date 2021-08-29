<html>
    <head>
        <title>Update</title>
        <style>
            table, th{border: 1px solid black;}
        </style>
    </head>
    <body>
        <?php foreach($data as $row) {?>
        <form method="post">
            <table>
                <tr>
                    <td>Enter your name</td>
                    <td><input type="text" name="name" value="<?php echo $row->name; ?>"></td>
                </tr>
                <tr>
                    <td>Enter your email</td>
                    <td><input type="text" name="email" value="<?php echo $row->email; ?>"></td>
                </tr>
                <tr>
                    <td>Enter your mobile</td>
                    <td><input type="text" name="mobile" value="<?php echo $row->mobile; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;"><input type="submit" name="update" value="Update Data"></td>
                </tr>
            </table>
        </form>
        <?php }; ?>
    </body>
</html>