<script>
    $(document).ready(function() {
        $('#header__callback .form__button').on('click', _ => {
            $('#callback__form_call').val($('#header__callback .form__input').val());
            $('#callback__form_checkbox').prop('checked', 'true');
        });

        $('#callback-call .form__button').on('click', _ => {
            $('#callback__form_call').val($('#callback-call .form__input').val());
            $('#callback__form_checkbox').prop('checked', 'true');
        });
    });
</script>
</body>
</html>