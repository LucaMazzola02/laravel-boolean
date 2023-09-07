<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        $cocktails = [
    [
        'cocktailName' => 'Old Fashioned',
        'ingredients' => 'Simple syrup, Water, Bitters, Ice, Bourbon',
        'garnish' => 'An orange slice and a maraschino cherry',
        'image' => 'https://assets.epicurious.com/photos/5e41a6d175661800087cc87c/1:1/w_2940,h_2940,c_limit/OldFashioned_HERO_020520_619.jpg',
    ],
    [
        'cocktailName' => 'Negroni',
        'ingredients' => '¾ fluid ounce campari, ¾ fluid ounce gin, ¾ fluid ounce sweet vermouth, 2 fluid ounces carbonated water, 1 wedge lemon, for garnish',
        'garnish' => 'Lemon wedge',
        'image' => 'https://zero-media.s3.amazonaws.com/uploads/2018/11/negroni-e1661425606665.jpg',
    ],
    [
        'cocktailName' => 'Daiquiri',
        'ingredients' => '1 cup ice cubes, 1 ½ fluid ounces light rum, 1 fluid ounce lime juice, 1 fluid ounce lime juice, 2 tablespoons white sugar, or as needed',
        'garnish' => 'Passion Fruit',
        'image' => 'https://www.liquor.com/thmb/ffYicPLJk00SWKg2shV67TPHV74=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Daiquiri_3000x3000_primary-206eb2330cb04852ab7d780dcf3d55ef.jpg'
    ],
    [
        'cocktailName' => 'Dry Martini',
        'ingredients' => '2 ½ fluid ounces gin, ½ fluid ounce dry vermouth, 1 pitted green olive, 1 cup ice',
        'garnish' => 'Green Olive',
        'image' => 'https://www.ricettealvolo.it/wp-content/uploads/2022/12/sh-dry-martini-500x500.jpg',
    ],
    [
        'cocktailName' => 'Margarita',
        'ingredients' => 'Tequila, Triple Sec, Lime, Salt',
        'garnish' => 'Lime',
        'image' => 'https://www.giallozafferano.it/images/6-645/Margarita_650x433_wm.jpg'
    ],
    [
        'cocktailName' => 'Espresso Martini',
        'ingredients' => '1 ½ fluid ounces vodka, 1 ½ fluid ounces coffee-flavored liqueur, 1 fluid ounce white creme de cacao, 1 fluid ounce brewed espresso, 1 cup ice',
        'garnish' => '3 Maraschino cherries',
        'image' => 'https://dosmaderas.com/wp-content/uploads/2021/10/Dos-Maderas-rum-Cocktail-Espresso-Martini-HERO-6.jpg',
    ],
    [
        'cocktailName' => 'Whiskey Sour',
        'ingredients' => '5 fluid ounces whiskey, 2 fluid ounces fresh lemon juice, 1 fluid ounce simple syrup, 1 cup ice cubes, or as needed',
        'garnish' => 'Orange slice',
        'image' => 'https://assets.bonappetit.com/photos/57acc14e53e63daf11a4d9b6/1:1/w_2560%2Cc_limit/whiskey-sour.jpg',
    ],
    [
        'cocktailName' => 'Manhattan',
        'ingredients' => '2 fluid ounces rye whiskey, ½ fluid ounce sweet vermouth, 1 dash Angostura bitters, 1 cup ice cubes, 1 maraschino cherry',
        'garnish' => 'Mint',
        'image' => 'https://www.liquor.com/thmb/ePeDi1cxFU8mvoIX-xCEiI4lUOM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__liquor__2018__05__10144903__Manhattan-720x720-recipe-9497922907c14d91898f557cb51f2ea3.jpg',
    ],
    [
        'cocktailName' => 'Aperol Spritz',
        'ingredients' => 'Ice, Prosecco, Club soda, Aperol, Orange',
        'garnish' => '',
        'image' => 'https://media.istockphoto.com/id/1386711879/photo/alcoholic-spritz.jpg?s=612x612&w=0&k=20&c=piChP4vzFZ809tmS3CI7riygeRdq0gFllFsnAq-nxRk=',       
    ],
    [
        'cocktailName' => 'Mojito',
        'ingredients' => 'Rum, Mint, Lime, Sugar, Club Soda',
        'garnish' => '',
        'image' => 'https://mixthatdrink.com/wp-content/uploads/2009/03/mojito-540x720.jpg',
    ],
];


        foreach ($cocktails as $cocktail) {
            $newCocktail = new Cocktail();
            $newCocktail->name = $cocktail['cocktailName'];
            $newCocktail->ingredients = $cocktail['ingredients'];
            $newCocktail->garnish = $cocktail['garnish'];
            $newCocktail->image = $cocktail['image'];
            $newCocktail->save();

}













    }
}
