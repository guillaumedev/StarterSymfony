<?php

namespace Gdev\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Model\User as BaseUser;
use Fp\OpenIdBundle\Model\UserIdentityInterface;



/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gdev\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

  public function __construct()
  {
        parent::__construct();
        // your own logic (nothing for this example)
  }
}
