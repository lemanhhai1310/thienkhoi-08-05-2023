<?php $data["title"] = "Tin tức"; ?>
<?php $bodyClass = '' ?>
<?php $menu_position = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section home__section tintuc__section">
    <div class="uk-container">
        <div class="uk-text-center">
            <h1 class="uk-h1 tintuc__title">Tin tức và sự kiện</h1>
            <div class="item__20 tintuc__w768 tintuc__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </div>
            <div class="uk-child-width-auto uk-flex-center item__40-20 uk-grid-small" uk-grid>
                <div class="uk-width-auto@m" uk-toggle="cls: uk-width-expand; mode: media; media: (max-width: 959.8px)">
                    <input class="uk-input tintuc__formSearch__input" type="email" placeholder="Nhập email của bạn" aria-label="Nhập email của bạn">
                </div>
                <div class="uk-width-auto">
                    <button class="uk-button uk-button-danger tintuc__formSearch__btn">Đăng ký</button>
                </div>
            </div>
        </div>
        <div class="item__60-40 tintuc__label">Bài viết gần nhất</div>
        <div class="uk-child-width-1-2@m uk-grid-20 uk-grid-40-m uk-grid-match item__40-20" uk-grid>
            <div>
                <div class="tintuc__box">
                    <div class="uk-cover-container uk-border-rounded">
                        <img src="images/noimage.jpg" alt="" uk-cover="">
                        <canvas width="620" height="320"></canvas>
                    </div>
                    <div class="item__20-12">
                        <h5 class="uk-h5 uk-margin-remove home__blog__card__title"><a href="" class="uk-link-toggle">It is a long established fact that a reader will be distracted</a></h5>
                        <div class="home__blog__card__txt item__20-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                        <div class="uk-flex uk-flex-middle item__20-12">
                            <span class="home__blog__card__txtSmall">Admin</span>
                            <span class="home__blog__card__txtSmall">26 th2 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-child-width-1-1 uk-grid-20 uk-grid-40-m uk-grid-match" uk-grid>
                    <?php for ($i=1;$i<=2;$i++): ?>
                    <div>
                        <div class="uk-grid-20" uk-grid>
                            <div class="uk-width-auto@s uk-width-2-5">
                                <div class="uk-cover-container uk-border-rounded">
                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                    <canvas width="295" height="220"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h5 class="uk-h5 uk-margin-remove home__blog__card__title"><a href="" class="uk-link-toggle">It is a long established fact that a reader will be distracted</a></h5>
                                <div class="home__blog__card__txt item__20-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                                <div class="uk-flex uk-flex-middle item__20-12">
                                    <span class="home__blog__card__txtSmall">Admin</span>
                                    <span class="home__blog__card__txtSmall">26 th2 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="item__80-40 tintuc__label">Tất cả bài viết</div>
        <div class="uk-grid-20 uk-grid-40-m uk-grid uk-child-width-1-2 uk-child-width-1-3@m item__40-20" uk-grid>
            <?php for ($i=1;$i<=6;$i++): ?>
            <div>
                <div class="tintuc__card uk-card uk-card-default uk-card-body uk-height-min-medium">
                    <div class="uk-cover-container uk-border-rounded">
                        <img src="images/noimage.jpg" alt="" uk-cover="">
                        <canvas width="360" height="220"></canvas>
                    </div>
                    <div class="item__20-12">
                        <h5 class="uk-h5 uk-margin-remove home__blog__card__title"><a href="" class="uk-link-toggle">It is a long established fact that a reader will be distracted</a></h5>
                        <div class="home__blog__card__txt item__20-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                        <div class="uk-flex uk-flex-middle item__20-12">
                            <span class="home__blog__card__txtSmall">Admin</span>
                            <span class="home__blog__card__txtSmall">26 th2 2023</span>
                        </div>
                    </div>

                </div>
            </div>
            <?php endfor; ?>
        </div>
        <ul class="uk-pagination tintuc__pagination uk-flex-center item__80-40" uk-margin>
            <li><a href="#"><span uk-pagination-previous></span> Trước</a></li>
            <li class="uk-active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="uk-disabled"><span>…</span></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li><a href="#">10</a></li>
            <li><a href="#">Sau <span uk-pagination-next></span></a></li>
        </ul>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>