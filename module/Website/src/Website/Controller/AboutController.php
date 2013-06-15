<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Website\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AboutController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(
                array(
                    'programer'=> 'Beatriz Perez',
                    'services' => array('hosting','dominios','ssl','servidores dedicados','reseller','cpanel licencia','windows server 2008 licencse','sql server 2008'),
                    'hosting'=>array(
                        'shared'=>array(
                            'space'=>'10000MB',
                            'bandwidth'=>'100GB',
                            'os'=>'Linux',
                            'panel'=>'cPanel',
                        ),
                        'reseller'=>array(
                            'space'=>'20000MB',
                            'bandwidth'=>'200GB',
                            'os'=>'Linux',
                            'panel'=>'cPanel/WHM',
                        ),
                        'dedicado'=>array(
                            'space'=>'20000MB',
                            'bandwidth'=>'200GB',
                            'os'=>'Linux',
                            'panel'=>'cPanel/WHM',
                        ),                      
                ),
         )      
        );
    }
}
