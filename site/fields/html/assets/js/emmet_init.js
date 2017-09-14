emmet.require('textarea').setup({
    pretty_break: true, // enable formatted line breaks (when inserting 
                        // between opening and closing tag) 
    use_tab: true       // expand abbreviations by Tab key
});

/*
Additionally, you can add special classes to your <textarea> element to control Emmet behavior:

    emmet-syntax-NAME: set syntax NAME for current <textarea>: html, css, xml etc.
    emmet-profile-NAME: set one of the predefined profile.
    emmet-use_tab-BOOL: enable (yes) or disable (no) Tab expander on current <textarea>.
    emmet-pretty_break-BOOL: enable (yes) or disable (no) formatted linebreak insertion on current <textarea>.
    no-emmet: disable Emmet actions on current <textarea>.
*/