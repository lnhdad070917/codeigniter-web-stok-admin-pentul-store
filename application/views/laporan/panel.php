<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_PANEL.xls")
?>
<style>
    #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #04aa6d;
            color: white;
        }
</style>
<center>
<h5 class="card-title">DATA PANEL SIAP JUAL DAN SUDAH TERJUAL</h5>
<p>PANEL yang ada disini adalah PANEL siap dijual, menggunakan Database sederhana</p>
</center>
<!-- Table with stripped rows -->
<table border="1" id="customers">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Provider </th>
            <th scope="col">email</th>
            <th scope="col">Password</th>
            <th scope="col">Note</th>
            <th scope="col">date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($panel as $p) {
        ?>
            <tr>
                <th scope="row" class="text-center"><?php echo $no++ ?></th>
                <td><?php echo $p->provider ?></td>
                <td><?php echo $p->email ?></td>
                <td><?php echo $p->pass ?></td>
                <td><?php echo $p->note ?></td>
                <td><?php echo date("d/F/y", strtotime($p->tgl_buat)); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>