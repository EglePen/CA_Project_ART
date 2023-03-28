<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaintingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paintings')->delete();

        DB::table('paintings')->insert([
            [
                'title' => 'Water Lilies and Japanese Bridge',
                'image' => 'Water_Lilies_and_Japanes_Bridge.JPG',
                'date_created' => '1899-01-09',
                'dimensions' => '0.5 x 89.7',
                'description' => 'Water Lilies and Japanese Bridge represents two of Monets greatest achievements: his gardens at Giverny and the series of paintings they inspired. In 1883 the artist moved to this country town, near Paris but just across the border of Normandy, and immediately began to redesign the property. In 1893, Monet purchased an adjacent tract, which included a small brook, and transformed the site into an Asian-inspired oasis of cool greens, exotic plants, and calm waters, enhanced by a Japanese footbridge. The serial approach embodied in this work—one of about a dozen paintings in which Monet returned to the same view under differing weather and light conditions—was one of his great formal innovations. He was committed to painting directly from nature as frequently as possible and whenever weather permitted, sometimes working on eight or more canvases in the same day. Monets project to capture ever-shifting atmospheric conditions came to be a hallmark of the Impressionist style.',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'title' => 'Good and Evil',
                'image' => 'Good_And_Evil.JPG',
                'date_created' => '1990-09-23',
                'dimensions' => '90 x 120',
                'description' => 'One of the best paintings with the presentation of mind and matter. It conveys the message through the painting is frames divided into defilements, cravings, and being released from a cycle of death and rebirth. At the bottom of the painting, inside iron frames, there are monks who misbehave and fishes are eating lotuses. They represent defilements and cravings. Above the iron frames, a fish represents a monk who is well-behaved and ready to get released and attain Dharma. Bubbles represent a desire for being released and aiming for Abhinya or higher knowledge.',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'title' => 'The Ghost Of A Flea',
                'image' => 'The_Ghost_Of_A_Flea.JPG',
                'date_created' => '1819-01-01',
                'dimensions' => '21.4 x 16.2',
                'description' => 'Blake created the Ghost of a Flea with his signature tempera technique, described in the lower right panel as fresco. The painting is noteworthy for its unusual use of gold leaf. Blake deployed "white gold" made from a gold and silver alloy for the stars, the fleas flesh and the edge of the curtain. Blake completed the painting between 1819 and 1820. The flea has an almost anthropomorphic quality to it, highlighted by it standing upright on its hind legs. The muscular body of the flea suggests some inspiration from Michelangelo.',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'title' => 'The Mellow Pad',
                'image' => 'The_Mellow_Pad.JPG',
                'date_created' => '1951-01-01',
                'dimensions' => '66.7 x 107',
                'description' => 'The starting point for this lively patterned abstraction was an earlier canvas by Stuart Davis entitled House and Street, 1931. Treating each subsequent version as a riff on a jazz theme, Davis moved further and further away from his original composition to establish independent, rhythmic color patterns that retained only a few direct visual cues to the original composition. Davis theorized that abstract compositions could communicate to the viewer something of the subject from which they were derived. This composition embodies the “mellow pad”—jazz lingo for the “cool” place to be. Jazz rhythms were a potent inspiration for Davis, and their presence added a distinctly American component to his abstractions.',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'title' => 'Fish Magic',
                'image' => 'Fish_Magic.JPG',
                'date_created' => '1925-12-09',
                'dimensions' => '77.2 x 98.4',
                'description' => 'In Fish Magic, Paul Klee creates a magical realm where the aquatic, the celestial, and the earthly intermingle. A delicate black surface covers an underlayer of colors, which the artist revealed by scratching and scrawling designs in the black paint. At the center of the painting, a square of muslin is glued onto the canvas. A long diagonal line reaching to the top of the clock tower is poised as if to whisk off this subtle curtain.',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'title' => 'Victoria City Aerial: Aerial Perspective',
                'image' => 'Victoria_City_Aerial_Perspective.JPG',
                'date_created' => '1988-08-12',
                'dimensions' => '99.5 x 254.5',
                'description' => 'The piece "Victoria City Aerial" was created for a competition which intended to propose a radical redevelopment of what was once West Berlin.  The painting intended to achieve a figure ground of  Zaha is vision of Berlin. The art piece was a part of the Ivorypress Collection. During this exhibit of her work she displayed several pieces which were intended to take a deconstructionist approach. This particular piece was apart of a series of paintings.',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],  
        ]);
    }
}
