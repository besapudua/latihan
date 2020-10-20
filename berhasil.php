<?php
    $subject = $_GET['subject'];
    $description = $_GET['description'];
?>
<html>
    <head>
        <title>Lihat To-do list</title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
    </head>
    <body>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul pekerjaan</th>
                        <th scope="col">Deskripsi</th>
                    </tr>
                </thead>
                </tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td><?php echo $subject; ?></td>
                    <td><?php echo $description; ?></td>
                    </tr>
                </tbody>
                </table>
                <a href="index.php" class="btn btn-light btn-block" type="button" >Kembali</a>
            </div>
            <div class="col"></div>
        </div>
    </body>
</html>