<?php

namespace PM\ApiBundle\Controller;

use AppBundle\Entity\Albums;
use FOS\RestBundle\Controller\Annotations\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AlbumsController extends Controller
{

    /**
     * @Route("/api/get-album-list")
     * @Method({"GET"})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function albumAction(Request $request)
    {
        $albums =  $this->getDoctrine()->getRepository(Albums::class)->getAlbums();

        if(!empty($albums)) {
            foreach ($albums as &$album) {
                $album['photos'] = explode(',', $album['photos']);
            }
        }

        return $albums;
    }

    /**
     * @Route("/api/get-one-album/{albumId}")
     * @Method({"GET"})
     */
    public function getOneAlbum(Request $request)
    {
        $albumId = $request->get('albumId');

        $album = $this->getDoctrine()->getRepository(Albums::class)->find($albumId);
        if(empty($albumId)) {
            throw new NotFoundHttpException("Sorry, the album with id {$albumId} not founded");
        }

        return $album;
    }
}
