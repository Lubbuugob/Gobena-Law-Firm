/*!
 * WPBakery Page Builder v6.0.0 (https://wpbakery.com)
 * Copyright 2011-2019 Michael M, WPBakery
 * License: Commercial. More details: http://go.wpbakery.com/licensing
 */

// jscs:disable
// jshint ignore: start

!function($){"use strict";var Modal=function(element,options){this.options=options,this.$body=$(document.body),this.$element=$(element),this.$backdrop=this.isShown=null,this.scrollbarWidth=0,this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,$.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};function Plugin(option,_relatedTarget){return this.each(function(){var $this=$(this),data=$this.data("bs.modal"),options=$.extend({},Modal.DEFAULTS,$this.data(),"object"==typeof option&&option);data||$this.data("bs.modal",data=new Modal(this,options)),"string"==typeof option?data[option](_relatedTarget):options.show&&data.show(_relatedTarget)})}Modal.VERSION="3.1.1",Modal.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},Modal.prototype.toggle=function(_relatedTarget){return this.isShown?this.hide():this.show(_relatedTarget)},Modal.prototype.show=function(_relatedTarget){var that=this,e=$.Event("show.bs.modal",{relatedTarget:_relatedTarget});this.$element.trigger(e),this.isShown||e.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.$body.addClass("modal-open"),this.setScrollbar(),this.escape(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',$.proxy(this.hide,this)),this.backdrop(function(){var transition=$.support.transition&&that.$element.hasClass("fade");that.$element.parent().length||that.$element.appendTo(that.$body),that.$element.show().scrollTop(0),transition&&that.$element[0].offsetWidth,that.$element.addClass("in").attr("aria-hidden",!1),that.enforceFocus();var e=$.Event("shown.bs.modal",{relatedTarget:_relatedTarget});transition?that.$element.find(".modal-dialog").one($.support.transition.end,function(){that.$element.trigger("focus").trigger(e)}).emulateTransitionEnd(300):that.$element.trigger("focus").trigger(e)}))},Modal.prototype.hide=function(e){e&&e.preventDefault(),e=$.Event("hide.bs.modal"),this.$element.trigger(e),this.isShown&&!e.isDefaultPrevented()&&(this.isShown=!1,this.$body.removeClass("modal-open"),this.resetScrollbar(),this.escape(),$(document).off("focusin.bs.modal"),this.$element.removeClass("in").attr("aria-hidden",!0).off("click.dismiss.bs.modal"),$.support.transition&&this.$element.hasClass("fade")?this.$element.one($.support.transition.end,$.proxy(this.hideModal,this)).emulateTransitionEnd(300):this.hideModal())},Modal.prototype.enforceFocus=function(){$(document).off("focusin.bs.modal").on("focusin.bs.modal",$.proxy(function(e){this.$element[0]===e.target||this.$element.has(e.target).length||this.$element.trigger("focus")},this))},Modal.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keyup.dismiss.bs.modal",$.proxy(function(e){27==e.which&&this.hide()},this)):this.isShown||this.$element.off("keyup.dismiss.bs.modal")},Modal.prototype.hideModal=function(){var that=this;this.$element.hide(),this.backdrop(function(){that.$element.trigger("hidden.bs.modal")})},Modal.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},Modal.prototype.backdrop=function(callback){var that=this,animate=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var doAnimate=$.support.transition&&animate;if(this.$backdrop=$('<div class="modal-backdrop '+animate+'" />').appendTo(this.$body),this.$element.on("click.dismiss.bs.modal",$.proxy(function(e){e.target===e.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus.call(this.$element[0]):this.hide.call(this))},this)),doAnimate&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!callback)return;doAnimate?this.$backdrop.one($.support.transition.end,callback).emulateTransitionEnd(150):callback()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var callbackRemove=function(){that.removeBackdrop(),callback&&callback()};$.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one($.support.transition.end,callbackRemove).emulateTransitionEnd(150):callbackRemove()}else callback&&callback()},Modal.prototype.checkScrollbar=function(){document.body.clientWidth>=window.innerWidth||(this.scrollbarWidth=this.scrollbarWidth||this.measureScrollbar())},Modal.prototype.setScrollbar=function(){var bodyPad=parseInt(this.$body.css("padding-right")||0);this.scrollbarWidth&&this.$body.css("padding-right",bodyPad+this.scrollbarWidth)},Modal.prototype.resetScrollbar=function(){this.$body.css("padding-right","")},Modal.prototype.measureScrollbar=function(){var scrollDiv=document.createElement("div");scrollDiv.className="modal-scrollbar-measure",this.$body.append(scrollDiv);var scrollbarWidth=scrollDiv.offsetWidth-scrollDiv.clientWidth;return this.$body[0].removeChild(scrollDiv),scrollbarWidth};var old=$.fn.modal;$.fn.modal=Plugin,$.fn.modal.Constructor=Modal,$.fn.modal.noConflict=function(){return $.fn.modal=old,this},$(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(e){var $this=$(this),href=$this.attr("href"),$target=$($this.attr("data-target")||href&&href.replace(/.*(?=#[^\s]+$)/,"")),option=$target.data("bs.modal")?"toggle":$.extend({remote:!/#/.test(href)&&href},$target.data(),$this.data());$this.is("a")&&e.preventDefault(),Plugin.call($target,option,this),$target.one("hide.bs.modal",function(){$this.is(":visible")&&$this.trigger("focus")})})}(jQuery);