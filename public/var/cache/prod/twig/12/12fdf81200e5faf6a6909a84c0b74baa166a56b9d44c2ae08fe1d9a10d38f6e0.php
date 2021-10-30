<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__f112cf895607ac26d6ce1b9d5f6dc5976e165e7a80dddd83ddca56ba8058063c */
class __TwigTemplate_07bddd3833f5de4c23890d7f78cbf2e3c2ebd271bf5dbfefd555ffec168aab91 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"gb\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Product Settings • Mein Weinlieferant - Bringt den Weingenuss zu mir.</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPPreferences';
    var iso_user = 'gb';
    var lang_is_rtl = '0';
    var full_language_code = 'en-gb';
    var full_cldr_language_code = 'en-GB';
    var country_iso_code = 'DE';
    var _PS_VERSION_ = '1.7.7.8';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed in your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer has registered in your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = 'e026f8bfe2eced238074eb846f85e77a';
    var token_admin_orders = '3ad6b27d542a0cfb2a696508f833e948';
    var token_admin_customers = 'eadc5627bca5c06bdf3e16d6157de354';
    var token_admin_customer_threads = 'f98243a166551b725e693bf533273ff5';
    var currentIndex = 'index.php?controller=AdminPPreferences';
    var employee_token = '924a9b4797a0f0f41a5a7ed1ee22cda1';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/backoffice/index.php/improve/modules/catalog/recommended?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY';
    var admin_notification_get_link = '/backoffice/index.php/common/notifications?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY';
    var admin_notification_push_link = '/backoffice/index.php/common/notifications/ack?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/backoffice/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/backoffice/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/backoffice\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/backoffice\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/backoffice/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.7.8\"></script>
<script type=\"text/javascript\" src=\"/backoffice/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.7.8\"></script>
<script type=\"text/javascript\" src=\"/backoffice/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/backoffice/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_googleanalytics/views/js/GoogleAnalyticActionLib.js\"></script>

  
<script type=\"text/javascript\">
\t(window.gaDevIds=window.gaDevIds||[]).push('d6YPbH');
\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', '1231345645', 'auto');
                    ga('set', 'anonymizeIp', true);
                ga('send', 'pageview');
    
    ga('require', 'ec');
</script>


    
    <script type=\"text/javascript\">
        ga('send', 'pageview');
    </script>
    


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-gb adminppreferences\"
  data-base-url=\"/backoffice/index.php\"  data-token=\"wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminDashboard&amp;token=e09de9fb8ad91fe382cb6a60974c1e83\"></a>
      <span id=\"shop_version\">1.7.7.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=bc264e7d34fd254464d1cccd7f1cc30e\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php/sell/catalog/products/new?token=8bc23de716dbd4b4f52cee9cb5664b16\"
                 data-item=\"Neues Produkt\"
      >Neues Produkt</a>
          <a class=\"dropdown-item\"
         href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminCategories&amp;addcategory&amp;token=54154e9e488c4fcaccd63938a37d5ba5\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=bceb8c484c8ba85d047e82a7da8b0c7f\"
                 data-item=\"New voucher\"
      >New voucher</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"48\"
        data-icon=\"icon-ShopParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/product-preferences/?-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\"
        data-post-link=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminQuickAccesses&token=d20a4ca99add0fee07da9d2ffa97aca4\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Product Settings - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a class=\"dropdown-item\" href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminQuickAccesses&token=d20a4ca99add0fee07da9d2ffa97aca4\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/backoffice/index.php?controller=AdminSearch&amp;token=01a0ae0f925ff998ccdc9a328ef42201\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by IP address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://order-der-weinprovider.dev.data-horizon.de/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      View my shop
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=64b710c41913525afa8fa6f5d278bed7\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Have you considered selling on marketplaces?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              No news is good news, isn't it?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/weine-robert-geisler%40nefkom.net.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Robert</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/backoffice/index.php/configure/advanced/employees/1/edit?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\">
      <i class=\"material-icons\">settings</i>
      Your profile
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminLogin&amp;logout=1&amp;token=1772bcc3cdc3f74f5e2cf547543bfaf3\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/backoffice/index.php/configure/advanced/employees/toggle-navigation?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"108\" id=\"tab-AdminDashboard\">
              <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminDashboard&amp;token=e09de9fb8ad91fe382cb6a60974c1e83\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"109\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"110\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/backoffice/index.php/sell/orders/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-110\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminOrders\">
                                <a href=\"/backoffice/index.php/sell/orders/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"112\" id=\"subtab-AdminInvoices\">
                                <a href=\"/backoffice/index.php/sell/orders/invoices/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminSlip\">
                                <a href=\"/backoffice/index.php/sell/orders/credit-slips/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Credit Notes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/backoffice/index.php/sell/orders/delivery-slips/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminCarts\">
                                <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminCarts&amp;token=64b710c41913525afa8fa6f5d278bed7\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"116\" id=\"subtab-AdminCatalog\">
                    <a href=\"/backoffice/index.php/sell/catalog/products?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-116\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminProducts\">
                                <a href=\"/backoffice/index.php/sell/catalog/products?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"118\" id=\"subtab-AdminCategories\">
                                <a href=\"/backoffice/index.php/sell/catalog/categories?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminTracking\">
                                <a href=\"/backoffice/index.php/sell/catalog/monitoring/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"120\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminAttributesGroups&amp;token=5a5eab0d482c6f77e011dad258b2a208\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/backoffice/index.php/sell/catalog/brands/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminAttachments\">
                                <a href=\"/backoffice/index.php/sell/attachments/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminCartRules&amp;token=bceb8c484c8ba85d047e82a7da8b0c7f\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/backoffice/index.php/sell/stocks/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"131\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/backoffice/index.php/sell/customers/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-131\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"132\" id=\"subtab-AdminCustomers\">
                                <a href=\"/backoffice/index.php/sell/customers/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"133\" id=\"subtab-AdminAddresses\">
                                <a href=\"/backoffice/index.php/sell/addresses/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"135\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminCustomerThreads&amp;token=f98243a166551b725e693bf533273ff5\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-135\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminCustomerThreads&amp;token=f98243a166551b725e693bf533273ff5\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/backoffice/index.php/sell/customer-service/order-messages/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"138\" id=\"subtab-AdminReturn\">
                                <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminReturn&amp;token=b9531be0513efe533aa55003b56b240d\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"139\" id=\"subtab-AdminStats\">
                    <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminStats&amp;token=bc264e7d34fd254464d1cccd7f1cc30e\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"237\" id=\"subtab-AdminManagePostcode\">
                    <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminManagePostcode&amp;token=79b51ef89811de3b2e176d8fab989303\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      PLZ Liefergebiete
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"149\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"150\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/backoffice/index.php/improve/modules/manage?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-150\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"151\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/backoffice/index.php/improve/modules/manage?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Module manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"155\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/backoffice/index.php/improve/modules/catalog?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"159\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/backoffice/index.php/improve/design/themes/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-159\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"160\" id=\"subtab-AdminThemes\">
                                <a href=\"/backoffice/index.php/improve/design/themes/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"161\" id=\"subtab-AdminThemesCatalog\">
                                <a href=\"/backoffice/index.php/improve/design/themes-catalog/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"162\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/backoffice/index.php/improve/design/mail_theme/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"164\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/backoffice/index.php/improve/design/cms-pages/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"165\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/backoffice/index.php/improve/design/modules/positions/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"166\" id=\"subtab-AdminImages\">
                                <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminImages&amp;token=6f20b9d3f1beae4c512d3294943db22e\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"232\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/backoffice/index.php/modules/link-widget/list?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"167\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminCarriers&amp;token=2b99d33e1115d5aceea8da91fd7dfe39\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-167\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"168\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminCarriers&amp;token=2b99d33e1115d5aceea8da91fd7dfe39\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"169\" id=\"subtab-AdminShipping\">
                                <a href=\"/backoffice/index.php/improve/shipping/preferences?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"170\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/backoffice/index.php/improve/payment/payment_methods?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-170\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"171\" id=\"subtab-AdminPayment\">
                                <a href=\"/backoffice/index.php/improve/payment/payment_methods?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"172\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/backoffice/index.php/improve/payment/preferences?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"173\" id=\"subtab-AdminInternational\">
                    <a href=\"/backoffice/index.php/improve/international/localization/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-173\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"174\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/backoffice/index.php/improve/international/localization/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"179\" id=\"subtab-AdminParentCountries\">
                                <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminZones&amp;token=a45db7195f8dcfe9d21c15fb6f5af1ad\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"183\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/backoffice/index.php/improve/international/taxes/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> VAT
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"186\" id=\"subtab-AdminTranslations\">
                                <a href=\"/backoffice/index.php/improve/international/translations/settings?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"187\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"188\" id=\"subtab-ShopParameters\">
                    <a href=\"/backoffice/index.php/configure/shop/preferences/preferences?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-188\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"189\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/backoffice/index.php/configure/shop/preferences/preferences?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"192\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/backoffice/index.php/configure/shop/order-preferences/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"195\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/backoffice/index.php/configure/shop/product-preferences/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"196\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/backoffice/index.php/configure/shop/customer-preferences/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"200\" id=\"subtab-AdminParentStores\">
                                <a href=\"/backoffice/index.php/configure/shop/contacts/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> CMS page
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"203\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/backoffice/index.php/configure/shop/seo-urls/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"207\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminSearchConf&amp;token=8ee44565e36d124316b512e815ef670a\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"210\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/backoffice/index.php/configure/advanced/system-information/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-210\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"211\" id=\"subtab-AdminInformation\">
                                <a href=\"/backoffice/index.php/configure/advanced/system-information/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"212\" id=\"subtab-AdminPerformance\">
                                <a href=\"/backoffice/index.php/configure/advanced/performance/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"213\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/backoffice/index.php/configure/advanced/administration/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"214\" id=\"subtab-AdminEmails\">
                                <a href=\"/backoffice/index.php/configure/advanced/emails/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"215\" id=\"subtab-AdminImport\">
                                <a href=\"/backoffice/index.php/configure/advanced/import/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"216\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/backoffice/index.php/configure/advanced/employees/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"220\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/backoffice/index.php/configure/advanced/sql-requests/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"223\" id=\"subtab-AdminLogs\">
                                <a href=\"/backoffice/index.php/configure/advanced/logs/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"224\" id=\"subtab-AdminWebservice\">
                                <a href=\"/backoffice/index.php/configure/advanced/webservice-keys/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"234\" id=\"subtab-AdminCookieLaw\">
                    <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminCookieLaw&amp;token=994ced0a1ee1f9c0c2ed4eb296dfbff5\" class=\"link\">
                      <i class=\"material-icons mi-account_balance\">account_balance</i>
                      <span>
                      CookieLaw settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Shop Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/backoffice/index.php/configure/shop/product-preferences/?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\" aria-current=\"page\">Product Settings</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Product Settings          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/backoffice/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fgb%252Fdoc%252FAdminPPreferences%253Fversion%253D1.7.7.8%2526country%253Dgb/Help?_token=wrNTwGoziX-6FDsNhhWM1Ukc4atk4Yb0gP9dStG8mPY\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1094
        $this->displayBlock('content_header', $context, $blocks);
        // line 1095
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1096
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1097
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1098
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"https://order-der-weinprovider.dev.data-horizon.de/backoffice/index.php?controller=AdminDashboard&amp;token=e09de9fb8ad91fe382cb6a60974c1e83\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-GB&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/gb/login?email=weine-robert-geisler%40nefkom.net&amp;firstname=Robert&amp;lastname=Geisler&amp;website=http%3A%2F%2Forder-der-weinprovider.dev.data-horizon.de%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-GB&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/backoffice/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/gb/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/gb/login?email=weine-robert-geisler%40nefkom.net&amp;firstname=Robert&amp;lastname=Geisler&amp;website=http%3A%2F%2Forder-der-weinprovider.dev.data-horizon.de%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-GB&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1205
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1094
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1095
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1096
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1097
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1205
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__f112cf895607ac26d6ce1b9d5f6dc5976e165e7a80dddd83ddca56ba8058063c";
    }

    public function getDebugInfo()
    {
        return array (  1295 => 1205,  1290 => 1097,  1285 => 1096,  1280 => 1095,  1275 => 1094,  1266 => 102,  1258 => 1205,  1149 => 1098,  1146 => 1097,  1143 => 1096,  1140 => 1095,  1138 => 1094,  142 => 102,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f112cf895607ac26d6ce1b9d5f6dc5976e165e7a80dddd83ddca56ba8058063c", "");
    }
}
