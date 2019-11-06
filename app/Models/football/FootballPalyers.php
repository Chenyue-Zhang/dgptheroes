<?php
namespace App\Models\football;

class FootballPalyers
{

	// mock data: an array of records (also arrays)
	protected $data = [
		'1'	 => [
			'id'			 => 1,
			'name'			 => 'Cristiano Ronaldo',
                        'age'                    => '34',
                        'country'                => 'Portugal',
                        'club'                   => 'Juventus',
                        'place'                  => 'striker',
                        'jersey number'          => '7',
                        'image'			 => 'C_Ronaldo.png',
                        			
		],
		'2'	 => [
			'id'			 => 2,
			'name'			 => 'Messi',
                        'age'                    => '32',
                        'country'                => 'Argentina',
                        'club'                   => 'Barcelona',
                        'place'                  => 'striker',
                        'jersey number'          => '10',
                        'image'			 => 'Messi.png',
		],
		'3'	 => [
			'id'			 => 3,
			'name'			 => 'Wu Lei',
                        'age'                    => '28',
                        'country'                => 'China',
                        'club'                   => 'Royal Spaniard',
                        'place'                  => 'striker',
                        'jersey number'          => '7',
                        'image'			 => 'Wu_Lei.png',
		],
		'4'	 => [
			'id'			 => 4,
			'name'			 => 'Marcelo',
                        'age'                    => '31',
                        'country'                => 'Brazil',
                        'club'                   => 'Real Madrid',
                        'place'                  => 'defender',
                        'jersey number'          => '12',
                        'image'			 => 'Marcelo.png',
		],
		'5'	 => [
			'id'			 => 5,
			'name'			 => 'Heung-Min Son',
                        'age'                    => '27',
                        'country'                => 'Korea',
                        'club'                   => 'Tottenham hotspur',
                        'place'                  => 'striker',
                        'jersey number'          => '7',
                        'image'			 => 'Son.png',
		],
                '6'	 => [
			'id'			 => 6,
			'name'			 => 'Neymar',
                        'age'                    => '27',
                        'country'                => 'Brazil',
                        'club'                   => 'Paris saint-germain',
                        'place'                  => 'striker',
                        'jersey number'          => '10',
                        'image'			 => 'Neymar.png',
		],
	];

	public function findAll()
	{
		return $this->data;
	}

	public function find($id = null)
	{
            if (!empty($id) && isset($this->data[$id])) 
            {
                 return $this->data[$id];
            }
            return null;
	}
}