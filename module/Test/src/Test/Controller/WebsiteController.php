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
     *
     * @Inject("name")
     * @var \Test\Service\MyLoggerService
     *
     */
    private $loggerService;


    /**
     *
     */
    function __construct()
    {
        //throw new \Exception();
    }

    /**
     * @return ViewModel
     */
    public function indexAction()
    {

        //throw new \Exception();
        //$logger = new \Test\Service\MyLoggerService();  print_r($logger); exit;


        echo "loggerService = "; var_dump($this->loggerService); exit;

        $view = new ViewModel(array());
        return $view;
    }

}