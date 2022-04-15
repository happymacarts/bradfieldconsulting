
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

/*const app = new Vue({
    el: '#app' 
});
*/

$(document).ready(function($){
	$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		}); 
	
	var offset = 190;
	var duration = 300;
	$(window).scroll(function() {
			if ($(this).scrollTop() > offset) {			 
				$('.ui-to-top').removeClass('hide').fadeIn(duration);
			} else {
				$('.ui-to-top').fadeOut(duration).addClass('hide');
			}
			 
	})
	
	
	$('#subscribe_form').on('submit',function(e){
		e.preventDefault();
		data = $(this).serialize();
		$.ajax({
			url:'/subscribe',
			data:data, 
			method:'POST',
			success:function(msg){
				console.log(msg);
				$('#subscribe-email').val('');
				$('#subscribe-email').closest('.input-group').removeClass('has-error');
				$('#subscribe_form .form-error').text('').hide().addClass('hide');
			},
			statusCode:{
				422:function(msg){
			
					err = msg.responseJSON.email
					$('#subscribe_form .form-error').text(err).show().removeClass('hide');
					$('#subscribe-email').closest('.input-group').addClass('has-error')
					
				}
			}
		})
		
	})
})
