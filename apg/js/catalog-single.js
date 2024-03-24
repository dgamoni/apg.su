$(document).ready(function() {

	$('.tab').each(function(index){
		$(this).attr('data-href','tabs_h' + index);
	});

	$('.tabsContent').each(function(index){
		$(this).attr('id','tabs_h' + index);
	});

	clickCaller = function(e){
		// убиваем текущие классы у всех

		$('.emkostBox, .gorloWraper, .gorloBox, .standartsInner').attr('id','');
		$('.standartsInner,.titleforTableStandart,#gorloTitle,.gorloBox').hide();

		$('.tabsContent').hide(0);
		e.preventDefault();
		$('#tabsHeader div').each(function(){
			$(this).removeClass('activeTab');
		});
		var parent = $(this).parent().addClass('activeTab');
		var curContent = $(parent).attr('data-href');
			$('#' + curContent).show(0);

		if ( $('#' + curContent + ' .emkostBox').length == 0){
			$('#' + curContent + ' #gorloTitle').css('display','block');
			$('#' + curContent + ' .gorloWraper').css('display','block');
			$('#' + curContent + ' .gorloBox').css('display','block');
		}

		$('#' + curContent + ' .emkostBox').each(function(index){
			$(this).attr('id', 'emkost_' + index).on('click', function(e){
				e.preventDefault();
				$('.emkostBox').removeClass('bgBlueForTbl');
				$(this).addClass('bgBlueForTbl');
				$('.gorloWraper').hide();
				$('.standartsInner').hide();
				$('.titleforTableStandart').hide();
				$('#gorloTitle').show(10);
				var curEmkost = $(this).attr('id');
				if ($('#gorlo_' + curEmkost).length > 0){
					$('#gorlo_' + curEmkost).show(10);
					$('#gorlo_' + curEmkost + ' .gorloBox').css('display','block');
				}
			});
		});

		$('#' + curContent + ' .gorloBox').each(function(index){
			$(this).attr('id', 'inner_gorlo_emkost_' + index).on('click', function(e){
				e.preventDefault();
				$('.standartsInner').hide();
				$('.gorloBox').removeClass('bgBlueForTbl');
				$(this).addClass('bgBlueForTbl');
				var tmp = $(this).attr('id');
				$('.titleforTableStandart').show(10);
				if ($('#standart_' + tmp).length > 0){
					$('#standart_' + tmp).show(10);
				}
			});
		});

		$('#' + curContent + ' .standartsInner').each(function(index){
			$(this).attr('id', 'standart_inner_gorlo_emkost_' + index);
		});
		$('#' + curContent + ' .gorloWraper').each(function(index){
			$(this).attr('id', 'gorlo_emkost_' + index);
		});
		$('#' + curContent + ' .st3 img').css('display','none'); 
	}

	$('.tab a').on('click',clickCaller);
	$('#tabsHeader .tab:first a').click();

});