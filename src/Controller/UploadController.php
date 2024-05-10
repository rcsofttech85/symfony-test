<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapUploadedFile;
use Symfony\Component\Routing\Attribute\Route;

class UploadController extends AbstractController
{

    #[Route('/home', name: 'home', methods: ['GET'])]
    public function home(): Response
    {
        return $this->render('home.html.twig');

    }
    //    #[Route(path:'/user/picture',name:'upload_route', methods: ['POST'])]
//    public function changeUserPicture(
//        #[MapUploadedFile(
//            )] ?UploadedFile $picture
//    ): Response
//    {
//       dd($picture); // error
//    }

    #[Route(path: '/user/picture', name: 'upload_route', methods: ['POST'])]
    public function changeUserPicture(
        #[MapUploadedFile(
            name: 'file'
        )] ?UploadedFile $picture
    ): Response
    {
        dd($picture); // it works
    }

}