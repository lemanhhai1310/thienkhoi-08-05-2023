<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div uk-parallax="bgy: -200;media: @m" class="bg_banner uk-background-norepeat uk-background-top-center uk-background-cover" data-src="images/banner_home.png" uk-img></div>
<div class="uk-section home__section">
    <div class="uk-container">
        <div class="uk-flex-center uk-grid" uk-grid>
            <div class="uk-width-auto">
                <div class="home__card1 uk-card uk-card-default uk-card-body uk-height-min-medium">
                    <div class="home__card1__title1">LÀM BẤT ĐỘNG SẢN TẠI MÔI TRƯỜNG CHUYÊN NGHIỆP NHẤT</div>
                    <div class="item__24-16 home__card1__title2">BẤT ĐỘNG SẢN THIÊN KHÔI</div>
                    <div class="item__24-16 home__card1__txt">
                        Trở thành nhà Môi giới Bất động sản thu nhập đột phá vững bền. Thiên Khôi Group với hơn 10 năm phát triển, hệ thống hơn 20 chi nhánh Toàn quốc, kho hàng 50.000 căn đã được xác thục, chương trình đào tạo chuyên nghiệp nhất thị trường Nhà đất <strong>Hà Nội và Thành phố Hồ Chí Minh</strong>.
                    </div>
                    <div class="item__40-28 uk-child-width-auto@s uk-flex-center uk-grid-small uk-grid-40-m" uk-grid>
                        <div>
                            <a href="" class="home__card1__btn home__card1__btn--danger uk-button uk-button-danger">Đăng ký ứng tuyển</a>
                        </div>
                        <div>
                            <a href="" class="home__card1__btn home__card1__btn--success uk-button uk-button-primary">Ký gửi nhà đất</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__80-20">
            <div class="uk-child-width-1-2@m uk-grid-20 uk-grid-40-m" uk-grid>
                <div>
                    <img src="images/bg_tamnhin.png" alt="">
                </div>
                <div>
                    <div class="home__tamnhin__title">Tầm nhìn của Thiên Khôi </div>
                    <div class="item__40-16 home__tamnhin__txt">Với sứ mệnh nâng tầm nghề môi giới tại Việt Nam, chúng tôi mong muốn đào tạo ra những đội ngũ Chuyên viên Kinh doanh chuyên nghiệp, đa dạng độ tuổi, tiếp thu tư duy kinh doanh thời đại mới, đặt tự tôn nghề nghiệp lên cao nhất</div>
                    <div class="item__20-16 home__tamnhin__txt">Thiên Khôi là một hệ sinh thái của những môi giới tinh hoa & đại đức cùng nhau giàu sang và phát triển vững bền</div>
                </div>
            </div>
            <div class="item__40-35 uk-grid uk-grid-20 uk-grid-40-m uk-child-width-1-2@m" uk-grid>
                <?php
                $data = array(
                    array(
                        'icon' => 'images/tamnhin1.png',
                        'name' => 'Nguồn nhà phong phú',
                        'txt' => array(
                            'Hơn 50.000 căn nhà xác thực được quản lý bới các chuyên gia giỏi',
                            'Dữ liệu hơn 100.000 khách hàng sẵn có',
                        ),
                    ),
                    array(
                        'icon' => 'images/tamnhin2.png',
                        'name' => 'Ứng dụng công nghệ 4.0',
                        'txt' => array(
                            'Thiên Khôi app có mặt trên các nền tảng hỗ trợ khớp nối nhu cầu nhanh nhất',
                            'Tra cứu thông tin sổ đỏ, quy hoạch trực tuyến',
                        ),
                    ),
                    array(
                        'icon' => 'images/tamnhin3.png',
                        'name' => 'Đào tạo chuyên nghiệp',
                        'txt' => array(
                            'Giáo trình tổng hợp từ hơn 10 năm kinh nghiệm của hàng ngàn nhân sự giỏi, cầm tay chỉ việc thực tiễn song song ký thuyết',
                        ),
                    ),
                    array(
                        'icon' => 'images/tamnhin4.png',
                        'name' => 'Công bằng minh bạch',
                        'txt' => array(
                            'Chính nhân quân tử, các thông tin tới khách hàng, đồng nghiệp là rõ ràng , minh b chữ “Tín trong nghề là hàng đầu',
                        ),
                    ),
                );
                foreach ($data as $v):?>
                <div>
                    <div class="uk-flex-middle uk-grid-12" uk-grid>
                        <div class="uk-width-auto">
                            <div style="background: #D2242B;" class="home__tamnhin__coverImg uk-cover-container uk-border-rounded" data-src="<?= $v['icon'] ?>" uk-img>
                                <canvas width="40" height="40"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__tamnhin__name"><?= $v['name'] ?></div>
                        </div>
                    </div>
                    <div class="item__16-12">
                        <?php foreach ($v['txt'] as $v1): ?>
                        <div class="item__8 home__tamnhin__txt1"><?= $v1 ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="item__40-20">
                <a href="" class="home__tamnhin__btnLink uk-button uk-button-danger">Về Thiên Khôi</a>
            </div>
        </div>
        <!--Hệ thống trụ sở và chi nhánh Thiên khôi -->
        <div class="item__80-40">
            <div class="home__title1 uk-text-center">Hệ thống trụ sở và chi nhánh Thiên khôi</div>
            <div class="uk-position-relative item__20 home__hethong__box">
                <div data-src="images/logo-1.png" uk-img class="home__hethong__logo uk-visible@m uk-position-top-center uk-position-z-index uk-cover-container uk-flex-inline uk-margin-auto uk-border-circle" style="background: #fff;">
                    <canvas width="200" height="200"></canvas>
                </div>
                <div class="uk-child-width-1-2@m uk-grid-20 uk-grid-40-m uk-grid-match" uk-grid>
                    <div>
                        <div class="home__hethong__card uk-card uk-flex uk-flex-column">
                            <div class="uk-card-header home__hethong__card__header">
                                TP. Hà Nội
                            </div>
                            <div class="uk-card-body home__hethong__card__body uk-flex-auto">
                                <div class="home__hethong__txt">Tầng 5, Tòa nhà VTC, 18 Tam Trinh, Hai Bà Trưng</div>
                                <div class="home__hethong__txt">Số 6 LK 4B, Nguyễn Văn Lộc, P. Mộ Lao, Q. Hà Đông</div>
                                <div class="home__hethong__txt">71 Hoàng Cầu, Đống Đa</div>
                                <div class="home__hethong__txt">37 Nguyễn Văn Huyên, Cầu Giấy</div>
                                <div class="home__hethong__txt">139 Hồng Tiến, Long Biên</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="home__hethong__card uk-card uk-flex uk-flex-column">
                            <div class="uk-card-header home__hethong__card__header">
                                TP. Hồ Chí Minh
                            </div>
                            <div class="uk-card-body home__hethong__card__body uk-flex-auto">
                                <div class="home__hethong__txt">52 Trương Định, Phường 7, Quận 3</div>
                                <div class="home__hethong__txt">Số 2-4 đường số 2, P.An Lạc A, Q. Bình Tân</div>
                                <div class="home__hethong__txt">Số 10-12 Đường N1, KDC Hiệp Thành, Quận 12</div>
                                <div class="home__hethong__txt">24 Hoàng Hoa Thám, P.7, Quận Bình Thạnh</div>
                                <div class="home__hethong__txt">48 Đường số 14, KDC Him Lam, Quận 7</div>
                                <div class="home__hethong__txt">108 Đường số 1, KDC Cityland, Trần Thị Nghỉ, Gò Vấp</div>
                                <div class="home__hethong__txt">301A Võ Văn Ngân, P. Linh Chiểu, TP Thủ Đức</div>
                                <div class="home__hethong__txt">473 Điện Biên Phủ, P.25, Q. Bình Thạnh</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Hệ thống trụ sở và chi nhánh Thiên khôi -->

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

<!--Phản hồi về BĐS Thiên Khôi-->
<div class="uk-section home__section">
    <div class="uk-container">
        <div class="home__title1 uk-text-center">Phản hồi về BĐS Thiên Khôi</div>
        <div class="item__60-38">
            <div class="uk-child-width-1-2@m uk-grid-40-m uk-grid-20 uk-visible@m uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        'content' => '',
                        'name' => 'Mrs. Sương ',
                        'txt' => 'Chuyên viên Kinh doanh',
                    ),
                    array(
                        'content' => '',
                        'name' => 'Mr. Kháng',
                        'txt' => 'Chủ đầu tư',
                    ),
                    array(
                        'content' => '',
                        'name' => 'Mrs. Đức',
                        'txt' => 'Trưởng phòng Kinh doanh',
                    ),
                    array(
                        'content' => '',
                        'name' => 'Mr. Cầu',
                        'txt' => 'Chuyên viên Quản lý nguồn',
                    ),
                );
                foreach ($data as $v): ?>
                <div>

                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Phản hồi về BĐS Thiên Khôi-->
<?php require "template-parts/layouts/footer.php"; ?>