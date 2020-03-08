<div class="grid-100">
    <h1 class="logo">Crear una cuenta</h1>
</div>
<div class="content-container creation-container grid-parent">
    <div class="" id="information-container">
        <h1>Crear una cuenta</h1>
        <?php if(!$this->settings->info->disable_social_login) : ?>
            <div class="social-providers">
                <?php if(!empty($this->settings->info->facebook_app_id) && !empty($this->settings->info->facebook_app_secret)) : ?>
                    <?php echo form_open(site_url("login/facebook_login"), array('class' => 'account-creation-oauth-form', 'id' => 'account-creation-oauth-form-facebook'));?>
                        <button id="facebook" class="facebook btn btn-block btn-tertiary" type="submit">
                            <span>Facebook</span>
                        </button>
                    <?php echo form_close(); ?>
                <?php endif; ?>
                <?php if(!empty($this->settings->info->google_client_id) && !empty($this->settings->info->google_client_secret)) : ?>
                    <?php echo form_open(site_url("login/google_login"), array('class' => 'account-creation-oauth-form', 'id' => 'account-creation-oauth-form-google'));?>
                        <button id="google" class="google btn btn-block btn-tertiary" type="submit">
                            <span>Google</span>
                        </button>
                    <?php echo form_close(); ?>
                <?php endif; ?>
            </div>
            <div class="social-divider">
                <span>O</span>
            </div>
        <?php endif; ?>
        <p>Comienza tus aventuras en <span class="gameTitle">World of Warcraft</span>, gratis hasta el nivel 20, con una cuenta de Blizzard.</p>
    </div>
    <div class="grid-parent" id="form-container">
        <?php echo form_open("", array('method' =>'get', 'id' => 'change-country', 'name' => 'change-country'));?>
            <input type="hidden" name="style" value="PHOENIX" />
            <div class="control-group">
                <div class="country-list row-country">
                    <div class="mobile-arrow"></div>
                    <select class="select-box grid-100" id="country-list" name="country">
                        <?php foreach ($countries->result() as $value) { ?>
                        <option value="<?php echo $value->id; ?>" <?php echo ($this->input->get('country') == $value->id) ? '
                        selected': ''; ?>><?php echo $value->country_name; ?></option>
                        <?php } ?>
                    </select>
                    <span class="help-block"></span>
                </div>
            </div>
        <?php echo form_close(); ?>
        <?php echo form_open(site_url("/account/creation/tos.html"), array('id'=> 'account-creation', 'data-arkose-enabled'=> 'true', 'name'=>'account-creation', 'novalidate'=>'novalidate'));?>
            <input type="hidden" name="code" value="<?php if(isset($code)) echo $code ?>">
            <input id="country" name="country" required="required" type="hidden" value="<?php echo (!is_null($this->input->get('country'))) ? $this->input->get('country'): ''; ?>"/>
            <fieldset class="first">
                <div class="control-group grid-50">
                    <input type="text" id="firstName" name="firstName" value="" autocapitalize="on" autocomplete="off" autocorrect="off" maxlength="32" placeholder="Nombre" required="required" spellcheck="off" /> </div>
                <div class="control-group grid-50">
                    <input type="text" id="lastName" name="lastName" value="" autocapitalize="on" autocomplete="off" autocorrect="off" maxlength="32" placeholder="Apellido" required="required" spellcheck="off" /> </div>
                <div class="control-group grid-33 birth-date-inline">
                    <input name="dobDay" id="dobDay" placeholder="Día de nacimiento" maxlength="2" type="number" required="required" class="grid-100" value="" />
                </div>
                <div class="control-group grid-33 birth-date-inline ">
                    <div class="mobile-arrow"></div>
                    <select name="dobMonth" id="dobMonth" required="required" class="grid-100 select-box">
                        <option value="" selected="selected" data-placeholder="placeholder">Mes</option>
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>
                </div>
                <div class="control-group grid-33">
                    <input name="dobYear" id="dobYear" placeholder="Año" maxlength="4" type="number" required="required" class="grid-100" value="" />
                </div>
            </fieldset>
            <fieldset>
                <div class="control-group">
                    <input type="text" id="username" name="username" value="" placeholder="Nombre de Usuario" maxlength="15" autocapitalize="off" autocomplete="off" autocorrect="off" class="grid-100" spellcheck="false" required="true" />
                </div>
                <div class="control-group row-emailAddress ">
                    <input type="email" id="emailAddress" name="emailAddress" value="" placeholder="Dirección de correo electrónico" maxlength="320" autocapitalize="off" autocomplete="off" autocorrect="off" class="grid-100" spellcheck="false" required="true" /> <span id="emailAddress-error-inline" class="help-block"></span>
                </div>
                <div class="control-group row-password ">
                    <input type="password" id="password" name="password" value="" maxlength="16" placeholder="Contraseña" class="password-input showGuidelines" data-email_field="#emailAddress" autocapitalize="off" autocomplete="off" autocorrect="off" spellcheck="false" required="true" />
                    <div class="password-rating"></div>
                    <span id="password-error-inline" class="help-block"></span>
                </div>
            </fieldset>
            <fieldset>
                <div class="control-group row-secret-question">
                    <div class="mobile-arrow"></div>
                    <select class="select-box grid-100" id="question1" name="question1" required="required">
                        <option value="">Selecciona una pregunta</option>
                        <?php foreach ($secret_question->result() as $value) {  ?>
                        <option value="<?php echo $value->id; ?>"><?php echo $value->question; ?></option>
                        <?php } ?>
                    </select>
                    <span id="question1-error-inline" class="help-block"></span>
                </div>
                <div class="control-group row-answer1 ">
                    <input type="text" id="answer1" name="answer1" value="" placeholder="Respuesta secreta" maxlength="99" autocapitalize="off" autocomplete="off" autocorrect="off" class="grid-100" spellcheck="false" required="true" /> <span id="answer1-error-inline" class="help-block"></span>
                </div>
            </fieldset>
            <fieldset>
                <?php if(!$this->settings->info->disable_captcha) : ?>
                    <div class="control-group grid-50">
                        <?php echo $cap['image'] ?>
                    </div>
                    <div class="control-group grid-50">
                        <input type="text" class="form-control" id="captcha-in" name="captcha" placeholder="<?php echo lang("ctn_306") ?>" value="">
                    </div>
		  		<?php endif; ?>

		  		<?php if($this->settings->info->google_recaptcha) : ?>
                    <div class="control-group grid-50">
				        <div class="g-recaptcha" data-sitekey="<?php echo $this->settings->info->google_recaptcha_key ?>"></div> 
		  		    </div>
		  		<?php endif ?>
            </fieldset>
            <fieldset>
                <div class="control-group">
                    <div class="grid-100 row-checkbox">
                        <label class="checkbox-label">
                            <input checked="checked" id="receiveNewsSpecialOffersFlame" name="receiveNewsSpecialOffersFlame" type="checkbox" value="1"/> Recibir noticias y ofertas especiales de Blizzard Entertainment por email.
                            <br><em>Noticias cuidadosamente seleccionadas y ofertas especiales de productos y servicios de Blizzard por email.</em>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset>
            </fieldset>
            <div class="form-controls">
                <button class="btn btn-block btn-primary" id="creation-submit-button" type="submit">
                    <span class="button-text">Crear una cuenta gratuita</span>
                    <i class="spinner-battlenet"></i>
                </button>
                <a class="btn btn-block" id="creation-cancel-button" href="https://us.battle.net/login/">
                    <span class="button-text">¿Ya tienes una cuenta?</span>
                    <i class="spinner-battlenet"></i>
                </a>
            </div>
            <div class="fine-print grid-100">
                <p>Al pulsar sobre “Crear una cuenta gratuita”, acepto el <a rel="external" href="https://us.blizzard.com/company/legal/eula.html" target="_blank">Contrato de Licencia de Usuario Final de Blizzard<i class="icon-external-link"></i></a> y la <a rel="external" href="https://us.blizzard.com/es-es/company/about/privacy.html" target="_blank">Política de Privacidad<i class="icon-external-link"></i></a>.</p>
            </div>
        <?php echo form_close(); ?>
        <script type="text/javascript">
            //<![CDATA[
            // [CA-286] Track fields that have data entered and what order
            var inputOrder = 0;
            $(function() {
                $("input, select", $("#account-creation")).each(function() {
                    $(this).attr("data-input-order", "");
                });
                $("input, select", $("#account-creation")).change(function() {
                    var that = $(this);
                    var dataAttribute = that.attr("data-input-order");
                    if (typeof dataAttribute === typeof undefined || dataAttribute == "") {
                        that.attr("data-input-order", ++inputOrder);
                        var obj = {};
                        obj['event'] = "gtm.message";
                        obj['input-order'] = that.attr("data-input-order") + "-" + that.attr("id");
                        dataLayer.push(obj);
                    }
                });
            });
            //]]>
        </script>
    </div>
</div>