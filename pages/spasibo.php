<?php
$title = 'Ал-Строй';
head();
?>

    <!--------------- ШАПКА --------------->
    <header id="header" class="index" style="background-image: url('assets/img/bg_home.jpg')">
        <div class="header__fixed">
            <?php
            hat();
            menu();
            ?>
        </div>

        <div class="header__form">
            <div class="header__title">
                Производство и установка алюминиевых и пластиковых светопрозрачных конструкции
            </div>
            <?php
            head_callback();
            ?>
        </div>

    </header>
    <!--------------- /ШАПКА -------------->

    <section class="wp text-center main spasibo">
        <h1>Благодарим за оказанное нам доверие. В ближайшее время наш специалист свяжется с Вами!</h1>
    </section>

<?php
footer();
?>