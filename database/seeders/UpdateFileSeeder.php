<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\File;

class UpdateFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Update existing files to use actual filenames
        $files = File::all();
        
        foreach ($files as $index => $file) {
            // Assign actual filenames based on index
            if ($index === 0) {
                $file->update([
                    'filename' => 'sample_text.txt',
                    'original_filename' => 'sample_text.txt',
                    'mime_type' => 'text/plain',
                    'file_size' => 102, // Actual file size
                ]);
            } elseif ($index === 1) {
                $file->update([
                    'filename' => 'sample_pdf.pdf',
                    'original_filename' => 'sample_pdf.pdf',
                    'mime_type' => 'application/pdf',
                    'file_size' => 42, // Actual file size
                ]);
            } elseif ($index === 2) {
                $file->update([
                    'filename' => 'sample_document.docx',
                    'original_filename' => 'sample_document.docx',
                    'mime_type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    'file_size' => 52, // Actual file size
                ]);
            } else {
                // For remaining files, use the first file as template
                $file->update([
                    'filename' => 'sample_text.txt',
                    'original_filename' => 'sample_text_' . ($index + 1) . '.txt',
                    'mime_type' => 'text/plain',
                    'file_size' => 102,
                ]);
            }
        }

        $this->command->info('Files updated successfully!');
        $this->command->info('Total files updated: ' . $files->count());
    }
}
