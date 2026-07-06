<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class InternalController extends Controller
{
    private const PHOTO_EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp'];

    public function expertXp2026(): View
    {
        $baseDir = public_path('img/expert-xp-2026');

        $sections = [
            ['id' => 'dia-1', 'title' => 'Dia 1 — 23 de julho', 'subtitle' => 'Quinta-feira'],
            ['id' => 'dia-2', 'title' => 'Dia 2 — 24 de julho', 'subtitle' => 'Sexta-feira'],
            ['id' => 'dia-3', 'title' => 'Dia 3 — 25 de julho', 'subtitle' => 'Sábado'],
            ['id' => 'geral', 'title' => 'Geral', 'subtitle' => 'Destaques e momentos'],
        ];

        $gallery = [];
        foreach ($sections as $section) {
            $photos = $this->loadPhotos(
                $baseDir . '/' . $section['id'],
                'expert-xp-2026/' . $section['id']
            );
            if ($photos !== []) {
                $gallery[] = array_merge($section, ['photos' => $photos]);
            }
        }

        $rootPhotos = $this->loadPhotos($baseDir, 'expert-xp-2026');
        if ($rootPhotos !== [] && $gallery === []) {
            $gallery[] = [
                'id' => 'todas',
                'title' => 'Fotos do evento',
                'subtitle' => 'Expert XP 2026',
                'photos' => $rootPhotos,
            ];
        }

        $totalPhotos = array_sum(array_map(
            fn (array $section): int => count($section['photos']),
            $gallery
        ));

        return view('internal.expert-xp-2026', compact('gallery', 'totalPhotos'));
    }

    /** @return list<array{url: string, name: string}> */
    private function loadPhotos(string $dir, string $urlPrefix): array
    {
        if (! is_dir($dir)) {
            return [];
        }

        $photos = [];
        foreach (File::files($dir) as $file) {
            $ext = strtolower($file->getExtension());
            if (! in_array($ext, self::PHOTO_EXTENSIONS, true)) {
                continue;
            }
            $photos[] = [
                'url' => '/img/' . $urlPrefix . '/' . $file->getFilename(),
                'name' => $file->getFilename(),
            ];
        }

        usort($photos, fn (array $a, array $b): int => strnatcasecmp($a['name'], $b['name']));

        return $photos;
    }
}
