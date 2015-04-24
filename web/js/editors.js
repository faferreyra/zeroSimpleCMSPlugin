;(function ($) {

    "use strict";

    $(document).ready(function() {
        CKEDITOR.disableAutoInline = true;
        registerHtmlEditors();
    });

    function registerHtmlEditors() {
        var delayer = new RemoteSaveDelayer();
        $(".editable-html-slot").each(function() {
            var $slot = $(this);
            var pageSlug = $slot.data('page-slug');
            var slotName = $slot.data('page-slot');

            var $editor = $slot.find('.editor');
            $editor.ckeditor({
                language : 'es',
                filebrowserBrowseUrl : window['cms']['filebrowserUrl'],
                filebrowserWindowWidth : 960,
                filebrowserWindowHeight : 480,
                extraPlugins : 'sourcedialog,templates,image2,doksoft_bootstrap_advanced_blocks,doksoft_bootstrap_block_conf,doksoft_bootstrap_templates',
                extraAllowedContent : 'div(col-*,col-*,container,container-fluid,row,visible-*,hidden-*)',
                format_tags : 'p;h1;h2;h3;h4;h5;h6;pre;div',
                format_h5 : {
                    element : 'h5',
                    attributes : {
                        class : 'editorH5'
                    }
                },
                format_p : {
                    element : 'p',
                    attributes : {
                        class : 'editorP'
                    }
                },
                skin : 'bootstrapck',
                startupOutlineBlocks : true
            });

            $editor.ckeditor().editor.on('change', function( e ) {
                var content = e.editor.getData();
                delayer.save($slot, pageSlug, slotName, content);
            });

            $editor.ckeditor().editor.on('instanceReady', function (e) {
                var editor = e.editor;
                editor.setReadOnly(false);
            });
        });
    }

    function beforeSaveHandler($editorContainer) {
        $editorContainer.find('.icons .wait').removeClass('hidden');
        return true;
    }

    function afterSaveHandler($editorContainer) {
        $editorContainer.find('.icons .wait').addClass('hidden');
        var okIcon = $editorContainer.find(".icons .ok");
        okIcon.removeClass('hidden');
        setTimeout(function(){
            okIcon.addClass('hidden');
        }, 500);
    }

    function RemoteSaveDelayer() {

        var currentSaveTimeoutId;

        return {
            save : function($slot, path, slot, content) {

                var self = this;

                if (currentSaveTimeoutId != null) {
                    window.clearTimeout(currentSaveTimeoutId);
                }

                currentSaveTimeoutId = window.setTimeout(function() {
                    beforeSaveHandler($slot);

                    $.ajax({
                        url : window['cms']['remoteSaveUrl'],
                        type : 'POST',
                        data : {
                            body : content,
                            page : path,
                            slot : slot
                        },
                        dataType : 'json'
                    }).then(function (response) {
                        afterSaveHandler($slot);
                    });

                    currentSaveTimeoutId = null;

                }, 350);
            }
        }
    }


})(jQuery);