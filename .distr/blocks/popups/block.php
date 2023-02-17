<div class="popup popup-reg" id="popup-reg">
  {{ form.form( 'reg', form_class='form_vertical', button_class='form__button button' ) }}
</div>

<div class="popup popup-call" id="popup-call">
  {{ form.form( 'callme', form_class='form_vertical', title='Заполните заявку', form_text='мы вам перезвоним', button='Отправить', button_class='form__button button') }}
</div>

<div class="popup popup-pay" id="popup-pay">
  {{ form.form( 'ticketless', form_class='form_vertical', title='Оплатить', form_text='курс', button='Оплатить', button_class='form__button button', add_fields=[{name: 'product_id', type: 'hidden', value: '5320977'}, {name: 'form', type: 'hidden', value: 'ticketless'}] ) }}
</div>

<div class="popup popup-success" id="popup-success">

  <div class="popup-success__content">
    <div class="popup-success__logo"><img src="img/popups/popup_check.png" alt="check"></div>
    <div class="popup-success__text">Ваша заявка принята, мы&nbsp;отправляем чек-лист на&nbsp;вашу почту!</div>
    <button class="button-link button-link_yellow popup-success__button" id="ok">ок</button>
  </div>

</div>