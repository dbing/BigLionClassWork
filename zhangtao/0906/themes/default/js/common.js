doSearch = true;
var payType = "cc";
var allowCheckout = false;
var cartShowing = false;

$(function() {

    function responsiveFn() {
     width = $( window ).width();
     height = $( window ).height();
      // If is  portfolio  or main load mobile imgs
      var url = window.location.href;
        if (url.indexOf("portfolio") > -1 || url.indexOf("overview") > -1 ) {
            if(width <= 768){
                $('body').addClass('isMobile');
                $('.wrapper').empty();
                url =  url.replace("com/", "com/ajax/");
                $.ajax({
                  url: url,
                  context: document.body
                }).done(function(data) {
                    $('.wrapper').empty();
                    $('.wrapper').append( data );
                });
         
            }
        }
    }


    
    $(window).ready(responsiveFn); 

    $( window ).resize(function() {
        width = $( window ).width();
        height = $( window ).height();

        var url = window.location.href;
        if (url.indexOf("portfolio") > -1 || url.indexOf("overview") > -1 ) {
            if(width > 768){
                if ($('body.isMobile').length) {
                    location.reload();
                }
            }else{
                if (! $('body.isMobile').length) {
                    $('body').addClass('isMobile');
                    $('.wrapper').empty();
                    url =  url.replace("com/", "com/ajax/");
                    $.ajax({
                      url: url,
                      context: document.body
                    }).done(function(data) {
                        $('.wrapper').empty();
                        $('.wrapper').append( data );
                    });
                }
            }
        }

    });

    var $modal = $('div.modal.m-checkout').omniWindow();

    $('.close-button').click(function(e) {
        e.preventDefault();
        $(this).parents().eq(1).trigger('hide');
    });

    $('.checkout').click(function(event) {
        event.preventDefault();
        event.stopPropagation();

        if (allowCheckout) {
            $modal.trigger('show');
            jQuery("html, body").animate({scrollTop: [0, 'easeOutBack']}, 1000);
        }
    });

    $('.m-checkout .step-01 .next').click(function(e) {
        e.preventDefault();
        // Validate first
        var toCheck = ['first_name', 'last_name'];
        var error = false;

        $.each(toCheck, function(k, v) {
            if ($("input[name='"+v+"']").val().length == 0) {
                error = true;
                $("input[name='"+v+"']").css('border-color', 'red');
            } else {
                $("input[name='"+v+"']").css('border-color', '#484540');
            }
        });

        if (!IsEmail($("#email").val())) {
            error = true;
            $("#email").css('border-color', 'red');
        } else {
            $("#email").css('border-color', '#484540');
        }

        if (error == false) {
            $('.m-checkout .step-01').hide(function () {
                if (payType == "cc") {
                    $("#address_type").text('billing');
                    $('.m-checkout .step-02').slideToggle();
                } else {
                    $("#address_type").text('shipping');
                    $('.m-checkout .step-03').slideToggle();
                }
            });
        }
    });

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $('.m-checkout .step-02 .back').click(function() {
        $('.m-checkout .step-02').hide(function() {
            $('.m-checkout .step-01').slideToggle();
        });
    });

    $('.m-checkout .step-02 .next').click(function() {
        var toCheck = ['billing_cc', 'billing_expiry_date', 'billing_cv2'];
        var error = false;

        $.each(toCheck, function(k, v) {
            if ($("input[name='"+v+"']").val().length == 0) {
                error = true;
                $("input[name='"+v+"']").css('border-color', 'red');
            } else {
                $("input[name='"+v+"']").css('border-color', '#484540');
            }
        });

        var date_parts = $("#billing_expiry_date").val().split("/");
        if (date_parts[1].length == 2) {
            date_parts[1] = "20" + date_parts[1];
        }
        var date = new Date(parseInt(date_parts[1]), parseInt(date_parts[0]), 0);

        if (Date.parse($("#billing_exipry_date").val()) == undefined) {
            error = true;
            $("#billing_expiry_date").css('border-color', 'red');
        } else {
            $("#billing_expiry_date").val((date.getMonth() + 1) + "/" + (date.getYear() - 100));
            $("#billing_expiry_date").css('border-color', '#484540');
        }

        if (!error) {
            $('.m-checkout .step-02').hide(function () {
                $('.m-checkout .step-03').slideToggle();
            });
        }
    });

    $('.m-checkout .step-03 .back').click(function() {
        $('.m-checkout .step-03').hide(function() {
            if (payType == "cc") {
                $('.m-checkout .step-02').slideToggle();
            } else {
                $('.m-checkout .step-01').slideToggle();
            }
        });
    });

    $('.m-checkout .step-03 .next').click(function() {
        var toCheck = ['billing_zip', 'billing_street', 'billing_city'];
        var error = false;

        $.each(toCheck, function(k, v) {
            if ($("input[name='"+v+"']").val().length == 0) {
                error = true;
                $("input[name='"+v+"']").css('border-color', 'red');
            } else {
                $("input[name='"+v+"']").css('border-color', '#484540');
            }
        });

        if (!error) {
            $('.m-checkout .step-03').hide(function() {
                if (payType == "cc") {
                    $('.m-checkout .step-04').slideToggle();
                } else {
                    $('input[name="same_as_billing"]').parent().addClass('checked');
                    populateCart();
                    $("#order_submit").text('PROCEED TO PAYPAL');
                    $('.m-checkout .step-05').slideToggle();
                }
            });
        }
    });

    $('.m-checkout .step-04 .back').click(function() {
        $('.m-checkout .step-04').hide(function() {
            $('.m-checkout .step-03').slideToggle();
        });
    });

    $('.m-checkout .step-04 .next').click(function() {
        var toCheck = ['delivery_zip', 'delivery_street', 'delivery_city'];
        var error = false;

        $.each(toCheck, function(k, v) {
            if ($("input[name='"+v+"']").val().length == 0) {
                error = true;
                $("input[name='"+v+"']").css('border-color', 'red');
            } else {
                $("input[name='"+v+"']").css('border-color', '#484540');
            }
        });

        if (!error) {
            $('.m-checkout .step-04').hide(function () {
                populateCart();
                $("#order_submit").text('PLACE ORDER');
                $('.m-checkout .step-05').slideToggle();
            });
        }
    });

    $('.m-checkout .step-05 .back').click(function() {
        $('.m-checkout .step-05').hide(function() {
            if (payType == "cc") {
                $('.m-checkout .step-04').slideToggle();
            } else {
                $('.m-checkout .step-03').slideToggle();
            }
        });
    });

    $('input[name="same_as_billing"]').prop('checked', false);
    $("div[role=error_place]").hide();

    $("#order_submit").on('click',function(e){
        e.preventDefault();
    	order_prevalidate($("#order-form"));
    });

    function populateCart() {
        $("p[data-field='name']").html($("input[name='first_name']").val()+' '+$("input[name='last_name']").val());
        $("p[data-field='b_addr']").html($("input[name='billing_street']").val());
        $("p[data-field='b_addr2']").html($("input[name='billing_address_line_2']").val());
        $("p[data-field='b_city']").html($("input[name='billing_city']").val());
        $("p[data-field='b_state']").html($("input[name='billing_state']").val());
        $("p[data-field='b_zip']").html($("input[name='billing_zip']").val());
        $("p[data-field='b_country']").html($("select[name='billing_country'] option:selected").text());

        if($('input[name="same_as_billing"]').parent().hasClass('checked'))
        {
            $("p[data-field='d_addr']").html($("input[name='billing_street']").val());
            $("p[data-field='d_addr2']").html($("input[name='billing_address_line_2']").val());
            $("p[data-field='d_city']").html($("input[name='billing_city']").val());
            $("p[data-field='d_state']").html($("input[name='billing_state']").val());
            $("p[data-field='d_zip']").html($("input[name='billing_zip']").val());
            $("p[data-field='d_country']").html($("select[name='billing_country'] option:selected").text());
        }
        else
        {
            $("p[data-field='d_addr']").html($("input[name='delivery_street']").val());
            $("p[data-field='d_addr2']").html($("input[name='delivery_address_line_2']").val());
            $("p[data-field='d_city']").html($("input[name='delivery_city']").val());
            $("p[data-field='{d_state']").html($("input[name='delivery_state']").val());
            $("p[data-field='d_zip']").html($("input[name='delivery_zip']").val());
            $("p[data-field='d_country']").html($("select[name='delivery_country'] option:selected").text());
        }

        if($("p[data-field='d_country']").text() == "United States")
        {
            $("span.light:contains('Delivery')").parent().find('span.value').html('$'+25);
            $("span.light:contains('Total')").parent().find('span.value').html('$'+(parseInt($("span.light:contains('Cost')").parent().find('span.value').html().replace('$',''))+25));
        }
        else
        {
            $("span.light:contains('Delivery')").parent().find('span.value').html('$'+40);
            $("span.light:contains('Total')").parent().find('span.value').html('$'+(parseInt($("span.light:contains('Cost')").parent().find('span.value').html().replace('$',''))+40));
        }
    }

	function order_prevalidate(thisform){
        $(thisform).submit();
    };

    $("form.pre-validate[data-validate-url]").on('submit', function(e) {
    	if (!$(this).hasClass('pre-validate')) {
            return;
        }

        e.preventDefault();
        e.stopPropagation();

        var caller = this;
        $(".form-error").hide('fast', function() {$(this).remove();});
        $.post($(caller).data('validate-url'), $(this).serialize(), function(data) {
            if (data.result == "OK") {
                $(caller).removeClass('pre-validate');
                $(caller).submit();
            } else {
                if($(caller).find("div.mandatory").length>0)
                {
	                $.each(data.messages, function (k, v) {
	                    $(caller).find("div.mandatory").append('<div class="form-error alert alert-danger">'+v+'</div>');
	                });
                }
                else
                {
	                $.each(data.messages, function (k, v) {
	                    $(caller).find("input[name='"+k+"']").parent().after('<div class="form-error alert alert-danger">'+v+'</div>');
	                    $(caller).find("textarea[name='"+k+"']").after('<div class="form-error alert alert-danger">'+v+'</div>');
	                    $(caller).find("input[name='"+k+"[]']").last().parent().parent().after('<div class="form-error alert alert-danger">'+v+'</div>');
	                });
                }
                $(".form-error").show('fast');
            }
        });
    });
    $("#comment-form").on('submit', function(e) {
        if ($(this).hasClass('pre-validate')) {
            return;
        }
        e.preventDefault();
        $.post($(this).attr('action'), $(this).serialize(), function(data) {
            $("#comments_full").html(data);
            $("#comment_success").show('fast');
            $("#comment-form input[type='text']").val('');
            $("#comment-form textarea").val('');
            $("#comments_full").animate({ scrollTop: $('#comments_full')[0].scrollHeight}, 1000);
        });
    });

    $("form[type=fastsubmit]").on('submit', function(e) {
    	e.preventDefault();
    	var caller = this;
    	$.post($(caller).attr('action'), $(this).serialize(), function(data) {

    	});
    });

    $("a.viewAll").on('click', function(e){
    	e.preventDefault();
    	if($(this).html()=='VIEW ALL')
    	$(this).html('SHOW LESS');
    	else
    	$(this).html('VIEW ALL');
    	$(this).prev().slideToggle();
    	$(this).prev().prev().slideToggle();
    });

    $("input:radio[name=payment]").on('change', function(e){
        console.log("HERE");
        if ($(this).val() == 'paypal') {
            payType = "paypal";
            $("div[role=cc_info]").hide();
        } else {
            payType = "cc";
            $("div[role=cc_info]").show();
        }
    });

    $('.cartContainer .cart, .cartContainer .cart .shopping-cart, .cartContainer .cart .cartItems, .cartContainer .cart .cartTotal').click(function(e) {
        if (e.target !== this)
            return;

        e.stopPropagation();
        if (!cartShowing) {
            $('.dropdownCart').fadeIn();
            cartShowing = true;
        } else {
            $('.dropdownCart').fadeOut();
            cartShowing = false;
        }
    });

    $("#quick_login").hide();
    function hide_confirmation(state){
	    if((state!==false)&&(state!==true))return;
	    if(state==true)
	    {
	    	$("input[name=password_confirmation]").parent().hide();
	    	$("#quick_login").show();
	    }
	    else
	    {
	    	$("input[name=password_confirmation]").parent().show();
	    	$("#quick_login").hide();
	    }
    }

    function switch_delivery(state){
    	if((state!==false)&&(state!==true))return;
	    $("input[name^=delivery_]").attr("disabled",state);
	    /* temporary disabled feature */
	    $("input[name^=delivery_]").each(function(){
	        $(this).val($("input[name^="+$(this).attr('name').replace('delivery', 'billing')+"]").val());
		});
        $("#delivery_country option[value='"+$("#billing_country option:selected").val()+"']").attr('selected', true);
    }

    $("#same_as_billing").on('change',function(e) {
		switch_delivery(this.checked);
	});

    $("div.dropdownCart").find("a.continue").on('click',function(e){
    	e.preventDefault();
	    $('.dropdownCart').slideToggle();
    });

    $(document).on('click', function(){
        $('.dropdownCart').fadeOut();
        $('.dropdownCart').removeClass('active');
        cartShowing = false;
    });
    function refresh_cart(toggle){
    	$("#cart_in_order").empty();
    	$("div.dropdownCart").find("div.cartItem").remove();
	    $.ajax({
           type: 'GET',
           url: '/cart',
           dataType: 'json',
           success: function(data){
           		if(data.result == 'OK')
           		{
	           		data_to_cart(data);
			   		setup_cart_remove();
           		}
           }
        });
    };

    refresh_cart(false);

    function setup_cart_remove(){
    	$("span.cross[role=cartremove]").off('click');
	    $("span.cross[role=cartremove]").on('click','', function(e) {
	    	$("div.dropdownCart").find("div.cartItem").remove();
	    	e.preventDefault();
            e.stopPropagation();
			$.ajax({
	           type: 'POST',
	           url: $(this).data('href'),
	           dataType: 'json',
	           success: function(data){
	           		if(data.result == 'OK')
	           		{
		           		data_to_cart(data);
				   		setup_cart_remove();
	           		}
	           }
	        });
		});
    };

    function data_to_cart(data){
        $("#cart_in_order").empty();
	    $("span.cartItems").html('$'+data.itemsprice);
        if (data.itemscount == 1) {
            $("span.cartTotal").html(data.itemscount + ' item&nbsp;');
        } else {
            $("span.cartTotal").html(data.itemscount + ' items');
        }
   		$("div.Total.light").html('Cart Total: $'+data.itemsprice);
   		$("span.light:contains('Cost')").parent().find('span.value').html('$'+data.itemsprice);
        if (data.items.length == 0) {
            allowCheckout = false;
        } else {
            allowCheckout = true;
        }
        var first = true;
   		$.each(data.items, function(id,val){
            var className = "";
            if (first) {
                className = "cartItem first";
            } else {
                className = "cartItem";
            }
   			cartitem = '<div class="'+className+'"><p class="light">' + val.name + '</p><p><span class="right">$' + val.price*val.quantity + '<span class="cross" role="cartremove" data-href="/cart/remove/' + val.id + '"></span></span>' + val.edition_name + ' x '+ val.quantity +'</p></div>';
   			$("div.dropdownCart").find("div.header").eq(0).after(cartitem);
   			$("#cart_in_order").append(cartitem);
            first = false;
   		});
    }

    $(document).on('click','.toCart', function(e) {
        // alert('fds');
        e.preventDefault();
        var $this = $(this);
        var cart = $('.shopping-cart');
        // var imgtodrag = $(this).closest('.box').find(".imageContainerLarge.main img").eq(0);
        var imgtodrag = $('.plusone img');
        if (!$(this).is('.soldOut')){
            if (imgtodrag) {
                var imgclone = imgtodrag.clone()
                        .offset({
                            top: e.pageY - 25,//$this.offset().top-4,
                            left: e.pageX - 25//$this.offset().left+10
                        })
                        .css({
                            'opacity': '0.5',
                            'position': 'absolute',
                            'z-index': '100'
                        })
                        .appendTo($('body'))
                        .animate({
                            'top': cart.offset().top + 10,
                            'left': cart.offset().left + 10
                            // 'width': 75,
                            // 'height': 75
                        }, 1000, 'easeInOutExpo');

                setTimeout(function() {
                    cart.effect("shake", {
                        times: 2,
                        distance: 2
                    }, 200);
                }, 1500);

                imgclone.animate({
                    'width': 0,
                    'height': 0
                }, function() {
                    $(this).detach();
                });
            }
            if(!$(this).data('price_id'))
            $(this).data('price_id',0);
            $.ajax({
               type: 'POST',
               url: $(this).attr('href'),
               data: 'product_type='+$(this).data('product_type')+'&product_id='+$(this).data('product_id')+'&print_id='+$(this).data('print_id')+'&price_id='+$(this).data('price_id'),
               dataType: 'json',
               success: function(data){
               		if(data.result == 'OK')
               		{
    	           		$("span.cartItems").html('$'+data.itemsprice);
                        if (data.itemscount == 1) {
                            $("span.cartTotal").html(data.itemscount + ' item&nbsp;');
                        } else {
                            $("span.cartTotal").html(data.itemscount + ' items');
                        }
                        refresh_cart(false);
               		}
               }
            });
        }
    });

    $(".fancybox").fancybox({
        helpers: {
            title: {
                type: 'outside'
            },
            overlay: {
                speedOut: 0
            }
        }
    });

    if ($('#slider1').length) {
        $("#slider1").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 1000,
            timeout: 5000,
            maxwidth: 942,
            namespace: "centered-btns"
        });
    }

    $(document).on('click', '.stickySquareAdvert .cross', function() {
        $(this).parent().fadeOut();
    });

    $(document).on('focus', '.style-03', function() {
        $(this).animate({
            width: ['120px', 'easeOutBack']
        }, 800);
        $(this).addClass('active');
    });

    $(document).on('blur', '.style-03', function() {
        $(this).animate({
            width: ['70px', 'easeOutBack']
        }, 800);
        $(this).removeClass('active');
    });

    $(document).on('click', '.dropdown', function(e) {
        if (e.target !== this)
            return;
        $(this).toggleClass('open');
    });

    $(document).on('click', '.chk.unchecked', function() {
        $(this).removeClass('unchecked').addClass('checked');
        $(this).find('input').prop('checked', true);
        if($(this).find('input').attr('name')=='have_account')
        hide_confirmation(true);
        if($(this).find('input').attr('name')=='same_as_billing')
        switch_delivery(true);
    });

    $(document).on('click', '.chk.checked', function() {
        $(this).removeClass('checked').addClass('unchecked');
        $(this).find('input').prop('checked', false);
        if($(this).find('input').attr('name')=='have_account')
        hide_confirmation(false);
        if($(this).find('input').attr('name')=='same_as_billing')
        switch_delivery(false);
    });

    $(document).on('click', '.radio', function() {
        if ($(this).hasClass('checked')) {
            return;
        } else {
            $(this).parents().eq(1).find('.radio').each(function() {
                $(this).removeClass('checked').addClass('unchecked');
            });
            $(this).removeClass('unchecked').addClass('checked');
        }
    });

    $(document).on('click', 'a.subscribe', function() {
        $('.subscribe-wrapper').show();
        $('.subscribe-panel').animate({
            'margin-top': '0px'
        }, function(){
            $('.subscribe-panel').find('input.style-01').first().focus();
        });

    });

    $(document).delegate("#cancel-subscribe", 'click', function() {
        $('.subscribe-panel').animate({
            'margin-top': '-82px'
        });
        $('.subscribe-wrapper').slideUp();
    });

    $(document).on('click', '.subscribe-wrapper-bckg,.cancel-subscribe', function() {
        $('.subscribe-panel').animate({
            'margin-top': '-82px'
        });
        $('.subscribe-wrapper').slideUp();
    });

    $(document).on('click', '.title03 span', function() {
        $(this).parent().find('span').each(function() {
            $(this).removeClass('active');
        });
        var target = $(this).attr('data-number');
        $(this).parents().eq(1).find('div.tab').each(function() {
            if ($(this).attr('data-number') !== target) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
        $(this).addClass('active');
    });

    $(document).on('click', '.gearNav span', function() {
        $(this).parent().find('span').each(function() {
            $(this).removeClass('active');
        });
        var target = $(this).attr('data-number');
        if ($(this).hasClass("travel")) window.location.hash = '#travel';
        if ($(this).hasClass("studio")) window.location.hash = '#studio';
        if ($(this).hasClass("print")) window.location.hash = '#print';
        if ($(this).hasClass("bag")) window.location.hash = '#bag';
        $(this).parents().eq(1).find('div.gear').each(function() {
            if ($(this).attr('data-number') !== target) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
        $(this).addClass('active');
    });

    // On window load. This waits until images have loaded which is essential
    $(window).load(function() {

        // Fade in images so there isn't a color "pop" document load and then on window load
        $(".client img, .gear img").fadeIn(500);

        // clone image
        $('.client img, .gear img').each(function() {
            var el = $(this);
            el.css({"position": "absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position": "absolute", "z-index": "998", "opacity": "0"}).insertBefore(el).queue(function() {
                var el = $(this);
                el.parent().css({"width": this.width, "height": this.height});
                el.dequeue();
            });
            this.src = grayscale(this.src);
        });

        // Fade image
        $('.client img, .gear img').mouseover(function() {
            $(this).parent().find('img:first').stop().animate({opacity: 1}, 1000);
        });
        $('.img_grayscale').mouseout(function() {
            $(this).stop().animate({opacity: 0}, 1000);
        });
    });

    $("#grid-nav a.main").on('click', function(e) {
        e.preventDefault();
        $("#grid-nav a").removeClass('active');
        $(this).addClass('active');
        $('div.subCategories').removeClass('open');
        $(this).next('div.subCategories').addClass('open');
        $(".video[data-nav!='"+$(this).data('nav')+"']").hide();
        $(".video[data-nav='"+$(this).data('nav')+"']").show();
    });
    $("#grid-nav a.main").first().click();

    $("#grid-nav a.subnav").on('click', function(e) {
        e.preventDefault();
        $("#grid-nav a.subnav").removeClass('active');
        $(this).addClass('active');
        var subnav = $(this).data('subnav');
        $(".video[data-nav='"+$(this).data('nav')+"']").hide();
        $(".video[data-nav='"+$(this).data('nav')+"']").each(function(){
            if ($(this).data('subnav').toString().split(",").indexOf(subnav.toString()) > -1) {
                $(this).show();
            }
        });
    });

    $("#contact-form").on('submit', function (e) {
        e.preventDefault();
        $(".successMessage").hide('fast');
        $.post(base_url + '/contact', $(this).serialize());
        $('input[type!="submit"],textarea').val('');
        $(".successMessage").show('fast');
    });

    $("#contact-form-storm").on('submit', function (e) {
        e.preventDefault();
        $(".successMessage").hide('fast');
        $.post(base_url + '/contact2', $(this).serialize());
        $('input[type!="submit"],textarea').val('');
        $(".successMessage").show('fast');
    });

    $(".blog-ad-close").on('click',function(){
        $(this).parent().fadeOut(500);
    });

    $("#blog-search").on('keypress', function(e) {
        doSearch = true;
        if (e.which == 13) {
            doBlogSearch();
        }
        if ($("#blog-search").val().length > 4) {
            doBlogSearch();
        }
    });
    $("#blog-search").on("blur", function(e) {
        if ($("#blog-search").val().length > 0) {
            doBlogSearch();
        }
    });
    Object.size = function(obj) {
        var size = 0, key;
        for (key in obj) {
            if (obj.hasOwnProperty(key)) size++;
        }
        return size;
    };
    $("#subscribe-form").on('submit', function (e) {
        e.preventDefault();

        var formData = $("#subscribe-form").serialize();
        $("#subscribe-form").find('input[type="text"]').css('border-color', 'rgb(96, 96, 96)');
        $("#subscribe-form").find('input[type="email"]').css('border-color', 'rgb(96, 96, 96)');
        $.post($("#subscribe-form").attr('action'), formData, function (data) {
            if (data.outcome == "error") {
                $.each(data.messages, function (k, v) {
                    $("#subscribe-form").find('input[name="'+k+'"]').css('border-color', '#ff0000');
                });
            } else {
                $(".subscribe-wrapper .container").html('<label class="padded02">Your subscription has been registered.</label><span id="cancel-subscribe">[<span>close</span>]</span>');
            }
        });
    });

    $("#subscribe-form .checkbox").on('click', function (e) {
        $(this).children('.chk').children('input[type="checkbox"]').attr('checked', !$(this).children('.chk').hasClass('checked'));
    });
});

$(window).load(function() {
    $(".advert_linkage").each(function() {
        var position = $(this).closest(".droppable-container").position().top + 600;
        $(".blog-ad-one[data-advert='"+$(this).data('advert')+"']").css('position', 'absolute');
        $(".blog-ad-one[data-advert='"+$(this).data('advert')+"']").css('top', position + "px");
        $(".blog-ad-two[data-advert='"+$(this).data('advert')+"']").css('position', 'absolute');
        $(".blog-ad-two[data-advert='"+$(this).data('advert')+"']").css('top', position + "px");
    });
});

function doBlogSearch()
{
    if (!doSearch) {
        return;
    }
    $("#output_area").html("Searching");
    $("#output_area").load('/blog/searchAjax/' + $("#blog-search").val());
    doSearch = false;
}

$(window).bind("load", function() {
    var $el, leftPos, newWidth;

    $("a.lightbox").fancybox({
        'transitionIn'	:	'elastic',
        'transitionOut'	:	'elastic',
        'speedIn'		:	600,
        'speedOut'		:	200,
        'overlayShow'	:	false,
        margin          :   45,
        helpers: {
            overlay: {
                locked: false
            }
        }
    });
});



// Grayscale w canvas method
function grayscale(src) {
    var canvas = document.createElement('canvas');
    var ctx = canvas.getContext('2d');
    var imgObj = new Image();
    imgObj.src = src;
    canvas.width = imgObj.width;
    canvas.height = imgObj.height;
    ctx.drawImage(imgObj, 0, 0);
    var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
    for (var y = 0; y < imgPixels.height; y++) {
        for (var x = 0; x < imgPixels.width; x++) {
            var i = (y * 4) * imgPixels.width + x * 4;
            var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
            imgPixels.data[i] = avg;
            imgPixels.data[i + 1] = avg;
            imgPixels.data[i + 2] = avg;
        }
    }
    ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
    return canvas.toDataURL();
}



function fadeOutScreen(select){
    //$(select).click(function(e){
    //    var $this = $(this);
    //    if (! $this.is('[target="_blank"]')){
    //        e.preventDefault();
    //        $('.wrapper').fadeOut(200, function(){
    //            document.location = $this.attr('href');
    //        });
    //    }
    //});
}

$(window).unload(function(){});
