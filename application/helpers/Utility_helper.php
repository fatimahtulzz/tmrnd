<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');




    if (!function_exists ('asset_url()')) {
        function asset_url ()
        {
            return base_url ().'assets/';
        }
    }





    if (!function_exists ('js_url()')) {
        function js_url ($file=null)
        {
            return base_url ().'assets/js/'.$file;
        }
    }



    
    if (!function_exists ('css_url()')) {
        function css_url ($file=null)
        {
            return base_url ().'assets/css/'.$file;
        }
    }

