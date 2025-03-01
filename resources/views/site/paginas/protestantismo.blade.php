@extends('site.layouts.main')

@section('titulo', 'Protestantismo')

@section('conteudo')
@include('sweetalert::alert')
{{ Breadcrumbs::render('protestantismo') }}

<!-- About Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container about py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="images/protestantismo.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="mb-5">Protestantismo</h1>
                <p class="mb-5">O protestantismo é uma das três principais divisões do cristianismo, junto com o catolicismo e a ortodoxia, sendo a segunda com o maior número de adeptos e a última a ser criada. Com mais de 900 milhões de adeptos em todo o mundo compreende aproximadamente 40% de todos os cristãos. Originou-se com a Reforma Protestante, um movimento contra o que seus seguidores consideravam erros na Igreja Católica. Desde então, os protestantes rejeitam a doutrina católica romana da supremacia papal e dos sacramentos, mas discordam entre eles sobre a presença real de Cristo na Eucaristia. Eles enfatizam o sacerdócio de todos os crentes, a justificação pela fé (sola fide) em vez das boas obras e a autoridade da Bíblia sozinha (e não com a tradição sagrada) na fé e na moral (sola scriptura). As "Cinco Solas" resumem as diferenças teológicas básicas em oposição à Igreja Católica Romana. O protestantismo é popularmente considerado como tendo começado na Alemanha em 1517, quando Martinho Lutero publicou suas 95 Teses como uma reação contra abusos na venda de indulgências pela Igreja Católica Romana, que pretendia oferecer remissão de pecado aos seus compradores. No entanto, o termo deriva da carta de protesto dos príncipes luteranos alemães em 1529 contra o édito da Dieta de Speyer, que condena os ensinamentos de Martinho Lutero como heréticos. Embora existissem rupturas anteriores e tentativas de reforma da Igreja Católica Romana - notadamente por Pedro Valdo, John Wycliffe e Jan Hus — somente Lutero conseguiu desencadear um movimento mais amplo, duradouro e moderno. No século XVI, o luteranismo se espalhou da Alemanha para Dinamarca, Noruega, Suécia, Finlândia, Letônia, Estônia e Islândia. As denominações reformadas (ou calvinistas) espalharam-se na Alemanha, Hungria, Países Baixos, Escócia, Suíça e França por reformadores como João Calvino, Huldrych Zwingli e John Knox. A separação política da Igreja da Inglaterra do papa sob o governo do rei Henrique VIII fez surgir o anglicanismo na Inglaterra e no País de Gales, parte do movimento mais amplo da Reforma.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container feature py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 feature-text wow fadeInUp d-flex" style="align-items: center;" data-wow-delay="0.1s">
                <div>
                    <h1 class="mb-5">Os Reformadores</h1>
                    <p class="mb-5">Dentre os reformadores há alguns nomes que recebem maior destaque, como por exemplo:
                    </p>
                    <ul>
                        <li>Martinho Lutero (1483 - 1546)</li>
                        <li>João Calvino (1509 - 1564)</li>
                        <li>Huldrych Zwingli (Ulrico Zuínglio) (1484 - 1531)</li>
                        <li>Jan Hus (1369 - 1415)</li>
                        <li>John Wycliffe (1330 - 1384)</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="images/reformadores.png" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container about py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid w-100 h-100" src="images/reforma_protestante.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text wow fadeInUp d-flex" style="align-items: center;" data-wow-delay="0.3s">
                <div>
                    <h1 class="mb-5">Os Cinco Solas da Reforma</h1>
                    <p class="mb-5">
                        Os 5 pilares da reforma protestante, também conhecidos como 5 <i>Solas</i>, se referem às expressões latinas <i>Sola Fide, Sola Scriptura, Solus Christus, Sola Gratia</i> e <i>Soli Deo Gloria</i>, que significam respectivamente Somente a Fé, Somente a Escritura, Somente Cristo, Somente a Graça e Somente a Deus toda Glória. Estes termos, resumidamente, nos ensinam que somente pela fé na vida, morte e ressureição de Cristo Jesus, que nos são reveladas pelo Espírito Santo através das Escrituras Sagradas, podemos ser salvos da Santa Ira de Deus que nós merecíamos. Assim sendo, somos salvos somente pela Graça do Deus Triúno e, por isso, a Ele pertence toda a Glória
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TIMELINE DO PROTESTANTISMO DE MARTINHO LUTERO -->

<div class="wow fadeInUp data-wow-delay=0.5s">
    <h1 class="text-center m-5">Martinho Lutero</h1>
</div>


<div class="timeline">

    <div class="time-container left wow fadeInUp data-wow-delay=0.5s">
        <div class="content">
            <h2>O Início (1517)</h2>
            <p class="">A história da Reforma Protestante começa em 31 de outubro de 1517, quando o monge agostiniano
                Martinho Lutero (1483 - 1546), inconformado com a forma que se dava a prática da venda de
                indulgências pela Igreja Católica, publicou suas 95 Teses. Segundo a tradição, ele as pregou na
                porta da Igreja do Castelo de Wittenberg, na Alemanha, como um convite para um debate acadêmico
                sobre o tema. No entanto, essas teses, originalmente destinadas a um público acadêmico, rapidamente se
                tornaram populares entre o público geral.</p>
        </div>
    </div>

    <div class="time-container right wow fadeInUp data-wow-delay=0.5s">
        <div class="content">
            <h2>A Tensão Se Intensifica (1518 - 1519)</h2>
            <p class="">Por conta de suas teses, Lutero foi acusado de heresia e convocado a comparecer a Roma em
                1518. Protegido pelo príncipe Frederico da Saxônia, ele não foi obrigado a ir e, em vez disso, foi
                interrogado em Augsburg, onde se recusou a retratar suas ideias. Em 1519, durante o debate de Leipzig,
                Lutero afirmou que o papa, tradicionalmente considerado infalível pela Igreja Católica, podia errar,
                assim como os concílios da Igreja.</p>
        </div>
    </div>

    <div class="time-container left wow fadeInUp data-wow-delay=0.5s">
        <div class="content">
            <h2>Papa X Lutero (1520)</h2>
            <p class="">Em 1520, Martinho Lutero recebeu a bula papal <em>Exsurge Domine</em>, na qual o Papa Leão X
                exigia
                que ele se retratasse ou seria excomungado. Em um ato de desafio, Lutero, junto com estudantes e
                outros professores de Wittenberg, queimou a bula em praça pública no dia 10 de dezembro. Esse gesto
                simbólico intensificou ainda mais o conflito com a Igreja Católica, marcando sua ruptura definitiva
                com a autoridade papal.</p>
        </div>
    </div>

    <div class="time-container right wow fadeInUp data-wow-delay=0.5s">
        <div class="content">
            <h2>A Dieta de Worms (1521)</h2>
            <p class="">Já em 1521, ocorreu a famosa Dieta de Worms, uma assembleia na qual as ideias de Martinho
                Lutero
                foram debatidas diante do imperador do Sacro Império Romano, Carlos V. Lutero foi declarado herege e
                teve que se refugiar, sendo protegido pelo príncipe-eleitor Frederico da Saxônia
                (já citado anteriormente), no castelo de Wartburg. Durante seu exílio, Lutero traduziu a Bíblia para o
                alemão, um marco importante na Reforma Protestante e que cooperou com sua expansão por todo o
                Sacro Império Romano. <br><br>
                Obs.: Foi na Dieta de Worms que Lutero fez sua famosa declaração:
                <em> "A menos que me convençam pela Escritura ou pela razão clara, não voltarei atrás, pois ir contra a
                    consciência não é nem seguro, nem correto. Aqui estou. Não posso fazer outra coisa. Que Deus me
                    ajude. Amém." </em> (LUTERO, 1521).
            </p>
        </div>
    </div>

    <div class="time-container left wow fadeInUp data-wow-delay=0.5s">
        <div class="content">
            <h2>Tolerância e Guerra (1526 - 1555)</h2>
            <p class="">Apesar da oposição da Igreja Romana, no início da divisão houve um período de relativa
                tolerância entre os lados. No entanto, em 1529, essa política conciliadora chegou ao fim com a Dieta
                de Speyer, onde foi revogada a liberdade religiosa concedida anteriormente aos territórios luteranos.
                Em resposta, os líderes luteranos fizeram um protesto formal em defesa de suas convicções e do apoio
                a Lutero, o que levou a serem conhecidos pelo nome de "protestantes". Em 1530, Filipe Melanchton
                (1497 - 1560) apresentou ao imperador Carlos V a “Confissão de Augsburgo”, que defendia a
                doutrina luterana.
            </p>
        </div>
    </div>

    <div class="time-container right wow fadeInUp data-wow-delay=0.5s">
        <div class="content">
            <h2>Tolerância e Guerra (1526 - 1555) - Continuação...</h2>
            <p class=""> Entre 1546 e 1555, ocorreram várias guerras entre católicos e protestantes no Sacro
                Império Romano-Germânico, conhecidas como as Guerras de Esmalcalda. Esses conflitos foram motivados
                pela tensão religiosa e política entre os príncipes luteranos e as forças leais ao imperador Carlos V,
                que apoiava o catolicismo. As guerras terminaram com o Tratado de Paz de Augsburgo, em 1555,
                que estabeleceu o princípio do <em>Cuius regio, eius religio</em> ("De quem é a região, dele é a religião").
                Esse acordo permitiu que os príncipes do império escolhessem entre o catolicismo e o luteranismo
                como religião oficial de seus territórios.
            </p>
        </div>
    </div>

</div>

<div class="wow fadeInUp data-wow-delay=0.5s">
    <h1 class="text-center m-5">João Calvino</h1>
</div>

<div class="timeline">

    <div class="time-container left wow fadeInUp data-wow-delay=0.5s">
        <div class="content">
            <h2>O Nascimento do Exegeta (1509 - 1517)</h2>
            <p class="">Outro nome importantíssimo da Reforma Protestante foi João Calvino, um francês nascido no
                ano de 1509, em Noyon, na região nordeste da França. Ele não fez parte da primeira geração de
                reformadores. Quando Lutero pregou as 95 teses na porta da Igreja do Castelo de Wittenberg, ele tinha
                cerca de oito anos apenas. (WARFIELD, s.d.) <br><br> Foi um homem de grande intelecto, estudioso e
                disciplinado, características que o ajudaram a se tornar o reformador de grande relevância que foi.</p>
        </div>
    </div>

    <div class="time-container right wow fadeInUp data-wow-delay=0.5s">
        <div class="content">
            <h2>Conversão (1533)</h2>
            <p class="">Segundo o Centro Presbiteriano de Pós-Graduação Andrew Jumper (CPAJ), Calvino se converteu por
                volta de 1533, provavelmente influenciado por seu primo, Robert Olivètan. <br><br>
                Ainda no final desse mesmo ano, teve que fugir da França, suspeito de ter ajudado o reitor da universidade
                onde estudava a preparar um discurso em favor dos protestantes.
            </p>
        </div>
    </div>

    <div class="time-container left wow fadeInUp data-wow-delay=0.5s">
        <div class="content">
            <h2>Genebra (1536)</h2>
            <p class="">Já em 1536, Calvino foi “convidado” por Guilherme Farel a ajudá-lo em Genebra, pois a cidade
                havia acabado de abraçar a Reforma. No entanto, vale ressaltar que isso, a princípio, não fazia parte de
                seus planos; o que ele realmente desejava era estudar na tranquilidade de Estrasburgo
            </p>
        </div>
    </div>

    <div class="time-container right wow fadeInUp data-wow-delay=0.5s">
        <div class="content">
            <h2>Expulsos (1538)</h2>
            <p class="">Em 1538, tanto Farel quanto Calvino acabaram sendo expulsos de Genebra. Calvino então seguiu para Estrasburgo, onde atuou ativamente como escritor, professor e pastor, participou de conferências e até mesmo se casou.
            </p>
        </div>
    </div>

    <div class="time-container left wow fadeInUp data-wow-delay=0.5s">
        <div class="content">
            <h2>Retorno e Luta (1541)</h2>
            <p class="">Em 1541, os governantes da cidade insistiram para que Calvino voltasse e ele, de fato, o fez e ali ficou até sua morte. Quando Calvino voltou, ele lutou durante longos anos contra famílias influentes e autoridades civis, que no fim não prevaleceram.
            </p>
        </div>
    </div>

    <!-- Timelines end -->
</div>

<!-- Conteúdo Final da Página -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container about py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid w-100 h-100" src="images/joao-calvino-min.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text wow fadeInUp d-flex" style="align-items: center;" data-wow-delay="0.3s">
                <div>
                    <h1 class="mb-5">Os Cinco Solas da Reforma</h1>
                    <p class="mb-5">
                        Algumas informações de grande importância são:
                    <ul class="">
                        <li class="mb-2">Segundo o Sr. Cosme Alves Serralheiro, devemos creditar a John Knox, um dos discípulos de Calvino, a preparação do caminho para o presbiterianismo como conhecemos hoje em dia (SERRALHEIRO, 2023, p.15);</li>
                        <li class="mb-2">Calvino foi o maior exegeta dos tempos da Reforma Protestante;</li>
                        <li class="mb-2">Escreveu diversas obras, sendo uma das mais famosas As Institutas da Religião Cristã;</li>
                        <li class="mb-2">Segundo John Piper, Calvino pregava as Escrituras versículo por versículo todos os domingos e, em semanas alternadas, chegava a pregar todos os dias, alcançando um grande número de sermões (PIPER, 2021);</li>
                        <li class="mb-2">João Calvino é o pai da doutrina calvinista, que é apresentada em igrejas reformadas de hoje em dia.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- REFERÊNCIAS BIBLIOGRÁFICAS -->

<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <h2 class="text-center mb-5">Fontes:</h2>

    <ul class="text-justify">
        <li class="mb-2 lead">- BEZERRA, Juliana. Reforma Protestante. Toda Matéria, [s.d.]. Disponível em: https://www.todamateria.com.br/reforma-protestante/. Acesso em: 10 jan. 2025</li>
        <li class="mb-2 lead">- “João Calvino – dados biográficos”. Centro Presbiteriano de Pós-Graduação Andrew Jumper. Disponível em: https://cpaj.mackenzie.br/recursos/historia-de-igreja/artigo?tx_news_pi1%5Baction%5D=detail&tx_news_pi1%5Bcontroller%5D=News&tx_news_pi1%5Bnews%5D=24341&cHash=4d75c78b8da015b27c3fbf81db7cf910. Acesso em: 28 fev. 2025</li>
        <li class="mb-2 lead">- PIPER, John. “A origem do Calvinismo”. Voltemos ao Evangelho. Disponível em: https://voltemosaoevangelho.com/blog/2021/06/a-origem-do-calvinismo/. Acesso em: 1 mar. 2025.</li>
        <li class="mb-2 lead">- SERRALHEIRO, Cosme Alves. A Primeira Igreja Presbiteriana de Porto Alegre: Uma História a Ser Contada (1953-2023). 1. ed. Porto Alegre: 2023.</li>
        <li class="mb-2 lead">- SILVA, Daniel Neves. "Reforma protestante"; Brasil Escola. Disponível em: https://brasilescola.uol.com.br/historiag/reforma-protestante.htm. Acesso em 10 de janeiro de 2025.</li>
        <li class="mb-2 lead">- SILVESTRE, Armando Araújo. Reforma Protestante. InfoEscola. Disponível em: https://www.infoescola.com/historia/reforma-protestante/. Acesso em: 10 jan. 2025.</li>
        <li class="mb-2 lead">- WARFIELD, B.B. “João Calvino e a Reforma (reforma500)”. Voltemos ao Evangelho. Disponível em: https://voltemosaoevangelho.com/blog/2017/09/joao-calvino-e-reforma-reforma500/. Acesso em 27 fev. 2025 </li>
    </ul>

</div>


@endsection