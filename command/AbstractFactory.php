<?php 

namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Creational\AbstractFactory\UnixWriterFactory;

class AbstractFactory extends Command
{
	protected static $defaultName = 'dp-creation:abstraction-factory';

	public function configure(): void
	{
		$this->setDescription('Creational: Abstract Factory');
	}

	public function execute(InputInterface $input, OutputInterface $output): int
	{
		$output->writeLn([
			'- - - - - - - - - -',
			'| Abstract Factory |',
			'- - - - - - - - - -',
		]);

		$what = $this->ran();
		

		$output->writeLn($what);


		return Command::SUCCESS;
	}

	public function ran()
	{
		$writer = new UnixWriterFactory();
		$csvWriter = $writer->createCsvWriter();

		return $csvWriter->write([
			'line1',
			'line2',
			'line4'
		]);
	}
}

