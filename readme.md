# Requisitos para utilizar a ferramenta no linux
 - Php     `sudo apt-get install php -y`
 - módulo curl do php  `apt-get install php-curl -y`
 - Apache   `sudo apt-get install apache2 -y`
 - composer = `sudo apt-get install composer`


 ## Mover essa pasta para dentro do ambiente do apache que por padrão é /var/www/html

  `sudo cp -R wsdl /var/www/html`

 ## Rodar o composer dentro da wsdl
  `sudo composer install`

## Tudo pronto agora rodar o comando do php para enviar os dados para o webservice

`php index.php`
