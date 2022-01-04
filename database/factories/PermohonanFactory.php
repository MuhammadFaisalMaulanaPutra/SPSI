<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Permohonan;

class PermohonanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Permohonan::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no_sidang'     => $this->faker->randomNumber(7, true),
            'NIM_mhs'       => '1520'.$this->faker->randomNumber(8, true),
            'nama_mhs'      => $this->faker->name(),
            'kelas'         => 'si-c'.mt_rand(1,3),
            'hasil_sidang'  => 'Disetujui',
            'validasi'      => 0
        ];
    }
}
