/*!
 * WPBakery Page Builder v6.0.0 (https://wpbakery.com)
 * Copyright 2011-2019 Michael M, WPBakery
 * License: Commercial. More details: http://go.wpbakery.com/licensing
 */

// jscs:disable
// jshint ignore: start

!function($){"use strict";function ScrollSpy(element,options){var href,process=$.proxy(this.process,this);this.$element=$(element).is("body")?$(window):$(element),this.$body=$("body"),this.$scrollElement=this.$element.on("scroll.bs.scrollspy",process),this.options=$.extend({},ScrollSpy.DEFAULTS,options),this.selector=(this.options.target||(href=$(element).attr("href"))&&href.replace(/.*(?=#[^\s]+$)/,"")||"")+" .nav li > a",this.offsets=$([]),this.targets=$([]),this.activeTarget=null,this.refresh(),this.process()}function Plugin(option){return this.each(function(){var $this=$(this),data=$this.data("bs.scrollspy"),options="object"==typeof option&&option;data||$this.data("bs.scrollspy",data=new ScrollSpy(this,options)),"string"==typeof option&&data[option]()})}ScrollSpy.VERSION="3.1.1",ScrollSpy.DEFAULTS={offset:10},ScrollSpy.prototype.refresh=function(){var offsetMethod=this.$element[0]==window?"offset":"position";this.offsets=$([]),this.targets=$([]);var self=this;this.$body.find(this.selector).filter(":visible").map(function(){var $el=$(this),href=$el.data("target")||$el.attr("href"),$href=/^#./.test(href)&&$(href);return $href&&$href.length&&$href.is(":visible")&&[[$href[offsetMethod]().top+(!$.isWindow(self.$scrollElement.get(0))&&self.$scrollElement.scrollTop()),href]]||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){self.offsets.push(this[0]),self.targets.push(this[1])})},ScrollSpy.prototype.process=function(){var i,scrollTop=this.$scrollElement.scrollTop()+this.options.offset,maxScroll=(this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight))-this.$scrollElement.height(),offsets=this.offsets,targets=this.targets,activeTarget=this.activeTarget;if(maxScroll<=scrollTop)return activeTarget!=(i=targets.last()[0])&&this.activate(i);if(activeTarget&&scrollTop<=offsets[0])return activeTarget!=(i=targets[0])&&this.activate(i);for(i=offsets.length;i--;)activeTarget!=targets[i]&&scrollTop>=offsets[i]&&(!offsets[i+1]||scrollTop<=offsets[i+1])&&this.activate(targets[i])},ScrollSpy.prototype.activate=function(target){this.activeTarget=target,$(this.selector).parentsUntil(this.options.target,".active").removeClass("active");var selector=this.selector+'[data-target="'+target+'"],'+this.selector+'[href="'+target+'"]',active=$(selector).parents("li").addClass("active");active.parent(".dropdown-menu").length&&(active=active.closest("li.dropdown").addClass("active")),active.trigger("activate.bs.scrollspy")};var old=$.fn.scrollspy;$.fn.scrollspy=Plugin,$.fn.scrollspy.Constructor=ScrollSpy,$.fn.scrollspy.noConflict=function(){return $.fn.scrollspy=old,this},$(window).on("load.bs.scrollspy.data-api",function(){$('[data-spy="scroll"]').each(function(){var $spy=$(this);Plugin.call($spy,$spy.data())})})}(jQuery);