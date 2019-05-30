<?php

/* __string_template__2ebf85c1f4fbb3ab923683becc3ffd6d75d5532060a947960193ce40e80ff226 */
class __TwigTemplate_6d11327431cc0a7e4659c9cbaaba0d8e7bd211619fdfe0f1311d84fde6025db4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop_1.7.5.1/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop_1.7.5.1/img/app_icon.png\" />

<title>Albaranes de entrega • ServiCenterExpress</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminDeliverySlip';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'CL';
    var _PS_VERSION_ = '1.7.5.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '91c91cf6d1b2b123188b59e1826e1cea';
    var token_admin_orders = '462cf51c830a0d8f5a39e0837a48da09';
    var token_admin_customers = '99771cd5b33665cb5ab3eb78e9b15db9';
    var token_admin_customer_threads = '2cc668d93bba5f9ebaa83abe4d10ba5c';
    var currentIndex = 'index.php?controller=AdminDeliverySlip';
    var employee_token = '59b57dcfea9e08f354a3610fa54734f1';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/modules/catalog/recommended?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw';
    var tab_modules_list = 'bpostshm,socolissimo,seur,correos,imaxgls,wing,expeditor,mondialrelay,tntcarrier,packlink,boxtalconnect,chronopost,lanavettepickup,lowcostexpress,dpdfrance,lecabflash,cubyn,emtshipping,purolator,upstracking,stampsdotcom,apiway,upela';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/prestashop_1.7.5.1/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.5.1/admin011ymyzqt/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.5.1/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.5.1/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.5.1/admin011ymyzqt/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop_1.7.5.1\\/admin011ymyzqt\\/\";
var baseDir = \"\\/prestashop_1.7.5.1\\/\";
var currency = {\"iso_code\":\"CLP\",\"sign\":\"\$\",\"name\":\"peso chileno\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/admin011ymyzqt/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/admin.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/tools.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/admin011ymyzqt/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/admin011ymyzqt/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminGamification&token=3671bff3d67a72c9af55ba1ad1a96310';
\t\t\t\tvar current_id_tab = 7;
\t\t\t</script>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-es admindeliveryslip\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminDashboard&amp;token=d2fe1a43cd68da599346435306da7b4c\"></a>
    <span id=\"shop_version\">1.7.5.1</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=5c98d77c51cfca18b61a6b4c38b74b82\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/modules/manage?token=2818cc92156a70ce6294120f2245c909\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCategories&amp;addcategory&amp;token=e6409ec3ac088b841d37af2f4699c408\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php/sell/catalog/products/new?token=2818cc92156a70ce6294120f2245c909\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=73db868389423a570f41dd410eecfd84\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminOrders&amp;token=462cf51c830a0d8f5a39e0837a48da09\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"156\"
        data-icon=\"icon-AdminParentOrders\"
        data-method=\"add\"
        data-url=\"index.php/sell/orders/delivery-slips/?-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\"
        data-post-link=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminQuickAccesses&token=9caac9757134c9fe20d710a74063c50a\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Albaranes de entrega - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminQuickAccesses&token=9caac9757134c9fe20d710a74063c50a\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminSearch&amp;token=8cd80578bb63efe64aa1175b54f4aa71\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
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
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8888/prestashop_1.7.5.1/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver mi tienda
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
              Pedidos<span id=\"_nb_new_orders_\"></span>
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
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=d7163dce918578a492f111169109879e\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              ¡Eso significa más tiempo para otras cosas!
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
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
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/diexgox%40gmail.com.jpg\" />
      <span>Servicenteradm Express</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=59b57dcfea9e08f354a3610fa54734f1\">
      <i class=\"material-icons\">settings_applications</i>
      Tu perfil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminLogin&amp;logout=1&amp;token=1ecb152945f67ba4bab387da1c98476f\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminDashboard&amp;token=d2fe1a43cd68da599346435306da7b4c\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminOrders&amp;token=462cf51c830a0d8f5a39e0837a48da09\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminOrders&amp;token=462cf51c830a0d8f5a39e0837a48da09\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/sell/orders/invoices/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminSlip&amp;token=f7b5eb1c8d96749e0d2aa5fa4c2fc810\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/sell/orders/delivery-slips/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCarts&amp;token=d7163dce918578a492f111169109879e\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/sell/catalog/products?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/sell/catalog/products?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCategories&amp;token=e6409ec3ac088b841d37af2f4699c408\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminTracking&amp;token=ec342d1c0da9c14e99fc0fe6435985e5\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminAttributesGroups&amp;token=0f01aada4c4cd39e39b2caa88d7d6e34\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminManufacturers&amp;token=9e43bddb8517c6176df1b04d69606947\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminAttachments&amp;token=166334ab704a38e79debcb5b5f479895\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCartRules&amp;token=73db868389423a570f41dd410eecfd84\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/sell/stocks/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCustomers&amp;token=99771cd5b33665cb5ab3eb78e9b15db9\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCustomers&amp;token=99771cd5b33665cb5ab3eb78e9b15db9\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminAddresses&amp;token=34a62d80ba32aa1bc5194df5cda6aa25\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCustomerThreads&amp;token=2cc668d93bba5f9ebaa83abe4d10ba5c\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCustomerThreads&amp;token=2cc668d93bba5f9ebaa83abe4d10ba5c\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminOrderMessage&amp;token=c5b204ba14c247e1361ce395baf0bb31\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminReturn&amp;token=b37f62be80e6a4b6d95cc8478929116f\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminStats&amp;token=5c98d77c51cfca18b61a6b4c38b74b82\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminPsMboModule&amp;token=a2896becf5879f325ad78b88fa593777\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminPsMboModule&amp;token=a2896becf5879f325ad78b88fa593777\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/modules/manage?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminThemes&amp;token=4d0d4b48b4199efd378d69ac5986d0a5\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminThemes&amp;token=4d0d4b48b4199efd378d69ac5986d0a5\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminPsMboTheme&amp;token=3ddaa2decd913315164d41cb476c5a91\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCmsContent&amp;token=3d4d6f6bffab6a17638f48ae8f403fa7\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/design/modules/positions/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminImages&amp;token=39e56d4890176fd53374771c400aa128\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminLinkWidget&amp;token=e12106bf4c7229e98c6e605ddfa21771\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCarriers&amp;token=15005ec4dbeaa55a0195809e3e105eef\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminCarriers&amp;token=15005ec4dbeaa55a0195809e3e105eef\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/shipping/preferences?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/payment/payment_methods?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/payment/payment_methods?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/payment/preferences?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/international/localization/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/international/localization/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminZones&amp;token=f87fa68043e079bff2145714b233c9f1\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminTaxes&amp;token=153668eeee377f8980c1a3494b51085e\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/international/translations/settings?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/shop/preferences/preferences?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/shop/preferences/preferences?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/shop/order-preferences/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/shop/product-preferences/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/shop/customer-preferences/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminContacts&amp;token=f8f0005d15782c25ebcdc25252fa582f\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/shop/seo-urls/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminSearchConf&amp;token=25b18134a7ff927e0da985c9289f4ed7\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminGamification&amp;token=3671bff3d67a72c9af55ba1ad1a96310\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/advanced/system-information/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/advanced/system-information/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/advanced/performance/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/advanced/administration/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/advanced/emails/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/advanced/import/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminEmployees&amp;token=59b57dcfea9e08f354a3610fa54734f1\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminRequestSql&amp;token=2563410df7f18377d697674e170f5bad\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/configure/advanced/logs/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminWebservice&amp;token=085747dbfccd09258b9d73c98102ff05\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Pedidos</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/sell/orders/delivery-slips/?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\" aria-current=\"page\">Albaranes de entrega</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Albaranes de entrega          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminPsMboModule&token=a2896becf5879f325ad78b88fa593777';
    var controller = 'AdminDeliverySlip';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                              <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/improve/modules/catalog?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\"                title=\"Módulos recomendados\"
                              >
                Módulos recomendados
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop_1.7.5.1/admin011ymyzqt/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminDeliverySlip%253Fversion%253D1.7.5.1%2526country%253Des/Ayuda?_token=hB-qmZuWUDTuc7N3TOq3C03pzCGx27PXXDvc3I881Aw\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
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
        // line 1114
        $this->displayBlock('content_header', $context, $blocks);
        // line 1115
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1116
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1117
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1118
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Módulos y Servicios recomendados</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost:8888/prestashop_1.7.5.1/admin011ymyzqt/index.php?controller=AdminDashboard&amp;token=d2fe1a43cd68da599346435306da7b4c\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=diexgox%40gmail.com&amp;firstname=Servicenteradm&amp;lastname=Express&amp;website=http%3A%2F%2Flocalhost%3A8888%2Fprestashop_1.7.5.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop_1.7.5.1/admin011ymyzqt/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=diexgox%40gmail.com&amp;firstname=Servicenteradm&amp;lastname=Express&amp;website=http%3A%2F%2Flocalhost%3A8888%2Fprestashop_1.7.5.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
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
        // line 1241
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1114
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1115
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1116
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1117
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1241
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__2ebf85c1f4fbb3ab923683becc3ffd6d75d5532060a947960193ce40e80ff226";
    }

    public function getDebugInfo()
    {
        return array (  1320 => 1241,  1315 => 1117,  1310 => 1116,  1305 => 1115,  1300 => 1114,  1291 => 82,  1283 => 1241,  1158 => 1118,  1155 => 1117,  1152 => 1116,  1149 => 1115,  1147 => 1114,  111 => 82,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__2ebf85c1f4fbb3ab923683becc3ffd6d75d5532060a947960193ce40e80ff226", "");
    }
}
