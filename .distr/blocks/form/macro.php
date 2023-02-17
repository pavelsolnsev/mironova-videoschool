{% macro form(form, form_class, title_class='', button_class='', title='Регистрация', button='Зарегистрироваться', form_text='на курс', add_fields, exclude_fields) %}
<form action="<?=$action?>&form={{ form }}" class="form {{form_class}}">
  <div class="form__wrapper">
    {% if title.length %}
    <div class="form__title {{ title_class }}">{{ title | safe }}</div>
    {% endif %}

    {% if form_text.length %}
    <div class="form__text">{{ form_text | safe }}</div>
    {% endif %}

    <div class="form__items">
      {% if not exclude_fields.name %}
      {{ form_item( 'name', 'text', 'Ваше имя', true ) }}
      {% endif %}

      {% if not exclude_fields.phone %}
      {{ form_item( 'phone', 'text', '+7(_ _ _)_ _ _-_ _-_ _', true ) }}
      {% endif %}

      {% if not exclude_fields.email %}
      {{ form_item( 'email', 'email', 'E-MAIL', true ) }}
      {% endif %}

      {% if add_fields.length %}
      {% for item in add_fields %}
      {{ form_item( item.name, item.type, item.placeholder, item.required, item.value ) }}
      {% endfor %}
      {% endif %}

      <div class="form__item form__item_button"><button class="{{ button_class }}" type="submit">{{ button }}</button></div>

      <div class="form__more">
        <label class="form__footer">
          <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
            <div class="form__footer-checkbox-icon lazy"></div>
          </div>
          <div class="form__footer-text">Нажимая на кнопку, я&nbsp;даю согласие на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также соглашаюсь c&nbsp;<a href="#privacy" class="fancybox">политикой конфиденциальности</a>.</div>
        </label>
      </div>
    </div><!-- form__items -->
  </div>


</form>
{% endmacro %}


{% macro form_item(name, type, placeholder, required, value) %}
<div class="form__item form__item_{{ type }} {{ 'd-none' if type == 'hidden' }}">
  {% if type == 'textarea' %}
  <textarea name="{{ name }}" placeholder="{{ placeholder }}" class="form__input form__input_textarea" {{ 'required' if required }}></textarea>
  {% else %}
  <input name="{{ name }}" type="{{ type }}" placeholder="{{ placeholder }}" class="form__input" {{ 'min=1' if type == 'number' }} {{ 'required' if required }} value="{{ value }}">
  {% endif %}
</div><!-- form__item -->
{% endmacro %}