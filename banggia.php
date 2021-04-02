<?php $data["title"] = "Bang gia"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="banggia__section">
    <div class="container">
        <div class="row banggia__boxTab home__block3__row14">
            <?php
            $data = array(
                array(
                    'txt' => 'Việc làm tuyển gấp',
                    'active' => true,
                ),
                array(
                    'txt' => 'Việc làm hấp dẫn',
                    'active' => false,
                ),
                array(
                    'txt' => 'Việc làm lương cao',
                    'active' => false,
                ),
            );
            foreach ($data as $k => $v): ?>
            <div class="col">
                <a href="" class="d-block banggia__btn1 btn btn-secondary <?= ($v['active']) ? 'active' : '' ?>"><?= $v['txt'] ?></a>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="home__block3__margin53 text-center banggia__boxHeader">
            <h2 class="home__title1 text-center"><span class="text-uppercase">Bảng giá ghim tin</span></h2>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover banggia__table">
                    <thead>
                    <tr>
                        <th></th>
                        <th scope="col">
                            <div class="text-center banggia__table__box1">
                                <div>Thời gian</div>
                                <div>(tuần)</div>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="text-center banggia__table__box1">
                                <div>Đơn giá/1tin</div>
                                <div>(VNĐ)</div>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="text-center banggia__table__box1">
                                <div>Chiết khấu</div>
                                <div>(%)</div>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="text-center banggia__table__box1">
                                <div>Thành tiền</div>
                                <div>(VNĐ)</div>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="text-center banggia__table__box1">
                                <div>Tặng điểm</div>
                                <div>lọc ứng viên</div>
                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $data = array(
                        '1 Tuần',
                        '1 Tuần',
                        '1 Tuần',
                        '1 Tuần',
                        '6 Tuần',
                        '12 Tuần',
                        '24 Tuần',
                        '48 Tuần',
                    );
                    foreach ($data as $k => $v): ?>
                    <tr>
                        <th scope="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            </div>
                        </th>
                        <td><?= $v ?></td>
                        <td>990.000</td>
                        <td>0%</td>
                        <td>990.000</td>
                        <td>100 Điểm</td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="text-center mb-20">
                    <button type="button" class="btn btn-secondary banggia__buy">Sử dụng dịch vụ</button>
                </div>
                <div class="">
                    <h3 class="banggia__title d-inline-block">QUY ĐỊNH ĐĂNG TIN VÀ CƠ CHẾ HIỂN THỊ</h3>
                    <ul class="list-unstyled banggia__list">
                        <li>Kích tối thiểu 01 tuần cho mỗi lần kích hoạt</li>
                        <li>Được đổi tin xuất bản không giới hạn số lần</li>
                        <li>Được bảo lưu không giới hạn số lần khi thời gian dịch vụ còn lại tối thiểu từ 01 tuần trở lên và bảo lưu trong 48 tuần. Sau 48 tuần, không kích hoạt dịch vụ sẽ tự hủy.</li>
                        <li>Làm mới tự động không giới hạn</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <h3 class="banggia__title text-center">Ưu đãi</h3>
                <ul class="list-unstyled banggia__list">
                    <li>Giảm giá từ 10% - 25%</li>
                    <li>Tin tuyển dụng nằm nổi bật trong box
                        "Tuyển gấp" đầu trang chủ</li>
                    <li>Tin được hiển thị mức lương, khu vực
                        tuyển dụng</li>
                    <li>Tin được hiển thị ưu tiên tại kết quả
                        tìm kiếm</li>
                    <li>Làm mới tin không giới hạn
                    </li>
                    <li>Tặng đăng tin cơ bản trong các trang
                        ngành nghề</li>
                    <li>Tặng kèm 45 điểm xem hồ sơ/ngày
                    </li>
                    <li>Hiển thị logo nổi bật thu hút ứng viên
                        đồng thời quảng bá thương hiệu
                        công ty
                    </li>
                    <li>Giá đã bao gồm VAT 10%</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>