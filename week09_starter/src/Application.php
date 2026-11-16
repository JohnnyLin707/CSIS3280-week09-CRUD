<?php

namespace CSIS3280;

class Application
{
    private DefaultController $defaultController;
    private ProductController $productController;

    public function __construct()
    {
        $this->defaultController = new DefaultController();
        $this->productController = new ProductController();
    }

    public function run(): void
    {
        $action = filter_input(INPUT_GET, 'action');
        $isPostSubmission = ($_SERVER['REQUEST_METHOD'] === 'POST');

        switch ($action)
        {
            case 'create':
                
                break;

            case 'processCreate':
                
                break;

            case 'edit':
                
                break;

            case 'processEdit':
                
                break;

            case 'products':
                $this->productController->list();
                break;

            case 'delete':
                break;                  
                
            case 'deleteAll':
                break;

            case 'show':
                
                break;

            default:
                $this->defaultController->homepage();
        }
    }

}