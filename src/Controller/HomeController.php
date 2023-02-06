<?php 
namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController 
{
    #[Route('/', name: 'accueil')]
    public function home(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->getLastThirdArticles();
        return $this->render('home/accueil.html.twig', ['articles' => $articles]);
    }
}
?>