<?php
namespace Test\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

/**
 *
 * @author SYSTEM
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

    /**
     * (non-PHPdoc)
     *
     * @see \Zend\Mvc\Controller\AbstractActionController::indexAction()
     */
    public function indexAction()
    {

        var_dump($this->loggerService); exit;

        $view = new ViewModel(array());
        return $view;
    }

}