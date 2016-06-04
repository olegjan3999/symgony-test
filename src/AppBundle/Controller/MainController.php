<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use AppBundle\Entity\ProductsCategories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class MainController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        //Получаем все Продукты из базы данных
        $products = $this->get('doctrine')->getRepository('AppBundle:Product', 'default')->findBy(array(), array(),3);
        //Получаем все Категории из базы данных
        $categories = $this->get('doctrine')->getRepository('AppBundle:Category', 'default')->findAll();

        //Отрисовуем главную страницу с параметрами из базы данных
        return $this->render(
            'main/main.html.twig',
            array('products' => $products, 'categories' => $categories)
        );
    }

    /**
     * @Route("/category/{categoryName}")
     */
    public function getProductsByCategory($categoryName)
    {
        //Получаем все продукты из базы данных
        $categories = $this->get('doctrine')->getRepository('AppBundle:Category', 'default')->findAll();

        //Получаем категорию из базы данных по Id
        $category = $this->get('doctrine')->getRepository('AppBundle:Category', 'default')->findOneBy(['name' => $categoryName]);

        //Отрисовуем страницу категории
        return $this->render(
            'main/category.html.twig',
            array('categories' => $categories, 'category' => $category)
        );
    }

    /**
     * @Route("/product/{productId}")
     */
    public function getProduct($productId)
    {
        //Получаем продукт из базы данных по Id
        $product = $this->get('doctrine')->getRepository('AppBundle:Product', 'default')->findOneBy(['id' => $productId]);

        //Отрисовуем страницу продукта
        return $this->render(
            'main/product.html.twig',
            array('product' => $product)
        );
    }
}