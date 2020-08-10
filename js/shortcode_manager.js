(function() {
    tinymce.create("tinymce.plugins.shortcode_button_plugin", {

        //url argument holds the absolute url of our plugin directory
        init : function(ed, url) {

            //DIVIDER     
            ed.addButton("divider", {
                title : "Divider Shortcode",
                cmd : "divider",
                image : "/wp-content/themes/mayecreate-theme/img/shortcode_icons/divider_icon.png"
            });

            //DIVIDER button functionality.
            ed.addCommand("divider", function() {
                shortcode = '[divider]';
                ed.execCommand('mceInsertContent', 0, shortcode);
            });
			
			//ONE HALF     
            ed.addButton("column", {
                title : "Half Columns",
                cmd : "column",
                image : "/wp-content/themes/mayecreate-theme/img/shortcode_icons/column_half.png"
            });

            //ONE HALF button functionality.
            ed.addCommand("column", function() {
                shortcode = '[one_half_first]ONE HALF[/one_half_first][one_half_last]ONE HALF[/one_half_last]';
                ed.execCommand('mceInsertContent', 0, shortcode);
            });
			
			//ONE THIRD/TWO THIRD     
            ed.addButton("column-third", {
                title : "One Third/Two Third Columns",
                cmd : "column-third",
                image : "/wp-content/themes/mayecreate-theme/img/shortcode_icons/column_one_third.png"
            });

            //ONE THIRD/TWO THIRD button functionality.
            ed.addCommand("column-third", function() {
                shortcode = '[one_third_first]ONE THIRD[/one_third_first][two_third_last]TWO THIRD[/two_third_last]';
                ed.execCommand('mceInsertContent', 0, shortcode);
            });
			
			//TWO THIRD/ONE THIRD     
            ed.addButton("column-two-third", {
                title : "Two Third/One Third Columns",
                cmd : "column-two-third",
                image : "/wp-content/themes/mayecreate-theme/img/shortcode_icons/column_two_third.png"
            });

            //TWO THIRD/ONE THIRD button functionality.
            ed.addCommand("column-two-third", function() {
                shortcode = '[two_third_first]TWO THIRD[/two_third_first][one_third_last]ONE THIRD[/one_third_last]';
                ed.execCommand('mceInsertContent', 0, shortcode);
            });
			
			//ONE THIRD     
            ed.addButton("column-one-third", {
                title : "One Third Columns",
                cmd : "column-one-third",
                image : "/wp-content/themes/mayecreate-theme/img/shortcode_icons/column_third.png"
            });

            //ONE THIRD button functionality.
            ed.addCommand("column-one-third", function() {
                shortcode = '[one_third_first]ONE THIRD[/one_third_first][one_third]ONE THIRD[/one_third][one_third_last]ONE THIRD[/one_third_last]';
                ed.execCommand('mceInsertContent', 0, shortcode);
            });
			
			//ONE QUARTER    
            ed.addButton("column-one-quarter", {
                title : "One Quarter Columns",
                cmd : "column-one-quarter",
                image : "/wp-content/themes/mayecreate-theme/img/shortcode_icons/column_quarter.png"
            });

            //ONE QUARTER button functionality.
            ed.addCommand("column-one-quarter", function() {
                shortcode = '[one_quarter_first]ONE QUARTER[/one_quarter_first][one_quarter]ONE QUARTER[/one_quarter][one_quarter]ONE QUARTER[/one_quarter][one_quarter_last]ONE QUARTER[/one_quarter_last]';
                ed.execCommand('mceInsertContent', 0, shortcode);
            });
 
        },

        createControl : function(n, cm) {
            return null;
        },

        getInfo : function() {
            return {
                longname : "Shortcode Buttons",
                author : "Tyler Ernst",
                version : "1"
            };
        }
    });

    tinymce.PluginManager.add("shortcode_button_plugin", tinymce.plugins.shortcode_button_plugin);
})();