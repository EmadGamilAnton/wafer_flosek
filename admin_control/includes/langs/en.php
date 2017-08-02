<?php 
        function lang($phrase){

        static $lang = array(

            'message' => 'welcome to admin page',
            'page'      => 'hello from en page'
        );

    return $lang[$phrase];
}

