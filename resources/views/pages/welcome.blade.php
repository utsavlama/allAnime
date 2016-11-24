<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name = "viewport" content="width=device-width, initial-scale=1">

        <title>AllAnime - Its all about anime</title>

        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type = "text/javascript" src = "{{ URL::asset('semantic/semantic.min.js') }}" > </script>
        <script type = "text/javascript" src = "{{ URL::asset('semantic/semantic.js') }}" > </script>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link href="{{ URL::asset('semantic/semantic.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('semantic/semantic.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
        
    </head>
    <body>

        <!--menu-->
        <div class="ui stackable borderless menu fixed" >
                <div class = "smallerScreenSearch menu item" style = "padding: 0em 0em 0em 0em;">
                    <div class="header item">
                        <div class="ui small image">
                          <img src = "/images/logo/Logo1.png" class = "logo">
                        </div>
                    </div>


                    <div class="item ">
                            <div class="ui action left icon input">
                                <div class="ui fluid category search">
                                    <div class="ui icon input">
                                        <input class="prompt" type="text" placeholder="Search Anime....">
                                    </div>
                                    <div class="results"></div>
                                </div>
                                <button class="ui icon button">
                                    <i class="search icon"></i>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="right menu">  
                    <div class="item">
                        <button class = "ui button icon yellow">
                            Sign In
                        </button>
                    </div>

                    
                </div>
                <div class="ui menu">
                    <div class="item ui top right pointing dropdown" tabindex="0">
                        <div class="largerScreenMenu"><i class="list icon largerScreenMenu" ></i></div>
                        <i class = "smallerScreenMenu "> <h3>Menu</h3></i>
                        <div class="menu" tabindex="-1">
                              <div class="item">Action</div>
                              <div class="item">Another Action</div>
                              <div class="item">Something else here</div>
                              <div class="divider"></div>
                              <div class="item">Separated Link</div>
                              <div class="divider"></div>
                              <div class="item">One more separated link</div>
                        </div>
                    </div>    
                </div>
        </div><!--menu-->

        <!--secondary menu container-->
        <div class = "ui container secondaryMenu">
            <!--secondary menu-->
            <div class="ui borderless pointing fluid three item menu">
                <div class = "item">Home</div>
                <div class = "item">Most Popular</div>
                <div class = "item">Favourites</div>
            </div><!--secondary menu-->

        </div><!--secondary menu container-->

        <!--dropdown initialization-->
        <script type = "text/javascript">

            $('.ui.dropdown')
                .dropdown()
            ;         

        </script><!--dropdown initialization-->

       
        <!--content container-->
        <div class = "ui padded container segment">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Venustate iusto clariora dixi expetendum, harum oratoribus quisquis probabis ratione partus odio copiosae gaudeat. Angore conciliant magnam molestiae iucunditas, idque conscientiam utens, ferae circumcisaque patria desideret. Suspicio insatiabiles aperiam repellat scribere, homine terminatas perferendis impensa possent definitiones remissius explicatis omnino, argumentandum epicurus, quid quidem artes amputata disciplinis dubitemus, romano invitat pleniorem statuat ferreum praestabiliorem, appetendum, metus amicitiam facilis pronuntiaret efficiatur, modus profecto nulli putemus brevi relinqueret liberemus mox paranda prosperum, ponderum, pellat.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perpetiuntur pulcherrimum excelsus approbantibus sublata pueros. Pro. Sua inveneris porro accusantibus acute monet insatiabiles, admirer qui chremes nominis bonorum praesens, probaretur consuevit exorsus. Allicit horum ferant athenis ludicra nihil rem, dirigentur pro tribuat ignota disserendi ferreum copiosae deserere consuetudinum voluntates, negant repellat caritatem honeste dolores graecis bello dicunt expectamus quiete, sis praeda arbitrarer sensibus consequentium continens contemnit efficiat, dirigentur praeclaram fugienda praeterea sedulitatem derigatur efficiat utilitatibus scientiam naturalem, quodsi motu electis vituperari.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vivendum officia utilitatibus meis penitus iudico minus dicenda dixit, retinent inutile suam eiusdem, saperet eligendi. Id tuentur deinde gubernatoris filio respondendum nasci acutum statim iustitia, finitum admonitionem laborum efficere graecum ancillae scribi, maior superstitio incidunt probabo posteri certae vivendum quibus. Sero pariatur conclusum dolorem cogitarent naturam hominum appetendum, maximis sum, monstret odia tractavissent huius, nec pecuniae mollis laetitia statu singulos ceteris, filium nostro approbantibus placet, provocatus cogitavisse incursione, conficiuntque saluti recte eum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur exultat defendere, doloremque quidque intereant praesentium referta atilii, molestias aliqua, pericula repellere prima ennii laudatur dicturum nullae coniuncta. Quanta temeritas aliquam veritus afferrent pacto censes alliciat avocent. Tranquillitatem omnis nominavi ludus iste. Optari soleat nominavi percurri numquid, sollicitudines varias elaboraret optari aristoteli spe, unum gravitate deseruisse movere altera, vivamus interesse existunt ars stoicos, statuat te deterruisset mundus procedat lucilius iudicatum assecutus notae. Procedat maximo genus conetur semel unum pertinacia quas conducunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inbecilloque convenire futuris magnos involuta mollis veri, pertinax caelo ille faciunt confidere velim sensibus, percipi desiderare, iusteque sanciret dicturum summis familiaritatem multis definitiones probet malum. Disserui intellegam ostendit oportet tractat deinde quaeque volunt urbanitas id, vacillare sabinum dicere possim controversia amorem geometria sanguinem, gloriatur suapte ipse sero enim, alterum quidam diceret prima poetarum turbulentaeque simulent nulla muniti levius, defendere quamvis insitam pueros atomos, turma, ignorare interpretaris texit pertinacia legendam repugnantiumve licebit meo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Platone aiebat referuntur gustare fabellas suaviter careat affert aspernari sapientiamque, ignavi. Copulationes morbi erigimur utilitatibus solet, numeris falsarum attulit philosophi graeco sophocles, temperantia beata tantas detracto desistunt. Desiderabile divitias multitudinem plane tanta dicemus labitur istam. Haec excruciant rebus versuum pars animadversionis inprobitatem, ficta dissentias generibusque morborum segnitiae aristippi detractis, locus, suscipit, tranquilli discedere supplicii puto oritur aiunt vivere deterret, contra legatis quin infinitio sentiunt antiopam defenditur pueri. Delicatissimi ponderum degendae vituperandae spe.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magna notae, nihilo splendore delectu. Loqueretur illo putet gravioribus vitae reliquerunt faciant aliud. Sinat eruditionem seiunctum capti, gaudere disserendum, aptius humili amet erimus iudicio. Proposita frui ingenia discordant, inducitur nullam reprehendunt vera primo malo congressus, defensa fuisset illae deinde desiderent cetero quaerimus efficerent. Suspicor nihilo, eitam scripta improbe falli intellegitur iactant utramque nominant defenditur. Diuturnum rebus accuratius, privamur itaque intervenire difficilem cotidieque, qua intemperantiam vivendum infanti illud manus stabilitas videantur nullam, horrent.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboribus eitam tradere latine conciliant efficere spatio magnosque magnitudinem, doctrinis affert tolerabiles admodum tollitur stulti fidelissimae munere sophocles oderit. Omni ancillae huic patrioque adhibenda ornamenta accedis, repellere offendit. Arbitraretur celeritas adhaesiones. Perspiciatis pater voluptate putarent, fautrices sequamur, dicitur municipem torquatos significet expectamus seiungi valetudinis deseruisse homero. Potest fruuntur fatemur causae lineam persius tam confidam videro tranquilli, perferendis iniuria specie consule, praesertim mors optinere ait praesenti, deorsus mortis dissentio quoddam tradidisse probant. Concederetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placet vacare easque contenta. Macedonum plena probaturum unam astris rudem existunt omnem finibus, quocirca inventore veniat ea potius suscepi affirmatis morte. Inprobitas mens, quaerenda habeatur congressus illo, extremum labefactetur. Scribendi, ecce concedo aliquid gratissimo praesidium consentaneum exercitus honeste animi copiosae, quosdam accedunt perspiciatis electis commodis, viveremus sapientiam dicant ferri torquatis venire ergo aeque lineam sentiunt, optio consule iucunditate nati gaudere proprius laudari expedita sis, petentium dedocere eius mel, meque fruentem ferantur eveniunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fames gaudere contentiones contra facillimis vexetur venustate ducimus impeditur invenire, suscepi historiae turbulenta inutile consequuntur beateque electram cogitavisse haec, praetermittatur erudito imperiis probarent amorem tenetur propterea afflueret nacti indocti, damna civitas is putant iucundum, eumque afferre greges declinabunt adhibenda, malarum aliter disputatum explicatam augeri pluribus polyaeno. Erunt studio desiderant disciplinae vitam sibi, provocarem tria nos videtur stabilitas sin torquatus synephebos, studiis graece, expeteremus videtis licet dicturum egregios facillime, beatam copulationes c eripuit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Brute concessum studium. Virtutibus specie ardore, an confectum facile diligi innumerabiles maximasque possit necessitatibus. Earumque vitae dixeris rutilius explicatis obligantur inclusae. Habent nivem huius captiosa turbent facilis stoici beatam nemini, detracto sol videatur efficiendi efficere nostris, tantis poterimus inciderint voluerint labitur quisque nasci tuentur. Videretur praeterierunt asperiores putat fidelissimae legam reiciendis vituperatum omnia, erga dolemus memoria antiquitate comprehenderit doloris veritatis deterius instituendarum nacti, habet severa uti num, cyrenaicos linguam aetatis omnes tamque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Solet. Sive commodius quales quisquis divina philosophis sapientiamque quosvis. Discordant carum voluerint duxit cogitemus inani finibus, inter deterret quale intervalla breviter, deorsus apeirian augeri faciam amicitia legant, incurrunt solitudo provincia sentiri, incurreret oderis, dicturum versatur habuit, video admirer quanta, stultus eveniunt, venustate numen audiebam putat praeterita interea. Conectitur cupiditates aut futuros volunt docere modi sedatio, lectorem permagna diu pondere natura vocent theophrastus disputationi isdem, privatio, suaviter venisset parentes suscipiantur cetero reperire veritatis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Apte proposita doctiores perfunctio vicinum stare despicationes, coniunctione urbanitas reici imperiis, sequamur umquam possim confirmavit. Religionis malarum electis divelli geometrica sanguinem, contemnentes. Eitam loca optinere dediti eo excruciant fortunam forensibus illa. Gravissimo inpendente totam potitur existimant perpaulum. Metuque commemorandis, coniuncta. Suas quodsi sophocles iucunditatem invenire albucius dicantur efficiat partitio. Menandri, magnis firmam, studiose lucifugi sis male conclusionemque iucundius, sumitur iudicem innumerabiles accessio notissima voluptates. Vexetur, fugit arbitrarer penitus videro concessum usus. Ferreum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ibidem incurrunt efficeretur praeda vos vicinum signiferumque, perpetua laborum cupiditatum consequi viveremus benivole, huius exercitus euripidis facillime conspiratione defendit iuvaret huic. Diligi discordant aequo. Pervenias usus. Terminari firmitatem arridens theophrastus geometriaque impetum iudicante vitium delectet, habemus adiungimus debent animal sensu erudito, omni multa invenerit locis incorrupte censet debent historiae fore, gravioribus, tranquillitate cuius vituperandae gaudere honestatis improbe probaturum, personae peccant segniorem atomum animos isdem negant verborum reliquisti utraque, neque disputatum maluisti pertineant.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Miserum paratus tollunt appellantur dedocendi habet praetulerit mirari, parte moderatio graeci democritum saepti gratia hominum medeam praesidium accurate, gaudere mutae conclusionemque perfruique vidit alienae expressas collegi simplicem. Liberiusque senserit nostris repugnantibus conectitur putent saepe quo minuit partitio, cognitionis intercapedo potiora tantam videantur tollatur statuat voluerint, ingenia adquiescere convincere perturbari illo, versatur graecis loquerer videre tertio segnitiae dominationis lucilius sequitur. Sollicitant vivi maerores tempus deteriora idcirco cui ingenia accessio, existimant vacare negant desideret.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libro pariter voluptates defensa, potest menandri dicenda. Utrum nec. Incursione poterit notionem. Nomini exercitus ceterorum. Possum ipse armatum, multitudinem queo canes iucunditate scribi alii audiebam discenda saepti. Individua voluptati, genus utilitate ibidem animadversionis constantia continent iniuria, adipisci. Infinito primus occultum ipsarum cogitarent gaudemus atque, tollunt nonne menandri ortum, huius illaberetur quisquis aliqua iudicia sedatio atomi qua ponderum ferae, intelleges quaeri inprobitatem. Assecutus putamus, corporisque brevis scripta graeca scaevola. Electram principes evolutio vivamus.

        </div><!--content container-->

        <!--footer-->
        <div class="ui inverted vertical footer segment">
            <div class="ui container">
                <div class="ui stackable inverted divided equal height stackable grid">
                    <div class="three wide column">
                        <h4 class="ui inverted header">About</h4>
                        <div class="ui inverted link list">
                            <a href="about" class="item">About us</a>
                            <a href="contact" class="item">Contact Us</a>
                        </div>
                    </div>
                    <div class="three wide column">
                        <h4 class="ui inverted header">Services</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Banana Pre-Order</a>
                            <a href="#" class="item">FAQ</a>
                            <a href="#" class="item">How To Access</a>
                            <a href="#" class="item">Favorite X-Men</a>
                        </div>
                    </div>
                    <div class="seven wide column">
                        <h4 class="ui inverted header">AllAnime</h4>
                        <p> Copyrights and trademarks for the anime, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law</p>
                    </div>
                </div>
            </div>
        </div><!--footer-->



    </body>
</html>
