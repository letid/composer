<?php
namespace app;
class routeController extends \letId\request\http
{
  /**
  * Application (folder) => hostname (regex without slashs)
  * @var array/string
  */
  protected $application = array(
    'test'=>'example.',
    // 'test'=>'example.localhost',
    // 'test'=>array(
    //     'example.com','.example.com','.example.'
    // ),
    // 'test'=>'test.',
    'test'=>''
  );
  /**
  * Common directory rewrite!
  * @var array
  */
  // protected $rewrite = array();
  /**
  * Setting!
  * @var array
  */
  // protected $setting = array();
  /**
  * Common directory
  * @var array
  */
  // protected $directory = array(
  //   'template'=>'template',
  //   'language'=>'language'
  // );
  /**
  * Common configurations
  * @var array
  * NOTE: application's namespace, ANS can not be modified!
  */
  protected $configuration = array(
    'ANS'=>__NAMESPACE__
  );
}
