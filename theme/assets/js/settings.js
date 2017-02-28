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
				this.$logoImageWrap = $('.form-col-logoImage');
				this.$logoTextWrap = $('.form-col-logoText');
			},
			bindEvents: function() {
				this.$layout.on('change', this.handleLayoutPanel);
				this.$logoSetting.on('change', this.handleLogoField);
			},
			setting: function() {
				this.$layout.trigger('change');
				this.$logoSetting.trigger('change');
			},
			handleLayoutPanel: function() {
				var $this = $(this);
				var $siblingsPanel = $this.parents('.panel').siblings();
				var layout = $this.find('option:selected').val();

				switch(layout) {
					case 'main':
						$siblingsPanel.not(':eq(0)').hide();
						$siblingsPanel.eq(0).show();
						break;

					case 'sub':
						$siblingsPanel.not(':eq(1)').hide();
						$siblingsPanel.eq(1).show();
						break;

					case 'contact':
						$siblingsPanel.not(':eq(2)').hide();
						$siblingsPanel.eq(2).show();
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
			}
		}

	})().init();

})();