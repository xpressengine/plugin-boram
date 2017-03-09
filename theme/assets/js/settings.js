;(function() {

	var themeSettings = (function() {
		var self = this;

		return {
			init: function() {
				self = this;
				
				this.cache();
				this.bindEvents();
				this.setting();

				return this;
			},
			cache: function() {
				this.$layout = $('select[name=layout]');
				this.$logoSetting = $('select[name=logoSetting]');
				this.$useFooter = $('select[name=useFooter]');
				this.$useTopSlide = $('select[name=useTopSlide]');
				this.$useBottomSlide = $('select[name=useBottomSlide]');

				this.$logoImageWrap = $('.form-col-logoImage');
				this.$logoTextWrap = $('.form-col-logoText');
			},
			bindEvents: function() {
				this.$layout.on('change', this.handleLayoutPanel);
				this.$logoSetting.on('change', this.handleLogoField);
				this.$useFooter.on('change', this.handleFooter);
				this.$useTopSlide.on('change', this.handleTopSlide);
				this.$useBottomSlide.on('change', this.handleBottomSlide);
			},
			setting: function() {
				this.$layout.trigger('change');
				this.$logoSetting.trigger('change');
				this.$useFooter.trigger('change');
				this.$useTopSlide.trigger('change');
				this.$useBottomSlide.trigger('change');
			},
			handleLayoutPanel: function() {
				var $this = $(this);
				var $siblingsPanel = $this.parents('.panel').siblings();
				var layout = $this.find('option:selected').val();

				switch(layout) {
					case 'main':
						$siblingsPanel.eq(1).hide();
						$siblingsPanel.eq(0).show();
						break;

					case 'sub':
						$siblingsPanel.eq(0).hide();
						$siblingsPanel.eq(1).show();
						break;

					case 'contact':
						$siblingsPanel.hide();
						break;

					default:
				}
			},
			handleLogoField: function() {
				var $this = $(this);

				switch($this.find('option:selected').val()) {
					case 'image':
						self.$logoTextWrap.hide();
						self.$logoImageWrap.show();
						break;

					case 'text':
						self.$logoTextWrap.show();
						self.$logoImageWrap.hide();
						break;

					default:
						self.$logoTextWrap.hide();
						self.$logoImageWrap.hide();
				}
			},
			handleFooter: function() {
				var $this = $(this);

				switch($this.find('option:selected').val()) {
					case 'y':
						$('.form-col-footerCopyright').show();
						break;

					case 'n':
						$('.form-col-footerCopyright').hide();
						break;
				}
			},
			handleTopSlide: function() {
				var $this = $(this);

				switch($this.find('option:selected').val()) {
					case 'y':
						$('[class*=form-col-slide]').not('[class*=form-col-slideBottom]').show();
						break;

					case 'n':
						$('[class*=form-col-slide]').not('[class*=form-col-slideBottom]').hide();
						break;
				}
			},
			handleBottomSlide: function() {
				var $this = $(this);

				switch($this.find('option:selected').val()) {
					case 'y':
						$('[class*=form-col-slideBottom]').show();
						break;

					case 'n':
						$('[class*=form-col-slideBottom]').hide();
						break;
				}
			}
		}

	})().init();

})();