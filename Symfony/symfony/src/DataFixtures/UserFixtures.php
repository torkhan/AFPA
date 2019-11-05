<?php

	namespace App\DataFixtures;

	use App\Entity\User;
	use Doctrine\Bundle\FixturesBundle\Fixture;
	use Doctrine\Common\Persistence\ObjectManager;
	use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

	class UserFixtures extends Fixture
	{

		/**
		 * @var UserPasswordEncoderInterface
		 */
		private $encoder;
		public const ADMIN_USER_REFERENCE = 'admin-user';

		/**
		 * UserFixtures constructor
		 *
		 * @param UserPasswordEncoderInterface $encoder
		 */
		public function __construct(UserPasswordEncoderInterface $encoder) {
			$this->encoder = $encoder;
		}

		public function load(ObjectManager $em)
		{
			$user = new User();
			$user->setFirstname("Marc")
			     ->setUsername("eremus")
				 ->setRoles( array("ROLE_ADMIN" ))
			     ->setEmail("marc@eremus.fr")
			     ->setPhone("0909090909")
			     ->setPassword($this->encoder->encodePassword($user, 'marc'))
			     ->setBirthday(new \ DateTime("2019-11-01 00:00:00"));

			$em->persist($user);
			$em->flush();
		}
	}
