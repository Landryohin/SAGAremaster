/*!
 * Copyright @OlaSoft 2019
 * https://www.olasoft.net
 * @OlaSoftBenin
 * contact@olasoft.net
 */
var documents = Array();
$(document).ready(function(){
	var header = $("#header");
	
	if($(window).scrollTop() >= 1)
		header.addClass("opaque");
	
	$(window).scroll(function(){
		if($(window).scrollTop() >= 1) header.addClass('opaque');
		else header.removeClass('opaque');
		
		$('.unes > figure, .grid').each(function(){
			var o = $(this);
			var p = o.offset().top - ($(window).height()/2) + $('#header').height();
			if($(window).scrollTop() >= p || o.offset().top <= ($(window).height()/2)){
				if(!o.hasClass('visible'))
					o.addClass('visible');
			}
		});
		
		$('.doc').each(function(){
			var o = $(this);
			var p = o.offset().top - ($(window).height()/2);
			if($(window).scrollTop() >= p ){
				if(!o.hasClass('visible'))
					o.addClass('visible');
			}
		});
	});
    $(document).on('click','.os-read-alt',function(e){if(!$('.popup').hasClass('show')) return showDocAlt($(this)); else return false;});
    $(document).find(".os-read-alt.auto").each(function(){showDocAlt($(this));});
    
    $(document).on('click','#typeBox li',function(e){
        $('#select-type').val($(this).text());
        $('#type').val($(this).attr('data-value'));
        $('#typeBox').removeClass('opened');
    });    

    $(document).on('click','#check-all',function(){
        documents = Array();
        if($(this).prop('checked')){
            $(".doc input[type='checkbox']").each(function(){
                $(this).prop('checked',true);
                documents.push($(this).val());
            });
            n = documents.length;
            $('#download-all').prop('disabled',false);
            $('#download-all span').text('Tout télécharger ('+n+')');
        }
        else{
            $(".doc input[type='checkbox']").prop('checked', false);
            $('#download-all').prop('disabled',true);
        }
    });

    $(document).on('click',".doc input[type='checkbox']",function(){
        if($(this).prop('checked')){
            documents.push($(this).val());
            $('#download-all').prop('disabled',false);
            n = documents.length;
            if(n == $(document).find(".doc input[type='checkbox']").length){
                $('#check-all').prop('checked',true);
                $('#download-all span').text('Tout télécharger ('+n+')');
            }
            else
                $('#download-all span').text('Télécharger la sélection ('+n+')');
        }
        else{
            documents.splice(documents.indexOf($(this).val()),1);
            $('#check-all').prop('checked',false);
            var n = documents.length;
            $('#download-all span').text('Télécharger la sélection ('+n+')');
            if(n == 0) $('#download-all').prop('disabled',true);
        }
    });

    $(document).on('click',"#download-all",function(){
        n = Object.keys(documents).length;
        if(!$(this).prop('disabled') && n){
            $("#notice p").html("Votre fichier est en préparation...<br/>Compression de <b>"+n+"</b> documents.");
            $("#notice").addClass('opened');
            $.get($(this).attr('data-link')+"?downloads="+JSON.stringify(documents))
            .done(function(data) {
                $(".doc input[type='checkbox']").prop('disabled',false);
                $(".doc input[type='checkbox']").prop('checked',false);
                $("#download-all, .doc input[type='checkbox']").prop('disabled',true);
                documents = {}
                $("#notice p").html("<span class='success fa fa-check-double'></span> Votre téléchargement est prêt.<br/><b>("+n+")</b> documents compressés.");
                window.location = data;
            })
            .fail(function() {
                $("#notice p").html("<span class='error fa fa-exclamation'></span> Une erreur s'est produite lors de la préparation du fichier.");
            });
        }
    });
});


function showDocAlt(o){
	if(o.attr('data-traking'))
		$.get(o.attr('data-traking'),function(d){});
	var popup = $('.popup').eq(0);
	popup.removeClass('show');
	content = $("<div class='h100'></div>");
    btnBox = $("<div class='text-center top-5-in bottom-5-in'></div>");
    btnBox.append($("#btnDownload").clone());
    content.append(btnBox);
	content.append("<embed src='"+server+"/Documents"+o.attr('data-target')+"' style='border: 0px; width: 100%; height: 100%;'>");
	popup.children('div, img').remove();
	popup.append(content);
	popup.addClass('show');
	return false;
}
