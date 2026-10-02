<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.twig */
class __TwigTemplate_7401e5b172651a02579ead11c6d81427 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("mailcow_locale", $context)) ? (Twig\Extension\CoreExtension::default(($context["mailcow_locale"] ?? null), "en")) : ("en")), "html", null, true);
        yield "\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
  <meta name=\"theme-color\" content=\"#F5D76E\"/>
  <meta http-equiv=\"Referrer-Policy\" content=\"same-origin\">
  <title>";
        // line 9
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "title_name", [], "any", false, false, false, 9);
        yield "</title>

  <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["css_path"] ?? null), "html", null, true);
        yield "\">
  <script>
    // check if darkmode is preferred by OS or set by localStorage
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches && localStorage.getItem(\"theme\") !== \"light\" ||
        localStorage.getItem(\"theme\") === \"dark\") {
      var head  = document.getElementsByTagName('head')[0];
      var link  = document.createElement('link');
      link.id   = 'dark-mode-theme';
      link.rel  = 'stylesheet';
      link.type = 'text/css';
      link.href = '/css/themes/mailcow-darkmode.css';
      head.appendChild(link);
    }
  </script>

  <link rel=\"shortcut icon\" href=\"/favicon.png\" type=\"image/png\">
  <link rel=\"icon\" href=\"/favicon.png\" type=\"image/png\">
</head>
<body>
<div class=\"overlay\"></div>
";
        // line 31
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 126
        yield "
<form action=\"/\" method=\"post\" id=\"logout\"><input type=\"hidden\" name=\"logout\"></form>

";
        // line 129
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 129) && CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 129)) &&  !($context["is_root_uri"] ?? null))) {
            // line 130
            yield "<div class=\"container mt-4\">
  <div class=\"alert alert-";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 131), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 131), "html", null, true);
            yield "</div>
</div>
";
        }
        // line 134
        yield "
<div class=\"container my-4\">
";
        // line 136
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 137
        yield "</div>

";
        // line 139
        yield from         $this->loadTemplate("modals/footer.twig", "base.twig", 139)->unwrap()->yield($context);
        // line 140
        yield "
<script src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_path"] ?? null), "html", null, true);
        yield "\"></script>
<script>
  var lang_footer = ";
        // line 143
        yield ($context["lang_footer"] ?? null);
        yield ";
  var lang_acl = ";
        // line 144
        yield ($context["lang_acl"] ?? null);
        yield ";
  var lang_tfa = ";
        // line 145
        yield ($context["lang_tfa"] ?? null);
        yield ";
  var lang_fido2 = ";
        // line 146
        yield ($context["lang_fido2"] ?? null);
        yield ";
  var docker_timeout = ";
        // line 147
        yield ($context["docker_timeout"] ?? null);
        yield " * 1000;
  var mailcow_cc_role = '";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_role"] ?? null), "html", null, true);
        yield "';
  var mailcow_info = {
    version_tag: '";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 150), "html", null, true);
        yield "',
    last_version_tag: '";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "last_version_tag", [], "any", false, false, false, 151), "html", null, true);
        yield "',
    updatedAt: '";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "updated_at", [], "any", false, false, false, 152), "html", null, true);
        yield "',
    project_url: '";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 153), "html", null, true);
        yield "',
    project_owner: '";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_owner", [], "any", false, false, false, 154), "html", null, true);
        yield "',
    project_repo: '";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_repo", [], "any", false, false, false, 155), "html", null, true);
        yield "',
    branch: '";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 156), "html", null, true);
        yield "'
  };

\$(window).scroll(function() {
  sessionStorage.scrollTop = \$(this).scrollTop();
});
// Select language and reopen active URL without POST
function setLang(sel) {
  \$.post( '";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["uri"] ?? null), "html", null, true);
        yield "', {lang: sel} );
  window.location.href = window.location.pathname + window.location.search;
}
// FIDO2 functions
function arrayBufferToBase64(buffer) {
  let binary = '';
  let bytes = new Uint8Array(buffer);
  let len = bytes.byteLength;
  for (let i = 0; i < len; i++) {
    binary += String.fromCharCode( bytes[ i ] );
  }
  return window.btoa(binary);
}
function recursiveBase64StrToArrayBuffer(obj) {
  let prefix = '=?BINARY?B?';
  let suffix = '?=';
  if (typeof obj === 'object') {
    for (let key in obj) {
      if (typeof obj[key] === 'string') {
        let str = obj[key];
        if (str.substring(0, prefix.length) === prefix && str.substring(str.length - suffix.length) === suffix) {
          str = str.substring(prefix.length, str.length - suffix.length);
          let binary_string = window.atob(str);
          let len = binary_string.length;
          let bytes = new Uint8Array(len);
          for (let i = 0; i < len; i++) {
            bytes[i] = binary_string.charCodeAt(i);
          }
          obj[key] = bytes.buffer;
        }
      } else {
        recursiveBase64StrToArrayBuffer(obj[key]);
      }
    }
  }
}
  \$(window).on('load', function() {
    \$(\".overlay\").hide();
  });
  \$(document).ready(function() {
    \$(document).on('shown.bs.modal', function(e) {
      modal_id = \$(e.relatedTarget).data('target');
      \$(modal_id).attr(\"aria-hidden\",\"false\");
    });
    // TFA, CSRF, Alerts in footer.inc.php
    // Other general functions in mailcow.js
    ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["alert_type"] => $context["alert_msg"]) {
            // line 211
            yield "    mailcow_alert_box('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alert_msg"], "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alert_type"], "html", null, true);
            yield "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['alert_type'], $context['alert_msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        yield "
    // Confirm TFA modal
  ";
        // line 215
        if (($context["pending_tfa_methods"] ?? null)) {
            // line 216
            yield "    new bootstrap.Modal(document.getElementById(\"ConfirmTFAModal\"), {
      backdrop: 'static',
      keyboard: false
    }).show();


    // validate Time based OTP tfa
    \$(\"#pending_tfa_tab_totp\").click(function(){
      \$(\".webauthn-authenticator-selection\").removeClass(\"active\");
      \$(\"#collapseWebAuthnTFA\").collapse('hide');

      // select default if only one authenticator exists
      if (\$('.totp-authenticator-selection').length == 1){
        \$('.totp-authenticator-selection').addClass(\"active\");
        var id = \$('.totp-authenticator-selection').children('input').first().val();
        \$(\"#totp_selected_id\").val(id);
        \$(\"#collapseTotpTFA\").collapse('show');
      }
    });
    \$(\".totp-authenticator-selection\").click(function(){
      \$(\".totp-authenticator-selection\").removeClass(\"active\");
      \$(this).addClass(\"active\");

      var id = \$(this).children('input').first().val();
      \$(\"#totp_selected_id\").val(id);

      \$(\"#collapseTotpTFA\").collapse('show');
    });
    if (\$('.totp-authenticator-selection').length == 1 &&
        \$('#pending_tfa_tab_yubi_otp').length == 0 &&
        \$('.webauthn-authenticator-selection').length == 0){

      // select default if only one authenticator exists
      \$('.totp-authenticator-selection').addClass(\"active\");

      var id = \$('.totp-authenticator-selection').children('input').first().val();
      \$(\"#totp_selected_id\").val(id);

      \$(\"#collapseTotpTFA\").collapse('show');
      setTimeout(function() { \$(\"#collapseTotpTFA\").find('input[name=\"token\"]').focus(); }, 1000);
    }
    \$('#pending_tfa_tab_totp').on('shown.bs.tab', function() {
      // autofocus
      setTimeout(function() { \$(\"#collapseTotpTFA\").find('input[name=\"token\"]').focus(); }, 200);
    });
    // validate Yubi OTP tfa
    if (\$('.webauthn-authenticator-selection').length == 0){
      // autofocus
      setTimeout(function() { \$(\"#collapseYubiTFA\").find('input[name=\"token\"]').focus(); }, 1000);
    }
    \$('#pending_tfa_tab_yubi_otp').on('shown.bs.tab', function() {
      // autofocus
      \$(\"#collapseYubiTFA\").find('input[name=\"token\"]').focus();
    });
    // validate WebAuthn tfa
    \$(\"#pending_tfa_tab_webauthn\").click(function(){
      \$(\".totp-authenticator-selection\").removeClass(\"active\");

      \$(\"#collapseTotpTFA\").collapse('hide');
    });
    \$(\".webauthn-authenticator-selection\").click(function(){
      \$(\".webauthn-authenticator-selection\").removeClass(\"active\");
      \$(this).addClass(\"active\");

      var id = \$(this).children('input').first().val();
      \$(\"#webauthn_selected_id\").val(id);

      var webauthn_status_auth = document.getElementById('webauthn_status_auth');
      webauthn_status_auth.style.setProperty('display', 'flex', 'important');
      var webauthn_return_code = document.getElementById('webauthn_return_code');
      webauthn_return_code.style.setProperty('display', 'none', 'important');

      \$(\"#collapseWebAuthnTFA\").collapse('show');

      \$(this).find('input[name=token]').focus();
      if(document.getElementById(\"webauthn_auth_data\") !== null) {
        // Check Browser support
        if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
            window.alert('Browser not supported for WebAuthn.');
            return;
        }

        // fetch webauthn auth args
        window.fetch(\"/api/v1/get/webauthn-tfa-get-args\", {method:'GET',cache:'no-cache'}).then(response => {
            return response.json();
        }).then(json => {
          console.log(json);
          if (json.success === false) throw new Error();
          if (json.type === \"error\") throw new Error(json.msg);

          recursiveBase64StrToArrayBuffer(json);
          return json;
        }).then(getCredentialArgs => {
          // get credentials
          return navigator.credentials.get(getCredentialArgs);
        }).then(cred => {
          return {
            id: cred.rawId ? arrayBufferToBase64(cred.rawId) : null,
            clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
            authenticatorData: cred.response.authenticatorData ? arrayBufferToBase64(cred.response.authenticatorData) : null,
            signature : cred.response.signature ? arrayBufferToBase64(cred.response.signature) : null
          };
        }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
          // send request by submit
          var form = document.getElementById('webauthn_auth_form');
          var auth = document.getElementById('webauthn_auth_data');
          auth.value = AuthenticatorAttestationResponse;
          form.submit();
        }).catch(function(err) {
          var webauthn_status_auth = document.getElementById('webauthn_status_auth');
          webauthn_status_auth.style.setProperty('display', 'none', 'important');

          var webauthn_return_code = document.getElementById('webauthn_return_code');
          webauthn_return_code.style.setProperty('display', 'block', 'important');
          webauthn_return_code.innerHTML = lang_tfa.error_code + ': ' + err + ' ' + lang_tfa.reload_retry;
        });
      }
    });
    \$('#ConfirmTFAModal').on('hidden.bs.modal', function(){
      // cancel pending login
      \$.ajax({
        type: \"GET\",
        cache: false,
        dataType: 'script',
        url: '/inc/ajax/destroy_tfa_auth.php',
        complete: function(data){
          window.location = window.location.href.split(\"#\")[0];
        }
      });
    });
  ";
        }
        // line 347
        yield "

    // Validate FIDO2
  \$(\"#fido2-login\").click(function(){
    \$('#fido2-alerts').html();
    if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
      window.alert('Browser not supported.');
      return;
    }
    window.fetch(\"/api/v1/get/fido2-get-args\", {method:'GET',cache:'no-cache'}).then(function(response) {
      return response.json();
    }).then(function(json) {
    if (json.success === false) {
      throw new Error();
    }
    recursiveBase64StrToArrayBuffer(json);
    return json;
    }).then(function(getCredentialArgs) {
      return navigator.credentials.get(getCredentialArgs);
    }).then(function(cred) {
      return {
        id: cred.rawId ? arrayBufferToBase64(cred.rawId) : null,
        clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
        authenticatorData: cred.response.authenticatorData ? arrayBufferToBase64(cred.response.authenticatorData) : null,
        signature : cred.response.signature ? arrayBufferToBase64(cred.response.signature) : null
      };
    }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
      return window.fetch(\"/api/v1/process/fido2-args\", {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
    }).then(function(response) {
      return response.json();
    }).then(function(json) {
      if (json.success) {
        window.location = window.location.href.split(\"#\")[0];
  } else {
    throw new Error();
  }
  }).catch(function(err) {
    if (typeof err.message === 'undefined') {
      mailcow_alert_box(lang_fido2.fido2_validation_failed, \"danger\");
    } else {
      mailcow_alert_box(lang_fido2.fido2_validation_failed + \":<br><i>\" + err.message + \"</i>\", \"danger\");
    }
  });
  });
  // Set TFA/FIDO2
  \$(\"#register-fido2, #register-fido2-touchid\").click(function(){
    let t = \$(this);

    \$(\"option:selected\").prop(\"selected\", false);
    if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
      window.alert('Browser not supported.');
      return;
    }

    window.fetch(\"/api/v1/get/fido2-registration/";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::urlencode(($context["mailcow_cc_username"] ?? null), true), "null"), "html", null, true);
        yield "\", {method:'GET',cache:'no-cache'}).then(function(response) {
      return response.json();
    }).then(function(json) {
      if (json.success === false) {
        throw new Error(json.msg);
      }
      recursiveBase64StrToArrayBuffer(json);

      // set attestation to node if we are registering apple touch id
      if(t.attr('id') === 'register-fido2-touchid') {
        json.publicKey.attestation = 'none';
        json.publicKey.authenticatorSelection.authenticatorAttachment = \"platform\";
      }

      return json;
    }).then(function(createCredentialArgs) {
      console.log(createCredentialArgs);
      return navigator.credentials.create(createCredentialArgs);
    }).then(function(cred) {
      return {
        clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
        attestationObject: cred.response.attestationObject ? arrayBufferToBase64(cred.response.attestationObject) : null
      };
    }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
      return window.fetch(\"/api/v1/add/fido2-registration\", {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
    }).then(function(response) {
      return response.json();
    }).then(function(json) {
      if (json.success) {
        window.location = window.location.href.split(\"#\")[0];
      } else {
        throw new Error(json.msg);
      }
    }).catch(function(err) {
      \$('#fido2-alerts').html('<span class=\"text-danger\"><b>' + err.message + '</b></span>');
    });
  });
  \$('#selectTFA').change(function () {
    if (\$(this).val() == \"yubi_otp\") {
      \$('#YubiOTPModal').modal('show');
      \$(\"option:selected\").prop(\"selected\", false);
    }
    if (\$(this).val() == \"totp\") {
      \$('#TOTPModal').modal('show');
      request_token = \$('#tfa-qr-img').data('totp-secret');
      \$.ajax({
        url: '/inc/ajax/qr_gen.php',
        data: {
          token: request_token,
        },
      }).done(function (result) {
        \$(\"#tfa-qr-img\").attr(\"src\", result);
      });
      \$(\"option:selected\").prop(\"selected\", false);
    }
    if (\$(this).val() == \"webauthn\") {
        // check if Browser is supported
        if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
            window.alert('Browser not supported.');
            return;
        }

        // show modal
        \$('#WebAuthnModal').modal('show');
        \$(\"option:selected\").prop(\"selected\", false);

        \$(\"#start_webauthn_register\").click(() => {
            var key_id = document.getElementsByName('key_id')[1].value;
            var confirm_password = document.getElementsByName('confirm_password')[1].value;

            // fetch WebAuthn create args
            window.fetch(\"/api/v1/get/webauthn-tfa-registration/";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::urlencode(($context["mailcow_cc_username"] ?? null), true), "null"), "html", null, true);
        yield "\", {method:'GET',cache:'no-cache'}).then(response => {
                return response.json();
            }).then(json => {
                console.log(json);
                if (json.success === false) throw new Error(json.msg);
                recursiveBase64StrToArrayBuffer(json);

                return json;
            }).then(createCredentialArgs => {
                // create credentials
                return navigator.credentials.create(createCredentialArgs);
            }).then(cred => {
                return {
                    clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
                    attestationObject: cred.response.attestationObject ? arrayBufferToBase64(cred.response.attestationObject) : null,
                    key_id: key_id,
                    tfa_method: \"webauthn\",
                    confirm_password: confirm_password
                };
            }).then(JSON.stringify).then(AuthenticatorAttestationResponse => {
                // send request
                return window.fetch(\"/api/v1/add/webauthn-tfa-registration\", {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
            }).then(response => {
                return response.json();
            }).then(json => {
                if (json.success) {
                    // reload on success
                    window.location = window.location.href.split(\"#\")[0];
                } else {
                    throw new Error(json.msg);
                }
            }).catch(function(err) {
                console.log(err);
                var webauthn_return_code = document.getElementById('webauthn_return_code');
                webauthn_return_code.style.display = webauthn_return_code.style.display === 'none' ? '' : null;
                webauthn_return_code.innerHTML = lang_tfa.error_code + ': ' + err + ' ' + lang_tfa.reload_retry;
            });
        });
    }
    if (\$(this).val() == \"none\") {
      \$('#DisableTFAModal').modal('show');
      \$(\"option:selected\").prop(\"selected\", false);
    }
  });

  ";
        // line 517
        if (($context["mailcow_cc_username"] ?? null)) {
            // line 518
            yield "  // Reload after session timeout
  var session_lifetime = ";
            // line 519
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["session_lifetime"] ?? null) * 1000) + 15000), "html", null, true);
            yield ";
  setTimeout(function() {
    location.reload();
  }, session_lifetime);
  ";
        }
        // line 524
        yield "
  // CSRF
  \$('<input type=\"hidden\" value=\"";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">').attr('name', 'csrf_token').appendTo('form');
  if (sessionStorage.scrollTop != \"undefined\") {
    \$(window).scrollTop(sessionStorage.scrollTop);
  }
  });
</script>

<div class=\"container footer\">
  ";
        // line 534
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 534)) {
            // line 535
            yield "  <hr><span class=\"rot-enc\">";
            yield str_rot13(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 535));
            yield "</span>
  ";
        }
        // line 537
        yield "  ";
        if (((($context["mailcow_cc_username"] ?? null) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 537)) == "master")) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 537)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 537))) : ("")))) {
            // line 538
            yield "  <span class=\"version\">
    🐮 + 🐋 = 💕
        Version: <a href=\"";
            // line 540
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 540), "html", null, true);
            yield "/releases/tag/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 540), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 540), "html", null, true);
            yield "
    </a>
  </span>
  ";
        }
        // line 544
        yield "  ";
        if (((($context["mailcow_cc_username"] ?? null) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 544)) == "nightly")) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 544)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 544))) : ("")))) {
            // line 545
            yield "  <span class=\"version\">
    🛠️🐮 + 🐋 = 💕
        Nightly: <a href=\"";
            // line 547
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 547), "html", null, true);
            yield "/commit/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit", [], "any", false, false, false, 547), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 547), "html", null, true);
            yield "
    </a><br>
    <span style=\"text-align:right;display:block;\">Build: ";
            // line 549
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit_date", [], "any", false, false, false, 549), "html", null, true);
            yield "</span>
  </span>
  ";
        }
        // line 552
        yield "  ";
        if (((($context["mailcow_cc_username"] ?? null) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 552)) == "legacy")) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 552)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 552))) : ("")))) {
            // line 553
            yield "  <span class=\"version\">
    ⚰️🐮 + 🐋 = 💕
        Legacy: <a href=\"";
            // line 555
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 555), "html", null, true);
            yield "/commit/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit", [], "any", false, false, false, 555), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 555), "html", null, true);
            yield "
    </a><br>
    <span style=\"text-align:right;display:block;\">Build: ";
            // line 557
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit_date", [], "any", false, false, false, 557), "html", null, true);
            yield "</span>
  </span>
  ";
        }
        // line 560
        yield "</div>
</body>
</html>
";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top p-0\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">
      <img class=\"main-logo\" alt=\"mailcow-logo\" src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\">
      <img class=\"main-logo-dark\" alt=\"mailcow-logo-dark\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo_dark", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo_dark"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <i class=\"bi bi-list fs-3\"></i>
    </button>
    <div id=\"navbar\" class=\"navbar-collapse collapse\">
      <ul class=\"navbar-nav ms-auto\">
        <li class=\"nav-item\">
          <div class=\"nav-link form-check form-switch my-auto d-flex align-items-center\">
            <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
            <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
          </div>
        </li>
        ";
        // line 49
        if (($context["mailcow_locale"] ?? null)) {
            // line 50
            yield "        <li class=\"nav-item dropdown";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["available_languages"] ?? null)) == 1)) {
                yield "lang-link-disabled";
            }
            yield "\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"flag-icon flag-icon-";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
            yield "\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu \"aria-labelledby=\"languageDropdown\">
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 54
                yield "            <li>
              <a class=\"dropdown-item ";
                // line 55
                if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                    yield "active";
                }
                yield "\" href=\"?";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
                yield "\">
                <span class=\"flag-icon flag-icon-";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["key"],  -2, null), "html", null, true);
                yield "\"></span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "
              </a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "          </ul>
        </li>
        ";
        }
        // line 63
        yield "        ";
        if (($context["mailcow_cc_role"] ?? null)) {
            // line 64
            yield "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 65), "mailcow_system", [], "any", false, false, false, 65), "html", null, true);
            yield "</a>
          <ul class=\"dropdown-menu\">
            ";
            // line 67
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 68
                yield "            <li><a href=\"/debug\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("debug")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 68), "debug", [], "any", false, false, false, 68), "html", null, true);
                yield "</a></li>
            <li><a href=\"/admin\" class=\"dropdown-item ";
                // line 69
                if ($this->env->getFunction('is_uri')->getCallable()("admin")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 69), "mailcow_config", [], "any", false, false, false, 69), "html", null, true);
                yield "</a></li>
            ";
            }
            // line 71
            yield "            ";
            if ((($context["mailcow_cc_role"] ?? null) != "admin")) {
                // line 72
                yield "            <li><a href=\"/user\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("user")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 72), "user_settings", [], "any", false, false, false, 72), "html", null, true);
                yield "</a></li>
            ";
            }
            // line 74
            yield "          </ul>
        </li>
        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 77), "email", [], "any", false, false, false, 77), "html", null, true);
            yield "</a>
          <ul class=\"dropdown-menu\">
            ";
            // line 79
            if (((($context["mailcow_cc_role"] ?? null) == "admin") || (($context["mailcow_cc_role"] ?? null) == "domainadmin"))) {
                // line 80
                yield "            <li><a href=\"/mailbox\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("mailbox")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 80), "mailcow_config", [], "any", false, false, false, 80), "html", null, true);
                yield "</a></li>
            ";
            }
            // line 82
            yield "            <li><a href=\"/quarantine\" class=\"dropdown-item ";
            if ($this->env->getFunction('is_uri')->getCallable()("quarantine")) {
                yield "active";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 82), "quarantine", [], "any", false, false, false, 82), "html", null, true);
            yield "</a></li>
            ";
            // line 83
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 84
                yield "            <li><a href=\"/queue\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("queue")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 84), "queue_manager", [], "any", false, false, false, 84), "html", null, true);
                yield "</a></li>
            ";
            }
            // line 86
            yield "            ";
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 87
                yield "            <li><a href=\"#\" class=\"dropdown-item\" data-bs-toggle=\"modal\" data-container=\"sogo-mailcow\" data-bs-target=\"#RestartContainer\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 87), "restart_sogo", [], "any", false, false, false, 87), "html", null, true);
                yield "</a></li>
            ";
            }
            // line 89
            yield "          </ul>
        </li>
        ";
        }
        // line 92
        yield "        ";
        if ((($context["mailcow_apps"] ?? null) || ($context["app_links"] ?? null))) {
            // line 93
            yield "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"bi bi-link-45deg me-2\"></i> ";
            // line 94
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 94);
            yield "</a>
          <ul class=\"dropdown-menu\">
            ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["mailcow_apps"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 97
                yield "              ";
                if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", CoreExtension::getAttribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 97)))) {
                    // line 98
                    yield "              <li ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 98)) {
                        yield "title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 98), "html", null, true);
                        yield "\"";
                    }
                    yield ">
                <a href=\"";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 99), "html", null, true);
                    yield "\" class=\"dropdown-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 99), "html", null, true);
                    yield "</a>
              </li>
              ";
                }
                // line 102
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['app'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["app_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 104
                yield "              ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 105
                    yield "              <li><a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                    yield "\" class=\"dropdown-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "          </ul>
        </li>
        ";
        }
        // line 111
        yield "        ";
        if (( !($context["dual_login"] ?? null) && ($context["mailcow_cc_username"] ?? null))) {
            // line 112
            yield "        <li class=\"logged-in-as nav-item\"><a href=\"#\" onclick=\"logout.submit()\" class=\"nav-link\"><b class=\"username-lia\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
            yield "</b> <i class=\"bi bi-power ms-2\"></i></a></li>
        ";
        } elseif (        // line 113
($context["dual_login"] ?? null)) {
            // line 114
            yield "        <li class=\"logged-in-as nav-item\"><a href=\"#\" onclick=\"logout.submit()\" class=\"nav-link\"><b class=\"username-lia\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
            yield " <span class=\"text-info\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dual_login"] ?? null), "username", [], "any", false, false, false, 114), "html", null, true);
            yield ")</span> </b><i class=\"bi bi-power ms-2\"></i></a></li>
        ";
        }
        // line 116
        yield "        ";
        if ( !($context["is_master"] ?? null)) {
            // line 117
            yield "        <div class=\"nav-link form-check form-switch my-auto d-flex align-items-center\">
            <li class=\"slave-info\">[ slave ]</li>
        </div>
        ";
        }
        // line 121
        yield "      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>
";
        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  960 => 136,  951 => 121,  945 => 117,  942 => 116,  934 => 114,  932 => 113,  927 => 112,  924 => 111,  919 => 108,  913 => 107,  902 => 105,  897 => 104,  892 => 103,  886 => 102,  878 => 99,  869 => 98,  866 => 97,  862 => 96,  857 => 94,  854 => 93,  851 => 92,  846 => 89,  840 => 87,  837 => 86,  827 => 84,  825 => 83,  816 => 82,  806 => 80,  804 => 79,  799 => 77,  794 => 74,  784 => 72,  781 => 71,  772 => 69,  763 => 68,  761 => 67,  756 => 65,  753 => 64,  750 => 63,  745 => 60,  733 => 56,  725 => 55,  722 => 54,  718 => 53,  713 => 51,  706 => 50,  704 => 49,  688 => 36,  684 => 35,  679 => 32,  672 => 31,  664 => 560,  658 => 557,  649 => 555,  645 => 553,  642 => 552,  636 => 549,  627 => 547,  623 => 545,  620 => 544,  609 => 540,  605 => 538,  602 => 537,  596 => 535,  594 => 534,  583 => 526,  579 => 524,  571 => 519,  568 => 518,  566 => 517,  518 => 472,  444 => 401,  388 => 347,  255 => 216,  253 => 215,  249 => 213,  238 => 211,  234 => 210,  185 => 164,  174 => 156,  170 => 155,  166 => 154,  162 => 153,  158 => 152,  154 => 151,  150 => 150,  145 => 148,  141 => 147,  137 => 146,  133 => 145,  129 => 144,  125 => 143,  120 => 141,  117 => 140,  115 => 139,  111 => 137,  109 => 136,  105 => 134,  97 => 131,  94 => 130,  92 => 129,  87 => 126,  85 => 31,  62 => 11,  57 => 9,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.twig", "/web/templates/base.twig");
    }
}
