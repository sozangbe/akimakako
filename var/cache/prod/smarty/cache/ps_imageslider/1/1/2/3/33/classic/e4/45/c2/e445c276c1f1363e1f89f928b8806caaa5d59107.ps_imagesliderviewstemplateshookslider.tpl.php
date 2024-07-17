<?php
/* Smarty version 4.3.1, created on 2024-07-15 10:04:19
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6694f42335b269_38732637',
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
function content_6694f42335b269_38732637 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Carousel container">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost/prestashop/en/10-luxe">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/6ae7bfdb3122ec9894f6d2a3b3f371d6c5479dcf_LUXE.png" alt="" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">SALE OF LUXURY ITEMS</h2>
                  <div class="caption-description"><h4>EVERYTHING YOU NEED TO LIVE IN LUXURY</h4></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/fr/11- Material Construction">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/668e64c05ebb7d71a05279ac4045108f2edb4175_CONSTRUCTION.png" alt="sample-2" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">SALE OF CONSTRUCTION MATERIALS</h2>
                  <div class="caption-description"><p>EVERYTHING TO BEAUTIFY YOUR HOMES</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/fr/12-computer-tools">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/bc8e5374d6f32239d049418ca50637bfe917ea77_INFO.png" alt="sample-3" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">SALE OF COMPUTER TOOLS</h2>
                  <div class="caption-description"><p>WITH OUR INFORMATIVE ARTICLES, WORK IN GOOD SPIRITS</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="Carousel buttons">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Previous">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
