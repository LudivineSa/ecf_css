<?php include('parts/header.php'); ?>
<header class="header-contact"> 
    <div class="container">
        <h1 class="text-center fontsize48 sb mt4 mb-4">Nous contacter</h1>
    </div>
</header>
<main class="main-contact">
    <div class="container">
        <form class="grid2 gap3 gap4row">
            <div class="groupe1 flex column">
                <label for="name" class="fontsize2 ft-ms mb-2 ">Votre nom</label>
                <input type="text" id="name" placeholder="Entrez votre nom" class="border-none border-form italic fontsize2 pb-15" required>
            </div>
            <div class="groupe2 flex column">
                <label for="email" class="fontsize2 ft-ms mb-2">Votre email</label>
                <input type="email" id="email" placeholder="Entrez votre email" class="border-none border-form italic fontsize2 pb-15" required>
            </div>
            <div class="groupe3 flex column grid1-1">
                <label for="msg" class="fontsize2 ft-ms mb-2">Votre message</label>
                <textarea id="msg" required placeholder="Tapez votre message" rows="5" class="border-none border-form italic fontsize2 pb-15"></textarea>
            </div>
            <button class="flex center w18 justify-end box-orange mb-4 grid2-3 btn bg-orange align-center self-left mtb-1r b-radius5 scale0 hoverborderwhite ft-sm-sb color-fff"> Envoyer
            <img src="img/fleche.svg" alt="fleche vers la droite" class="mgl-1">
            </button>
           
        </form>
    </div>
</main>
<?php include('parts/footer.php'); ?>
