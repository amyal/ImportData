<?php

namespace Srm\UserBundle\Component\Authentication\Handler;
 
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
use Srm\UserBundle\Repository\UserRepository;
 
class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
 
    protected $router;
    protected $security;
    protected $userrepository;
    public function __construct(Router $router, SecurityContext $security,UserRepository $userrepository)
    {
        $this->router = $router;
        $this->security = $security;
        $this->userrepository = $userrepository;
    }
 
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {    
        if ($this->security->isGranted('IS_AUTHENTICATED_REMEMBERED'))
        { 
             $user=$token->getUser(); //display current user
             $OrgUser = $this->userrepository->OrganisationByUser($user); // organisation of current user
      // access to an organisation of current user 
$response = new RedirectResponse($this->router->generate('srm_website_organisation_index',array('identificationCode' => $OrgUser)));
}
        elseif ($this->security->isGranted('ROLE_U'))
        {
            // redirect the user to where they were before the login process begun.
            $referer_url = $request->headers->get('referer');
 
            $response = new RedirectResponse($referer_url);
        }  
 
        return $response;
    }
 
}
?>
