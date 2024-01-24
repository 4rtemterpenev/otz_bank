<?php
use yii\bootstrap5\ActiveForm;
use yii\widgets\MaskedInput;
?>
<section class="hero dis">
    <div class="hero-wrap dis">
        <div class="wraper dis">
            <div class="hero-block">
                <div class="hero-block__text dislike">
                    <span class="hero-block__name">Мы сожалеем, что вы остались недовольны обслуживанием в нашем банке</span>
                    <span class="hero-block__sub">Поделитесь с нами возникшей проблемой и мы постараемся их исправить для
                избежания подобных ситуаций в будущем. 
                У вас есть возможность написать отзыв на этой странице или пообщаться с нашим оператором, нажав кнопку "Позвонить в банк".</span>
                </div>
                <div class="hero-block__card hide">
                    <span class="hero-block__name">Мы сожалеем, что вы остались недовольны обслуживанием в нашем банке</span>
                    <span class="hero-block__sub">Поделитесь с нами возникшей проблемой и мы постараемся их исправить для
                избежания подобных ситуаций в будущем. 
                У вас есть возможность написать отзыв на этой странице или пообщаться с нашим оператором, нажав кнопку "Позвонить в банк".</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form">
    <div class="wrap">

        <?php  $form = ActiveForm::begin([
            'id' => 'form-block',
            'action' => '#',
            'options' => [
                'class' => 'form-block',             ],
        ]); ?>
            <div class="form-block__action">
                <div class="form-block__item inputs">
                    <div class="form-block__input">
                        <?= $form->field($model, 'name')->textInput([
                            'id' => 'name',
                            'class' => 'name check',
                            'placeholder' => 'Ваше имя',
                            'minlength' => 2,
                        ])->label(false); ?>
                    </div>
                    <div class="form-block__input">
                        <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                            'mask' => '+7 (999) 999-99-99',
                            'options' => [
                                'id' => 'phone',
                                'class' => 'name check',
                                'placeholder' => 'Контактный телефон',
                            ],
                        ])->label(false); ?>
                    </div>
                </div>
                <div class="form-block__item textareas">
             <?= $form->field($model, 'body')->textarea([
                 'id' => 'your-textarea-id', // Set the ID of the textarea
                 'cols' => 30,
                 'rows' => 10,
                 'placeholder' => 'Напишите нам',
                 'minlength' => 10,
                 'maxlength' => 100,
             ])->label(false);
             ?>
                </div>
                <div class="form-block__item submit hide">
                    <input type="submit" value="Отправить отзыв" id="submit" class="form-block__btn disabled">
                    <a href="tel:+78002008638" class="form-block__call">Позвонить в банк</a>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
    </div>
</section>


<section class="modal">
    <div class="modal-block">
        <div class="modal-block__window">
            <div class="modal-block__wrapper">
                <div class="modal-block__head">
                    <img src="/template_assets/img/Vector.svg" alt="">
                </div>
                <div class="modal-block__content">
                    <div class="modal-block__image">
                        <img src="/template_assets/img/form-image.svg" alt="">
                    </div>
                    <span class="modal-block__heading">Спасибо что делаете нас лучше!</span>
                    <span class="modal-block__subtitle">Мы обязательно разберёмся в вашей ситуации!</span>
                </div>
            </div>
        </div>
    </div>
</section>

