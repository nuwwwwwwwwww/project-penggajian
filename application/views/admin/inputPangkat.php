<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pangkat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2><?php echo $title; ?></h2>
        <form action="<?php echo base_url('admin/simpanPangkat'); ?>" method="post">
            <div class="form-group">
                <label for="id_pngt">Id Pangkat</label>
                <input type="text" class="form-control" id="id_pngt" name="id_pngt" required>
            </div>
            <div class="form-group">
                <label for="nama_pangkat">Nama Pangkat</label>
                <input type="text" class="form-control" id="nama_pangkat" name="nama_pangkat" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</body>
</html></div>