/**
 * Created by seungman on 2017. 3. 2..
 */
$(document).ready(function(){

	$(window).resize(function() {
		var innerWidth; // 화면 width 값

		innerWidth = $(window).innerWidth();
		// 모바일 메뉴 노출 상태에서 화면이 커졌을 경우 헤더 메뉴 정상 노출을 위해 적용
		if(innerWidth > 768) {
			$('.sub-menu .sub-menu-list').css("display","");
			$(".dim").hide()
			$("body").css("overflow", "");
			$("header").removeClass("open");
		}
	});

	$(".btn-slide, .btn-close-header, .dim").on('click', function (e) {
		// mobile
		if ($(window).innerWidth() < 1068) {
			// close sidebar
			if ($('header').hasClass("open")) {
				$("header").removeClass("open");
				$(".dim").hide()
				$("body").css("overflow", "");
				$("html").css("position", "");
				// open sidebar
			} else {
				$("header").addClass("open");
				$(".dim").show()
				$("body").css("overflow", "hidden");
				$("html").css("position", "fixed");
			}
		}
	});

	$(document).on('click', function(event) {
		var $target = $(event.target);
		var $submenu = $target.parent('.sub-menu');    // li.sub-menu(서브메뉴를 갖고 있는 li)
		var $ulwrap = $target.next('.sub-wrap'); // 서브메뉴 그룹
		var $ul = $ulwrap.find('.sub-menu-list:eq(0)'); // 자식 그룹의 메뉴 리스트

		if ($(window).innerWidth() < 992) {
			if ($submenu.length !== 0) {
				// 타겟의 부모가 서브메뉴를 갖고 있는 경우
				event.preventDefault();
				if ($ul.is(':visible')) {
					// 하위 sub-menu 에 열려있는건 닫음
					$ul.find('.sub-menu-list').slideUp('fast');
					$ul.find('.sub-menu').removeClass('open');
					$ul.slideUp('fast');
					$submenu.removeClass('open');
				} else {
					// 동일 sub-menu 에 열려있는건 닫음
					var $parent =$submenu.parent();
					$parent.find('.sub-menu .sub-menu-list').slideUp('fast');
					$parent.find('.sub-menu.open').removeClass('open');
					$ul.slideDown('fast');
					$submenu.addClass('open');
				}
			} else {
				$('.sub-menu').removeClass('open')
				$ul.slideUp('fast');
			}
		}else {
			if ($submenu.length !== 0) {
				event.preventDefault();
				if ($ul.is(':visible')) {
					// 열려있는건 닫음
					$ul.find('.sub-menu').removeClass('open');
					$submenu.removeClass('open'); // target을 다시 클릭 시 서브 메뉴 닫기
					$('.depth-fixed .open-temp').addClass('open-fixed'); // 열려있는 서브메뉴를 다시 닫기 시 기존에 고정되었던 서브메뉴 열기
				}else {
					// 동일 sub-menu 에 열려있는건 닫음
					var $parent =$submenu.parent();
					$parent.find('.sub-menu.open').removeClass('open');
					$parent.find('.sub-menu.open-fixed').addClass('open-temp');
					// 2depth 고정형(페이지 접속시 2depth 펼쳐져 있는 경우) 다른 상위 뎁스 클릭 시 .open-temp 추가(이후 document 클릭 시 .open-fixed 추가하기 위함)
					$parent.find('.sub-menu.open-fixed').removeClass('open-fixed');
					// 2depth 고정형(페이지 접속시 2depth 펼쳐져 있는 경우) 다른 상위 뎁스 클릭 시 서로 겹쳐보이지 않게 하기 위함
					$submenu.addClass('open');
				}
			} else {
				// 타겟의 부모가 서브메뉴가 아닌 경우 (document)
				$('.sub-menu.open').removeClass('open');
				$('.sub-menu.open-temp').addClass('open-fixed');
			}
		}
	});

	$('#__boram_contact').on('click', function(e) {
		e.preventDefault();

		$('.__boram_common_wrap').hide();
		$('.__boram_contact_wrap').show();

		if($(this).data('image')) {
			$('.main-wrap').css({'background-image': 'url("' + $(this).data('image') + '")'})
			$('body').addClass('no-banner pull-bg');
		}
	});

	$('.__btnBoramContactSubmit').on('click', function() {
		
	});
})
