<?php

use App\Http\Controllers\ApresentacaoController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', [LandingPageController::class, 'index']);
Route::view('/autismo', 'landing.autismo');
Route::view('/pilotos', 'landing.pilotos');
Route::view('/obrigado', 'landing.institucional.thank-you')->name('obrigado');
Route::view('/previdencia-xp', 'landing.conteudos.previdencia-xp');
Route::view('/curso-financas', 'landing.conteudos.curso-financas');
Route::post('/curso-financas', [LandingPageController::class, 'cursoFinancasSubmit']);
Route::view('/inteligencia-financeira', 'landing.conteudos.inteligencia-financeira');
Route::view('/palova-amisses', 'landing.parceiros.palova-amisses');
Route::view('/palova-amisses/obrigado', 'landing.institucional.thank-you');
Route::view('/jrb-assessoria', 'landing.parceiros.jrb-assessoria');
Route::view('/jrb-assessoria/obrigado', 'landing.parceiros.jrb-assessoria-obrigado');
Route::view('/ekis-prevent', 'landing.parceiros.ekis-prevent');
Route::view('/ekis-prevent/obrigado', 'landing.parceiros.ekis-prevent-obrigado');
Route::view('/nq-contabil', 'landing.parceiros.nq-contabil');
Route::view('/nq-contabil/obrigado', 'landing.parceiros.nq-contabil-obrigado');
Route::view('/anima-contabil', 'landing.parceiros.animacontabil');
Route::view('/anima-contabil/obrigado', 'landing.parceiros.animacontabil-obrigado');
Route::view('/cortax', 'landing.parceiros.cortax');
Route::view('/cortax/obrigado', 'landing.parceiros.cortax-obrigado');
Route::view('/much-advogados', 'landing.parceiros.much-advogados');
Route::view('/much-advogados/obrigado', 'landing.parceiros.much-advogados-obrigado');
Route::view('/irpfm-webinar', 'landing.conteudos.irpfm-webinar');
Route::view('/irpfm-webinar/obrigado', 'landing.conteudos.irpfm-webinar-obrigado');
Route::view('/evento-impacto-social', 'landing.eventos.evento-impacto-social');
Route::view('/evento-impacto-social/obrigado', 'landing.eventos.evento-impacto-social-obrigado');
Route::view('/consorcio-week', 'landing.consorcio.consorcio-week');
Route::view('/recomenday-2026', 'landing.acoes.recomenday-2026');
Route::view('/recomenday-2026/obrigado', 'landing.acoes.recomenday-2026-obrigado');
Route::view('/insurance-day', 'landing.acoes.insurance-day');
Route::view('/insurance-day/obrigado', 'landing.acoes.insurance-day-obrigado');
Route::view('/evento-verde-cedro-ii', 'landing.eventos.evento-verde-cedro-ii');
Route::view('/evento-verde-cedro-ii/obrigado', 'landing.eventos.evento-verde-cedro-ii-obrigado');
Route::view('/evento-cafe-verde-agro', 'landing.eventos.evento-cafe-verde-agro');
Route::view('/evento-cafe-verde-agro/obrigado', 'landing.eventos.evento-cafe-verde-agro-obrigado');
Route::view('/politica-privacidade', 'landing.institucional.politica-privacidade');
Route::view('/termos-condicoes', 'landing.institucional.termos-condicoes');
Route::view('/pesquisa-clientes', 'landing.institucional.pesquisa-clientes');
Route::view('/newsletter', 'landing.newsletter.index')->name('newsletter.index');
Route::view('/newsletter/ponto-de-vista-23-03-2026', 'landing.newsletter.ponto-de-vista-23-03-2026');
Route::view('/newsletter/ponto-de-vista-27-03-2026', 'landing.newsletter.ponto-de-vista-27-03-2026');
Route::view('/newsletter/ponto-de-vista-02-04-2026', 'landing.newsletter.ponto-de-vista-02-04-2026');
Route::view('/newsletter/ponto-de-vista-11-04-2026', 'landing.newsletter.ponto-de-vista-11-04-2026');
Route::view('/newsletter/ponto-de-vista-17-04-2026', 'landing.newsletter.ponto-de-vista-17-04-2026');
Route::view('/newsletter/ponto-de-vista-24-04-2026', 'landing.newsletter.ponto-de-vista-24-04-2026');
Route::view('/newsletter/ponto-de-vista-30-04-2026', 'landing.newsletter.ponto-de-vista-30-04-2026');
Route::view('/newsletter/ponto-de-vista-08-05-2026', 'landing.newsletter.ponto-de-vista-08-05-2026');
Route::view('/newsletter/ponto-de-vista-16-05-2026', 'landing.newsletter.ponto-de-vista-16-05-2026');
Route::view('/newsletter/ponto-de-vista-22-05-2026', 'landing.newsletter.ponto-de-vista-22-05-2026');
Route::view('/newsletter/ponto-de-vista-30-05-2026', 'landing.newsletter.ponto-de-vista-30-05-2026');
Route::view('/newsletter/ponto-de-vista-13-06-2026', 'landing.newsletter.ponto-de-vista-13-06-2026');
Route::view('/newsletter/ponto-de-vista-05-06-2026', 'landing.newsletter.ponto-de-vista-05-06-2026');
Route::view('/newsletter/ponto-de-vista-plataforma-conteudos', 'landing.newsletter.ponto-de-vista-plataforma-conteudos');
Route::view('/conteudos-investir', 'landing.conteudos.conteudos-investir');
Route::view('/conteudos-investir/obrigado', 'landing.conteudos.conteudos-investir-obrigado');
Route::post('/conteudos-investir', [LandingPageController::class, 'conteudosInvestirSubmit']);
Route::view('/previdencia-portabilidade', 'landing.conteudos.previdencia-portabilidade');
Route::view('/previdencia-portabilidade/obrigado', 'landing.conteudos.previdencia-portabilidade-obrigado');
Route::view('/espm-inteligencia-investimentos', 'landing.conteudos.espm-inteligencia-investimentos');
Route::view('/espm-inteligencia-investimentos/obrigado', 'landing.conteudos.espm-inteligencia-investimentos-obrigado');
Route::redirect('/insper-inteligencia-investimentos', '/espm-inteligencia-investimentos', 301);
Route::redirect('/insper-inteligencia-investimentos/obrigado', '/espm-inteligencia-investimentos/obrigado', 301);

// Artes para rede social (banners institucionais)
Route::view('/artes', 'artes.index');
Route::view('/artes/banner-01', 'artes.banner-01');
Route::view('/artes/banner-02', 'artes.banner-02');
Route::view('/artes/banner-fullhd-01', 'artes.banner-fullhd-01');
Route::view('/artes/banner-fullhd-02', 'artes.banner-fullhd-02');
Route::view('/artes/banner-institucional-1600x500', 'artes.banner-institucional-1600x500');
Route::view('/artes/banner-institucional-768x500', 'artes.banner-institucional-768x500');
Route::view('/artes/banner-institucional-440x500', 'artes.banner-institucional-440x500');
Route::view('/artes/morning-call-01', 'artes.morning-call-01');
Route::view('/artes/morning-call-02', 'artes.morning-call-02');
Route::view('/artes/morning-call-03', 'artes.morning-call-03');
Route::view('/artes/conteudo-educacional-01', 'artes.conteudo-educacional-01');
Route::view('/artes/conteudo-educacional-02', 'artes.conteudo-educacional-02');
Route::view('/artes/conteudo-educacional-03', 'artes.conteudo-educacional-03');
Route::view('/artes/evento-verde-cedro-ii-01', 'artes.evento-verde-cedro-ii-01');
Route::view('/artes/balanco-mensal-01', 'artes.balanco-mensal-01');
Route::view('/artes/newsletter-semanal-01', 'artes.newsletter-semanal-01');

// Páginas internas
Route::view('/interno/solicitacao-eventos', 'internal.solicitacao-eventos');
Route::view('/interno/solicitacao-eventos/obrigado', 'internal.solicitacao-eventos-obrigado');

// Apresentações internas
Route::get('/interno/apresentacoes/growth-univalores', [ApresentacaoController::class, 'growthUnivalores'])
    ->name('apresentacoes.growth-univalores');
Route::get('/interno/apresentacoes/growth-univalores/content', [ApresentacaoController::class, 'growthUnivaloresContent'])
    ->name('apresentacoes.growth-univalores.content');
Route::put('/interno/apresentacoes/growth-univalores/content', [ApresentacaoController::class, 'growthUnivaloresContentUpdate'])
    ->name('apresentacoes.growth-univalores.content.update');

Route::get('/interno/apresentacoes/growth-alta-vista', fn (Request $request) => app(ApresentacaoController::class)->show($request, 'growth-alta-vista'))
    ->name('apresentacoes.growth-alta-vista');
Route::get('/interno/apresentacoes/growth-alta-vista/content', fn () => app(ApresentacaoController::class)->content('growth-alta-vista'))
    ->name('apresentacoes.growth-alta-vista.content');
Route::put('/interno/apresentacoes/growth-alta-vista/content', fn (Request $request) => app(ApresentacaoController::class)->contentUpdate($request, 'growth-alta-vista'))
    ->name('apresentacoes.growth-alta-vista.content.update');

Route::get('/interno/apresentacoes/{slug}', [ApresentacaoController::class, 'show'])
    ->where('slug', 'growth-univalores|growth-alta-vista')
    ->name('apresentacoes.show');
Route::get('/interno/apresentacoes/{slug}/content', [ApresentacaoController::class, 'content'])
    ->where('slug', 'growth-univalores|growth-alta-vista')
    ->name('apresentacoes.show.content');
Route::put('/interno/apresentacoes/{slug}/content', [ApresentacaoController::class, 'contentUpdate'])
    ->where('slug', 'growth-univalores|growth-alta-vista')
    ->name('apresentacoes.show.content.update');

// Índice interno (não é a home)
Route::view('/interno/paginas', 'internal.paginas-index');
