<?php
$n = 1;
foreach ($brg as $row) { ?>
    <tr>
        <td><?php echo $n++?></td>
        <td><?php echo $row->id_barang?></td>
        <td><?php echo $row->nama_barang?></td>
        <td><?php echo $row->qty?></td>
        <td><?php echo $row->harga_satuan?></td>
        <td>-</td>
    </tr>
    <?php } ?>