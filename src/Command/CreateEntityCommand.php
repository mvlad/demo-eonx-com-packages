<?php

namespace App\Command;

use App\Entity\Comment;
use App\Repository\CommentRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class CreateEntityCommand extends Command
{
    protected static $defaultName = 'app:create-entity';

    private CommentRepository $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $comment = new Comment();
        $comment->setContent('Test ' . \uniqid('', true));

        $comment = $this->commentRepository->save($comment);

        $output->writeln(\sprintf('New comment info: #%d, %s', $comment->getId(), $comment->getContent()));

        return Command::SUCCESS;
    }
}