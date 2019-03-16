<?php
$conn = mysqli_connect("localhost","root","","gudang");
$berhasiltambah = "		<script>
						alert('Data Berhasil Ditambahkan');
						document.location.href = 'index.php';
						</script>";
function cetak($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
};

function tambah($data){
    global $conn;
    $category = $data["category"];
    $query = "INSERT INTO categories VALUES ('', '$category')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        mysqli_error($conn);
    }else{
        return mysqli_affected_rows($conn);
    }
}

$rows = cetak("SELECT categories.id, categories.name AS category_name , GROUP_CONCAT(product.name SEPARATOR ', ') AS product FROM `categories`,`product` WHERE categories.id = product.category_id GROUP BY product.category_id");
$options = cetak("SELECT * FROM categories");


if (isset($_POST["tambah"])) {

	if ( tambah($_POST) > 0){
		echo $berhasiltambah;
	}else{
		mysql_error($conn);
	}
}


?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menampilkan Data Tabel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <h1 class="centered">Menampilkan Data Hasil Custom Query</h1>
        </div>
        <form action="" method="post">
        <input type="text" name="category" class='form-control'>
        <button type="submit" name="tambah" class="btn btn-primary">Add Category</button>
        <br>
        &nbsp;
        <br>

        <input type="text" name="product" class='form-control'>
        <select name="catproduk" id="" class="form-control">
        <?php $a = 1; foreach ($options as $option) : ?>
                <option values="<?= $option["name"];?>"><?= $option["name"];?></option>
            <?php $a++; endforeach; ?>
        </select>
        <button type="submit" name="tambahproduk" class="btn btn-primary">Add Product</button>

        </form>
        <table class="table table-bordered">
            <thead >
                <tr>
                <th scope="col">NO</th>
                <th scope="col">Category Product</th>
                <th scope="col">Product</th>
                </tr>
            </thead>
            <tbody>
            <?php $a = 1; foreach ($rows as $data) : ?>
                <tr>
                <th scope="row"><?= $a?></th>
                <td><?= $data["category_name"];?></td>
                <td><?= $data["product"];?></td>
                </tr>
            <?php $a++; endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>



