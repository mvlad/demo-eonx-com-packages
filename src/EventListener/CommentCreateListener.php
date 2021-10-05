<?php

namespace App\EventListener;

use App\Entity\Comment;
use EonX\EasyDoctrine\Events\EntityCreatedEvent;
use EonX\EasyLogging\Bridge\Symfony\Traits\LoggerAwareTrait;

final class CommentCreateListener
{
    use LoggerAwareTrait;

    public function __invoke(EntityCreatedEvent $event): void
    {
        $entity = $event->getEntity();

        if (\is_a($entity, Comment::class)) {
            $this->logger->info('Entity event', [
                'class' => \get_class($entity),
                'change_set' => $event->getChangeSet(),
            ]);
        }
    }
}