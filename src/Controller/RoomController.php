<?php

namespace App\Controller;

use App\Repository\RoomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RoomController extends AbstractController
{
    #[Route('/', name: 'room')]
    public function index(RoomRepository $roomRepository): Response
    {
        $room = $roomRepository->findAll();
        return $this->render('room/index.html.twig', [
            'rooms' => $room,
        ]);
    }
}
