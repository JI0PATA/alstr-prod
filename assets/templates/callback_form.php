<input type="checkbox" id="callback__form_checkbox" class="hidden">
<div id="callback__form">
    <label for="callback__form_checkbox" id="callback__close-button"></label>

    <form action="/order_callback" class="header__callback" id="callback__form_input" method="POST">
        <h3>Оставьте свои данные и наш специалист свяжется с Вами!</h3>
        <input type="text" class="form__input" placeholder="Имя"
               style="background-image: url('assets/img/icon_author.png')" id="callback__form_name" name="name">
        <input type="number" class="form__input" placeholder="Номер телефона"
               style="background-image: url('assets/img/icon_phone.png')" id="callback__form_call" name="call">
        <button class="form__button">отправить</button>
    </form>
</div>
<label for="callback__form_checkbox" id="callback__overlay"></label>
