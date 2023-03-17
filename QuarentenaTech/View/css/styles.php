<style>
  body {

    /* background-image: url("img/velhinhas_background2.png");*/
    /* cores de texto */
    --text-white: #ffffff;
    --text-dark: #142136;
    --text-black: #000000;
    --bg-image:url("img/velhinhas_background2.png");
    /* cores de fundo */
    --bg-grey-light: #1d2430d8;
    --bg-white: #ffffff;
    --bg-dark: #000000a6;
    --bg-indigo: #6366f1;
    --border-c-light:#ffffff;
    --bg-nav-dark: hsla(0, 0%, 0%, 0.5);
    --bg-check:#ffffff;


    font-family: Bahnschrift, Trebuchet;
    line-height: 1.7;
    background-image: var(--bg-image);
    border: var(--border-c-light);
  }

  .dark /*white*/{
    --text-white: #000000;
    --text-dark: #ffffff;
    --bg-grey-light:#e8e5e5d5;
    --bg-white: #22395d;
    --bg-dark: #0000004e;
    --bg-indigo: #7577e1;
    --border-c-light:#3a3a3a;
    --bg-check:#142136;
    --bg-nav-dark: #ffffff;
  }

  .coronatema {
    background-image: url("img/background_corona.png");
  }

  .velhatema {
    background-image: url("img/velhinhas_background2.png");
  }

  .btn-enviar2 {
    background-color: #ffffff33;
    /*  color: white;*/
    border-color: #000000b3;
    ;
    width: 55%;
    margin-left: 1%;
  }

  .form-tema-one {
    margin-top: 2%;
    margin-left: 23%;
    /* color: white;*/
    background-color: #000000b3;
    width: 50%;
    height: 30%;
  }

  .form-tema-two {
    margin-left: 2%;
    /* color: white;*/
    background-color: hsla(0, 0%, 0%, 0.4);
    width: 100%;
    height: 20%;
  }

  .form-tema-three {
    margin-top: 0.5%;
    margin-left: 20%;
    /* color: white;*/
    background-color: hsla(0, 0%, 0%, 0.65);
    width: 60%;

  }

  #teste {
    background-color: blue;
  }

  .style {
    margin: 0px;
    width: 100%;
    background-color: hsla(0, 0%, 0%, 0.4);
  }

  .style2 {
    width: 96%;
    margin: 0 0 0 2%;
  }

  .p1 {
    font-size: 18pt;
    /*color: white;*/
    margin: 0 0 0 44%;
  }

  p {
    font-size: 12pt;
    /* color: white;*/
    margin: 0 0 0 0%;
  }

  .border-right {
    border-right: 0.5px solid #dee2e6 !important;
  }

  #scrollbar {
    overflow-y: scroll;
    height: 344px;
    width: 96%;

  }

  #scrollbar2 {
    overflow-y: scroll;
    height: 350px;
    width: 96%;

  }

  .drop-tema {
    background-color: hsla(0, 0%, 0%, 0.5);
    margin: 10px 0 0 30px
  }

  /*cabeçalho -- estiliza a fonte do navbar*/
  .nav-cor {
    color: hsl(0, 0%, 82%);

  }

  /*cabeçalho -- estiliza a navbar*/
  .main-nav {
    background-color: var(--bg-nav-dark);
    height: 46px
  }

  /*cabeçalho -- estiliza o form do toggle*/
  .form-tc {
    margin-top: 5px;
    margin-left: 10px;
    margin-bottom: 5px
  }

  /*cabeçalho*/
  .ml60p {
    margin-left: 60px
  }

  /*cabeçalho*/
  .ml900p {
    margin-left: 900px
  }

  /*cabeçalho*/
  .ml20 {
    margin-left: 20%;
  }

  .size {
    height: 1%;
  }

  /*tela jogo -- cria espaço para jogo*/
  #jogospace {
    height: 442px;
    width: 73%;
    margin-left: 8%;
    margin-top: 1%;
  }

  /*index*/
  .ml5 {
    margin-left: 5%;
  }

  /*index -- form principal */
  .form-tema {
    margin-top: 5%;
    margin-left: 23%;
    color: var(--text-white);
    background-color: var(--bg-grey-light);
    border: 1px solid var(--border-c-light)!important;
    width: 50%;

  }

  /*index - Botões Enviar e Entrar*/
  .btn-enviar {
    background-color: #254174;
    color: #ffffff;
    border-color: #ffffff66;
    width: 30%;
    margin-left: 59%;
    margin-bottom: 5%;
  }

  /*index -- forms Cadastro*/
  .boxC {
    border-color: var(--bg-white);
    background-color: var(--bg-dark);
    width: 90%;
    margin-right: 10%;
    /* color: #495057;*/
  }

  /*index -- placeholder Login #000000a6*/
  .boxL {
    border-color: var(--bg-white);
    background-color: var(--bg-dark);
    width: 88%;
  }


  /*index -- form Cadastro*/
  .cadstyle {
    margin-left: 27%;
    margin-bottom: 8%;
  }

 .bl{
  border-color: var(--border-c-light);
 }

  /*index -- form Login*/
  .logstyle {
    margin-left: 35%;
    margin-bottom: 8%;
  }

  /*index -- tema linha 24*/
  .div-tema {
    /* color: white;*/
    
    margin-left: 37%;
    margin-bottom: 4%;
    margin-top: 10px;
  }

  /*index e cabeçalho -- icones sol e lua tema branco*/
  .icon-white {
   color: var(--text-white) ;
  }

  /*index e cabeçalho -- Checkbox*/
  .container2 {
    /* color: #dee2e6;*/
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 10px;
    cursor: pointer;
    font-size: 16px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  /*index  e cabeçalho-- Hide the browser's default radio button*/
  .container2 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
  }

  /*index e cabeçalho -- checkbox*/
  .checksize {
    margin-left: 5%;
    margin-bottom: 10px;

  }

  /*index e cabeçalho -- Create a custom radio button*/
  .checkmark2 {
    position: absolute;
    top: 3px;
    left: 10px;
    height: 16px;
    width: 16px;
    border-radius: 50%;
    border: 1px solid var(--border-c-light)!important;
  }

  /* On mouse-over, add a grey background color */
  .container2:hover input~.checkmark2 {
    background-color: var(--bg-grey-light);
  }

  /* When the radio button is checked, add a blue background */
  .container2 input:checked~.checkmark2 {
    background-color: var(--bg-grey-light);
  }

  /* Create the indicator (the dot/circle - hidden when not checked) */
  .checkmark2:after {
    content: "";
    position: absolute;
    display: none;
  }

  /* Show the indicator (dot/circle) when checked */
  .container2 input:checked~.checkmark2:after {
    display: block;
  }

  input[type="checkbox"] {
    height: 5;

  }

  /* Style the indicator (dot/circle) */
  .container2 .checkmark2:after {
    top: 2px;
    left: 2px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: var(--bg-check);
  }

  /* #imagevelha {
    image: url("img\velhahashitag.png");
  }*/
</style>