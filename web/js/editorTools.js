
function toggle_pane(pane) {
	
	$("#" + pane).slideToggle();
	save_toolbar_state();
}

function restore_toolbar_state() {
	
	var 
		state_cookie = readCookie('sf_simple_blog_toolbar'),
		$editorbox = jQuery('#editor-tools-container');

	if (state_cookie) {
		
		var preferences = state_cookie.split('x');

		$editorbox.css("left", preferences[0] + 'px');
		$editorbox.css("top", preferences[1] + 'px');
		
		if (preferences[2] == 'false') {
			jQuery('#tools').hide();
			jQuery('#tools').removeClass('open');
			jQuery('#toolbar_minifier').addClass('minimized')
		}
		
		if (preferences[3] == 'true') {
			try {
				jQuery('#cms_page_localizations').show();
				jQuery('#cms_page_localizations').addClass('open');
			} catch (e) {
			}
		}
		
		if (preferences[4] == 'true') {
			jQuery('#cms-tools-update-page').show();
		}
		
		if (preferences[5] == 'true') {
			jQuery('#cms-tools-create-page').show();
		}
		
		if (preferences[6] == 'true') {
			jQuery('#cms-tools-change-page').show();
		}
	}
	
	$editorbox.show();
}

function save_toolbar_state() {
	
	var 
		$toolbox = jQuery('#editor-tools-container'),
		position = $toolbox.position();

	// var position = Position.cumulativeOffset($('editor_box'));

	var preferences = new Array();
	preferences[0] = position.left
	preferences[1] = position.top;
	preferences[2] = jQuery('#tools').hasClass('open') ? 'true' : 'false';
	
	try {
		preferences[3] = jQuery('#cms_page_localizations').hasClass('open') ? 'true' : 'false';
	} catch (e) {
	}
	
	preferences[4] = jQuery('#cms-tools-update-page:visible').length > 0 ? 'true' : 'false';
	preferences[5] = jQuery('#cms-tools-create-page:visible').length > 0 ? 'true' : 'false';
	preferences[6] = jQuery('#cms-tools-change-page:visible').length > 0 ? 'true' : 'false';

	createCookie('sf_simple_blog_toolbar', preferences.join('x'), 7);
}

function transform_links_to_editable() {
	var $links = jQuery('a.cms_page_navigation');

	$links.each(function(index) {
		var $this = $(this);
		$this.attr("href") = $this.attr("href") + window.location.search;
	})
}

(function($){

	$(window).load(function() {

		restore_toolbar_state();
		transform_links_to_editable();

		var
			$editorToolbox = $("#editor-box");

		$("#editor-tools-container").draggable({
			handle : 'h1',
			stop : function(event, ui) {
				save_toolbar_state();
			}
		});

		$("a.remote-action", $editorToolbox).live("click", function(){

			var
				$this = $(this),
				url = $this.attr("href");

			$("#editor-tools-container").load(url, null, null);

			return false;
		});

		$(".cms-update-remote-form").live("submit", function(){

			var
				$this = $(this),
				data = $this.serialize(),
				url = $(this).attr("action");

			$.post(url, data, function(data){
				
				$("#editor-tools-container").html(data);

			}, "html");

			return false;
		});

		$("h2.toggle").live("click", function(){
			
			var
				$this = $(this),
				$panel = $this.next();

			$panel.toggle();
			
			save_toolbar_state();

			return false;
		});

	});

}(jQuery));