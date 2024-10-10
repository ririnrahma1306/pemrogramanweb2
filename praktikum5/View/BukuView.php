<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   
  <div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar Buku</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <?php foreach($dataModel->getKolomTabel() as $kolom):?>
                                <th scope="col"><?php echo $kolom;?></th>
                            <?php endforeach?>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0?>
                    <?php foreach($dataModel->getData() as $buku):?>
                        <tr>
                            <td><?php echo ++$no?></td>
                            <td><?php echo $buku->getJudul();?></td>
                            <td><?php echo $buku->getPengarang();?></td>
                            <td><?php echo $buku->getPenerbit();?></td>
                            <td><?php echo $buku->getTahun();?></td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
    
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>