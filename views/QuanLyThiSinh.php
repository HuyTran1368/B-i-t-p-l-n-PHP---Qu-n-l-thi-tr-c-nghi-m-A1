<?php
include_once APP_PATH . '/classes/ThiSinh.php';

$thisinh = new ThiSinh();

$result = $thisinh->getAll();

?>

<div class="profile_table responsive-table">
    <div class="functions">
        <div class="add">
            <a href="?addprofile">Thêm mới</a>
        </div>
    </div>
    <table class="table table-striped table-bordered table-hover text-center">
        <thead>
            <tr>
                <th>Mã thí sinh</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Số CMT</th>
                <th>Ngày đăng ký thi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($obj = $result->fetch_object()) { ?>
                <tr>
                    <td>
                        <a href="?viewprofile=<?php echo $obj->id ?>">
                            <span><?php echo $obj->mathisinh ?></span>
                        </a>
                    </td>
                    <td><?php echo $obj->hoten ?></td>
                    <td><?php echo $obj->ngaysinh ?></td>
                    <td><?php echo $obj->gioitinh == 1 ? 'Nam' : ($obj->gioitinh == 2 ? 'Nữ' : 'Khác') ?></td>
                    <td><?php echo $obj->sodienthoai ?></td>
                    <td><?php echo $obj->diachi ?></td>
                    <td><?php echo $obj->socmt ?></td>
                    <td><?php echo $obj->ngaydangkythi ?></td>
                    <td>
                        <a href="?editprofile=<?php echo $obj->id ?>">
                            <span>Chỉnh sửa</span>
                        </a>
                        <span>|</span>
                        <a href="?deleteprofile=<?php echo $obj->id ?>">
                            Xóa
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>