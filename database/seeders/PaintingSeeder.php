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
                'title' => 'Adele Bloch-Bauer I',
                'image' => 'Adele_Bloch_Bauer_I.jpg',
                'year_created' => 1899,
                'description' => 'The portrait was commissioned by the sitters husband, Ferdinand Bloch-Bauer a Jewish banker and sugar producer. The painting was stolen by the Nazis in 1941 and displayed at the Österreichische Galerie Belvedere in Vienna. The portrait is the final and most fully representative work of Klimts golden phase.',
                'artist_id' => 1,
                'location_id' => 7,
                'movement_id' => 4,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'title' => 'Fish Magic',
                'image' => 'fish_magic.jpg',
                'year_created' => 1925,
                'description' => 'In Fish Magic, Paul Klee creates a magical realm where the aquatic, the celestial, and the earthly intermingle. A delicate black surface covers an underlayer of colors, which the artist revealed by scratching and scrawling designs in the black paint. At the center of the painting, a square of muslin is glued onto the canvas. A long diagonal line reaching to the top of the clock tower is poised as if to whisk off this subtle curtain.',
                'artist_id' => 2,
                'location_id' => 6,
                'movement_id' => 1,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'title' => 'Karma Juggler',
                'image' => 'karma_juggler.jpg',
                'year_created' => 2007,
                'description' => 'Karma Juggler personifies the many influences and acquired knowledge that inform each persons perception.',
                'artist_id' => 3,
                'location_id' => 8,
                'movement_id' => 7,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'title' => 'Portrait of Madame Matisse. The Green Line',
                'image' => 'portrait-of-madam-matisse.jpg',
                'year_created' => 1905,
                'description' => 'Henri Matisse is a true world-class artist, and his Portrait of Madame Matisse. The Green Line, depicting his wife, Amélie Matisse, is a masterpiece of twentieth-century portraiture and one of SMKs ten main highlights',
                'artist_id' => 4,
                'location_id' => 9,
                'movement_id' => 8,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'title' => 'The Mellow Pad',
                'image' => 'the_mellow_pad.jpg',
                'year_created' => 1951,
                'description' => 'The starting point for this lively patterned abstraction was an earlier canvas by Stuart Davis entitled House and Street, 1931. Treating each subsequent version as a riff on a jazz theme, Davis moved further and further away from his original composition to establish independent, rhythmic color patterns that retained only a few direct visual cues to the original composition. Davis theorized that abstract compositions could communicate to the viewer something of the subject from which they were derived. This composition embodies the “mellow pad”—jazz lingo for the “cool” place to be. Jazz rhythms were a potent inspiration for Davis, and their presence added a distinctly American component to his abstractions.',
                'artist_id' => 5,
                'location_id' => 4,
                'movement_id' => 3,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'title' => 'Victoria City Aerial: Aerial Perspective',
                'image' => 'Victoria_City_Aerial_Perspective.JPG',
                'year_created' => 1988,
                'description' => 'The piece "Victoria City Aerial" was created for a competition which intended to propose a radical redevelopment of what was once West Berlin.  The painting intended to achieve a figure ground of  Zaha is vision of Berlin. The art piece was a part of the Ivorypress Collection. During this exhibit of her work she displayed several pieces which were intended to take a deconstructionist approach. This particular piece was apart of a series of paintings.',
                'artist_id' => 6,
                'location_id' => 5,
                'movement_id' => 2,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], 
            [
                'title' => 'Water Lilies and Japanese Bridge',
                'image' => 'Water_Lilies_And_Japanese_Bridge.JPG',
                'year_created' => 1988,
                'description' => 'Water Lilies and Japanese Bridge represents two of Monets greatest achievements: his gardens at Giverny and the series of paintings they inspired. In 1883 the artist moved to this country town, near Paris but just across the border of Normandy, and immediately began to redesign the property. In 1893, Monet purchased an adjacent tract, which included a small brook, and transformed the site into an Asian-inspired oasis of cool greens, exotic plants, and calm waters, enhanced by a Japanese footbridge. The serial approach embodied in this work—one of about a dozen paintings in which Monet returned to the same view under differing weather and light conditions—was one of his great formal innovations. He was committed to painting directly from nature as frequently as possible and whenever weather permitted, sometimes working on eight or more canvases in the same day. Monets project to capture ever-shifting atmospheric conditions came to be a hallmark of the Impressionist style.',
                'artist_id' => 7,
                'location_id' => 3,
                'movement_id' => 6,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], 
            [
                'title' => 'Still Life with Three Puppies',
                'image' => 'still-life-with-three-puppies.jpg',
                'year_created' => 1888,
                'description' => 'This painting features three distinct zones: a still life of fruit in the foreground, a row of three blue goblets and apples diagonally bisecting the canvas, and three puppies drinking from a large pan. The incongruous scale and placement of these objects on a dramatically upturned tabletop results in a disorienting composition.',
                'artist_id' => 8,
                'location_id' => 2,
                'movement_id' => 9,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], 
            [
                'title' => 'The Ghost Of A Flea',
                'image' => 'The_Ghost_Of_A_Flea.JPG',
                'year_created' => 1819,
                'description' => 'Blake created the Ghost of a Flea with his signature tempera technique, described in the lower right panel as fresco. The painting is noteworthy for its unusual use of gold leaf. Blake deployed "white gold" made from a gold and silver alloy for the stars, the fleas flesh and the edge of the curtain. Blake completed the painting between 1819 and 1820. The flea has an almost anthropomorphic quality to it, highlighted by it standing upright on its hind legs. The muscular body of the flea suggests some inspiration from Michelangelo.',
                'artist_id' => 9,
                'location_id' => 1,
                'movement_id' => 5,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
        ]);
    }
}
