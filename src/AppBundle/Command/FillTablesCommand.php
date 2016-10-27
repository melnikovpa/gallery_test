<?php

namespace AppBundle\Command;

use AppBundle\DataFixtures\Faker\Provider\ImageFileProvider;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class FillTablesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('fill:tables')
            ->setDescription('Filling test data tables')
            ->addArgument(
                'folder',
                InputArgument::OPTIONAL,
                'specify additional folder in /src/AppBundle/DataFixtures/ORM to load fixtures from'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        passthru('php app/console doctrine:database:drop --force');
        passthru('php app/console doctrine:database:create');
        passthru('php app/console doctrine:schema:update --force');

        define('ROOT', $this->getContainer()->get('kernel')->getRootDir());

        $orm = $this->getContainer()->get('doctrine');
        $em = $orm->getManager();
        $dir = $this->getContainer()->get('kernel')->getRootDir() . '/../src/AppBundle/DataFixtures/ORM';

        $fixturesToLoad = [
            $dir . '/base/base.yml',
        ];

        $additional = $input->getArgument('folder');
        if ($additional) {
            $fixturesToLoad[] = $dir.'/'.$additional.'/'.$additional.'.yml';
        }

        \Nelmio\Alice\Fixtures::load($fixturesToLoad, $em, ['providers'=>[ImageFileProvider::class], 'locale'=>'ru_RU']);

        $em->flush();
        $output->writeln('All tables were filled');
        
    }

}
