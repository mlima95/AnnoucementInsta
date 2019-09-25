<?php


namespace App\Controller;


use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Tests\Fixtures\ToString;

class ProductController extends AbstractController
{
    /**
     * @Route("/products/create", name="create_product")
     */
    public function create(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName('Jacket');
        $product->setPrice(250);
        $product->setDescription('Levis Jacket');

        $entityManager->persist($product);

        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());

    }
    /**
     * @Route("/products/{id}/edit", name="edit_product")
     */
    public function edit(Product $product):Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $product->setPrice(300);

        $entityManager->flush();

        return new Response('Edit new product with id ' .$product->getId());
    }

    /**
     * @Route("/products/{id}/delete", name="delete_product")
     */

    public function delete(Product $product): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

// Tell doctrine that entity will be removed
        $entityManager->remove($product);

        $entityManager->flush();

        return new Response('Delete product with id ' .$product->getId());
    }

    /**
     * @Route("/products/getbyid", name="getbyid")
     */
    public function getByName() : Response
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);



// look for a single Product by name
        $product = $repository->findOneBy([
            'name' => 'T-shirt'
        ]);
        return new Response("The id product is".$product->getName());

    }

    public function detail(Product $product){
        $repository = $this->getDoctrine()->getRepository(Product::class);

        $product = $repository->findOneBy([
            'name' => 'T-shirt'
        ]);
    }

    public function getAll(Product $product)
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);

        $products = $repository->findBy(
            ['name' => 'T-shirt'],
            ['price' => 'ASC']
        );

// look for *all* Product objects
        $products = $repository->findAll();
    }

    /**
     * @Route("/products")
     */
    public function list()
    {
        $products = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findProductsGreaterThan(200);


        // ...
        return $this->render('product.html.twig', [
            'controller_name' => 'ProductsController',
            'ListProducts' => $products,
        ]);
    }
}