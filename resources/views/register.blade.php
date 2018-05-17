@extends('layouts.layout')

@section('content')

<div class="g_123 layout-content-wrap"> <div class="l-content js-l-content clearfix">
  <div class="login-form">
 
 <form method="post" class="form registration-form js-registration-form" novalidate="" autocomplete="off"> <h2 class="login-form-title">Регистрация</h2> <div class="form-fieldset form-fieldset_grid"> <label class="form-radio registration-form-radio-inline"> <input class="js-registration-form-type" type="radio" name="type" value="0" tabindex="1" checked=""> <span class="form-radio__label">Частное лицо</span> </label> <label class="form-radio registration-form-radio-inline"> <input class="js-registration-form-type" type="radio" name="type" value="1" tabindex="1"> <span class="form-radio__label">Компания</span> </label> </div> <div class="form-fieldset form-fieldset_grid"> <input type="text" maxlength="30" name="name" value="" placeholder="Ваше имя" class="login-form-input js-registration-form-name" tabindex="2"> <div class="form-fieldset__error js-form-fieldset__error js-registration-form-name-error is-hidden"></div> <div class="form-fieldset__help js-form-fieldset__help js-registration-form-name-help">Чтобы общаться с покупателями в чате</div> </div> <div class="form-fieldset form-fieldset_grid registration-form-manager"> <input type="text" placeholder="Контактное лицо" maxlength="30" class="login-form-input js-registration-form-manager-input" name="manager" value="" tabindex="3"> <div class="form-fieldset__error js-form-fieldset__error"></div> </div>
  <div class="form-fieldset form-fieldset_grid">
  <input type="email" placeholder="Электронная почта" maxlength="64" class="login-form-input js-registration-form-email" name="email" value="" tabindex="4" autocomplete="username email">
  <div class="form-fieldset__error js-form-fieldset__error is-hidden">
    </div> <div class="form-fieldset__help js-form-fieldset__help">Для входа на сайт и сообщений о ваших объявлениях</div> </div>
 
 <div class="form-fieldset form-fieldset_grid registration-form-phone js-registration-form-phone"> <input class="registration-form-phone-input js-registration-form-phone-input" type="text" name="phone" value="" placeholder="Номер телефона" maxlength="30" tabindex="5"> <div class="tooltip tooltip_right js-registration-form-phone-tooltip"> <div class="tooltip-arrow"></div>
 Частные пользователи могут использовать только<br>
 мобильные номера телефонов
 </div> <a href="/info/mobile_phones?plain" class="i i-help js-new-window" data-width="620"></a> <div class="form-fieldset__error js-form-fieldset__error is-hidden"></div> <div class="form-fieldset__help js-form-fieldset__help">Только мобильные номера телефонов</div> </div>
   <input type="text" class="hidden js-registration-form-email-fake" maxlength="64" tabindex="-1">
 
 <div class="form-fieldset form-fieldset_grid js-registration-form-password form-password-enabled">
  <input type="password" placeholder="Пароль" name="password" class="login-form-input form-password-input" maxlength="70" tabindex="6" autocomplete="new-password"><i class="form-password-eye"></i> <div class="form-fieldset__error js-form-fieldset__error is-hidden"></div> <div class="form-fieldset__help js-form-fieldset__help">
 От 6 до 70 знаков со спецсимволами и цифрами
 </div> </div>
  <fieldset class="js-form-captcha form-fieldset form-captcha form-captcha-big is-visible  form-fieldset_grid ">
  <input type="text" class="form-captcha-input js-captcha-input" value="" autocomplete="off" autocapitalize="off" autocorrect="off" placeholder="Текст с картинки" name="captcha" tabindex="7"><img class="form-captcha-image js-form-captcha-image" src="/captcha?1526488510"><div class="js-form-captcha-refresh"> <i class="form-captcha-refresh"></i> <span class="pseudo-link">Обновить картинку</span> </div> <span class="form-fieldset__error js-form-fieldset__error"></span> </fieldset>
  
 <div class="form-fieldset form-fieldset_grid"> <label class="form-checkbox"> <input type="checkbox" name="subscribe" value="1" checked="" tabindex="8"> <span class="form-checkbox__label">Получать новости и специальные предложения Авито</span> </label> </div> <div class="form-fieldset form-fieldset_grid login-form-submit-fieldset">
  <input type="hidden" class="js-token" name="token[5214534835466]" value="292d55ebf39ea7e7"> <button type="submit" class="button button-origin button-origin-green button-origin_large js-submit-button" tabindex="9">
 Зарегистрироваться
 </button> </div> <div class="registration-form-fields-helper js-smart-helper">
 Введите:
 <span class="registration-form-fields-helper-tooltip pseudo-link" data-field="name">Ваше имя</span> <span class="registration-form-fields-helper-tooltip pseudo-link" data-field="email">Эл. почту</span> <span class="registration-form-fields-helper-tooltip pseudo-link" data-field="phone">Телефон</span> <span class="registration-form-fields-helper-tooltip pseudo-link" data-field="password">Пароль</span> <span class="registration-form-fields-helper-tooltip pseudo-link" data-field="captcha">Текст с картинки</span> </div> <div class="line-separator line-separator_outer-offset">или</div>
  <div class="social-auth js-social-auth" data-page-type="registration"> <div class="social-auth-list">
 <span class="btn-social btn-social_vk js-social-auth__btn" data-provider="1"> <i class="i-social i-social_vk"></i> </span>
<span class="btn-social btn-social_ok js-social-auth__btn" data-provider="3"> <i class="i-social i-social_ok"></i> </span>
<span class="btn-social btn-social_fb js-social-auth__btn" data-provider="2"> <i class="i-social i-social_fb"></i> </span>
<span class="btn-social btn-social_gp js-social-auth__btn" data-provider="5"> <i class="i-social i-social_gp"></i> </span>
 </div> <div class="social-auth-error is-hidden js-social-auth-error"></div> </div>

 <div class="registration-form-accept-conditions"> <input type="hidden" name="agree" value="1">
 Нажимая «Зарегистрироваться» или выбирая социальную сеть, вы&nbsp;принимаете условия
 <a target="_blank" title="Пользовательское соглашение" href="/info/polzovatelskoe_soglashenie">
 пользовательского&nbsp;соглашения
 </a> </div> </form> <div class="login-form-footer login-form-footer_with-offset">
 Уже зарегистрированы?
 <a href="/profile">Войти</a> </div> </div>
 <script type="text/template" id="js-cookie-support"> <div class="cookie-support-icon"></div> <div class="cookie-support-title">Произошла ошибка</div> <div class="cookie-support-body">Для продолжения работы включите поддержку cookies<br>в&nbsp;настройках вашего браузера.</div> <button type="button" class="button button-origin js-reload-page">Я включил поддержку cookies</button> </script>
 </div>
   <div class="js-footer"><div data-reactroot="" class="l-footer footer-root-17A-K  "><ul class="footer-nav-15hen"><li><a href="//www.avito.ru/additem" title="Подать объявление" class="footer-item-bHkmw">Подать объявление</a></li><li><a href="//www.avito.ru/kemerovskaya_oblast_mezhdurechensk/" class="footer-item-bHkmw">Объявления</a></li><li><a href="//www.avito.ru/shops" class="footer-item-bHkmw">Магазины</a></li><li><a href="https://support.avito.ru" target="_blank" rel="noopener noreferrer" class="footer-item-bHkmw">Помощь</a></li><li><a href="//www.avito.ru/safety" class="footer-item-bHkmw">Безопасность</a></li><li><a href="//www.avito.ru/info/reklama_na_saite" rel="nofollow" class="footer-item-bHkmw">Реклама на сайте</a></li><li><a href="//www.avito.ru/company" class="footer-item-bHkmw">О компании</a></li><li><a href="//www.avito.ru/company/job" class="footer-item-bHkmw">Карьера</a></li><li><a href="//www.avito.ru/info/apps" class="footer-item-bHkmw"><strong>Мобильное приложение</strong></a></li></ul><div class="footer-info-2xlD6"><div class="footer-about-2C2m6"><!-- react-text: 24 -->© Avito — сайт объявлений. Использование сайта, в том числе подача объявлений, означает согласие с <!-- /react-text --><a href="//www.avito.ru/info/polzovatelskoe_soglashenie" class="footer-link-3roHv">Пользовательским соглашением</a><!-- react-text: 26 -->.<!-- /react-text --><br><!-- react-text: 28 -->Оплачивая услуги на сайте, вы принимаете <!-- /react-text --><a href="//www.avito.ru/info/oferta" class="footer-link-3roHv">оферту</a><!-- react-text: 30 -->. <!-- /react-text --><a href="//www.avito.ru/help/tech_browser" class="footer-link-3roHv">Информация о cookies</a><!-- react-text: 32 -->. <!-- /react-text --></div></div></div></div>   </div>

@endsection