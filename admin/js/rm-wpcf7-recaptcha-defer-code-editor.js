(function($){
	'use strict';
    $(function(){
        if( $('#rm-wpcf7-recaptcha-defer-rm_wpcf7_recaptcha_defer_datalayer').length ) {
            var editorSettings = wp.codeEditor.defaultSettings ? _.clone( wp.codeEditor.defaultSettings ) : {};
            editorSettings.codemirror = _.extend(
                {},
                editorSettings.codemirror,
                {
                    indentUnit: 2,
                    tabSize: 2,
                    mode: 'javascript',
                }
            );
            var editor = wp.codeEditor.initialize( $('#rm-wpcf7-recaptcha-defer-rm_wpcf7_recaptcha_defer_datalayer'), editorSettings );
        }
    });
})(jQuery);