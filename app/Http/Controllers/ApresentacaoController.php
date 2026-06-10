<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class ApresentacaoController extends Controller
{
    private const PRESENTATIONS = [
        'growth-univalores' => [
            'view' => 'apresentacoes.growth-univalores.index',
            'title' => 'Growth Univalores — Apresentação Executiva',
            'slides' => 13,
        ],
        'growth-alta-vista' => [
            'view' => 'apresentacoes.growth-alta-vista.index',
            'title' => 'Growth Alta Vista — Captação de Leads',
            'slides' => 11,
        ],
    ];

    private function config(string $slug): array
    {
        abort_unless(isset(self::PRESENTATIONS[$slug]), 404);

        return self::PRESENTATIONS[$slug];
    }

    private function contentPath(string $slug): string
    {
        return storage_path('app/apresentacoes/' . $slug . '.json');
    }

    private function defaultContentPath(string $slug): string
    {
        return resource_path('data/apresentacoes/' . $slug . '.json');
    }

    private function readContentFile(?string $path): ?array
    {
        if (! $path || ! File::exists($path)) {
            return null;
        }

        $data = json_decode(File::get($path), true);

        return is_array($data) ? $data : null;
    }

    private function loadContent(string $slug): array
    {
        $data = $this->readContentFile($this->contentPath($slug))
            ?? $this->readContentFile($this->defaultContentPath($slug))
            ?? [];

        return [
            'fields' => $data['fields'] ?? [],
            'hiddenSlides' => array_values(array_map('intval', $data['hiddenSlides'] ?? [])),
        ];
    }

    public function show(Request $request, string $slug): View
    {
        $config = $this->config($slug);
        $content = $this->loadContent($slug);

        return view($config['view'], [
            'slug' => $slug,
            'fields' => $content['fields'],
            'hiddenSlides' => $content['hiddenSlides'],
            'editMode' => $request->boolean('edit'),
            'meta' => [
                'title' => $config['title'],
                'slides' => $config['slides'],
            ],
        ]);
    }

    public function content(string $slug): JsonResponse
    {
        $this->config($slug);
        $content = $this->loadContent($slug);

        return response()->json([
            'version' => 1,
            'id' => $slug,
            'fields' => $content['fields'],
            'hiddenSlides' => $content['hiddenSlides'],
        ]);
    }

    public function contentUpdate(Request $request, string $slug): JsonResponse
    {
        $this->config($slug);

        $validated = $request->validate([
            'fields' => 'required|array',
            'hiddenSlides' => 'nullable|array',
            'hiddenSlides.*' => 'integer|min:1|max:99',
        ]);

        $payload = [
            'version' => 1,
            'id' => $slug,
            'updated_at' => now()->toIso8601String(),
            'fields' => $validated['fields'],
            'hiddenSlides' => array_values(array_unique($validated['hiddenSlides'] ?? [])),
        ];

        File::ensureDirectoryExists(dirname($this->contentPath($slug)));
        File::put(
            $this->contentPath($slug),
            json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );

        return response()->json([
            'success' => true,
            'message' => 'Conteúdo salvo no servidor.',
        ]);
    }

    public function growthUnivalores(Request $request): View
    {
        return $this->show($request, 'growth-univalores');
    }

    public function growthUnivaloresContent(): JsonResponse
    {
        return $this->content('growth-univalores');
    }

    public function growthUnivaloresContentUpdate(Request $request): JsonResponse
    {
        return $this->contentUpdate($request, 'growth-univalores');
    }
}
