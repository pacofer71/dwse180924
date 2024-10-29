<?php

namespace Src\Providers;

use Src\Models\Pelicula;

class PeliculasProvider
{
    public static function getPeliculas(): array
    {
        $peliculas = [];
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/popular?language=en-US&page=1', [
            'headers' => [
                'Authorization' => 'Pon tu token',
                'accept' => 'application/json',
            ],
        ]);

    
        $datos=json_decode($response->getBody()->getContents());
        $arrayObjetosPeliculas=$datos->results;
        foreach($arrayObjetosPeliculas as $pelicula){
            $titulo=$pelicula->title;
            $sinopsis=$pelicula->overview;
            $puntuacion=$pelicula->vote_average;
            $poster="https://image.tmdb.org/t/p/w500".$pelicula->poster_path;

            $miPelicula=(new Pelicula)
            ->setTitulo($titulo)
            ->setSinopsis($sinopsis)
            ->setPuntuacion($puntuacion)
            ->setPoster($poster);
            
            $peliculas[]=$miPelicula;


        }
        return $peliculas;
        
    }
}
