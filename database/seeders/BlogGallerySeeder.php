<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogGallery;
class BlogGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            // Blog 1 - NestJS APIs
            [
                'blog_id' => 1,
                'image' => 'gallery/nestjs-architecture.jpg',
                'is_active' => 1,
                'caption' => 'NestJS Application Architecture Overview',
                'content' => '<h3>Modular Architecture</h3><p>NestJS promotes a modular architecture that makes applications scalable and maintainable.</p>',
                'is_featured' => 1,
                'order' => 1,
            ],
            [
                'blog_id' => 1,
                'image' => 'gallery/nestjs-decorators.jpg',
                'is_active' => 1,
                'caption' => 'Powerful Decorator System',
                'content' => '<h3>Decorators in Action</h3><p>See how decorators simplify API development in NestJS.</p>',
                'is_featured' => 0,
                'order' => 2,
            ],
            
            // Blog 2 - AI Chatbots
            [
                'blog_id' => 2,
                'image' => 'gallery/openai-integration.jpg',
                'is_active' => 1,
                'caption' => 'OpenAI API Integration',
                'content' => '<h3>Seamless Integration</h3><p>Learn how to integrate OpenAI APIs into your chatbot applications.</p>',
                'is_featured' => 1,
                'order' => 1,
            ],
            [
                'blog_id' => 2,
                'image' => 'gallery/chatbot-ui.jpg',
                'is_active' => 1,
                'caption' => 'Modern Chatbot Interface',
                'content' => '<h3>User Experience</h3><p>Creating intuitive and engaging chatbot user interfaces.</p>',
                'is_featured' => 0,
                'order' => 2,
            ],
            
            // Blog 3 - Multi-Vendor
            [
                'blog_id' => 3,
                'image' => 'gallery/vendor-dashboard.jpg',
                'is_active' => 1,
                'caption' => 'Vendor Management Dashboard',
                'content' => '<h3>Comprehensive Dashboard</h3><p>Complete vendor management system with analytics and reporting.</p>',
                'is_featured' => 1,
                'order' => 1,
            ],
            [
                'blog_id' => 3,
                'image' => 'gallery/marketplace-features.jpg',
                'is_active' => 1,
                'caption' => 'Marketplace Features',
                'content' => '<h3>Rich Feature Set</h3><p>Explore the essential features of a multi-vendor marketplace.</p>',
                'is_featured' => 0,
                'order' => 2,
            ],
            
            // Blog 4 - RAG Implementation
            [
                'blog_id' => 4,
                'image' => 'gallery/rag-architecture.jpg',
                'is_active' => 1,
                'caption' => 'RAG System Architecture',
                'content' => '<h3>System Design</h3><p>Understanding the architecture of Retrieval-Augmented Generation systems.</p>',
                'is_featured' => 1,
                'order' => 1,
            ],
            [
                'blog_id' => 4,
                'image' => 'gallery/vector-database.jpg',
                'is_active' => 1,
                'caption' => 'Vector Database Integration',
                'content' => '<h3>Efficient Storage</h3><p>How vector databases power semantic search in RAG systems.</p>',
                'is_featured' => 0,
                'order' => 2,
            ],
        ];

        foreach ($galleries as $gallery) {
            BlogGallery::create($gallery);
        }
    }
}
