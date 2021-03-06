<div class="col-md-12 main">
    <h3>
        Detail Pengguna
        <span class=" pull-right">
            <a href="<?php echo site_url('admin/user') ?>" class="btn btn-info btn-sm"><span class="mdi mdi-arrow-left-bold"></span>&nbsp; Kembali</a> 
            <a href="<?php echo site_url('admin/user/edit/' . $user['user_id']) ?>" class="btn btn-success btn-sm"><span class="mdi mdi-pencil"></span>&nbsp; Edit</a> 
        </span>
    </h3><br>
</div>
<div class="col-md-12">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Nama Singkat</td>
                <td>:</td>
                <td><?php echo $user['user_name'] ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?php echo $user['user_full_name'] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $user['user_email'] ?></td>
            </tr>
            <tr>
                <td>Tanggal Daftar</td>
                <td>:</td>
                <td><?php echo pretty_date($user['input_date'], 'l, d m Y', FALSE) ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo $user['role_name']; ?></td>
            </tr>
        </tbody>
    </table>
</div>
