@extends('layouts.layout')

@section('content')

<div class="g_123 layout-content-wrap"> <div class="l-content js-l-content clearfix">
<div class="b-profile-sidebar g_30">
<div class="js-profile-sidebar">
<div data-reactroot="" data-active-class="profile-sidebar-nav-link-active-3jUuT" class="profile-sidebar-nav-root-3pHnl js-side-menu-sections">
<ul class="profile-sidebar-nav-list-1558y">
<li class="profile-sidebar-nav-item-39es7">
<a href="/profile" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
profile-sidebar-nav-link-active-3jUuT">Мои объявления</a>
</li>
<li class="profile-sidebar-nav-item-39es7
profile-sidebar-nav-item-closed-6Y_IP                                                         js-side-menu-list-item-messenger">
<a href="/profile/messenger" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
">Сообщения</a>
<ul class="profile-sidebar-nav-submenu-khOL5"><li class="profile-sidebar-nav-item-39es7"><a href="/profile/messenger/blacklist" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
            ">Заблокированные</a></li></ul></li><li class="profile-sidebar-nav-item-39es7
profile-sidebar-nav-item-closed-6Y_IP                                                        "><a href="/account" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
">Кошелёк</a><ul class="profile-sidebar-nav-submenu-khOL5"><li class="profile-sidebar-nav-item-39es7"><a href="/account/pay_service" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
            ">Услуги</a></li><li class="profile-sidebar-nav-item-39es7"><a href="/account/fees_packages" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
            ">Пакеты размещений</a></li><li class="profile-sidebar-nav-item-39es7"><a href="/account/history" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
            ">История операций</a></li><li class="profile-sidebar-nav-item-39es7"><a href="/account/cv_packages" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
            ">Контакты резюме</a></li></ul></li><li class="profile-sidebar-nav-item-39es7
                                                 js-side-menu-list-item-nc"><a href="/profile/notifications" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
">Уведомления</a></li><li class="profile-sidebar-nav-item-39es7
                                                "><a href="/reklama/magazin-na-avito" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
"><!-- react-text: 25 -->Avito для Бизнеса<!-- /react-text --><i class="profile-sidebar-nav-link-new-1oPhB "></i></a></li><li class="profile-sidebar-nav-item-39es7
                                                "><a href="/avitopro?utm_source=avito&amp;utm_campaign=v1&amp;utm_medium=sidebar" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
"><!-- react-text: 29 -->Avito PRO<!-- /react-text --><i class="profile-sidebar-nav-link-new-1oPhB "></i></a></li><li class="profile-sidebar-nav-item-39es7
                                                "><a href="/profile/settings" class="profile-sidebar-nav-link-2HpMk js-sidebar-menu-list-item-link
">Настройки</a></li></ul></div>
</div><div class="js-category-menu"><div data-reactroot="" class="category-menu-root-2qJTd"><ul class="category-menu-list-dGfYN"><li data-item="data-item" class="category-menu-item-2Y0NG
                     category-menu-item-opened-1aXxN
"><span class="category-menu-number-2joGS"></span><a title="Все категории" href="/profile/items/active/rossiya" class="category-menu-link-3r857 category-menu-link-active-1T5YF">Все категории</a></li><li data-item="data-item" class="category-menu-item-2Y0NG
category-menu-item-expandable-2tPRO                             category-menu-item-closed-12W8o"><i class="category-menu-expander-icon-1wJ1r"></i><span class="category-menu-number-2joGS">1</span><a title="Транспорт" href="/profile/items/active/rossiya/transport" class="category-menu-link-3r857">Транспорт</a><ul class="category-menu-submenu-2I-2G"><li class="category-menu-item-2Y0NG"><span class="category-menu-number-2joGS">1</span><a title="Запчасти и аксессуары" href="/profile/items/active/rossiya/zapchasti_i_aksessuary" class="category-menu-link-3r857">Запчасти и аксессуары</a></li></ul></li><li data-item="data-item" class="category-menu-item-2Y0NG
category-menu-item-expandable-2tPRO                             category-menu-item-closed-12W8o"><i class="category-menu-expander-icon-1wJ1r"></i><span class="category-menu-number-2joGS">3</span><a title="Работа" href="/profile/items/active/rossiya/rabota" class="category-menu-link-3r857">Работа</a><ul class="category-menu-submenu-2I-2G"><li class="category-menu-item-2Y0NG"><span class="category-menu-number-2joGS">3</span><a title="Резюме" href="/profile/items/active/rossiya/rezume" class="category-menu-link-3r857">Резюме</a></li></ul></li><li data-item="data-item" class="category-menu-item-2Y0NG
category-menu-item-expandable-2tPRO                             category-menu-item-closed-12W8o"><i class="category-menu-expander-icon-1wJ1r"></i><span class="category-menu-number-2joGS">1</span><a title="Для дома и дачи" href="/profile/items/active/rossiya/dlya_doma_i_dachi" class="category-menu-link-3r857">Для дома и дачи</a><ul class="category-menu-submenu-2I-2G"><li class="category-menu-item-2Y0NG"><span class="category-menu-number-2joGS">1</span><a title="Мебель и интерьер" href="/profile/items/active/rossiya/mebel_i_interer" class="category-menu-link-3r857">Мебель и интерьер</a></li></ul></li><li data-item="data-item" class="category-menu-item-2Y0NG
category-menu-item-expandable-2tPRO                             category-menu-item-closed-12W8o"><i class="category-menu-expander-icon-1wJ1r"></i><span class="category-menu-number-2joGS">4</span><a title="Бытовая электроника" href="/profile/items/active/rossiya/bytovaya_elektronika" class="category-menu-link-3r857">Бытовая электроника</a><ul class="category-menu-submenu-2I-2G"><li class="category-menu-item-2Y0NG"><span class="category-menu-number-2joGS">1</span><a title="Аудио и видео" href="/profile/items/active/rossiya/audio_i_video" class="category-menu-link-3r857">Аудио и видео</a></li><li class="category-menu-item-2Y0NG"><span class="category-menu-number-2joGS">1</span><a title="Планшеты и электронные книги" href="/profile/items/active/rossiya/planshety_i_elektronnye_knigi" class="category-menu-link-3r857">Планшеты и электронные книги</a></li><li class="category-menu-item-2Y0NG"><span class="category-menu-number-2joGS">2</span><a title="Товары для компьютера" href="/profile/items/active/rossiya/tovary_dlya_kompyutera" class="category-menu-link-3r857">Товары для компьютера</a></li></ul></li><li data-item="data-item" class="category-menu-item-2Y0NG
category-menu-item-expandable-2tPRO                             category-menu-item-closed-12W8o"><i class="category-menu-expander-icon-1wJ1r"></i><span class="category-menu-number-2joGS">1</span><a title="Для бизнеса" href="/profile/items/active/rossiya/dlya_biznesa" class="category-menu-link-3r857">Для бизнеса</a><ul class="category-menu-submenu-2I-2G"><li class="category-menu-item-2Y0NG"><span class="category-menu-number-2joGS">1</span><a title="Оборудование для бизнеса" href="/profile/items/active/rossiya/oborudovanie_dlya_biznesa" class="category-menu-link-3r857">Оборудование для бизнеса</a></li></ul></li></ul></div></div><div class="js-category-menu"><div data-reactroot="" class="category-menu-root-2qJTd"><ul class="category-menu-list-dGfYN"><li data-item="data-item" class="category-menu-item-2Y0NG
                     category-menu-item-opened-1aXxN
"><span class="category-menu-number-2joGS"></span><a title="Все города" href="/profile/items/active/rossiya" class="category-menu-link-3r857 category-menu-link-active-1T5YF">Все города</a></li><li data-item="data-item" class="category-menu-item-2Y0NG
category-menu-item-expandable-2tPRO                             category-menu-item-closed-12W8o"><i class="category-menu-expander-icon-1wJ1r"></i><span class="category-menu-number-2joGS">10</span><a title="Кемеровская область" href="/profile/items/active/kemerovskaya_oblast" class="category-menu-link-3r857">Кемеровская область</a><ul class="category-menu-submenu-2I-2G"><li class="category-menu-item-2Y0NG"><span class="category-menu-number-2joGS">3</span><a title="Новокузнецк" href="/profile/items/active/novokuznetsk" class="category-menu-link-3r857">Новокузнецк</a></li><li class="category-menu-item-2Y0NG"><span class="category-menu-number-2joGS">7</span><a title="Осинники" href="/profile/items/active/osinniki" class="category-menu-link-3r857">Осинники</a></li></ul></li></ul></div></div><div class="js-common-banner common-banner" data-banner-id="profile/apps-banner">
    <div class="js-common-banner-close common-banner-close "></div>
    <style>@font-face{font-family:latolight;src:url(/s/avito/ui/fonts/lato/lato-light-webfont.woff2?35e0ddf) format('woff2'),url(/s/avito/ui/fonts/lato/lato-light-webfont.woff?5537dfb) format('woff');font-weight:400;font-style:normal;font-display:swap}.apps-banner{position:relative;padding-top:15px;padding-left:20px;padding-bottom:17px;background-color:rgba(253,178,38,.15)}.apps-banner:after{content:'';display:block;position:absolute;right:0;bottom:0;width:75px;height:153px;background-repeat:no-repeat;background-image:url(/s/avito/components/banners/profile/apps-banner/apps-banner_phone.svg?36bf009)}.apps-banner_horizontal:after{width:140px;height:113px;right:55px}.apps-banner_write-img:after{background-image:url(/s/avito/components/banners/profile/apps-banner/apps-banner_phone_write_horizontal.svg?f720e36)}.apps-banner-header{font-size:14px;font-weight:700;line-height:20px;margin-bottom:5px}.apps-banner-text{line-height:20px;margin-bottom:55px}.apps-banner_horizontal .apps-banner-text{margin-bottom:15px}.apps-banner_horizontal .apps-banner-footer{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center}.apps-banner-links{margin-bottom:23px}.apps-banner_horizontal .apps-banner-links{margin-bottom:0;display:-ms-flexbox;display:flex}.apps-banner-links_ios{margin-bottom:10px}.apps-banner_horizontal .apps-banner-links_ios{margin-bottom:0;margin-right:10px}.apps-banner-age-restriction{font-size:12px;color:#858585}.apps-banner_horizontal .apps-banner-age-restriction{margin-left:20px}.app-link{display:block;background-repeat:no-repeat;border:0}.app-link_small{width:127px;height:40px;background-size:127px 40px}.app-link_medium{width:135px;height:41px;background-size:135px 41px}.app-link_large{width:165px;height:50px;background-size:165px 50px}.app-link_ios-dark{background-image:url(/s/avito/components/app-link/app-store_dark.svg?3135bc0)}.app-link_ios-light{background-image:url(/s/avito/components/app-link/app-store_light.svg?fa45d26)}.app-link_android-dark{background-image:url(/s/avito/components/app-link/google-play_dark.svg?16ce020)}.app-link_android-light{background-image:url(/s/avito/components/app-link/google-play_light.svg?852fe55)}</style><div class="apps-banner
apps-banner_vertical "><p class="apps-banner-header">Моментальные<br>уведомления<br>о новых сообщениях</p><div class="apps-banner-text">С мобильным приложением<br>Avito вы&nbsp;не&nbsp;пропустите<br>ни&nbsp;одного сообщения</div><div class="apps-banner-footer"><div class="apps-banner-links"><div class="apps-banner-links_ios"><a href="https://app.adjust.com/2sa6ak" target="_blank" rel="noopener noreferrer" class="app-link app-link_ios-dark app-link_small "></a></div><a href="https://app.adjust.com/6cm4lc" target="_blank" rel="noopener noreferrer" class="app-link app-link_android-dark app-link_small "></a></div><p class="apps-banner-age-restriction">16+</p></div></div></div></div>

<div class="b-profile-content g_b_32">

<div class="js-common-banner common-banner" data-banner-id="job-cvs">
<div class="js-common-banner-close common-banner-close "></div>
<div class="profile-promo"> <div class="profile-promo-title">
Еще не нашли работу? Скорее всего, проблема в вашем резюме!
</div> <div class="profile-promo-descr"> <i class="profile-promo-icon profile-promo-icon_cvs"></i>
Заполните поля «Опыт работы», «Учебные заведения», «Знание языков», опишите навыки и&nbsp;профессиональные качества в&nbsp;поле «О&nbsp;себе».
Покажите, чем вы&nbsp;отличаетесь от&nbsp;миллиона других соискателей на&nbsp;Avito и&nbsp;приглашение на&nbsp;работу не&nbsp;заставит долго ждать!
</div> </div>
</div>

<ul class="tabs">
<li class="tabs-item"><span class="tabs-item-title">Активные</span><span class="tabs-item-num"> 10</span></li>
<li class="tabs-item"><a class="tabs-item-title tabs-item-link" href="/profile/items/old">Завершённые</a><span class="tabs-item-num"> 22</span></li>
<li class="tabs-item"><a class="tabs-item-title tabs-item-link" href="/profile/items/archived">Удалённые</a><span class="tabs-item-num"> 2</span></li>
</ul>

<form action="" method="post" id="overForm" autocomplete="off"> <input type="hidden" class="js-token" name="token[7180077862584]" value="cbf113f03c629d7"> <div class="js-profile-items b-profile-items b-profile-items_active">
<div class="toolbar toolbar_active js-toolbar is-collapsed">
<div class="js-profile-items-toolbar"><div data-reactroot="" class="toolbar__sticky js-horizontal-scroll-wrap"><label class="toolbar-check"><span class="toolbar-check__bg"></span><input type="checkbox" name="check_all" class="js-toolbar-check" value="on"></label><div class="btn-group_central js-horizontal-scroll-content"><div class="btn-group"><button type="button" disabled="" data-type="premium" data-alias="package-premium" class="btn-pro js-toolbar-btn js-buy"><span class="toolbar-icon"><i class="js-toolbar-icon monetization-icon monetization-icon_xs monetization-icon_muted
    monetization-icon_vas-turbo"></i></span><span> </span><span class="toolbar-btn__caption">Турбо-продажа</span></button><button type="button" disabled="" data-type="vip" data-alias="package-vip" class="btn-pro js-toolbar-btn js-buy"><span class="toolbar-icon"><i class="js-toolbar-icon monetization-icon monetization-icon_xs monetization-icon_muted
    monetization-icon_vas-fast"></i></span><span> </span><span class="toolbar-btn__caption">Быстрая продажа</span></button></div><div class="btn-group"><button type="button" disabled="" data-type="4" data-alias="premium" class="btn-pro js-toolbar-btn js-buy"><span class="toolbar-icon"><i class="js-toolbar-icon monetization-icon monetization-icon_xs monetization-icon_muted
    monetization-icon_vas-premium"></i></span><span> </span><span class="toolbar-btn__caption">Премиум</span></button><button type="button" disabled="" data-type="1" data-alias="vip" class="btn-pro js-toolbar-btn js-buy"><span class="toolbar-icon"><i class="js-toolbar-icon monetization-icon monetization-icon_xs monetization-icon_muted
    monetization-icon_vas-vip"></i></span><span> </span><span class="toolbar-btn__caption">VIP</span></button><button type="button" disabled="" data-type="2" data-alias="highlight" class="btn-pro js-toolbar-btn js-buy"><span class="toolbar-icon"><i class="js-toolbar-icon monetization-icon monetization-icon_xs monetization-icon_muted
    monetization-icon_vas-highlight"></i></span><span> </span><span class="toolbar-btn__caption">Выделить</span></button><button type="button" disabled="" data-type="3" data-alias="up" class="btn-pro js-toolbar-btn js-buy"><span class="toolbar-icon"><i class="js-toolbar-icon monetization-icon monetization-icon_xs monetization-icon_muted
    monetization-icon_vas-pushup-2"></i></span><span> </span><span class="toolbar-btn__caption">Поднять</span></button></div></div><div class="btn-group btn-group_more-actions"><button type="button" disabled="" class="btn-pro js-toolbar-btn toolbar-btn__more js-toolbar-btn__more"><span class="toolbar-btn__caption">Ещё</span></button><div class="tooltip tooltip_bottom js-toolbar__tooltip"><div class="tooltip-arrow"></div><button type="button" disabled="" class="button button-link js-toolbar-btn js-toolbar-btn_close">Снять с публикации</button></div></div></div></div> </div>

<div class="profile-item js-profile-item" data-id="1119890674" data-category-id="40" data-capped-by="">
<label class="profile-item-check"> <input type="checkbox" class="profile-item-checkbox js-profile-item-checkbox" value="1119890674" name="item_id[]"> </label>
<div class="profile-item-container"> <div class="profile-item-content">
<a class="profile-item-photo js-photo profile-item-photo_add" href="/items/edit/1119890674" title="Перейти на страницу редактирования объявления"> <i class="i i-add-photo"></i> </a>

<div class="profile-item-description"> <div class="profile-item-main"> <h3 class="profile-item-title"> <a name="item_1119890674" href="/osinniki/oborudovanie_dlya_biznesa/prodam_programmu_dlya_taksi_1119890674" title="Продам программу для такси — Перейти на страницу объявления">
Продам программу для такси </a> </h3>
<div class="profile-item-actions"> <div class="profile-item-actions-fader"></div> <a class="profile-item-actions-link" href="/items/edit/1119890674">Редактировать</a><span class="js-profile-item-actions-more profile-item-actions-more profile-item-actions-link pseudo-link c-2">ещё</span> <div class="tooltip tooltip_bottom js-profile-item-actions-more-tooltip"> <i class="tooltip-arrow"></i> <button class="button button-link profile-item-actions-item js-close-item-popup"> <i class="i i-x"></i>Снять с публикации</button> <div class="profile-item-actions-group">
<a href="/account/pay_service?service=4&amp;item_id=1119890674&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span>
Премиум-размещение
</a> <a href="/account/pay_service?service=1&amp;item_id=1119890674&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-vip"></i> </span>
Сделать VIP-объявлением
</a> <a href="/account/pay_service?service=2&amp;item_id=1119890674&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-highlight"></i> </span>
Выделить
</a> <a href="/account/pay_service?service=3&amp;item_id=1119890674&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-pushup-2"></i> </span>
Поднять в поиске
</a> <a href="/account/pay_package?item_id=1119890674&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-package"></i> </span>
Применить пакет услуг
</a>
</div>
<div class="profile-item-actions-item"> <span class="js-show-stat pseudo-link" data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1119890674&quot; }"> <i class="i i-eye"></i>
Статистика просмотров
</span> </div> </div></div>

<div class="profile-item-messages">
</div> <div class="profile-item-data">

<div class="profile-item-data-price">50 000
<span class="font_arial-rub">₽</span>
</div>
</div>
</div> <div class="profile-item-footer">
<div class="profile-item-lifetime"> <div class="profile-item-lifetime-row">
<a href="/account/pay_service?service=3&amp;item_id=1119890674&amp;vas_from=profile_items_active_link" title="До истечения срока размещения осталось 17 дней" class="profile-item-lifetime-bar profile-item-lifetime-bar_yellow"> <span class="profile-item-lifetime-bar-fill" style="width:42.5px"></span> </a>
Осталось 17 дней — <a href="/account/pay_service?service=3&amp;item_id=1119890674&amp;vas_from=profile_items_active_link">поднять в поиске</a>
</div> <div class="profile-item-lifetime-row">
</div> </div>

<div class="profile-item-views"> <span class="profile-item-views-count js-show-stat pseudo-link c-2 " data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1119890674&quot; }"> <i class="profile-item-views-count-icon i i-eye"></i>
195 </span> </div>
</div> </div> </div>
<div class="profile-item-promo"> <i class="profile-item-promo-arrow"></i> <div class="profile-item-promo-content"> <div class="profile-item-promo-information">
Хотите продать быстрее?  Сделайте объявление
<span class="profile-item-promo-info-wrap"> <span class="profile-item-promo-type">
премиум-объявлением!
</span> <a class="help-link js-new-window profile-item-promo-info" target="_blank" href="/info/usluga_premium_obyavleniya?plain&amp;itemId=1119890674"> <i class="i i-help"></i> </a> </span>
</div> <a href="/account/pay_service?service=4&amp;item_id=1119890674&amp;vas_from=profile_items_active_promo" class="profile-item-promo-button button button-origin">
<span class="profile-item-promo-button-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span> <span class="profile-item-promo-button-text">Сделать премиум</span> </a> </div> </div>
<div class="profile-item-warning">
За последние 13 дней объявление опустилось в поиске.
Покупателям сложно его найти.
<a href="/account/pay_service?service=3&amp;item_id=1119890674&amp;vas_from=profile_items_active_link">Поднять наверх</a> </div> 
<div class="profile-item-cart-wrapper"> <div class="profile-item-cart js-profile-item-cart js-horizontal-scroll-content js-horizontal-scroll-cart"> <div class="profile-item-cart-title profile-item-cart-title_without-prolongation">
Продать быстрее: </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=premium&amp;item_id=1119890674&amp;vas_from=profile_items_active_toolbar" data-type="premium" data-alias="package-premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Турбо-продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=vip&amp;item_id=1119890674&amp;vas_from=profile_items_active_toolbar" data-type="vip" data-alias="package-vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Быстрая продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=4&amp;item_id=1119890674&amp;vas_from=profile_items_active_toolbar" data-type="4" data-alias="premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Премиум</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=1&amp;item_id=1119890674&amp;vas_from=profile_items_active_toolbar" data-type="1" data-alias="vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Сделать VIP</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=2&amp;item_id=1119890674&amp;vas_from=profile_items_active_toolbar" data-type="2" data-alias="highlight"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Выделить</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=3&amp;item_id=1119890674&amp;vas_from=profile_items_active_toolbar" data-type="3" data-alias="up"><span class="color-range" style="width: 100%;"></span><div class="btn-pro-text">Поднять</div></a><div class="profile-item-vas-tooltip-cont-3lGgk profile-item-vas-tooltip-cont-up-3VIZ2"></div></div></div> </div>
</div>
</div>
</div> </div>

<div class="profile-item js-profile-item" data-id="1364228567" data-category-id="101" data-capped-by="">
<label class="profile-item-check"> <input type="checkbox" class="profile-item-checkbox js-profile-item-checkbox" value="1364228567" name="item_id[]"> </label>
<div class="profile-item-container"> <div class="profile-item-content">
<a class="profile-item-photo js-photo" href="/osinniki/tovary_dlya_kompyutera/monitor_benq_1364228567" title="Объявление «Монитор Benq» (с фотографией)">
<img class="js-profile-item-photo-image photo-count-show" src="//87.img.avito.st/140x105/4261052787.jpg" alt="">
<span class="profile-item-photo-icons"><i class="i i-photo">1</i></span>
</a> 
<div class="profile-item-description"> <div class="profile-item-main"> <h3 class="profile-item-title"> <a name="item_1364228567" href="/osinniki/tovary_dlya_kompyutera/monitor_benq_1364228567" title="Монитор Benq — Перейти на страницу объявления">
Монитор Benq </a> </h3>
<div class="profile-item-actions"> <div class="profile-item-actions-fader"></div> <a class="profile-item-actions-link" href="/items/edit/1364228567">Редактировать</a><span class="js-profile-item-actions-more profile-item-actions-more profile-item-actions-link pseudo-link c-2">ещё</span> <div class="tooltip tooltip_bottom js-profile-item-actions-more-tooltip"> <i class="tooltip-arrow"></i> <button class="button button-link profile-item-actions-item js-close-item-popup"> <i class="i i-x"></i>Снять с публикации</button> <div class="profile-item-actions-group">
<a href="/account/pay_service?service=4&amp;item_id=1364228567&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span>
Премиум-размещение
</a> <a href="/account/pay_service?service=1&amp;item_id=1364228567&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-vip"></i> </span>
Сделать VIP-объявлением
</a> <a href="/account/pay_service?service=2&amp;item_id=1364228567&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-highlight"></i> </span>
Выделить
</a> <a href="/account/pay_service?service=3&amp;item_id=1364228567&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-pushup-2"></i> </span>
Поднять в поиске
</a> <a href="/account/pay_package?item_id=1364228567&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-package"></i> </span>
Применить пакет услуг
</a>
</div>
<div class="profile-item-actions-item"> <span class="js-show-stat pseudo-link" data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1364228567&quot; }"> <i class="i i-eye"></i>
Статистика просмотров
</span> </div> </div></div>

<div class="profile-item-messages">
</div> <div class="profile-item-data">

<div class="profile-item-data-price">3 000
<span class="font_arial-rub">₽</span>
</div>
</div>
</div> <div class="profile-item-footer">
<div class="profile-item-lifetime"> <div class="profile-item-lifetime-row">
<a href="/account/pay_service?service=3&amp;item_id=1364228567&amp;vas_from=profile_items_active_link" title="До истечения срока размещения осталось 17 дней" class="profile-item-lifetime-bar profile-item-lifetime-bar_yellow"> <span class="profile-item-lifetime-bar-fill" style="width:42.5px"></span> </a>
Осталось 17 дней — <a href="/account/pay_service?service=3&amp;item_id=1364228567&amp;vas_from=profile_items_active_link">поднять в поиске</a>
</div> <div class="profile-item-lifetime-row">
</div> </div>

<div class="profile-item-views"> <span class="profile-item-views-count js-show-stat pseudo-link c-2 " data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1364228567&quot; }"> <i class="profile-item-views-count-icon i i-eye"></i>
68 </span> </div>
</div> </div> </div>
<div class="profile-item-promo"> <i class="profile-item-promo-arrow"></i> <div class="profile-item-promo-content"> <div class="profile-item-promo-information">
Хотите продать быстрее?  Сделайте объявление
<span class="profile-item-promo-info-wrap"> <span class="profile-item-promo-type">
премиум-объявлением!
</span> <a class="help-link js-new-window profile-item-promo-info" target="_blank" href="/info/usluga_premium_obyavleniya?plain&amp;itemId=1364228567"> <i class="i i-help"></i> </a> </span>
</div> <a href="/account/pay_service?service=4&amp;item_id=1364228567&amp;vas_from=profile_items_active_promo" class="profile-item-promo-button button button-origin">
<span class="profile-item-promo-button-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span> <span class="profile-item-promo-button-text">Сделать премиум</span> </a> </div> </div>
<div class="profile-item-warning">
За последние 13 дней объявление опустилось в поиске.
Покупателям сложно его найти.
<a href="/account/pay_service?service=3&amp;item_id=1364228567&amp;vas_from=profile_items_active_link">Поднять наверх</a> </div> 
<div class="profile-item-cart-wrapper"> <div class="profile-item-cart js-profile-item-cart js-horizontal-scroll-content js-horizontal-scroll-cart"> <div class="profile-item-cart-title profile-item-cart-title_without-prolongation">
Продать быстрее: </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=premium&amp;item_id=1364228567&amp;vas_from=profile_items_active_toolbar" data-type="premium" data-alias="package-premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Турбо-продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=vip&amp;item_id=1364228567&amp;vas_from=profile_items_active_toolbar" data-type="vip" data-alias="package-vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Быстрая продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=4&amp;item_id=1364228567&amp;vas_from=profile_items_active_toolbar" data-type="4" data-alias="premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Премиум</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=1&amp;item_id=1364228567&amp;vas_from=profile_items_active_toolbar" data-type="1" data-alias="vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Сделать VIP</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=2&amp;item_id=1364228567&amp;vas_from=profile_items_active_toolbar" data-type="2" data-alias="highlight"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Выделить</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=3&amp;item_id=1364228567&amp;vas_from=profile_items_active_toolbar" data-type="3" data-alias="up"><span class="color-range" style="width: 100%;"></span><div class="btn-pro-text">Поднять</div></a><div class="profile-item-vas-tooltip-cont-3lGgk profile-item-vas-tooltip-cont-up-3VIZ2"></div></div></div> </div>
</div>
</div>
</div> </div>

<div class="profile-item js-profile-item" data-id="1163092153" data-category-id="101" data-capped-by="">
<label class="profile-item-check"> <input type="checkbox" class="profile-item-checkbox js-profile-item-checkbox" value="1163092153" name="item_id[]"> </label>
<div class="profile-item-container"> <div class="profile-item-content">
<a class="profile-item-photo js-photo" href="/osinniki/tovary_dlya_kompyutera/monitor_nec_1163092153" title="Объявление «Монитор NEC» (с фотографией)">
<img class="js-profile-item-photo-image photo-count-show" src="//60.img.avito.st/140x105/4261055260.jpg" alt="">
<span class="profile-item-photo-icons"><i class="i i-photo">1</i></span>
</a> 
<div class="profile-item-description"> <div class="profile-item-main"> <h3 class="profile-item-title"> <a name="item_1163092153" href="/osinniki/tovary_dlya_kompyutera/monitor_nec_1163092153" title="Монитор NEC — Перейти на страницу объявления">
Монитор NEC </a> </h3>
<div class="profile-item-actions"> <div class="profile-item-actions-fader"></div> <a class="profile-item-actions-link" href="/items/edit/1163092153">Редактировать</a><span class="js-profile-item-actions-more profile-item-actions-more profile-item-actions-link pseudo-link c-2">ещё</span> <div class="tooltip tooltip_bottom js-profile-item-actions-more-tooltip"> <i class="tooltip-arrow"></i> <button class="button button-link profile-item-actions-item js-close-item-popup"> <i class="i i-x"></i>Снять с публикации</button> <div class="profile-item-actions-group">
<a href="/account/pay_service?service=4&amp;item_id=1163092153&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span>
Премиум-размещение
</a> <a href="/account/pay_service?service=1&amp;item_id=1163092153&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-vip"></i> </span>
Сделать VIP-объявлением
</a> <a href="/account/pay_service?service=2&amp;item_id=1163092153&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-highlight"></i> </span>
Выделить
</a> <a href="/account/pay_service?service=3&amp;item_id=1163092153&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-pushup-2"></i> </span>
Поднять в поиске
</a> <a href="/account/pay_package?item_id=1163092153&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-package"></i> </span>
Применить пакет услуг
</a>
</div>
<div class="profile-item-actions-item"> <span class="js-show-stat pseudo-link" data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1163092153&quot; }"> <i class="i i-eye"></i>
Статистика просмотров
</span> </div> </div></div>

<div class="profile-item-messages">
</div> <div class="profile-item-data">

<div class="profile-item-data-price">2 000
<span class="font_arial-rub">₽</span>
</div>
</div>
</div> <div class="profile-item-footer">
<div class="profile-item-lifetime"> <div class="profile-item-lifetime-row">
<a href="/account/pay_service?service=3&amp;item_id=1163092153&amp;vas_from=profile_items_active_link" title="До истечения срока размещения осталось 17 дней" class="profile-item-lifetime-bar profile-item-lifetime-bar_yellow"> <span class="profile-item-lifetime-bar-fill" style="width:42.5px"></span> </a>
Осталось 17 дней — <a href="/account/pay_service?service=3&amp;item_id=1163092153&amp;vas_from=profile_items_active_link">поднять в поиске</a>
</div> <div class="profile-item-lifetime-row">
</div> </div>

<div class="profile-item-views"> <span class="profile-item-views-count js-show-stat pseudo-link c-2 " data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1163092153&quot; }"> <i class="profile-item-views-count-icon i i-eye"></i>
69 </span> </div>
</div> </div> </div>
<div class="profile-item-promo"> <i class="profile-item-promo-arrow"></i> <div class="profile-item-promo-content"> <div class="profile-item-promo-information">
Хотите продать быстрее?  Сделайте объявление
<span class="profile-item-promo-info-wrap"> <span class="profile-item-promo-type">
премиум-объявлением!
</span> <a class="help-link js-new-window profile-item-promo-info" target="_blank" href="/info/usluga_premium_obyavleniya?plain&amp;itemId=1163092153"> <i class="i i-help"></i> </a> </span>
</div> <a href="/account/pay_service?service=4&amp;item_id=1163092153&amp;vas_from=profile_items_active_promo" class="profile-item-promo-button button button-origin">
<span class="profile-item-promo-button-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span> <span class="profile-item-promo-button-text">Сделать премиум</span> </a> </div> </div>
<div class="profile-item-warning">
За последние 13 дней объявление опустилось в поиске.
Покупателям сложно его найти.
<a href="/account/pay_service?service=3&amp;item_id=1163092153&amp;vas_from=profile_items_active_link">Поднять наверх</a> </div> 
<div class="profile-item-cart-wrapper"> <div class="profile-item-cart js-profile-item-cart js-horizontal-scroll-content js-horizontal-scroll-cart"> <div class="profile-item-cart-title profile-item-cart-title_without-prolongation">
Продать быстрее: </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=premium&amp;item_id=1163092153&amp;vas_from=profile_items_active_toolbar" data-type="premium" data-alias="package-premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Турбо-продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=vip&amp;item_id=1163092153&amp;vas_from=profile_items_active_toolbar" data-type="vip" data-alias="package-vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Быстрая продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=4&amp;item_id=1163092153&amp;vas_from=profile_items_active_toolbar" data-type="4" data-alias="premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Премиум</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=1&amp;item_id=1163092153&amp;vas_from=profile_items_active_toolbar" data-type="1" data-alias="vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Сделать VIP</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=2&amp;item_id=1163092153&amp;vas_from=profile_items_active_toolbar" data-type="2" data-alias="highlight"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Выделить</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=3&amp;item_id=1163092153&amp;vas_from=profile_items_active_toolbar" data-type="3" data-alias="up"><span class="color-range" style="width: 100%;"></span><div class="btn-pro-text">Поднять</div></a><div class="profile-item-vas-tooltip-cont-3lGgk profile-item-vas-tooltip-cont-up-3VIZ2"></div></div></div> </div>
</div>
</div>
</div> </div>

<div class="profile-item js-profile-item" data-id="1605804610" data-category-id="96" data-capped-by="">
<label class="profile-item-check"> <input type="checkbox" class="profile-item-checkbox js-profile-item-checkbox" value="1605804610" name="item_id[]"> </label>
<div class="profile-item-container"> <div class="profile-item-content">
<a class="profile-item-photo js-photo" href="/osinniki/planshety_i_elektronnye_knigi/prodam_ili_obmenyayu_planshet_1605804610" title="Объявление «Продам или обменяю Планшет» (3 фотографии)">
<img class="js-profile-item-photo-image photo-count-show" src="//42.img.avito.st/140x105/4261090342.jpg" alt="">
<span class="profile-item-photo-icons"><i class="i i-photo">3</i></span>
</a> 
<div class="profile-item-description"> <div class="profile-item-main"> <h3 class="profile-item-title"> <a name="item_1605804610" href="/osinniki/planshety_i_elektronnye_knigi/prodam_ili_obmenyayu_planshet_1605804610" title="Продам или обменяю Планшет — Перейти на страницу объявления">
Продам или обменяю Планшет </a> </h3>
<div class="profile-item-actions"> <div class="profile-item-actions-fader"></div> <a class="profile-item-actions-link" href="/items/edit/1605804610">Редактировать</a><span class="js-profile-item-actions-more profile-item-actions-more profile-item-actions-link pseudo-link c-2">ещё</span> <div class="tooltip tooltip_bottom js-profile-item-actions-more-tooltip"> <i class="tooltip-arrow"></i> <button class="button button-link profile-item-actions-item js-close-item-popup"> <i class="i i-x"></i>Снять с публикации</button> <div class="profile-item-actions-group">
<a href="/account/pay_service?service=4&amp;item_id=1605804610&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span>
Премиум-размещение
</a> <a href="/account/pay_service?service=1&amp;item_id=1605804610&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-vip"></i> </span>
Сделать VIP-объявлением
</a> <a href="/account/pay_service?service=2&amp;item_id=1605804610&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-highlight"></i> </span>
Выделить
</a> <a href="/account/pay_service?service=3&amp;item_id=1605804610&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-pushup-2"></i> </span>
Поднять в поиске
</a> <a href="/account/pay_package?item_id=1605804610&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-package"></i> </span>
Применить пакет услуг
</a>
</div>
<div class="profile-item-actions-item"> <span class="js-show-stat pseudo-link" data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1605804610&quot; }"> <i class="i i-eye"></i>
Статистика просмотров
</span> </div> </div></div>

<div class="profile-item-messages">
</div> <div class="profile-item-data">

<div class="profile-item-data-price">5 000
<span class="font_arial-rub">₽</span>
</div>
</div>
</div> <div class="profile-item-footer">
<div class="profile-item-lifetime"> <div class="profile-item-lifetime-row">
<a href="/account/pay_service?service=3&amp;item_id=1605804610&amp;vas_from=profile_items_active_link" title="До истечения срока размещения осталось 17 дней" class="profile-item-lifetime-bar profile-item-lifetime-bar_yellow"> <span class="profile-item-lifetime-bar-fill" style="width:42.5px"></span> </a>
Осталось 17 дней — <a href="/account/pay_service?service=3&amp;item_id=1605804610&amp;vas_from=profile_items_active_link">поднять в поиске</a>
</div> <div class="profile-item-lifetime-row">
</div> </div>

<div class="profile-item-views"> <span class="profile-item-views-count js-show-stat pseudo-link c-2 " data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1605804610&quot; }"> <i class="profile-item-views-count-icon i i-eye"></i>
138 </span> </div>
</div> </div> </div>
<div class="profile-item-promo"> <i class="profile-item-promo-arrow"></i> <div class="profile-item-promo-content"> <div class="profile-item-promo-information">
Хотите продать быстрее?  Сделайте объявление
<span class="profile-item-promo-info-wrap"> <span class="profile-item-promo-type">
премиум-объявлением!
</span> <a class="help-link js-new-window profile-item-promo-info" target="_blank" href="/info/usluga_premium_obyavleniya?plain&amp;itemId=1605804610"> <i class="i i-help"></i> </a> </span>
</div> <a href="/account/pay_service?service=4&amp;item_id=1605804610&amp;vas_from=profile_items_active_promo" class="profile-item-promo-button button button-origin">
<span class="profile-item-promo-button-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span> <span class="profile-item-promo-button-text">Сделать премиум</span> </a> </div> </div>
<div class="profile-item-warning">
За последние 13 дней объявление опустилось в поиске.
Покупателям сложно его найти.
<a href="/account/pay_service?service=3&amp;item_id=1605804610&amp;vas_from=profile_items_active_link">Поднять наверх</a> </div> 
<div class="profile-item-cart-wrapper"> <div class="profile-item-cart js-profile-item-cart js-horizontal-scroll-content js-horizontal-scroll-cart"> <div class="profile-item-cart-title profile-item-cart-title_without-prolongation">
Продать быстрее: </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=premium&amp;item_id=1605804610&amp;vas_from=profile_items_active_toolbar" data-type="premium" data-alias="package-premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Турбо-продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=vip&amp;item_id=1605804610&amp;vas_from=profile_items_active_toolbar" data-type="vip" data-alias="package-vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Быстрая продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=4&amp;item_id=1605804610&amp;vas_from=profile_items_active_toolbar" data-type="4" data-alias="premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Премиум</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=1&amp;item_id=1605804610&amp;vas_from=profile_items_active_toolbar" data-type="1" data-alias="vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Сделать VIP</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=2&amp;item_id=1605804610&amp;vas_from=profile_items_active_toolbar" data-type="2" data-alias="highlight"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Выделить</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=3&amp;item_id=1605804610&amp;vas_from=profile_items_active_toolbar" data-type="3" data-alias="up"><span class="color-range" style="width: 100%;"></span><div class="btn-pro-text">Поднять</div></a><div class="profile-item-vas-tooltip-cont-3lGgk profile-item-vas-tooltip-cont-up-3VIZ2"></div></div></div> </div>
</div>
</div>
</div> </div>

<div class="profile-item js-profile-item" data-id="1415639217" data-category-id="10" data-capped-by="">
<label class="profile-item-check"> <input type="checkbox" class="profile-item-checkbox js-profile-item-checkbox" value="1415639217" name="item_id[]"> </label>
<div class="profile-item-container"> <div class="profile-item-content">
<a class="profile-item-photo js-photo" href="/osinniki/zapchasti_i_aksessuary/prodam_rezinu_s_diskom_2sht_r15_na_reno_1415639217" title="Объявление «Продам резину с диском 2шт R15 на рено» (с фотографией)">
<img class="js-profile-item-photo-image photo-count-show" src="//52.img.avito.st/140x105/4262950752.jpg" alt="">
<span class="profile-item-photo-icons"><i class="i i-photo">1</i></span>
</a> 
<div class="profile-item-description"> <div class="profile-item-main"> <h3 class="profile-item-title"> <a name="item_1415639217" href="/osinniki/zapchasti_i_aksessuary/prodam_rezinu_s_diskom_2sht_r15_na_reno_1415639217" title="Продам резину с диском 2шт R15 на рено — Перейти на страницу объявления">
Продам резину с диском 2шт R15 на рено </a> </h3>
<div class="profile-item-actions"> <div class="profile-item-actions-fader"></div> <a class="profile-item-actions-link" href="/items/edit/1415639217">Редактировать</a><span class="js-profile-item-actions-more profile-item-actions-more profile-item-actions-link pseudo-link c-2">ещё</span> <div class="tooltip tooltip_bottom js-profile-item-actions-more-tooltip"> <i class="tooltip-arrow"></i> <button class="button button-link profile-item-actions-item js-close-item-popup"> <i class="i i-x"></i>Снять с публикации</button> <div class="profile-item-actions-group">
<a href="/account/pay_service?service=4&amp;item_id=1415639217&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span>
Премиум-размещение
</a> <a href="/account/pay_service?service=1&amp;item_id=1415639217&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-vip"></i> </span>
Сделать VIP-объявлением
</a> <a href="/account/pay_service?service=2&amp;item_id=1415639217&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-highlight"></i> </span>
Выделить
</a> <a href="/account/pay_service?service=3&amp;item_id=1415639217&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-pushup-2"></i> </span>
Поднять в поиске
</a> <a href="/account/pay_package?item_id=1415639217&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-package"></i> </span>
Применить пакет услуг
</a>
</div>
<div class="profile-item-actions-item"> <span class="js-show-stat pseudo-link" data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1415639217&quot; }"> <i class="i i-eye"></i>
Статистика просмотров
</span> </div> </div></div>

<div class="profile-item-messages">
</div> <div class="profile-item-data">

<div class="profile-item-data-price">1 000
<span class="font_arial-rub">₽</span>
</div>
</div>
</div> <div class="profile-item-footer">
<div class="profile-item-lifetime"> <div class="profile-item-lifetime-row">
<a href="/account/pay_service?service=3&amp;item_id=1415639217&amp;vas_from=profile_items_active_link" title="До истечения срока размещения осталось 17 дней" class="profile-item-lifetime-bar profile-item-lifetime-bar_yellow"> <span class="profile-item-lifetime-bar-fill" style="width:42.5px"></span> </a>
Осталось 17 дней — <a href="/account/pay_service?service=3&amp;item_id=1415639217&amp;vas_from=profile_items_active_link">поднять в поиске</a>
</div> <div class="profile-item-lifetime-row">
</div> </div>

<div class="profile-item-views"> <span class="profile-item-views-count js-show-stat pseudo-link c-2 " data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1415639217&quot; }"> <i class="profile-item-views-count-icon i i-eye"></i>
96 <span class="profile-item-views-count-today">+1</span></span> </div>
</div> </div> </div>
<div class="profile-item-promo"> <i class="profile-item-promo-arrow"></i> <div class="profile-item-promo-content"> <div class="profile-item-promo-information">
Хотите продать быстрее?  Сделайте объявление
<span class="profile-item-promo-info-wrap"> <span class="profile-item-promo-type">
премиум-объявлением!
</span> <a class="help-link js-new-window profile-item-promo-info" target="_blank" href="/info/usluga_premium_obyavleniya?plain&amp;itemId=1415639217"> <i class="i i-help"></i> </a> </span>
</div> <a href="/account/pay_service?service=4&amp;item_id=1415639217&amp;vas_from=profile_items_active_promo" class="profile-item-promo-button button button-origin">
<span class="profile-item-promo-button-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span> <span class="profile-item-promo-button-text">Сделать премиум</span> </a> </div> </div>
<div class="profile-item-warning">
За последние 13 дней объявление опустилось в поиске.
Покупателям сложно его найти.
<a href="/account/pay_service?service=3&amp;item_id=1415639217&amp;vas_from=profile_items_active_link">Поднять наверх</a> </div> 
<div class="profile-item-cart-wrapper"> <div class="profile-item-cart js-profile-item-cart js-horizontal-scroll-content js-horizontal-scroll-cart"> <div class="profile-item-cart-title profile-item-cart-title_without-prolongation">
Продать быстрее: </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=premium&amp;item_id=1415639217&amp;vas_from=profile_items_active_toolbar" data-type="premium" data-alias="package-premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Турбо-продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=vip&amp;item_id=1415639217&amp;vas_from=profile_items_active_toolbar" data-type="vip" data-alias="package-vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Быстрая продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=4&amp;item_id=1415639217&amp;vas_from=profile_items_active_toolbar" data-type="4" data-alias="premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Премиум</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=1&amp;item_id=1415639217&amp;vas_from=profile_items_active_toolbar" data-type="1" data-alias="vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Сделать VIP</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=2&amp;item_id=1415639217&amp;vas_from=profile_items_active_toolbar" data-type="2" data-alias="highlight"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Выделить</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=3&amp;item_id=1415639217&amp;vas_from=profile_items_active_toolbar" data-type="3" data-alias="up"><span class="color-range" style="width: 100%;"></span><div class="btn-pro-text">Поднять</div></a><div class="profile-item-vas-tooltip-cont-3lGgk profile-item-vas-tooltip-cont-up-3VIZ2"></div></div></div> </div>
</div>
</div>
</div> </div>

<div class="profile-item js-profile-item" data-id="795354745" data-category-id="20" data-capped-by="">
<label class="profile-item-check"> <input type="checkbox" class="profile-item-checkbox js-profile-item-checkbox" value="795354745" name="item_id[]"> </label>
<div class="profile-item-container"> <div class="profile-item-content">
<a class="profile-item-photo js-photo" href="/osinniki/mebel_i_interer/prodam_podushki_iz_lateksa_795354745" title="Объявление «Продам подушки из латекса» (2 фотографии)">
<img src="//54.img.avito.st/140x105/2739228754.jpg" data-srcpath="//54.img.avito.st/140x105/2739228754.jpg" alt="" class="js-profile-item-photo-image photo-count-show"> 
<span class="profile-item-photo-icons"><i class="i i-photo">2</i></span>
</a> 
<div class="profile-item-description"> <div class="profile-item-main"> <h3 class="profile-item-title"> <a name="item_795354745" href="/osinniki/mebel_i_interer/prodam_podushki_iz_lateksa_795354745" title="Продам подушки из латекса — Перейти на страницу объявления">
Продам подушки из латекса </a> </h3>
<div class="profile-item-actions"> <div class="profile-item-actions-fader"></div> <a class="profile-item-actions-link" href="/items/edit/795354745">Редактировать</a><span class="js-profile-item-actions-more profile-item-actions-more profile-item-actions-link pseudo-link c-2">ещё</span> <div class="tooltip tooltip_bottom js-profile-item-actions-more-tooltip"> <i class="tooltip-arrow"></i> <button class="button button-link profile-item-actions-item js-close-item-popup"> <i class="i i-x"></i>Снять с публикации</button> <div class="profile-item-actions-group">
<a href="/account/pay_service?service=4&amp;item_id=795354745&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span>
Премиум-размещение
</a> <a href="/account/pay_service?service=1&amp;item_id=795354745&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-vip"></i> </span>
Сделать VIP-объявлением
</a> <a href="/account/pay_service?service=2&amp;item_id=795354745&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-highlight"></i> </span>
Выделить
</a> <a href="/account/pay_service?service=3&amp;item_id=795354745&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-pushup-2"></i> </span>
Поднять в поиске
</a> <a href="/account/pay_package?item_id=795354745&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-package"></i> </span>
Применить пакет услуг
</a>
</div>
<div class="profile-item-actions-item"> <span class="js-show-stat pseudo-link" data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/795354745&quot; }"> <i class="i i-eye"></i>
Статистика просмотров
</span> </div> </div></div>

<div class="profile-item-messages">
</div> <div class="profile-item-data">

<div class="profile-item-data-price">1 000
<span class="font_arial-rub">₽</span>
</div>
</div>
</div> <div class="profile-item-footer">
<div class="profile-item-lifetime"> <div class="profile-item-lifetime-row">
<a href="/account/pay_service?service=3&amp;item_id=795354745&amp;vas_from=profile_items_active_link" title="До истечения срока размещения осталось 17 дней" class="profile-item-lifetime-bar profile-item-lifetime-bar_yellow"> <span class="profile-item-lifetime-bar-fill" style="width:42.5px"></span> </a>
Осталось 17 дней — <a href="/account/pay_service?service=3&amp;item_id=795354745&amp;vas_from=profile_items_active_link">поднять в поиске</a>
</div> <div class="profile-item-lifetime-row">
</div> </div>

<div class="profile-item-views"> <span class="profile-item-views-count js-show-stat pseudo-link c-2 " data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/795354745&quot; }"> <i class="profile-item-views-count-icon i i-eye"></i>
790 </span> </div>
</div> </div> </div>
<div class="profile-item-promo"> <i class="profile-item-promo-arrow"></i> <div class="profile-item-promo-content"> <div class="profile-item-promo-information">
Хотите продать быстрее?  Сделайте объявление
<span class="profile-item-promo-info-wrap"> <span class="profile-item-promo-type">
премиум-объявлением!
</span> <a class="help-link js-new-window profile-item-promo-info" target="_blank" href="/info/usluga_premium_obyavleniya?plain&amp;itemId=795354745"> <i class="i i-help"></i> </a> </span>
</div> <a href="/account/pay_service?service=4&amp;item_id=795354745&amp;vas_from=profile_items_active_promo" class="profile-item-promo-button button button-origin">
<span class="profile-item-promo-button-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span> <span class="profile-item-promo-button-text">Сделать премиум</span> </a> </div> </div>
<div class="profile-item-warning">
За последние 13 дней объявление опустилось в поиске.
Покупателям сложно его найти.
<a href="/account/pay_service?service=3&amp;item_id=795354745&amp;vas_from=profile_items_active_link">Поднять наверх</a> </div> 
<div class="profile-item-cart-wrapper"> <div class="profile-item-cart js-profile-item-cart js-horizontal-scroll-content js-horizontal-scroll-cart"> <div class="profile-item-cart-title profile-item-cart-title_without-prolongation">
Продать быстрее: </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=premium&amp;item_id=795354745&amp;vas_from=profile_items_active_toolbar" data-type="premium" data-alias="package-premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Турбо-продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=vip&amp;item_id=795354745&amp;vas_from=profile_items_active_toolbar" data-type="vip" data-alias="package-vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Быстрая продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=4&amp;item_id=795354745&amp;vas_from=profile_items_active_toolbar" data-type="4" data-alias="premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Премиум</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=1&amp;item_id=795354745&amp;vas_from=profile_items_active_toolbar" data-type="1" data-alias="vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Сделать VIP</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=2&amp;item_id=795354745&amp;vas_from=profile_items_active_toolbar" data-type="2" data-alias="highlight"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Выделить</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=3&amp;item_id=795354745&amp;vas_from=profile_items_active_toolbar" data-type="3" data-alias="up"><span class="color-range" style="width: 100%;"></span><div class="btn-pro-text">Поднять</div></a><div class="profile-item-vas-tooltip-cont-3lGgk profile-item-vas-tooltip-cont-up-3VIZ2"></div></div></div> </div>
</div>
</div>
</div> </div>

<div class="profile-item js-profile-item" data-id="888272561" data-category-id="32" data-capped-by="">
<label class="profile-item-check"> <input type="checkbox" class="profile-item-checkbox js-profile-item-checkbox" value="888272561" name="item_id[]"> </label>
<div class="profile-item-container"> <div class="profile-item-content">
<a class="profile-item-photo js-photo" href="/osinniki/audio_i_video/prodam_android_tv_pristavku_888272561" title="Объявление «Продам андроид тв приставку» (с фотографией)">
<img src="//13.img.avito.st/140x105/3225932713.jpg" data-srcpath="//13.img.avito.st/140x105/3225932713.jpg" alt="" class="js-profile-item-photo-image photo-count-show"> 
<span class="profile-item-photo-icons"><i class="i i-photo">1</i></span>
</a> 
<div class="profile-item-description"> <div class="profile-item-main"> <h3 class="profile-item-title"> <a name="item_888272561" href="/osinniki/audio_i_video/prodam_android_tv_pristavku_888272561" title="Продам андроид тв приставку — Перейти на страницу объявления">
Продам андроид тв приставку </a> </h3>
<div class="profile-item-actions"> <div class="profile-item-actions-fader"></div> <a class="profile-item-actions-link" href="/items/edit/888272561">Редактировать</a><span class="js-profile-item-actions-more profile-item-actions-more profile-item-actions-link pseudo-link c-2">ещё</span> <div class="tooltip tooltip_bottom js-profile-item-actions-more-tooltip"> <i class="tooltip-arrow"></i> <button class="button button-link profile-item-actions-item js-close-item-popup"> <i class="i i-x"></i>Снять с публикации</button> <div class="profile-item-actions-group">
<a href="/account/pay_service?service=4&amp;item_id=888272561&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span>
Премиум-размещение
</a> <a href="/account/pay_service?service=1&amp;item_id=888272561&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-vip"></i> </span>
Сделать VIP-объявлением
</a> <a href="/account/pay_service?service=2&amp;item_id=888272561&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-highlight"></i> </span>
Выделить
</a> <a href="/account/pay_service?service=3&amp;item_id=888272561&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-pushup-2"></i> </span>
Поднять в поиске
</a> <a href="/account/pay_package?item_id=888272561&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-package"></i> </span>
Применить пакет услуг
</a>
</div>
<div class="profile-item-actions-item"> <span class="js-show-stat pseudo-link" data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/888272561&quot; }"> <i class="i i-eye"></i>
Статистика просмотров
</span> </div> </div></div>

<div class="profile-item-messages">
</div> <div class="profile-item-data">

<div class="profile-item-data-price">2 200
<span class="font_arial-rub">₽</span>
</div>
</div>
</div> <div class="profile-item-footer">
<div class="profile-item-lifetime"> <div class="profile-item-lifetime-row">
<a href="/account/pay_service?service=3&amp;item_id=888272561&amp;vas_from=profile_items_active_link" title="До истечения срока размещения осталось 17 дней" class="profile-item-lifetime-bar profile-item-lifetime-bar_yellow"> <span class="profile-item-lifetime-bar-fill" style="width:42.5px"></span> </a>
Осталось 17 дней — <a href="/account/pay_service?service=3&amp;item_id=888272561&amp;vas_from=profile_items_active_link">поднять в поиске</a>
</div> <div class="profile-item-lifetime-row">
</div> </div>

<div class="profile-item-views"> <span class="profile-item-views-count js-show-stat pseudo-link c-2 " data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/888272561&quot; }"> <i class="profile-item-views-count-icon i i-eye"></i>
986 <span class="profile-item-views-count-today">+1</span></span> </div>
</div> </div> </div>
<div class="profile-item-promo"> <i class="profile-item-promo-arrow"></i> <div class="profile-item-promo-content"> <div class="profile-item-promo-information">
Хотите продать быстрее?  Сделайте объявление
<span class="profile-item-promo-info-wrap"> <span class="profile-item-promo-type">
премиум-объявлением!
</span> <a class="help-link js-new-window profile-item-promo-info" target="_blank" href="/info/usluga_premium_obyavleniya?plain&amp;itemId=888272561"> <i class="i i-help"></i> </a> </span>
</div> <a href="/account/pay_service?service=4&amp;item_id=888272561&amp;vas_from=profile_items_active_promo" class="profile-item-promo-button button button-origin">
<span class="profile-item-promo-button-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span> <span class="profile-item-promo-button-text">Сделать премиум</span> </a> </div> </div>
<div class="profile-item-warning">
За последние 13 дней объявление опустилось в поиске.
Покупателям сложно его найти.
<a href="/account/pay_service?service=3&amp;item_id=888272561&amp;vas_from=profile_items_active_link">Поднять наверх</a> </div> 
<div class="profile-item-cart-wrapper"> <div class="profile-item-cart js-profile-item-cart js-horizontal-scroll-content js-horizontal-scroll-cart"> <div class="profile-item-cart-title profile-item-cart-title_without-prolongation">
Продать быстрее: </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=premium&amp;item_id=888272561&amp;vas_from=profile_items_active_toolbar" data-type="premium" data-alias="package-premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Турбо-продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=vip&amp;item_id=888272561&amp;vas_from=profile_items_active_toolbar" data-type="vip" data-alias="package-vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Быстрая продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=4&amp;item_id=888272561&amp;vas_from=profile_items_active_toolbar" data-type="4" data-alias="premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Премиум</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=1&amp;item_id=888272561&amp;vas_from=profile_items_active_toolbar" data-type="1" data-alias="vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Сделать VIP</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=2&amp;item_id=888272561&amp;vas_from=profile_items_active_toolbar" data-type="2" data-alias="highlight"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Выделить</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=3&amp;item_id=888272561&amp;vas_from=profile_items_active_toolbar" data-type="3" data-alias="up"><span class="color-range" style="width: 100%;"></span><div class="btn-pro-text">Поднять</div></a><div class="profile-item-vas-tooltip-cont-3lGgk profile-item-vas-tooltip-cont-up-3VIZ2"></div></div></div> </div>
</div>
</div>
</div> </div>

<div class="profile-item js-profile-item" data-id="806129672" data-category-id="112" data-capped-by="">
<label class="profile-item-check"> <input type="checkbox" class="profile-item-checkbox js-profile-item-checkbox" value="806129672" name="item_id[]"> </label>
<div class="profile-item-container"> <div class="profile-item-content">
<a class="profile-item-photo js-photo profile-item-photo_add" href="/items/edit/806129672" title="Перейти на страницу редактирования объявления"> <i class="i i-add-photo"></i> </a>

<div class="profile-item-description"> <div class="profile-item-main"> <h3 class="profile-item-title"> <a name="item_806129672" href="/novokuznetsk/rezume/veb_programmist_806129672" title="Веб программист — Перейти на страницу объявления">
Веб программист </a> </h3>
<div class="profile-item-actions"> <div class="profile-item-actions-fader"></div> <a class="profile-item-actions-link" href="/items/edit/806129672">Редактировать</a><span class="js-profile-item-actions-more profile-item-actions-more profile-item-actions-link pseudo-link c-2">ещё</span> <div class="tooltip tooltip_bottom js-profile-item-actions-more-tooltip"> <i class="tooltip-arrow"></i> <button class="button button-link profile-item-actions-item js-close-item-popup"> <i class="i i-x"></i>Скрыть резюме</button> <div class="profile-item-actions-group">
<a href="/account/pay_service?service=4&amp;item_id=806129672&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span>
Премиум-размещение
</a> <a href="/account/pay_service?service=1&amp;item_id=806129672&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-vip"></i> </span>
Сделать VIP-объявлением
</a> <a href="/account/pay_service?service=2&amp;item_id=806129672&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-highlight"></i> </span>
Выделить
</a> <a href="/account/pay_service?service=3&amp;item_id=806129672&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-pushup-2"></i> </span>
Поднять в поиске
</a> <a href="/account/pay_package?item_id=806129672&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-package"></i> </span>
Применить пакет услуг
</a>
</div>
<div class="profile-item-actions-item"> <span class="js-show-stat pseudo-link" data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/806129672&quot; }"> <i class="i i-eye"></i>
Статистика просмотров
</span> </div> </div></div>

<div class="profile-item-messages">
</div> <div class="profile-item-data">

<div class="profile-item-data-price">Зарплата не указана</div>
</div>
</div> <div class="profile-item-footer">

<div class="profile-item-views"> <span class="profile-item-views-count js-show-stat pseudo-link c-2 " data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/806129672&quot; }"> <i class="profile-item-views-count-icon i i-eye"></i>
225 </span> </div>
</div> </div> </div>
<div class="profile-item-promo"> <i class="profile-item-promo-arrow"></i> <div class="profile-item-promo-content"> <div class="profile-item-promo-information">
Хотите найти работу быстрее?  Сделайте объявление
<span class="profile-item-promo-info-wrap"> <span class="profile-item-promo-type">
премиум-объявлением!
</span> <a class="help-link js-new-window profile-item-promo-info" target="_blank" href="/info/usluga_premium_obyavleniya?plain&amp;itemId=806129672"> <i class="i i-help"></i> </a> </span>
</div> <a href="/account/pay_service?service=4&amp;item_id=806129672&amp;vas_from=profile_items_active_promo" class="profile-item-promo-button button button-origin">
<span class="profile-item-promo-button-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span> <span class="profile-item-promo-button-text">Сделать премиум</span> </a> </div> </div>
<div class="profile-item-warning">
За последний 201 день объявление опустилось в поиске.
Работодателям сложно его найти.
<a href="/account/pay_service?service=3&amp;item_id=806129672&amp;vas_from=profile_items_active_link">Поднять наверх</a> </div> 
<div class="profile-item-cart-wrapper"> <div class="profile-item-cart js-profile-item-cart js-horizontal-scroll-content js-horizontal-scroll-cart"> <div class="profile-item-cart-title profile-item-cart-title_without-prolongation">
Продать быстрее: </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=premium&amp;item_id=806129672&amp;vas_from=profile_items_active_toolbar" data-type="premium" data-alias="package-premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Турбо-продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=vip&amp;item_id=806129672&amp;vas_from=profile_items_active_toolbar" data-type="vip" data-alias="package-vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Быстрая продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=4&amp;item_id=806129672&amp;vas_from=profile_items_active_toolbar" data-type="4" data-alias="premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Премиум</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=1&amp;item_id=806129672&amp;vas_from=profile_items_active_toolbar" data-type="1" data-alias="vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Сделать VIP</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=2&amp;item_id=806129672&amp;vas_from=profile_items_active_toolbar" data-type="2" data-alias="highlight"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Выделить</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=3&amp;item_id=806129672&amp;vas_from=profile_items_active_toolbar" data-type="3" data-alias="up"><span class="color-range" style="width: 100%;"></span><div class="btn-pro-text">Поднять</div></a><div class="profile-item-vas-tooltip-cont-3lGgk profile-item-vas-tooltip-cont-up-3VIZ2"></div></div></div> </div>
</div>
</div>
</div> </div>

<div class="profile-item js-profile-item" data-id="823715816" data-category-id="112" data-capped-by="">
<label class="profile-item-check"> <input type="checkbox" class="profile-item-checkbox js-profile-item-checkbox" value="823715816" name="item_id[]"> </label>
<div class="profile-item-container"> <div class="profile-item-content">
<a class="profile-item-photo js-photo profile-item-photo_add" href="/items/edit/823715816" title="Перейти на страницу редактирования объявления"> <i class="i i-add-photo"></i> </a>

<div class="profile-item-description"> <div class="profile-item-main"> <h3 class="profile-item-title"> <a name="item_823715816" href="/novokuznetsk/rezume/sozdanie_saytov_823715816" title="Создание сайтов — Перейти на страницу объявления">
Создание сайтов </a> </h3>
<div class="profile-item-actions"> <div class="profile-item-actions-fader"></div> <a class="profile-item-actions-link" href="/items/edit/823715816">Редактировать</a><span class="js-profile-item-actions-more profile-item-actions-more profile-item-actions-link pseudo-link c-2">ещё</span> <div class="tooltip tooltip_bottom js-profile-item-actions-more-tooltip"> <i class="tooltip-arrow"></i> <button class="button button-link profile-item-actions-item js-close-item-popup"> <i class="i i-x"></i>Скрыть резюме</button> <div class="profile-item-actions-group">
<a href="/account/pay_service?service=4&amp;item_id=823715816&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span>
Премиум-размещение
</a> <a href="/account/pay_service?service=1&amp;item_id=823715816&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-vip"></i> </span>
Сделать VIP-объявлением
</a> <a href="/account/pay_service?service=2&amp;item_id=823715816&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-highlight"></i> </span>
Выделить
</a> <a href="/account/pay_service?service=3&amp;item_id=823715816&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-pushup-2"></i> </span>
Поднять в поиске
</a> <a href="/account/pay_package?item_id=823715816&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-package"></i> </span>
Применить пакет услуг
</a>
</div>
<div class="profile-item-actions-item"> <span class="js-show-stat pseudo-link" data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/823715816&quot; }"> <i class="i i-eye"></i>
Статистика просмотров
</span> </div> </div></div>

<div class="profile-item-messages">
</div> <div class="profile-item-data">

<div class="profile-item-data-price">Зарплата не указана</div>
</div>
</div> <div class="profile-item-footer">

<div class="profile-item-views"> <span class="profile-item-views-count js-show-stat pseudo-link c-2 " data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/823715816&quot; }"> <i class="profile-item-views-count-icon i i-eye"></i>
221 </span> </div>
</div> </div> </div>
<div class="profile-item-promo"> <i class="profile-item-promo-arrow"></i> <div class="profile-item-promo-content"> <div class="profile-item-promo-information">
Хотите найти работу быстрее?  Сделайте объявление
<span class="profile-item-promo-info-wrap"> <span class="profile-item-promo-type">
премиум-объявлением!
</span> <a class="help-link js-new-window profile-item-promo-info" target="_blank" href="/info/usluga_premium_obyavleniya?plain&amp;itemId=823715816"> <i class="i i-help"></i> </a> </span>
</div> <a href="/account/pay_service?service=4&amp;item_id=823715816&amp;vas_from=profile_items_active_promo" class="profile-item-promo-button button button-origin">
<span class="profile-item-promo-button-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span> <span class="profile-item-promo-button-text">Сделать премиум</span> </a> </div> </div>
<div class="profile-item-warning">
За последний 201 день объявление опустилось в поиске.
Работодателям сложно его найти.
<a href="/account/pay_service?service=3&amp;item_id=823715816&amp;vas_from=profile_items_active_link">Поднять наверх</a> </div> 
<div class="profile-item-cart-wrapper"> <div class="profile-item-cart js-profile-item-cart js-horizontal-scroll-content js-horizontal-scroll-cart"> <div class="profile-item-cart-title profile-item-cart-title_without-prolongation">
Продать быстрее: </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=premium&amp;item_id=823715816&amp;vas_from=profile_items_active_toolbar" data-type="premium" data-alias="package-premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Турбо-продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=vip&amp;item_id=823715816&amp;vas_from=profile_items_active_toolbar" data-type="vip" data-alias="package-vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Быстрая продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=4&amp;item_id=823715816&amp;vas_from=profile_items_active_toolbar" data-type="4" data-alias="premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Премиум</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=1&amp;item_id=823715816&amp;vas_from=profile_items_active_toolbar" data-type="1" data-alias="vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Сделать VIP</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=2&amp;item_id=823715816&amp;vas_from=profile_items_active_toolbar" data-type="2" data-alias="highlight"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Выделить</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=3&amp;item_id=823715816&amp;vas_from=profile_items_active_toolbar" data-type="3" data-alias="up"><span class="color-range" style="width: 100%;"></span><div class="btn-pro-text">Поднять</div></a><div class="profile-item-vas-tooltip-cont-3lGgk profile-item-vas-tooltip-cont-up-3VIZ2"></div></div></div> </div>
</div>
</div>
</div> </div>

<div class="profile-item js-profile-item" data-id="1086768821" data-category-id="112" data-capped-by="">
<label class="profile-item-check"> <input type="checkbox" class="profile-item-checkbox js-profile-item-checkbox" value="1086768821" name="item_id[]"> </label>
<div class="profile-item-container"> <div class="profile-item-content">
<a class="profile-item-photo js-photo profile-item-photo_add" href="/items/edit/1086768821" title="Перейти на страницу редактирования объявления"> <i class="i i-add-photo"></i> </a>

<div class="profile-item-description"> <div class="profile-item-main"> <h3 class="profile-item-title"> <a name="item_1086768821" href="/novokuznetsk/rezume/web-programmist.web_razrabotchik_1086768821" title="Web-программист.Web разработчик — Перейти на страницу объявления">
Web-программист.Web разработчик </a> </h3>
<div class="profile-item-actions"> <div class="profile-item-actions-fader"></div> <a class="profile-item-actions-link" href="/items/edit/1086768821">Редактировать</a><span class="js-profile-item-actions-more profile-item-actions-more profile-item-actions-link pseudo-link c-2">ещё</span> <div class="tooltip tooltip_bottom js-profile-item-actions-more-tooltip"> <i class="tooltip-arrow"></i> <button class="button button-link profile-item-actions-item js-close-item-popup"> <i class="i i-x"></i>Скрыть резюме</button> <div class="profile-item-actions-group">
<a href="/account/pay_service?service=4&amp;item_id=1086768821&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span>
Премиум-размещение
</a> <a href="/account/pay_service?service=1&amp;item_id=1086768821&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-vip"></i> </span>
Сделать VIP-объявлением
</a> <a href="/account/pay_service?service=2&amp;item_id=1086768821&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-highlight"></i> </span>
Выделить
</a> <a href="/account/pay_service?service=3&amp;item_id=1086768821&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-pushup-2"></i> </span>
Поднять в поиске
</a> <a href="/account/pay_package?item_id=1086768821&amp;vas_from=profile_items_active_more" class="profile-item-actions-item"> <span class="profile-item-actions-item-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-package"></i> </span>
Применить пакет услуг
</a>
</div>
<div class="profile-item-actions-item"> <span class="js-show-stat pseudo-link" data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1086768821&quot; }"> <i class="i i-eye"></i>
Статистика просмотров
</span> </div> </div></div>

<div class="profile-item-messages">
</div> <div class="profile-item-data">

<div class="profile-item-data-price">20 000
<span class="font_arial-rub">₽</span>
</div>
</div>
</div> <div class="profile-item-footer">

<div class="profile-item-views"> <span class="profile-item-views-count js-show-stat pseudo-link c-2 " data-config="{ &quot;type&quot;: &quot;item&quot;, &quot;url&quot;: &quot;/items/stat/1086768821&quot; }"> <i class="profile-item-views-count-icon i i-eye"></i>
197 </span> </div>
</div> </div> </div>
<div class="profile-item-promo"> <i class="profile-item-promo-arrow"></i> <div class="profile-item-promo-content"> <div class="profile-item-promo-information">
Хотите найти работу быстрее?  Сделайте объявление
<span class="profile-item-promo-info-wrap"> <span class="profile-item-promo-type">
премиум-объявлением!
</span> <a class="help-link js-new-window profile-item-promo-info" target="_blank" href="/info/usluga_premium_obyavleniya?plain&amp;itemId=1086768821"> <i class="i i-help"></i> </a> </span>
</div> <a href="/account/pay_service?service=4&amp;item_id=1086768821&amp;vas_from=profile_items_active_promo" class="profile-item-promo-button button button-origin">
<span class="profile-item-promo-button-icon"> <i class="monetization-icon monetization-icon_xs monetization-icon_vas-premium"></i> </span> <span class="profile-item-promo-button-text">Сделать премиум</span> </a> </div> </div>
<div class="profile-item-warning">
За последний 361 день объявление опустилось в поиске.
Работодателям сложно его найти.
<a href="/account/pay_service?service=3&amp;item_id=1086768821&amp;vas_from=profile_items_active_link">Поднять наверх</a> </div> 
<div class="profile-item-cart-wrapper"> <div class="profile-item-cart js-profile-item-cart js-horizontal-scroll-content js-horizontal-scroll-cart"> <div class="profile-item-cart-title profile-item-cart-title_without-prolongation">
Продать быстрее: </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=premium&amp;item_id=1086768821&amp;vas_from=profile_items_active_toolbar" data-type="premium" data-alias="package-premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Турбо-продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=vip&amp;item_id=1086768821&amp;vas_from=profile_items_active_toolbar" data-type="vip" data-alias="package-vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Быстрая продажа</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=4&amp;item_id=1086768821&amp;vas_from=profile_items_active_toolbar" data-type="4" data-alias="premium"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Премиум</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=1&amp;item_id=1086768821&amp;vas_from=profile_items_active_toolbar" data-type="1" data-alias="vip"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Сделать VIP</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=2&amp;item_id=1086768821&amp;vas_from=profile_items_active_toolbar" data-type="2" data-alias="highlight"><span class="color-range" style="width: 0%;"></span><div class="btn-pro-text">Выделить</div></a><div class="profile-item-vas-tooltip-cont-3lGgk"></div></div></div> </div>
<div class="profile-item-cart-item profile-item-cart-item_without-prolongation">

<div class="js-react-profile-item-vas" data-props=""><div data-reactroot="" data-marker="vas-button" class="btn-pro-wrap"><a class="btn-pro js-buy profile-item-vas-btn-3YFEH" href="/account/pay_service?service=3&amp;item_id=1086768821&amp;vas_from=profile_items_active_toolbar" data-type="3" data-alias="up"><span class="color-range" style="width: 100%;"></span><div class="btn-pro-text">Поднять</div></a><div class="profile-item-vas-tooltip-cont-3lGgk profile-item-vas-tooltip-cont-up-3VIZ2"></div></div></div> </div>
</div>
</div>
</div> </div>
</div> </form>

</div>
</div>
<div class="js-footer"><div data-reactroot="" class="l-footer footer-root-17A-K  "><ul class="footer-nav-15hen"><li><a href="//www.avito.ru/additem" title="Подать объявление" class="footer-item-bHkmw">Подать объявление</a></li><li><a href="//www.avito.ru/novokuznetsk/" class="footer-item-bHkmw">Объявления</a></li><li><a href="//www.avito.ru/shops" class="footer-item-bHkmw">Магазины</a></li><li><a href="https://support.avito.ru" target="_blank" rel="noopener noreferrer" class="footer-item-bHkmw">Помощь</a></li><li><a href="//www.avito.ru/safety" class="footer-item-bHkmw">Безопасность</a></li><li><a href="//www.avito.ru/info/reklama_na_saite" rel="nofollow" class="footer-item-bHkmw">Реклама на сайте</a></li><li><a href="//www.avito.ru/company" class="footer-item-bHkmw">О компании</a></li><li><a href="//www.avito.ru/company/job" class="footer-item-bHkmw">Карьера</a></li><li><a href="//www.avito.ru/info/apps" class="footer-item-bHkmw"><strong>Мобильное приложение</strong></a></li></ul><div class="footer-info-2xlD6"><div class="footer-about-2C2m6"><!-- react-text: 24 -->© Avito — сайт объявлений. Использование сайта, в том числе подача объявлений, означает согласие с <!-- /react-text --><a href="//www.avito.ru/info/polzovatelskoe_soglashenie" class="footer-link-3roHv">пользовательским соглашением</a><!-- react-text: 26 -->.<!-- /react-text --><br><!-- react-text: 28 -->Оплачивая услуги на сайте, вы принимаете <!-- /react-text --><a href="//www.avito.ru/info/oferta" class="footer-link-3roHv">оферту</a><!-- react-text: 30 -->. <!-- /react-text --><a href="//www.avito.ru/help/tech_browser" class="footer-link-3roHv">Информация о cookies</a><!-- react-text: 32 -->. <!-- /react-text --></div></div></div></div>   </div>

@endsection