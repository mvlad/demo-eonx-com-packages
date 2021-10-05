<?php

namespace App\EventListener;

use App\Entity\Comment;
use EonX\EasyDoctrine\Events\EntityCreatedEvent;
use EonX\EasyDoctrine\Events\EntityUpdatedEvent;
use EonX\EasyLogging\Bridge\Symfony\Traits\LoggerAwareTrait;

final class CommentUpdateListener
{
    use LoggerAwareTrait;

    public function __invoke(EntityUpdatedEvent $event): void
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