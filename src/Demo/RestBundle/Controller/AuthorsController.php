<?php

namespace Demo\RestBundle\Controller;

use Demo\RestBundle\Entity\Author;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class AuthorsController extends Controller
{
    /**
     * @return array
     * @View()
     */
    public function getAuthorsAction()
    {
        $authors = $this->getDoctrine()->getRepository('DemoRestBundle:Author')
            ->findAll();
            
        return array('authors' => $authors);
    }
    
    /**
     * @param Author $Author
     * @return array
     * @View()
     * @ParamConverter("author", class="DemoRestBundle:Author")
     */
    public function getAuthorAction(Author $author)
    {
        return array('author' => $author);
    }
    
}
