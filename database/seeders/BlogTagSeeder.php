<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogTag;
class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogTags = [
            // Blog 1 - NestJS APIs (Tags: Node.js, API Development, Database)
            ['blog_id' => 1, 'tag_id' => 10], // Node.js
            ['blog_id' => 1, 'tag_id' => 13], // API Development
            ['blog_id' => 1, 'tag_id' => 14], // Database
            
            // Blog 2 - AI Chatbots (Tags: OpenAI, Machine Learning, API Development)
            ['blog_id' => 2, 'tag_id' => 1],  // OpenAI
            ['blog_id' => 2, 'tag_id' => 12], // Machine Learning
            ['blog_id' => 2, 'tag_id' => 13], // API Development
            
            // Blog 3 - Multi-Vendor (Tags: E-commerce, Multi Vendor, Laravel)
            ['blog_id' => 3, 'tag_id' => 2],  // E-commerce
            ['blog_id' => 3, 'tag_id' => 3],  // Multi Vendor
            ['blog_id' => 3, 'tag_id' => 7],  // Laravel
            
            // Blog 4 - RAG Implementation (Tags: LangChain, Python, Machine Learning)
            ['blog_id' => 4, 'tag_id' => 5],  // LangChain
            ['blog_id' => 4, 'tag_id' => 11], // Python
            ['blog_id' => 4, 'tag_id' => 12], // Machine Learning
            
            // Blog 5 - Voice Assistants (Tags: OpenAI, Machine Learning, Cloud Computing)
            ['blog_id' => 5, 'tag_id' => 1],  // OpenAI
            ['blog_id' => 5, 'tag_id' => 12], // Machine Learning
            ['blog_id' => 5, 'tag_id' => 15], // Cloud Computing
            
            // Blog 6 - CRM Systems (Tags: Laravel, Database, API Development)
            ['blog_id' => 6, 'tag_id' => 7],  // Laravel
            ['blog_id' => 6, 'tag_id' => 14], // Database
            ['blog_id' => 6, 'tag_id' => 13], // API Development
        ];

        foreach ($blogTags as $blogTag) {
            BlogTag::create($blogTag);
        }
    }
}
