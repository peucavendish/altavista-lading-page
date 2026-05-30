<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class ApresentacaoController extends Controller
{
    private const SLUG = 'growth-univalores';

    private function contentPath(): string
    {
        return storage_path('app/apresentacoes/' . self::SLUG . '.json');
    }

    private function defaultContentPath(): string
    {
        return resource_path('data/apresentacoes/' . self::SLUG . '.json');
    }

    private function readContentFile(?string $path): ?array
    {
        if (! $path || ! File::exists($path)) {
            return null;
        }

        $data = json_decode(File::get($path), true);

        return is_array($data) ? $data : null;
    }

    private function loadContent(): array
    {
        $data = $this->readContentFile($this->contentPath())
            ?? $this->readContentFile($this->defaultContentPath())
            ?? [];

        return [
            'fields' => $data['fields'] ?? [],
            'hiddenSlides' => array_values(array_map('intval', $data['hiddenSlides'] ?? [])),
        ];
    }

    public function growthUnivalores(Request $request): View
    {
        $content = $this->loadContent();

        return view('apresentacoes.growth-univalores.index', [
            'fields' => $content['fields'],
            'hiddenSlides' => $content['hiddenSlides'],
            'editMode' => $request->boolean('edit'),
            'meta' => [
                'title' => 'Growth Univalores — Apresentação Executiva',
                'slides' => 13,
            ],
        ]);
    }

    public function growthUnivaloresContent(): JsonResponse
    {
        $content = $this->loadContent();

        return response()->json([
            'version' => 1,
            'id' => self::SLUG,
            'fields' => $content['fields'],
            'hiddenSlides' => $content['hiddenSlides'],
        ]);
    }

    public function growthUnivaloresContentUpdate(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'fields' => 'required|array',
            'hiddenSlides' => 'nullable|array',
            'hiddenSlides.*' => 'integer|min:1|max:99',
        ]);

        $payload = [
            'version' => 1,
            'id' => self::SLUG,
            'updated_at' => now()->toIso8601String(),
            'fields' => $validated['fields'],
            'hiddenSlides' => array_values(array_unique($validated['hiddenSlides'] ?? [])),
        ];

        File::ensureDirectoryExists(dirname($this->contentPath()));
        File::put(
            $this->contentPath(),
            json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );

        return response()->json([
            'success' => true,
            'message' => 'Conteúdo salvo no servidor.',
        ]);
    }
}
