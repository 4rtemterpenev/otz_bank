<?php

use yii\helpers\Url;

?>
<section class="hero">
    <div class="hero-wrap preland">
        <div class="wraper">
            <div class="hero-block">
                <div class="hero-block__text preland">
              <span class="hero-block__heading">Как вам обслуживание в Камкомбанке?
              </span>
                    <a href="<?=Url::to(['positive'])?>" onclick="trackLikeGoal()">
                        <div class="hero-block__btns">
                            <div class="hero-block__btn">
                                <span>Понравилось</span>
                                <img src="/template_assets/img/thumb-up-shape-24.svg" alt="">
                            </div>
                    </a>
                    <a href="<?=Url::to(['negative'])?>" onclick="trackDisGoal()">
                        <div class="hero-block__btn red">
                            <span>Не понравилось</span>
                            <img src="/template_assets/img/thumbup-down-shape-24.svg" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="hero-block__image preland">
                <img src="/template_assets/img/ca63e20c-b243-4fb0-98f4-00cf4126f5b4 (1) 1.png" alt="">
            </div>
        </div>
    </div>
    </div>
    <div class="hero-block__text mobile opened">
        <span class="hero-block__heading">Как вам обслуживание в Камкомбанке?
        </span>
        <a href="<?=Url::to(['positive'])?>">
            <div class="hero-block__btns">
                <div class="hero-block__btn">
                    <span>Понравилось</span>
                    <img src="/template_assets/img/thumb-up-shape-24.svg" alt="">
                </div>
        </a>
        <a href="<?=Url::to(['negative'])?>">
            <div class="hero-block__btn red">
                <span>Не понравилось</span>
                <img src="/template_assets/img/thumbup-down-shape-24.svg" alt="">
            </div>
        </a>
    </div>
</section>