<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class InternalController extends Controller
{
    public function expertXp2026(): View
    {
        $agenda = $this->expertXp2026Agenda();
        $photoUploads = $this->expertXp2026PhotoUploads();

        return view('internal.expert-xp-2026', compact('agenda', 'photoUploads'));
    }

    /** @return list<array{id: string, title: string, weekday: string, date: string, url: string}> */
    private function expertXp2026PhotoUploads(): array
    {
        return [
            [
                'id' => 'dia-1',
                'title' => 'Dia 1 — 23 de julho',
                'weekday' => 'Quinta-feira',
                'date' => '23 JUL',
                'url' => 'https://altavistaseguros.sharepoint.com/:f:/s/mkt/IgDlzG1A5VswQYk_g2NNU7r8AdNf3sVqyQr0dXmOuzKGVBM?e=8UYOgU',
            ],
            [
                'id' => 'dia-2',
                'title' => 'Dia 2 — 24 de julho',
                'weekday' => 'Sexta-feira',
                'date' => '24 JUL',
                'url' => 'https://altavistaseguros.sharepoint.com/:f:/s/mkt/IgBoGRgWvPD9R4VKCmPWgHbcAbWxbnVNRP98c0AufhO0nzA?e=VulFHJ',
            ],
            [
                'id' => 'dia-3',
                'title' => 'Dia 3 — 25 de julho',
                'weekday' => 'Sábado',
                'date' => '25 JUL',
                'url' => 'https://altavistaseguros.sharepoint.com/:f:/s/mkt/IgCPf2SH0jTpRaTBXw8Q3jo3AVNgzDrF3UiKE1SBn7tIs2U?e=un7Vzj',
            ],
        ];
    }

    /** @return list<array{id: string, date: string, weekday: string, day_code: string, sessions: list<array{time: string, time_end?: string, type: string, title: string, speakers: string, av?: bool, meeting?: bool}>}> */
    private function expertXp2026Agenda(): array
    {
        return [
            [
                'id' => 'agenda-dia-1',
                'date' => '23 de julho',
                'weekday' => 'Quinta-feira',
                'day_code' => '23 JUL / QUI',
                'sessions' => [
                    [
                        'time' => '13:15',
                        'type' => 'Learning Session 4',
                        'title' => 'Bolsa brasileira 2026: o que pode destravar o próximo ciclo?',
                        'speakers' => 'André Lion, João Luiz Braga, Octávio Magalhães e Fernando Ferreira',
                    ],
                    [
                        'time' => '13:15',
                        'type' => 'Alta Vista',
                        'title' => 'Poder de Escolha: fidelizando clientes na era da portabilidade',
                        'speakers' => 'Bruno Ballista e Lisandro Lopez',
                        'av' => true,
                    ],
                    [
                        'time' => '13:55',
                        'type' => 'Learning Session 5',
                        'title' => 'Macroeconomia em Transição: Os Vetores que Guiam os Mercados Emergentes',
                        'speakers' => 'Jeferson Bittencourt, Rodolfo Margato, Luiz Parreiras e Mariano Steinert',
                    ],
                    [
                        'time' => '14:35',
                        'type' => 'Learning Session 4',
                        'title' => 'Mundo em Movimento: As perspectivas das bolsas globais',
                        'speakers' => 'Diego Correia, Alastair Pang, Gina Martin Adams e Laura Howenstine',
                    ],
                    [
                        'time' => '15:15',
                        'type' => 'Learning Session 2',
                        'title' => 'América Latina e Emergentes: A visão de gestores globais de ações',
                        'speakers' => 'Fabio Frischer e Seba Ramirez',
                    ],
                    [
                        'time' => '16:00',
                        'time_end' => '17:00',
                        'type' => 'Reunião',
                        'title' => 'Jung + Bicalho',
                        'speakers' => 'Vinland',
                        'meeting' => true,
                    ],
                    [
                        'time' => '16:20',
                        'type' => 'Expert Session',
                        'title' => 'Perspectivas Econômicas dos EUA e Globais: Desafios de curto prazo e tendências de longo prazo',
                        'speakers' => 'Caio Megale e Janet Yellen',
                    ],
                ],
            ],
            [
                'id' => 'agenda-dia-2',
                'date' => '24 de julho',
                'weekday' => 'Sexta-feira',
                'day_code' => '24 JUL / SEX',
                'sessions' => [
                    [
                        'time' => '10:00',
                        'type' => 'Expert Session',
                        'title' => 'Os rumos da economia brasileira',
                        'speakers' => 'Paulo Gama e Rafael Furlanetti',
                    ],
                    [
                        'time' => '11:25',
                        'type' => 'Expert Session',
                        'title' => 'Juros, Inflação e Investimento: Como a Política Monetária Impacta os Estados',
                        'speakers' => 'Caio Megale',
                    ],
                    [
                        'time' => '13:20',
                        'type' => 'Learning Session 1',
                        'title' => 'Cenário pré-eleitoral: tendências, comportamento do eleitor e perspectivas para 2026',
                        'speakers' => 'Paulo Gama',
                    ],
                    [
                        'time' => '14:00',
                        'time_end' => '15:00',
                        'type' => 'Reunião',
                        'title' => 'Jung + Guerra',
                        'speakers' => 'Legacy',
                        'meeting' => true,
                    ],
                    [
                        'time' => '14:00',
                        'type' => 'Learning Session 2',
                        'title' => 'Reformas micro, desafio das empresas e mercado de capitais',
                        'speakers' => 'Caio Megale e Gustavo Montezano',
                    ],
                    [
                        'time' => '14:00',
                        'type' => 'Learning Session 5',
                        'title' => 'Política Fiscal no Brasil: entre regras, reformas e sustentabilidade',
                        'speakers' => 'Gabriel Barros, Bruno Funchal, Bianca Lima e Tiago Sbardelotto',
                    ],
                    [
                        'time' => '14:40',
                        'type' => 'Learning Session 5',
                        'title' => 'Fundos Imobiliários: Retorno ao Radar em um Novo Ciclo de Juros',
                        'speakers' => 'Alessandro Vedrossi, Pedro Carraz, Marx Gonçalves e Rodrigo Abbud',
                    ],
                    [
                        'time' => '14:40',
                        'type' => 'Alta Vista',
                        'title' => 'O Poder da Marca Pessoal no ecossistema de Assessoria',
                        'speakers' => 'Pedro Perotti e Andre Albo',
                        'av' => true,
                    ],
                    [
                        'time' => '15:20',
                        'type' => 'Learning Session 4',
                        'title' => 'A Revolução dos ETFs',
                        'speakers' => 'Leandro Bousquet, Fabiano Cintra, Bruno Barino e Monica Camino',
                    ],
                ],
            ],
            [
                'id' => 'agenda-dia-3',
                'date' => '25 de julho',
                'weekday' => 'Sábado',
                'day_code' => '25 JUL / SÁB',
                'sessions' => [],
            ],
        ];
    }
}
