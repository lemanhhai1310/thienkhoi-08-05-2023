<?php $data["title"] = "Giới thiệu"; ?>
<?php $bodyClass = 'about' ?>
<?php $menu_position = true ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="about__section1 uk-flex uk-flex-bottom">
    <div class="uk-width uk-section about__section1__box">
        <div class="uk-container">
            <div class="uk-flex-middle uk-grid-85-m" uk-grid>
                <div class="uk-width-auto">
                    <div class="about__section1__img uk-position-relative">
                        <div class="uk-cover-container">
                            <img src="images/photo.jpg" alt="" uk-cover="">
                            <canvas width="650" height="560"></canvas>
                        </div>
                        <img class="uk-position-center-right-out uk-visible@m" src="images/preview1.png" alt="">
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="about__section1__txt1">Về chúng tôi</div>
                    <div class="home__title1 item__12">Bất động sản Thiên Khôi</div>
                    <div class="item__24-16 about__section1__txt2">Ngày 01 tháng 01 năm 2020 <strong>Công ty Bất động sản Thiên Khôi</strong> chính thức có mặt trên thị truờng Bất động sản Việt Nam với sứ mệnh kết nối khách hàng và chủ nhà, tư vấn về pháp lý và tình trạng bất động sản trước khi giao dịch diễn ra, điều tiết làm tăng tính thanh khoản cho hàng ngàn Bất động sản trên khắp các Quận nội và ngoại thành tại Hà Nội và TP HCM, làm trong sạch và minh bạch thị trường.</div>
                    <div class="item__16 about__section1__txt2">Trải qua hơn 1 năm hình thành và phát triển Công ty đã có hơn 8000 nhân sự với hàng ngàn giao dịch Bất động sản lớn nhỏ trên thị trường Hà Nội và TP. Hồ Chí Minh.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about__section2 uk-section-small uk-text-center">
    <div class="uk-container">
        <div class="uk-grid uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
            <?php
            $data = array(
                array(
                    'icon' => 'images/about1.png',
                    'txt1' => '20+',
                    'txt2' => 'Trụ sở tại 2 TP lớn là Hà Nội và TP. Hồ Chí Minh',
                ),
                array(
                    'icon' => 'images/about2.png',
                    'txt1' => '250',
                    'txt2' => 'Khối/ Phòng kinh doanh phủ kín các Quận, Huyện của Hà Nội và TP',
                ),
                array(
                    'icon' => 'images/about3.png',
                    'txt1' => '23.000+',
                    'txt2' => 'Nhân sự trên khắp Hà Nội và TP Hồ Chí Minh',
                ),
                array(
                    'icon' => 'images/about4.png',
                    'txt1' => '1.700+',
                    'txt2' => 'Lãnh đạo và quản lý các cấp',
                ),
            );
            foreach ($data as $v): ?>
            <div>
                <div style="background-color: #D2242B;" class="about__section2__img uk-cover-container uk-flex-inline uk-border-rounded uk-background-norepeat uk-background-center-center" data-src="<?= $v['icon'] ?>" uk-img>
                    <canvas width="60" height="60"></canvas>
                </div>
                <div class="item__12 about__section2__txt1"><?= $v['txt1'] ?></div>
                <div class="item__12 about__section2__txt2"><?= $v['txt2'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="uk-section home__section about__section">
    <div class="uk-container">

        <div class="uk-grid" uk-grid>
            <div class="uk-width-expand">
                <div class="home__title1">Mục tiêu và giá trị Thiên Khôi hướng tới</div>
                <ul class="item__40-20 about__tab" uk-tab>
                    <li><a href="#">Tầm nhìn</a></li>
                    <li><a href="#">Sứ mệnh</a></li>
                    <li><a href="#">Giá trị</a></li>
                </ul>

                <ul class="uk-switcher item__32-16">
                    <li>
                        <ul class="uk-list uk-list-bullet about__listTab">
                            <li>Đưa thương hiệu <strong>Bất động sản Thiên Khôi</strong> không ngừng phát triển trên thị trường Bất động sản.</li>
                            <li>Tập trung <strong>đào tạo</strong> và <strong>phát triển nguồn lực</strong> để tạo nên đội ngũ Môi giới chuyên nghiệp uy tín, có năng lực cao.</li>
                            <li><strong>Mở rộng quy mô</strong> hoạt động trên mọi loại hình Bất động sản, mang lại nhiều sự lựa chọn cho khách hàng.</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="uk-list uk-list-bullet about__listTab">
                            <li>Đưa thương hiệu <strong>Bất động sản Thiên Khôi</strong> không ngừng phát triển trên thị trường Bất động sản.</li>
                            <li>Tập trung <strong>đào tạo</strong> và <strong>phát triển nguồn lực</strong> để tạo nên đội ngũ Môi giới chuyên nghiệp uy tín, có năng lực cao.</li>
                            <li><strong>Mở rộng quy mô</strong> hoạt động trên mọi loại hình Bất động sản, mang lại nhiều sự lựa chọn cho khách hàng.</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="uk-list uk-list-bullet about__listTab">
                            <li>Đưa thương hiệu <strong>Bất động sản Thiên Khôi</strong> không ngừng phát triển trên thị trường Bất động sản.</li>
                            <li>Tập trung <strong>đào tạo</strong> và <strong>phát triển nguồn lực</strong> để tạo nên đội ngũ Môi giới chuyên nghiệp uy tín, có năng lực cao.</li>
                            <li><strong>Mở rộng quy mô</strong> hoạt động trên mọi loại hình Bất động sản, mang lại nhiều sự lựa chọn cho khách hàng.</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="uk-width-auto">
                <div class="uk-position-relative">
                    <img src="images/bg_video.png" alt="">
                    <span class="about__btnIcon uk-position-center"></span>
                    <a href="#modal-media-youtube" uk-toggle class="about__btnPlay uk-position-cover"></a>
                </div>
                <div id="modal-media-youtube" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA" width="1920" height="1080" uk-video uk-responsive></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!--Lĩnh vực hoạt động bất động sản Thiên Khôi-->
        <div class="item__110-60">
            <div class="uk-position-relative">
                <div class="home__title1__coverBg uk-position-center">
                    <div class="uk-cover-container uk-flex-inline">
                        <img src="images/bg_title.png" alt="" uk-cover="">
                        <canvas width="784" height="138"></canvas>
                    </div>
                </div>
                <div class="home__title1 uk-text-center">Lĩnh vực hoạt động bất động <br class="uk-visible@m"> sản Thiên Khôi</div>
            </div>
            <div class="item__80-40 uk-child-width-1-3@m uk-grid-20 uk-grid-40-m uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        'title' => 'Tư vấn và đầu tư BĐS',
                        'txt' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    ),
                    array(
                        'title' => 'Quản lý BĐS',
                        'txt' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    ),
                    array(
                        'title' => 'Môi giới bất động sản',
                        'txt' => 'Tự hào là đơn vị Môi giới Bất động sản Thổ cư quy mô và chuyên nghiệp nhất Việt Nam, Công ty Bất động sản Thiên Khôi đang không ngừng nỗ lực sáng tạo, cải tiến quy trình để giúp cho nhiều chủ nhà bán nhà và nhiều khách mua mua được nhà.',
                    ),
                    array(
                        'title' => 'Định giá bất động sản',
                        'txt' => 'Với đội ngũ phân tích thị trường chuyên nghiệp, cơ sở dữ liệu về giá cả các căn nhà bán trong từng khu vực được cập nhật liên tục, chúng tôi luôn mang đến dịch vụ tư vấn định giá tốt nhất cho khách hàng. Các Bất động sản thế mạnh về định giá của Công ty là những Bất động sản có giá trị lớn như: Biệt thự, Khách sạn phố cổ, Tòa nhà văn phòng.',
                    ),
                    array(
                        'title' => 'Đào tạo bất động sản',
                        'txt' => 'Điểm cốt lõi và niềm tự hào của Công ty Bất động sản Thiên Khôi chính là ở đội ngũ nhân sự chuyên nghiệp được tuyển dụng và đào tạo Bất động sản lý thuyết tới thực tiễn. Giáo trình đào tạo của Công ty được nâng cấp và đổi mới định kỳ để bắt nhịp với thị trường. Năm 2016 Công ty đã cùng Đại học Kinh tế Quốc dân tổ chức các chương trình đào tạo Môi giới Bất động sản mang lại thành công lớn.',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                    <div class="<?= ($k<=1)?'uk-width-1-2@m':'uk-width-1-3@m' ?>">
                        <div class="uk-card tuyendung__card1 uk-flex uk-flex-column">
                            <div class="uk-cover-container">
                                <img src="images/noimage.jpg" alt="" uk-cover="">
                                <?php if ($k<=1): ?>
                                    <canvas width="620" height="400"></canvas>
                                <?php else: ?>
                                    <canvas width="400" height="287"></canvas>
                                <?php endif; ?>
                            </div>
                            <div class="uk-card-body tuyendung__card1__body uk-flex-auto uk-flex uk-flex-column">
                                <div class="tuyendung__card1__title">
                                    <?= $v['title'] ?>
                                </div>
                                <div class="uk-flex-auto tuyendung__card1__txt">
                                    <?= $v['txt'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--/Lĩnh vực hoạt động bất động sản Thiên Khôi-->
    </div>
</div>

<!--Cam kết của Thiên Khôi-->
<div class="uk-section home__section" style="background: #FFFCF4;">
    <div class="uk-container">
        <div class="uk-text-center" style="color: #D2242B;font-weight: 500;font-size: 16px;">Cam kết của Thiên Khôi</div>
        <div class="home__title1 uk-text-center item__12">Tiềm năng và Thế mạnh <br class="uk-visible@m"> của chúng tôi</div>
        <div class="uk-grid uk-child-width-1-2@m item__49-20 uk-flex-middle" uk-grid>
            <div>
                <img src="images/camket.png" alt="">
            </div>
            <div>
                <?php
                $data = array(
                    array(
                        'txt1' => 'Phát triển mạnh mẽ và hiệu quả nhất',
                        'txt2' => 'đúng kế hoạch Công ty đã đề ra từ 2022-2025 và 2025-2030',
                    ),
                    array(
                        'txt1' => 'Cung ứng nguồn nhân lực trình độ cao',
                        'txt2' => 'chuẩn nghiệp vụ cho toàn thị trường Môi giới Bất động sản Việt Nam',
                    ),
                    array(
                        'txt1' => 'Đem lại giá trị và lợi ích tối đa',
                        'txt2' => 'cho người dùng tại Việt Nam khi sở hữu Bất động sản',
                    ),
                    array(
                        'txt1' => 'Hợp tác chặt chẽ, toàn diện, đúng cam kết',
                        'txt2' => 'với các Chủ đầu tư có cùng chiến lược phát triển với mong muốn phát triển lĩnh vực Bất Động Sản tại Việt Nam',
                    ),
                    array(
                        'txt1' => 'Trở thành công ty phân phối uy tín nhất',
                        'txt2' => 'cửa các Chủ đầu tư Bất động sản trong nước và quốc tế',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div class="item__40-20">
                    <div class="about__camket__txt1"><?= $k+1 ?>. <?= $v['txt1'] ?></div>
                    <div class="about__camket__txt2 item__12"><?= $v['txt2'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Cam kết của Thiên Khôi-->

<!--Đăng ký ứng tuyển -->
<div class="home__dky">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-40 uk-grid-match" uk-grid>
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
                    <div class="uk-width-1-2">
                        <input class="uk-input home__dky__form__input" type="text" placeholder="Số điện thoại" aria-label="Số điện thoại">
                    </div>
                    <div class="uk-width-1-2">
                        <input class="uk-input home__dky__form__input" type="text" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="uk-width-1-2">
                        <input class="uk-input home__dky__form__input" type="text" placeholder="Năm sinh (vd: 1999)" aria-label="Năm sinh (vd: 1999)">
                    </div>
                    <div class="uk-width-1-2">
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
                <div class="item__80-0"></div>
            </div>
        </div>
    </div>
</div>
<!--/Đăng ký ứng tuyển -->







<!--KÝ GỬI NHÀ ĐẤT TOÀN QUỐC-->
<?php require "template-parts/layouts/block_kyguinhadat.php"; ?>
<!--/KÝ GỬI NHÀ ĐẤT TOÀN QUỐC-->

<!--Hệ thống trụ sở và chi nhánh Thiên khôi -->
<div class="uk-section home__section">
    <div class="uk-container">
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
    </div>
</div>
<!--/Hệ thống trụ sở và chi nhánh Thiên khôi -->
<?php require "template-parts/layouts/footer.php"; ?>