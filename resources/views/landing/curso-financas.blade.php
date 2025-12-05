<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Curso de Finanças | Alta Vista Investimentos</title>
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #001845;
            --ink: #16213e;
            --gold: #FFC971;
            --card: #f5f7fc;
        }
        @font-face {
            font-family: 'GT America';
            src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body { font-family: 'GT America', Arial, sans-serif; background: var(--navy); }
        .btn-gold { background: var(--gold); color: var(--navy); font-weight: 700; border: none; }
        .btn-gold:hover { background: #b3892f; color: #fff; }
        .hero-split { min-height: 40vh; display: flex; flex-wrap: wrap; margin-top: 0; }
        .hero-left {
            background: url('https://images.pexels.com/photos/552785/pexels-photo-552785.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center center/cover no-repeat;
            color: #EBEDF2; display: flex; align-items: center; justify-content: center; position: relative;
            min-height: 320px; width: 100vw;
        }
        .hero-left::before { content: ''; position: absolute; inset: 0; background: linear-gradient(0deg, rgba(0,24,69,0.70) 0%, rgba(0,24,69,0.50) 60%, rgba(0,24,69,0.35) 100%); }
        .hero-content-inspire { position: relative; z-index: 2; text-align: center; padding: 2.25rem 1.25rem; width: 100%; }
        .hero-content-inspire h1 { font-size: 2.6rem; font-weight: 800; line-height: 1.1; color: #EBEDF2; text-shadow: 0 2px 16px rgba(0,24,69,0.25); letter-spacing: -0.5px; }
        .hero-content-inspire h1 span { color: var(--gold); }

        .lead-section {
            background: #EBEDF2; border-radius: 22px; box-shadow: 0 14px 40px rgba(12, 24, 64, 0.18);
            margin-top: -40px; margin-bottom: 56px; padding: 2.5rem 2rem; max-width: 800px;
            margin-left: auto; margin-right: auto; position: relative; z-index: 3; border: 1px solid rgba(0,24,69,0.08);
        }

        .panel { background: var(--card); border: 1px solid rgba(12, 24, 64, 0.10); border-radius: 16px; padding: 1.25rem 1.25rem; box-shadow: inset 0 1px 0 rgba(255,255,255,0.35); }
        .heading-accent { color: var(--ink); font-weight: 800; letter-spacing: -0.3px; }
        .heading-accent::after { content: ''; display: block; width: 56px; height: 3px; background: var(--gold); border-radius: 3px; margin-top: .35rem; }

        .form-label { color: var(--ink); font-weight: 600; margin-bottom: 0.5rem; }
        .form-control, .form-select { 
            border: 1px solid rgba(12, 24, 64, 0.15); 
            border-radius: 8px; 
            padding: 0.75rem 1rem;
            font-size: 1rem;
        }
        .form-control:focus, .form-select:focus { 
            border-color: var(--gold); 
            box-shadow: 0 0 0 0.2rem rgba(255,201,113,.15); 
        }
        .form-check-input:checked {
            background-color: var(--gold);
            border-color: var(--gold);
        }
        .form-check-input:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 0.2rem rgba(255,201,113,.15);
        }
        .form-check-label {
            color: var(--ink);
            font-weight: 500;
        }
        .btn-submit {
            background: var(--gold);
            color: var(--navy);
            font-weight: 700;
            padding: 0.875rem 2.5rem;
            border-radius: 32px;
            border: none;
            font-size: 1.1rem;
            width: 100%;
            margin-top: 1rem;
        }
        .btn-submit:hover {
            background: #b3892f;
            color: #fff;
        }

        @media (max-width: 991px) {
            .hero-content-inspire { padding: 1.2rem 1rem 1.6rem; }
            .hero-content-inspire h1 { font-size: 2.05rem; }
            .lead-section { padding: 1.5rem 1.25rem; }
        }
    </style>
</head>
<body>
    <!-- Hero -->
    <section class="hero-split">
        <div class="col-12 hero-left">
            <div class="hero-content-inspire">
                <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Logo" class="mb-3" style="max-width:380px; width:100%">
                <h1>Curso de <span>Finanças</span></h1>
                <p class="mb-0">Aprenda a gerenciar seus investimentos e alcançar seus objetivos financeiros com nosso curso exclusivo.</p>
            </div>
        </div>
    </section>

    <!-- Formulário de Inscrição -->
    <section class="lead-section">
        <div class="container-fluid">
            <h2 class="text-center mb-4 heading-accent">Inscreva-se no Curso de Finanças</h2>
            <p class="text-center mb-4" style="color:#555;">Preencha o formulário abaixo para garantir sua vaga no curso.</p>
            
            <form id="curso-financas-form">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo *</label>
                    <input type="text" class="form-control" id="nome" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone *</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Possui conta na XP? *</label>
                    <div class="d-flex gap-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="conta_na_xp" id="conta_xp_sim" value="sim" required>
                            <label class="form-check-label" for="conta_xp_sim">
                                Sim
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="conta_na_xp" id="conta_xp_nao" value="nao" required>
                            <label class="form-check-label" for="conta_xp_nao">
                                Não
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="faixa_investimento" class="form-label">Faixa de Investimentos *</label>
                    <select class="form-select" id="faixa_investimento" name="faixa_de_investimento" required>
                        <option value="">Selecione uma opção</option>
                        <option value="ate_100_mil">Até R$ 100 mil</option>
                        <option value="100_mil_a_300_mil">R$ 100 mil a R$ 300 mil</option>
                        <option value="300_mil_a_1_milhao">R$ 300 mil a R$ 1 milhão</option>
                        <option value="1_milhao_a_5_milhoes">R$ 1 milhão a R$ 5 milhões</option>
                        <option value="acima_5_milhoes">Acima de R$ 5 milhões</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-submit">
                    <i class="bi bi-check-circle me-2"></i>
                    Confirmar Inscrição
                </button>
            </form>
        </div>
    </section>

    <footer class="container py-4">
        <small style="color:#fff; font-size:0.95rem; line-height:1.5; display:block; text-align:justify;">
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21698044.js"></script>
    <!-- End of HubSpot Embed Code -->
    
    <script>
        // Máscara para telefone
        document.getElementById('telefone').addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                if (value.length <= 10) {
                    value = value.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
                } else {
                    value = value.replace(/(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
                }
                e.target.value = value;
            }
        });

        // Processar envio do formulário
        document.getElementById('curso-financas-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitButton = e.target.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            // Desabilitar botão e mostrar loading
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Enviando...';
            
            // Coletar dados do formulário
            const nome = document.getElementById('nome').value;
            const telefone = document.getElementById('telefone').value;
            const email = document.getElementById('email').value;
            const contaXpRadio = document.querySelector('input[name="conta_na_xp"]:checked');
            const faixaInvestimento = document.getElementById('faixa_investimento').value;

            // Verificar se todos os campos foram preenchidos
            if (!nome || !telefone || !email || !contaXpRadio || !faixaInvestimento) {
                alert('Por favor, preencha todos os campos obrigatórios.');
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
                return;
            }

            const contaXp = contaXpRadio.value;

            // Log dos dados coletados para debug
            console.log('Dados do formulário:', {
                nome: nome,
                telefone: telefone,
                email: email,
                conta_na_xp: contaXp,
                faixa_de_investimento: faixaInvestimento
            });

            // Obter token CSRF
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || 
                             document.querySelector('input[name="_token"]')?.value;

            if (!csrfToken) {
                alert('Erro: Token CSRF não encontrado. Por favor, recarregue a página.');
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
                return;
            }

            // Criar FormData para enviar
            const formData = new FormData();
            formData.append('_token', csrfToken);
            formData.append('name', nome);
            formData.append('telefone', telefone);
            formData.append('email', email);
            formData.append('conta_na_xp', contaXp);
            formData.append('faixa_de_investimento', faixaInvestimento);

            // Enviar dados via fetch
            fetch('/curso-financas', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                }
            })
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                return response.json().then(err => {
                    throw new Error(err.message || 'Erro ao enviar formulário');
                });
            })
            .then(data => {
                console.log('Resposta do servidor:', data);
                // Sucesso - redirecionar
                window.location.href = '/obrigado';
            })
            .catch(error => {
                console.error('Erro ao enviar:', error);
                alert('Erro ao enviar formulário: ' + error.message + '. Tente novamente.');
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
            });
        });
    </script>
</body>
</html>

