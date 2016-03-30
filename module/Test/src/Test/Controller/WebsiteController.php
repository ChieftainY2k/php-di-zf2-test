<?php
namespace Test\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


/**
 *
 */
class WebsiteController extends AbstractActionController
{

    /**
     * This dependency will be injected by PHP-DI
     * @Inject
     * @var \Test\Service\MyLoggerService
     */
    private $loggerService;

    public function __construct()
    {
         //echo __METHOD__."<br>";
    }


    /**
     * @return ViewModel
     */
    public function indexAction()
    {

        //$logger = new \Test\Service\MyLoggerService();  print_r($logger); exit;
        //var_dump($this->loggerService); //exit;
        $this->loggerService->log();

        $view = new ViewModel(array());
        return $view;
    }

}