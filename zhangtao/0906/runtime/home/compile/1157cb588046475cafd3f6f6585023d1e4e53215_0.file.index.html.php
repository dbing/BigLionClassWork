<?php
/* Smarty version 3.1.30, created on 2017-09-13 23:00:25
  from "D:\phpStudy\anzhuang\WWW\new-two\0906\themes\default\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b94809561061_32883274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1157cb588046475cafd3f6f6585023d1e4e53215' => 
    array (
      0 => 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0906\\themes\\default\\index.html',
      1 => 1505314681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b94809561061_32883274 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- 顶部 -->
<!DOCTYPE html>
<html class="js touch cssanimations csstransforms3d csstransitions" style=""><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Joey L. - NYC-based Photographer and Director </title>
    <meta name="description" content="Photographer Joey Lawrence’s portfolio and director’s reel. Including portraits from Ethiopia’s Omo Valley, Varanasi India, and various commercial assignments.">

    <meta name="keywords" content="joey l,joey lawrence,photographer,photography,portfolio,varanasi">

    <link type="text/css" rel="stylesheet" href="./themes/default/css/reset.css">

    <link type="text/css" rel="stylesheet" href="./themes/default/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="./themes/default/css/jquery.css">

    <link type="text/css" rel="stylesheet" href="./themes/default/css/screenNew.css">
    <link type="text/css" rel="stylesheet" href="./themes/default/css/screenPlus.css">

    <link type="text/css" rel="stylesheet" href="./themes/default/css/slicknav.css">

    <link href="./themes/default/css/retina.css" rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css">

    <?php echo '<script'; ?>
 type="text/javascript" src="./themes/default/js/modernizr-2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./themes/default/js/jquery-1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./themes/default/js/jquery_002.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        
        /** 图片加载 */
        var preloadPictures = function(pictureUrls, callback) {
            var i,
                j,
                loaded = 0;

            for (i = 0, j = pictureUrls.length; i < j; i++) {
                (function (img, src) {
                    img.onload = function () {
                        // console.log("loaded----- " + src);
                        if (++loaded == pictureUrls.length && callback) {
                            callback();
                        }
                    };

                    // Use the following callback methods to debug
                    // in case of an unexpected behavior.
                    img.onerror = function () {};
                    img.onabort = function () {};

                    img.src = src;
                } (new Image(), pictureUrls[i]));
            }
        };


        $(function() {

            $("a.lightbox-portfolio").fancybox({
                // 'transitionIn'  :   'elastic',
                // 'transitionOut' :   'elastic',
                // 'speedIn'       :   600,
                // 'speedOut'      :   200,
                // 'overlayShow'   :   false,
                'nextEffect'    :   'fade',
                'prevEffect'    :   'none',
                'nextSpeed'     :    600,
                'prevSpeed'     :    100,
                // 'closeOpacity'    :   false,
                // arrows          :   true,
                margin          :   [25,55,115,55],
                tpl             :   {wrap:'<div class="fancybox-wrap port-wrap-skin" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>'},
                afterShow: function(){
                    $(".fancybox-image").on("swipeleft",function(e){
                        $.fancybox.next();
                    });
                    $(".fancybox-image").on("swiperight",function(e){
                        $.fancybox.prev();
                    });

                    if ($('.port-desc').height() > 63){
                        $('.lightbox-portfolio-overlay').animate({bottom: "-"+($('.port-desc').height()+23)+'px'});
                    }
                    location.replace('#'+encodeURI($(this.element).data('name')));
                    // document.location.hash=encodeURI($(this.element).data('name'));

                },
                afterClose: function(){
                    if(history.pushState) {
                        history.pushState(null, null, "#");
                    } else {
                        location.replace('#');
                    }
                },
                afterLoad: function() {
                    var study = ($(this.element).data('study'));
                    var desc = ($(this.element).data('desc'));
                    if (study != "") {
                        study='<div class="port-study"><a href="'+study+'" class="port-study-btn">VIEW CASE STUDY</a></div>';
                        $(".fancybox-outer").append('<div class="lightbox-portfolio-overlay"> <div class="port-desc">'+ desc +'</div>'+ study +'</div>');
                    } else {
                        $(".fancybox-outer").append('<div class="lightbox-portfolio-overlay"> <div class="port-desc">'+ desc +'</div></div>');
                    }
                },
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });

            var urlhash;

            $(document).on("mainContentShowed",function(){
                if ((urlhash = document.location.hash.substr(1)) != "") {
                    urlhash = decodeURI(urlhash);
                    if ($('[data-name="'+urlhash+'"] img').length){
                        $.fancybox.showLoading();
                        setTimeout(function(){
                            $('[data-name="'+urlhash+'"] img').trigger('click');
                        }, 500);
                    } else {
                        document.location.hash="";
                    }
                }
            });


        });

        
    <?php echo '</script'; ?>
>

    <style type="text/css">.fancybox-margin{margin-right:17px;}</style>

</head>
<body>
<div class="plusone"><img src="./themes/default/img/plusone.png" alt="plus one" height="34" width="34"></div>

<div style="display: none;" class="underhead"></div>

<!-- 导航 -->
<!-- 首页导航 -->
<header id="headerMenu">
    <div style="height: 82px;" id="desktopMenu" class="container hcontainer menu">
        <div class="logo"><a href="http://www.joeyl.com/"></a></div>
        <nav>
            <ul id="mainNavigation">

                <li class="mainNavLi   current_page_item ">
                    <a href="index.php">index</a>
                    <ul style="top: 82px; display: none;" class="nav-submenu">
                    </ul>
                </li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catList']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                <li class="mainNavLi  ">
                    <a class="" href="javascript:;"><span><?php echo $_smarty_tpl->tpl_vars['val']->value['cat_name'];?>
</span></a>
                    <ul style="display: none; top: 82px;" class="nav-submenu">
                    <?php if (isset($_smarty_tpl->tpl_vars['val']->value['child'])) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['val']->value['child'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <li><a href="category.php?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>
                    </ul>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </nav>

    </div>
</header>

<div class="wrapper">
     <div class="image-grid">
        <div class="wrap">
            
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photoList']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
        <div class="box portfolio" data-nav="19" data-subnav="">
            <!--<a href="http://www.joeyl.com/overview/category/19/jesus-a-collazos-villa-esperanza-colombia-858">
             -->
            <div class="boxInner">
            <a href="uploads/<?php echo $_smarty_tpl->tpl_vars['val']->value['photo_path'];?>
" class="lightbox-portfolio" rel="portfolio" data-name="<?php echo $_smarty_tpl->tpl_vars['val']->value['photo_name'];?>
" data-study="" data-desc="<?php echo $_smarty_tpl->tpl_vars['val']->value['photo_desc'];?>
">
            <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['val']->value['photo_path'];?>
">
            </a>
            <!-- <p class="play">PLAY</p> -->
            <!-- <p class="portfolioTitle">Jesus A. Collazos - Villa Esperanza, Colombia</p> -->
            </div>
            <!-- </a> -->
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </div>
    </div>

</div>


<!-- 底部 -->
<footer style="display: block;">

    <div class="container">
        <p class="social">
            <a target="_blank" href="http://twitter.com/#%21/joeyldotcom" class="twitter"></a>
            <a target="_blank" href="http://www.facebook.com/joeylphotographer" class="facebook"></a>
            <a target="_blank" href="http://instagram.com/joeyldotcom" class="instagram"></a>
        </p>
        <!-- <p class="social"><a href="http://www.facebook.com/joeylphotographer"></a><a href="http://twitter.com/#!/joeyldotcom" class="twitter"></a></p> -->
        <p class="copyright">© Joey L. 2015. All Rights Reserved</p>
    </div>
</footer>

<?php echo '<script'; ?>
 src="./themes/default/js/jquery-ui-1.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./themes/default/js/jquery_004.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./themes/default/js/respond.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./themes/default/js/perfect-scrollbar.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./themes/default/js/responsiveslides.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./themes/default/js/addons.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./themes/default/js/common.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./themes/default/js/retina-1.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./themes/default/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./themes/default/js/jquery_003.js" type="application/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    
// 导航下拉和弹框效果
    var base_url = 'http://www.joeyl.com';

    $(function(){    
       $( document ).ready(function() {
            $('#menu').slicknav({
                prependTo:'#headerMenu',
                label: '',
                beforeOpen: function(trigger){ slicknavOpened(trigger);},
                beforeClose: function(trigger){ enableScrolling(trigger);},
                init: function(){ menuHeight(); if(!$('.slicknav_menu .logo').length)$('.slicknav_menu').prepend('<div class="logo"><a href="/"></a></div>')}
            });
        });

       function menuHeight(){
        if ($( window ).height()-120 >= 415) {
            $("ul.slicknav_nav").height(415);
        }else{
            $("ul.slicknav_nav").height($( window ).height()-120);
        }
       }

       function enableScrolling(trigger) {
            var $trigger = $(trigger[0]);
            if ($trigger.hasClass('slicknav_btn')) {
                $('body').toggleClass('scrollDisabled');
                // this is the top-level menu/list opening.
                // we only want to trap lower-level/sublists.
                return;
            }
            return;
        }

       function slicknavOpened(trigger) {
            var $trigger = $(trigger[0]);
            if ($trigger.hasClass('slicknav_btn')) {
                $('body').toggleClass('scrollDisabled');
                // this is the top-level menu/list opening.
                // we only want to trap lower-level/sublists.
                return;
            }
            // trigger is an <a> anchor contained in a <li>
            var $liParent = $trigger.parent();
            // parent <li> is contained inside a <ul>
            var $ulParent = $liParent.parent();
            // loop through all children of parent <ul>
            // i.e. all siblings of this <li>
            $ulParent.children().each(function () {
                var $child = $(this);
                if ($child.is($liParent)) {
                    // this child is self, not is sibling
                    return;
                }
                if ($child.hasClass('slicknav_collapsed')) {
                    // this child is already collapsed
                    return;
                }
                if (!$child.hasClass('slicknav_open')) {
                    // could throw an exception here: this shouldn't happen
                    // because I expect li to have class either slicknav_collapsed or slicknav_open
                    return;
                }
                // found a sibling <li> which is already open.
                // expect that its first child is an anchor item.
                var $anchor = $child.children().first();
                if (!$anchor.hasClass('slicknav_item')) {
                    return;
                }
                // close the sibling by emulating a click on its anchor.
                $anchor.click();
            });
        }



        var $mnls,$mnlsul, $el, leftPos, newWidth, $sub;
        var linemove = 1;
        var $hcont = $('.hcontainer');

        $mnls = $(".mainNavLi");
        $mnlsul = $mnls.find('ul');
 
        setTimeout(function() {
            $("#mainNavigation").append("<li id='magic-line'></li>");

            var $magicLine = $("#magic-line");

            $magicLine
                                .width($(".current_page_item").width())
                                .css("left", $(".current_page_item").position().left)
                                .data("origLeft", $magicLine.position().left)
                                .data("origWidth", $magicLine.width())
                                .fadeIn(100);

            $(".mainNavLi").hover(function() {
                $mnls.find('ul').hide().stop().css({'top':'82px'});
                $el = $(this);
                leftPos = $el.position().left;
                newWidth = $el.width();
                $magicLine.stop().animate({
                    left: leftPos,
                    width: newWidth
                });

                if (($sub = $el.find('ul')).length){
                    // console.log($sub.height());
                    $sub.fadeIn(400);
                    $sub.animate({'top':'55px'},{duration: 400, queue: false});
                    // $hcont.stop().animate({'height': ($sub.height()+75)+'px'},{duration: 400, queue: false});
                    $hcont.stop().animate({'height': ($sub.height()+82)+'px'},{duration: 400, queue: false});

                }
            }, function() {
                $el = $(this);
                if (($sub = $el.find('ul')).length){
                    $sub.hide();
                    $hcont.animate({'height':'82px'},{duration: 400, queue: false});
                    $sub.css({'top':'82px'});
                    
                    // $('header').animate({'background-color':'rgba(47,46,44,1)'},200);
                }
                if (linemove){
                    $magicLine.stop().animate({
                        left: $magicLine.data("origLeft"),
                        width: $magicLine.data("origWidth")
                    });
                }
            });
        }, 500);



        $('#mainNavigation a').click(function(e){
            var $this = $(this);
            if ($this.is('[href="#"]')){
                e.preventDefault();
                return false;
            } else if (! $this.is('[target="_blank"]')){
                e.preventDefault();
                $('footer').animate({'margin-top': '0px'}, 200, function(){
                    $(this).hide();

                    linemove = 0;
                    $mnlsul.hide();
                    $hcont.animate({'height':'82px'},{duration: 200});
                    

                    $('.wrapper').fadeOut(400, function(){
                        document.location = $this.attr('href');                                            
                    }); 
                });
                // $('.wrapper').fadeOut(400, function(){
                //     document.location = $this.attr('href');                                            
                // });   
            }
        });




    


    });
    
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
