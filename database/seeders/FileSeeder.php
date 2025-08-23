<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\File;
use App\Models\User;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get users to assign files to
        $users = User::all();
        
        if ($users->isEmpty()) {
            $this->command->info('No users found. Please run UserSeeder first.');
            return;
        }

        $sampleFiles = [
            [
                'title' => 'Company Presentation 2024',
                'description' => 'Annual company overview and financial highlights for stakeholders',
                'original_filename' => 'company_presentation_2024.pptx',
                'filename' => 'sample_presentation.pptx',
                'mime_type' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                'file_size' => 2048576, // 2MB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'Project Requirements Document',
                'description' => 'Detailed specifications for the new management system project',
                'original_filename' => 'project_requirements.pdf',
                'filename' => 'sample_requirements.pdf',
                'mime_type' => 'application/pdf',
                'file_size' => 1048576, // 1MB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'Team Photo',
                'description' => 'Group photo from the annual team building event',
                'original_filename' => 'team_photo_2024.jpg',
                'filename' => 'sample_team_photo.jpg',
                'mime_type' => 'image/jpeg',
                'file_size' => 524288, // 512KB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'Financial Report Q1',
                'description' => 'First quarter financial analysis and projections',
                'original_filename' => 'financial_report_q1.xlsx',
                'filename' => 'sample_financial_report.xlsx',
                'mime_type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'file_size' => 1572864, // 1.5MB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'User Manual',
                'description' => 'Complete user guide for the management system',
                'original_filename' => 'user_manual.docx',
                'filename' => 'sample_user_manual.docx',
                'mime_type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'file_size' => 2097152, // 2MB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'Logo Design',
                'description' => 'Company logo in vector format for various applications',
                'original_filename' => 'company_logo.svg',
                'filename' => 'sample_logo.svg',
                'mime_type' => 'image/svg+xml',
                'file_size' => 262144, // 256KB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'Database Schema',
                'description' => 'Complete database structure and relationships diagram',
                'original_filename' => 'database_schema.png',
                'filename' => 'sample_database_schema.png',
                'mime_type' => 'image/png',
                'file_size' => 786432, // 768KB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'API Documentation',
                'description' => 'REST API endpoints and authentication details',
                'original_filename' => 'api_documentation.md',
                'filename' => 'sample_api_docs.md',
                'mime_type' => 'text/markdown',
                'file_size' => 131072, // 128KB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'Project Timeline',
                'description' => 'Gantt chart showing project milestones and deadlines',
                'original_filename' => 'project_timeline.mpp',
                'filename' => 'sample_project_timeline.mpp',
                'mime_type' => 'application/vnd.ms-project',
                'file_size' => 3145728, // 3MB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'Source Code Archive',
                'description' => 'Compressed source code for the management system',
                'original_filename' => 'source_code.zip',
                'filename' => 'sample_source_code.zip',
                'mime_type' => 'application/zip',
                'file_size' => 5242880, // 5MB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'Meeting Minutes',
                'description' => 'Notes from the weekly development team meeting',
                'original_filename' => 'meeting_minutes_week5.txt',
                'filename' => 'sample_meeting_minutes.txt',
                'mime_type' => 'text/plain',
                'file_size' => 65536, // 64KB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'Product Brochure',
                'description' => 'Marketing materials for the management system',
                'original_filename' => 'product_brochure.pdf',
                'filename' => 'sample_brochure.pdf',
                'mime_type' => 'application/pdf',
                'file_size' => 2097152, // 2MB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'Training Video',
                'description' => 'Screen recording of system features and usage',
                'original_filename' => 'training_video.mp4',
                'filename' => 'sample_training_video.mp4',
                'mime_type' => 'video/mp4',
                'file_size' => 8388608, // 8MB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'Customer Feedback',
                'description' => 'Survey results and customer testimonials',
                'original_filename' => 'customer_feedback.csv',
                'filename' => 'sample_customer_feedback.csv',
                'mime_type' => 'text/csv',
                'file_size' => 131072, // 128KB
                'user_id' => $users->first()->id,
            ],
            [
                'title' => 'System Architecture',
                'description' => 'Technical architecture diagram and infrastructure details',
                'original_filename' => 'system_architecture.drawio',
                'filename' => 'sample_architecture.drawio',
                'mime_type' => 'application/x-drawio',
                'file_size' => 393216, // 384KB
                'user_id' => $users->first()->id,
            ]
        ];

        foreach ($sampleFiles as $fileData) {
            File::create($fileData);
        }

        // Create some files for other users if they exist
        if ($users->count() > 1) {
            $otherUsers = $users->slice(1);
            
            $additionalFiles = [
                [
                    'title' => 'Personal Notes',
                    'description' => 'Personal development notes and ideas',
                    'original_filename' => 'personal_notes.txt',
                    'filename' => 'sample_personal_notes.txt',
                    'mime_type' => 'text/plain',
                    'file_size' => 32768, // 32KB
                    'user_id' => $otherUsers->first()->id,
                ],
                [
                    'title' => 'Resume',
                    'description' => 'Professional resume and cover letter',
                    'original_filename' => 'resume.pdf',
                    'filename' => 'sample_resume.pdf',
                    'mime_type' => 'application/pdf',
                    'file_size' => 262144, // 256KB
                    'user_id' => $otherUsers->first()->id,
                ],
                [
                    'title' => 'Portfolio',
                    'description' => 'Collection of work samples and projects',
                    'original_filename' => 'portfolio.pdf',
                    'filename' => 'sample_portfolio.pdf',
                    'mime_type' => 'application/pdf',
                    'file_size' => 1048576, // 1MB
                    'user_id' => $otherUsers->first()->id,
                ]
            ];

            foreach ($additionalFiles as $fileData) {
                File::create($fileData);
            }
        }

        $this->command->info('Sample files created successfully!');
        $this->command->info('Total files created: ' . File::count());
    }
}
