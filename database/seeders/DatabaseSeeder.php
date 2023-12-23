<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\listings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(2)->create();

        \App\Models\User::factory()->create([
            'name' => 'Scott Hunter',
            'email' => 'me@scott.com',
        ]);

        listings::factory(20)->create();

        listings::factory()->create([
                'title' => 'Software Engineer',
                'tags' => 'PHP, Laravel, Backend',
                'company' => 'ABC Tech',
                'location' => 'New York',
                'email' => 'hr@abc-tech.com',
                'website' => 'https://abc-tech.com',
                'description' => 'Join our team at Innovative Tech Solutions, where creativity meets technological advancement. We are seeking a seasoned Senior Software Engineer passionate about pushing the boundaries of innovation. As a key member of our development team, you will collaborate on cutting-edge projects that redefine industry standards.Your role involves spearheading the design and implementation of robust software solutions, leveraging your expertise in languages like Python, Java, or C++. Your innovative thinking will drive the creation of scalable architectures and efficient algorithms that power our next-gen products.',
            
        ]);
        
        listings::factory()->create(
            [
                'title' => 'Graphic Designer',
                'tags' => 'UI/UX, Adobe Suite, Creativity',
                'company' => 'Design Co.',
                'location' => 'San Francisco',
                'email' => 'info@designco.com',
                'website' => 'https://designco.com',
                'description' => 'A Graphic Designer is an artist, communicator, and problem-solver rolled into one creative professional. They possess a unique blend of artistic prowess and technical skills, wielding visual elements to convey messages, ideas, and stories.These professionals use various design tools and software to craft visually compelling graphics for a wide array of purposes. From creating logos and brand identities to designing marketing materials, websites, and user interfaces, Graphic Designers play a pivotal role in shaping how information is perceived and absorbed by audiences.Their expertise extends beyond mere aesthetics; they delve deep into understanding client requirements, target demographics, and market trends to tailor their designs accordingly. Through a keen understanding of color theory, typography, layout principles, and user experience, they breathe life into concepts, transforming visions into tangible, impactful designs.',
            ],
        );
    }
}
