<?php

namespace App\Command;

use App\Repository\CommentRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class UpdateEntityCommand extends Command
{
    protected static $defaultName = 'app:update-entity';

    private CommentRepository $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $comment = $this->commentRepository->find(1);
        if ($comment === null) {
            throw new \RuntimeException('Failed to find a comment.');
        }

//        $comment->setContent('Content ' . \uniqid('', true));
        $comment->setAuthor('Author ' . \uniqid('', true));

        $comment = $this->commentRepository->save($comment);

        $output->writeln(\sprintf('Updated comment: #%d, %s', $comment->getId(), $comment->getContent()));

        return Command::SUCCESS;
    }
}