<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_VPS.xls")
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
<h5 class="card-title">DATA VPS SIAP JUAL DAN SUDAH TERJUAL</h5>
<p>VPS yang ada disini adalah VPS siap dijual, menggunakan Database sederhana</p>
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
        foreach ($vps as $v) {
        ?>
            <tr>
                <th scope="row" class="text-center"><?php echo $no++ ?></th>
                <td><?php echo $v->panel ?></td>
                <td><?php echo $v->ip ?></td>
                <td><?php echo $v->core ?></td>
                <td><?php echo $v->ram ?></td>
                <td><?php echo $v->username ?></td>
                <td><?php echo $v->pass ?></td>
                <td><?php echo $v->note ?></td>
                <td><?php echo date("d/F/y", strtotime($v->tgl_buat)); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>