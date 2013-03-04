<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/application.css"/>
    </head>

    <body>
        <div>
            <h2>Listing Staff</h2>
            <?php echo $this->session->flashdata('message'); ?>
            <table border="1">
                <tr>
                    <td>Staff ID</td>
                    <td>Staff NIK</td>
                    <td>Staff Kode Absen</td>
                    <td>Staff Name</td>
                    <td>Staff Address</td>
                    <td>Staff Email</td>
                    <td>Staff Phone Home</td>
                    <td>Staff Phone HP</td>
                    <td>Staff Status Karyawan</td>
                    <td>Staff Status Cabang</td>
                    <td>Staff Status Departement</td>
                    <td>Staff Status Jabatan</td>
                    <td>Action</td>
                </tr>
                <?php
                foreach ($staff_list as $row) {
                ?>
                    <tr>
                        <td><?php echo $row->staff_id; ?></td>
                        <td><?php echo $row->staff_nik; ?></td>
                        <td><?php echo $row->staff_kode_absen; ?></td>
                        <td><?php echo $row->staff_name; ?></td>
                        <td><?php echo $row->staff_address; ?></td>
                        <td><?php echo $row->staff_email; ?></td>
                        <td><?php echo $row->staff_phone_home; ?></td>
                        <td><?php echo $row->staff_phone_hp; ?></td>
                        <td><?php echo $row->staff_status_karyawan; ?></td>
                        <td><?php echo $row->staff_cabang; ?></td>
                        <td><?php echo $row->staff_departement; ?></td>
                        <td><?php echo $row->staff_jabatan; ?></td>
                        <td>
                        <?php echo anchor('staffs/'.$row->staff_id.'/families/index', 'Family'); ?> |
                        <?php echo anchor('staffs/'.$row->staff_id.'/educations/index', 'Education'); ?> |
                        <?php echo anchor('staffs/'.$row->staff_id.'/work_histories/index', 'Work'); ?> |
                        <?php echo anchor('staffs/'.$row->staff_id.'/medical_histories/index', 'Medical'); ?> |
                        <?php echo anchor('staffs/edit/' . $row->staff_id, 'Edit'); ?> |
                        <?php echo anchor('staffs/delete/' . $row->staff_id, 'Delete', array('onclick' => "return confirm('Are you sure want to delete?')")); ?>

                    </td>
                </tr>
                <?php } ?>
                </table>
            </div>
            <br>
        <?php echo $pagination; ?>
                    <br>
                    <br>
        <?php echo $btn_add . " - " . $btn_home; ?>
    </body>
</html> 

