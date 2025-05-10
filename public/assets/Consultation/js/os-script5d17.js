/*!
 * Copyright @OlaSoft 2019
 * https://www.olasoft.net
 * @OlaSoftBenin
 * contact@olasoft.net
 */
var t=window.location.origin.split('localhost');
var server =(t.length>1)?"http://localhost/public":window.location.origin;
var slideSense = 1;
var triggerSlide = null;
var slideInterval = 7000;
$(document).ready(function(){ 
    // Vérification des mots de passe
    $(document).on('keyup','.os-pwd',function(){checkPassword($(this));});    
    $(document).on('keyup','.os-confirm-pwd',function(){ checkPasswordConformity($('.os-pwd'),$(this));});
    $(document).on('submit','.os-check-pwd',function(){return (checkPassword($('.os-pwd')) && checkPasswordConformity($('.os-pwd'),$('.os-confirm-pwd')));});    

    // Déclenchement des slides
    $(document).on('keydown','.slide-container',function(e) {if(e.which == 37) prevSlide($(this)); else if(e.which == 39) nextSlide($(this));});
    $(document).on('keydown','.slide-container,.popup',function(e) {if (e.key === "Escape") {$(this).removeClass("show");}});
    $(document).on('click','.slide-container .next, .slide-next',function(e){
		var slider = isDefined($(this).attr('data-target')) ? $($(this).attr('data-target')) : $($(this).parent());
		nextSlide(slider);
        if(slider.hasClass('auto')){
            clearInterval(triggerSlide);
            triggerSlide = setInterval(slide,slideInterval,slider);
        }
		e.stopPropagation();
	});
    $(document).on('click','.slide-container .prev, .slide-prev',function(e){
		var slider = isDefined($(this).attr('data-target')) ? $($(this).attr('data-target')) : $($(this).parent());
		prevSlide(slider);
        if(slider.hasClass('auto')){
            clearInterval(triggerSlide);
            triggerSlide = setInterval(slide,slideInterval,slider);
        }
		e.stopPropagation();
	});
    $(document).on('click','.disabled', function(e){e.preventDefault();return false;});
    $(document).on('click','.slide-container .dot',function(){
		var slider = isDefined($(this).attr('data-target')) ? $($(this).attr('data-target')) : $($(this).parent());
        var activeIndex = $(".dots-box .dot").index($(".dot.active"));
        var dotIndex = $(".dots-box .dot").index($(this));
        var k = dotIndex - activeIndex;
        if(k>0) for(var i = 0; i < k; i++) nextSlide(slider);
        else for(var i = k; i < 0; i++) prevSlide(slider);
        clearInterval(triggerSlide);
        triggerSlide = setInterval(slide,slideInterval,slider);
    });
    
    // Affichage d'un élément au clic sur un élément
    $(document).on('click','.os-click',function(){
        var t = $(this).attr('data-target');
        t = isDefined(t) ? t == 'parent' ? $($(this).parent()) : t == 'next' ? $(this).next() : $(t) : $(this);
        if(t.hasClass('opened'))
            t.removeClass('opened');
        else
            t.addClass('opened');
    });
    
    // Affichage d'un album photos en slide
    $(document).on('click','.os-album',function(e){
        var imagesList = $(this).attr("data-images");
        if (isDefined(imagesList)) {
			var slider = $($(this).attr('data-slider'));
			var slides = $(slider.find('.slides')[0]);
			if(isDefined(slider) && slides){
				slides.empty();
				var images = imagesList.split(',');
				var n = images.length-1;
				for(i=0; i<=n; i++){
					console.log('in');
					if(images[i].length){
						var slide = $("<figure class='slide w100 h100 relative'></figure>");
						var img = $('<img src="" class="contain">');
						img.attr('src', $(this).attr('data-path')+images[i]);
						img.appendTo(slide);
						if(i==0) slide.addClass('active');
						slide.appendTo(slides);
					}
				}
				slider.addClass("show");
			}
        }
	}); 
    
    // Affichage de document pdf en popup
    $(document).on('click','.os-read',function(e){if(!$('.popup').hasClass('show')) return showDoc($(this)); else return false;});
    
    // Vérification numéro de décret
    $(document).on('keyup','.os-decree',function(){checkDecree($(this));}); 
    
    // Vérification numéro de décret
    $(document).on('keydown','.os-phone',function(){checkPhoneOnPressKey($(this));}); 
    
    // Fermeture Popup
    $(document).on('click','.popup .close, .popup > *',function(e){if (e.target === this) {$(".popup > div").remove(); $(".popup").removeClass("show opened");}});
    $(document).on('click','.os-close',function(){var t = $($(this).attr('data-target')); if (isDefined(t)) t.removeClass("show opened");});
    
    // Filtre de tableau ou recherche
	$(document).on('keyup',".os-filter",function(){filterTarget($(this))});
    $(document).on('keyup','.os-search',function(e) {if(e.which == 13) search($(this));});
    $(document).on('click','.os-search-btn',function() {
        var target = $($(this).attr('data-target'));
        if(isDefined(target))
            search(target);
    });
    
    // Onglets
	$(document).on('click','.os-tab-head',function(){
        var target = $($(this).attr('data-target'));
        var o = $(this);
        if(isDefined(target)){
            o.prevAll().removeClass('active');
            o.nextAll().removeClass('active');
            o.addClass('active');
            target.prevAll().removeClass('active');
            target.nextAll().removeClass('active');
            target.addClass('active');
        }
    });
    
    // Aperçu d'images
    $(document).on('click','.os-image, article figure img',function(){
        var src = $(this).attr('src');
		var popup = $('.popup').eq(0);
        if (!isDefined(src))
            src = $(this).attr('data-target');
        if(isDefined(src) && isDefined(popup)){
			popup.children('div, img').remove();
			popup.append('<img class="contain center" src="'+src+'">');
			popup.addClass("show");
		}
    });
    
    // Action pour retirer un objet ajouté dynamiquement à l'aide du prototype
    $(document).on('click','.os-remove',function(e){
        var target = $(this).attr('data-target');
        if (isDefined(target))
            $(target).remove();
        else
            $(this).parent().remove();
	});
    
    // Action pour lire une vidéo
    $(document).on('click','.os-play',function(){
		var target = $(this).attr("data-target");
		var popup = $('.popup').eq(0);
		if(isDefined(target) && isDefined(popup)){
			popup.children('div, img').remove();
			var emb = '<iframe src="'+target+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
			popup.append('<div class="flex col center middle">'+emb+'</div>');
			popup.addClass('show');
		}
    });
    
    // Action sur les select pour filter un autre select
    $(document).on('change','.os-select',function(){updateSelectBox($(this));});
    $(document).on('click','.os-check-all',function(){
        var t = $($(this).attr('data-target'));
        if(isDefined(t)){
            t.prop('checked',$(this).is(':checked'));
            t.click();
        }
        return true;
    });
    
    $(document).on('click','.os-share',function(){
        if(navigator.share){
            var title = $(this).attr('data-title');
            var text = $(this).attr('data-text');
            var url = $(this).attr('data-url');
            navigator.share({
                title: isDefined(title) ? title : document.title,
                text: isDefined(text) ? text : '',
                url: isDefined(url) ? title : document.location.href,
            })
          .then(() => console.log('Successful share'))
          .catch((error) => console.log('Error sharing', error));
      } else {
        console.log('Share not supported on this browser, do it the old way.');
      }
    });
    
    $(".highlight").each(function(){
        var s = $(this).html();
        var keywords = JSON.parse($(this).attr('data-keywords'));
        for(i in keywords)
            s = s.replace(new RegExp(keywords[i], "ig"),'<em>'+keywords[i]+'</em>');
        $(this).html(s);
    });
    
    handleEach($(this));
});

function isDefined(o){return (typeof o !== typeof undefined && o !== false && o.length > 0);}

function toJSON(s){
    try{
        var d = JSON.parse(s);
        return d;
    }
    catch(e){return false;}
    return false;
}

function handleEach(o){
    //o.find(".slide-container.auto").each(function(){triggerSlide = setInterval(slide,(isDefined($(this).attr('data-time')) ? parseInt($(this).attr('data-time')) : slideInterval),$(this));});
    o.find(".os-tab-head, .os-tab").each(function(i){if($(this).index() == 0) $(this).addClass('active');});
    o.find(".os-select").each(function(){updateSelectBox($(this));});
    o.find(".os-read.auto").each(function(){showDoc($(this));});
}

function search(o){
    var url = o.is('form') ? o.attr('action') : isDefined(o.attr('data-action')) ? o.attr('data-action') : window.location.href;
    var method = o.is('form') ? o.attr('method') : isDefined(o.attr('data-method')) ? o.attr('data-method') : 'GET';
    if( isDefined(url) ){
        o.find('input[name]').each(function(){url = url.replace(':'+$(this).attr('name'),$(this).val());});
        url = url.replace(':keywords',o.val().replace(/\s/g,'+'));
        if(method == 'GET'){window.location.href = encodeURI(url);}
        else{
            containerOnLoading();
            $.get(url,function(d){setContent(toJSON(d), url);}); 
        }               
    }
}

function closePopup(target){
    if(isDefined(target)){
        target.removeClass('show opened');
        target.children('div').remove();
    }
    else{
        $('.popup').removeClass('show opened');
        $('.popup > div').remove();
        $('.os-click.autohide').removeClass('opened');
    }
}

function removePopup(){
    $('.popup').remove();
}

function filterTarget(o, target){
    var t = isDefined(target) ? target : isDefined(o.attr('data-target')) ? $(o.attr('data-target')) : null;
    if(t)
        t.each(function() {
            if($(this).text().toLowerCase().indexOf(o.val().toLowerCase()) === -1)
               $(this).hide();
            else
               $(this).show();                
        });
}

function updateSelectBox(o){
    var t = $(o.attr('data-target'));
    t.find('[data-ref]').each(function(){
        if($(this).attr('data-ref') == o.children(':selected').val()) $(this).show();
        else $(this).hide();
    });
    t.val(t.find('option:visible:first').val());
}

function checkPasswordConformity(pwd1,pwd2){
    var val1 = pwd1.val();
    var val2 = pwd2.val();
    $("#"+pwd2.attr('id')+" + span").remove();
    if (val1.localeCompare(val2) || val1 == null || val1 ==""){
        $("<span style='display: block; color: red; font-size: 1.1em; margin-top: 5px;'><i class='fa fa-thumbs-o-down'></i> Les mots de passe ne sont pas conformes</span>").insertAfter(pwd2);
        return false;
    }
    $("<span style='display: block; color: green; font-size: 1.1em; margin-top: 5px;'><i class='fa fa-thumbs-o-up'></i> Les mots de passe sont conformes</span>").insertAfter(pwd2);
    return true;
}

function checkPassword(o){
    var l = o.val().length;
    $("#"+o.attr('id')+" + span").remove();
    if (l<6){
        $("<span style='display: block; color: red; font-size: 1.1em; margin-top: 5px;'><i class='fas fa-exclamation-triangle'></i> Au moins 6 caractères</span>").insertAfter(o);
        return false;
    }
    else if(l<=8) $("<span style='display: block; color: orange; font-size: 1.1em; margin-top: 5px;'><i class='fas fa-thumbs-o-up'></i> Mot de passe moyen</span>").insertAfter(o);
    else if(l<=10) $("<span style='display: block; color: blue; font-size: 1.1em; margin-top: 5px;'><i class='fas fa-thumbs-o-up'></i> Mot de passe bon</span>").insertAfter(o);
    else $("<span style='display: block; color: green; font-size: 1.1em; margin-top: 5px;'><i class='fas fa-thumbs-o-up'></i> Mot de passe très bon</span>").insertAfter(o);
    return true;
}
function checkPhoneOnPressKey(e){
	if(! ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)
		|| e.keyCode == 32 || e.keyCode == 8 || e.keyCode == 45 || e.keyCode == 46 
		|| e.keyCode == 16 || e.keyCode == 109))
		return false;
}

function checkTelephoneOnBlur(o){
	if (/^[0-9]{1,2}([-. ]?[0-9]{2}){3,4}$/.test(o.val()))
		return true;
    else{
        $("<span style='display: block; color: red; font-size: 1.1em; margin-top: 5px;'><i class='fas fa-exclamation-triangle'></i> Format du numéro de téléphone incorrect.</span>").insertAfter(o);
        o.val("");
        return false;
    }
}

function nextSlide(o){
    $(o.find('.active')).each(function(){
        var c = $(this);
        var next = c.next();
        if(next.length){
            c.addClass('fix-to-left');
            c.removeClass('active');
            next.removeClass('fix-to-right');
            next.addClass('active');
            if(!next.next().length)
                o.find(".next, .slide-next").addClass('disable');
            o.find(".prev, .slide-prev").removeClass('disable');
        }
        slideSense = 1;
    });
}

function prevSlide(o){
    $(o.find('.active')).each(function(){
        var c = $(this);
        var prev = c.prev();
        if(prev.length){
            var c = $(this);
            c.addClass('fix-to-right');
            c.removeClass('active');
            prev.removeClass('fix-to-left');
            prev.addClass('active');
            if(!prev.prev().length)
                o.find(".prev, .slide-prev").addClass('disable');
            o.find(".next, .slide-next").removeClass('disable');
        }
        slideSense = -1;
    });
}

function slide(o){
    var activeIndex = $(o.find(".slides .slide")).index($(".active"));
    var i = slideSense * (o.find(".slides .slide").length - activeIndex - 1);
    if(slideSense > 0)
        return i==0 ? prevSlide(o) : nextSlide(o);
    else
        return activeIndex==0 ? nextSlide(o) : prevSlide(o);
}

function showDoc(o){
	if(o.attr('data-traking'))
		$.get(o.attr('data-traking'),function(d){});
	var popup = $('.popup').eq(0);
	popup.removeClass('show');
	content = $("<div class='h100'></div>");
	content.append("<embed src='"+server+"/Documents/"+o.attr('data-target')+"' style='border: 0px; width: 100%; height: calc(100% - 4px);'>");
	popup.children('div, img').remove();
	popup.append(content);
	popup.addClass('show');
	return false;
}

function checkDecree(o){
    t = o.val().split('-bis')[0].split('-');
    $("#"+o.attr('id')+" + span").remove();
    if(t.length == 2 && $.isNumeric(t[0]) && (t[0].length == 2 || t[0].length == 4) && t[1].length)
        $("<span style='display: block; color: green; font-size: 1.1em; margin-top: 5px;'><i class='fas fa-thumbs-o-up'></i> Numéro du décret valide</span>").insertAfter(o);
    else
        $("<span style='display: block; color: red; font-size: 1.1em; margin-top: 5px;'><i class='fas fa-exclamation-triangle'></i> Numéro du décret non valide</span>").insertAfter(o);
}

function prettySize(size){
    var s = null;
    if (size >= 1073741824)
        s = Math.round(size / 1073741824) + ' Go';
    else if (size >= 1048576)
        s = Math.round($size / 1048576) + ' Mo';
    else if (size >= 1000)
        s = Math.round(size / 1024) + ' Ko';
    else
        s = size + ' O';
    return s;
}
