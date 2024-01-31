# w2o-ocr

## Requisitos

- PHP: 8.0
- ImageMagick6
- TesseractOCR

### ImageMagick6
Para Instalar o pacote ImageMagick6
```
sudo apt install imagemagick
```

Além de instalar o pacote, é necessário editar arquivo `/etc/ImageMagick-6/policy.xml`

```
sudo nano /etc/ImageMagick-6/policy.xml
```

E remover essas linhas

```
<policy domain="coder" rights="none" pattern="PS" />
<policy domain="coder" rights="none" pattern="PS2" />
<policy domain="coder" rights="none" pattern="PS3" />
<policy domain="coder" rights="none" pattern="EPS" />
<policy domain="coder" rights="none" pattern="PDF" />
<policy domain="coder" rights="none" pattern="XPS" />
```

### TesseractOCR
Para instalar o pacote TesseractOCR
```
sudo apt install tesseract-ocr
```
```
sudo apt install tesseract-ocr-por
```

## Como usar

Após todos os passos de instalação concluídos, para executar basta apenas executar o comando abaixo:
```
php index.php
```