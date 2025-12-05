<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function cursoFinancasSubmit(Request $request)
    {
        // Log dos dados recebidos para debug
        \Log::info('Dados recebidos do formulário:', $request->all());

        // Validar dados
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'conta_na_xp' => 'required|in:sim,nao',
            'faixa_de_investimento' => 'required|in:ate_100_mil,100_mil_a_300_mil,300_mil_a_1_milhao,1_milhao_a_5_milhoes,acima_5_milhoes',
        ]);

        // Aqui você pode adicionar a integração com HubSpot ou outro serviço
        // Por exemplo, enviar para HubSpot via API, webhook, etc.
        
        // Por enquanto, apenas retorna sucesso
        return response()->json([
            'success' => true,
            'message' => 'Formulário enviado com sucesso'
        ]);
    }

    public function parceriaInvestimentosSubmit(Request $request)
    {
        // Log dos dados recebidos para debug
        \Log::info('Dados recebidos do formulário de parceria:', $request->all());

        // Validar dados
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'aceite_termos' => 'required|in:1,true,on,yes',
        ], [
            'aceite_termos.required' => 'É necessário aceitar os termos e condições para continuar.',
            'aceite_termos.in' => 'É necessário aceitar os termos e condições para continuar.',
        ]);

        // Salvar no banco de dados
        try {
            DB::table('parceria_leads')->insert([
                'nome' => $validated['name'],
                'telefone' => $validated['telefone'],
                'email' => $validated['email'],
                'conta_xp' => null,
                'faixa_investimento' => null,
                'aceite_termos' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Exception $e) {
            \Log::error('Erro ao salvar lead no banco de dados: ' . $e->getMessage());
        }

        // Aqui você pode adicionar a integração com HubSpot ou outro serviço
        // Por exemplo, enviar para HubSpot via API, webhook, etc.
        
        return response()->json([
            'success' => true,
            'message' => 'Formulário enviado com sucesso'
        ]);
    }
}
