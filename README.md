# custom83
Repositório do projeto final - Estácio ADS P5

# CUSTOM 83


#### Descrição

O projeto visa a criação de um site de anúncios voltado para usuários que desejem encontrar produtos e serviços ligados ao mercado automotivo, produtos em geral como peças, acessórios e tudo que o mercado automotivo oferece ou as empresas queiram hospedar no site. A ideia é hospedar produtos de empresas locais  na base de dados da Custom 83 para divulgação em site no modelo macro de uma loja dentro de um só sistema.
 Sem o intuito de venda mas de divulgação das empresas interessadas em vender seus produtos e serviços com comparações de preços e negociações mais assertivas de acordo com as necessidades dos clientes finais.
 Caso o cliente necessite encontrar a loja mais próxima de uma determinada categoria de produto, o site disponibilizará parâmetros de pesquisa avançadas exibindo todas as informações detalhadas da empresa e do produto em questão. Além da pesquisa avançada o cliente poderá efetuar negociações com as empresas hospedadas através de alertas trocadas entre eles e comparações de preços e cabe a loja aceitar ou não a oferta, além de que será possível visualizar a confiabilidade de acordo com as avaliações realizadas a loja.
 
 #### Objetivo

Atualmente no mercado não existe um site com oferta de tantos serviços e produtos de lojas relacionadas ao mercado automotivo. 
Com isso o objetivo deste projeto é a entrega de um site completo com a função de pesquisa, comparações e venda de produtos e serviços de empresas terceiras objetivando mais conforto e comodidade ao consumidor do produto final.

#### Justificativa
O Custom83.com, se embasa na na questão da praticidade e comodidade dos seus futuros usuários, de poder encontrar em um único web site, tudo o que ele deseja para seu automovel, trazendo total comodidade, rapidez e facilidade em suas pesquisas e futuras compras. 

# DOCUMENTO DE VISÃO

### 1. Posicionamento
#### 1.1 Cenário Atual

 Atualmente não existe um sistema voltado a buscas específicas de mercado automotivo que promova maior comodidade aos consumidores que necessitam buscar peças ou algum serviço automotivo mais perto de sua localidade.
 Com o intuito de oferecer essa facilidade na prestação de serviços tanto das empresas promovendo seus produtos como da busca dos clientes será criado um site onde existirá a iteração entre consumidor e empresa prestadora de serviço, dando visão aos produtos oferecidos e serviços agendados com a inclusão de ofertas e negociações entre os envolvidos.
 
 DIAGRAMA DE CONTEXTO
 
 ![diagrama de contexto](https://user-images.githubusercontent.com/32046433/30527591-ebcd5746-9c00-11e7-8922-b4c70bb6818c.png)
 
 ### 2. EAP de Primeiro Nível
 
 ![eap de nivel 1](https://user-images.githubusercontent.com/32046433/30526445-ddfe4252-9bf0-11e7-80b0-97496d8c912a.png)

### 3. Envolvimento
#### 3.1 Papel dos autores
Atores são pessoas, equipamentos ou outros sistemas que interagem como sistema em questão, enviando ou recebendo mensagens.
Abaixo estão descritos de forma resumida o papel dos atores do site CUSTOM83:

#### Usuário


| Descrição | O usuário é o ator que irá utilizar diariamente o sistema |
| ------ | ------ |
| Papel | O sistema Custom83 será eficiente se as informações forem guardadas diariamente, a fim de manter um histórico de consultas. O usuário é de vital importância para o bom funcionamento do sistema, pois é quem fornece todos os dados que serão armazenados e utilizados pelo sistema. |
| Insumos ao Sistema | - Dados dos usuários / Dados das empresas hospedadas / dados de consultas diárias / Dados de desperdício diário / informações sobre o funcionamento do sistema / sugestões para aperfeiçoamento|
| Representante | Empresas do mercado automobilístico |

#### Proprietário

| Descrição | Fornece as especificações gerais que o sistema deve atender |
| ------ | ------ |
| Papel | Descrever de forma detalhada todos os requisitos do sistema. |
| Insumos ao Sistema | Informações sobre o funcionamento da empresa / Requisitos do sistema / Implementação|
| Representante | Ítalo Nascimento |

#### Empresas Fornecedoras

| Descrição | Fornece os dados necessários para alimentar a base de dados da Custom83 |
| ------ | ------ |
| Papel | Fornecedora dos dados dos produtos e serviços ofertados |
| Insumos ao Sistema |- Geração de dados a Custom83 para atender ao cliente / Melhores ofertas de trabalho|
| Representante | Lojas automotivas |

#### Custom 83

| Descrição | É o próprio sistema e suas funcionalidades. |
| ------ | ------ |
| Papel | Descrever de forma detalhada todos os requisitos do sistema.|
| Insumos ao Sistema |- Geração de dados para atender ao cliente |
| Representante | Paula, Italo, Ledhson, Lucas, Felipe |

### 4. Solução Tecnológica

#### 4.1 Ferramentas:
##### FrontEnd
  - HTML
  - CSS
  - JAVASCRIPT
  - FRAMEWORKS
  - BOOTSTRAP
  - BULMA'.IO
  
 ##### BackEnd
- LAMP / WAMP SERVERS
- LIGUAGEM PHP 7
- FRAMEWORK LARAVEL

 ##### Banco de Dados
 - MYSQL
 
##### IDE's
- SUBLIME
- ATOM


### 5.Cronograma

| Sprint 1 - 2 semanas -  28/08 à 10/09 | Responsável |
| ------ | ------ |
| Documento de Visão | Paula Soares |
|TAP | Paula Soares|
| Logomarca + identidade visual | Ítalo Nascimento |
| Backend - Desenvolver módulo de autenticação de usuário | Felipe Diniz |
|Frontend - Desenvolver frontend de autenticação | Lucas Moreira |

| Sprint 2 - 2 semanas --> 11/09 à 24/09 | Responsável |
| ------ | ------ |
| Documento de Requisitos | Paula Soares |
|EAP| Paula Soares|
| Front-End - Manutenção de clientes. | Ítalo Nascimento |
| Back End - Manutenção de clientes | Lucas Moreira |
|Crud - Manutenção de Clientes | Lucas Moreira |
|Integração do FRONT && BACKEND | Ítalo Nascimento |

| Sprint 3 - 2 semanas --> 25/09 à 08/10 | Responsável |
| ------ | ------ |
| Criar Front-End do DashBoard |Italo Nascimento |
|Criar Back End do DashBoard.|Lucas Moreira|
| Criar front end área de cadastrados para recebimento de newsletter | Ítalo Nascimento |
| Criar back end área de cadastrados para recebimento de newsletter | Lucas Moreira |
|tabela dos usuarios cadastrados para newsletter | Felipe Diniz |
|Back-end para manutenção de categorias e subcategorias | Lucas Moreira / Felipe Diniz |
|front-end de manutenção de clientes temporariamente desativados| Italo Nascimento |
|BackEnd dos clientes temporariamente desativados | Lucas Moreira / Felipe Diniz |
|Crud para Manutenção de clientes temporariamente desativados| Italo Nascimento |
|front-end para manutenção das categorias e sub-categorias | Italo Nascimento |

- Sprint 4 - 2 semanas --> 09/10 à 22/10
- Sprint 5 - 2 semanas --> 23/10 à 05/11
- Sprint 6 - 2 semanas --> 06/11 à 19/11
- Sprint 7 - 2 semanas --> 20/11 à 03/12

### 6.Análise de Riscos

| Riscos | Criticidade | Impacto | Estratégia | Plano de Ação
| ------ | ------ | ------ | ------ | ------ |
| Doenças | Alta | Cronograma | Prevenir |Manter recursos a mais 
|Escopo indefinido com prazo e custo definido| Alta | Custo / Tempo / Escopo / Qualidade | Prevenir | Definição antecipada de Escopo
| Aumento de Escopo de projeto sem ajuste de tempo, custo e recurso  | Alta | Custo / Tempo / Escopo / Qualidade | Prevenir | Realizar controle de escopo e controle integrado de mudança
| Ausência de domínio tecnológico | Média | Tempo | Prevenir | Treinamento da equipe
| Estouro de prazo devido a falhas de desenvolvimento | Média | Tempo / Custo / Escopo / Qualidade | Prevenir | Realizar mais testes afim de evitar erros imprevistos

# DOCUMENTO DE REQUISITOS

#### 1.ESCOPO
##### 1.1 REQUISITOS FUNCIONAIS

- RF01: AUTENTICAÇÃO DO USUÁRIO.
-	RF02: MANUTENÇÃO DOS CLIENTES.
-	RF03: MANUTENÇÃO DE CATEGORIAS E SUB CATEGORIAS.
-	RF04: MANUTENÇÃO DE PRODUTOS.
-	RF05: MANUTENÇÃO DE CLIENTES TEMPORARIAMENTE DESATIVADOS.
-	RF06: MANUTENÇÃO DE NESLETTER.
-	RF07: MANUTENÇÃO DE USUARIOS ADMINISTRATIVOS.
-	RF08: PAINEL DASHBOARD (ADM).
-	RF09: ÁREA DE MANUTENÇÃO DE DEPOIMENTOS DE CLIENTES.
-	RF10: MANUTENÇÃO DE SLIDRS.
-	RF11: MANUTENÇÃO DE LOJAS.
-	RF12: HISTORICO E GRAFICO DE VALORES DOS PRODUTOS.
-	RF13: MODULO DE PROSPOSTA DE NEGOCIAÇÃO.
- RF14: COMENTÁRIOS DE PRODUTOS, LOJAS E PRESTADORES DE SERVIÇOS
- RF15: BATE PAPO - (CHAT).
- RF16: ALERTA DE PRODUTOS.
- RF17: MANUTENÇÃO DE OFERTAS.
- RF18: FORMULÁRIOS DE BUSCA.

##### 1.2 REQUISITOS NÃO FUNCIONAIS

- RNF01: LIGUAGEM BACKEND DO SISTEMA.
- RNF02: BANCO DE DADOS.
- RNF03: FRAMEWORK BACK END.
- RNF04: TECNOLOGIAS FRONTEND.
- RNF05: INTERFACE GRÁFICA.
- RNF06: PAINEL DASHBOARD.
- RNF07: FORMULÁRIOS DE BUSCAS.
- RNF08: EXIBIÇÃO DE RESULTADOS DAS BUSCAS.
- RNF09: MAPAS.
- RNF10: GRÁFICO DE HISTORICO DE VALORES.
- RNF11: HISTORICO DE VALORES.
- RNF12: COMENTÁRIOS DOS PRODUTOS.
- RNF13: INFORMAÇÕES DOS ANUNCIANTES.
- RNF14: CONSULTA POR NOME.
- RNF15: NAVEGAÇÃO POR CATEGORIAS.
- RNF16: CADASTRO NEWSLETTER.
- RNF17: COMPARTILHAMENTO NAS REDES SOCIAIS.


#### 2.ESCOPO NEGATIVO

-	Não será possível efetuar compras diretamente no Custom 83
-	Não haverá opções de compra e venda diretamente no site Custom 83

### 3. Especificação dos Requisitos Funcionais

#### 3.1 RF01 - AUTENTICAÇÃO DO USUÁRIO
Para acesso a área administrativa, deve-se existir uma autenticação de usuário que pode ser feita através dos seguintes
parâmetros:

#### 3.2 RF2: MANUTENÇÃO DOS CLIENTES.
O sistema deve ter um CRUD para manutenção dos clientes, esse o qual teremos duas superclasses "Pessoa Fisica" e "Pessoa Jurídica" que poderão ser extendidas e referenciadas pelas classes filhas "Loja" e "Prestador de Serviço"

#### 3.3 RF3: MANUTENÇÃO DE CATEGORIAS E SUB CATEGORIAS.
O sistema deve ter um CRUD para manutenção de categorias e subcategorias de produtos.

#### 3.4 RF4: MANUTENÇÃO DE PRODUTOS.
O sistema deve ter um CRUD para manutenção de produtos.

#### 3.5 RF5: MANUTENÇÃO DE CLIENTES TEMPORARIAMENTE DESATIVADOS
O sistema deve ter um módulo para manutenção de clientes temporariamente desativados o qual todo cliente que estiver nesta área do sistema, deve ter todo o seu conteúdo ocultado da página enquanto não for reativado.

#### 3.6 RF6: MANUTENÇÃO DE NESLETTER.
O sistema deve ter um módulo para manutenção de usuários cadastrados no sistema com o intuito de receber NEWSLETTER.

OBS: Para uma segunda versão, a página deve permitir um cadastro refinado do cliente.

#### 3.7 RF7: MANUTENÇÃO DE USUARIOS ADMINISTRATIVOS.
O sistema deve ter um CRUD para manutenção de usuários administrativos do sistema.

OBS: para uma segunda versão este módulo deve possuir prioridades.

#### 3.8 RF8: PAINEL DASHBOARD (ADM).
O sistema deve possuir um painel de controle personalizado para cada sessão de classes de usuários:

- Administradores
- Usuários da Página
- Prestadores de Serviços

#### 3.9 RF9: ÁREA DE MANUTENÇÃO DE DEPOIMENTOS DE CLIENTES.
O sistema deve exibir na tela inicial uma área de avaliações e depoimentos de clientes e usuários da página. 

#### 3.10 RF10: MANUTENÇÃO DE SLIDRS.
O sistema deve exibir um CRUD para manutenção de SLIDRS.

#### 3.11 RF11: MANUTENÇÃO DE LOJAS.
Deverá ser possível a empresa/loja hospedada alterar os dados de sua loja como por exemplo o nome. Deve ser possível adicionar um novo produto para determinada loja. Deve ser exibido os seguintes dados da loja ou prestador de serviço:

#### 3.12 RF12: HISTORICO E GRAFICO DE VALORES DOS PRODUTOS.
O sistema deve salvar um histórico de valores dos produtos inseridos, com referência na data de inserção ou alteração do valor, possibilitando a criação de alteração do gráfico de histórico de valores de todos os produtos.

#### 3.13 RF13: MODULO DE PROSPOSTA DE NEGOCIAÇÃO.
Este recurso deve permitir que um usuário da página possa negociar um valor com o vendedor, passando por parâmetro o valor o qual está disposto a ofertar pelo produto desejado.

#### 3.14 RF14: COMENTÁRIOS DE PRODUTOS, LOJAS E PRESTADORES DE SERVIÇOS.
O sistema deve possuir um módulo com um CRUD para comentários relacionados aos produtos, lojistas e prestadores de serviços.

#### 3.15 RF15: BATE PAPO - (CHAT).
O sistema deve ter um chat para que os usuários possam ter a interatividade com lojistas e prestadores de serviços.

#### 3.16 RF16: ALERTA DE PRODUTOS.
Dentro do módulo de manutenção de lojas e produtos, o sistema deve possibilitar através de uma flag de sinalização, se a referida loja ou produto possui alerta de proposta de negociação.

#### 3.17 RF17: MANUTENÇÃO DE OFERTAS.
O sistema deve ter um módulo para manutenção de produtos sinalizados como ofertas.

#### 3.18 RF18: FORMULÁRIOS DE BUSCA.
O formulário de busca simples deve ter um auto complete para possibilitar o preview de uma string que o usuário esteja digitando na mesma.

### 4. Especificação dos Requisitos NÃO Funcionais

#### 4.1 RNF01 - LIGUAGEM BACKEND DO SISTEMA.
O sistema deve ser desenvolvido em linguagem PHP.

#### 4.2 RNF02 - BANCO DE DADOS.
Deverá ser usado o banco de dados MYSQL.

#### 4.3 RNF03 - FRAMEWORK BACK END.
Para o BackEnd pode ser usado em alguns módulos o framework Laravel.

#### 4.4 RNF04 - TECNOLOGIAS FRONTEND
Para o FrontEnd deve ser usado as seguintes tecnologias:

- HTML5
- CSS3
- JAVASCRIPT
- JQUERY
- BULMAIO
- JQUERY
- BOOTSTRAP

#### 4.5 RNF05 - INTERFACE GRÁFICA.
O sistema deve ter uma interface leve, intuitiva, seguindo os padrões de identidade visual do projeto.

#### 4.6 RNF06 - PAINEL DASHBOARD
O DASHBOARD deve exibir as seguintes informações:

- Total de Clientes.
- Total de Lojas.
- Total de prestadores de Serviço.
- Total de Clientes cadastrados para Newsletter.

#### 4.7 RNF07 - FORMULÁRIOS DE BUSCAS.
Na INDEX deve existir no início da página, a busca simples e avançada para que o usuário possa fazer suas consultas.

OBS: Os parâmetros de busca avançadas serão setados pela equipe de desenvolvimento.

#### 4.8 RNF08 - EXIBIÇÃO DE RESULTADOS DAS BUSCAS.
O usuário pode optar por visualizar os resultados das buscas por uma lista ou através de um mapa.

#### 4.9 RNF09 - MAPAS.
Deve ser usado a API do google maps para indexação dos produtos no mapa.

#### 4.10 RNF10 - GRÁFICO DE HISTORICO DE VALORES.
Na descrição de cada produto deve existir um gráfico de visualização do histórico do valor do produto.

#### 4.11 RNF11 - HISTORICO DE VALORES.

#### 4.12 RNF12 - COMENTÁRIOS DOS PRODUTOS.
Ao acessar a descrição de um produto, deve existir um formulário do tipo "TEXT AREA" com a finalidade do usuário final inserir comentários sobre o mesmo.

#### 4.13 RNF13 - INFORMAÇÕES DOS ANUNCIANTES.
Dentro das informações exibidas sobre o vendedor do produto ou prestador de serviço, deve ser exibido os seguintes atributos:

- Nome da Empresa / Prestador de serviço
- Endereço.
- Telefone.
- Link do site.
- Logomarca.

OBS: OUTRAS INFORMAÇÕES PODEM SER ANEXADAS CASO A EQUIPE DE DESENVOLVIMENTO DECIDA SOBRE A INSERÇÃO DE UM NOVO ATRIBUTO. 

#### 4.14 RNF14 - CONSULTA POR NOME.
Dentro das buscas deve ter a consulta por nome do lojista ou prestador de serviço, para isso, basta apenas um formulário com auto complete para com isso o usuário final passe por parâmetro a string para efetivar a consulta.

#### 4.15 RNF15 - NAVEGAÇÃO POR CATEGORIAS.
Na index, deve ser exibido um menu de categorias para que o usuário possa navegar pelo site.

#### 4.16 RNF16 - CADASTRO NEWSLETTER.
Todas as páginas do site terão um rodapé padrão onde vai existir um formulário para cadastro de usuários finais com interesse de receber NEWSLETTER.

OBS(1): O SITE DEVE POSSIBILITAR O CADASTRO SIMPLES COMO TAMBÉM O CADASTRO REFINADO, COM UMA SEQUENCIA DE FORMULÁRIOS QUE SERÁ DEFENIDA PELA EQUIPE.

OBS(2): O FOMULÁRIO DE CADASTRO SIMPLES TERÁ APENAS DOIS CAMPOS, SENDO DO TIPO "INPUT-TEXT", UM PARA ATRIBUTO NOME E OUTRO PARA O ATRIBUTO E-MAIL.

#### 4.17 RNF17 - COMPARTILHAMENTO NAS REDES SOCIAIS.
