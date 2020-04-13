<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
</head>
<body>
<?php
    require 'app/libs/header.php';
    echo $this->message;
?>

    <form action="<?php echo constant('URL');?>services/orderService" method="POST">
        <label for="product">Product: </label>
        <select name="product" id="product">
        <option value="primer">one</option>
        <option value="segundo">two</option>
        <option value="tercero">three</option>
        <option value="cuarto">four</option>
        </select>
        <label for="date">Date: </label>
        <input type="date" name="date" id="date">
        <label for="cost">Cost: </label>
        <input type="number" name="cost" id="cost">
        <input type="submit" value="submit">
    </form>
<?php
 require 'app/views/footer.php';
?>
</script>
</body>
</html>