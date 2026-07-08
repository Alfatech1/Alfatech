<?php

namespace Tests\Feature;

use Tests\TestCase;

class WelcomePageTest extends TestCase
{
    public function test_welcome_page_prefers_built_assets_when_manifest_exists_even_if_hot_file_exists(): void
    {
        $hotPath = public_path('hot');
        $manifestPath = public_path('build/manifest.json');
        $buildDirectory = dirname($manifestPath);

        $hadHotFile = file_exists($hotPath);
        $hadManifestFile = file_exists($manifestPath);

        if (!is_dir($buildDirectory)) {
            mkdir($buildDirectory, 0755, true);
        }

        file_put_contents($hotPath, 'http://127.0.0.1:5173');
        file_put_contents($manifestPath, json_encode([
            'resources/css/app.css' => [
                'file' => 'assets/app.css',
                'src' => 'resources/css/app.css',
            ],
            'resources/js/app.js' => [
                'file' => 'assets/app.js',
                'src' => 'resources/js/app.js',
            ],
        ], JSON_PRETTY_PRINT));

        try {
            $response = $this->get('/');

            $response->assertOk();
            $html = $response->getContent();

            $this->assertStringContainsString('/build/assets/app.css', $html);
            $this->assertStringNotContainsString('http://[::1]:5173', $html);
        } finally {
            if ($hadHotFile) {
                file_put_contents($hotPath, '');
            } else {
                @unlink($hotPath);
            }

            if ($hadManifestFile) {
                file_put_contents($manifestPath, '');
            } else {
                @unlink($manifestPath);
            }
        }
    }
}
