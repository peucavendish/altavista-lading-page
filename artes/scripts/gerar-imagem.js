/**
 * Gera PNG do banner HTML no tamanho desejado.
 *
 * Uso:
 *   node artes/scripts/gerar-imagem.js <arquivo.html> [largura] [altura] [saida.png]
 *
 * Exemplos:
 *   node artes/scripts/gerar-imagem.js banner-institucional-01-escuro.html
 *   node artes/scripts/gerar-imagem.js banner-institucional-01-escuro.html 1080 1350
 *   node artes/scripts/gerar-imagem.js banner-institucional-02-claro.html 1200 628 feed.png
 */

import puppeteer from 'puppeteer';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

const DEFAULT_SIZE = 1080;
const artesDir = path.resolve(__dirname, '..');

function parseArgs() {
  const args = process.argv.slice(2);
  if (!args[0]) {
    console.error('Uso: node gerar-imagem.js <arquivo.html> [largura] [altura] [saida.png]');
    process.exit(1);
  }

  const htmlFile = path.isAbsolute(args[0])
    ? args[0]
    : path.resolve(artesDir, args[0]);
  const width = parseInt(args[1], 10) || DEFAULT_SIZE;
  const height = parseInt(args[2], 10) || DEFAULT_SIZE;
  const outFile =
    args[3] ||
    path.join(
      artesDir,
      'export',
      path.basename(args[0], '.html') + `-${width}x${height}.png`
    );

  return { htmlFile, width, height, outFile };
}

async function main() {
  const { htmlFile, width, height, outFile } = parseArgs();

  const fileUrl = 'file://' + htmlFile.replace(/\\/g, '/');
  const outDir = path.dirname(outFile);

  const browser = await puppeteer.launch({ headless: 'new' });
  const page = await browser.newPage();

  await page.setViewport({ width, height, deviceScaleFactor: 1 });
  await page.goto(fileUrl, { waitUntil: 'networkidle0' });

  await page.addStyleTag({
    content: `.banner { width: ${width}px !important; height: ${height}px !important; }`,
  });

  const banner = await page.$('.banner');
  if (!banner) {
    console.error('Elemento .banner não encontrado no HTML.');
    await browser.close();
    process.exit(1);
  }

  const fs = await import('fs');
  fs.mkdirSync(outDir, { recursive: true });

  await banner.screenshot({
    path: outFile,
    type: 'png',
  });

  await browser.close();
  console.log('Salvo:', path.resolve(outFile));
}

main().catch((err) => {
  console.error(err);
  process.exit(1);
});
