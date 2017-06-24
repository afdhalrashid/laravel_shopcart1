<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $product = new \App\Product([
            'imagePath' => 'http://en.volkswagen.com/content/medialib/vwd4/global/mom/scirocco_gp/cutouts/cutout_pure_white042014/_jcr_content/renditions/rendition.file/cutout_pure_white_042014.png',
            'title' => 'Volkswagen Car 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at dolore facilis fugiat
                        nesciunt praesentium, repellendus soluta. Aliquid, debitis est! A, accusantium hic illum impedit
                        libero magni molestiae nobis ut.',
            'price' => 20000
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://en.volkswagen.com/content/medialib/vwd4/global/mom/scirocco_gp/cutouts/cutout_pure_white042014/_jcr_content/renditions/rendition.file/cutout_pure_white_042014.png',
            'title' => 'Volkswagen Car 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at dolore facilis fugiat
                        nesciunt praesentium, repellendus soluta. Aliquid, debitis est! A, accusantium hic illum impedit
                        libero magni molestiae nobis ut.',
            'price' => 20000
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://en.volkswagen.com/content/medialib/vwd4/global/mom/scirocco_gp/cutouts/cutout_pure_white042014/_jcr_content/renditions/rendition.file/cutout_pure_white_042014.png',
            'title' => 'Volkswagen Car 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at dolore facilis fugiat
                        nesciunt praesentium, repellendus soluta. Aliquid, debitis est! A, accusantium hic illum impedit
                        libero magni molestiae nobis ut.',
            'price' => 20000
        ]);
        $product->save();
    }
}
