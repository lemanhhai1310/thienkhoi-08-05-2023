<?php $data["title"] = "Tuyển dụng"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div uk-parallax="bgy: -200;media: @m" class="bg_banner uk-background-norepeat uk-background-top-center uk-background-cover" data-src="images/banner_td.png" uk-img>

</div>
<div class="uk-section home__section">
    <div class="uk-container">
        <div class="uk-flex-center uk-grid" uk-grid>
            <div class="uk-width-auto">
                <div class="home__card1 home__card1--tuyendung tuyendung__card uk-card uk-card-default uk-card-body uk-height-min-medium">
                    <div class="tuyendung__card__title">TUYỂN DỤNG BẤT ĐỘNG SẢN MỚI NHẤT 2023</div>
                    <div class="item__20-12 home__card1__title2">30 CHUYÊN VIÊN KINH DOANH TOÀN QUỐC</div>
                    <div class="item__40-20 uk-text-center">
                        <div class="tuyendung__card__boxTxt">ỨNG TUYỂN TẠI HÀ NỘI - TP. HỒ CHÍ MINH</div>
                    </div>
                    <div class="item__40-20 uk-text-left uk-text-center@m">
                        <?php
                        $data = array(
                            'Trở thành nhà Môi giới thu nhập đột phá vững bền với chương trình đào tạo hiệu quả nhất thị trường',
                            'Được cầm tay chỉ việc và làm việc nhóm với các thành viên bán hàng xuất sắc nhất',
                            'Tăng nhanh thu nhập từ 30 triệu đến mức đột phá trên 100 triệu/tháng',
                        );
                        foreach ($data as $v): ?>
                        <div class="uk-flex-center item__12 uk-grid-12" uk-grid>
                            <div class="uk-width-auto">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.93699 14.9361C3.11109 14.9361 0.000976562 11.8259 0.000976562 8.00001C0.000976562 4.17411 3.11109 1.06396 6.93699 1.06396C8.86296 1.06396 10.6588 1.83176 11.9861 3.23716C12.0533 3.31283 12.0459 3.39757 12.0029 3.45917L12.41 3.99126C12.4876 3.95173 12.5885 3.95989 12.6499 4.05696C13.4567 5.21515 13.8731 6.58154 13.8731 7.99997C13.8731 11.8259 10.7629 14.9361 6.93699 14.9361ZM6.93699 13.5046C3.9049 13.5046 1.4324 11.0321 1.4324 8.00001C1.4324 4.96793 3.9049 2.49539 6.93699 2.49539C8.38144 2.49539 9.74787 3.05494 10.7759 4.057C10.8586 4.13857 10.8457 4.2359 10.7919 4.30138L11.3073 4.94098C11.3859 4.89499 11.4945 4.89942 11.5567 4.99395C13.8961 8.55406 11.3572 13.5046 6.93699 13.5046Z" fill="#545454"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.11911 11.5655C7.04105 11.5655 6.97598 11.5135 6.94996 11.4484C6.93697 11.4224 5.81779 8.53343 4.08703 7.44032C3.74868 7.23211 3.48847 7.01088 3.59255 6.51636C3.69664 6.03488 4.022 5.7616 4.60757 5.63146C5.6486 5.41022 6.76774 7.02387 7.18419 7.68758C8.64163 5.56642 11.5566 2.235 15.7989 1.84461C16.0036 1.82062 16.0792 2.12398 15.89 2.20898C15.8249 2.235 9.76073 5.00687 7.30126 11.4614C7.26225 11.5265 7.19718 11.5655 7.11911 11.5655Z" fill="#00B42C"/>
                                </svg>
                            </div>
                            <div class="uk-width-auto@m" uk-toggle="cls: uk-width-expand; mode: media; media: (max-width: 959.8px)">
                                <div class="tuyendung__card__txt"><?= $v ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="item__40 uk-text-center">
                        <a href="" class="uk-button tuyendung__card__btn uk-button-danger">Đăng ký ứng tuyển</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Đào tạo miễn phí - nâng tầm giá trị bản thân-->
        <div class="item__110-60">
            <div class="uk-position-relative">
                <div class="home__title1__coverBg uk-position-center">
                    <div class="uk-cover-container uk-flex-inline">
                        <img src="images/bg_title.png" alt="" uk-cover="">
                        <canvas width="784" height="138"></canvas>
                    </div>
                </div>
                <div class="home__title1 uk-text-center">Đào tạo miễn phí - nâng tầm <br> giá trị bản thân</div>
            </div>
            <div class="item__80-40 uk-child-width-1-3@m uk-grid-20 uk-grid-40-m uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        'title' => 'Bứt phá thu nhập nhanh và bền vững',
                        'txt' => 'Hoa hồng từ 3% cao nhất thị trường. Chuyên môn hóa bán hàng, lương cứng 5.6 triệu',
                    ),
                    array(
                        'title' => 'Đào tạo & huấn luyện vững nghề nhanh',
                        'txt' => 'Giáo trình tổng hợp từ hơn 10 năm kinh nghiệm của hàng ngàn nhân sự giỏi',
                    ),
                    array(
                        'title' => 'Ứng dụng công nghệ 4.0',
                        'txt' => 'Hoa hồng từ 3% cao nhất thị trường. Chuyên môn hóa bán hàng, lương cứng 5.6 triệu',
                    ),
                    array(
                        'title' => 'Lộ trình phát triển rõ ràng, toàn diện',
                        'txt' => 'Phát triển lên bất kỳ vị trí nào như Trưởng phòng, Chuyên gia khi bạn vượt qua chỉ tiêu có sẵn.',
                    ),
                    array(
                        'title' => 'Nguồn hàng phong phú, chất lượng',
                        'txt' => 'Hơn 50.000 căn nhà được cập nhật thường xuyên. Được quản lý bởi đội ngũ Chuyên gia giỏi.',
                    ),
                    array(
                        'title' => 'Công bằng, minh bạch',
                        'txt' => 'Chính nhân quân tử, các thông tin tới khách hàng, đồng nghiệp là rõ ràng, minh bạch',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="uk-card tuyendung__card1 uk-flex uk-flex-column">
                        <div class="uk-cover-container">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="400" height="280"></canvas>
                        </div>
                        <div class="uk-card-body tuyendung__card1__body uk-flex-auto uk-flex uk-flex-column">
                            <div class="uk-flex-auto tuyendung__card1__title">
                                <?= $v['title'] ?>
                            </div>
                            <div class="tuyendung__card1__txt">
                                <?= $v['txt'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--/Đào tạo miễn phí - nâng tầm giá trị bản thân-->

        <!--Quyền lợi của nhân viên kinh doanh-->
        <div class="item__126-48">
            <div class="uk-position-relative">
                <div class="home__title1__coverBg uk-position-center">
                    <div class="uk-cover-container uk-flex-inline">
                        <img src="images/bg_title.png" alt="" uk-cover="">
                        <canvas width="784" height="138"></canvas>
                    </div>
                </div>
                <div class="home__title1 uk-text-center">Quyền lợi của nhân viên kinh doanh</div>
            </div>
            <div class="uk-flex-center item__20-16" uk-grid>
                <div class="uk-width-auto">
                    <div class="home__quyenloi__desc">
                        Con người là tất cả, thấu hiểu được điều này Thiên Khôi lấy việc phát triển nghiệp vụ, thu nhập đời sống của nhân viên kinh doanh là trọng tâm của toàn doanh nghiệp. Chúng tôi tự tin nhân sự tại Thiên Khôi có được những quyền lợi tốt nhất trong thị trường Bất Động Sản tại Việt Nam
                    </div>
                </div>
            </div>
            <div class="uk-child-width-1-2@m uk-grid-match uk-grid-20 uk-grid-40-m" uk-grid>
                <div>
                    <div class="home__quyenloi__card uk-card uk-flex uk-flex-column">
                        <div class="uk-cover-container">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="642" height="400"></canvas>
                        </div>
                        <div class="home__quyenloi__card__body uk-height-min-medium uk-card-body uk-flex-auto">
                            <div class="home__quyenloi__card__title">Thu nhập đột phá và đa dạng</div>
                            <ul class="home__quyenloi__card__list uk-list item__31-20">
                                <li>Thu nhập trung bình 30 - 60 triệu/tháng khi có nghề; 80 - 200 triệu/tháng khi vững nghề và <strong>không giới hạn</strong> thu nhập nếu bạn tài năng và chăm chỉ.</li>
                                <li>
                                    Hoa hồng được chia ngay khi phát sinh giao dịch từ <strong>3 - 5 %</strong> mỗi thương vụ cao nhất thị trường, về túi <strong>tối thiểu 36.5 triệu/vụ</strong>; trung bình về túi <strong>80 - 100 triệu/vụ</strong>; thưởng trong từng vụ chốt.
                                </li>
                                <li>
                                    Hệ sinh thái quy mô <strong>25.000 nhân sự, 50.000 căn nhà xác thực</strong> giúp bạn có thêm thu nhập khi giới thiệu thông tin nhà bán, giới thiệu nhân sự, đầu tư Bất động sản giá rẻ tại Thiên Khôi.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__quyenloi__card uk-card uk-flex uk-flex-column">
                        <div class="uk-cover-container">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="642" height="400"></canvas>
                        </div>
                        <div class="home__quyenloi__card__body uk-height-min-medium uk-card-body uk-flex-auto">
                            <div class="home__quyenloi__card__title">PHÁT TRIỂN BẢN THÂN</div>
                            <ul class="home__quyenloi__card__list uk-list item__31-20">
                                <li>Tham gia các buổi đào tạo, huấn luyện bởi Lãnh đạo Công ty, Chuyên gia Bất động sản, Chuyên gia Marketing và bán hàng dày dặn kinh nhiệm</li>
                                <li>Được đào tạo bài bản với những giáo trình chuyên nghiệp tích luỹ từ <strong>10 năm kinh nghiệm</strong> của Thiên Khôi giúp nhân sự giỏi nghề trong thời gian nhanh nhất.</li>
                                <li>Được tương tác với các khách hàng, đối tác là người có nhiều tiền, thành công và giao dịch tài sản lớn giúp học hỏi nâng cao bản thân nhanh chóng</li>
                                <li>Những kiến thức, kỹ năng, kinh nghiệm, phương pháp tư duy và làm việc được học tại Thiên Khôi giúp bạn áp dụng và thahf công ở bất kỳ ngành nghề kinh doanh nào sau này.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__quyenloi__card uk-card uk-flex uk-flex-column">
                        <div class="uk-cover-container">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="642" height="400"></canvas>
                        </div>
                        <div class="home__quyenloi__card__body uk-height-min-medium uk-card-body uk-flex-auto">
                            <div class="home__quyenloi__card__title">CƠ HỘI THĂNG TIẾN</div>
                            <ul class="home__quyenloi__card__list uk-list item__31-20">
                                <li>Phát triển kỹ năng từ bán các Bất động sản giá trị nhỏ từ <strong>1 - 6 tỷ</strong> tới bán các căn nhà mặt phố <strong>6 - 20 tỷ</strong> hay các toà nhà, khách sạn, biệt thự từ <strong>20 - 500 tỷ</strong>. </li>
                                <li>Phát triển tới vị trí đàm phán ký kết các hợp đồng nguồn hàng trên thị trường</li>
                                <li>Phát triển tới vị trí quản lý đội nhóm, Trưởng phòng, Giám đốc của Công ty.</li>
                                <li>Môi trường minh bạch, công bằng. Chỉ cần bạn đủ năng lực và tinh thần dám làm, quyết tâm làm có thể nhanh chóng thăng tiến lên cấp quản lý, Lãnh đạo Công ty.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__quyenloi__card uk-card uk-flex uk-flex-column">
                        <div class="uk-cover-container">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="642" height="400"></canvas>
                        </div>
                        <div class="home__quyenloi__card__body uk-height-min-medium uk-card-body uk-flex-auto">
                            <div class="home__quyenloi__card__title">CHẾ ĐỘ PHÚC LỢI</div>
                            <ul class="home__quyenloi__card__list uk-list item__31-20">
                                <li>Chế độ khen thưởng hấp dẫn theo Tuần, Tháng, Quý, năm và các dịp lễ lớn. Thưởng theo hiện kim, vật phẩm, chuyến đi du lịch trong và ngoài nước.</li>
                                <li>Đối tác chiến lược hỗ trợ chiết khấu 80 - 90% chi phí nạp tiền đăng tin trên <strong>batdongsan.com.vn</strong>, <strong>chotot.com</strong>, <strong>alonhadat.com.vn</strong>; hỗ trợ 2.000.000VNĐ/tháng đăng tin trang Bannha888; đăng tin miễn phí duy nhất thành viên Thiên Khôi trên hơn 30 Group Facebook hiệu quả nhất Hà Nội, Sài Gòn.</li>
                                <li>Chính sách bảo hiểm trong quá trình làm việc <strong>từ 10.000.000 VNĐ</strong>. Chính sách bảo hiểm khi có giao dịch nhưng không thu được hoa hồng từ chủ nhà <strong>tối thiểu 10.000.000 VNĐ</strong> duy nhất trên thị trường. Tổng đài hệ thống nhân sự kinh nghiệm xử lý chuyên môn nghiệp vụ tại hiện trường tức thì khi có yêu cầu giúp chuyên viên mới tự tin làm việc (duy nhất tại Thiên Khôi mà chưa đơn vị BĐS nào làm được).</li>
                                <li>Lấy việc phát triển nhân sự làm trọng tâm, Thiên Khôi cam kết đào tạo và hỗ trợ để chuyên viên mới thành công chỉ cần nghiêm túc học tập và làm đúng lộ trình đào tạo.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Quyền lợi của nhân viên kinh doanh-->
    </div>
</div>

<!--Đăng ký ứng tuyển -->
<div class="home__dky">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-40" uk-grid>
            <div>
                <div class="home__dky__card uk-card uk-card-default">
                    <div class="home__dky__card__title home__dky__card__title--c1">Mô tả công việc</div>
                    <div class="uk-card-body home__dky__card__body">
                        <ul class="uk-list home__dky__card__list">
                            <li>Tìm kiếm khách hàng bằng cách viết bài quảng cáo, truyền thông sản phẩm trên các trang kênh hiệu quả (miễn phí) do Công ty tổng hợp lựa chọn.</li>
                            <li>Tiếp nhận điện thoại, khai thác thông tin, nhu cầu của khách hàng, tư vấn bán các sản phẩm Bất động sản phong phú có sẵn trong nguồn hàng Công ty.</li>
                            <li>Tư vấn các quy trình pháp lý, thông tin quy hoạch, yếu tố phong thuỷ … và các bước chăm sóc khách hàng hiệu quả.</li>
                            <li>Chốt giao dịch và hỗ trợ khách hàng các thủ tục công chứng, sang tên.</li>
                            <li>Tham gia đầy đủ các hoạt động chung như: Đào tạo, du lịch, thể thao, “nâng cao bản thân” của Công ty.</li>
                            <li>Luôn có tinh thần chia sẻ và giúp đỡ đồng nghiệp & hiếu thảo với cha mẹ bằng hành động đúng với văn hoá của Công ty.</li>
                        </ul>
                    </div>
                    <div class="uk-position-relative">
                        <div class="home__dky__card__title home__dky__card__title--c2 uk-position-z-index">Yêu cầu công việc</div>
                        <div class="home__dky__card__divider uk-position-center"></div>
                    </div>
                    <div class="uk-card-body home__dky__card__body">
                        <ul class="uk-list home__dky__card__list">
                            <li>Nam/nữ lý lịch rõ ràng, nhanh nhẹn, giao tiếp tốt.</li>
                            <li>Tốt nghiệp Trung cấp trở lên.</li>
                            <li>Khai thác và sử dụng thành thạo Internet và tin học văn phòng.</li>
                            <li>Yêu thích kinh doanh, đặc biệt kinh doanh Bất động sản.</li>
                            <li>Ứng viên chưa có kinh nghiệm sẽ được Công ty đào tạo.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-text-center">
                    <div class="home__dky__form__txt">Get advice</div>
                    <div class="item__16-12 home__dky__form__title">Đăng ký ứng tuyển</div>
                </div>
                <form class="uk-grid-small uk-grid-20-m uk-form-stacked item__20" uk-grid>
                    <div class="uk-width-1-1">
                        <input class="uk-input home__dky__form__input" type="text" placeholder="Họ và tên" aria-label="Họ và tên">
                    </div>
                    <div class="uk-width-1-2@m">
                        <input class="uk-input home__dky__form__input" type="text" placeholder="Số điện thoại" aria-label="Số điện thoại">
                    </div>
                    <div class="uk-width-1-2@m">
                        <input class="uk-input home__dky__form__input" type="text" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="uk-width-1-2@m">
                        <input class="uk-input home__dky__form__input" type="text" placeholder="Năm sinh (vd: 1999)" aria-label="Năm sinh (vd: 1999)">
                    </div>
                    <div class="uk-width-1-2@m">
                        <input class="uk-input home__dky__form__input" type="text" placeholder="Bốn số cuối CCCD/CMND (vd: 6868)" aria-label="Bốn số cuối CCCD/CMND (vd: 6868)">
                    </div>
                    <div class="uk-width-1-1">
                        <label class="uk-form-label  home__dky__form__label" for="form-stacked-text">Chọn bằng cấp cao nhất của bạn:</label>
                        <div class="uk-form-controls">
                            <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                <select aria-label="Custom controls">
                                    <option value="">Chọn bằng cấp</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="uk-width home__dky__form__btnSelect uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <label class="uk-form-label home__dky__form__label" for="form-stacked-text">Khu vực:</label>
                        <div class="uk-form-controls">
                            <div class="uk-grid-small uk-grid-40 uk-child-width-auto uk-grid" uk-grid>
                                <label><input class="uk-radio home__dky__form__radio" type="radio" name="radio2" checked> <span class="home__dky__form__radioTxt">Hà Nội</span></label>
                                <label><input class="uk-radio home__dky__form__radio" type="radio" name="radio2"> <span class="home__dky__form__radioTxt">TP. Hồ Chí Minh</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <textarea class="uk-textarea home__dky__form__textarea" rows="5" placeholder="Ghi chú và lời nhắn của bạn" aria-label="Ghi chú và lời nhắn của bạn"></textarea>
                    </div>
                    <div class="uk-width-1-1 item__40-32">
                        <button class="uk-button home__dky__form__btnSubmit uk-button-danger uk-border-rounded uk-width">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/Đăng ký ứng tuyển -->

<!--Khoá học Môi giới Nhà đất cơ bản tại Thiên Khôi-->
<div class="uk-section home__section">
    <div class="uk-container">
        <div class="home__title1 uk-text-center">Khoá học Môi giới Nhà đất cơ bản tại Thiên Khôi</div>
        <div class="item__60-40">
            <div class="uk-visible@m">
                <div class="uk-child-width-auto uk-flex-nowrap uk-grid-collapse uk-flex-center" uk-grid>
                    <?php
                    $data = array(
                        'Kiến thức cơ bản về bất động sản Thổ cư',
                        'Khảo sát và đánh giá Bất động sản',
                        'Công cụ truyền thông Bất động sản, cách viết tin đăng hiệu quả',
                        'Thiết lập công cụ và các thao tác đăng tin',
                        'Cuộc điện thoại đầu tiên của khách hàng',
                    );
                    foreach ($data as $k=>$v): ?>
                    <div class="tuyendung__card3__column">
                        <div class="tuyendung__card3 uk-card uk-card-body" style="z-index: <?= 99 - $k ?>">

                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="uk-child-width-auto uk-flex-nowrap uk-grid-collapse uk-flex-center" uk-grid>
                    <?php
                    $data = array(
                        'Dẫn khách xem nhà, các tình huống thực tế khi dẫn khách',
                        'Pháp lý trong giao dịch Bất động sản và tư vấn khách hàng',
                        'Các tình huống tư vấn về giá',
                        'Kinh nghiệm trên bàn đàm phán',
                        'Hậu đặt cọc và các thủ tục công chứng thu hoa hồng',
                    );
                    foreach ($data as $k=>$v): ?>
                        <div class="tuyendung__card3__column">
                            <div class="tuyendung__card3 uk-card uk-card-body" style="z-index: <?= 99 - $k ?>">

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="uk-grid uk-child-width-1-2 uk-grid-20 uk-hidden@m uk-grid-match" uk-grid>
                <?php
                $data = array(
                    'Kiến thức cơ bản về bất động sản Thổ cư',
                    'Khảo sát và đánh giá Bất động sản',
                    'Công cụ truyền thông Bất động sản, cách viết tin đăng hiệu quả',
                    'Thiết lập công cụ và các thao tác đăng tin',
                    'Cuộc điện thoại đầu tiên của khách hàng',
                    'Dẫn khách xem nhà, các tình huống thực tế khi dẫn khách',
                    'Pháp lý trong giao dịch Bất động sản và tư vấn khách hàng',
                    'Các tình huống tư vấn về giá',
                    'Kinh nghiệm trên bàn đàm phán',
                    'Hậu đặt cọc và các thủ tục công chứng thu hoa hồng',
                );
                foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="tuyendung__card2 uk-card uk-card-body uk-card-default">
                            <div class="tuyendung__card2__title">Buổi <?= $k+1 ?></div>
                            <div class="item__12 tuyendung__card2__txt"><?= $v ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="item__60-40 uk-text-center">
            <a href="" class="uk-button block_kyguinhadat__btn uk-button-danger">Đăng ký ngay</a>
        </div>
    </div>
</div>
<!--/Khoá học Môi giới Nhà đất cơ bản tại Thiên Khôi-->




<?php require "template-parts/layouts/footer.php"; ?>