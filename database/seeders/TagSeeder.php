<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'OpenAI',
                'slug' => 'openai',
                'image' => 'tags/openai.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'E-commerce',
                'slug' => 'ecommerce',
                'image' => 'tags/ecommerce.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'Multi Vendor',
                'slug' => 'multivendor',
                'image' => 'tags/multivendor.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'Groq',
                'slug' => 'groq',
                'image' => 'tags/groq.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'LangChain',
                'slug' => 'langchain',
                'image' => 'tags/langchain.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'LangGraph',
                'slug' => 'langgraph',
                'image' => 'tags/langgraph.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'image' => 'tags/laravel.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'React',
                'slug' => 'react',
                'image' => 'tags/react.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'Vue.js',
                'slug' => 'vuejs',
                'image' => 'tags/vuejs.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'Nest.js',
                'slug' => 'nestjs',
                'image' => 'tags/nestjs.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'FastApi',
                'slug' => 'fastapi',
                'image' => 'tags/python.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'Machine Learning',
                'slug' => 'machine-learning',
                'image' => 'tags/machine-learning.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'API Development',
                'slug' => 'api-development',
                'image' => 'tags/api-development.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'Database',
                'slug' => 'database',
                'image' => 'tags/database.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'Cloud Computing',
                'slug' => 'cloud-computing',
                'image' => 'tags/cloud-computing.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'GoLang',
                'slug' => 'golang',
                'image' => 'tags/golang.jpg',
                'is_active' => 1,
            ],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
