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

    <!--------------- О НАС --------------->
    <section id="about">
        <div class="wp">
            <div class="hor-center">
                <h2 class="title underline">о нас</h2>
            </div>
            <div class="description">
                <p>
                    Компания АЛ-СТРОЙ на рынке Казани алюминиевых и пластиковых
                    светопрозрачных конструкций с 2004 года. Мы предлагаем только качественную
                    и надёжную продукцию ГОСТ стандарта по конкурентным ценам.
                </p>
                <p>
                    Компания "АЛ-Строй" - это безупречное качество реализуемой продукции,
                    наряду с высочайшим уровнем соответствующих услуг. Мы предлагаем нашим
                    потребителям пластиковые и алюминиевые конструкции, использумые
                    в таких направлениях:
                </p>
                <p>
                    остекление балконов и других помещений (бытовых, производственных, специализированных);<br>
                    обустройство и декорирование таких элементов зданий как фасады и крыши;
                </p>

                <p>
                    Наши изделия эксплуатируются частными лицами, организациями, учреждениями.
                    Вся реализуемая продукция полностью отвечает утверждённым стандартам и устанавливается
                    на любых объектах, независимо от особенностей санитарных норм.
                </p>
            </div>
        </div>
    </section>
    <!--------------- /О НАС -------------->

    <!--------------- ПРОДУКТЫ --------------->
    <section id="catalog" class="wp">
        <div class="hor-center">
            <div class="title underline">каталог</div>
        </div>
        <input type="radio" name="filter" class="hidden" id="production">
        <input type="radio" name="filter" class="hidden" id="aluminum" checked>
        <input type="radio" name="filter" class="hidden" id="plastic">

        <div class="catalog__filter-buttons">
            <label for="production" class="catalog__button">продукция</label>
            <label for="aluminum" class="catalog__button">алюминиевые</label>
            <label for="plastic" class="catalog__button">пластиковые</label>
        </div>

        <div class="catalog__items">
            <div class="catalog__group group-production">
                <a href="/vkhodnye-gruppy" class="catalog__item production"
                   style='background-image: url("assets/img/catalog/production/mini/vkhodnye-gruppy.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">входные группы</div>
                        <div class="catalog__item-price">от 4200 рублей</div>
                    </div>
                </a>

                <a href="/fasadnoe-osteklenie" class="catalog__item production"
                   style='background-image: url("assets/img/catalog/production/mini/fasadnoe-osteklenie.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">фасадное остекление</div>
                        <div class="catalog__item-price">от 4300 рублей</div>
                    </div>
                </a>

                <a href="/ofisnye-peregorodki" class="catalog__item production"
                   style='background-image: url("assets/img/catalog/production/mini/ofisnye-peregorodki.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">офисные перегородки</div>
                        <div class="catalog__item-price">от 3200 рублей</div>
                    </div>
                </a>

                <a href="/rolstavni" class="catalog__item production"
                   style='background-image: url("assets/img/catalog/production/mini/rolstavni.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">рольставни</div>
                        <div class="catalog__item-price">от 5100 рублей</div>
                    </div>
                </a>

                <a href="/zenitnye-fonari" class="catalog__item production"
                   style='background-image: url("assets/img/catalog/production/mini/zenitnye-fonari.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">зенитные фонари</div>
                        <div class="catalog__item-price">от 19000 рублей</div>
                    </div>
                </a>

                <a href="/svetoprozrachnye-kozyrki" class="catalog__item production"
                   style='background-image: url("assets/img/catalog/production/mini/svetoprozrachnye-kozyrki.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">козырьки стеклянные</div>
                        <div class="catalog__item-price">от 6200 рублей</div>
                    </div>
                </a>

                <a href="/alyuminievye-steklyannye-teplitsy-oranzherei" class="catalog__item production"
                   style='background-image: url("assets/img/catalog/production/mini/alyuminievye-steklyannye-teplitsy-oranzherei.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">теплицы и оранжереи</div>
                        <div class="catalog__item-price">от 14200 рублей</div>
                    </div>
                </a>

                <a href="/steklopakety" class="catalog__item production"
                   style='background-image: url("assets/img/catalog/production/mini/steklopakety.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">стеклопакеты</div>
                        <div class="catalog__item-price">от 900 рублей</div>
                    </div>
                </a>

                <a href="/steklo" class="catalog__item production"
                   style='background-image: url("assets/img/catalog/production/mini/steklo.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">стекло</div>
                        <div class="catalog__item-price">от 600 рублей</div>
                    </div>
                </a>

                <a href="/osteklenie-balkonov-lodzhij" class="catalog__item production"
                   style='background-image: url("assets/img/catalog/production/mini/osteklenie-balkonov-lodzhij.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">балконы и лоджии</div>
                        <div class="catalog__item-price">от 3200 рублей</div>
                    </div>
                </a>

                <a href="/podokonniki" class="catalog__item production"
                   style='background-image: url("assets/img/catalog/production/mini/podokonniki.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">подоконники</div>
                        <div class="catalog__item-price">от 300 рублей</div>
                    </div>
                </a>

            </div>

            <div class="catalog__group group-aluminum">
                <a href="/alyuminievye-okna" class="catalog__item aluminium"
                   style='background-image: url("assets/img/catalog/aluminum/mini/alyuminievye-okna.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">окна</div>
                        <div class="catalog__item-price">от 3200 рублей</div>
                    </div>
                </a>

                <a href="/alyuminievye-dveri" class="catalog__item aluminium"
                   style='background-image: url("assets/img/catalog/aluminum/mini/alyuminievye-dveri.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">двери</div>
                        <div class="catalog__item-price">от 6000 рублей</div>
                    </div>
                </a>

                <a href="/zimnie-sady" class="catalog__item aluminium"
                   style='background-image: url("assets/img/catalog/aluminum/mini/zimnie-sady.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">зимние сады</div>
                        <div class="catalog__item-price">от 14000 рублей</div>
                    </div>
                </a>

                <a href="/alyuminievye-peregorodki" class="catalog__item aluminium"
                   style='background-image: url("assets/img/catalog/aluminum/mini/alyuminievye-peregorodki.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">перегородки</div>
                        <div class="catalog__item-price">от 3700 рублей</div>
                    </div>
                </a>

            </div>

            <div class="catalog__group group-plastic">
                <a href="/plastikovye-okna" class="catalog__item plastic"
                   style='background-image: url("assets/img/catalog/plastic/mini/plastikovye-okna.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">окна</div>
                        <div class="catalog__item-price">от 2500 рублей</div>
                    </div>
                </a>

                <a href="/plastikovye-dveri" class="catalog__item plastic"
                   style='background-image: url("assets/img/catalog/plastic/mini/plastikovye-dveri.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">двери</div>
                        <div class="catalog__item-price">от 5800 рублей</div>
                    </div>
                </a>

                <a href="/plastikovye-peregorodki" class="catalog__item plastic"
                   style='background-image: url("assets/img/catalog/plastic/mini/plastikovye-peregorodki.jpg")'>
                    <div class="catalog__item-info">
                        <div class="catalog__item-name">перегородки</div>
                        <div class="catalog__item-price">от 3300 рублей</div>
                    </div>
                </a>


            </div>

        </div>
    </section>
    <!--------------- /ПРОДУКТЫ -------------->

    <!--------------- ОТЗЫВЫ --------------->
    <section id="reviews" class="wp">
        <div class="hor-center">
            <div class="title underline">отзывы</div>
        </div>

        <div class="reviews__items">
            <?php
            $sql = "SELECT * FROM `comments` WHERE `active` = 1 LIMIT 6";
            $stmt = $dbh->query($sql);
            $comments = $stmt->fetchAll(2);
            foreach ($comments as $comment) :
                ?>
                <div class="reviews__item">
                    <div class="item__author"><?= htmlentities($comment['name']) ?></div>
                    <div class="item__description"><?= htmlentities($comment['comment']) ?></div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </section>
    <!--------------- /ОТЗЫВЫ -------------->

    <!--------------- ДОБАВЛЕНИЕ ОТЗЫВА --------------->
    <section id="callback" class="wp">
        <div class="title">добавить отзыв</div>

        <form action="" method="POST" class="header__callback">
            <div class="input__group">
                <input name="name" type="text" class="form__input" style="background-image: url('assets/img/icon_author.png')"
                       placeholder="имя" required>
                <select name="category" class="form__input" style="background-image: url('assets/img/icon_category.png')">
                    <option value="Отзыв">Отзыв</option>
                    <option value="Предложение">Предложение</option>
                </select>
            </div>
            <textarea name="comment" id="" class="form__textarea" placeholder="Комментарий" required></textarea>
            <div class="hor-right">
                <button class="form__button">отправить</button>
            </div>
        </form>
    </section>
    <!--------------- /ДОБАВЛЕНИЕ ОТЗЫВА -------------->

<?php
video_callbacks();
?>

    <!--------------- ОБРАТНЫЙ ЗВОНОК --------------->
    <section id="callback-call" class="wp">
        <?php
        head_callback();
        ?>
    </section>
    <!--------------- /ОБРАТНЫЙ ЗВОНОК -------------->


<?php
footer_full();
?>