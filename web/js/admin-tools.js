(function($){

	$(document).ready()
	{
		$("form.remote-form").live("submit", function(e){

			var
				$form = $(this);

			

			return false;
		});		

		$(".editable-slot").live("dblclick", function(e) {

			var
				$this = $(this),
				$editor = $("div.slot-editor-container", $this);

			$editor.overlay(
			{
				load : true,
				closeOnClick : false,
				mask :
				{
					color : '#ccc',
					loadSpeed : 100,
					opacity : 0.75
				},
				onLoad : function()
				{
					var
						$overlay = this.getOverlay(),
						$editor = $('.rich-text-editor', $overlay);

					if( $editor.length > 0 ) {

						var editorOptions = {
							script_url : '/js/tiny_mce/tiny_mce_gzip.php',
							theme : "advanced",
							plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
							theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
							theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
							theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
							theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
							theme_advanced_toolbar_location : "top",
							theme_advanced_toolbar_align : "left",
							theme_advanced_statusbar_location : "bottom",
							theme_advanced_resizing : false,
							content_css : "/css/agni-editor.css",
							template_external_list_url : "lists/template_list.js",
							external_link_list_url : "lists/link_list.js",
							external_image_list_url : "lists/image_list.js",
							media_external_list_url : "lists/media_list.js",
							width: 950,
							height: 490
						};

						if(sfMediaBrowserWindowManager) {
							sfMediaBrowserWindowManager.init( $('#mediaBrowserUrl').val() );
							editorOptions = jQuery.extend({}, editorOptions, { file_browser_callback: "sfMediaBrowserWindowManager.tinymceCallback" });
						}

						$editor.tinymce(editorOptions);
					}
				}

			}).load();

		});
	}
	
})(jQuery);


