<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\Comment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

final class CommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comment::class);
    }

    /**
     * @throws \Throwable
     */
    public function save(Comment $comment): Comment
    {
        $this->getEntityManager()->wrapInTransaction(function() use ($comment) {
            $this->getEntityManager()->persist($comment);
            $this->getEntityManager()->flush();
        });


        return $comment;
    }
}