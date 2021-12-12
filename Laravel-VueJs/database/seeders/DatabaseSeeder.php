<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //return \App\Models\User::factory(20)->create();
        $this->call(Slide::class);
    }
}
// Class slide
class Slide extends Seeder
{
    public function run()
    {
        DB::table('slide')->insert([
            [
                'active' => 'active',
                'title' => "The EQE.",
                'btn_text' => "Learn more about the EQE",
                'image' => "images/06-mercedes-benz.webp",
                'color' => "text-light",
                'des_1' => "EQE 350 vorläufige Angaben WLTP: Stromverbrauch kombiniert: 19,3–15,7 kWh/100 km; CO₂-Emissionen kombiniert: 0 g/km.",
                'des_2' => "Angaben zum Stromverbrauch und zur Reichweite sind vorläufig und wurden intern nach Maßgabe der Zertifizierungsmethode, WLTP-Prüfverfahren“ ermittelt. Es liegen bislang weder bestätigte Werte vom TÜV noch eine EG-Typgenehmigung noch eine Konformitätsbescheinigung mit amtlichen Werten vor. Abweichungen zwischen den Angaben und den amtlichen Werten sind möglich.",
            ],
            [
                'active' => '',
                'title' => "The Concept EQG.",
                'btn_text' => "Learn more about the Concept",
                'image' => "images/03-mercedes-benz.webp",
                'color' => "text-light",
                'des_1' => "",
                'des_2' => "",
            ],
            [
                'active' => '',
                'title' => "The Concept Mercedes-Maybach EQS.",
                'btn_text' => "Learn more about the Concept Mercedes-Maybach EQS",
                'image' => "images/05-maybach.webp",
                'color' => "text-dark",
                'des_1' => "",
                'des_2' => "",
            ],
            [
                'active' => '',
                'title' => "The new EQB.",
                'btn_text' => "Learn more about the EQB.",
                'image' => "images/04-mercedes-eq-eqb.webp",
                'color' => "text-dark",
                'des_1' => "",
                'des_2' => "",
            ],
            [
                'active' => '',
                'title' => "IAA MOBILITY 2021.",
                'btn_text' => "Learn more",
                'image' => "images/01-mercedes-benz.webp",
                'color' => "text-light",
                'des_1' => "",
                'des_2' => "",
            ],
            [
                'active' => '',
                'title' => "The new EQS. This is for you, world.",
                'btn_text' => "Learn more about the EQS.",
                'image' => "images/02-mercedes-benz-eqs.webp",
                'color' => "text-light",
                'des_1' => "",
                'des_2' => "",
            ],
        ]);
    }
}