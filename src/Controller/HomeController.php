<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Map\Bridge\Leaflet\LeafletOptions;
use Symfony\UX\Map\Bridge\Leaflet\Option\TileLayer;
use Symfony\UX\Map\InfoWindow;
use Symfony\UX\Map\Map;
use Symfony\UX\Map\Marker;
use Symfony\UX\Map\Point;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $map = (new Map('default'))
            ->center(new Point(43.65269789776155, 3.525085477484309))
            ->zoom(15)

            ->addMarker(new Marker(
                position: new Point(43.65269789776155, 3.525085477484309),
                title: 'Mytho-logique',
                infoWindow: new InfoWindow(
                    content: '<h1>Mytho-logique</h1><p>Nous vous attendons !</p>',
                )
            ))

            ->options((new LeafletOptions())
                ->tileLayer(new TileLayer(
                    url: 'https://tile.openstreetmap.org/{z}/{x}/{y}.png',
                    attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
                    options: ['maxZoom' => 19]
                ))
            );

        return $this->render('home/index.html.twig', [
            'map' => $map,
            'controller_name' => 'HomeController',
        ]);
    }
}
