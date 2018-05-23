@extends('layouts.layout')

@section('addcss'){{URL::asset($css)}}@endsection

@section('content')

<div class="layout-internal col-12"> <div class="l-content js-l-content clearfix">
  <div class="item-form"> <h1 class="item-form__title">Подать объявление</h1>
  <div class="col-3 rules"> <div class="warning"> <div>
 Все объявления должны соответствовать
 <a href="https://support.avito.ru/articles/200026968" target="_blank">правилам Avito</a> </div> <ul class="rules__list"> <li class="rules__item">
 Не подавайте одно и то же объявление повторно.
 <a href="https://support.avito.ru/articles/200026408#duplicates" target="_blank">Почему?</a> </li> <li class="rules__item">
 Не указывайте телефон, электронную почту или адрес сайта в описании или на фото
 </li> <li class="rules__item">
 Не предлагайте <a href="https://support.avito.ru/articles/200026898" target="_blank">запрещённые
 товары и услуги</a> </li> </ul> </div> </div>
            
<form class="form js-submit js-item-edit-form" method="post" novalidate="" data-action="add">
  <input type="hidden" class="js-token" name="token[8922334127118]" value="1283cd1f8b14af25"> <div class="js-mini-antifraud-disclaimer"></div>
             
<div class="form-section form-section_blue col-9 auth-form js-auth-form login user-private" data-auth-state="login" data-auth-user-type="1" data-auth-params="{&quot;multiname&quot;:true,&quot;canHidePhone&quot;:false,&quot;multiemails&quot;:false,&quot;hasActiveShop&quot;:false,&quot;nameMaxLength&quot;:30,&quot;nameMaxLengthHasShop&quot;:60}">
	<h2 data-login-text="Пожалуйста, представьтесь" data-view-text="Контактная информация" class="form-section__title"> <span class="pseudo-link link-change is-state if-state-view js-link-change">Изменить</span> </h2> <input type="hidden" class="js-token" name="token[8922334127118]" value="1283cd1f8b14af25"> <input type="hidden" name="email" data-read-id="email" value=""> <input type="hidden" data-read-id="state" value="login" name="authState">
  <input type="hidden" data-write-id="source" value="add" name="source">
   <fieldset class="form-fieldset form-fieldset_socials socials js-socials is-state if-state-login"> <ul class="socials-list"> <li class="socials-social js-socials-item"> <input type="radio" name="socials" id="socials-email" value="email" data-write-id="socialsKey" data-provider="email" class="socials-radio js-socials-radio" checked=""> <label for="socials-email" class="socials-label">
 Электронная почта
 </label> </li>
  <li class="socials-social socials-social_icon-wrapper js-socials-item"> <input type="radio" name="socials" id="socials-vk" value="1" data-provider="1" class="socials-radio js-socials-radio" data-write-id="socialsKey"> <label for="socials-vk" class="socials-label socials-label_icon socials-label_vk"> <i class="socials-icon socials-icon_vk"></i> </label> </li>
  <li class="socials-social socials-social_icon-wrapper js-socials-item"> <input type="radio" name="socials" id="socials-ok" value="3" data-provider="3" class="socials-radio js-socials-radio" data-write-id="socialsKey"> <label for="socials-ok" class="socials-label socials-label_icon socials-label_ok"> <i class="socials-icon socials-icon_ok"></i> </label> </li>
  <li class="socials-social socials-social_icon-wrapper js-socials-item"> <input type="radio" name="socials" id="socials-fb" value="2" data-provider="2" class="socials-radio js-socials-radio" data-write-id="socialsKey"> <label for="socials-fb" class="socials-label socials-label_icon socials-label_fb"> <i class="socials-icon socials-icon_fb"></i> </label> </li>
  <li class="socials-social socials-social_icon-wrapper js-socials-item"> <input type="radio" name="socials" id="socials-gp" value="5" data-provider="5" class="socials-radio js-socials-radio" data-write-id="socialsKey"> <label for="socials-gp" class="socials-label socials-label_icon socials-label_gp"> <i class="socials-icon socials-icon_gp"></i> </label> </li>
  </ul> 
  	<div class="socials-texts">
  		<div class="socials-text socials-text_register socials-text_hidden js-socials-text js-socials-text-register">
  		<p class="has-bold">Аккаунт в&nbsp;социальной сети пока не&nbsp;связан с&nbsp;аккаунтом </p> <p>Для продолжения уточните, пожалуйста, недостающие данные</p>
  		</div>
  		<div class="socials-text socials-text_server-error socials-text_hidden js-socials-text js-socials-text-server-error"></div>
	</div>
</fieldset>

 <fieldset class="form-fieldset form-fieldset_login js-fieldset-login is-readonly-if-view is-readonly-if-view-edit is-readonly-if-phone-edit">
 	<label class="form-fieldset__label">Электронная почта</label>
 	<div class="is-state if-state-email-edit if-state-login if-state-login-with-captcha if-state-login-successed if-state-login-failed">
 		<div class="form-fieldset__context clearfix">
 			<div class="col-4" style="position: relative;"> <input type="email" class="col-4 js-login-input" value="" data-write-id="email" maxlength="64" name="email"> <i class="is-state if-state-login-with-captcha if-state-login-successed if-state-login-failed auth-form-cross js-link-change"></i>
 			</div>
 		</div> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error"></span>
 		<div class="is-state if-state-login-successed">
 			<div class="auth-form-descr auth-form-descr_exists">Вы –&nbsp;зарегистрированный пользователь Avito.<br>Введите свой пароль для входа на сайт
 			</div>
 		</div>
 	</div>
 	<div class="is-state if-state-view if-state-phone-edit"> <div class="auth-form-descr col-4" data-read-id="email"></div> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error"></span> </div> <div class="is-state if-state-view-edit"> <div class="is-param if-param-multiemails"> <input type="email" class="col-4" value="" data-write-id="email" maxlength="64" name="email" tabindex="-1"> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error col-4"></span> </div> <div class="is-param if-param-not-multiemails"> <div class="auth-form-descr col-4" data-read-id="email"></div> </div> </div>
</fieldset>
<fieldset class="form-fieldset form-fieldset_questions is-readonly-if-view is-readonly-if-phone-edit">
	<label class="form-fieldset__label">Разрешить сообщения</label>
	<div> <label class="form-switch js-form-switch"> <input class="form-switch__input" type="checkbox" name="allow_mails" value="1" disabled="" data-write-id="allowSendEmail" tabindex="-1"> <span class="form-switch__interface"></span> </label> </div>
</fieldset> <div class="form__linebreak"></div>
<fieldset class="form-fieldset form-fieldset_type"> <label class="form-fieldset__label">Кто вы?</label> <div class="is-state if-state-login-failed"> <div class="form-radio-group"> <label class="form-radio-group__label"> <input type="radio" name="private" value="1" data-write-id="private" disabled="" checked="" tabindex="-1"> <span class="form-radio-group__item">Частное лицо</span> </label> <label class="form-radio-group__label"> <input type="radio" name="private" value="0" data-write-id="private" tabindex="-1" disabled=""> <span class="form-radio-group__item">Компания</span> </label> </div> </div>
</fieldset>
<fieldset class="form-fieldset is-user-state if-user-private form-fieldset_name is-readonly-if-view is-readonly-if-phone-edit is-readonly-if-not-multiname is-not-readonly-if-email-edit">
	<label class="form-fieldset__label">Ваше имя</label> <div class="is-state if-state-view if-state-phone-edit"> <div class="auth-form-descr col-4" data-read-id="name"></div> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error"></span> <span class="pseudo-link link-change is-state if-state-phone-edit js-link-change">Изменить</span> </div> <div class="is-state if-state-login-failed if-state-email-edit"> <input type="text" name="seller_name" class="col-4" value="" data-write-id="name" maxlength="30" disabled="" tabindex="-1"> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error col-4"></span> </div> <div class="is-state if-state-view-edit"> <span class="is-param if-param-multiname"> <input type="text" name="seller_name" class="col-4" value="" data-write-id="name" maxlength="30" disabled="" tabindex="-1"> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error col-4"></span> </span> <span class="is-param if-param-not-multiname"> <div class="auth-form-descr col-4" data-read-id="name"></div> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error"></span> </span> </div>
</fieldset>
<fieldset class="form-fieldset is-user-state if-user-legal form-fieldset_companyName is-readonly-if-view is-readonly-if-phone-edit is-readonly-if-not-multiname">
	<label class="form-fieldset__label">Название компании</label> <div class="is-state if-state-view if-state-phone-edit"> <div class="auth-form-descr col-4" data-read-id="companyName"></div> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error"></span> <span class="pseudo-link link-change is-state if-state-phone-edit js-link-change">Изменить</span> </div> <div class="is-state if-state-login-failed"> <input type="text" class="col-4" name="seller_name" value="" data-write-id="companyName" maxlength="30" disabled="" tabindex="-1"> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error col-4"></span> </div> <div class="is-state if-state-view-edit"> <span class="is-param if-param-multiname"> <input type="text" class="col-4" name="seller_name" value="" data-write-id="companyName" maxlength="30" disabled="" tabindex="-1"> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error col-4"></span> </span> <span class="is-param if-param-not-multiname"> <div class="auth-form-descr col-4" data-read-id="companyName"></div> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error"></span> </span> </div>
</fieldset>
<fieldset class="form-fieldset form-fieldset_manager is-user-state if-user-legal form-fieldset_contact-person is-readonly-if-view is-readonly-if-phone-edit">
	<label class="form-fieldset__label">Контактное лицо</label> <div class="is-state if-state-view if-state-phone-edit"> <div class="auth-form-descr col-4" data-read-id="manager"></div> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error"></span> </div> <div class="is-state if-state-login-failed if-state-view-edit"> <input type="text" name="manager" class="col-4" value="" data-write-id="manager" maxlength="30" disabled="" tabindex="-1"> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error col-4"></span> <span class="form-fieldset__help">Необязательное поле</span> </div>
</fieldset>
<fieldset class="form-fieldset form-fieldset_phone is-readonly-if-view">
	<label class="form-fieldset__label">Телефон</label> <div class="is-state if-state-login-failed if-state-view-edit if-state-phone-edit"> <input type="text" class="col-4 is-state if-state-login-failed" name="phone" value="" data-write-id="phone" disabled="" tabindex="-1"> <div class="is-state if-state-view-edit if-state-phone-edit"> <div class="form-select-v2 js-form-select-v2 col-3"> <select name="phone" disabled="" data-write-id="phones" data-watch-id="phone" data-read-id="phone" tabindex="-1"><option value="">Другой номер</option></select> </div> <div class="col-2 hide-phone"> <label class="form-checkbox is-state if-state-view-edit"> <input type="checkbox" name="hide_phone" data-write-id="hidePhone" tabindex="-1" disabled=""> <span class="form-checkbox__label">Скрыть номер</span> </label> </div> </div> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error col-4"></span> <span class="form-fieldset__help is-user-state if-user-private">Только мобильные номера</span> </div> <div class="is-state if-state-view"> <div class="auth-form-descr col-4" data-read-id="phone"></div> </div> </fieldset> <fieldset class="form-fieldset form-fieldset_phone-new "> <label class="form-fieldset__label js-phone-new-label">Новый номер</label> <div class="is-state if-state-phone-edit if-state-email-edit if-state-view-edit"> <input type="text" class="col-3" value="" name="phone" data-write-id="phoneNew" disabled="" tabindex="-1"> </div> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error col-4"></span> <span class="form-fieldset__help is-state if-state-email-edit">Только мобильные номера</span> </fieldset> <fieldset class="form-fieldset form-fieldset_password"> <label class="form-fieldset__label">Пароль</label> <div class="is-state if-state-login-successed"> <input type="password" class="col-4" value="" name="password" tabindex="-1" disabled=""> <span class="form-fieldset__error">Заполните поле</span> <span class="form-fieldset__error form-fieldset__error_js js-error col-4"></span> <div class="auth-form-descr auth-form-descr_password form-fieldset__quick-expire col-4"> <label class="form-checkbox"> <input type="checkbox" name="quick_expire" data-write-id="quickExpire" tabindex="-1" disabled=""> <span class="form-checkbox__label">Чужой компьютер</span> </label> <a target="_blank" class="pseudo-link lost-password" tabindex="-1">Забыли пароль?</a> </div> </div> </fieldset>
 <fieldset class="js-form-captcha form-fieldset form-captcha form-fieldset_captcha  is-hidden">
  <label class="form-fieldset__label" for="captcha-field">Текст с картинки</label>
  <div class="form-fieldset__context"> <input id="captcha-field" type="text" class="form-captcha-input js-captcha-input" value="" autocomplete="off" autocapitalize="off" autocorrect="off" name="captcha" disabled="" tabindex="-1"><img class="form-captcha-image js-form-captcha-image" src="/captcha?1527053912"><div class="form-captcha-refresh js-form-captcha-refresh"></div> </div> <span class="form-fieldset__error"></span> <span class="form-fieldset__error form-fieldset__error_js js-error"></span>
</fieldset>

 <fieldset class="form-fieldset form-action"> <div class="auth-form-descr col-4"> <button class="button button-origin button-origin-yellow js-submit is-state if-state-login if-state-login-with-captcha if-state-login-successed if-state-login-failed if-state-view-edit"> <span class="is-state if-state-login if-state-login-with-captcha if-state-login-successed if-state-login-failed">Продолжить</span> <span class="is-state if-state-view-edit">Сохранить</span> </button> <span class="pseudo-link cancel-link is-state if-state-view-edit">Отменить</span> </div>
 </fieldset>
</div>
 

   </div>

@endsection