<?php 
    require_once '../database/dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pelanggan";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_pelanggan.php" role="button">Create Pelanggan</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Ukuran</th>
                    <th>Warna</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Tipe Pakaian</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['ukuran']?></td>
                        <td><?=$row['warna']?></td>
                        <td><?=$row['stok']?></td>
                        <td><?=$row['harga']?></td>
                        <td><?=$row['tipe_pakaian_id']?></td>
                        <td>
<a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="form_produk.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_produk.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
