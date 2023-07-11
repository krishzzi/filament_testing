<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Tags\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allTags = collect($this->getCustomTags());

        $allTags->each(function ($item){
            $newTagRecord = Tag::findOrCreate($item);
        });

//        foreach ($allTags as $name)
//        {
//            $newTagRecord = Tag::findOrCreate($name);
//        }
    }




    private function getCustomTags()
    {
        return [
            'responsive',
            'experimental',
            'typography',
            'innovative',
            'clean',
            'colorful',
            'modern',
            'vibrant',
            'illustrative',
            'cinematic',
            'storytelling',
            'bold',
            'elegant',
            'playful',
        ];
    }






}
