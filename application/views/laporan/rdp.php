<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_RDP.xls")
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
<h5 class="card-title">DATA RDP SIAP JUAL DAN SUDAH TERJUAL</h5>
<p>RDP yang ada disini adalah rdp siap dijual, menggunakan Database sederhana</p>
</center>
<!-- Table with stripped rows -->
<table border="1" id="customers">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Panel ke - </th>
            <th scope="col">IP</th>
            <th scope="col">core</th>
            <th scope="col">Ram</th>
            <th scope="col">username</th>
            <th scope="col">pass1</th>
            <th scope="col">Note</th>
            <th scope="col">date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($rdp as $r) {
        ?>
            <tr>
                <th scope="row" class="text-center"><?php echo $no++ ?></th>
                <td><?php echo $r->panel ?></td>
                <td><?php echo $r->ip ?></td>
                <td><?php echo $r->core ?></td>
                <td><?php echo $r->ram ?></td>
                <td><?php echo $r->username ?></td>
                <td><?php echo $r->pass ?></td>
                <td><?php echo $r->note ?></td>
                <td><?php echo date("d/F/y", strtotime($r->tgl_buat)); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>