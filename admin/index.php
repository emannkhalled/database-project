<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop | Add Product</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Online Marketing Website</h2>
                <img src="logo.png" alt="logo" width="450px">
                <input type="text" name='name' placeholder="Product Name">
                <br>
                <input type="text" name='price' placeholder="Price">
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">Choose Product Image</label>
                <button name='upload'>Upload Product ✅</button>
                <br><br>
                <a href="products.php">View All Products</a>
            </form>
        </div>
        <p>Developer By RAKWAN</p>
    </center>
</body>
</html>
