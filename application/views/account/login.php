<div class="center-wrapper">
    <h1 class="logo">Iniciar sesión en tu cuenta de Blizzard</h1>
    <div class="hide" id="info-wrapper">
        <h2><strong class="info-title"></strong></h2>
        <p class="info-body"></p>
        <button class="btn btn-block hide visible-phone" id="info-phone-close">Cerrar</button>
    </div>
    <div class="input" id="login-wrapper">
        <div class="login">
            <?php $gl = $this->session->flashdata('globalmsg'); ?>
            <?php if(!empty($gl)) :?>
            <div id="display-errors" class="alert alert-error alert-icon">
                <?php echo $this->session->flashdata('globalmsg') ?><br>
                <a href="<?php echo site_url("account/recovery/identify-account.html"); ?>">
                    ¿Has olvidado tu contraseña?
                </a>
            </div>
            <?php endif; ?>
            <?php if(isset($_GET['redirect'])) : ?>
        <?php echo form_open(site_url("account/pro/" . urlencode($_GET['redirect'])), array("id" => "")) ?>
        <?php else : ?>
        <?php echo form_open(site_url("account/pro"), array("id" => "")) ?>
        <?php endif; ?>
                <div id="login-input-container" class="">
                    <div id="js-errors" class="alert alert-error alert-icon hide">
                        <p id="cookie-check" class="hide">Las cookies de tu navegador se encuentran desactivadas. Debes activarlas para continuar.</p>
                    </div>
                    <noscript>
                        <div id="javascript-disabled" class="alert alert-error alert-icon">
                            Debes tener activado JavaScript para utilizar esta página.
                        </div>
                    </noscript>
                    <div class="control-group">
                        <label id="accountName-label" class="control-label" for="accountName">Correo electrónico o número de teléfono</label>
                        <div class="controls">
                            <input aria-labelledby="accountName-label" id="accountName" name="accountName" title="Correo electrónico o número de teléfono" maxlength="320" type="text" tabindex="1" class="input-block input-large" placeholder="Correo electrónico o número de teléfono" autocorrect="off" spellcheck="false" />
                            <span class="input-after"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label id="password-label" class="control-label" for="password">Contraseña</label>
                        <div class="controls">
                            <input aria-labelledby="password-label" id="password" name="password" title="Contraseña" maxlength="128" type="password" tabindex="1" class="input-block input-large" autocomplete="off" placeholder="Contraseña" autocorrect="off" spellcheck="false" data-show-password-message="Mostrar" data-hide-password-message="Ocultar" />
                            <span class="input-after"></span>
                        </div>
                    </div>
                    <input type="hidden" id="useSrp" name="useSrp" value="false" />
                    <input type="hidden" id="publicA" name="publicA" value="" />
                    <input type="hidden" id="clientEvidenceM1" name="clientEvidenceM1" value="" />
                    <div class="persistWrapper">
                        <label id="persistLogin-label" class="checkbox-label css-label hide" for="persistLogin">
                            <input aria-labelledby="persistLogin-label" id="persistLogin" name="persistLogin" type="checkbox" checked="checked" tabindex="1" />
                            <span class="input-checkbox"></span> Seguir conectado
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <button type="submit" class="btn btn-primary btn-large btn-block" data-loading-text="" tabindex="1">
                        <?php echo lang("ctn_150") ?>
                        <i class="spinner-battlenet"></i>
                    </button>
                </div>
                <input type="hidden" id="csrftoken" class="csrftoken" name="csrftoken" value="98dc7a2f-9836-4050-8ad2-a673516ff97c" />
                <input type="hidden" id="sessionTimeout" name="sessionTimeout" value="1583713545447" />
            <?php echo form_close(); ?>
            <?php if(!$this->settings->info->disable_social_login) : ?>
                <div class="thirdparty-line">
                    <span>O INICIA SESIÓN CON</span>
                </div>
                <div class="useResponse social-login external-login-container">

                    <?php if(!empty($this->settings->info->facebook_app_id) && !empty($this->settings->info->facebook_app_secret)) : ?>
                        <?php echo form_open(site_url("login/facebook_login"), array('class'=> 'third-party-login btn-social', 'enctype'=> '')); ?>
                            <button id="facebook" class="btn btn-block btn-large btn-tertiary" rel="external" tabindex="1">
                                <i class="icon-facebook"></i> Facebook
                            </button>
                            <input type="hidden" name="scope" value="public_profile,email,user_friends" />
                            <input type="hidden" name="ref" value="" />
                            <input type="hidden" name="app" value="" />
                            <input type="hidden" name="scheme" value="" />
                        <?php echo form_close(); ?>
                    <?php endif; ?>
                    <?php echo form_open(site_url("login/facebook_login"), array('id' =>'googleLogin', 'class'=> 'third-party-login btn-social', 'enctype'=> '')); ?>
                        <button id="google" class="btn btn-block btn-large btn-tertiary" rel="external" tabindex="1">
                            <i class="icon-google"></i> Google
                        </button>
                        <input type="hidden" name="scope" value="openid,profile,email" />
                        <input type="hidden" name="ref" value="" />
                        <input type="hidden" name="app" value="" />
                        <input type="hidden" name="scheme" value="" />
                    <?php echo form_close(); ?>
                </div>
            <?php endif; ?>
            <ul id="help-links">
                <li>
                    <a rel="internal" href="https://us.battle.net/account/creation/tos.html?theme=blizzard" tabindex="1" id="signup">
                    Crear cuenta de Blizzard gratis
                    </a>
                </li>
                <li>
                    <a rel="internal" href="<?php echo site_url("login/forgotpw") ?>" tabindex="1" id="loginSupport">
                    ¿No puedes iniciar sesión?
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
