<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Relatório -
## Estudo de Linguagem de Programação PHP
## Usando a Framework Laravel

O framework Laravel é uma estrutura de aplicação web. Laravel fornece uma estrutura pronta que serve de ponto de partida para criar aplicativos web. A Laravel combina os melhores pacotes do ecossistema PHP para oferecer a estrutura mais robusta e amigável para desenvolvedores.
A Laravel fornece recursos poderosos, como injeção completa de dependência, uma camada expressiva de abstração de banco de dados, filas e trabalhos programados, testes de unidade, integração e muito outros recursos.
Em seguida será abordado a estrutura do Laravel, conforme mostra a figura abaixo.

Figura 1 – Estrutura dos diretórios de uma aplicação Laravel
Estrutura do diretório

Diretório app
É o local onde fica armazenado o código principal da aplicação.
Diretório Bootstrap
Não tem nada a ver com o framework front-end desenvolvido pelo Twitter. Em Laravel Bootstrap contém o arquivo usado para o sistema de inicialização da estrutura do Laravel, ele também contém arquivos gerados pelo framework para otimização de desempenho, como os arquivos de cache de rotas e serviços.
Diretório Config
Contém todos os arquivos de configuração do aplicativo.
Diretório Database
Contém todos os arquivos relacionados ao banco de dados da aplicação, também contém outras pastas, sendo uma das mais importantes a pasta migrations, que será abordada em breve.
Diretório Public
Contém o arquivo, que é o ponto de entrada para todas as solicitações que entram no aplicativo e configura o carregamento automático. Ele também contém os arquivos, como imagens, JavaScript e CSS.
Diretório Resources
Contém todos os arquivos não compilados, como CSS e JavaScript, também contém os arquivos de linguagens e o principal contém os arquivos de modos de exibição.
Diretório Routes
Contém as rotas, ou seja, todas as URLs definidas para acessar o aplicativo web, seja ela estática ou dinâmica.

Diretório Storage
O Storage se relaciona com o diretório database, ele pode ser usado para armazenar quaisquer arquivos gerados pelo aplicativo, também armazena arquivos e caches gerados pela estrutura, além de conter os arquivos de registro do aplicativo, como os logs, modelos blade compilados, sessões baseadas em arquivos, caches de arquivos e outros arquivos gerados pela estrutura. Este também pode ser usado para armazenar arquivos gerados pelo usuário, como avatares de perfil, que devem ser acessíveis publicamente.
Diretório Tests
Contém os testes automatizados. Nele podemos fazer os testes de unidade e testes de recursos, ou seja, todos os testes que desejamos fazer na aplicação.
Diretório Vendor
Contém todas as dependências do composer, ou seja, todas as bibliotecas que podem ser utilizadas pela aplicação.

Rotas, Controllers e Views
Imagine que temos uma aplicação web que acessamos ela pelo seu endereço de domínio www.minhaempresa.com.br/
Quando acessamos www. minhaempresa.com.br, estamos utilizando a rota “/”

Quando acessamos www. minhaempresa/contato estamos utilizando a rota “/contato”

Quando acessamos www.minhaempresa/empresa estamos utilizando a rota “/empresa”
Este é o conceito de rotas, no Laravel, ao receber uma requisição em uma determinada URL o sistema de rotas define o que fazer, como por exemplo redirecionar ou enviar para o controlador (Controller) decidir o que fazer.

As rotas, ou seja, as URLs que os usuários poderão acessar, ficam localizadas no diretório routes, nele encontramos quatro arquivos diferentes sendo:
api.php;
channels.php;
console.php e
web.php.
Conforme mostra a figura 2.

Figura 2 – Diretório Routes e seus arquivos.

Estes arquivos são usados em ocasiões diferentes, sendo os principais e mais utilizados web.php e api.php.
Vamos analisar primeiramente as rotas criadas em web.php que serão acessadas pelos browsers.
O arquivo de rotas fica em /routes/web.php, todas as rotas da aplicação web devem ficar neste arquivo.

Criando Rotas Básicas no Laravel
O sistema de rotas do Laravel permite registrar método de rotas para todos os verbos http disponíveis, os tipos de rotas disponíveis são: GET, PUT, POST, DELETE, PATCH e OPTIONS. Sendo as mais utilizadas no desenvolvimento web as quatro primeiras. As rotas são carregadas pelo RouteServiceProvider dentro de um grupo que contém o grupo de middleware "web".

Figura 3 – Tipos de rotas

Rotas do tipo GET é para retornar algo, como por exemplo uma listagem de conteúdo etc.
Rotas do tipo POST normalmente são utilizados para cadastrar algo no sistema.
Rotas do tipo PUT ou PATH são para editar algum registro.
Rotas do tipo DELETE são para deletar algo.
E por último, rotas do tipo OPTIONS.

Rota GET
Conforme mostra o exemplo de rota na figura 4, esta tem o tipo GET que recebe dois parâmetros sendo: ‘ / ’, que representa a raiz da aplicação, ou seja, a página inicial e recebe também uma função, esta por sua vez carrega uma view chamada ‘welcome’.

Figura 4 – Exemplo de rota do tipo GET

A view ‘welcome’ é o arquivo que contém todo o código da página que será mostrada no browser do usuário. Mas, onde fica essa view? Conforme mostra na figura 5, ele está no diretório Resources.

Figura 5 – Diretório Resources e seus subdiretórios

Todas as páginas que desejamos criar para serem acessadas na web, devem estar neste diretório resources/views e assim criar uma rota no diretório routes/web.php, com a função de carregar a view correspondente. Como mostra outro exemplo na figura 6.

Figura 6 – Exemplo de rota que retorna uma view.

Neste exemplo foi criada a rota do tipo GET com o primeiro parâmetro ‘ /teste ‘, e a função para carregar a view ‘ teste ‘, está view por sua vez precisa ser criada com o nome teste.blade.php, conforme mostra na figura 7. Em breve será abordado sobre a necessidade de blade no nome da view.

Figura 7 – View teste criada

Em Laravel é possível criar uma rota, sem precisar criar uma função, um controller etc. Por exemplo uma página de login, que carrega apenas um formulário com nome e senha para acessar o sistema, e somente depois de logado é que será necessário carregar outros processos. A figura 8, mostra um exemplo.

Figura 8 – Exemplo de rota

Neste exemplo de rota acima, passamos os dois parâmetros direto, sendo o primeiro o nome da rota e o segundo o nome da view que desejamos que seja carregada.
Também podemos criar rotas e redirecionar o usuário para onde desejamos que ele acesse utilizando o método Redirect. Como mostra a figura 9.

Figura 9 – Exemplo de rota redirect

Neste exemplo, toda vez que o usuário acessar a página raiz ‘ / ’ ele será redirecionado para a página de teste. Esta rota não contém conteúdo visual, ela é simplesmente um redirecionamento automático.
Estes métodos de rotas estáticas são criados para as seguintes páginas, como exemplo: página de login, de cadastro, página de esqueci minha senha entre outras. Essas páginas precisam de uma URL especifica, por isso podem ser criadas com rotas estáticas. Outras páginas precisam de rotas dinâmicas, veremos sobre elas no subtópico seguinte.

Criando Rotas Dinâmicas com Parâmetros

Novamente vamos imaginar que um usuário esteja acessando a aplicação web pelo seu endereço de domínio www.minhaempresa.com.br/. Ele está procurando uma notícia como exemplo “Enchente na Alemanha”.

Figura 10 – Rota GET dinâmica com parâmetro

O usuário então digita a URL
https://www.minhaempresa.com.br/noticia/enchentenaalemanha
Neste exemplo, como mostra na figura 10, foi criado uma variável chamada ‘slug’, que receberá o título da notícia que o usuário está procurando, neste caso o título ‘enchentenaalemanha’. Então esta variável é passada como parâmetro para a função e assim a função retorna o conteúdo deste parâmetro.

NOTA: Durante os testes de código em Laravel, retornarei apenas um echo e não uma view como mostra os exemplos nas figuras 6 e 7, para deixar meus testes mais práticos sem precisar ter que criar várias views. Por isso, quando eu descrever que retornaremos uma página, mas no exemplo estiver apenas retornando um echo, lembre-se que é necessário criar uma view para retornar uma página e que o echo foi apenas um exemplo prático.

Rota POST
Ao acessar http://minhaempresa/usuario com o verbo http POST, vai acessar a rota conforme mostra a figura 11 abaixo.

Figura 11 – Rota do tipo POST

Utilizado para inserir um novo registro, normalmente utilizado por requisições a partir de formulários ou requisições externas por API.

Proteção contra ataques CSRF:

Rotas do tipo POST tem proteção automática no Laravel contra ataques CSRF. Esse tipo de ataque tem o objetivo de enviar de maneira fake um número muito grande de requisições para o sistema. Ataques CSRF se não proteger pode inserir uma quantidade ilimitada de registros no banco de dados até derrubar o banco de dados.
O Laravel uma sessão com um token único que sempre que utilizado é atualizado para proteção contra esse tipo de ataque. Sempre que fizer uma requisição com o verbo http post precisa enviar este token para validar a requisição.
Isso vale para as rotas POST, PUT e DELETE.

Rotas com Regex e Provider
Como podemos criar uma rota, usando expressão regular, ou seja, regex?
Podemos padronizar expressões regulares para utilizar ao criar rotas.
Por exemplo: Imagine que estamos listando na aplicação web, o ID que é o número de identificação do usuário e seu NOME.
Para isso, precisaremos criar duas rotas sendo uma para o NOME e outra para o ID.
Conforme mostra a figura 12.

Figura 12 – Exemplo de rota com parâmetro

Porém, quando criamos duas rotas conforme a figura 12, a primeira rota se sobrepõe, invalidando a segunda rota que buscaria na aplicação o ID do usuário pois elas têm o mesmo padrão.
Para que isso não ocorra é preciso usar expressões regulares para distinguir cada rota, conforme mostra na figura 13.

Figura 13 – Rotas com expressões regulares

Desta forma, apesar das duas rotas terem o mesmo padrão, nenhuma se sobreporá a outra pois temos condicionais diferentes.
A expressão regular [a-zA-Z]+, pegará qualquer texto e a expressão regular [0-9]+, pegará qualquer número digitado.
Agora quando queremos criar uma padronização desses filtros, por exemplo: sempre que usarmos ID nas rotas ela precisa de um padrão pré-estabelecido, é nestes casos que entra o conceito de Provider. Os Providers estão localizados em app/Providers, conforme mostra a figura 14.

Figura 14 – Diretório App e subdiretório Providers.

Dentro do subdiretório Providers, existem cinco classes Providers pré-configurados para diferentes ocasiões, são elas:
AppServiceProvider.php,
AuthServiceProvider.php,
BroadcastServiceProvider.php,
EventServiceProvider.php e
RouteServiceProvider.php,
conforme mostra a figura 15.

Figura 15 – Classes Providers

Como estamos analisando rotas, vamos verificar o que é a classe RouteServiceProvider.php?

Esta classe basicamente faz a coleta de informações previas, e então manda estas informações para determinado Controller. Por isso, podemos definir todas as nossas expressões regulares nesta classe, dentro da função boot, conforme mostra a figura 16.

Figura 16 – Exemplo de regex na classe RouteServiceProvider

Quando definimos os regex no Provider RouteServiceProvider, não precisamos usá-las nas rotas web.php, como havíamos feito antes, desta forma poderemos declarar as rotas com o mesmo padrão, conforme mostrou a figura 12, pois uma não invalidará a outra mesmo tendo o mesmo padrão.
Por isso, podemos definir vários tipos de expressões regulares para usarmos dentro da aplicação e assim, quando o usuário buscar uma determinada informação, ela somente será mostrada no browser se satisfazer os requisitos definidos.

Rotas com nome e Redirect
Vejamos como podemos nomear as rotas, e como isso facilitará a programação do desenvolvedor.
Imaginemos que nossa aplicação tenha uma página de configuração e que esta página contém subdivisões como, páginas de informações do usuário, página de permissões do usuário, entre outras. Neste caso teremos rotas como mostra a figura 17.

Figura 17 – Exemplo de rotas com nome

Não precisamos nomear todas as rotas, porém em alguns casos específicos é importante nomearmos pois facilita na programação quando precisamos pegar link, redirecionar ou quando precisamos alterar a URL, pois neste caso será alterado apenas em uma parte do código, sem a necessidade de refatorar todo o código para alterar a URL de uma rota.

Grupo de Rotas
Agrupar rotas é um recurso muito importante na programação de uma aplicação Laravel, note por exemplo na figura 17 acima que os três exemplos de rotas criadas têm o mesmo prefixo ‘/config’, no começo, neste caso podemos definir essas rotas em um grupo. Conforme mostra na figura 18.

Figura 18 – Grupo de rotas com prefixo ‘/config’.

Neste exemplo da figura 18, foi criado um grupo com o prefixo ‘/config’, onde a função retorna a página de configurações, quando acessar ‘/’, retorna a página de Informações quando acessar ‘info’ e retorna a página de permissões quando acessar ‘permissoes’. Apesar da rota estar apenas com ‘/’, ‘info’ ou ‘permissoes’, parecendo incompleta, quando elas fazem parte de um grupo, então ele faz uma soma do prefixo com o que foi definido na rota.
Uma das vantagens de fazer assim é que se tiver que atualizar de ‘config’ para ‘admin’ basta simplesmente alterar o prefixo no grupo de rotas.

Fallback de Rotas (404)
Precisamos criar rotas para todas as possibilidades possíveis da nossa aplicação.
Porém, se um usuário digitar um endereço que não exista no sistema, como podemos ter controle sobre o que será carregado e mostrado ao usuário?
Para tal controle o Laravel dispõe de um recurso chamado Fallback, não é Callback. Fallback é basicamente uma alternativa em se tratando de rotas, ou seja, quando definimos todas as possíveis rotas da aplicação e o usuário digitar uma rota inexistente no sistema, o Laravel percorrerá todas as possibilidades de rota e se não encontrar a requisição ele cairá no Fallback onde podemos definir que ele retorne nossa página 404, a página inicial ou redirecionar para qualquer outra página que desejarmos. Conforme mostra a figura 19.

Figura 19 – Fallback para retorna a página 404.

Rotas e Controllers
Talvez você tenha se perguntado, como dar manutenção em uma aplicação grande com todos esses exemplos de rotas criadas, pois em cada rota será necessário criar todas as ações, por exemplo, na rota de informações, será necessário carregar todos os dados do usuário que está logado ou seja, será preciso montar toda a estrutura para cada tela, para que ela apareça com as informações corretas. Isso deixaria nosso arquivo gigante quase que elegível e de manutenção horrível, pois todo o código do sistema se concentrará no arquivo de rotas.
Por isso, a partir de agora vamos subdividir as responsabilidades de cada parte do sistema.
No arquivo de web.php vamos simplesmente definir as rotas e em cada rota será designado um controller e dentro deste controller uma action específica, ou seja, uma função ou método específico para lidar com a rota.  
Os Controllers estão localizados em app/Http/Controllers, conforme mostra a figura 20.

Figura 20 – Localização do subdiretório Cotrollers
No subdiretório Controllers podemos criar nossos próprios controllers. Como criamos um controller?
Podemos criar um arquivo diretamente dentro do subdiretório Controller ou podemos criar através de linha de comando ( php arisan make:controller nomeController ). Para entendermos melhor, vejamos um exemplo, com o grupo de rotas que criamos anteriormente, como mostra a figura 18.
Criaremos um controller específico para configurações e baseado neste grupo de rotas, ele terá três funções distintas, uma para ‘/’ raiz, outra para ‘info’ e uma para ‘permissoes’. Vamos criar através de linha de comando sendo ConfigController o nome dele. Como mostra a figura 21.

Figura 21 – Controller ConfigController criado

Veja que dentro do subdiretório controllers já contém um controller pré-criado sendo Controller.php.
Agora no controller que acabamos de criar precisamos definir as action, ou seja, os métodos que cada um deve fazer. Conforme mostra a figura 22.

Figura 22 – Classe ConfigController e suas funções definidas

Então, precisamos ir em web.php onde criamos as rotas e atribuir as actions para cada uma das rotas. Como fazemos isso? Ao invés de passarmos uma função para as rotas, como mostra a figura 18, vamos passar o controller e a action correspondente que acabamos de criar em ConfigController. Como mostra a figura 23.

Figura 23 – Rotas com o controller e actions definidos.

Nota: O Controller definido é o arquivo ConfigController.php e as actions são: index, info e permissoes.
Desta forma, dividimos as responsabilidades, definindo que o ConfigController action index é responsável pela rota ‘/’ (Raiz), que o ConfigController action info é responsável pela rota ‘info’ e que o ConfigController action permissoes é o responsável pela rota ‘permissoes’.
Dividindo essas responsabilidades nosso arquivo de rotas não ficará muito grande e então poderemos controlar o restante dos processos pelo controller.

Request, Blade e Templates
