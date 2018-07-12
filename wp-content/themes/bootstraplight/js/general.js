$(document).ready(function () {
  leftSideBarToggle();
  EmailSubscriberPluginCustomize();
});

function leftSideBarToggle(){
	$('#leftSidebarCollapse').on('click', function () {
		$('#leftSidebar').toggleClass('active');
		$(this).toggleClass('active');
	});
}

function EmailSubscriberPluginCustomize(){
  $('.es_lablebox').remove();

  $('#es_txt_button').addClass('btn btn-primary');
  $('div.es_button').after('<div class="clearfix"></div>');

  $('#es_txt_email').addClass('form-control');
  $('#es_txt_email').attr('placeholder', 'Type your email address');

}