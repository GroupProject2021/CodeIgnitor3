<html>
    <head>
        <title>Image upload</title>
    </head>
    <body>
        <?php echo @$error; ?>
        <?php echo form_open_multipart('ImageUpload_Controller/upload'); ?>
        <?php echo "<input type='file' name='profile_pic' size='20'>"; ?>
        <?php echo "<input type='submit' name='submit' value='Upload'>"; ?>
        <?php echo "</form>"?>
    </body>
</html>