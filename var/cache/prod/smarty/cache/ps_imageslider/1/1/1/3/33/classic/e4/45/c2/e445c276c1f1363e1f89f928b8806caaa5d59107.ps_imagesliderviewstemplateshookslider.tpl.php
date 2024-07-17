<?php
/* Smarty version 4.3.1, created on 2024-07-15 09:48:13
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6694f05da44216_58645272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1720436845,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6694f05da44216_58645272 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Conteneur carrousel">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost/prestashop/fr/10-luxe">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/404fcd91287112de10cd0f72b32e670526d8775a_LUXE.png" alt="" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">VENTE DES ARTICLES DE LUXE</h2>
                  <div class="caption-description"><p>TOUT POUR VIVRE DANS LE LUXE</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/fr/11-materiel-de-construction">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/75318fe83c5c3afc3c376e26ad05f9a046144ffb_CONSTRUCTION.png" alt="" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">VENTE DES MATERIELS DE CONSTRUCTION</h2>
                  <div class="caption-description"><p>TOUT POUR EMBELLIR VOS MAISONS</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/fr/12-outils-informatiques">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/50639a163296f80eb601226f011468326439934f_INFO.png" alt="" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">VENTE DES OUTILS D&#039;INFORMATIQUES</h2>
                  <div class="caption-description"><p>AVEC NOS ARTICLES INFORMATQUES TRAVAILLEZ EN BONNE HUMMEUR</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="Boutons du carrousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Précédent">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Suivant">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
