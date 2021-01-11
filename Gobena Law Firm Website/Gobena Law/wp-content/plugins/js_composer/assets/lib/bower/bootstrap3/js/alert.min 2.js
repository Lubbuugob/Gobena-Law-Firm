/*!
 * WPBakery Page Builder v6.0.0 (https://wpbakery.com)
 * Copyright 2011-2019 Michael M, WPBakery
 * License: Commercial. More details: http://go.wpbakery.com/licensing
 */

// jscs:disable
// jshint ignore: start

!function($){"use strict";var dismiss='[data-dismiss="alert"]',Alert=function(el){$(el).on("click",dismiss,this.close)};Alert.VERSION="3.1.1",Alert.prototype.close=function(e){var $this=$(this),selector=$this.attr("data-target");selector||(selector=(selector=$this.attr("href"))&&selector.replace(/.*(?=#[^\s]*$)/,""));var $parent=$(selector);function removeElement(){$parent.detach().trigger("closed.bs.alert").remove()}e&&e.preventDefault(),$parent.length||($parent=$this.hasClass("alert")?$this:$this.parent()),$parent.trigger(e=$.Event("close.bs.alert")),e.isDefaultPrevented()||($parent.removeClass("in"),$.support.transition&&$parent.hasClass("fade")?$parent.one($.support.transition.end,removeElement).emulateTransitionEnd(150):removeElement())};var old=$.fn.alert;$.fn.alert=function(option){return this.each(function(){var $this=$(this),data=$this.data("bs.alert");data||$this.data("bs.alert",data=new Alert(this)),"string"==typeof option&&data[option].call($this)})},$.fn.alert.Constructor=Alert,$.fn.alert.noConflict=function(){return $.fn.alert=old,this},$(document).on("click.bs.alert.data-api",dismiss,Alert.prototype.close)}(jQuery);