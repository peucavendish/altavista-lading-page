<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [LandingPageController::class, 'index']);
Route::view('/autismo', 'landing.autismo');
Route::view('/pilotos', 'landing.pilotos');
Route::view('/obrigado', 'landing.institucional.thank-you')->name('obrigado');
Route::view('/previdencia-xp', 'landing.conteudos.previdencia-xp');
Route::view('/curso-financas', 'landing.conteudos.curso-financas');
Route::post('/curso-financas', [LandingPageController::class, 'cursoFinancasSubmit']);
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
Route::view('/irpfm-webinar', 'landing.conteudos.irpfm-webinar');
Route::view('/irpfm-webinar/obrigado', 'landing.conteudos.irpfm-webinar-obrigado');
Route::view('/evento-impacto-social', 'landing.eventos.evento-impacto-social');
Route::view('/evento-impacto-social/obrigado', 'landing.eventos.evento-impacto-social-obrigado');
Route::view('/consorcio-week', 'landing.consorcio.consorcio-week');
Route::view('/recomenday-2026', 'landing.acoes.recomenday-2026');
Route::view('/recomenday-2026/obrigado', 'landing.acoes.recomenday-2026-obrigado');
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
Route::view('/conteudos-investir', 'landing.conteudos.conteudos-investir');
Route::view('/conteudos-investir/obrigado', 'landing.conteudos.conteudos-investir-obrigado');
Route::post('/conteudos-investir', [LandingPageController::class, 'conteudosInvestirSubmit']);

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

// Índice interno (não é a home)
Route::view('/interno/paginas', 'internal.paginas-index');
