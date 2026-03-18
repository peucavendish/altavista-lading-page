# Artes para rede social – Alta Vista

Modelos de banner institucional em HTML. Use o script de export para gerar PNG no tamanho que quiser.

**Identidade:** cores e tipografia alinhadas aos e-mails de marketing AV.

## Modelos

- **banner-institucional-01-escuro.html** – Fundo azul escuro, logo centralizada, tagline em dourado.
- **banner-institucional-02-claro.html** – Fundo claro com card escuro, logo e frase institucional.

## Exportar direto na página

Abra o arquivo `.html` no navegador. No canto inferior direito aparece o painel **Exportar imagem**: informe **largura** e **altura** (entre 400 e 2000 px) e clique em **Baixar PNG**. O arquivo é gerado na hora, no tamanho que você escolheu. O painel não entra na imagem exportada.

**Dica:** Se a página for aberta com `file://`, a logo pode não aparecer na imagem por restrição de CORS. Nesse caso, sirva a pasta `artes/` por um servidor local (ex.: `npx serve artes`) ou use o script por linha de comando abaixo.

## Exportar por linha de comando

Na raiz do projeto, instale as dependências (se ainda não tiver) e rode:

```bash
npm install
npm run artes:gerar -- banner-institucional-01-escuro.html 1080 1080
```

**Argumentos:**

1. `arquivo.html` – Nome do banner (em relação à pasta `artes/`) ou caminho completo.
2. `largura` – (opcional) em pixels. Padrão: 1080.
3. `altura` – (opcional) em pixels. Padrão: 1080.
4. `saida.png` – (opcional) Caminho do arquivo de saída. Padrão: `artes/export/<nome>-<largura>x<altura>.png`.

**Exemplos:**

```bash
# Quadrado 1080×1080 (feed)
npm run artes:gerar -- banner-institucional-01-escuro.html

# Stories 1080×1350
npm run artes:gerar -- banner-institucional-01-escuro.html 1080 1350

# Banner horizontal 1200×628 (LinkedIn/Facebook)
npm run artes:gerar -- banner-institucional-02-claro.html 1200 628 feed.png
```

As imagens são salvas em `artes/export/` (a pasta é criada automaticamente).

## Alternativa: captura manual

1. Abra o `.html` no navegador.
2. Use DevTools (modo responsivo) para definir o tamanho desejado.
3. Capture a tela ou use extensão para exportar a área como PNG.
