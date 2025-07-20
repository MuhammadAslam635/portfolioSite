<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Blog;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'name' => 'Building Scalable APIs with NestJS',
                'slug' => 'building-scalable-apis-with-nestjs',
                'user_id' => 1,
                'image' => 'blogs/nestjs-apis.png',
                'is_published' => 1,
                'category_id' => 3, // SaaS Application
                'published_at' => Carbon::now()->subDays(5),
                'is_featured' => 0,
                'views' => 1250,
                'likes' => 89,
                'comments_count' => 23,
                'shares_count' => 45,
                'reading_time' => 5,
            ],
            [
                'name' => 'Creating AI-Powered Chatbots with OpenAI',
                'slug' => 'creating-ai-powered-chatbots-with-openai',
                'user_id' => 1,
                'image' => 'blogs/ai-chatbots.avif',
                'is_published' => 1,
                'category_id' => 5, // AI Chatbot
                'published_at' => Carbon::now()->subDays(10),
                'is_featured' => 0,
                'views' => 2300,
                'likes' => 156,
                'comments_count' => 42,
                'shares_count' => 78,
                'reading_time' => 8,
            ],
            [
                'name' => 'Complete Guide to Multi-Vendor E-commerce Platforms',
                'slug' => 'complete-guide-multi-vendor-ecommerce-platforms',
                'user_id' => 1,
                'image' => 'blogs/multi-vendor-ecommerce.png',
                'is_published' => 1,
                'category_id' => 2, // Multi Vendor
                'published_at' => Carbon::now()->subDays(15),
                'is_featured' => 1,
                'views' => 1876,
                'likes' => 134,
                'comments_count' => 67,
                'shares_count' => 92,
                'reading_time' => 12,
            ],
            [
                'name' => 'RAG Implementation with LangChain and Vector Databases',
                'slug' => 'rag-implementation-langchain-vector-databases',
                'user_id' => 1,
                'image' => 'blogs/rag-langchain.png',
                'is_published' => 1,
                'category_id' => 7, // RAG
                'published_at' => Carbon::now()->subDays(3),
                'is_featured' => 0,
                'views' => 987,
                'likes' => 76,
                'comments_count' => 18,
                'shares_count' => 34,
                'reading_time' => 10,
            ],
            [
                'name' => 'Voice AI Revolution: Building Intelligent Voice Assistants',
                'slug' => 'voice-ai-revolution-intelligent-voice-assistants',
                'user_id' => 1,
                'image' => 'blogs/voice-assistants.avif',
                'is_published' => 1,
                'category_id' => 6, // AI Voicebot
                'published_at' => Carbon::now()->subDays(7),
                'is_featured' => 1,
                'views' => 1543,
                'likes' => 98,
                'comments_count' => 31,
                'shares_count' => 56,
                'reading_time' => 7,
            ],
            [
                'name' => 'Modern CRM Systems: Boosting Customer Relationships',
                'slug' => 'modern-crm-systems-boosting-customer-relationships',
                'user_id' => 1,
                'image' => 'blogs/modern-crm.png',
                'is_published' => 1,
                'category_id' => 8, // CRM
                'published_at' => Carbon::now()->subDays(12),
                'is_featured' => 1,
                'views' => 2145,
                'likes' => 187,
                'comments_count' => 59,
                'shares_count' => 103,
                'reading_time' => 9,
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}