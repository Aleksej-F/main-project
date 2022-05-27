<?php
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('source')->insert($this->getData());
    }
    private function getData(): array
	{
		$data = [];
		$faker = Factory::create();
		for($i=0; $i<10; $i++) {
			$data[] = [
				'title' => $faker->jobTitle(),
				'description' => $faker->text(100)
			];
		}

		return $data;
	}
}
