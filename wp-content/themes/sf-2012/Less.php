<?php
/**
 * The Less Container
 *
 * We simply compile files here.
 *
 * @access     public
 * @package    Core
**/
class Less
{
     public static $less_folder;
     public static $compile_folder;
     
     /**
      * Setup 
      *
      * @access     public
     **/
     public static function init()
     {
          require_once(dirname(__FILE__).'/less_lib/lessc.inc.php');
          
          self::$less_folder = dirname(__FILE__).'/less/';
          self::$compile_folder = dirname(__FILE__).'/css/';
     }
     
     /**
      * Compile a CSS File
      *
      * @access     public
     **/
     public static function compile($name)
     {
          try
          {
               lessc::ccompile(self::$less_folder.$name.'.less', self::$compile_folder.$name.'.css');
          }
          catch (exception $ex)
          {
               exit('lessc fatal error:<br />'.$ex->getMessage());
          }
     }
}
/* End of file Less.php */