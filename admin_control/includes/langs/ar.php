<?php 
        function lang($phrase){

        static $lang = array(

            'message'   => 'اهلا بك في صفحة الادمن',
            'page'      => 'اهلا بك من صفحة اللغة العربية'
        );

    return $lang[$phrase];
}

