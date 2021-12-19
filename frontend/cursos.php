<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/navbaraboutus.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="icon"  href="../img/politecnicsico.png" type="image/png" />
</head>
<body style="font-family: 'Assistant';" class="d-block" data-bs-spy="scroll">
    <!---------------------------------------NAVBAR-------------------------------------->
    <?php
        include 'navbarfija.php';
    ?>

    <script>
        function expand()
        {
            var textoParaDesplegar1 = document.getElementById("desplegarAC");
            var textoParaDesplegar2 = document.getElementById("desplegarMP");
            var textoParaDesplegar3 = document.getElementById("desplegarGVEC");
            var textoParaDesplegar4 = document.getElementById("desplegarCI");
            var textoParaDesplegar5 = document.getElementById("desplegarAVGE");
            var textoParaDesplegar6 = document.getElementById("desplegarSMIX");
            var textoParaDesplegar7 = document.getElementById("desplegarDAM");
            var textoParaDesplegar8 = document.getElementById("desplegarDAW");
            var textoParaDesplegar9 = document.getElementById("desplegarGA");
            var textoParaDesplegar10 = document.getElementById("desplegarAF");
            var textoParaDesplegar11 = document.getElementById("desplegarAD");
            var flecha1 = document.querySelector(".flechaExpandir1");
            var flecha2 = document.querySelector(".flechaExpandir2");
            var flecha3 = document.querySelector(".flechaExpandir3");
            var flecha4 = document.querySelector(".flechaExpandir4");
            var flecha5 = document.querySelector(".flechaExpandir5");
            var flecha6 = document.querySelector(".flechaExpandir6");
            var flecha7 = document.querySelector(".flechaExpandir7");
            var flecha8 = document.querySelector(".flechaExpandir8");
            var flecha9 = document.querySelector(".flechaExpandir9");
            var flecha10 = document.querySelector(".flechaExpandir10");
            var flecha11 = document.querySelector(".flechaExpandir11");

            if(textoParaDesplegar1.classList.contains("expandir"))
            {
                textoParaDesplegar1.classList.remove("expandir");
                flecha1.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar1.classList.add("expandir");
                flecha1.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar2.classList.contains("expandir"))
            {
                textoParaDesplegar2.classList.remove("expandir");
                flecha2.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar2.classList.add("expandir");
                flecha2.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar3.classList.contains("expandir"))
            {
                textoParaDesplegar3.classList.remove("expandir");
                flecha3.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar3.classList.add("expandir");
                flecha3.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar4.classList.contains("expandir"))
            {
                textoParaDesplegar4.classList.remove("expandir");
                flecha4.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar4.classList.add("expandir");
                flecha4.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar5.classList.contains("expandir"))
            {
                textoParaDesplegar5.classList.remove("expandir");
                flecha5.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar5.classList.add("expandir");
                flecha5.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar6.classList.contains("expandir"))
            {
                textoParaDesplegar6.classList.remove("expandir");
                flecha6.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar6.classList.add("expandir");
                flecha6.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar7.classList.contains("expandir"))
            {
                textoParaDesplegar7.classList.remove("expandir");
                flecha7.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar7.classList.add("expandir");
                flecha7.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar8.classList.contains("expandir"))
            {
                textoParaDesplegar8.classList.remove("expandir");
                flecha8.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar8.classList.add("expandir");
                flecha8.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar9.classList.contains("expandir"))
            {
                textoParaDesplegar9.classList.remove("expandir");
                flecha9.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar9.classList.add("expandir");
                flecha9.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar10.classList.contains("expandir"))
            {
                textoParaDesplegar10.classList.remove("expandir");
                flecha10.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar10.classList.add("expandir");
                flecha10.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar11.classList.contains("expandir"))
            {
                textoParaDesplegar11.classList.remove("expandir");
                flecha11.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar11.classList.add("expandir");
                flecha11.style.backgroundImage = "url(../img/expand-button.png)";
            }
        }
    </script>

    <style type="text/css">
        p
        {
            font-size: 18px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
        }

        p.expandir
        {
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical;
        }

        .flechaExpandir
        {   
            width: 100%;
            height: 20px;
            cursor: pointer;
            background-image: url("../img/expand-button.png");
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }

        .imagenCurso
        {
            width: 500px;
            height: 700px;
        }
    </style>

    <!-- CM -->
    <div id="familiaCM" class="container fw-bold d-flex justify-content-center align-items-center position-relative" style="font-family: 'Montserrat'; margin-top: 8%; margin-bottom: 5%; color: #cb0f22; font-size: 5rem; letter-spacing: 10px;">Comerç i Màrqueting</div>

    <div class="col d-flex justify-content-center align-items-center mb-5" style="margin-bottom: 6%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            Cicles Formatius Grau Mitjà
        </h2>
    </div>
    
    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-mitja-activitats-comercials.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>

        <div class="container d-flex justify-content-center flex-column w-100 h-100">
            <h2 class="fs-2 mb-5" style="font-family: 'Montserrat';">
                Activitats comercials
            </h2>

            <p id="desplegarAC" class="expandir">
                Tot i les amenaces de la globalització, que han fomentat el comerç en línia i la clonació comercial al centre de les capitals mundials més importants, no es pot entendre la Barcelona actual sense el comerç dels barris de la ciutat. Aquests comerços han unit forces i han creat eixos comercials publicoprivats per impulsar un nou tipus de gestió i promoció per aconseguir així idees exitoses com per exemple les rutes de tapes, els itineraris de comerços singulars o el comerç al carrer.

                <br><br>Aquestes iniciatives han pogut sorgir només gràcies al coneixement que el comerç de proximitat té de la seva clientela gràcies al tracte de proximitat del dia a dia. En aquest sentit, aquests establiments necessiten nodrir-se de nous professionals que estiguin, d’una banda, preparats acadèmicament i, d’una altra, que tinguin les competències personals desenvolupades i coneguin la realitat dels barris de la ciutat.

                <br><br>El cicle d’Activitats Comercials prepara professionals per afrontar aquestes necessitats del comerç de proximitat a partir de l’aprenentatge en la millora de l’experiència de compra de la clientela, de les noves tendències del sector o de les oportunitats que ofereixen internet en general, i de les xarxes socials en concret als comerços de la ciutat. Per tant, és el cicle de grau mitjà ideal per a aquells/es joves a qui els agrada el tracte amb les persones i que volen fer del comerç la seva professió.
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir1"></div>
        </div>
    </div>

    <hr class="bg-danger border-3 border-top m-5 border-danger">

    <div class="col d-flex justify-content-center align-items-center mb-5" style="margin-bottom: 6%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            Cicles Formatius Grau Superior
        </h2>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                Màrqueting i publicitat
            </h2>

            <p id="desplegarMP" class="expandir"> 
                Catalunya és terra de petites i mitjanes empreses, de fet, la PIME catalana és una actriu dominant i imprescindible de l’estructura productiva del sector privat. En aquest sentit, la competència cada vegada és més gran i això realça la importància de la capacitat que tenen les marques per comunicar-se amb els/les consumidors/es. El nostre cicle de Grau Superior de Màrqueting i Publicitat et prepararà per ser emprenedor/a, per pensar i executar una idea innovadora en forma d’empresa i comunicar-la de la manera més eficaç.

                <br><br>En el primer curs desenvolupem projectes a partir de metodologies actives ja sigui a l’aula o fora d’ella, com per exemple en escenaris impulsats des de la Xarxa d’Emprenedoria com són l’iFest o els Campaments d’Innovació, on treballem el màrqueting des del prisma de l’empresa i des dels diferents mòduls. En el segon curs seguim amb la metodologia ABP, però en aquest cas resolem demandes de publicitat reals de les empreses que ens envolten al barri o a la ciutat, acostant així la realitat del món laboral a les aules.

                <br><br>Amb aquesta metodologia aconseguim capacitar persones amb perfils molt variats, que podran desenvolupar totes les tasques de comunicació d’una PIME fora de línia i especialment en línia o dur a terme una tasca molt especialitzada dins d’un departament de màrqueting o publicitat en una gran internacional, sense deixar de banda poder esdevenir autònom/a, un perfil molt cercat en el sector.
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir2"></div>
        </div>

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-marqueting-i-publicitat.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-gestio-de-vendes-i-espais-comercials.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>    

        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                Gestió de vendes i espais comercials
            </h2>

            <p id="desplegarGVEC" class="expandir">
                Tot i que els productes seguiran sent el peu de pivot de les botigues, els espais comercials cada vegada agafen més protagonisme. Projectar una identitat pròpia és imprescindible per qualsevol comerç, per tant el disseny de l’espai no només haurà de respondre a criteris purament de venda o de normatives vigents, sinó que haurà d’incorporar l’ànima del projecte a partir d’elements psicosensorials que connectin amb els consumidors.

                <br><br>Interiors florals, tendències vintage o olors particulars, vinculats amb conceptes com el big data, l’omnicanalitat o el click & collect, són elements a tenir en compte des del primer moment que es crea l’estratègia per a implementar un espai físic per a l’activitat comercial.

                <br><br>Aquestes només són algunes de les disciplines del retail design, que es complementaran amb l’eficiència en la logística, l’atenció al client i sobretot el concepte de branding aplicat a la botiga. Tot això des de l’anàlisi de les tendències més actuals, aplicat a projectes d’empreses reals a través dels projectes d’aprenentatge-servei.
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir3"></div>
        </div>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-center flex-column h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                Comerç internacional
            </h2>

            <p id="desplegarCI" class="expandir">
                T’agradaria ser tècnic/a d‘operacions exteriors, coordinador/a logístic/a internacional o consignatari/ària de vaixells? Doncs aquest és el teu cicle i aquesta és la teva ciutat. Barcelona ha esdevingut un centre de negocis de primer nivell europeu gràcies a les startups catalanes que ja superen les 1.200 empreses i generen al voltant de 12.000 llocs de treball.

                <br><br>La majoria d’aquestes startups tenen una gran projecció internacional, i això vol dir, que també tenen una gran necessitat de personal tècnic qualificat per dur a terme la seva activitat a l’estranger. En aquest sentit, el cicle formatiu de grau superior de Comerç Internacional és el cicle que dona resposta a aquesta necessitat, capacitant a professionals que puguin planificar i gestionar els processos d’importació i exportació de mercaderies en el marc dels objectius i procediments establerts.
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir4"></div>
        </div>

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-comerc-internacional.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    </div>

    <hr class="bg-danger border-3 border-top m-5 border-danger">

    <!-- HT -->
    <div id="familiaHT" class="container fw-bold d-flex justify-content-center align-items-center position-relative" style="margin-top: 5%; margin-bottom: 3%; color: #4e377c; font-size: 5rem; letter-spacing: 10px;">Hosteleria i turisme</div>

    <div class="col d-flex justify-content-center align-items-center mb-5" style="margin-bottom: 6%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            Cicles Formatius Grau Superior
        </h2>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-agencies-de-viatges-i-gestio-desdeveniments.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>

        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                Agéncies de viatges i gestió d'esdeveniments
            </h2>   

            <p id="desplegarAVGE" class="expandir">
                El turisme urbà és un fenomen que des dels inicis dels anys 90 ha fet que el sector turístic hagi esdevingut un sector a l’alça. A Barcelona ho veiem cada dia amb el desenvolupament creixent d’activitats turístiques, ja siguin promogudes des del sector privat o des de l’administració pública, com ara l’ens Turisme de Barcelona o el mateix Ajuntament.

                <br><br>En aquest sentit, podem afirmar que Barcelona és una destinació turística de primer ordre, tant pels seus atractius culturals, que van des de la xarxa de museus de la ciutat fins la cultura popular i tradicional, com per tot el seu Modernisme o la mateixa Sagrada Família. A més, és molt atractiva per a altres actius com el Futbol Club Barcelona, el Primavera Sound o les fires i congressos com el Mobile World Congress.

                <br><br>Dins d’aquest context, els projectes acadèmics amb què treballem connecten amb la necessitat de persones qualificades i especialitzades capaces de crear una ruta turística personalitzada, de fer una reserva (amb Amadeus: obtindràs un diploma acreditatiu), d’organitzar i de gestionar un congrés, una passarel·la de moda, una fira o un festival de música… sempre responent a les necessitats de la clientela.

                <br><br>No ho dubtis, el teu present té un futur a Barcelona i es diu Agències de Viatges i Gestió d’Esdeveniments.
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir5"></div>
        </div>
    </div>

    <hr class="bg-primary border-3 border-top m-5 border-primary">

    <!-- IC -->
    <div id="familiaIC" class="container fw-bold d-flex justify-content-center align-items-center position-relative" style="font-family: 'Montserrat'; margin-top: 5%; margin-bottom: 3%; color: gold; font-size: 5rem; letter-spacing: 10px;">Informàtica</div>

    <div class="col d-flex justify-content-center align-items-center mb-5" style="margin-bottom: 6%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            Cicles Formatius Grau Mitjà
        </h2>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                Sistemes Microinformátics i Xarxes (SMIX)
            </h2>

            <p id="desplegarSMIX" class="expandir">
                L’assistència tècnica a domicili, la reparació d’ordinadors o el suport tècnic són tres pilars fonamentals del servei tècnic informàtic. Sigui dedicat a empreses o a particulars, qualsevol d’aquesta assistència es basarà en l’optimització d’equips connectats en xarxa, així com la configuració d’internet són bàsics en una societat on el món digital cada vegada guanya més protagonisme.

                <br><br>La reparació de servidors, així com el control d’atacs informàtics o de programari maliciós és molt important en l’ús personal, però d’una magnitud total en el món laboral, on la protecció de dades dels clients és cabdal pel bon funcionament de transaccions comercials.

                <br><br>Així doncs, un bon servei tècnic preventiu és la millor garantia per evitar problemes importants a mig i llarg termini. Allargant la vida de la maquinària i garantint el correcte ús dels treballadors de l’empresa.
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir6"></div>
        </div>

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-mitja-sistemes-microinformatics-i-xarxes.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    </div>

    <hr class="bg-warning border-3 border-top m-5 border-warning">

    <div class="container d-flex justify-content-center align-items-center" style="margin-bottom: 5%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            Cicles Formatius Grau Superior
        </h2>
    </div>     
    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-desenvolupament-aplicacions-multiplataforma.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                Desenvolupament d'Aplicacions Multiplataforma (DAM) 
            </h2>

            <p id="desplegarDAM" class="expandir">
                El món de les aplicacions continua creixent i s’està convertint en una forma d’entendre la comunicació, les relacions, la feina i moltes de les tasques del nostre dia a dia.

                <br><br>Aprendràs a crear aplicacions plenament integrades en la nostra quotidianitat: al mòbil, a l’escriptori, al cotxe, al rellotge o a la cuina. Dominaràs els millors entorns de programació i sistemes gestors de bases de dades per crear una experiència d’usuari òptima. Dissenyaràs aplicacions per facilitar les tasques diàries a milions de persones i entendràs que, en un món on la tecnologia és la protagonista, només la teva imaginació marcarà els límits d’allò que pots fer.

                <br><br>Barcelona és una de les ciutats més importants d’Europa quant a la creació d’empreses tecnològiques. Aquí, hi han nascut petites idees empresarials que s’han acabat convertint en les aplicacions més descarregades i usades per les persones usuàries.

                <br><br>Forma part d’un dels mercats laborals que més talent atreu arreu del món i deixa’t endur pels teus somnis. Potser tu arribis a crear la propera xarxa social que totes i tots farem servir d’aquí a uns anys.
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir7"></div>
        </div>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                Desenvolupament d'Aplicacions Web (DAW)
            </h2>

            <p id="desplegarDAW" class="expandir">
                Actualment, tot allò que no té presència a Internet, no existeix. El web s’ha convertit en la finestra al món, en la nostra manera de relacionar-nos, de treballar, d’aprendre, de divertir-nos… Però com podem millorar la utilitat, l’accessibilitat i la usabilitat d’un web? Com podem fer que aquesta finestra es converteixi en una porta cap a tot un món de comunicació i de relació amb la persona usuària?

                <br><br>Aquests són els reptes als quals s’enfronten les programadores i els programadors d’eines web. En aquest cicle aprendràs a connectar clients i servidors fent servir frameworks professionals per tal d’aconseguir el millor disseny i oferir una òptima presència d’empreses i altres organitzacions a internet. Alhora, entendràs com proporcionar la millor experiència a les persones usuàries millorant una eina que fan servir milions de persones diàriament.

                <br><br>Barcelona s’ha convertit en un imant de talent pel que fa a les noves tecnologies web. En aquesta ciutat, s’hi han creat petites empreses que han acabat convertint-se en idees molt valuoses amb milions de visites web i milions d’usuaris/àries arreu del món.

                <br><br>Forma’t i prepara’t per entrar en un mercat laboral en transformació constant.
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir8"></div>
        </div>

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-desenvolupament-aplicacions-web.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    </div>

    <hr class="bg-warning border-3 border-top m-5 border-warning">

    <!-- AG -->
    <div id="familiaAG" class="container fw-bold d-flex justify-content-center align-items-center position-relative" style="font-family: 'Montserrat'; margin-top: 5%; margin-bottom: 3%; color: green; font-size: 5rem; letter-spacing: 10px;">Administració i Gestió</div>ç

    <div class="container d-flex justify-content-center align-items-center" style="margin-bottom: 5%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            Cicles Formatius Grau Mitjà
        </h2>
    </div>   

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-mitja-gestio-administrativa.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>

        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                Gestió administrativa
            </h2>

            <p id="desplegarGA" class="expandir">
                Al cicle formatiu de Gestió Administrativa treballaràs dintre del projecte SEFED i crearàs una empresa a l’aula anomenada Smartly per tal de simular la realitat i el dia a dia dels diferents departaments que la formen: operacions, tresoreria, pagament d’impostos… fins i tot recursos humans i màrqueting.

                <br><br>Passaràs per cadascun dels departaments necessaris per crear una empresa i gestionar-la professionalment, estaràs en contacte amb altres empreses simulades de tot el món i arribaràs a generar compres i vendes en un entorn al més semblant possible a la realitat.

                <br><br>Perquè gran o petita, l’empresa és present arreu. En un entorn canviant on les normatives evolucionen ràpidament, la seva direcció precisa el suport de professionals que s’hi adaptin. La seva gestió en els àmbits comercials, financers i comptables és garantia d’un bon desenvolupament econòmic i de l’èxit professional.
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir9"></div>
        </div>
    </div>

    <hr class="bg-success border-3 border-top m-5 border-success">

    <div class="container d-flex justify-content-center align-items-center" style="margin-bottom: 5%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            Cicles Formatius Grau Superior
        </h2>
    </div> 

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                Administració i finances
            </h2>

            <p id="desplegarAF" class="expandir">
                Al cicle formatiu d’Administració i Finances treballaràs dintre del projecte SEFED i crearàs una empresa a l’aula anomenada Smart Office per tal de simular la realitat i el dia a dia dels diferents departaments que la formen: operacions, tresoreria, pagament d’impostos, recursos humans i màrqueting.

                <br><br>Passaràs per cadascun dels departaments necessaris per crear una empresa i gestionar-la professionalment. Estaràs amb contacte amb altres empreses simulades de tot el món i arribaràs a generar compres i vendes en un entorn al més semblant possible a la realitat.

                <br><br>Perquè gran o petita, l’empresa és present arreu. En un entorn canviant on les normatives evolucionen ràpidament, la seva direcció precisa el suport de professionals que s’hi adaptin. La seva gestió en els àmbits comercials, financers i comptables és garantia d’un bon desenvolupament econòmic i de l’èxit professional.
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir10"></div>
        </div>

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-administracio-i-finances.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-assistencia-a-la-direccio.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
        
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                Assisténcia a la direcció
            </h2>

            <p id="desplegarAD" class="expandir">
                Tens les habilitats necessàries per ser un/a professional en l’àmbit de l’empresa? El potencial econòmic i comercial del nostre país afavoreix la presència d’una gran quantitat d’empreses locals i estrangeres en què l’assistència a la direcció es converteix en una peca fonamental per garantir que els objectius de l’empresa es puguin assolir. Converteix-te en una persona de confiança, capaç de gestionar l’agenda de l’empresa i les comunicacions dels alts càrrecs de l’organització, i amb les eines necessàries per organitzar esdeveniments i assumir tasques administratives.

                <br><br>En un món on la tecnologia està més present en tots els àmbits de la vida, la capacitat de relacionar-se personalment és fonamental per tal de marcar la diferència. Et convertiràs en un/a professional amb coneixements de diverses llengües i d’eines informàtiques que facilitaran el dia a dia de la teva organització.
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir11"></div>
        </div>
    </div>

    <!-----------------FOOTER----------------->  
    <?php
        include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
    <script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
</body>
</html>

<!-- PARA OCULTAR TEXTO Y VOLVERLO A MOSTRAR -->

<!-- CSS

    .hola{
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

-->

<!-- JAVASCRIPT

    Añadir la classe .hola al elemento HTML.

-->