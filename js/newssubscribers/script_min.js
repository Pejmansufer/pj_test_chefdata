var EsNewsSubscribers={cookieLiveTime:100,cookieName:"es_newssubscriber",baseUrl:"",setCookieLiveTime:function(e){this.cookieLiveTime=e},setCookieName:function(e){this.cookieName=e},setBaseUrl:function(e){this.baseUrl=e},getBaseUrl:function(e){return this.baseUrl},createCookie:function(){var e=this.cookieLiveTime,s=this.cookieName;if(e){var r=new Date;r.setTime(r.getTime()+24*e*60*60*1e3);var o="; expires="+r.toGMTString()}else o="";document.cookie=escape(s)+"="+escape(1)+o+"; path=/"},readCookie:function(e){e=this.cookieName;for(var s=escape(e)+"=",r=document.cookie.split(";"),o=0;o<r.length;o++){for(var i=r[o];" "==i.charAt(0);)i=i.substring(1,i.length);if(0==i.indexOf(s))return unescape(i.substring(s.length,i.length))}return null},boxClose:function(){jQuery("#esns_background_layer").fadeOut()},boxOpen:function(){jQuery("#esns_background_layer").fadeIn()}};jQuery(function(){jQuery("#esns_submit").click(function(){var e=jQuery("#esns_email").val();jQuery.post(EsNewsSubscribers.getBaseUrl()+"newsletter/subscriber/newajax/",{email:e},function(e){e.errorMsg?jQuery("#esns_box_subscribe_response_error").html(e.errorMsg):(jQuery("#esns_box_subscribe_response_error").html(""),jQuery("#esns_box_subscribe_response_success").html(e.successMsg),jQuery("#esns_box_subscribe_form").css("display","none"),jQuery("#esns_box_subscribe_response_success").css("display","block"))})}),jQuery("#esns_box_close").click(function(){EsNewsSubscribers.boxClose()})}),jQuery.noConflict();