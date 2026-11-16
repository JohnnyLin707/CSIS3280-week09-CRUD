<?php

namespace CSIS3280;

class ProductController extends Controller
{
    private ProductRepository $productRepository;

    public function __construct()
    {
        parent::__construct();
        $this->productRepository = new ProductRepository();
    }

    public function create(): void
    {
        
    }

    public function processCreate(string $description, float $price): void
    {
        
    }

    public function list(): void
    {
        $products = $this->productRepository->findAll();
        $id = $this->getIdFromSession();

        $template = 'product/list.html.twig';
        $args = [
            'products' => $products,
            'id' => $id
        ];
        print $this->twig->render($template, $args);
    }

    private function getIdFromSession(): ?int
    {
        $id = NULL;
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];

            // Remove it now that it's been retrieved
            unset($_SESSION['id']);
        }

        return $id;
    }

    public function edit(int $id): void
    {
        
    }

    public function processEdit(int $id, string $description,
                                float $price): void
    {
        
    }    

    public function delete(int $id): void
    {
        
    }  

    public function deleteAll(): void
    {
        
    }

    public function show(int $id): void
    {
        
    } 

    

}