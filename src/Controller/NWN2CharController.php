<?php

namespace App\Controller;

use App\Entity\NWN2Char;
use App\Form\NWN2CharType;
use App\Repository\NWN2CharRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Include paginator interface
use Knp\Component\Pager\PaginatorInterface;

#[Route('nwn2chars')]
class NWN2CharController extends AbstractController
{
    #[Route('/', name: 'nwn2char_index', methods: ['GET'])]
    // Include the paginator through dependency injection, the autowire needs to be enabled in the project
    public function index(Request $request, PaginatorInterface $paginator)
    {
        // Retrieve the entity manager of Doctrine
        $em = $this->getDoctrine()->getManager();
        
        // Get some repository of data, in our case we have an Appointments entity
        $nWN2CharRepository = $em->getRepository(NWN2Char::class);
                
        // Find all the data on the nwn2_chars table, filter your query as you need
        $allNWN2CharsQuery = $nWN2CharRepository->createQueryBuilder('ch')
            ->getQuery();
        
        // Paginate the results of the query
        $nwn2chars = $paginator->paginate(
            // Doctrine Query, not results
            $allNWN2CharsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            14
        );
        
        // Render the twig view
        return $this->render('nwn2char/list.html.twig', [
            'nwn2chars' => $nwn2chars
        ]);
    }
    #[Route('/new', name: 'nwn2char_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $nWN2Char = new NWN2Char();
        $form = $this->createForm(NWN2CharType::class, $nWN2Char);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($nWN2Char);
            $entityManager->flush();

            return $this->redirectToRoute('nwn2chars_index');
        }

        return $this->render('nwn2char/new.html.twig', [
            'nwn2chars' => $nWN2Char,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'nwn2char_show', methods: ['GET'])]
    public function show(NWN2Char $nWN2Char): Response
    {
        return $this->render('nwn2char/show.html.twig', [
            'nwn2chars' => $nWN2Char,
        ]);
    }

    #[Route('/{id}/edit', name: 'nwn2char_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, NWN2Char $nWN2Char): Response
    {
        $form = $this->createForm(NWN2CharType::class, $nWN2Char);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('nwn2char_index');
        }

        return $this->render('nwn2char/edit.html.twig', [
            'nwn2chars' => $nWN2Char,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'nwn2chars_delete', methods: ['DELETE'])]
    public function delete(Request $request, NWN2Char $nWN2Char): Response
    {
        if ($this->isCsrfTokenValid('delete'.$nWN2Char->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($nWN2Char);
            $entityManager->flush();
        }

        return $this->redirectToRoute('nwn2chars_index');
    }
}
