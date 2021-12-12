<?php

namespace Database\Factories;

use App\Models\SubDesign;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubDesignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubDesign::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
        return [
            'title' => '  Design Insights ',
            '  8 Alle technischen Angaben sind vorläufig und wurden
            intern nach Maßgabe der jeweils anwendbaren
            Zertifizierungsmethode ermittelt. Es liegen bislang
            weder bestätigte Werte vom TÜV noch eine
            EG-Typgenehmigung noch eine Konformitätsbescheinigung
            mit amtlichen Werten vor. Abweichungen zwischen den
            Angaben und den amtlichen Werten sind möglich.',
            ];

    } 
}
