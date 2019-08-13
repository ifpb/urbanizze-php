
jQuery(document).ready(function($){
	
	/* IMAGENS SVG
	----------------------------------------------- */
	jQuery('img.svg').each(function(){
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');

		jQuery.get(imgURL, function(data) {
		// Get the SVG tag, ignore the rest
		var $svg = jQuery(data).find('svg');

		// Add replaced image's ID to the new SVG
		if(typeof imgID !== 'undefined') {
		    $svg = $svg.attr('id', imgID);
		}
		// Add replaced image's classes to the new SVG
		if(typeof imgClass !== 'undefined') {
		    $svg = $svg.attr('class', imgClass+' replaced-svg');
		}

		// Remove any invalid XML tags as per http://validator.w3.org
		$svg = $svg.removeAttr('xmlns:a');

		// Replace image with new SVG
		$img.replaceWith($svg);
		}, 'xml');
	});

	/* MASCARA DE TELEFONE
    ----------------------------------------------- */
	var TelsMask = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	spOptions = {
		onKeyPress: function(val, e, field, options) {
			field.mask(TelsMask.apply({}, arguments), options);
		}
	};

	$('.tel').mask(TelsMask, spOptions);

	/* MASCARAS
    ----------------------------------------------- */
	$('.cpf').mask('999.999.999-99');
	$('.cnpj').mask('99.999.999/9999-99');
	$('.cep').mask('99.999-999');
	$('.nascimento').mask('99/99/9999');

	/* VALIDADOR DE FORM BOOTSTRAP 4
    -----------------------------------------------*/
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
	    // Fetch all the forms we want to apply custom Bootstrap validation styles to
	    var forms = document.getElementsByClassName('needs-validation');
	    // Loop over them and prevent submission
	    var validation = Array.prototype.filter.call(forms, function(form) {
	      form.addEventListener('submit', function(event) {
	        if (form.checkValidity() === false) {
	          event.preventDefault();
	          event.stopPropagation();
	        }
	        form.classList.add('was-validated');
	      }, false);
	    });
	  }, false);
	})();

	/* ICON MENU
    -----------------------------------------------*/
	$(".ico-menu, .menu-mobile .nav-link").on('click', function() {
		$(this).toggleClass('fechar');
		$("body, #topo, .menu-mobile").toggleClass('lock');
	});

	/* FORMULÁRIOS - LOGIN - CADASTRO - ESQUECI
    -----------------------------------------------*/
	$(".form-group").on('click', function(e) {
    	// $(this).addClass('change').siblings().removeClass('change');
    	// $(this).find("label").addClass('change').siblings().removeClass('change');
    	$(this).removeClass("change").addClass("change");
	});
	$(".lnk-esqueci").on('click', function(e) {
		e.preventDefault();
		$("#login, #esqueci").stop().slideToggle();
	});
	$(".lnk-cadastro").on('click', function(e) {
		e.preventDefault();
		$("#login, #cadastro").stop().slideToggle();
	});

	$(".btn-nao").on('click', function(e) {
		e.preventDefault();
		$("#tut-pergunta, #tut-resposta").stop().slideToggle();
	});

	/* LEGENDA LINKS TABELA
    -----------------------------------------------*/
 //    $('a[href^="#"]').on('click', function(event) {
 //    var target = $(this.getAttribute('href'));
	//     if( target.length ) {
	//         event.preventDefault();
	//         $('html, body').stop().animate({
	//             scrollLeft: target.offset().top
	//         }, 1000);
	//     }
	// });
	if($(window).width() < 1199.98){

		// $(".table").clone(true).insertBefore('.table').addClass('clone');

		// $(".table-links").on("click", function(e) {
		//   var row_num = parseInt( $(this).parent().index() ) + 1;
		//   var getWidth = $('.table td').outerWidth();
		//   $('.table').scrollLeft(0 + (getWidth * row_num));

		// });

		// setTimeout(function (){
		// 	$('.clone').find('tr td').remove();
		// }, 500)

		$(".table-links").on('click', function(e) {
			e.preventDefault();

			$('html, body').animate({
			// $('.resultado-content').animate({
			    scrollTop: $(".legenda").stop().offset().top
			}, 1000);
			// $("#tabela").scrollLeft(120);
			// window.scrollTo({
			//   top: 100,
			//   left: 500,
			//   behavior: 'smooth'
			// });		
			// $("#tabela").scrollLeft(60).removeClass("table-responsive-sm").addClass("table-responsive-sm");
			// $("#tabela").removeClass("table-responsive-sm");
			// $("#tabela").toggleClass("table-responsive-sm");
			// $(this).removeClass("change").addClass("change");
			// if ($(e.target).closest("#tabela").length === 0) {
		 //        // $("#tabela").hide();
		 	// $("#tabela").addClass("table-responsive-sm");
		 //        alert("Foi!");
		 //    }
		});

		$("#table-link-1").on('click', function() {
			$(".legenda-1").addClass('exibe').siblings().removeClass('exibe');
		});
		$("#table-link-2").on('click', function() {
			$(".legenda-2").addClass('exibe').siblings().removeClass('exibe');
		});
		$("#table-link-3").on('click', function() {
			$(".legenda-3").addClass('exibe').siblings().removeClass('exibe');
		});
		$("#table-link-4").on('click', function() {
			$(".legenda-4").addClass('exibe').siblings().removeClass('exibe');
		});
		$("#table-link-5").on('click', function() {
			$(".legenda-5").addClass('exibe').siblings().removeClass('exibe');
		});
		$("#table-link-6").on('click', function() {
			$(".legenda-6").addClass('exibe').siblings().removeClass('exibe');
		});
		$("#table-link-7").on('click', function() {
			$(".legenda-7").addClass('exibe').siblings().removeClass('exibe');
		});
		
		$(document).mouseup(function (e) {
			e.preventDefault();
		    var container = new Array();
		    container.push($('.table-links'));
		    
		    $.each(container, function(key, value) {
		        if (!$(value).is(e.target) // if the target of the click isn't the container...
		            && $(value).has(e.target).length === 0) // ... nor a descendant of the container
		        {
		            // $('html, body').animate({
		            $('.resultado-content').animate({
					    scrollTop: $("#tabela").stop().offset().top
					}, 1000);
					$(".legenda").removeClass("exibe");
		            // $("#tabela").addClass("table-responsive-sm");
		        }
		    });
		});
	}

	/* ESPECIFIQUE
    -----------------------------------------------*/
    $('select').change(function(){
	    $('.btn-avancar').prop('disabled', false);
	});

	$(".btn-avancar").on('click', function() {
		$("#tipo, #pavimentos").stop().slideToggle();
	});
    
    $('#especifica-num').keyup(function(){
        if($(this).val().length !=0){
            $('.btn-pavimentos').attr('disabled', false);
        } else {
            $('.btn-pavimentos').attr('disabled', true);        
        }
    });

	/* IGUALAR ALTURAS
    -----------------------------------------------
    $('.item').matchHeight(); */

    /* VIDEOS RESPONSIVOS
    ----------------------------------------------- 
	$("p iframe, p object, p embed, p video").wrap( "<div class='embed-responsive embed-responsive-16by9'></div>" );*/
	
});