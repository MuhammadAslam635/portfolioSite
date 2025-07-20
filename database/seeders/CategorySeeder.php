<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Single Vendor',
                'slug' => 'single-vendor',
                'image' => 'categories/single-vendor.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'Multi Vendor',
                'slug' => 'multi-vendor',
                'image' => 'categories/multi-vendor.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'SaaS Application',
                'slug' => 'saas-application',
                'image' => 'categories/saas-application.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'AI Agent',
                'slug' => 'ai-agent',
                'image' => 'categories/ai-agent.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'AI Chatbot',
                'slug' => 'ai-chatbot',
                'image' => 'categories/ai-chatbot.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'AI Voicebot',
                'slug' => 'ai-voicebot',
                'image' => 'categories/ai-voicebot.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'RAG',
                'slug' => 'rag',
                'image' => 'categories/rag.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'CRM',
                'slug' => 'crm',
                'image' => 'categories/crm.jpg',
                'is_active' => 1,
            ],
            [
                'name' => 'CMS',
                'slug' => 'cms',
                'image' => 'categories/cms.jpg',
                'is_active' => 1,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
