<?php
$title = 'Контакты';
head();
?>

<!--------------- ШАПКА --------------->
<header id="header">
    <div class="header__fixed">
        <?php
        hat();
        menu();
        ?>
    </div>
</header>
<!--------------- /ШАПКА -------------->

<!--------------- КОНТАКТЫ --------------->
<section id="contacts" class="contacts wp">
    <?php
    banner();
    ?>

    <div class="hor-center">
        <h2 class="title underline">контакты</h2>
    </div>

    <div class="common_description">
        <p>Компания "Al-Строй" рада сотрудничеству с новыми клиентами.</p>
        <p>Принимаем Ваши предложения и пожелания. После отправки, с Вами свяжется менеджер
        для уточнения деталей и ответит на интересующие Вас вопросы.</p>
    </div>

    <form class="header__callback" method="POST">
        <input type="text" class="form__input" placeholder="Имя" style="background-image: url('assets/img/icon_author.png')">
        <input type="text" class="form__input" placeholder="Номер телефона" style="background-image: url('assets/img/icon_phone.png')">
        <button class="form__button">отправить</button>
    </form>

    <div class="common_description common_description-title">
        <div>420088, г. казань, проспект победы д. 206 офис 201</div>
        <div>тел.: <a href="tel:+7 (843) 203-35-30">+7 (843) 203-35-30</a></div>
        <div>e-mail: <a href="mailto:info@alukonkazan.ru">info@alukonkazan.ru</a></div>
    </div>

    <div class="common_description">
        <div>На данной странице представлена информация, с помощью которой можно
        заказать следующие услуги компании:</div>
        <ul class="contacts__list">
            <li>изготовление и доставка продукции;</li>
            <li>профессиональная установка изделий с учётом существующих стандартов
            и пожеланий клиентов;</li>
            <li>бесплатный выезд замерщика</li>
        </ul>
    </div>

    <div class="common_description">
        Если Вы пожелаете приобрести недорогие пластиковые окна (Казань), звоните, либо обращайтесь
        через интернет. Мы обещаем приемлемые цены и качественный сервис. При этом всегда выполняем то, что пообещали.
        Это подтверждают многочисленные отзывы благодарных потребителей.
    </div>

    <div class="common_description common_description-title">
        схема проезда
    </div>

    <div class="common_description">
        На сайте опубликована схема проезда к нашему офису. Здесь можно определить оптимальный маршрут из любого
        района города Казань.
    </div>
</section>

<!--------------- КАРТА --------------->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2242.434392373391!2d49.208102416045065!3d55.80305869558209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415eb263b8b3a7c5%3A0xd7a69448120700b7!2z0L_RgNC-0YHQvy4g0J_QvtCx0LXQtNGLLCAyMDYsINCa0LDQt9Cw0L3RjCwg0KDQtdGB0L8uINCi0LDRgtCw0YDRgdGC0LDQvSwgNDIwMDg4!5e0!3m2!1sru!2sru!4v1522407253118"
        width="100%" height="500px
" frameborder="0" style="border:0" allowfullscreen></iframe>

<!--------------- /КАРТА -------------->

<section class="contacts wp">
    <h2 class="common_description common_description-title">доставка и монтаж продукции
    осуществляется по всей казани и пригороду</h2>
    <div class="common_description">
        Компания "AL-Строй" - это качественное производство, добросовестная реализация,
        а также профессиональная установка пластиковых и алюминиевых конструкций. Наша продукция помогает
        обустроить крыши, фасадные стены и входные группы различных архитектурных объектов. Услугами
        компании пользуются как частные лица, так и всевозможные организации.
    </div>
    <div class="common_description">
        Мы выполняем доставку и установку продукции на территории города Казань, а также
        в близлежащих населённых пунктах.
    </div>
</section>

<!--------------- /КОНТАКТЫ -------------->

<?php
footer();
?>