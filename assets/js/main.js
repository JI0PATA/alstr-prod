const qs = qs => document.querySelector(qs);
const qsa = qs => document.querySelectorAll(qs);

$(document).ready(function () {
    qs('.no_transition').classList.remove('no_transition');

    if (window.pageYOffset > 0) qs('.header__fixed').classList.add('solid');

    document.addEventListener('scroll', _ => {
        if (qs('.header__fixed') !== null && qs('.header__fixed').parentNode.classList.contains('index')) {
            if (window.pageYOffset > 0) qs('.header__fixed').classList.add('solid');
            else qs('.header__fixed').classList.remove('solid');
        }
    });

    qsa(`label.product-more`).forEach(item => {
        item.addEventListener('click', _ => {
            let product = JSON.parse(item.dataset.product);

            let template = $(`
            <div id="callback__product">
                <div class="callback__img">
                    <img src="${product.img}" alt="">
                </div>
                <div class="callback__info">
                    <div class="callback__title">${product.title}</div>
                    <div class="callback__description">${product.description}</div>
                </div>
            </div>
            `);

            $('#callback__product').remove();
            $('#callback__form').prepend(template);
        });
    });

    qs('input#callback__form_checkbox').addEventListener('change', item => {
        if (!item.target.checked) setTimeout(_ => $('#callback__product').remove(), 300);
    });

});