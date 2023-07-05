<?php 
namespace App\Repository;

use App\Entity\Animal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry; 

class AnimalRepository extends ServiceEntityRepository{

	public function __construct(ManagerRegistry $registry){
		parent::__construct($registry, Animal::class);
	}

	public function getAnimalsOrderId($order){
		 // Query builder
        $qb = $this->createQueryBuilder('a')
                        //->andWhere("a.raza= :raza")
                        //->setparameter('raza', 'africana')
                        ->orderBy('a.id', 'DESC')
                        ->getQuery();
        $resultset = $qb->execute();

        $coleccion = array(
        	'name' => 'Colección de animales',
        	'animales' => $resultset
        );



        return $coleccion;
	}
}




 