<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>To-do List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
</head>
<body>
    <form action="berhasil.php" method="GET">
        <div class="row">
            <div class="col"></div>
            <div class="col">    
                <h1>Aplikasi To-do</h1>
                <p class="lead">Daftarkan pekerjaanmu dan lacak tanggal deadline secara realtime</p>
                <span class="text-muted">Coming soon: Notifikasi</span>
                <hr>
                <div class="form-group">
                    <label>Judul pekerjaan</label>
                    <input name="subject" type="text" class="form-control" required="required">
                    <label>Deskripsi pekerjaan</label>
                    <input name="description" type ="text" class="form-control" required="required">
                </div>
                <hr>
                <div class="btn-group btn-block" role="group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Batal</button>
                    <button type="button" class="btn btn-secondary">Salin</button>
                </div>
            </div>
            <div class="col"></div>
      </form>
      <script src="js/jquery-3.5.1.min.js"></script>
</body>
</html>